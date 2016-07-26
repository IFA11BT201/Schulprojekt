<!DOCTYPE html>
<html lang="en">

<head>
    <title>Anmelden</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/login.css" rel="stylesheet"> </head>

<body>
    <div class="container">
        <form class="form-signin">
            <h2 class="form-signin-heading">Bitte Anmelden</h2>
            <label for="inputEmail" class="sr-only">Email adresse</label>
            <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
            <label for="inputPassword" class="sr-only">Passwort</label>
            <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
            <div class="checkbox">
                <label>
                    <input type="checkbox" value="remember-me"> Merken </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Anmelden</button>
        </form>
    </div>
</body>

</html>