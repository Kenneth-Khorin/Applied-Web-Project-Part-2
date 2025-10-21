<?php
// jobs.php — Task 5: render all jobs dynamically from DB 
require_once 'settings.php';

function h($s){ return htmlspecialchars($s ?? '', ENT_QUOTES, 'UTF-8'); }

// Discover columns in jobs table
$colsRes = $conn->query("SHOW COLUMNS FROM jobs");
$jobCols = [];
while ($c = $colsRes->fetch_assoc()) { $jobCols[strtolower($c['Field'])] = true; }

// Your key is job_id (from screenshot)
$jobKeyCol = 'job_id';

// Allowed sort fields based on existing columns
$allowedSorts = array_values(array_intersect(['title', 'reports_to', $jobKeyCol], array_keys($jobCols) + [$jobKeyCol => true]));
if (!$allowedSorts) $allowedSorts = [$jobKeyCol];
$orderBy = in_array($_GET['sort'] ?? '', $allowedSorts, true) ? $_GET['sort'] : $allowedSorts[0];
$orderDir = (($_GET['dir'] ?? '') === 'asc') ? 'ASC' : 'DESC';

// Optional search term across present columns
$term = trim($_GET['q'] ?? '');
if ($term === '') {
  $sql = "SELECT * FROM jobs ORDER BY $orderBy $orderDir";
  $stmt = $conn->prepare($sql);
} else {
  $like = "%$term%";
  $parts = [];
  $types = '';
  $vals  = [];
  foreach (['title','description','reports_to'] as $c) {
    if (isset($jobCols[$c])) { $parts[] = "$c LIKE ?"; $types.='s'; $vals[]=$like; }
  }
  if (!$parts) { $sql = "SELECT * FROM jobs ORDER BY $orderBy $orderDir"; $stmt = $conn->prepare($sql); }
  else {
    $sql = "SELECT * FROM jobs WHERE (" . implode(' OR ', $parts) . ") ORDER BY $orderBy $orderDir";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param($types, ...$vals);
  }
}
$stmt->execute();
$jobs = $stmt->get_result();

