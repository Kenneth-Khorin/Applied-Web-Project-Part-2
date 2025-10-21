<?php
require_once("settings.php");
// Get action
$action = isset($_GET['action']) ? $_GET['action'] : 'home';
$message = '';

// Get sort parameter
$sort_by = isset($_GET['sort']) ? $_GET['sort'] : 'EOInumber';
$allowed_sorts = ['EOInumber', 'JobReferenceNumber', 'FirstName', 'LastName', 'Status'];
if (!in_array($sort_by, $allowed_sorts)) {
    $sort_by = 'EOInumber';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Meet the Three Musketeers team: Technology Division of CyberSecure Solutions">
    <meta name="keywords" content="about, Cybersecurity">
    <meta name="author" content="Nuyang Rai">
    <title>EOI Management System</title>
    <link rel="stylesheet" href="styles/styles.css">
</head>
<body>
    <header>
        <nav role="navigation" aria-label="Main navigation">
            <ul>
                <li><a href="index.html" class="nav-link">Home</a></li>
                <li><a href="jobs.html" class="nav-link">Jobs</a></li>
                <li><a href="apply.html" class="nav-link">Apply</a></li>
                <li><a href="about.html" class="nav-link">About</a></li>
                <li><a href="manage.php" class="nav-link active">Manage</a></li>
            </ul>
        </nav>
    </header>
    
    <main class="container">
        <h1>EOI Management System</h1>
        
        <div class="management-menu">
            <h2>Management Options</h2>
            <ul>
                <li><a href="manage.php?action=list_all">List All EOIs</a></li>
                <li><a href="manage.php?action=search_job">Search by Job Reference</a></li>
                <li><a href="manage.php?action=search_name">Search by Name</a></li>
                <li><a href="manage.php?action=delete">Delete by Job Reference</a></li>
                <li><a href="manage.php?action=change_status">Change EOI Status</a></li>
            </ul>
        </div>

        <?php if ($action == 'list_all'): ?>
            <section class="results-section">
                <h2>All EOI Applications</h2>
                <p>Sort by: 
                    <a href="?action=list_all&sort=EOInumber">ID</a> | 
                    <a href="?action=list_all&sort=JobReferenceNumber">Job Ref</a> | 
                    <a href="?action=list_all&sort=FirstName">First Name</a> | 
                    <a href="?action=list_all&sort=LastName">Last Name</a> | 
                    <a href="?action=list_all&sort=Status">Status</a>
                </p>
                <?php
                    $sql = "SELECT * FROM eoi ORDER BY $sort_by";
                    $result = mysqli_query($conn, $sql);
        
                    if (mysqli_num_rows($result) > 0) {
                        echo "<table border='1'>";
                        echo "<tr><th>ID</th><th>Job Ref</th><th>Name</th><th>Email</th><th>Phone</th><th>Status</th></tr>";
            
                        while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row['EOInumber'] . "</td>";
                        echo "<td>" . $row['JobReferenceNumber'] . "</td>";
                        echo "<td>" . $row['FirstName'] . " " . $row['LastName'] . "</td>";
                        echo "<td>" . $row['Email'] . "</td>";
                        echo "<td>" . $row['PhoneNumber'] . "</td>";
                        echo "<td>" . $row['Status'] . "</td>";
                        echo "</tr>";
                    }
                        echo "</table>";
                    } else {
                        echo "<p>No EOI applications found.</p>";
                    }
                ?>
            </section>
        
        <?php elseif ($action == 'search_job'): ?>
            <section class="search-section">
                <h2>Search EOIs by Job Reference</h2>
                <form method="POST" action="manage.php?action=search_job">
                    <label for="job_ref_search">Job Reference Number:</label>
                    <input type="text" id="job_ref_search" name="job_ref_search" 
                        pattern="[A-Za-z0-9]{5}" maxlength="5" required
                        placeholder="e.g., CA202">
                    <button type="submit" name="search_job_submit">Search</button>
                </form>
            </section>
            
        <?php
            if (isset($_POST['search_job_submit'])) {
                $job_ref = mysqli_real_escape_string($conn, $_POST['job_ref_search']);
                
                $sql = "SELECT * FROM eoi WHERE JobReferenceNumber = '$job_ref' ORDER BY $sort_by";
                $result = mysqli_query($conn, $sql);
                
                if (mysqli_num_rows($result) > 0) {
                    echo "<h3>Results for Job Reference: $job_ref</h3>";
                    echo "<p>Sort by: 
                        <a href='?action=search_job&sort=EOInumber'>ID</a> | 
                        <a href='?action=search_job&sort=FirstName'>First Name</a> | 
                        <a href='?action=search_job&sort=LastName'>Last Name</a> | 
                        <a href='?action=search_job&sort=Status'>Status</a>
                    </p>";
                    echo "<table border='1'>";
                    echo "<tr><th>ID</th><th>Job Ref</th><th>Name</th><th>Email</th><th>Phone</th><th>Status</th></tr>";
                    
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row['EOInumber'] . "</td>";
                        echo "<td>" . $row['JobReferenceNumber'] . "</td>";
                        echo "<td>" . $row['FirstName'] . " " . $row['LastName'] . "</td>";
                        echo "<td>" . $row['Email'] . "</td>";
                        echo "<td>" . $row['PhoneNumber'] . "</td>";
                        echo "<td>" . $row['Status'] . "</td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                } else {
                    echo "<p>No applications found for job reference: $job_ref</p>";
                }
            }
        ?>
        <?php else: ?>
        <p>Please select an option from the menu above.</p>
        <?php endif; ?>

        <?php mysqli_close($conn); ?>
    </main>
    
    <footer>
        <p>&copy; 2025 Vangarde</p>
    </footer>
</body>
</html>