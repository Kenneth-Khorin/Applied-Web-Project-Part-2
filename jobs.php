<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Jobs description">
    <meta name="keywords" content="Jobs, Cybersecurity,">
    <meta name="author" content="Kenneth Khorin">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
    <title>Jobs page</title>
    <link rel="stylesheet" href="styles/styles.css"><!-- keep your site css -->
    <style>
      /* --- Page-local styles for Jobs --- */
      :root{
        --bg: hsl(222 20% 10%);
        --panel: hsl(222 25% 15% / 0.7);
        --panel-strong: hsl(222 28% 16% / 0.92);
        --text: hsl(0 0% 98%);
        --muted: hsl(0 0% 80%);
        --brand: hsl(206 100% 50%);
        --brand-600: hsl(206 100% 45%);
        --accent: hsl(45 100% 52%);
        --radius: 16px;
        --border: 1px solid hsl(0 0% 100% / 0.12);
        --soft-bg: hsl(0 0% 100% / 0.05);
      }
      @media (prefers-color-scheme: light){
        :root{
          --bg: hsl(220 20% 97%);
          --panel: hsl(0 0% 100% / 0.8);
          --panel-strong: hsl(0 0% 100% / 0.96);
          --text: hsl(233 15% 12%);
          --muted: hsl(233 10% 40%);
          --border: 1px solid hsl(233 10% 25% / 0.18);
          --soft-bg: hsl(233 10% 15% / 0.05);
        }
      }

      body{
        background:
          radial-gradient(1100px 700px at 10% 10%, hsl(260 80% 60% / 0.12), transparent),
          radial-gradient(800px 500px at 90% 15%, hsl(190 70% 50% / 0.12), transparent),
          linear-gradient(180deg, var(--bg), hsl(222 22% 12%));
        color: var(--text);
        font-family: Inter, system-ui, -apple-system, Segoe UI, Roboto, Arial, Helvetica, sans-serif;
      }
      .jobs-wrap{
        width: min(1100px, 96%);
        margin: 24px auto 64px;
        display: grid;
        gap: 20px;
      }

      /* Bigger logo */
      .logo{
        width: clamp(120px, 12vw, 180px); /* enlarged */
        height: auto;
        display: block;
        margin: 8px auto 6px;
        filter: drop-shadow(0 6px 10px rgba(0,0,0,.35));
      }
      @media (min-width: 1000px){
        .logo{ width: 200px; } /* extra boost on wide screens */
      }

      h1{
        text-align: center;
        margin: 0;
        font-size: clamp(26px, 3.2vw, 36px);
        letter-spacing: .3px;
      }
      .p1{
        margin: 8px auto 0;
        max-width: 80ch;
        color: var(--muted);
        text-align: center;
        line-height: 1.55;
      }

      /* Section shells */
      aside, .benefits, .jobs-cards, .roles1, .roles2, .roles3{
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);
        background: var(--panel);
        border: var(--border);
        border-radius: var(--radius);
        padding: clamp(16px, 2.6vw, 26px);
      }
      h2{ margin: 0 0 10px 0; font-size: clamp(20px, 2.2vw, 26px); }

      /* Why work with us */
      aside ol{ margin: 8px 0 0 18px; line-height: 1.55; }

      /* ===== Benefits & Perks — readability upgrade ===== */
      .benefits h2{ text-align:center; margin-bottom: 14px; }
      .benefits dl{
        display: grid;
        gap: 14px;
        margin: 0;
      }
      /* Style each dt+dd pair as a compact card row */
      .benefits dt{
        font-weight: 800;
        display:flex;
        align-items:center;
        gap:10px;
        font-size: 16px;
      }
      .benefits dd{
        margin: 6px 0 0 0;           /* remove default indent */
        padding: 10px 14px;
        background: var(--soft-bg);
        border: var(--border);
        border-left: 6px solid var(--accent);
        border-radius: 10px;
        color: var(--text);
        line-height: 1.55;
        font-size: 15.5px;
      }
      /* Tighter max width for easier scanning on huge monitors */
      .benefits{ max-width: 100%; }
      @media (min-width: 1100px){
        .benefits dl{ gap: 16px; }
        .benefits dd{ font-size: 16px; }
      }

      /* Jobs deck */
      .jobs-cards > h2, .jobs-cards > p{ text-align: center; }
      .jobs{
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 16px;
        margin-top: 10px;
      }
      .cards{
        border: var(--border);
        border-radius: calc(var(--radius) - 4px);
        background: var(--soft-bg);
        overflow: clip;
        transition: transform .14s ease, box-shadow .14s ease, border-color .14s ease;
      }
      .cards:hover{
        transform: translateY(-3px);
        box-shadow: 0 14px 28px rgba(0,0,0,.28);
        border-color: hsl(0 0% 100% / 0.2);
      }
      .card-content{ display: grid; grid-template-rows: 110px 1fr; }
      .card-content > img{
        width: 100%;
        height: 110px; /* small, fixed */
        object-fit: cover;
        object-position: center;
        display: block;
        border-bottom: var(--border);
        background: #0003;
      }
      .card-body{
        padding: 12px 12px 14px;
        display: grid;
        gap: 8px;
        align-content: start;
      }
      .card-title{ margin: 2px 0 0 0; font-size: 17px; }
      .card-text{ margin: 0; color: var(--muted); line-height: 1.45; }
      .card-footer{ margin-top: 8px; }
      .btn button{
        display: inline-flex; align-items: center; justify-content: center;
        padding: 9px 14px; border-radius: 12px; font-weight: 600;
        border: 1px solid hsl(0 0% 100% / 0.18);
        background: linear-gradient(180deg, var(--brand), var(--brand-600));
        color: #fff; cursor: pointer;
        transition: filter .1s ease, transform .1s ease;
      }
      .btn button:hover{ filter: brightness(1.04); }
      .btn button:active{ transform: translateY(1px); }

      /* Roles sections */
      .roles-grid{
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 14px;
        margin-top: 10px;
      }
      .role-card{
        border: var(--border);
        border-radius: 14px;
        padding: 14px;
        background: var(--soft-bg);
      }
      .role-card h3{ margin-top: 0; }
      .roles1 ol, .roles1 ul,
      .roles2 ol, .roles2 ul,
      .roles3 ol, .roles3 ul{
        margin: 8px 0 0 18px; color: var(--muted); line-height: 1.55;
      }
      .apply-button{
        margin-top: 8px;
        padding: 10px 16px;
        font-weight: 700;
        border-radius: 12px;
        border: 1px solid hsl(0 0% 100% / 0.18);
        background: linear-gradient(180deg, var(--brand), var(--brand-600));
        color: #fff; cursor: pointer;
        transition: filter .1s ease, transform .1s ease;
      }
      .apply-button:hover{ filter: brightness(1.05); }
      .apply-button:active{ transform: translateY(1px); }

      /* Responsive */
      @media (max-width: 980px){
        .jobs{ grid-template-columns: repeat(2, 1fr); }
      }
      @media (max-width: 720px){
        .jobs{ grid-template-columns: 1fr; }
        .roles-grid{ grid-template-columns: 1fr; }
        .card-content{ grid-template-rows: 90px 1fr; }
        .card-content > img{ height: 90px; }
      }
    </style>
