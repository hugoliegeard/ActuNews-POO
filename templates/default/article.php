
<?php
    $article = $parameters['article']
?>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="jumbotron">
                <h1 class="display-4">
                    <?= $article['titre'] ?>
                </h1>
                <p class="lead">
                    <img src="<?= PUBLIC_URL . '/assets/img/article/' . $article['image'] ?>"
                         class="card-img-top"
                         alt="<?= $article['titre'] ?>">
                    <?= $article['contenu'] ?>
                </p>
            </div>
        </div>
    </div>
</div>
