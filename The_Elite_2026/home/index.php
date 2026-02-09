<?php
// index.php
// Home page of FoodShare platform
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>EliteServices – Reduce Food Waste</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>

<div class="page-wrapper">

    <!-- NAVBAR -->
    <header class="navbar">
        <div class="logo">
            <span class="heart">❤</span> Elite<span>Services</span>
        </div>

        <nav>
            <a href="features.php">Features</a>
            <a href="about.php">About</a>
            <a href="contact.php">Contact</a>
        </nav>

        <div class="nav-buttons">
            <a href="ulog.html" class="signin">Sign In</a>
        </div>
    </header>

    <!-- HERO SECTION -->
    <section class="hero">
        <div class="hero-left">
            <span class="tag">Fighting Food Waste Together</span>

            <h1>
                Connect Surplus Food<br>
                with Those Who Need It<br>
                Most
            </h1>

            <p>
                A digital platform bridging food donors and NGOs for real-time
                redistribution, reducing waste while feeding communities.
            </p>

            <div class="cta">
                <a href="ureg.html" class="btn primary">Register →</a>
            </div>

            <div class="stats">
                <div>
                    <h3>10K+</h3>
                    <span>Meals Saved</span>
                </div>
                <div>
                    <h3>500+</h3>
                    <span>Donors</span>
                </div>
                <div>
                    <h3>150+</h3>
                    <span>NGO Partners</span>
                </div>
            </div>
        </div>

        <div class="hero-right">
            <div class="image-box">
                <img src="https://i.pinimg.com/1200x/ac/b4/24/acb42467b068d394dbf54eb1fa2ab679.jpg" alt="Food Image">
                <div class="floating-card">
                    <h4>40%</h4>
                    <span>Waste Reduction</span>
                </div>
            </div>
        </div>
    </section>

    <!-- WHY CHOOSE FOODSHARE SECTION -->
    <section class="why-foodshare">

        <h2>Why Choose EliteServices?</h2>
        <p class="subtitle">
            Our platform makes food redistribution simple, efficient, and impactful
        </p>

        <div class="features-grid">

            <div class="feature-card">
                <div class="icon green">⏱</div>
                <h4>Real-Time Matching</h4>
                <p>
                    Instantly connect surplus food with nearby NGOs in real-time,
                    reducing response time and spoilage.
                </p>
            </div>

            <div class="feature-card">
                <div class="icon blue">📍</div>
                <h4>Location-Based</h4>
                <p>
                    Smart GPS tracking ensures food reaches the nearest communities
                    quickly and efficiently.
                </p>
            </div>

            <div class="feature-card">
                <div class="icon purple">🚚</div>
                <h4>Logistics Support</h4>
                <p>
                    Integrated delivery tracking and scheduling streamline the
                    redistribution process.
                </p>
            </div>

            <div class="feature-card">
                <div class="icon yellow">👥</div>
                <h4>NGO Network</h4>
                <p>
                    Access verified NGOs and charities ready to distribute food
                    to communities in need.
                </p>
            </div>

            <div class="feature-card">
                <div class="icon red">❤</div>
                <h4>Impact Tracking</h4>
                <p>
                    Monitor your contribution with analytics on meals saved
                    and waste reduced.
                </p>
            </div>

            <div class="feature-card">
                <div class="icon indigo">✔</div>
                <h4>Verified Partners</h4>
                <p>
                    All donors and NGOs are verified to ensure food safety
                    and trusted redistribution.
                </p>
            </div>

        </div>
    </section>

</div>

<?php include("footer.php"); ?>

</body>
</html>
