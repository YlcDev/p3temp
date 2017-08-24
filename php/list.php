<?php
ini_set('display_errors','on');error_reporting(E_ALL);

require_once ("Entity/BddManager.php");
require_once ("Entity/ArticleManager.php");
require_once ("Entity/Article.php");


// connection bdd
$bdd = new PDO('mysql:host=localhost; dbname=projet3;charset=utf8', 'root', '41424521', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

/**
 * recuperation de tous les articles
 */

// requete SQL
$query = 'SELECT * FROM article';

// envoi de la requete preparee
$req = $bdd->prepare($query);

// execute la requete
$req->execute();

$row = $req->fetch(PDO::FETCH_ASSOC);


$am = new ArticleManager();

$articles = $am->getArticles();


?>





<?php include 'includes/_header.php' ?>


<!--
Partie de test
-->

<?php
    $bdd = new PDO('mysql:host=localhost; dbname=projet3;charset=utf8', 'root', '41424521', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

    $query = "SELECT * FROM article ORDER BY id LIMIT 1";
    $req = $bdd->prepare($query);
    $req->execute();
?>

<pre>

    <?php

    $row = $req->fetch(PDO::FETCH_ASSOC);
        echo $row['id'];
        echo $row['title'];
        echo $row['content'];
        echo $row['add_date'];


    ?>


</pre>




<hr>

<h4 class="text-center">Les chapitres en ligne:</h4>

<hr>



<section class="container">

    <?php foreach ($articles as $article): ?>

    <div class="col-lg-5 card-list">
        <div class="row">
            <h5 class="col-lg-4"><?= $article->getTitle(); ?></h5>
            <div class="col-lg-4"></div>
            <p class="col-lg-4">le: <?= $article->getAddDate(); ?></p>
        </div>

        <article class="row">

            <p class="chap">
                <?= substr($article->getContent(), 0, 100); ?>
            </p>

        </article>
        <div class="row">
            <div class="col-lg-8"></div>
            <p class="col-lg-4">
                <a href="show.php?id=<?= $article->getId(); ?>">lire la suite >></a>
            </p>
        </div>
    </div>

    <?php endforeach; ?>

</section>



<br>

<?php include 'includes/_footer.php' ?>

</body>
</html>
