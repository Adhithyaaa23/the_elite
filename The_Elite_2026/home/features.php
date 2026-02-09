<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Features | EliteServices – Smart Food Rescue</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            --elite-green: #2e7d32;
            --elite-saffron: #ff9933;
            --elite-dark: #0f172a;
            --glass: rgba(255, 255, 255, 0.95);
        }

        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            background-color: #f0f4f8;
            color: #334155;
        }

        /* Hero Styling */
        .features-hero {
            background: linear-gradient(135deg, var(--elite-dark) 0%, #1e293b 100%);
            color: white;
            padding: 100px 10%;
            text-align: center;
            clip-path: polygon(0 0, 100% 0, 100% 85%, 0 100%);
        }

        .features-hero h1 { font-size: 3rem; margin-bottom: 15px; }
        .features-hero h1 span { color: var(--elite-green); }

        /* Feature Pillars Section */
        .pillar-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            padding: 0 10%;
            margin-top: -80px;
        }

        .pillar-card {
            background: var(--glass);
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            text-align: center;
            transition: 0.3s ease;
            border-bottom: 5px solid transparent;
        }

        .pillar-card:hover {
            transform: translateY(-10px);
            border-bottom: 5px solid var(--elite-green);
        }

        .pillar-card i {
            font-size: 3.5rem;
            color: var(--elite-green);
            margin-bottom: 20px;
        }

        .pillar-card h2 { color: var(--elite-dark); margin-bottom: 15px; }

        /* Smart Technology Grid */
        .tech-section {
            padding: 100px 10%;
            background: #fff;
            margin-top: 50px;
        }

        .tech-header { text-align: center; margin-bottom: 60px; }
        .tech-header h2 { font-size: 2.5rem; color: var(--elite-dark); }

        .tech-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
        }

        .tech-item {
            display: flex;
            gap: 20px;
            margin-bottom: 40px;
        }

        .icon-circle {
            min-width: 60px;
            height: 60px;
            background: #e8f5e9;
            color: var(--elite-green);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
        }

        .tech-content h4 { font-size: 1.3rem; margin: 0 0 10px 0; color: var(--elite-dark); }
        .tech-image img {
            width: 100%;
            border-radius: 30px;
            box-shadow: 20px 20px 0px var(--elite-saffron);
        }

        /* CTA Section */
        .cta-bar {
            background: var(--elite-green);
            color: white;
            padding: 60px 10%;
            text-align: center;
            margin-top: 50px;
        }

        .btn-white {
            display: inline-block;
            background: white;
            color: var(--elite-green);
            padding: 15px 35px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: bold;
            margin-top: 20px;
            transition: 0.3s;
        }

        .btn-white:hover { background: var(--elite-saffron); color: white; }

        @media (max-width: 768px) {
            .tech-grid { grid-template-columns: 1fr; }
            .features-hero h1 { font-size: 2rem; }
        }
    </style>
</head>
<body>
    <header class="navbar">
        <div class="logo"><span class="heart">❤</span> EliteServices</div>
        <nav>
            <a href="index.php">Home</a>
            <a href="about.php">About</a>
            <a href="contact.php" class="active">Contact</a>
        </nav>
        <div class="nav-buttons">
            <a href="ulog.html" class="signin">Sign In/Signup</a>
        </div>
        
    </header>

    <section class="features-hero">
        <h1>Smart <span>Features</span> for Social Impact</h1>
        <p>Advanced logistics meets human compassion to end hunger in India.</p>
    </section>

    <div class="pillar-container">
        <div class="pillar-card">
            <i class="fas fa-hotel"></i>
            <h2>For Donors</h2>
            <p>List surplus food in under 60 seconds. Real-time logging for hotels, weddings, and cafeterias.</p>
        </div>

        <div class="pillar-card">
            <i class="fas fa-truck-loading"></i>
            <h2>Smart Logistics</h2>
            <p>AI-powered route optimization ensures food reaches NGOs while it's still fresh and safe.</p>
        </div>

        <div class="pillar-card">
            <i class="fas fa-heartbeat"></i>
            <h2>For NGOs</h2>
            <p>Instant alerts based on your location and capacity. Claim only what you can distribute.</p>
        </div>
    </div>

    <section class="tech-section">
        <div class="tech-header">
            <h2>Our Technology in Action</h2>
            <p>How EliteServices ensures transparency and speed.</p>
        </div>

        <div class="tech-grid">
            <div class="tech-info">
                <div class="tech-item">
                    <div class="icon-circle"><i class="fas fa-map-marked-alt"></i></div>
                    <div class="tech-content">
                        <h4>Geo-Fencing Technology</h4>
                        <p>Our system automatically alerts NGOs within a 10km radius of the donor to minimize travel time.</p>
                    </div>
                </div>

                <div class="tech-item">
                    <div class="icon-circle"><i class="fas fa-clipboard-check"></i></div>
                    <div class="tech-content">
                        <h4>Quality Verification</h4>
                        <p>Mandatory freshness timestamps and "Food Type" tagging to maintain health standards.</p>
                    </div>
                </div>

                <div class="tech-item">
                    <div class="icon-circle"><i class="fas fa-chart-line"></i></div>
                    <div class="tech-content">
                        <h4>Impact Analytics</h4>
                        <p>Every donation tracks meals saved and CO2 offset, providing donors with social responsibility reports.</p>
                    </div>
                </div>
            </div>

            <div class="tech-image">
               <img src="https://i.pinimg.com/1200x/73/b1/65/73b165078a24648bd782f8650f6e901f.jpg" alt="Technology Dashboard">
            </div>
        </div>
    </section>

    

    <section class="cta-bar">
        <h2>Ready to Save a Meal Today?</h2>
        <p>Join the 1,200+ partners who are making India a Zero-Hunger nation.</p>
        <a href="ulog.html" class="btn-white">Get Started Now</a>
    </section>

</body>
</html>