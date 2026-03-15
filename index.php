<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gowtham K's Portfolio</title>
    <meta name="description"
        content="Professional portfolio of Gowtham K - Computer Science Student, Software Developer, and HR Coordinator.">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="favicon.png?v=1.0">
    <link rel="shortcut icon" href="favicon.png?v=1.0">
    <link rel="apple-touch-icon" href="favicon.png?v=1.0">

    <!-- Preload Assets for Speed -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="preload" href="assets/images/profile_avatar_pro.jpeg" as="image">

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css?v=1.4">
</head>

<body id="page-top">
    <!-- Scroll Progress Bar -->
    <div class="scroll-progress-container">
        <div class="scroll-progress-bar"></div>
    </div>
    <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-white">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <span>Gowtham K</span>
                <img src="assets/images/profile_avatar_pro.jpeg" alt="GK" class="mini-avatar ms-2">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav align-items-center">
                    <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#experience">Experience</a></li>
                    <li class="nav-item"><a class="nav-link" href="#skills">Skills</a></li>
                    <li class="nav-item"><a class="nav-link" href="#projects">Projects</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                    <li class="nav-item ms-lg-3 d-flex align-items-center mt-3 mt-lg-0">
                        <button id="theme-toggle" class="btn btn-theme-toggle" title="Toggle Theme">
                            <i class="fas fa-moon"></i>
                        </button>
                        <a href="assets/resume.pdf" class="btn btn-primary-custom" download>Download Resume</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero-section">
        <div class="container">
            <div class="row align-items-center flex-column-reverse flex-lg-row">
                <div class="col-lg-7 reveal reveal-left mt-5 mt-lg-0">
                    <p class="fw-bold mb-2 text-uppercase"
                        style="color: var(--secondary-color); letter-spacing: 0.1em;">Computer Science Student</p>
                    <h1 class="display-4 fw-bold mb-4">Tech & <br><span class="text-primary-custom">HR
                            Enthusiast</span></h1>
                    <p class="lead text-muted-custom mb-5" style="max-width: 600px;">
                        Skilled in Python, Java, PHP, MySQL, Flutter, and Web Technologies. Seeking opportunities in
                        software development or HR coordination to apply technical knowledge, leadership skills, and
                        gain practical industry experience.
                    </p>
                    <div class="d-flex gap-3">
                        <a href="#contact" class="btn btn-primary-custom">Get in Touch</a>
                        <a href="#experience" class="btn btn-outline-custom">View Experience</a>
                    </div>

                    <div class="mt-5 d-flex align-items-center gap-4">
                        <a href="https://www.linkedin.com/in/gowthamk10895" target="_blank" class="text-dark fs-4"><i
                                class="fab fa-linkedin"></i></a>
                        <a href="mailto:gowthamnithyanandam6@gmail.com" class="text-dark fs-4"><i
                                class="fas fa-envelope"></i></a>
                        <a href="https://github.com/Gowtham-26K" target="_blank" class="text-dark fs-4"><i class="fab fa-github"></i></a>
                    </div>
                </div>
                <div class="col-lg-5 text-center reveal reveal-right" style="animation-delay: 0.2s;">
                    <img src="assets/images/profile_avatar_pro.jpeg" alt="Gowtham K" class="hero-img img-fluid">
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="bg-white">
        <div class="container">
            <h2 class="section-title reveal reveal-up">About Me</h2>
            <div class="row mt-4">
                <div class="col-lg-6 reveal reveal-left">
                    <div class="pro-card parallax-hover">
                        <p class="mb-3 text-muted-custom">I am a B.Sc. Computer Science student at Guru Nanak College,
                            Chennai, maintaining a CGPA of 9.5/10. My passion lies in solving complex problems through
                            solid backend development and optimizing project workflows via effective human resource
                            coordination.</p>
                        <p class="mb-4 text-muted-custom">I thrive in professional environments where I can leverage my
                            leadership and communication skills to organize teams, while simultaneously contributing
                            technical code in Python, Java, PHP, MySQL, and Flutter.</p>

                        <div class="row mt-4 pt-4 border-top">
                            <div class="col-6">
                                <h3 class="text-primary-custom fw-bold mb-0">9.5/10</h3>
                                <p class="text-muted-custom small text-uppercase fw-bold">Current CGPA</p>
                            </div>
                            <div class="col-6">
                                <h3 class="text-primary-custom fw-bold mb-0">4+</h3>
                                <p class="text-muted-custom small text-uppercase fw-bold">Projects Built</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Education -->
                <div class="col-lg-6 reveal reveal-right mt-4 mt-lg-0" style="animation-delay: 0.2s;">
                    <h4 class="mb-4"><i class="fas fa-graduation-cap text-primary-custom me-2"></i>Education</h4>
                    <div class="timeline">
                        <div class="timeline-item reveal reveal-up stagger-1">
                            <span class="timeline-date">2024 – Present</span>
                            <h5 class="mb-1">B.Sc. Computer Science</h5>
                            <p class="text-muted-custom mb-0">Guru Nanak College, Chennai</p>
                            <span class="badge bg-light text-dark border mt-2">CGPA: 9.5/10 (3 Semesters)</span>
                        </div>
                        <div class="timeline-item reveal reveal-up stagger-3">
                            <span class="timeline-date">2024</span>
                            <h5 class="mb-1">HSC (12th Grade)</h5>
                            <p class="text-muted-custom mb-0">CBSE Board</p>
                            <span class="badge bg-light text-dark border mt-2">79%</span>
                        </div>
                        <div class="timeline-item">
                            <span class="timeline-date">2022</span>
                            <h5 class="mb-1">SSLC (10th Grade)</h5>
                            <p class="text-muted-custom mb-0">CBSE Board</p>
                            <span class="badge bg-light text-dark border mt-2">76%</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Experience Section -->
    <section id="experience">
        <div class="container">
            <h2 class="section-title reveal reveal-up">Experience</h2>
            <div class="row mt-5">
                <div class="col-lg-4 mb-4 reveal reveal-up stagger-1">
                    <div class="pro-card h-100 border-top border-primary border-4 parallax-hover">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <div>
                                <h5 class="mb-1 fw-bold">Team Lead</h5>
                                <p class="text-primary-custom mb-0 small fw-bold">Team Nexus, Pentagon Innovations</p>
                            </div>
                            <span class="badge bg-primary">Remote</span>
                        </div>
                        <small class="text-muted-custom d-block mb-3 fw-medium">Dec 2025 – Present</small>
                        <ul class="text-muted-custom small ps-3 mb-0">
                            <li class="mb-2">Leading a small team developing an HRMS application for HR process
                                automation.</li>
                            <li>Coordinating feature planning and team task distribution.</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 mb-4 reveal reveal-up stagger-2">
                    <div class="pro-card h-100 border-top border-primary border-4 parallax-hover">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <div>
                                <h5 class="mb-1 fw-bold">HR Intern</h5>
                                <p class="text-primary-custom mb-0 small fw-bold">Pentagon Innovations</p>
                            </div>
                            <span class="badge bg-primary">Remote</span>
                        </div>
                        <small class="text-muted-custom d-block mb-3 fw-medium">Jul 2025 – Present</small>
                        <ul class="text-muted-custom small ps-3 mb-0">
                            <li class="mb-2">Coordinating team communication, task assignments, and internship
                                documentation.</li>
                            <li>Managing internship reports and internal workflow coordination.</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 mb-4 reveal reveal-up stagger-3">
                    <div class="pro-card h-100 border-top border-primary border-4 parallax-hover">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <div>
                                <h5 class="mb-1 fw-bold">Developer Intern</h5>
                                <p class="text-primary-custom mb-0 small fw-bold">Pentagon Innovations</p>
                            </div>
                            <span class="badge bg-dark">On-site (Chennai)</span>
                        </div>
                        <small class="text-muted-custom d-block mb-3 fw-medium">Apr 2025 – May 2025</small>
                        <ul class="text-muted-custom small ps-3 mb-0">
                            <li class="mb-2">Developed backend modules and forms using PHP and MySQL for registration
                                systems.</li>
                            <li>Collaborated with the frontend team to integrate validation and database functionality.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Leadership & Certifications -->
            <div class="row mt-5">
                <div class="col-md-6 reveal reveal-left">
                    <h4 class="mb-4"><i class="fas fa-users text-primary-custom me-2"></i>Leadership & Activities</h4>
                    <div class="pro-card h-100 parallax-hover">
                        <div class="mb-4 pb-4 border-bottom">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <h6 class="mb-0 fw-bold text-dark">Class Representative</h6>
                                <span class="badge bg-light text-dark border">2024 – 2026</span>
                            </div>
                            <p class="text-primary-custom small fw-bold mb-2">Guru Nanak College (B.Sc. Computer Science)</p>
                            <p class="text-muted-custom small mb-0"><i class="fas fa-check text-success me-2"></i>Acting as liaison between faculty and students.</p>
                        </div>
                        <div>
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <h6 class="mb-0 fw-bold text-dark">Internship Coordinator</h6>
                                <span class="badge bg-light text-dark border">2025 – 2026</span>
                            </div>
                            <p class="text-primary-custom small fw-bold mb-2">GNCIIES, Guru Nanak College</p>
                            <p class="text-muted-custom small mb-0"><i class="fas fa-check text-success me-2"></i>Supporting internship communication and student activities.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 reveal reveal-right mt-4 mt-md-0" style="animation-delay: 0.1s;">
                    <h4 class="mb-4"><i class="fas fa-certificate text-primary-custom me-2"></i>Certifications</h4>
                    <div class="pro-card h-100 parallax-hover">
                        <ul class="list-unstyled text-muted-custom mb-0">
                            <li class="mb-3 border-bottom pb-2">
                                <strong class="text-dark"><i class="fas fa-award text-primary-custom me-2"></i>HR
                                    Analytics</strong>
                                <span class="float-end badge bg-light text-dark border">NPTEL (72%)</span>
                            </li>
                            <li class="mb-3 border-bottom pb-2">
                                <strong class="text-dark"><i
                                        class="fas fa-award text-primary-custom me-2"></i>Python</strong>
                                <span class="float-end text-muted-custom small">Intellipaat</span>
                            </li>
                            <li class="mb-3 border-bottom pb-2">
                                <strong class="text-dark"><i class="fas fa-award text-primary-custom me-2"></i>Java, Web
                                    Tech, PHP</strong>
                                <span class="float-end text-muted-custom small">Data Flair</span>
                            </li>
                            <li class="mb-2">
                                <strong class="text-dark"><i
                                        class="fas fa-award text-primary-custom me-2"></i>Professional Skills</strong>
                                <p class="small mt-1 mb-0 ps-4">Time Mgmt, Email Writing, Presentations (Infosys
                                    Springboard)</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="bg-white">
        <div class="container">
            <h2 class="section-title reveal reveal-up">Technical Expertise</h2>
            <div class="row mt-5">
                <div class="col-lg-6 reveal reveal-left">
                    <div class="pro-card h-100 parallax-hover">
                        <h5 class="mb-4 fw-bold">Programming & Databases</h5>
                        <div class="d-flex flex-column align-items-start gap-2 pb-2 mb-3">
                            <div class="skill-badge"><i class="fas fa-database"></i> MySQL</div>
                            <div class="skill-badge"><i class="fab fa-python"></i> Python</div>
                            <div class="skill-badge"><i class="fab fa-java"></i> Java</div>
                            <div class="skill-badge"><i class="fab fa-php"></i> PHP</div>
                            <div class="skill-badge"><i class="fas fa-mobile-alt"></i> Flutter / Dart</div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mt-4 mt-lg-0 reveal reveal-right" style="animation-delay: 0.1s;">
                    <div class="pro-card mb-4 parallax-hover">
                        <h5 class="mb-3 fw-bold">Web Technologies & Tools</h5>
                        <div class="d-flex flex-wrap pb-2 border-bottom mb-3">
                            <div class="skill-badge"><i class="fab fa-html5"></i> HTML/CSS</div>
                            <div class="skill-badge"><i class="fab fa-js"></i> JavaScript</div>
                            <div class="skill-badge"><i class="fab fa-bootstrap"></i> Bootstrap</div>
                            <div class="skill-badge"><i class="fas fa-server"></i> XAMPP</div>
                            <div class="skill-badge"><i class="fas fa-database"></i> phpMyAdmin</div>
                            <div class="skill-badge"><i class="fas fa-code"></i> VS Code</div>
                            <div class="skill-badge"><i class="fas fa-robot"></i> AI: Cursor, Antigravity</div>
                        </div>

                        <h5 class="mb-3 fw-bold mt-2">Soft Skills</h5>
                        <div class="d-flex flex-wrap">
                            <span class="badge bg-light text-dark border me-2 mb-2 p-2 fw-medium">Leadership</span>
                            <span class="badge bg-light text-dark border me-2 mb-2 p-2 fw-medium">Teamwork</span>
                            <span class="badge bg-light text-dark border me-2 mb-2 p-2 fw-medium">Communication</span>
                            <span class="badge bg-light text-dark border me-2 mb-2 p-2 fw-medium">Problem Solving</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects">
        <div class="container">
            <h2 class="section-title reveal reveal-up">Project Portfolio</h2>
            <div class="row mt-5">

                <!-- Project 1 -->
                <div class="col-md-6 col-lg-4 mb-4 reveal reveal-up stagger-1">
                    <div class="pro-card p-0 overflow-hidden d-flex flex-column h-100 parallax-hover">
                        <div class="bg-light d-flex align-items-center justify-content-center border-bottom"
                            style="height: 180px;">
                            <i class="fas fa-film fa-3x text-primary-custom opacity-50"></i>
                        </div>
                        <div class="p-4 flex-grow-1 d-flex flex-column">
                            <h5 class="fw-bold mb-2">Movie Ticket Booking</h5>
                            <div class="project-tech mb-3 border-bottom pb-3">
                                <span>Python</span><span>MySQL</span><span>Team: 3</span>
                            </div>
                            <p class="small text-muted-custom mb-4 flex-grow-1">Built a backend ticket reservation
                                system handling DB queries and complex validation scenarios for bookings.</p>
                            <a href="https://github.com/Gowtham-26K/Movie-Ticket-Booking-System" target="_blank" class="btn btn-outline-custom btn-sm w-100"><i
                                    class="fab fa-github me-2"></i>GitHub Repo</a>
                        </div>
                    </div>
                </div>


                <!-- Project 2 -->
                <div class="col-md-6 col-lg-4 mb-4 reveal reveal-up stagger-2">
                    <div class="pro-card p-0 overflow-hidden d-flex flex-column h-100 parallax-hover">
                        <div class="bg-light d-flex align-items-center justify-content-center border-bottom"
                            style="height: 180px;">
                            <i class="fas fa-vials fa-3x text-primary-custom opacity-50"></i>
                        </div>
                        <div class="p-4 flex-grow-1 d-flex flex-column">
                            <h5 class="fw-bold mb-2">Lab Management System</h5>
                            <div class="project-tech mb-3 border-bottom pb-3">
                                <span>HR Coordinator</span><span>Team: 6</span>
                            </div>
                            <p class="small text-muted-custom mb-4 flex-grow-1">Coordinating communication, organizing
                                workflows, and tracking development milestones for a 6-member team.</p>
                            <a href="https://docs.google.com/spreadsheets/d/1Mw2cAbDSPmzUZSSHO9f4xM9lfgMtYlk8qe06e-OTEOU/edit?usp=sharing" target="_blank" class="btn btn-primary-custom btn-sm w-100"><i
                                    class="fas fa-tasks me-2"></i>Milestone Tracker</a>
                        </div>
                    </div>
                </div>

                <!-- Project 3 -->
                <div class="col-md-6 col-lg-4 mb-4 reveal reveal-up stagger-3">
                    <div class="pro-card p-0 overflow-hidden d-flex flex-column h-100 parallax-hover">
                        <div class="bg-light d-flex align-items-center justify-content-center border-bottom"
                            style="height: 180px;">
                            <i class="fas fa-building fa-3x text-primary-custom opacity-50"></i>
                        </div>
                        <div class="p-4 flex-grow-1 d-flex flex-column">
                            <h5 class="fw-bold mb-2">ELAN Mock Company</h5>
                            <div class="project-tech mb-3 border-bottom pb-3">
                                <span>PHP</span><span>MySQL</span><span>HTML/CSS</span>
                            </div>
                            <p class="small text-muted-custom mb-4 flex-grow-1">Developing a mock corporate website
                                emphasizing dynamic pages and backend database functionality.</p>
                            <a href="https://gowtham-26k.github.io/ELAN/" target="_blank" class="btn btn-outline-custom btn-sm w-100"><i
                                    class="fas fa-globe me-2"></i>View Site</a>
                        </div>
                    </div>
                </div>

                <!-- Project 4 -->
                <div class="col-md-6 col-lg-4 mb-4 reveal reveal-up stagger-4">
                    <div class="pro-card p-0 overflow-hidden d-flex flex-column h-100 bg-primary text-white parallax-hover"
                        style="border-color: var(--primary-color)">
                        <div class="d-flex align-items-center justify-content-center"
                            style="height: 180px; background: rgba(0,0,0,0.1);">
                            <i class="fas fa-user-circle fa-3x text-white opacity-75"></i>
                        </div>
                        <div class="p-4 flex-grow-1 d-flex flex-column">
                            <h5 class="fw-bold mb-2 text-white">Professional Portfolio</h5>
                            <div class="project-tech mb-3 border-bottom border-light pb-3">
                                <span class="bg-white text-primary">PHP</span><span
                                    class="bg-white text-primary">MySQL</span>
                            </div>
                            <p class="small text-white-50 mb-4 flex-grow-1">Conceptualized, designed, and developed this
                                portfolio to showcase professional readiness and technical skills.</p>
                            <a href="#" class="btn btn-light btn-sm w-100 text-primary-custom fw-bold"><i
                                    class="fas fa-check-circle me-2"></i>Currently Viewing</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="bg-white border-top">
        <div class="container">
            <h2 class="section-title reveal reveal-up">Get In Touch</h2>
            <div class="row mt-5 justify-content-center">
                <div class="col-lg-10 reveal reveal-zoom">
                    <div class="pro-card border-0 shadow-lg p-0 overflow-hidden parallax-hover">
                        <div class="row g-0">
                            <!-- Contact Info -->
                            <div class="col-md-5 bg-light p-4 p-lg-5 border-end-0 border-md-end border-bottom border-md-bottom-0">
                                <h4 class="fw-bold mb-4">Contact Information</h4>
                                <p class="text-muted-custom mb-5">Feel free to reach out for software development or HR
                                    coordination opportunities.</p>

                                <div class="d-flex align-items-center mb-4">
                                    <div class="bg-white p-3 rounded-circle shadow-sm me-3 text-primary-custom">
                                        <i class="fas fa-phone"></i>
                                    </div>
                                    <div>
                                        <small class="text-muted fw-bold text-uppercase d-block">Phone</small>
                                        <span class="text-dark fw-medium">+91 63801 56773</span>
                                    </div>
                                </div>

                                <div class="d-flex align-items-center mb-4">
                                    <div class="bg-white p-3 rounded-circle shadow-sm me-3 text-primary-custom">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                    <div>
                                        <small class="text-muted fw-bold text-uppercase d-block">Email</small>
                                        <a href="mailto:gowthamnithyanandam6@gmail.com"
                                            class="text-dark fw-medium text-decoration-none">gowthamnithyanandam6@gmail.com</a>
                                    </div>
                                </div>

                                <div class="d-flex align-items-center">
                                    <div class="bg-white p-3 rounded-circle shadow-sm me-3 text-primary-custom">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                    <div>
                                        <small class="text-muted fw-bold text-uppercase d-block">Location</small>
                                        <span class="text-dark fw-medium">Chennai, Tamil Nadu</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Contact Form -->
                            <div class="col-md-7 p-4 p-lg-5">
                                <form action="process_contact.php" method="POST">
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label>Full Name</label>
                                            <input type="text" name="name" class="form-control" required
                                                placeholder="John Doe">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label>Email Address</label>
                                            <input type="email" name="email" class="form-control" required
                                                placeholder="john@example.com">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label>Subject</label>
                                        <input type="text" name="subject" class="form-control"
                                            placeholder="Opportunity or Inquiry">
                                    </div>
                                    <div class="mb-4">
                                        <label>Message</label>
                                        <textarea name="message" class="form-control" rows="5" required
                                            placeholder="How can I help you?"></textarea>
                                    </div>
                                    <div>
                                        <button type="submit" class="btn btn-primary-custom px-5 py-2 w-100"><i
                                                class="fas fa-paper-plane me-2"></i>Send Message</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-5 text-center mt-auto">
        <div class="container">
            <h5 class="fw-bold mb-3 text-dark">Gowtham K.</h5>
            <div class="d-flex justify-content-center gap-3 mb-4">
                <a href="https://www.linkedin.com/in/gowthamk10895" class="text-muted-custom fs-5"><i
                        class="fab fa-linkedin"></i></a>
                <a href="mailto:gowthamnithyanandam6@gmail.com" class="text-muted-custom fs-5"><i
                        class="fas fa-envelope"></i></a>
            </div>
            <p class="mb-1 text-muted-custom small">&copy; <?php echo date('Y'); ?> Gowtham K. All Rights Reserved.</p>
            <p class="text-muted small">Designed for Professional Excellence</p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS -->
    <script src="js/script.js?v=1.3"></script>
</body>

</html>