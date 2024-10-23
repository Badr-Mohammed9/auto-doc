<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auto Doc - Home</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }
        body {
            background-color: #f0f4f8;
            color: #333;
            line-height: 1.6;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
        }
        header {
            background-color: #ffffff;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            padding: 20px 0;
        }
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .logo {
            font-size: 24px;
            font-weight: bold;
            color: #3498db;
        }
        .nav-links a {
            margin-left: 20px;
            text-decoration: none;
            color: #333;
        }
        .hero {
            text-align: center;
            padding: 60px 0;
        }
        h1 {
            font-size: 48px;
            margin-bottom: 20px;
            color: #2c3e50;
        }
        .hero p {
            font-size: 18px;
            color: #7f8c8d;
            margin-bottom: 30px;
        }
        .cta-button {
            display: inline-block;
            background-color: #3498db;
            color: #ffffff;
            padding: 12px 24px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }
        .cta-button:hover {
            background-color: #2980b9;
        }
        .features {
            display: flex;
            justify-content: space-between;
            margin-top: 60px;
        }
        .feature {
            flex-basis: 30%;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .feature h2 {
            font-size: 24px;
            margin-bottom: 15px;
            color: #2c3e50;
        }
        .feature p {
            color: #7f8c8d;
        }
    </style>
</head>
<body>
<header>
    <div class="container">
        <nav>
            <div class="logo">Auto Doc</div>
            <div class="nav-links">
                <a href="#">Home</a>
                <a href="#">Features</a>
                <a href="#">Pricing</a>
                <a href="dashboard.html">Dashboard</a>
            </div>
        </nav>
    </div>
</header>

<main>
    <div class="container">
        <section class="hero">
            <h1>Welcome to Auto Doc</h1>
            <p>Automate your documentation process and keep your team in sync</p>
            <a href=" {{route('projects') }}" class="cta-button">Get Started</a>
        </section>

        <section class="features">
            <div class="feature">
                <h2>AI-Powered</h2>
                <p>Our advanced AI algorithms analyze your code and generate comprehensive documentation automatically.</p>
            </div>
            <div class="feature">
                <h2>Real-time Updates</h2>
                <p>Documentation stays up-to-date with your codebase through seamless integration with your version control system.</p>
            </div>
            <div class="feature">
                <h2>Collaboration</h2>
                <p>Easily share and collaborate on documentation with your team members, ensuring everyone is on the same page.</p>
            </div>
        </section>
    </div>
</main>
</body>
</html>
