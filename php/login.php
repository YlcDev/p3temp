<?php

ini_set('display_errors','on');error_reporting(E_ALL);

?>

<?php

include 'includes/_header.php'

?>


<h3 class="text-center">
    Bienvenue sur mon humble blog, où vous aurez à disposition mon prochain roman
</h3>
<br>
<h5 class="text-center">
    Vos avis seront appréciés dans les commentaires et rappelez vous que la courtoisie est souvent bien acceuillie.
</h5>

<hr>

<h4 class="text-center">Connection au blog</h4>

<section class="card container text-center">
    <div class="col-lg-6">
        <div class="row">
            <h4>Créer un compte</h4>
        </div>
        <div class="row">adresse mail</div>
        <div class="row"><input type="text"></div>

        <div class="row">mot de passe</div>
        <div class="row"><input type="password"></div>

        <div class="row">confirmation mot de passe</div>
        <div class="row"><input type="password"></div>

        <div class="row"><input type="submit"></div>

    </div>


    <div class="col-lg-6">
        <div class="row">
            <h4>Compte déjà créer</h4>
        </div>

        <div class="row">adresse mail</div>
        <div class="row"><input type="text"></div>

        <div class="row">mot de passe</div>
        <div class="row"><input type="password"></div>

        <div class="row"><input type="submit"></div>
    </div>

</section>
<br>
<?php

include 'includes/_footer.php'

?>
