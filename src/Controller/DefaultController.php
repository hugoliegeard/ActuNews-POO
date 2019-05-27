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

        /*
         * Je souhaite récupérer la catégorie ayant l'ID
         * passé en paramètre dans mon URL.
         * ex. print_r( $_GET['id'] );
         */

        # 1. Je créer une instance de Categorie
        $categorie = new Categorie();

        # 2. Je créer une instance pour les articles
        $article = new Article();

        # Aperçu
        # print_r(
        #   $categorie->findOne( $_GET['id'] )
        # );

        # Transmission à la vue
        $this->render('default/categorie', [
            'categorie' => $categorie->findOne($_GET['id']),
            'articles' => $article->findAll('categorie_id = '. $_GET['id'])
        ]);
    }

    /**
     * Page permettant d'afficher un article.
     */
    public function article()
    {

        # Récupérer un Article via son ID
        $article = new Article();

        # Transmission à la vue
        $this->render('default/article', [
            'article' => $article->findOne($_GET['id'])
        ]);
    }

}