// Helpers for optional bullet tables
function table_exists(mysqli $conn, string $t): bool {
  $t = $conn->real_escape_string($t);
  $r = $conn->query("SELECT COUNT(*) c FROM information_schema.tables
                     WHERE table_schema = DATABASE() AND table_name = '$t'");
  return (int)($r->fetch_assoc()['c'] ?? 0) > 0;
}
function fetch_bullets(mysqli $conn, string $table, string $keyCol, string $jobKey): array {
  if (!table_exists($conn, $table)) return [];
  $stmt = $conn->prepare("SELECT * FROM `$table` WHERE `$keyCol`=?");
  $stmt->bind_param("s", $jobKey);
  $stmt->execute();
  $res = $stmt->get_result();
  if (!$res || $res->num_rows === 0) return [];
  $row = $res->fetch_assoc();
  $bul = [];
  foreach ($row as $col => $val) {
    if (stripos($col, 'bp') === 0 && trim((string)$val) !== '') $bul[] = $val;
  }
  return $bul;
}
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Jobs • ATIE</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    :root{--ink:#111827;--sub:#6b7280;--bg:#f8fafc;--card:#ffffff;--br:#e5e7eb;--brand:#2563eb;}
    body{margin:0;font-family:system-ui,-apple-system,Segoe UI,Roboto,Arial,sans-serif;background:var(--bg);color:var(--ink);}
    .wrap{max-width:1000px;margin:auto;padding:24px;display:grid;gap:18px}
    h1{margin:8px 0 0}.sub{color:var(--sub)}
    .toolbar{display:flex;gap:10px;align-items:center;flex-wrap:wrap}
    input[type="search"],select{padding:10px 12px;border:1px solid var(--br);border-radius:10px}
    .card{background:var(--card);border:1px solid var(--br);border-radius:14px;padding:18px;display:grid;gap:8px}
    .chip{display:inline-block;border:1px solid var(--br);padding:4px 8px;border-radius:999px;margin-right:6px;font-size:12px;background:#f9fafb}
    ul{margin:.4rem 0 .6rem 1.2rem}
    .btn{display:inline-block;background:var(--brand);color:#fff;padding:10px 14px;border-radius:10px;text-decoration:none}
    .row{display:flex;justify-content:space-between;gap:10px;align-items:center;flex-wrap:wrap}
    .empty{padding:20px;border:1px dashed var(--br);border-radius:12px;background:#fff}
  </style>
</head>
<body>
  <main class="wrap">
    <header>
      <h1>Open Roles</h1>
      <p class="sub">This page renders directly from the database.</p>
    </header>

    <form class="toolbar" method="get" action="jobs.php">
      <input type="search" name="q" placeholder="Search jobs…" value="<?php echo h($term); ?>">
      <label>Sort:
        <select name="sort">
          <?php foreach ($allowedSorts as $s): ?>
            <option value="<?php echo h($s); ?>" <?php if($orderBy===$s) echo 'selected'; ?>>
              <?php echo h(ucwords(str_replace('_',' ',$s))); ?>
            </option>
          <?php endforeach; ?>
        </select>
      </label>
      <label>Dir:
        <select name="dir">
          <option value="desc" <?php if($orderDir==='DESC') echo 'selected'; ?>>Desc</option>
          <option value="asc"  <?php if($orderDir==='ASC')  echo 'selected'; ?>>Asc</option>
        </select>
      </label>
      <button type="submit">Apply</button>
    </form>

    <?php if ($jobs->num_rows === 0): ?>
      <div class="empty">No jobs found. Add rows to <strong>jobs</strong> and reload.</div>
    <?php endif; ?>

    <?php while ($j = $jobs->fetch_assoc()): ?>
      <?php
        $jobKey = $j[$jobKeyCol];
        $title  = $j['title'] ?? '';
        $desc   = $j['description'] ?? '';
        $reports= $j['reports_to'] ?? '';

        $reqBul  = fetch_bullets($conn, 'required_skills',     $jobKeyCol, $jobKey);
        $prefBul = fetch_bullets($conn, 'preferred_skills',    $jobKeyCol, $jobKey);
        $respBul = fetch_bullets($conn, 'responsibilities',    $jobKeyCol, $jobKey);
        $salBul  = fetch_bullets($conn, 'salary_and_benefits', $jobKeyCol, $jobKey);
      ?>
      <article class="card" aria-labelledby="h-<?php echo h($jobKey); ?>">
        <div class="row">
          <h2 id="h-<?php echo h($jobKey); ?>"><?php echo h($title); ?></h2>
          <span class="chip"><?php echo h($jobKeyCol . ': ' . $jobKey); ?></span>
        </div>

        <?php if ($reports): ?>
          <p class="sub">Reports to: <strong><?php echo h($reports); ?></strong></p>
        <?php endif; ?>

        <?php if ($desc): ?>
          <p><?php echo nl2br(h($desc)); ?></p>
        <?php endif; ?>

        <?php if ($reqBul): ?>
          <h3>Required skills</h3>
          <ul><?php foreach ($reqBul as $b) echo '<li>'.h($b).'</li>'; ?></ul>
        <?php endif; ?>

        <?php if ($prefBul): ?>
          <h3>Preferred skills</h3>
          <ul><?php foreach ($prefBul as $b) echo '<li>'.h($b).'</li>'; ?></ul>
        <?php endif; ?>

        <?php if ($respBul): ?>
          <h3>Responsibilities</h3>
          <ul><?php foreach ($respBul as $b) echo '<li>'.h($b).'</li>'; ?></ul>
        <?php endif; ?>

        <?php if ($salBul): ?>
          <h3>Salary &amp; benefits</h3>
          <ul><?php foreach ($salBul as $b) echo '<li>'.h($b).'</li>'; ?></ul>
        <?php endif; ?>

        <p><a class="btn" href="apply.php?job=<?php echo urlencode($jobKey); ?>">Apply for this role</a></p>
      </article>
    <?php endwhile; ?>
  </main>
</body>
</html>
