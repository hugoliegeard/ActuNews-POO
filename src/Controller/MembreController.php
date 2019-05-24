<?php

namespace Controller;

/**
 * Le Controleur en charge de
 * la gestion des membres...
 */
class MembreController extends AbstractController
{

    /**
     * Page permettant de d'inscrire
     * un utilisateur.
     */
    public function inscription()
    {
        # echo '<h1>JE SUIS LA PAGE INSCRIPTION</h1>';
        $this->render('membre/inscription');
    }

    /**
     * Page permettant de connecter
     * un utilisateur.
     */
    public function connexion()
    {
        # echo '<h1>JE SUIS LA PAGE CONNEXION</h1>';
        $this->render('membre/connexion');
    }

    /**
     * Page permettant d'afficher le
     * profil d'un utilisateur.
     */
    public function profil()
    {
        # echo '<h1>JE SUIS LA PAGE PROFIL</h1>';
        $this->render('membre/profil');
    }

}