</head>

<body>
  <?php include 'header.inc'; ?>

  <div class="jobs-wrap">
    <img src="images/shieldlogo.png" alt="Vangarde Logo" class="logo">
    <h1>Career at Vangarde</h1>
    <p class="p1">We’re a young and ambitious cybersecurity firm with big plans to expand, and we’re looking for passionate people to grow with us. you’ll have the opportunity to shape our culture, contribute to innovative solutions, and make a real impact as we build and scale. Check out our current job openings below:</p>
    
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

    <!--Benefits & Perks section (readability improved)-->
    <section class="benefits">
      <h2>Benefits & Perks at Vangarde</h2>
      <dl>
        <dt>💸 <strong>Competitive Salary</strong></dt>
        <dd>We offer competitive salary that reflect your skills and experience.</dd>

        <dt>🏥 <strong>Health & Wellness</strong></dt>
        <dd>Comprehensive health insurance plans, wellness programs, and mental health support.</dd>

        <dt>📅 <strong>Flexible Work Arrangements</strong></dt>
        <dd>We only work for 4 days a week and with 1 day flexible to work from home. To support Mental health and promote work life balanced.</dd>

        <dt>📈 <strong>Professional Development</strong></dt>
        <dd>Access to training, certifications, conferences, and continuous learning opportunities.</dd>

        <dt>🍼 <strong>Paid parental leave</strong></dt>
        <dd>When the time comes to welcome a new member of the family, we offer generous and fully paid parental leave.</dd>
      </dl>
    </section>

    <section class="jobs-cards">
      <h2>Become part of a team shaping the future of cybersecurity.</h2>
      <p>Ready to make a real impact? Explore opportunities to grow with us.</p>

      <div class="jobs">
        <!--Cybersecurity analyst card 1-->
        <div class="cards">
          <div class="card-content">
            <img src="images/cybersecurityanalyst.jpg" alt="Cybersecurity Analyst">
            <div class="card-body">
              <h3 class="card-title">Cybersecurity Analyst</h3>
              <p class="card-text">We’re looking for curious minds who thrive in fast-paced environments and never stop learning. Grow your career in a company that values precision, creativity, and ethical responsibility.</p>
            </div>
            <div class="card-footer">
              <a href="#ca" class="btn"><button>View roles</button></a>
            </div>
          </div>
        </div>

        <!--DevSecOps Engineer card 2-->
        <div class="cards">
          <div class="card-content">
            <img src="images/devsecops.jpg" alt="DevSecOps Engineer">
            <div class="card-body">
              <h3 class="card-title">DevSecOps Engineer</h3>
              <p class="card-text">Join a team where automation meets vigilance—your work will ensure our infrastructure is secure, agile, and future-ready. Work cross-functionally with developers, security analysts, and cloud architects to create seamless, secure operations.</p>
            </div>
            <div class="card-footer">
              <a href="#dse" class="btn"><button>View roles</button></a>
            </div>
          </div>
        </div>

        <!--Cloud Security Architect card 3-->
        <div class="cards">
          <div class="card-content">
            <img src="images/cloud.jpg" alt="Cloud Security Architect">
            <div class="card-body">
              <h3 class="card-title">Cloud Security Architect</h3>
              <p class="card-text">Design and implement robust security architectures for our cloud environments. Collaborate with cross-functional teams to ensure our cloud infrastructure is secure, scalable, and compliant with industry standards.</p>
            </div>
            <div class="card-footer">
              <a href="#csa" class="btn"><button>View roles</button></a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--Section for Cybersecurity Analyst role-->
    <section class="roles1">
      <h2 id="ca">Cybersecurity Analyst</h2>
      <p>As a Cybersecurity Analyst at Vangarde, you will be at the forefront of protecting our digital assets. You will monitor networks for security breaches, investigate incidents, and implement security measures to safeguard our systems. Your analytical skills and attention to detail will be crucial in identifying vulnerabilities and ensuring compliance with security policies.</p>

      <div class="roles-grid">
        <div class="role-card">
          <h3>Responsibilities and Duties</h3>
          <ol>
            <li>Monitor and analyze network traffic, security logs, and system activity to detect suspicious behavior or potential intrusions.</li>
            <li>Conduct regular vulnerability assessments and support penetration testing to identify and address weaknesses.</li>
            <li>Investigate security incidents and breaches.</li>
            <li>Develop and implement security policies and procedures.</li>
            <li>Work with IT, engineering, and business teams to raise security awareness, train staff on safe practices such as phishing prevention, and provide clear reporting on risks and incidents to management.</li>
          </ol>
        </div>

        <div class="role-card">
          <h3>Qualifications</h3>
          <ul>
            <li>Bachelor's degree in Computer Science, Information Technology, or related field.</li>
            <li>2+ years of experience in a related field</li>
            <li>Experience with security information and event management (SIEM) tools.</li>
            <li>Knowledge of network protocols and security technologies.</li>
            <li>Strong analytical and problem-solving skills.</li>
            <li>Relevant certifications (e.g., CISSP, CEH) are a plus.</li>
          </ul>
        </div>

        <div class="role-card">
          <h3>Preferred Qualifications</h3>
          <ul>
            <li>Industry certifications such as CompTIA Security+, CEH, CySA+, OSCP, or CISSP.</li>
            <li>2-4 years of hands-on experience in cybersecurity, network security, or IT security operations.</li>
            <li>Understanding of secure networking principles, firewalls, IDS/IPS, and endpoint protection.</li>
            <li>Proficiency in scripting or automation (e.g., Python, PowerShell, Bash).</li>
          </ul>
        </div>

        <div class="role-card">
          <h3>Salary and Benefits</h3>
          <ul>
            <li>Salary range: $80,000 - $90,000 per year + Bonus</li>
            <li>Comprehensive health insurance plans.</li>
            <li>Generous superannuation</li>
            <li>Opportunities for professional development and certifications.</li>
            <li>Flexible work arrangements, including remote work options.</li>
            <li>Good work/life balance.</li>
          </ul>
        </div>

        <div class="role-card">
          <h3>Reports to Director of Technology</h3>
        </div>

        <a href="apply.html"><button class="apply-button">Apply Now</button></a>
        <p>Ref #: CA202</p>
      </div>
    </section>

    <!--Section for DevSecOps Engineer role-->
    <section class="roles2">
      <h2 id="dse">DevSecOps Engineer</h2>
      <p>As a DevSecOps Engineer at Vangarde, you will play a critical role in integrating security practices into our DevOps processes. You will collaborate with development, operations, and security teams to ensure that security is embedded throughout the software development lifecycle. Your expertise in automation, infrastructure as code, and continuous integration/continuous deployment (CI/CD) pipelines will help us deliver secure applications efficiently.</p>

      <div class="roles-grid">
        <div class="role-card">
          <h3>Responsibilities and Duties</h3>
          <ol>
            <li>Design, implement, and maintain secure CI/CD pipelines that integrate automated security testing at every stage of the software lifecycle.</li>
            <li>Collaborate with development and operations teams to design and implement secure infrastructure as code (IaC) solutions.</li>
            <li>Conduct threat modeling and risk assessments for new applications and services.</li>
            <li>Monitor cloud and on-premise environments for misconfigurations, vulnerabilities, and compliance issues.</li>
            <li>Develop and maintain logging, monitoring, and alerting systems to detect and respond to security events in real time.</li>
          </ol>
        </div>

        <div class="role-card">
          <h3>Qualifications</h3>
          <ul>
            <li>Bachelor's degree in Computer Science, Information Technology, or related field.</li>
            <li>3+ years of experience in DevOps, software development, or IT operations with a focus on security.</li>
            <li>Experience with CI/CD tools (e.g., Jenkins, GitLab CI, CircleCI).</li>
            <li>Knowledge of cloud platforms (AWS, Azure, GCP) and containerization (Docker, Kubernetes).</li>
            <li>Strong scripting skills (e.g., Python, Bash, PowerShell).</li>
            <li>Relevant certifications (e.g., AWS Certified Security - Specialty, Certified Kubernetes Security Specialist) are a plus.</li>
          </ul>
        </div>

        <div class="role-card">
          <h3>Preferred Qualifications</h3>
          <ul>
            <li>Industry certifications such as AWS Certified Security - Specialty, Certified Kubernetes Security Specialist (CKS), or GIAC certifications.</li>
            <li>3-5 years of experience in DevOps or cloud engineering with a focus on security integration.</li>
            <li>Proficiency in infrastructure as code (IaC) tools such as Terraform or CloudFormation.</li>
            <li>Experience integrating security tools into CI/CD workflows (e.g., SonarQube, Trivy, Aqua, Snyk).</li>
          </ul>
        </div>

        <div class="role-card">
          <h3>Salary and Benefits</h3>
          <ul>
            <li>Salary range: $110,000 - $140,000 per year + Bonus</li>
            <li>Comprehensive health insurance plans.</li>
            <li>Generous superannuation</li>
            <li>Options for remote, hybrid, or flexible hours to support work-life balance.</li>
            <li>Generous annual leave, sick leave, and additional paid time off for personal needs.</li>
            <li>Work with a supportive team where security, innovation, and growth are priorities.</li>
          </ul>
        </div>

        <div class="role-card">
          <h3>Reports to Head of Security</h3>
        </div>

        <a href="apply.html"><button class="apply-button">Apply Now</button></a>
        <p>Ref #: DSE222</p>
      </div>
    </section>

    <!--Section for Cloud Security Architect role-->
    <section class="roles3">
      <h2 id="csa">Cloud Security Architect</h2>
      <p>As a Cloud Security Architect at Vangarde, you will be responsible for designing and implementing secure cloud architectures that protect our data and applications. You will work closely with cloud engineers, developers, and security teams to ensure that our cloud environments are resilient against threats and compliant with industry standards. Your expertise in cloud security best practices and architecture design will be essential in guiding our cloud strategy.</p>

      <div class="roles-grid">
        <div class="role-card">
          <h3>Responsibilities and Duties</h3>
          <ol>
            <li>Develop and implement secure cloud-based solutions across AWS, Azure, or GCP.</li>
            <li>Conduct risk assessments and threat modeling for cloud environments.</li>
            <li>Develop and enforce cloud security policies, standards, and best practices.</li>
            <li>Partner with development, DevOps, and infrastructure teams to embed security controls into CI/CD pipelines and infrastructure-as-code.</li>
            <li>Provide hands-on expertise to secure cloud integrations.</li>
          </ol>
        </div>

        <div class="role-card">
          <h3>Qualifications</h3>
          <ul>
            <li>Bachelor's degree in Computer Science, Information Technology, or related field.</li>
            <li>5+ years of experience in cloud architecture, cloud security, or related field.</li>
            <li>Experience with cloud platforms (AWS, Azure, GCP) and cloud security tools.</li>
            <li>Strong understanding of network security, identity and access management (IAM), encryption, and compliance frameworks (e.g., GDPR, HIPAA).</li>
            <li>Industry-recognized certifications like CISSP, CISM, CCSP or equivalent are a significant advantage.</li>
            <li>Proven competency in operating both autonomously and collaboratively in team settings.</li>
          </ul>
        </div>

        <div class="role-card">
          <h3>Preferred Qualifications</h3>
          <ul>
            <li>Industry certifications such as AWS Certified Solutions Architect - Professional, Microsoft Certified: Azure Solutions Architect Expert, or Google Professional Cloud Architect.</li>
            <li>5-7 years of experience in cloud architecture or cloud security roles.</li>
            <li>Deep understanding of multi-cloud environments and hybrid cloud architectures.</li>
            <li>Experience with automation and infrastructure as code (IaC) tools such as Terraform or CloudFormation.</li>
          </ul>
        </div>

        <div class="role-card">
          <h3>Salary and Benefits</h3>
          <ul>
            <li>Salary range: $135,000 - $160,000 per year + Bonus</li>
            <li>Comprehensive health insurance plans.</li>
            <li>Generous superannuation</li>
            <li>Opportunities for professional development and certifications.</li>
            <li>Flexible work arrangements, including remote work options.</li>
            <li>Good work/life balance.</li>
          </ul>
        </div>

        <div class="role-card">
          <h3>Reports to Head of Security</h3>
        </div>

        <a href="apply.html"><button class="apply-button">Apply Now</button></a>
        <p>Ref #: CSA121</p>
      </div>
    </section>
  </div>

  <?php include 'footer.inc'; ?>
=======
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
>>>>>>> Stashed changes
</body>
</html>
=======
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

=======
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

>>>>>>> Stashed changes
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

<<<<<<< Updated upstream
<<<<<<< Updated upstream
</html>
>>>>>>> Stashed changes
=======
</html>
>>>>>>> Stashed changes
=======
</html>
>>>>>>> Stashed changes
