<!DOCTYPE html>
<html lang="fr">
    <?php 
    include_once('functions.php');
    $article = get_one_article($_GET['id']); ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" 
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" 
    crossorigin="anonymous">
    <title><?= $article["title"] ?></title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="margin-top:6%;margin-bottom:2%;text-align:center;" style="text-align:center">
                <?= $article["title"] ?></h1>
                <p style="margin-left:2%;margin-right:2%"><?= $article["content"] ?></p>
            </div>
        </div>
        <div class="row">
            <div class="offset-4 col-4">
                <form action="addcomment.php" method="post">
                    <p style="font-weight:bold">Ajouter un commentaire</p>
                    <div>
                        <input type="hidden" name="id" value="<?= $article['id'] ?>" >
                    </div>
                    <div>
                        <label class="mb-2" for="user">pseudo</label>
                        <textarea class="form-control" type="text" name="user" id="user" placeholder="John Doe">
                        </textarea>
                    </div>
                    <p>Ajouter un commentaire</p>
                    <div>
                        <label class="mb-2" for="commentaire">Commentaire</label>
                        <textarea class="form-control" name="commentaire" id="commentaire" placeholder="commentaire">
                        </textarea>
                    </div>
                    <button class="btn btn-primary mt-2" name="addcomment" type="submit">Commenter</button>
                </form>
            </div>
        </div>
    </div> 
</body>
</html>