<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Jobs description">
    <meta name="keywords" content="Jobs, Cybersecurity,">
    <meta name="author" content="#">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About | Vangarde</title>
    <link rel="stylesheet" href="styles/styles.css">
</head>

<body>
    <!-- Header with Navigation -->
    <?php include 'header.inc'; ?>

    <div class="container">
        <!-- Main Content -->
        <article class="content-wrapper">
            <!-- Team Header with inline CSS-->
            <h1 id="team-header">
                Meet Our Team
            </h1>

            <aside class="student-ids">
                <p><strong>Student IDs:</strong> Nuyang Rai - 103843460 | Kenneth Khorin - 104313896 | Nahian Bin Saud - 104355393 | Ethan Nguyen - 103843463</p>
            </aside>

            <!-- hero section using embedded CSS class -->
            <section class="about-hero">
                <h2>Excellence in Cybersecurity</h2>
                <p>Dedicated to protecting digital assets and building secure solutions</p>
            </section>

            <!-- Team Information with Nested List -->
            <section id="team-info" aria-labelledby="team-header">
                <h2>Team Information</h2>
                <ul>
                    <li><strong>Group Name:</strong> Three Musketeers
                        <ul>
                            <li>Class Schedule:
                                <ul>
                                    <li>Day: Thursday</li>
                                    <li>Time: 12:30 PM - 02:30 PM</li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </section>

            <!-- Member Contributions Section with Definition List -->
            <section class="members-section" aria-label="Member contributions">
                <h2>Member Contributions</h2>

                <?php
                    include "settings.php";
                    $sql = "SELECT * FROM about";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        // Output data of each row
                        while ($row = $result->fetch_assoc()) {
                ?>
                    <article class="member-card">
                        <h3><?= $row["name"] ?></h3>
                        <dl>
                            <dt>Role & Contribution</dt>
                            <dd><?= $row["contribution"] ?></dd>

                            <dt>First Programming Language</dt>
                            <dd><?= $row["programm_language"] ?></dd>

                            <dt>Favorite Language</dt>
                            <dd><?= $row["fav_language"] ?></dd>

                            <dt>Personal Quote</dt>
                            <dd class="quote"><?= $row["quotes"] ?></dd>
                        </dl>
                    </article>
                <?php
                    }
                } else {
                    echo "0 results";
                }
                $conn->close();
                ?>
            </section>

            <!-- Team Photo -->
            <figure>
                <img src="images/WebTechGroup.jpg"
                    alt="group photo of the Vangarde team"
                    width="800"
                    height="400">
                <figcaption>The founder of Vangarde</figcaption>
            </figure>

            <!-- Fun Facts Table -->
            <section aria-label="Team fun facts">
                <h2>Team Fun Facts & Personal Details</h2>
                <div class="table-container">
                    <table>
                        <caption>Team Fun Facts & Personal Details</caption>
                        <thead>
                            <tr>
                                <th scope="col">Team Member</th>
                                <th scope="col">Dream Job</th>
                                <th scope="col">Hobbies</th>
                                <th scope="col">Hometown</th>
                                <th scope="col">Favorite Game</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">Nuyang Rai</th>
                                <td>Chief Security Officer</td>
                                <td>Watching Anime</td>
                                <td>Thimphu, Bhutan</td>
                                <td>League of Legend</td>
                            </tr>
                            <tr>
                                <th scope="row">Kenneth Khorin</th>
                                <td>Software Developer</td>
                                <td>History</td>
                                <td>Jakarta, Indonesia</td>
                                <td>Dota 2</td>
                            </tr>
                            <tr>
                                <th scope="row">Nahian Bin Saud</th>
                                <td>Software Developer</td>
                                <td>Photography</td>
                                <td>Dhaka, Bangladesh</td>
                                <td>PUBG</td>
                            </tr>
                            <tr>
                                <th scope="row">Ethan Nguyen</th>
                                <td>Work at ChatGPT</td>
                                <td>Gaming</td>
                                <td>Ho Chi Minh City, Vietnam</td>
                                <td>Valorant</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
        </article>
    </div>

    <!-- Footer -->
    <?php include 'footer.inc'; ?>
</body>

</html>