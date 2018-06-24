<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php include('head.php'); ?>
    <meta itemprop="name" content="Vip Parking login page">
    <meta itemprop="description" content="Vip Parking administrator login">
    <meta name="description" content="Vip Parking administrator login">
    <link href="Content\Public\loginStyles.css" rel="stylesheet" />
    <title>Login Admin</title>
</head>
<body>
    <div class="container">
        <div class="card card-container">
            <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin" action="Views\mainDashboard.php">
                <span id="reauth-email" class="reauth-email"></span>
                <input type="text" id="inputText" class="form-control" placeholder="User ID" required autofocus>
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                <div id="remember" class="checkbox">
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div>
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Sign in</button>
            </form><!-- /form -->
        </div><!-- /card-container -->
    </div><!-- /container -->
</body>
</html>
    <script src="Scripts\Public\login.js" type="text/javascript"></script>