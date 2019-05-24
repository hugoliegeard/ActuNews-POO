<?php

namespace Controller;

use Model\Article\Article;
use Model\Categorie\Categorie;
use Model\Db\DbFactory;


/**
 * L'Objectif du DefaultController est de s'occuper
 * de la gestion des pages principales du site.
 * ----------------------------
 * En héritant de AbstractController, ma classe
 * DefaultController à maintenant accès à l'ensemble
 * des propriétés et méthodes de AbstractController.
 * NOTA BENE : Une classe ne peut hériter que d'une
 * et une seule autre classe.
 * ------------------------------
 */
class DefaultController extends AbstractController
{

    /**
     * La fonction "home" est ce qu'on appelle
     * une "action". Une action est une page.
     * -----------------
     * Page d'accueil du site
     */
    public function home()
    {

        # Récupération de PDO
        # $pdo = DbFactory::makePdo();

        # Récupération des derniers articles de la BDD
        # $query = $pdo->query('
        #     SELECT * FROM article, auteur
        #       WHERE article.auteur_id = auteur.id
        #         ORDER BY article.id DESC
        # ');

        # Récupération des articles
        # $articles = $query->fetchAll();

        # Récupération des articles v2
        $articleModel = new Article();

        # echo '<h1>JE SUIS LA PAGE ACCUEIL DANS LE CONTROLLER</h1>';
        $this->render('default/home', [
            'articles' => $articleModel->findAll()
        ]);

    }

    /**
     * Page permettant de lister les
     * articles d'une catégorie.
     */
    public function categorie()
    {
        # echo '<h1>JE SUIS LA PAGE CATEGORIE DANS LE CONTROLLER</h1>';
        # require_once(__DIR__.'/../../templates/header.php');
        # require_once(__DIR__.'/../../templates/default/categorie.php');
        # require_once(__DIR__.'/../../templates/footer.php');

        $categorieDb = new Categorie();
        $categorie = $categorieDb->findOne($_GET['id']);

        $this->render('default/categorie', [
            'categorie' => $categorie
        ]);
    }

    /**
     * Page permettant d'afficher un article.
     */
    public function article()
    {
        # echo '<h1>JE SUIS LA PAGE ARTICLE DANS LE CONTROLLER</h1>';
        # require_once(__DIR__.'/../../templates/header.php');
        # require_once(__DIR__.'/../../templates/default/article.php');
        # require_once(__DIR__.'/../../templates/footer.php');
        $this->render('default/article');
    }

}
