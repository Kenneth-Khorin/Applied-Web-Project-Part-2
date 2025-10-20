<?php
require_once("settings.php");
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
        <p>Welcome to the HR Management Dashboard</p>
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
        
    </main>
    
    <footer>
        <p>&copy; 2024 Vangarde</p>
    </footer>
</body>
</html>