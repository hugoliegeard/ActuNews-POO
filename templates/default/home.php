<?php
# Récupération des articles dans le tableau
$articles = $parameters['articles'];
?>

<div class="p-3 mx-auto text-center">
    <h1 class="display-4">ActuNews</h1>
</div>

<div class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <?php foreach ($articles as $article) { ?>
                <div class="col-md-4 mt-4">
                    <div class="card shadow-sm">
                        <img src="<?= PUBLIC_URL . '/assets/img/article/' . $article['image'] ?>"
                             class="card-img-top"
                             alt="<?= $article['titre'] ?>">
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="<?= PUBLIC_URL . '/default/article?id=' . $article['id'] ?>">
                                    <?= $article['titre'] ?>
                                </a>
                            </h5>
                            <p class="card-text">
                                <!-- Accroche de 150 caractère à partir du contenu de l'article  -->
                                <?= substr(strip_tags($article['contenu']), 0, 150) ?>...
                            </p>
                            <small class="text-muted">
                                <?= $article['auteur_prenom'] ?> <?= $article['auteur_nom'] ?>
                            </small>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
