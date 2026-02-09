<?php
 $uname = $_GET["uname"];
 $upassword = $_GET["upassword"];
 
 $servername = "localhost";
 $username = "root";
 $password = "";
 $database = "eliteservicesdb";
 
 $conn = mysqli_connect($servername, $username, $password, $database);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donor Dashboard | EliteServices</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            --elite-green: #2e7d32;
            --elite-saffron: #ff9933;
            --elite-dark: #1e293b;
            --bg-light: #f4f7f6;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--bg-light);
            margin: 0;
            padding: 0;
        }

        /* Top Header */
        .dashboard-header {
            background: var(--elite-green);
            color: white;
            padding: 40px 10% 80px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .welcome-text h1 { margin: 0; font-size: 1.8rem; }
        .welcome-text p { margin: 5px 0 0; opacity: 0.9; }

        .nav-buttons a {
            text-decoration: none;
            color: white;
            padding: 10px 20px;
            border-radius: 8px;
            font-weight: 600;
            margin-left: 10px;
            transition: 0.3s;
        }

        .btn-add { background: var(--elite-saffron); box-shadow: 0 4px 15px rgba(255,153,51,0.3); }
        .btn-logout { background: rgba(255,255,255,0.2); }
        .btn-add:hover { transform: translateY(-2px); background: #e68a00; }

        /* Main Content */
        .main-container {
            max-width: 1100px;
            margin: -50px auto 50px;
            padding: 0 20px;
        }

        .section-title {
            display: flex;
            align-items: center;
            gap: 10px;
            color: var(--elite-dark);
            margin-bottom: 20px;
        }

        /* Food Grid Layout */
        .food-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 25px;
        }

        .food-card {
            background: white;
            border-radius: 15px;
            padding: 25px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.05);
            border-left: 5px solid var(--elite-green);
            position: relative;
            transition: 0.3s;
            overflow: hidden;
        }

        .food-card:hover { transform: scale(1.02); }

        .food-card h3 { 
            margin: 0 0 15px; 
            color: var(--elite-green); 
            display: flex; 
            align-items: center; 
            gap: 10px; 
        }

        .food-image {
            width: 100%;
            height: 150px;
            object-fit: cover;
            border-radius: 10px;
            margin-bottom: 15px;
            display: block;
            background: #eee;
        }

        .food-info {
            display: flex;
            flex-direction: column;
            gap: 10px;
            font-size: 0.95rem;
            color: #555;
        }

        .info-row { display: flex; justify-content: space-between; border-bottom: 1px dashed #eee; padding-bottom: 5px; }
        .info-row strong { color: var(--elite-dark); }

        .status-badge {
            background: #e8f5e9;
            color: var(--elite-green);
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: bold;
            text-transform: uppercase;
            display: inline-block;
            margin-top: 10px;
        }

        .empty-state {
            text-align: center;
            padding: 60px;
            background: white;
            border-radius: 20px;
            color: #888;
            grid-column: 1 / -1;
        }
    </style>
</head>
<body>

<header class="dashboard-header">
    <div class="welcome-text">
        <h1>Welcome, <?php echo htmlspecialchars($uname); ?>! 👋</h1>
        <p>Thank you for being a Food Savior today.</p>
    </div>
    <div class="nav-buttons">
        <a href="donor.html?uname=<?php echo urlencode($uname); ?>&upassword=<?php echo urlencode($upassword); ?>" class="btn-add">
            <i class="fas fa-plus"></i> Add New Food
        </a>
        <a href="ulog.html" class="btn-logout">Logout</a>
    </div>
</header>

<div class="main-container">
    <div class="section-title">
        <i class="fas fa-utensils"></i>
        <h2>Your Unclaimed Donations</h2>
    </div>

    <div class="food-grid">
        <?php
        if(!$conn) {
            echo "<div class='empty-state'>Error connecting to database.</div>";
        } else {
            // Added fcity to the SQL selection
            $stmt = $conn->prepare("SELECT fname, ftype, fqty, fexp, fcity, fstatus, fimage FROM foodtb WHERE uname = ? AND upassword = ?");
            $stmt->bind_param("ss", $uname, $upassword);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                $has_unclaimed = false;
                while ($row = $result->fetch_assoc()) {
                    if($row['fstatus'] == "Claimed") continue;
                    $has_unclaimed = true;
                    ?>
                    <div class="food-card">
                        <?php if(!empty($row['fimage'])): ?>
                            <img class="food-image" src="data:image/jpeg;base64,<?php echo base64_encode($row['fimage']); ?>" alt="Food Image">
                        <?php endif; ?>

                        <h3><i class="fas fa-box-open"></i> <?php echo htmlspecialchars($row['fname']); ?></h3>
                        
                        <div class="food-info">
                            <div class="info-row">
                                <span>Type:</span>
                                <strong><?php echo htmlspecialchars($row['ftype']); ?></strong>
                            </div>
                            <div class="info-row">
                                <span>Quantity:</span>
                                <strong><?php echo htmlspecialchars($row['fqty']); ?></strong>
                            </div>
                            <div class="info-row">
                                <span>Safe Until:</span>
                                <strong><?php echo htmlspecialchars($row['fexp']); ?></strong>
                            </div>
                            <div class="info-row">
                                <span>City:</span>
                                <strong><?php echo htmlspecialchars($row['fcity']); ?></strong>
                            </div>
                            
                            <div>
                                <span class="status-badge">Available for Pickup</span>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                if (!$has_unclaimed) {
                    echo "<div class='empty-state'><h3>All your donations have been claimed!</h3><p>Check back later for updates.</p></div>";
                }
            } else {
                echo "
                <div class='empty-state'>
                    <i class='fas fa-clipboard-list' style='font-size: 3rem; color: #ddd; margin-bottom: 15px;'></i>
                    <h3>No items added yet</h3>
                    <p>Click 'Add New Food' to start your first donation.</p>
                </div>";
            }
            $conn->close();
        }
        ?>
    </div>
</div>

</body>
</html>