<?php
ini_set('display_errors','on');error_reporting(E_ALL);

//$bdd = new PDO('mysql:host=localhost;dbname=projet3;charset=utf8','root','41424521');
//
//
//$query = 'SELECT * FROM article ORDER BY add_date DESC LIMIT 1';
//
//$req = $bdd->prepare($query);
//$req->execute();
//
//$article = $req->fetch(PDO::FETCH_ASSOC);

require_once ("Entity/BddManager.php");
require_once ("Entity/ArticleManager.php");
require_once ("Entity/Article.php");

$am = new ArticleManager();

$firstArticle = $am->firstArticle(); // objet seul -> pas de boucle

$allArticle = $am->getArticles(); // tableau d'objet -> boucle pour afficher

$lastArticle = $am->lastArticle();


//// connection bdd
//$bdd = new PDO('mysql:host=localhost; dbname=projet3;charset=utf8', 'root', '41424521', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
//
//
//// passage de la requete en SQL
//$query = "SELECT * FROM article ORDER BY id DESC LIMIT 1";
//
//// envoi la requete preparee
//$req = $bdd->prepare($query);
//
//// execute la requete sql
//$req->execute();
//
//$row = $req->fetch(PDO::FETCH_ASSOC);
//
// $article = new Article();
//
//$article->setTitle($row['title']);
//$article->setContent($row['content']);
//$article->setAddDate($row['add_date']);

//echo '<pre>';
//print_r($row);
//exit;
?>


<?php include 'includes/_header.php' ?>
<html>
<body>

<hr>

<h4 class="text-center">Dernier chapitre en ligne:</h4>

<pre>
    <?php var_dump($allArticle); ?>
</pre>

<section class="card">
    <div class="row">
        <h5 class="col-lg-4"><?= $lastArticle->getTitle(); ?></h5>
        <div class="col-lg-4"></div>
        <p class="col-lg-4">le: <?= $lastArticle->getAddDate() ?></p>
    </div>

    <article class="row">

        <p class="chap">
            <?= $lastArticle->getContent() ?>
        </p>

    </article>
    <div class="row">
        <div class="col-lg-8"></div>
        <p class="col-lg-4">lire la suite >></p>
    </div>
</section>

<br>

<?php include 'includes/_footer.php' ?>


</body>
</html>
