<?php
$fname     = $_POST["fname"];
$ftype     = $_POST["ftype"];
$fqty      = $_POST["fqty"];
$fexp      = $_POST["fexp"];
$fcontact  = $_POST["fcontact"];
$fcity     = $_POST["fcity"];
$fimage = addslashes(file_get_contents($_FILES['fimage']['tmp_name']));
$uname     = $_POST["uname"];
$upassword = $_POST["upassword"];
$lat      = $_POST['latitude'] ?? null;
$lon      = $_POST['longitude'] ?? null;

$servername = "localhost";
$username   = "root";
$password   = "";
$database   = "eliteservicesdb";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Removed latitude and longitude from the query
$sql = "INSERT INTO foodtb 
        (fname, ftype, fqty, fexp, fcontact, fcity, fstatus, fimage, latitude, longitude, uname, upassword) 
        VALUES 
        ('$fname', '$ftype', '$fqty', '$fexp', '$fcontact', '$fcity', 'Unclaimed', '$fimage', '$lat', '$lon', '$uname', '$upassword')";

?>
<!DOCTYPE html>
<html>
<head>
    <title>Success | EliteServices</title>
    <style>
        body { font-family: sans-serif; background: #f0fdf4; display: flex; justify-content: center; align-items: center; height: 100vh; }
        .card { background: white; padding: 40px; border-radius: 10px; text-align: center; box-shadow: 0 4px 10px rgba(0,0,0,0.1); border-top: 5px solid #2e7d32; }
        h1 { color: #2e7d32; }
        .btn { display: inline-block; margin-top: 20px; padding: 10px 20px; background: #2e7d32; color: white; text-decoration: none; border-radius: 5px; }
    </style>
</head>
<body>
    <div class="card">
        <?php
        if ($conn->query($sql) === TRUE) {
            echo "<h1>Success!</h1>";
            echo "<p>Food details for <b>$fname</b> have been added.</p>";
            echo "<a href='donorhome.php?uname=$uname&upassword=$upassword' class='btn'>Back to Dashboard</a>";
        } else {
            echo "<h1 style='color:red;'>Error</h1>";
            echo "<p>" . $conn->error . "</p>";
            echo "<a href='donor.html' class='btn' style='background:red;'>Go Back</a>";
        }
        $conn->close();
        ?>
    </div>
</body>
</html>