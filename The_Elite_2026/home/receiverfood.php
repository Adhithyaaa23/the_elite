<?php
$city = $_POST["city"] ?? "";
$ftype = $_POST['ftype'] ?? [];

$servername = "localhost";
$username   = "root";
$password   = "";
$database   = "eliteservicesdb";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Error Detected: " . mysqli_error($conn));
}

// Logic for Claiming Food
if (isset($_POST['fname']) && isset($_POST['fcity'])) {
    $fname = $conn->real_escape_string($_POST['fname']);
    $fcity = $conn->real_escape_string($_POST['fcity']);
    $updateSql = "UPDATE foodtb SET fstatus='Claimed' WHERE fname='$fname' AND fcity='$fcity'";
    $conn->query($updateSql);
}

// Search Logic
$sql = "SELECT * FROM foodtb WHERE fcity='" . $conn->real_escape_string($city) . "'";
if (!empty($ftype)) {
    $foodList = "'" . implode("','", $ftype) . "'";
    $sql .= " AND ftype IN ($foodList)";
}
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results | EliteServices</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            --elite-green: #2e7d32;
            --dark-green: #1b5e20;
            --soft-green: #f0fdf4;
            --text-slate: #334155;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--soft-green);
            margin: 0;
            padding: 0;
            color: var(--text-slate);
        }

        .nav-bar {
            background: white;
            padding: 15px 8%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }

        .logo { font-size: 1.5rem; font-weight: bold; color: var(--elite-green); text-decoration: none; }

        .container {
            max-width: 1200px;
            margin: 40px auto;
            padding: 0 20px;
        }

        .header-box {
            margin-bottom: 30px;
            border-left: 5px solid var(--elite-green);
            padding-left: 15px;
        }

        .food-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
            gap: 25px;
        }

        .food-card {
            background: white;
            border-radius: 18px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.05);
            transition: 0.3s ease;
            overflow: hidden;
            border: 1px solid #e2e8f0;
            display: flex;
            flex-direction: column;
        }

        .food-image-container {
            width: 100%;
            height: 180px;
            background: #e2e8f0;
            overflow: hidden;
        }

        .food-image { width: 100%; height: 100%; object-fit: cover; }

        .card-details { padding: 20px; }

        .card-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 15px;
        }

        .food-name { font-size: 1.2rem; font-weight: 700; color: #1e293b; margin: 0; }
        
        .type-badge {
            font-size: 0.7rem;
            padding: 4px 10px;
            border-radius: 20px;
            font-weight: 700;
            text-transform: uppercase;
        }
        .veg { background: #dcfce7; color: #166534; }
        .non-veg { background: #fee2e2; color: #991b1b; }

        .info-row {
            display: flex;
            justify-content: space-between;
            padding: 6px 0;
            border-bottom: 1px solid #f1f5f9;
            font-size: 0.85rem;
        }

        .label { color: #64748b; font-weight: 500; }
        .value { color: #1e293b; font-weight: 600; }

        .btn-claim {
            width: 100%;
            background: var(--elite-green);
            color: white;
            border: none;
            padding: 12px;
            border-radius: 10px;
            font-weight: 600;
            cursor: pointer;
            margin-top: 15px;
        }

        .btn-location {
            display: block;
            text-align: center;
            background: #f1f5f9;
            color: var(--elite-green);
            text-decoration: none;
            padding: 10px;
            border-radius: 10px;
            font-weight: 600;
            margin-top: 10px;
            border: 1px solid var(--elite-green);
            font-size: 0.85rem;
        }

        .status-claimed {
            text-align: center;
            display: block;
            margin-top: 15px;
            color: #94a3b8;
            font-weight: 600;
            padding: 8px;
            background: #f8fafc;
            border-radius: 10px;
        }

        .logout-btn {
            color: #ef4444;
            text-decoration: none;
            font-weight: 600;
            padding: 8px 16px;
            border: 2px solid #ef4444;
            border-radius: 8px;
        }
    </style>
</head>
<body>

<nav class="nav-bar">
    <a href="#" class="logo">Elite<span>Services</span></a>
    <a href="ulog.html" class="logout-btn"><i class="fas fa-sign-out-alt"></i> Logout</a>
</nav>

<div class="container">
    <div class="header-box">
        <h2>Donations in <?php echo htmlspecialchars($city); ?></h2>
        <p>Both image and location information are provided below.</p>
    </div>

    <div class="food-grid">
        <?php if ($result && $result->num_rows > 0): ?>
            <?php while ($row = $result->fetch_assoc()): ?>
                <div class="food-card">
                    
                    <div class="food-image-container">
                        <?php if(!empty($row['fimage'])): ?>
                            <img src="data:image/jpeg;base64,<?php echo base64_encode($row['fimage']); ?>" class="food-image">
                        <?php else: ?>
                            <div style="display:flex; align-items:center; justify-content:center; height:100%; color:#cbd5e1;">
                                <i class="fas fa-image fa-3x"></i>
                            </div>
                        <?php endif; ?>
                    </div>

                    <div class="card-details">
                        <div class="card-header">
                            <h3 class="food-name"><?php echo htmlspecialchars($row["fname"]); ?></h3>
                            <span class="type-badge <?php echo (strtolower($row['ftype']) == 'veg') ? 'veg' : 'non-veg'; ?>">
                                <?php echo htmlspecialchars($row["ftype"]); ?>
                            </span>
                        </div>

                        <div class="info-row"><span class="label">Quantity</span> <span class="value"><?php echo htmlspecialchars($row["fqty"]); ?></span></div>
                        <div class="info-row"><span class="label">Expiry</span> <span class="value"><?php echo htmlspecialchars($row["fexp"]); ?></span></div>
                        <div class="info-row"><span class="label">Contact</span> <span class="value"><?php echo htmlspecialchars($row["fcontact"]); ?></span></div>
                        <div class="info-row"><span class="label">Donor</span> <span class="value"><?php echo htmlspecialchars($row["uname"]); ?></span></div>
                        
                        <?php if ($row["fstatus"] == "Unclaimed"): ?>
                            <form method="post">
                                <input type="hidden" name="city" value="<?php echo htmlspecialchars($city); ?>">
                                <input type="hidden" name="fname" value="<?php echo htmlspecialchars($row["fname"]); ?>">
                                <input type="hidden" name="fcity" value="<?php echo htmlspecialchars($row["fcity"]); ?>">
                                <?php foreach ($ftype as $type): ?>
                                    <input type="hidden" name="ftype[]" value="<?php echo htmlspecialchars($type); ?>">
                                <?php endforeach; ?>
                                <button type="submit" class="btn-claim">Claim Food Item</button>
                            </form>
                        <?php else: ?>
                            <span class="status-claimed"><i class="fas fa-check-circle"></i> Item Claimed</span>
                            
                            <?php if (!empty($row["latitude"]) && !empty($row["longitude"])): ?>
                                <a href="https://www.google.com/maps?q=<?php echo $row['latitude']; ?>,<?php echo $row['longitude']; ?>" 
                                   target="_blank" class="btn-location">
                                   <i class="fas fa-map-marker-alt"></i> Open Pickup Location
                                </a>
                            <?php endif; ?>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>

</body>
</html>