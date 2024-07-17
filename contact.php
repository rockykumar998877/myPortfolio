<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Me - Rocky Kumar</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="sidebar">
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="services.php">Services</a></li>
                    <li><a href="experience.php">Experiences</a></li>
                    <li><a href="contact.php">Contact me</a></li>
                    <li><a href="skill.php">Skills</a></li>
                </ul>
            </nav>
        </div>
        <div class="content">
            <div class="pdf-container">
                <h2>My CV</h2>
                <embed src="CV.pdf" type="application/pdf" width="100%" height="600px" />
            </div>
            <div class="form-container">
                <h2>Contact Form</h2>
                <form id="contactForm">
                    <input type="text" id="name" name="name" placeholder="Your Name" required>
                    <input type="email" id="email" name="email" placeholder="Your Email" required>
                    <textarea id="message" name="message" rows="4" placeholder="Your Message" required></textarea>
                    <button type="submit">Send</button>
                </form>
            </div>
        </div>
    </div>
    <script>
        document.getElementById('contactForm').addEventListener('submit', function(event) {
            event.preventDefault();

            var name = document.getElementById('name').value;
            var email = document.getElementById('email').value;
            var message = document.getElementById('message').value;

            window.location.href = `mailto:your-email@example.com?subject=Contact%20from%20${name}&body=${message}%0A%0AFrom,%0A${name}%0A${email}`;
        });
    </script>
</body>

</html>
