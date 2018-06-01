<?php

require_once ("securite.php");
require_once ("conn.php");

$req = "SELECT * FROM article";
$ps = $pdo->prepare($req);
$ps->execute();

?>

<html lang="en">
<head>

    <title>Liste des client</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <script> rel="stylesheet" type="text/css"  href="css/mystyle.css" </script>

</head>
<body>
    <?php require_once("entete.php"); ?>

    <div class="container spacer">
        <div class="">
            <div class="">Liste des articles </div>
            <div class="">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>ID</th><th>DESIGNATION</th><th>PRIX</th><th>CATEGORIE</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php while($art=$ps->fetch()){ ?>

                        <tr>
                            <td><?php echo ($art['id_article']) ?></td>
                            <td><?php echo ($art['designation']) ?></td>
                            <td><?php echo ($art['prix']) ?></td>
                            <td><?php echo ($art['categorie']) ?></td>
                        </tr>

                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>

</body>
</html>
