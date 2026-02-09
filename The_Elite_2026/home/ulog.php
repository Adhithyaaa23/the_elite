<?php
$uname = $_POST["uname"];
$upassword = $_POST["upassword"];
$servername = "localhost";
$username = "root";
$password = "";
$database = "eliteservicesdb";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Error Detected: " . mysqli_error($conn));
}

$sql = "SELECT uname, upassword, urole FROM userstb where uname='$uname' and upassword='$upassword'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $urole = $row["urole"];
    
    // Redirect based on role
    if ($urole == "Donor") {
        header("Location: donorhome.php?uname=$uname&upassword=$upassword");
        exit;
    } else {
        header("Location: receiver.html");
        exit;
    }
} else {
    // Elegant Error Page for Wrong Credentials
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Login Failed | EliteServices</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
        <style>
            body {
                font-family: 'Poppins', sans-serif;
                background: #f0fdf4;
                height: 100vh;
                display: flex;
                justify-content: center;
                align-items: center;
                margin: 0;
            }
            .error-card {
                background: white;
                padding: 40px;
                border-radius: 20px;
                box-shadow: 0 10px 30px rgba(0,0,0,0.1);
                text-align: center;
                max-width: 400px;
                border-top: 8px solid #ef4444; /* Red for error */
                animation: shake 0.5s ease-in-out;
            }
            @keyframes shake {
                0%, 100% { transform: translateX(0); }
                25% { transform: translateX(-10px); }
                75% { transform: translateX(10px); }
            }
            .icon {
                font-size: 50px;
                color: #ef4444;
                margin-bottom: 20px;
            }
            h2 { color: #1e293b; margin-bottom: 10px; }
            p { color: #64748b; margin-bottom: 25px; }
            .btn {
                display: block;
                padding: 12px;
                text-decoration: none;
                border-radius: 10px;
                font-weight: bold;
                margin-bottom: 10px;
                transition: 0.3s;
            }
            .btn-retry {
                background: #2e7d32;
                color: white;
            }
            .btn-reg {
                background: #f1f5f9;
                color: #475569;
            }
            .btn:hover { opacity: 0.9; transform: scale(1.02); }
        </style>
    </head>
    <body>
        <div class="error-card">
            <div class="icon"><i class="fas fa-lock"></i></div>
            <h2>Wrong  password</h2>
            <p>The username or password you entered doesn't match our records.</p>
            
            <a href="ulog.html" class="btn btn-retry">Try Again</a>
            <a href="ureg.html" class="btn btn-reg">Create an Account</a>
        </div>
    </body>
    </html>
    <?php
}
$conn->close();
?>