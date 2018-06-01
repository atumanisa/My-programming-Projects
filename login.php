
<!doctype>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <script> rel="stylesheet" type="text/css"  href="css/mystyle.css" </script>

    <title></title>
</head>
<body>
<?php require_once("entete.php"); ?>
<div></div>
<div class="container spacer col-md-6 col-xs-12 col-md-offset-3">
    <div class="card">
        <div class="card-header">Authentification</div>
        <div class="card-body">
            <form method="post" action="authentifier.php">

                <div class="form-group">
                    <label class="control-label">Login :</label>
                    <input type="text" name="usermail"  class="form-control">
                </div>
                <div>
                    <label class="control-label">Mot de passe :</label>
                    <input type="password" name="password"  class="form-control">
                </div>
                <br>
                <div>
                    <button type="submit">LogIn</button>
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>