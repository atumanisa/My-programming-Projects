<?php
    require_once ("securite.php");
?>

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
            <div class="card-header">Ajout client dans la base</div>
            <div class="card-body">
                <form method="post" action="save_client.php">

                    <div class="form-group">
                        <label class="control-label">Nom :</label>
                        <input type="text" name="nom"  class="form-control">
                    </div>
                    <div>
                        <label class="control-label">Prénom :</label>
                        <input type="text" name="prenom"  class="form-control">
                    </div>
                    <div>
                        <label class="control-label">Adresse :</label>
                        <input type="text" name="adresse" class="form-control">
                    </div>
                    <div>
                        <label class="control-label">Mail :</label>
                        <input type="text" name="mail"  class="form-control">
                    </div>
                    <div>
                        <label class="control-label">Mot de passe :</label>
                        <input type="password" name="pass1"  class="form-control">
                    </div>
                    <div>
                        <label class="control-label">Confirmer mot de passe :</label>
                        <input type="password" name="pass2"  class="form-control">
                    </div>
                    <br>
                    <div>
                        <button type="submit">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
</html>