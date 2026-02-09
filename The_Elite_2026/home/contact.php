<?php
// Reliable path fix for subfolder navigation
$base_dir = dirname(__DIR__); 
$db_path = $base_dir . DIRECTORY_SEPARATOR . 'includes' . DIRECTORY_SEPARATOR . 'db_connect.php';
if (file_exists($db_path)) { include($db_path); }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact EliteServices – India's Food Savior</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            --elite-green: #2e7d32;
            --elite-saffron: #ff9933;
            --elite-light: #f9fbf9;
        }

        .contact-hero {
            background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), 
                        url('https://images.unsplash.com/photo-1585932231552-05b095907471?auto=format&fit=crop&q=80&w=1200');
            background-size: cover;
            background-position: center;
            height: 300px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-align: center;
            border-radius: 0 0 50px 50px;
        }

        .contact-container { 
            padding: 50px 10%; 
            display: grid; 
            grid-template-columns: 1fr 1.2fr; 
            gap: 40px; 
            margin-top: -50px;
        }

        .info-panel {
            background: white;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.1);
        }

        .info-panel h2 { color: var(--elite-green); margin-bottom: 10px; }
        .namaste-text { color: var(--elite-saffron); font-weight: bold; font-size: 1.2rem; display: block; margin-bottom: 20px; }

        .contact-card {
            display: flex;
            align-items: center;
            margin-bottom: 25px;
            padding: 15px;
            background: var(--elite-light);
            border-radius: 12px;
            border-left: 5px solid var(--elite-saffron);
        }

        .contact-card i { 
            font-size: 1.5rem; 
            color: var(--elite-green); 
            margin-right: 20px; 
            width: 30px;
        }

        .form-panel {
            background: white;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.1);
        }

        .form-group { margin-bottom: 20px; }
        .form-group label { display: block; margin-bottom: 8px; font-weight: 600; color: #333; }
        .form-group input, .form-group textarea, .form-group select { 
            width: 100%; padding: 14px; border: 2px solid #eee; border-radius: 10px; font-family: inherit; transition: 0.3s;
        }

        .form-group input:focus { border-color: var(--elite-green); outline: none; }

        .submit-btn { 
            background: linear-gradient(45deg, var(--elite-green), #43a047);
            color: white; border: none; width: 100%; padding: 15px; 
            border-radius: 10px; cursor: pointer; font-size: 1.1rem; font-weight: bold;
            box-shadow: 0 5px 15px rgba(46, 125, 50, 0.3);
        }

        @media (max-width: 992px) { .contact-container { grid-template-columns: 1fr; margin-top: 20px; } }
    </style>
</head>
<body>

    <header class="navbar">
        <div class="logo"><span class="heart">❤</span> EliteServices</div>
        <nav>
            <a href="index.php">Home</a>
            <a href="about.php">About</a>
            <a href="features.php" class="active">Feature</a>
        </nav>
        <div class="nav-buttons">
            <a href="ulog.html" class="signin">Sign In/Signup</a>
        </div>
        
    </header>

    <div class="contact-hero">
        <div>
            <h1>Contact Our Mission Control</h1>
            <p>Every message is a step toward a Zero-Hunger India</p>
        </div>
    </div>

    <section class="contact-container">
        <div class="info-panel">
            <span class="namaste-text">नमस्ते ! (Namaste)</span>
            <h2>Get in Touch</h2>
            <p style="color: #666; margin-bottom: 30px;">Whether you are a hotel in Mumbai or an NGO in Delhi, we are ready to facilitate your donation.</p>

            <div class="contact-card">
                <i class="fas fa-phone-alt"></i>
                <div>
                    <strong>24/7 Helpline</strong><br>
                    <span style="font-size: 1.1rem;">+91 98765 43210</span>
                </div>
            </div>

            <div class="contact-card">
                <i class="fas fa-envelope"></i>
                <div>
                    <strong>Official Email</strong><br>
                    <span>connect@eliteservices.in</span>
                </div>
            </div>

            <div class="contact-card">
                <i class="fas fa-map-marker-alt"></i>
                <div>
                    <strong>Head Office</strong><br>
                    <span>Sector 44, Gurgaon, Delhi, India</span>
                </div>
            </div>
        </div>

        <div class="form-panel">
            <form action="contact_action.php" method="POST">
                <div class="form-group">
                    <label>Your Name</label>
                    <input type="text" name="name" placeholder="Enter your full name" required>
                </div>
                <div class="form-group">
                    <label>Email ID</label>
                    <input type="email" name="email" placeholder="example@gmail.com" required>
                </div>
                <div class="form-group">
                    <label>Inquiry Type</label>
                    <select name="type">
                        <option>Register as Restaurant/Hotel</option>
                        <option>Register as NGO/Charity</option>
                        <option>Report a Logistics Issue</option>
                        <option>Other</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Message</label>
                    <textarea name="message" rows="4" placeholder="How can we help you today?" required></textarea>
                </div>
                <button type="submit" class="submit-btn">Send Message <i class="fas fa-paper-plane" style="margin-left: 10px;"></i></button>
            </form>
        </div>
    </section>

    <?php 
    $footer_path = $base_dir . DIRECTORY_SEPARATOR . 'footer.php';
    if(file_exists($footer_path)) include($footer_path); 
    ?>
</body>
</html>