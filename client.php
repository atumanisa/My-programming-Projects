

<?php

require_once ("securite.php");

require_once ("conn.php");
$req = "SELECT * FROM client";
$ps = $pdo->prepare($req);
$ps->execute();

?>

<html lang="en">
<head>

    <title>Liste des clients</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <script> rel="stylesheet" type="text/css"  href="dist/alert.js" </script>

</head>
<body>
<?php require_once("entete.php"); ?>
<div></div>
<div class="container">
    <div class="card">
        <div class="card-header">Liste des clients </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>ID</th><th>NOM</th><th>PRENOM</th><th>ADRESSE</th><th>MAIL</th>
                </tr>
                </thead>
                <tbody>
                <?php while($art=$ps->fetch()){ ?>

                    <tr>
                        <td><?php echo ($art['id_client']) ?></td>
                        <td><?php echo ($art['nom']) ?></td>
                        <td><?php echo ($art['prenom']) ?></td>
                        <td><?php echo ($art['adresse']) ?></td>
                        <td><?php echo ($art['mail']) ?></td>
                        <td><a onclick="return confirm('Voulez-vous éditer ce client ?');"href="edit_client.php? code=<?php echo ($art['id_client']) ?>">Editer</a></td>
                        <td><a onclick="return confirm('Voulez-vous supprimer ce client ?');" href="suppr_client? code=<?php echo ($art['id_client']) ?>">Supprimer</a></td>
                    </tr>

                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

</div>

</body>
</html>
