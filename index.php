<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <link href="microcms.css" rel="stylesheet" />
    <title>MicroCMS - Home</title>
</head>
<body>
    <header>
        <h1>MicroCMS</h1>
    </header>
    <?php
    $bdd = new PDO('mysql:host=localhost;dbname=slender;charset=utf8', 'root', '');
    $articles = $bdd->query('select * from t_article order by art_id desc');
    foreach ($articles as $article): 
    ?>
        <article>
            <h2><?= $article['art_title'] ?></h2>
            <p><?= $article['art_content'] ?></p>
        </article>
    <?php endforeach; ?>
    <footer class="footer">
       
    </footer>
</body>
</html>
