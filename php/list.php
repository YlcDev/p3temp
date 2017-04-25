<?php
ini_set('display_errors','on');error_reporting(E_ALL);

$bdd = new PDO('mysql:host=localhost;dbname=projet3;charset=utf8','root','41424521');


$articles = $bdd->query('SELECT * FROM article ');


?>





<?php

include 'includes/_header.php'

?>


<hr>

<h4 class="text-center">Les chapitres en ligne:</h4>

<hr>





<section class="container">

    <?php foreach ($articles as $article): ?>

    <div class="col-lg-5 card-list">
        <div class="row">
            <h5 class="col-lg-4"><?= $article['title'] ?></h5>
            <div class="col-lg-4"></div>
            <p class="col-lg-4">le: <?= $article['add_date'] ?></p>
        </div>

        <article class="row">

            <p class="chap">
                <?= substr($article['content'], 0, 100); ?>
            </p>

        </article>
        <div class="row">
            <div class="col-lg-8"></div>
            <p class="col-lg-4">
                <a href="show.php?id=<?= $article['id'] ?>">lire la suite >></a>
            </p>
        </div>
    </div>

    <?php endforeach; ?>

</section>



<br>
<?php

include 'includes/_footer.php'

?>

</body>
</html>
