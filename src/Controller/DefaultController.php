<?php


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

        # Récupération des derniers articles de la BDD
        $pdo = DbFactory::makePdo();

        # echo '<h1>JE SUIS LA PAGE ACCUEIL DANS LE CONTROLLER</h1>';
        $this->render('default/home');

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
        $this->render('default/categorie');
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
