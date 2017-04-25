<?php

ini_set('display_errors','on');error_reporting(E_ALL);

require_once 'Entity/Article.php';

$bdd = new PDO('mysql:host=localhost;dbname=projet3;charset=utf8','root','41424521');

$id = $_GET['id'];
$query = " SELECT * FROM article WHERE id = ".$id;
$req = $bdd->prepare($query);
$req->execute();

$result = $req->fetch(PDO::FETCH_ASSOC);

$article = new Article();
$article->setId($result['id']);
$article->setTitle($result['title']);
$article->setContent($result['content']);
$article->setAddDate($result['add_date']);




?>



<?php

include 'includes/_header.php'

?>


<hr>

<section class="container">



        <div class="col-lg-5 card-list">
            <div class="row">
                <h5 class="col-lg-4"><?= $article->getTitle() ?></h5>
                <div class="col-lg-4"></div>
                <p class="col-lg-4">le: <?= $article->getAddDate() ?></p>
            </div>

            <article class="row">

                <p class="chap">
                    <?= $article->getContent(); ?>
                </p>

            </article>

        </div>



</section>



<br>
<?php

include 'includes/_footer.php'

?>

</body>
</html>
