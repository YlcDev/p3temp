<?php
ini_set('display_errors','on');error_reporting(E_ALL);

$bdd = new PDO('mysql:host=localhost;dbname=projet3;charset=utf8','root','41424521');


$query = 'SELECT * FROM article ORDER BY add_date DESC LIMIT 1';

$req = $bdd->prepare($query);
$req->execute();

$article = $req->fetch(PDO::FETCH_ASSOC);


?>




<?php

    include 'includes/_header.php'

?>


<hr>

<h4 class="text-center">Dernier chapitre en ligne:</h4>



<section class="card">
    <div class="row">
        <h5 class="col-lg-4"><?= $article['title'] ?></h5>
        <div class="col-lg-4"></div>
        <p class="col-lg-4">le: <?= $article['add_date'] ?></p>
    </div>

    <article class="row">

        <p class="chap">
            <?= $article['content'] ?>
        </p>

    </article>
    <div class="row">
        <div class="col-lg-8"></div>
        <p class="col-lg-4">lire la suite >></p>
    </div>
</section>

<br>

<?php

    include 'includes/_footer.php'

?>


</body>
</html>
