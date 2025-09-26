<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0; padding: 0;
            background: #f4f4f4;
        }
        header {
            background: #222;
            color: #fff;
            padding: 40px 0;
            text-align: center;
        }
        .container {
            max-width: 900px;
            margin: 40px auto;
            background: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }
        .profile-img {
            width: 120px;
            border-radius: 50%;
            margin-bottom: 20px;
        }
        h1 {
            margin: 0 0 10px 0;
        }
        .projects {
            margin-top: 30px;
        }
        .project {
            margin-bottom: 20px;
        }
        .project-title {
            font-size: 1.2em;
            margin-bottom: 5px;
        }
        .contact {
            margin-top: 40px;
            text-align: center;
        }
        a {
            color: #0077cc;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <header>
        <img src="https://via.placeholder.com/120" alt="Profile" class="profile-img">
        <h1>Your Name</h1>
        <p>Web Developer | Designer | Programmer</p>
    </header>
    <div class="container">
        <section>
            <h2>About Me</h2>
            <p>
                Welcome to my portfolio! I am a passionate web developer with experience in building modern and responsive websites. I love turning ideas into reality using code.
            </p>
        </section>
        <section class="projects">
            <h2>Projects</h2>
            <div class="project">
                <div class="project-title">Project One</div>
                <p>A brief description of your first project. <a href="#">View Project</a></p>
            </div>
            <div class="project">
                <div class="project-title">Project Two</div>
                <p>A brief description of your second project. <a href="#">View Project</a></p>
            </div>
            <!-- Add more projects as needed -->
        </section>
        <section class="contact">
            <h2>Contact</h2>
            <p>Email: <a href="mailto:your.email@example.com">your.email@example.com</a></p>
            <p>
                <a href="https://github.com/yourusername" target="_blank">GitHub</a> |
                <a href="https://linkedin.com/in/yourusername" target="_blank">LinkedIn</a>
            </p>
        </section>
    </div>
</body>
</html>