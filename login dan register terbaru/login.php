<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <title>ShopEasily™ Account - Sign Up</title>
    <link rel="stylesheet" href="registLogin.css">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicons/favicon-16x16.png">
    <link rel="manifest" href="assets/favicons/site.webmanifest">
    <link href='https://unpkg.com/boxicons@latest/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://db.onlinewebfonts.com/c/48656eabd3fef6464367d956315c749a?family=Electronic+Arts+Text" rel="stylesheet">
    <link href="https://db.onlinewebfonts.com/c/cb2c6807809e3f956c87a1773338186e?family=Electronic+Arts+Text+Bold" rel="stylesheet">
    <link href="https://db.onlinewebfonts.com/c/e770a9e3ae1a8be2089472bc6391f697?family=Electronic+Arts+Display" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
    <header class="header" id="header">
        <a href="index.php" class="logo">
            <img src="assets/branding/shopeasily-logo-big.png" alt="shopeasily-logo" class="shopeasily-logo">
            <!-- <img src="assets/branding/shopeasily-name-big.png" alt="shopeasily-brand" class="shopeasily-brand"> -->
        </a>
        <div class="nav-icon">
            <?php if (!isset($_SESSION['name'])) { ?>
                <a href="#" class="loginNavigation">
                    <p class="loginNavigation">Masuk</p>
                </a>
                <a href="register.html" class="registerNavigation">
                    <p class="registerNavigation">Daftar</p>
                </a>
                <?php } ?>
        </div>
    </header>
    <section class="forms">
        <img src="assets/branding/shopeasily-whole(1x1).png" alt="" class="bg-img">
        <div class="login-box" style="margin-top: 100px;">
            <h2>MASUK</h2>
            <hr style="width: 100%;size: 0.5; color: #000" noshade>
            <form action="database/process.php" class="regist" method="POST">
                <input type="hidden" class="condition" id="condition" name="condition" value="register" autocorrect="off" autocapitalize="off" autocomplete="off" required>
                <input type="text" class="username" id="account_username" name="name" placeholder="Nama Pengguna" autocorrect="off" autocapitalize="off" autocomplete="off" required>
                <input type="password" class="password" id="account_password" name="pass" placeholder="Kata Sandi" autocorrect="off" autocapitalize="off" autocomplete="off" required>
                <button type="submit" class="submit-btn">Masuk</button>
            </form>
            <p class="another-method-title">atau masuk dengan</p>
            <div class="another-method">
                <a href="#" class="google">
                    <img src="assets/google-logo-removebg-preview.png" alt="" width="20" style="padding-right: 5px;">Google
                </a>
            </div>
        </div>
    </section>
</body>
</html>