<?php


/**
 * AbstractController est ce qu'on appel
 * une classe abstraite.
 * ----------------------
 * Une classe abstraite est une classe
 * que l'on ne peux pas instancié (et donc
 * créer un objet).
 * ----------------------
 * Pour être utilisé, elle doit OBLIGATOIREMENT
 * être hérité !
 * ----------------------
 * Autre particularité, elle peux comporter des
 * méthodes abstraites. C'est à dire, des fonctions
 * qui n'ont pas encore été définies (écrite).
 */
abstract class AbstractController
{

    /**
     * Afficher une page à l'utilisateur.
     * -----------------------
     * Je passe juste à la fonction render
     * le nom du fichier. Par ex. membre/connexion
     * ou encore default/home | default/categorie
     * @param string $page
     */
    public function render(string $page)
    {
        include_once(__DIR__.'/../../templates/header.php');
        include_once(__DIR__.'/../../templates/' . $page . '.php');
        include_once(__DIR__.'/../../templates/footer.php');
    }

}
