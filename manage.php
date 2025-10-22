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

        <?php elseif ($action == 'search_name'): ?>
            <section class="search-section">
                <h2>Search EOIs by Applicant Name</h2>
                <form method="POST" action="manage.php?action=search_name">
                    <label for="first_name_search">First Name:</label>
                    <input type="text" id="first_name_search" name="first_name_search">
                    
                    <label for="last_name_search">Last Name:</label>
                    <input type="text" id="last_name_search" name="last_name_search">
                    
                    <button type="submit" name="search_name_submit">Search</button>
                    <p><small>Enter first name, last name, or both</small></p>
                </form>
            </section>
            
            <?php
            if (isset($_POST['search_name_submit'])) {
                $first_name = mysqli_real_escape_string($conn, $_POST['first_name_search']);
                $last_name = mysqli_real_escape_string($conn, $_POST['last_name_search']);
                
                $conditions = [];
                if (!empty($first_name)) {
                    $conditions[] = "FirstName LIKE '%$first_name%'";
                }
                if (!empty($last_name)) {
                    $conditions[] = "LastName LIKE '%$last_name%'";
                }
                
                if (count($conditions) > 0) {
                    $where_clause = implode(' AND ', $conditions);
                    $sql = "SELECT * FROM eoi WHERE $where_clause ORDER BY $sort_by";
                    $result = mysqli_query($conn, $sql);
                    
                    if (mysqli_num_rows($result) > 0) {
                        echo "<h3>Search Results</h3>";
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
                        echo "<p>No applications found matching your search.</p>";
                    }
                } else {
                    echo "<p>Please enter at least one name field.</p>";
                }
            }
        ?>    

        <?php elseif ($action == 'delete'): ?>
            <section class="delete-section">
                <h2>Delete EOIs by Job Reference</h2>
                <div class="warning-box">
                    <p><strong>Warning:</strong> This action will permanently delete ALL applications for the specified job reference!</p>
                </div>
                
                <form method="POST" action="manage.php?action=delete" 
                    onsubmit="return confirm('Are you absolutely sure you want to DELETE ALL EOIs for this job reference?\n\nThis action CANNOT be undone!');">
                    <div class="form-group">
                        <label for="job_ref_delete">Job Reference Number:</label>
                        <input type="text" id="job_ref_delete" name="job_ref_delete" 
                            pattern="[A-Za-z0-9]{5}" maxlength="5" required
                            placeholder="e.g., CA202">
                        <small>Enter the job reference to delete all its applications</small>
                    </div>
                    <button type="submit" name="delete_submit" class="btn-danger">Delete All EOIs</button>
                </form>
            </section>
            
            <?php
            if (isset($_POST['delete_submit'])) {
                $job_ref = mysqli_real_escape_string($conn, $_POST['job_ref_delete']);
                
                //first, check how many records will be deleted
                $count_sql = "SELECT COUNT(*) as total FROM eoi WHERE JobReferenceNumber = '$job_ref'";
                $count_result = mysqli_query($conn, $count_sql);
                $count_row = mysqli_fetch_assoc($count_result);
                $total = $count_row['total'];
                
                if ($total > 0) {
                    //get details before deletion for confirmation
                    $details_sql = "SELECT FirstName, LastName FROM eoi WHERE JobReferenceNumber = '$job_ref'";
                    $details_result = mysqli_query($conn, $details_sql);
                    
                    $sql = "DELETE FROM eoi WHERE JobReferenceNumber = '$job_ref'";
                    
                    if (mysqli_query($conn, $sql)) {
                        echo "<div class='message success'>";
                        echo "<h3>Deletion Successful</h3>";
                        echo "<p><strong>Deleted $total EOI application(s) for job reference: " . htmlspecialchars($job_ref) . "</strong></p>";
                        echo "<details>";
                        echo "<summary>View deleted records</summary>";
                        echo "<ul>";
                        while ($detail = mysqli_fetch_assoc($details_result)) {
                            echo "<li>" . htmlspecialchars($detail['FirstName']) . " " . 
                                htmlspecialchars($detail['LastName']) . "</li>";
                        }
                        echo "</ul>";
                        echo "</details>";
                        echo "</div>";
                    } else {
                        echo "<div class='message error'>";
                        echo "<p>Error deleting records: " . htmlspecialchars(mysqli_error($conn)) . "</p>";
                        echo "</div>";
                    }
                } else {
                    echo "<div class='message warning'>";
                    echo "<p>No EOIs found for job reference: " . htmlspecialchars($job_ref) . "</p>";
                    echo "<p>Please check the job reference and try again.</p>";
                    echo "</div>";
                }
            }
            ?>

            <?php elseif ($action == 'change_status'): ?>
        <section class="status-section">
            <h2>Change EOI Status</h2>
            
            <form method="POST" action="manage.php?action=change_status">
                <div class="form-group">
                    <label for="eoi_id">EOI ID Number:</label>
                    <input type="number" id="eoi_id" name="eoi_id" required min="1"
                           placeholder="Enter EOI ID">
                    <small>You can find the ID from the "List All EOIs" page</small>
                </div>
                
                <div class="form-group">
                    <label for="new_status">New Status:</label>
                    <select id="new_status" name="new_status" required>
                        <option value="">-- Select Status --</option>
                        <option value="New">New</option>
                        <option value="Current">Current</option>
                        <option value="Final">Final</option>
                    </select>
                    <small>
                        <strong>New:</strong> Recently submitted<br>
                        <strong>Current:</strong> Under review<br>
                        <strong>Final:</strong> Decision made
                    </small>
                </div>
                
                <button type="submit" name="status_submit" class="btn-primary">Update Status</button>
            </form>
        </section>
        
        <?php
            if (isset($_POST['status_submit'])) {
                $eoi_id = mysqli_real_escape_string($conn, $_POST['eoi_id']);
                $new_status = mysqli_real_escape_string($conn, $_POST['new_status']);
                
                //check if EOI exists and get current details
                $check_sql = "SELECT * FROM eoi WHERE EOInumber = '$eoi_id'";
                $check_result = mysqli_query($conn, $check_sql);
                
                if (mysqli_num_rows($check_result) > 0) {
                    $old_record = mysqli_fetch_assoc($check_result);
                    $old_status = $old_record['Status'];
                    
                    //update the status
                    $sql = "UPDATE eoi SET Status = '$new_status' WHERE EOInumber = '$eoi_id'";
                    
                    if (mysqli_query($conn, $sql)) {
                        echo "<div class='message success'>";
                        echo "<h3>Status Updated Successfully</h3>";
                        echo "<div class='status-update-details'>";
                        echo "<p><strong>EOI ID:</strong> " . htmlspecialchars($eoi_id) . "</p>";
                        echo "<p><strong>Applicant:</strong> " . htmlspecialchars($old_record['FirstName']) . " " . 
                            htmlspecialchars($old_record['LastName']) . "</p>";
                        echo "<p><strong>Job Reference:</strong> " . htmlspecialchars($old_record['JobReferenceNumber']) . "</p>";
                        echo "<p><strong>Email:</strong> " . htmlspecialchars($old_record['Email']) . "</p>";
                        echo "<p class='status-change'>";
                        echo "<span class='status-badge status-" . strtolower($old_status) . "'>" . htmlspecialchars($old_status) . "</span>";
                        echo "<span class='status-badge status-" . strtolower($new_status) . "'>" . htmlspecialchars($new_status) . "</span>";
                        echo "</p>";
                        echo "</div>";
                        echo "</div>";
                    } else {
                        echo "<div class='message error'>";
                        echo "<p>Error updating status: " . htmlspecialchars(mysqli_error($conn)) . "</p>";
                        echo "</div>";
                    }
                } else {
                    echo "<div class='message error'>";
                    echo "<p> EOI ID not found: " . htmlspecialchars($eoi_id) . "</p>";
                    echo "<p>Please check the ID and try again. You can find valid IDs by listing all EOIs.</p>";
                    echo "</div>";
                }
            }
        ?>

        

        <?php mysqli_close($conn); ?>
    </main>
    
    <footer>
        <p>&copy; 2025 Vangarde</p>
    </footer>
</body>
</html>
