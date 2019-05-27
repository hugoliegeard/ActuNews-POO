
<!-- Pied de Page -->
<div class="container">
    <footer class="mt-4 pt-4 border-top">
        <div class="row">
            <div class="col-12 col-md">
                <h5>ActuNews</h5>
                <small class="d-block text-muted">
                    &copy; <?= date('Y') ?>
                </small>
            </div>
            <div class="col-6 col-md">
                <h5>Catégories</h5>
                <ul class="list-unstyled">
                    <?php foreach ($categories as $categorie) { ?>
                        <li>
                            <a href="<?= PUBLIC_URL . '/categorie/' . $categorie['id'] ?>">
                                <?= $categorie['nom'] ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>En Plus</h5>
                <ul class="list-unstyled">
                    <li><a href="#">Mentions Légales</a></li>
                    <li><a href="#">Confidentialité / RGPD</a></li>
                    <li><a href="#">Plan du Site</a></li>
                </ul>
            </div>
        </div>
    </footer>
</div>
<!-- Fin Pied de Page -->

</body>
</html>
