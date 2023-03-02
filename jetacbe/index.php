<?php include "./cbeserver/cbeserver.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The CBE Login Interface</title>
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/cbe-login.css" />
</head>
<body>
    <div class="wrapper">
        <div class="sidebar">
            <div class="logo">
                <img src="assets/image/jeta-logo-dark.png" alt="Jeta Logo">
            </div>
            <h1 class="text-light text-center jeta-name mt-1">JETA <br> COMMUNICATIONS</h1>
            <h4 class="text-light fw-normal mb-1">Digital Skills Academy</h4>
            <h1 class="text-display text-light" >CBT</h1>
            <footer class="main-footer">
                <p class="text-light text-center">&copy; 2022 <br> JETA Communications TechHub</p>
            </footer>
        </div>
        <div class="main">
            <main class="overly">
                <form action="index.php" method="POST" class="d-flex a-center j-center">

                    <div class="regContainer">
                        <?php include "errors.php"; ?>
                    </div>
                     
                    <div class="regContainer">
                    
                        <input type="text" class="regInput" name="appnum" placeholder="Enter Your Registration Number">
                        <input type="submit" value="Login" class="loginBtn" name="cbelogin">
                    </div>
                </form>
            </main>

        </div>
    </div>
</body>
</html>