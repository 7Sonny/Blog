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
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <?php 
                include_once('functions.php');
                include_once('menu.php'); ?>
            </div>
                <div class="col-12">
                <div class="container">
                <div class="row">   
                <div class="row">
                <?php $articles = get_all_articles(); ?>
                <?php foreach($articles as $article): ?>
                    <div class="card col-3">
                    <div class="card-header">
                        <h3><?= $article['title'] ?></h3>
                    </div>
                    <div class="card-body">
                        <p> <?php echo get_excerpt($article['content']); ?></p>
                        <p>
                            <a class="btn btn-primary" href="article.php?id=<?= $article['id'] ?>">Voir l'article</a>
                        </p>
                    </div>   
                </div>
        <?php endforeach; ?>
            </div>
            </div>
        </div>
    </div>
        </div>  
        </div>
    </div>   
                
</body>
</html>