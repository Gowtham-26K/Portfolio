<?php
// process_contact.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = isset($_POST['name']) ? strip_tags(trim($_POST['name'])) : "";
    $email = isset($_POST['email']) ? filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL) : "";
    $subject = isset($_POST['subject']) ? strip_tags(trim($_POST['subject'])) : "New Contact Inquiry";
    $message = isset($_POST['message']) ? strip_tags(trim($_POST['message'])) : "";

    // Send email to you
    $to = "gowthamnithyanandam6@gmail.com";
    $email_subject = "Portfolio Contact: $subject";
    $email_body = "You have received a new message from your portfolio contact form.\n\n".
                  "Name: $name\n".
                  "Email: $email\n".
                  "Subject: $subject\n".
                  "Message:\n$message";
    
    $headers = "From: noreply@gowthamk.com" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();
    
    // Attempt to send
    $mail_sent = @mail($to, $email_subject, $email_body, $headers);

    // Feedback Page with Auto-Redirect
    ?>
    <!DOCTYPE html>
    <html lang="en" data-theme="light">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Message Sent | Gowtham K</title>
        <!-- Auto Redirect after 5 seconds -->
        <meta http-equiv="refresh" content="5;url=index.php">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <link rel="stylesheet" href="css/style.css">
        <style>
            body {
                height: 100vh;
                display: flex;
                align-items: center;
                justify-content: center;
                background-color: var(--bg-main);
                font-family: 'Inter', sans-serif;
            }
            .success-card {
                max-width: 500px;
                width: 90%;
                padding: 3rem;
                text-align: center;
            }
            .success-icon {
                font-size: 4rem;
                color: #10b981;
                margin-bottom: 1.5rem;
                animation: scaleIn 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            }
            @keyframes scaleIn {
                from { transform: scale(0); opacity: 0; }
                to { transform: scale(1); opacity: 1; }
            }
            .redirect-text {
                font-size: 0.9rem;
                color: var(--text-muted);
                margin-top: 2rem;
            }
            .progress-timer {
                height: 3px;
                background: var(--primary-color);
                width: 100%;
                position: absolute;
                bottom: 0;
                left: 0;
                animation: timer 5s linear forwards;
            }
            @keyframes timer {
                from { width: 100%; }
                to { width: 0%; }
            }
        </style>
    </head>
    <body class="reveal active">
        <div class="pro-card success-card shadow-lg position-relative overflow-hidden">
            <div class="success-icon">
                <i class="fas fa-check-circle"></i>
            </div>
            <h2 class="fw-bold text-dark mb-3">Message Sent Successfully!</h2>
            <p class="text-muted-custom mb-4">
                Thank you, <strong><?php echo htmlspecialchars($name); ?></strong>. <br>
                Your message has been delivered to Gowtham.
            </p>
            <a href="index.php" class="btn btn-primary-custom">
                <i class="fas fa-arrow-left me-2"></i>Return Now
            </a>
            <div class="redirect-text">
                Redirecting to home page in <span id="countdown">5</span> seconds...
            </div>
            <!-- Visual Timer Bar -->
            <div class="progress-timer"></div>
        </div>

        <script>
            let count = 5;
            const timer = setInterval(() => {
                count--;
                document.getElementById('countdown').textContent = count;
                if (count <= 0) clearInterval(timer);
            }, 1000);

            // Inherit theme from localStorage
            const savedTheme = localStorage.getItem('theme') || 'light';
            document.documentElement.setAttribute('data-theme', savedTheme);
        </script>
    </body>
    </html>
    <?php
} else {
    header("Location: index.php");
    exit();
}
?>