
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>my blog</title>
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
        </div>
        <div class="row">
                <h1 class="text-center">Ajouter un article</h1>
        </div>
        <div class="row">
            <div class="offset-3 col-6">
                <form class="" action="treatment_add.php" method="post">
                    <div class="mt-2">
                        <label for="title">Titre</label>
                        <input type="text" name="title" id="title" class="form-control">
                    </div>
                    <div class="mt-2">
                        <label for="content">Contenu</label>
                        <textarea name="content" id="content" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <div class="mt-2">
                        <input type="submit" name="submit_add"  value="Ajouter L'article" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>