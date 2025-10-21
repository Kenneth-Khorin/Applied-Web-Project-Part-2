<?php
// Connect to database
require_once("settings.php");

// Helper function
function clean_input($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

// Validate & sanitize input
$errors = [];

// Match HTML form field names exactly
$jobRef = clean_input($_POST['jobRef'] ?? '');
$firstName = clean_input($_POST['firstName'] ?? '');
$lastName = clean_input($_POST['lastName'] ?? '');
$gender = clean_input($_POST['gender'] ?? '');
$dob = clean_input($_POST['dob'] ?? '');
$street = clean_input($_POST['street'] ?? '');
$suburb = clean_input($_POST['suburb'] ?? '');
$state = clean_input($_POST['state'] ?? '');
$postcode = clean_input($_POST['postcode'] ?? '');
$email = clean_input($_POST['email'] ?? '');
$phone = clean_input($_POST['phone'] ?? '');
$otherSkills = clean_input($_POST['otherSkills'] ?? '');

// Handle skills checkboxes (array)
$skills = isset($_POST['skills']) ? $_POST['skills'] : [];
$skillsString = implode(',', array_map('clean_input', $skills));

$validStates = [
    "VIC" => ['3', '8'],
    "NSW" => ['1', '2'],
    "QLD" => ['4', '9'],
    "NT"  => ['0'],
    "WA"  => ['6'],
    "SA"  => ['5'],
    "TAS" => ['7'],
    "ACT" => ['0']
];

// Basic validation
if (!preg_match("/^[A-Za-z0-9]{5,6}$/", $jobRef)) {
    $errors[] = "Job reference must be max at 6 alphanumeric characters.";
}
if (!preg_match("/^[A-Za-z]{1,20}$/", $firstName)) {
    $errors[] = "First name must be max 20 letters.";
}
if (!preg_match("/^[A-Za-z]{1,20}$/", $lastName)) {
    $errors[] = "Last name must be max 20 letters.";
}
if (!preg_match("/^\d{2}\/\d{2}\/\d{4}$/", $dob)) {
    $errors[] = "Date of birth must be in dd/mm/yyyy format.";
}
if (!in_array($gender, ['female', 'male', 'nonbinary', 'prefer-not'])) {
    $errors[] = "Please select a valid gender option.";
}
if (strlen($street) > 40) {
    $errors[] = "Street address must be max 40 characters.";
}
if (strlen($suburb) > 40) {
    $errors[] = "Suburb/Town must be max 40 characters.";
}
if (!preg_match("/^\d{4}$/", $postcode)) {
    $errors[] = "Postcode must be exactly 4 digits.";
} elseif (!isset($validStates[$state]) || !in_array($postcode[0], $validStates[$state])) {
    $errors[] = "Postcode doesn't match the selected state.";
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Invalid email address.";
}
if (!preg_match("/^\d{8,12}$/", $phone)) {
    $errors[] = "Phone number must be 8-12 digits.";
}
if (empty($skillsString)) {
    $errors[] = "Please select at least one skill.";
}

// Display errors if any
if (!empty($errors)) {
    echo "<h2>Submission Failed</h2><ul>";
    foreach ($errors as $error) {
        echo "<li>" . $error . "</li>";
    }
    echo "</ul><a href='apply.html'>Go back</a>";
    exit();
}

// Convert date from dd/mm/yyyy to yyyy-mm-dd for MySQL
$dobParts = explode('/', $dob);
$dobMySQL = $dobParts[2] . '-' . $dobParts[1] . '-' . $dobParts[0];

// INSERT data into eoi table
$sql = "INSERT INTO eoi (JobReferenceNumber, FirstName, LastName, Gender, DOB, StreetAddress, SuburbTown, State, Postcode, Email, PhoneNumber, Skills, OtherSkills, Status)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, 'New')";

$stmt = $conn->prepare($sql);
if (!$stmt) {
    die("Prepare failed: " . $conn->error);
}

$stmt->bind_param("sssssssssssss", 
    $jobRef, $firstName, $lastName, $gender, $dobMySQL, $street, $suburb,
    $state, $postcode, $email, $phone, $skillsString, $otherSkills
);

if ($stmt->execute()) {
    $eoiNumber = $stmt->insert_id;
    echo "<h2>Application Submitted Successfully!</h2>";
    echo "<p>Your application number is: <strong> EOI-" . $eoiNumber . "</strong></p>";
    echo "<p>Thank you for applying to Vangarde!</p>";
    echo "<a href='index.html'>Back to Home</a> | <a href='apply.html'>Submit Another Application</a>";
} else {
    echo "<h2>Database Error</h2>";
    echo "<p>Error: " . $stmt->error . "</p>";
    echo "<a href='apply.html'>Go back</a>";
}

$stmt->close();
$conn->close();
?>
