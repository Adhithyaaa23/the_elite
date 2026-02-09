<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us | EliteServices – Feeding the Future</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            --elite-green: #2e7d32;
            --elite-saffron: #ff9933;
            --elite-dark: #0f172a;
            --white: #ffffff;
        }

        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            color: #334155;
            background-color: #f8fafc;
        }

        /* Hero Section */
        .about-hero {
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), 
                        url('https://images.unsplash.com/photo-1488521787991-ed7bbaae773c?auto=format&fit=crop&q=80&w=1200');
            background-size: cover;
            background-position: center;
            height: 400px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-align: center;
        }

        .about-hero h1 { font-size: 3rem; margin-bottom: 10px; }
        .about-hero p { font-size: 1.2rem; color: #cbd5e1; }

        /* Main Content */
        .section-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 80px 20px;
        }

        .grid-layout {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 50px;
            align-items: center;
        }

        .image-box img {
            width: 100%;
            border-radius: 20px;
            box-shadow: 20px 20px 0px var(--elite-green);
        }

        .content-box h2 {
            color: var(--elite-green);
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        .content-box p {
            line-height: 1.8;
            font-size: 1.1rem;
            margin-bottom: 20px;
        }

        /* Stats Section */
        .stats-bar {
            background: var(--elite-dark);
            color: white;
            padding: 60px 0;
            text-align: center;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            max-width: 1200px;
            margin: 0 auto;
            gap: 30px;
        }

        .stat-item h3 { font-size: 2.5rem; color: var(--elite-saffron); margin: 0; }
        .stat-item p { font-size: 1rem; color: #94a3b8; margin-top: 5px; }

        /* Core Values */
        .values-section {
            text-align: center;
            padding: 80px 20px;
            background: white;
        }

        .values-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            margin-top: 50px;
        }

        .value-card {
            padding: 40px;
            border-radius: 15px;
            background: #f1f5f9;
            transition: 0.3s;
        }

        .value-card:hover { transform: translateY(-10px); background: #fff; box-shadow: 0 10px 30px rgba(0,0,0,0.1); }
        .value-card i { font-size: 3rem; color: var(--elite-green); margin-bottom: 20px; }
        .value-card h4 { font-size: 1.5rem; margin-bottom: 15px; }

        @media (max-width: 768px) {
            .grid-layout { grid-template-columns: 1fr; }
            .about-hero h1 { font-size: 2.2rem; }
        }
    </style>
</head>
<body>
    <header class="navbar">
        <div class="logo"><span class="heart">❤</span> EliteServices</div>
        <nav>
            <a href="index.php">Home</a>
            <a href="contact.php">Contact</a>
            <a href="features.php" class="active">Feature</a>
        </nav>
        <div class="nav-buttons">
            <a href="ulog.html" class="signin">Sign In/Signup</a>
        </div>
        
    </header>

    <div class="about-hero">
        <div>
            <h1>Our Mission</h1>
            <p>Bridging the Gap Between Surplus Food and Empty Plates</p>
        </div>
    </div>

    <section class="section-container">
        <div class="grid-layout">
            <div class="image-box">
                <img src="https://images.unsplash.com/photo-1593113598332-cd288d649433?auto=format&fit=crop&q=80&w=800" alt="Volunteer Working">
            </div>
            <div class="content-box">
                <h2>Who is EliteServices?</h2>
                <p>Founded in 2024, **EliteServices** is a platform dedicated to solving the massive paradox of food waste in India. While tons of food are discarded daily by hotels and weddings, millions go to bed hungry.</p>
                <p>Our platform provides a seamless digital bridge where donors can list surplus food, and verified NGOs can claim it for immediate redistribution.</p>
                <a href="contact.php" style="background: var(--elite-saffron); color: white; padding: 12px 25px; text-decoration: none; border-radius: 5px; font-weight: bold;">Join Our Journey</a>
            </div>
        </div>
    </section>

    <section class="stats-bar">
        <div class="stats-grid">
            <div class="stat-item">
                <h3>50K+</h3>
                <p>Meals Recovered</p>
            </div>
            <div class="stat-item">
                <h3>200+</h3>
                <p>Partner NGOs</p>
            </div>
            <div class="stat-item">
                <h3>15+</h3>
                <p>Cities Covered</p>
            </div>
            <div class="stat-item">
                <h3>1,200</h3>
                <p>Elite Donors</p>
            </div>
        </div>
    </section>

    <section class="values-section">
        <div class="section-container">
            <h2>Why We Do It</h2>
            <div class="values-grid">
                <div class="value-card">
                    <i class="fas fa-leaf"></i>
                    <h4>Zero Waste</h4>
                    <p>We believe food is a resource, not trash. Our goal is to divert every edible meal from landfills.</p>
                </div>
                <div class="value-card">
                    <i class="fas fa-hands-helping"></i>
                    <h4>Community</h4>
                    <p>By connecting local businesses with local charities, we strengthen the social fabric of our cities.</p>
                </div>
                <div class="value-card">
                    <i class="fas fa-shield-alt"></i>
                    <h4>Efficiency</h4>
                    <p>Using real-time geolocation, we ensure food is picked up while it's still fresh and safe to eat.</p>
                </div>
            </div>
        </div>
    </section>

</body>
</html>