<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sign in</title>
    <link rel="icon" href="s-aims-icon" type="image/x-icon">

    <!-- CSS -->
    <link href="css/style.css" rel="stylesheet" type="text/css" >
</head>

<body>
    <div class="text-center">

        <form action="loginadmin.php"  class="form-signin" method="post">
            <div class=logo>
            <img src="files/logo.png" width ="100%" height = "auto">
            </div>
            <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	    <?php } ?>
            <h1 class="h3 mb-3 font-weight-normal">Admin sign in</h1>
            <label for="inputEmail" class="sr-only">Username</label>
            <input type="text" name="uname" id="inputEmail" class="form-control" placeholder="User name">
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>

            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>

            <a href="admin forgot.php">Forgot your password?</a>

            <button class="signinbutton" type="submit">Sign in</button>

            <a href="index.php">Sign in as Faculty</a>

            <p class="mt-5 mb-3 text-muted">Powered by TechMorph &copy; 2023</p>
        </form>

</body>
</html>