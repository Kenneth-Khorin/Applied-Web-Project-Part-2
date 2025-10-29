<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Jobs description">
    <meta name="keywords" content="Jobs, Cybersecurity,">
    <meta name="author" content="Kenneth Khorin">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jobs | Vangarde</title>
    <link rel="stylesheet" href="styles/styles.css">
</head>

<body>

    <?php include 'header.inc'; ?>

    <div class="container">
        <img src="images/shieldlogo.png" alt="Vangarde Logo" class="logo">
        <h1 class="title">Career at Vangarde</h1>
        <p class="sub-title">We’re a young and ambitious cybersecurity firm with big plans to expand, and we’re looking for passionate people to grow with us. you’ll have the opportunity to shape our culture, contribute to innovative solutions, and make a real impact as we build and scale. Check out our current job openings below:</p>

        <!--Why Work With us section-->
        <aside>
            <h2>Why Work With us</h2>
            <ol>
                <li>Be part of a growing company: Join us at an exciting stage where your contributions directly shape our future.</li>
                <li>Innovative projects: Work on cutting-edge cybersecurity solutions that challenge the status quo.</li>
                <li>Collaborative culture: We value teamwork, openness, and shared success.</li>
                <li>Professional growth: Opportunities for learning, development, and career advancement.</li>
            </ol>
        </aside>
        <!--Benefits & Perks section-->
        <section class="benefits">
            <h2>Benefits & Perks at Vangarde</h2>
            <ul>
                <li>&#128181; Competitive Salary</li>
                <p>We offer competitive salary that reflect your skills and experience.</p>
                <li>&#127973; Health & Wellness</li>
                <p>Comprehensive health insurance plans, wellness programs, and mental health support.</p>
                <li>&#128197; Flexible Work Arrangements</li>
                <p>We only work for 4 days a week and with 1 day flexible to work from home. To support Mental health and promote work life balanced.</p>
                <li>&#128200; Professional Development</li>
                <p>Access to training, certifications, conferences, and continuous learning opportunities.</p>
                <li>&#129328; Paid parental leave</li>
                <p>When the time comes to welcome a new member of the family, we offer generous and fully paid parental leave.</p>
            </ul>
        </section>

        <section class="jobs-cards">
            <h2>Become part of a team shaping the future of cybersecurity.</h2>
            <p>Ready to make a real impact? Explore opportunities to grow with us.</p>

            <div class="jobs">
                <?php
                include "settings.php";
                $sql = "
                    SELECT * FROM jobs
                ";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    // Output data of each row
                    while ($row = $result->fetch_assoc()) {
                ?>
                        <!--Cybersecurity analyst card 1-->
                        <div class="cards">
                            <div class="card-content">
                                <?php
                                if ($row['job_id'] === 'CA202') {
                                    echo "<img src='images/cybersecurityanalyst.jpg' alt='Cybersecurity Analyst'>";
                                } elseif ($row['job_id'] === 'CSA121') {
                                    echo "<img src='images/cloud.jpg' alt='Cloud'>";
                                } elseif ($row['job_id'] === 'DSE222') {
                                    echo "<img src='images/devsecops.jpg' alt='DevSecOps'>";
                                }
                                ?>
                                <div class="card-body">
                                    <h3 class="card-title"><?= $row["title"] ?></h3>
                                    <p class="card-text"><?= $row["description"] ?></p>
                                </div>
                                <div class="card-footer">
                                    <a href="#<?= $row["job_id"] ?>" class="btn"><button>View roles</button></a>
                                </div>
                            </div>
                        </div>
                <?php
                    }
                } else {
                    echo "0 results";
                }
                $conn->close();
                ?>

            </div>
        </section>
        <!--Section for Cybersecurity Analyst role-->
        <?php
        include "settings.php";
        $sql = "
            SELECT jobs.*, 
            pq.bp1 AS pq1, pq.bp2 AS pq2, pq.bp3 AS pq3, pq.bp4 AS pq4, pq.bp5 AS pq5, pq.bp6 AS pq6, pq.bp7 AS pq7, pq.bp8 AS pq8, pq.bp9 AS pq9, pq.bp10 AS pq10,
            q.bp1 AS q1, q.bp2 AS q2, q.bp3 AS q3, q.bp4 AS q4, q.bp5 AS q5, q.bp6 AS q6, q.bp7 AS q7, q.bp8 AS q8, q.bp9 AS q9, q.bp10 AS q10,
            r.bp1 AS r1, r.bp2 AS r2, r.bp3 AS r3, r.bp4 AS r4, r.bp5 AS r5, r.bp6 AS r6, r.bp7 AS r7, r.bp8 AS r8, r.bp9 AS r9, r.bp10 AS r10,
            sb.bp1 AS sb1, sb.bp2 AS sb2, sb.bp3 AS sb3, sb.bp4 AS sb4, sb.bp5 AS sb5, sb.bp6 AS sb6, sb.bp7 AS sb7, sb.bp8 AS sb8, sb.bp9 AS sb9, sb.bp10 AS sb10
            FROM `jobs`
            INNER JOIN preferred_skills AS pq ON jobs.job_id = pq.job_id
            INNER JOIN required_skills AS q on jobs.job_id = q.job_id
            INNER JOIN responsibilities AS r ON jobs.job_id = r.job_id
            INNER JOIN salary_and_benefits as sb on jobs.job_id = sb.job_id;
        ";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            // Output data of each row
            while ($row = $result->fetch_assoc()) {
        ?>
                <section class="roles1">
                    <h2 id="<?= $row["job_id"] ?>"><?= $row["title"] ?></h2>
                    <p><?= $row["description"] ?></p>

                    <div class="roles-grid">
                        <div class="role-card">
                            <h3>Responsibilities and Duties</h3>
                            <ol>
                                <?php foreach (range(1, 10) as $i):
                                    $v = $row["r{$i}"] ?? null;
                                    // hide if null or empty string; keep "0"
                                    if ($v !== null && $v !== ''): ?>
                                        <li><?= htmlspecialchars($v, ENT_QUOTES, 'UTF-8') ?></li>
                                <?php endif;
                                endforeach; ?>
                            </ol>
                        </div>

                        <div class="role-card">
                            <h3>Qualifications</h3>
                            <ul>
                                <?php foreach (range(1, 10) as $i):
                                    $v = $row["q{$i}"] ?? null;
                                    // hide if null or empty string; keep "0"
                                    if ($v !== null && $v !== ''): ?>
                                        <li><?= htmlspecialchars($v, ENT_QUOTES, 'UTF-8') ?></li>
                                <?php endif;
                                endforeach; ?>
                            </ul>
                        </div>

                        <div class="role-card">
                            <h3>Preferred Qualifications</h3>
                            <ul>
                                <?php foreach (range(1, 10) as $i):
                                    $v = $row["pq{$i}"] ?? null;
                                    // hide if null or empty string; keep "0"
                                    if ($v !== null && $v !== ''): ?>
                                        <li><?= htmlspecialchars($v, ENT_QUOTES, 'UTF-8') ?></li>
                                <?php endif;
                                endforeach; ?>
                            </ul>
                        </div>

                        <div class="role-card">
                            <h3>Salary and Benefits</h3>
                            <ul>
                                <?php foreach (range(1, 10) as $i):
                                    $v = $row["sb{$i}"] ?? null;
                                    // hide if null or empty string; keep "0"
                                    if ($v !== null && $v !== ''): ?>
                                        <li><?= htmlspecialchars($v, ENT_QUOTES, 'UTF-8') ?></li>
                                <?php endif;
                                endforeach; ?>
                            </ul>
                        </div>

                        <div class="role-card">
                            <h3>Reports to Director of <?= $row["reports_to"] ?></h3>
                        </div>

                        <a href="apply.php"><button class="apply-button">Apply Now</button></a>
                        <p>Ref #: <?= $row["job_id"] ?></p>

                    </div>
                </section>
        <?php
            }
        } else {
            echo "0 results";
        }
        $conn->close();
        ?>
    </div>

    <?php include 'footer.inc'; ?>
</body>

</html>