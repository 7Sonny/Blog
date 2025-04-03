
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mon compte </title>
    <link rel="stylesheet" 
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" 
    crossorigin="anonymous">
</head>
<body>
    <?php 
    include_once('functions.php');
      
    ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <?php include_once('menu.php'); ?>
            </div>
            <div class="row">
                <div class="col-12">
                    <h1>Votre email : <?php echo $_SESSION['mail'];?> </h1>
                </div>
            </div>
        </div>
    </div>

   
</body>
</html>