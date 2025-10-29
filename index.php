<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Jobs description">
    <meta name="keywords" content="Jobs, Cybersecurity,">
    <meta name="author" content="#">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Vangarde</title>
    <link rel="stylesheet" href="styles/styles.css">
</head>

<body>
    <?php include 'header.inc'; ?>

    <div class="container"> 

        <!-- Hero Banner Section -->
        <!-- Full-width banner with call-to-action -->
        <section class="banner" aria-labelledby="hero-heading">
            <article class="bannercontent">
                <h1 id="hero-heading">Build your future now with us</h1>
                <form action="jobs.php">
                    <button type="submit" class="explore">Explore Careers</button>
                </form>
            </article>
        </section>
    
        <!-- Company Logo Section -->
        <!-- Displays Vangarde branding and logo -->
        <section aria-label="Company logo">
            <img src="images/shieldlogo.png" alt="Vangarde Logo" class="logo">
            <h1 class="title">Vangarde</h1>
        </section>
    
        <!-- Quick Navigation Links -->
        <!-- Jump links to different sections of the page -->
        <section class="tablecontent" aria-label="Quick navigation">
            <nav class="content">
                <a href="#whywork">Why Work With Us</a>
                <a href="#team">Our Team</a>
                <a href="#employee">Employee Benefits</a>
                <a href="#globaloffice">Global Office</a>
            </nav>
        </section>
    
        <!-- Why Work With Us Section -->
        <!-- Explains company mission and values -->
        <section class="why" aria-labelledby="why-heading">
            <h2 id="why-heading">Why work with us</h2>
            <article id="whywork">
                <p>Our team is dedicated to solving real-world technology problems. Our teams are building the future of enterprise solutions, cybersecurity, cloud services, and software development with purpose and impact.</p>
            </article>
        </section>
    
        <!-- Video Section -->
        <!-- Embedded promotional video -->
        <section class="video" aria-label="Company promotional video">
            <iframe
                class="youtube"
                src="https://www.youtube.com/embed/91tdkSp6ahA?si=7hIDFtaFurbIjBH-"
                title="Vangarde company promotional video"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin"
                allowfullscreen>
            </iframe>
        </section>
    
        <!-- Our Teams Section -->
        <!-- Overview of different departments and roles -->
        <section class="team" aria-labelledby="team-heading">
            <article id="team">
                <h2 id="team-heading">Our Teams</h2>
                <p>We're hiring across Development, Software Engineering, Data Analysis, Cybersecurity, IT Support, and more. Whatever your skills, there's a team for you at Vangarde.</p>
            </article>
        </section>
    
        <!-- Employee Benefits Section -->
        <!-- Lists benefits and perks with supporting image -->
        <section class="benefits-home" aria-labelledby="benefits-heading">
            <article id="employee">
                <h2 id="benefits-heading">Benefits of becoming one of us</h2>
                <ul>
                    <li>Flexible work environments and remote opportunities</li>
                    <li>Comprehensive health insurance</li>
                    <li>Paid certification and training programs</li>
                    <li>Retirement savings plan</li>
                    <li>Wellness initiatives and team retreats</li>
                </ul>
            </article>
            <!-- Benefits illustration -->
            <img src="Images/young-colleagues-group-having-fun-600nw-1989897731.webp"
                alt="Happy colleagues collaborating in a modern office environment"
                loading="lazy">
        </section>
    
        <!-- Global Office Section -->
        <!-- Information about worldwide operations -->
        <section class="globaloffice" aria-labelledby="global-heading">
            <article id="globaloffice">
                <h2 id="global-heading">Global Office</h2>
                <p>With operations across North America, Europe, and Asia, Vangarde offers diverse opportunities for professionals around the world to work on global tech solutions.</p>
                <form action="https://www.swinburne.edu.au/life-at-swinburne/study-abroad-exchange/contact-us/">
                    <button type="submit" class="btn-warning">More Details</button>
                </form>
            </article>
        </section>
    
        <!-- Call to Action Section -->
        <!-- Final CTA encouraging users to apply or explore -->
        <section class="readytojoin" aria-labelledby="cta-heading">
            <h2 id="cta-heading">Ready to join us?</h2>
            <nav class="button" aria-label="Application actions">
                <form action="apply.php">
                    <button type="submit" class="btn-warning">Get Started</button>
                </form>
                <form action="jobs.php">
                    <button type="submit" class="btn-warning">Explore Careers</button>
                </form>
            </nav>
        </section>
    </div>

    <!-- ====================================
         FOOTER
         Contact information, company links, and social media
         ==================================== -->
    <?php include 'footer.inc'; ?>
</body>

</html>