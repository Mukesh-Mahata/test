<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mukesh Mahata | Software Developer Portfolio</title>
    <style>
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            margin: 0; padding: 0;
            background: #f8fafc;
            color: #222;
        }
        header {
            background: linear-gradient(90deg, #0077cc 0%, #00c6ff 100%);
            color: #fff;
            padding: 50px 0 30px 0;
            text-align: center;
        }
        .profile-img {
            width: 130px;
            border-radius: 50%;
            border: 4px solid #fff;
            margin-bottom: 20px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }
        h1 {
            margin: 0 0 10px 0;
            font-size: 2.5em;
            font-weight: 700;
        }
        h2 {
            color: #0077cc;
            margin-top: 0;
        }
        .container {
            max-width: 900px;
            margin: 40px auto;
            background: #fff;
            padding: 35px;
            border-radius: 10px;
            box-shadow: 0 2px 12px rgba(0,0,0,0.08);
        }
        .about, .education, .skills, .projects, .contact {
            margin-bottom: 40px;
        }
        .skills-list {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            margin-top: 10px;
        }
        .skill {
            background: #e3f2fd;
            color: #0077cc;
            padding: 8px 16px;
            border-radius: 20px;
            font-size: 1em;
            font-weight: 500;
        }
        .project {
            margin-bottom: 25px;
        }
        .project-title {
            font-size: 1.15em;
            font-weight: 600;
            margin-bottom: 5px;
        }
        .project-desc {
            margin-bottom: 5px;
        }
        .contact-info {
            font-size: 1.1em;
        }
        a {
            color: #0077cc;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
        @media (max-width: 600px) {
            .container { padding: 15px; }
            header { padding: 30px 0 20px 0; }
        }
    </style>
</head>
<body>
    <header>
        <img src="/mukesh.jpg" alt="Mukesh Mahata" class="profile-img">
        <h1>Mukesh Mahata</h1>
        <p>Software Developer | Computer Science Graduate</p>
    </header>
    <div class="container">
        <section class="about">
            <h2>About Me</h2>
            <p>
                Hi! I'm Mukesh Mahata, a passionate software developer with a strong foundation in computer science. I love building scalable web applications, solving complex problems, and learning new technologies. My goal is to create impactful software that makes a difference.
            </p>
        </section>
        <section class="education">
            <h2>Education</h2>
            <ul>
                <li>
                    <strong>Bachelor of Technology in Computer Science</strong><br>
                    Far Western University (FWU), 2021 - 2025
                </li>
                <!-- Add more education if needed -->
            </ul>
        </section>
        <section class="skills">
            <h2>Skills</h2>
            <div class="skills-list">
                <span class="skill">PHP</span>
                <span class="skill">Laravel</span>
                <span class="skill">JavaScript</span>
                <span class="skill">React</span>
                <span class="skill">Node.js</span>
                <span class="skill">Python</span>
                <span class="skill">MySQL</span>
                <span class="skill">Git</span>
                <span class="skill">REST APIs</span>
                <span class="skill">Docker</span>
            </div>
        </section>
        <section class="projects">
            <h2>Projects</h2>
            <div class="project">
                <div class="project-title">Portfolio Website</div>
                <div class="project-desc">A personal portfolio built with Laravel and React to showcase my work and skills.</div>
                <a href="https://github.com/mukeshmahata/portfolio" target="_blank">View on GitHub</a>
            </div>
            <div class="project">
                <div class="project-title">Task Manager App</div>
                <div class="project-desc">A full-stack task management application using Node.js, Express, and MongoDB.</div>
                <a href="https://github.com/mukeshmahata/task-manager" target="_blank">View on GitHub</a>
            </div>
            <div class="project">
                <div class="project-title">Weather Dashboard</div>
                <div class="project-desc">A responsive dashboard that displays real-time weather data using React and OpenWeather API.</div>
                <a href="https://github.com/mukeshmahata/weather-dashboard" target="_blank">View on GitHub</a>
            </div>
            <!-- Add more projects as needed -->
        </section>
        <section class="contact">
            <h2>Contact</h2>
            <div class="contact-info">
                <p>Email: <a href="mailto:mukesh.mahata83@gmail.com">mukesh.mahata83@gmail.com</a></p>
                <p>
                    <a href="https://github.com/mukeshmahata" target="_blank">GitHub</a> |
                    <a href="https://linkedin.com/in/mukeshmahata" target="_blank">LinkedIn</a>
                </p>
            </div>
        </section>
    </div>
</body>
</html>