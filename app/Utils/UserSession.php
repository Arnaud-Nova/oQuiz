<?php

namespace App\Utils;

use App\User;

/**
 * On crée une classe abstraite qui manipule $_SESSION
 * objectif : proposer une classe dont la responsabilité
 * est la manipulation du user
 *
 * Un singleton serait top mais...
 */
abstract class UserSession
{
    // Constante de classe qui indique le nom de la clé où est stocké le user
    const SESSION_DATA_NAME = 'currentUser';
    // Identifiant des rôles en BDD
    const ROLE_ADMIN = 1;
    const ROLE_USER = 2;

    /**
     * Connecter le user et stocker ses infos en mémoire
     * 
     * @param User $userModel modèle à stocker
     */
    public static function connect(User $userModel)
    {
        // On masque le password de la Session
        $userModel->password = null;
        // On le stocke en Session
        $_SESSION[self::SESSION_DATA_NAME] = $userModel;
    }

    /**
     * Déconnecter le user (le sortir de la Session)
     */
    public static function disconnect()
    {
        // en supprimant l'index de Session correspondant
        unset($_SESSION[self::SESSION_DATA_NAME]);
    }

    /**
     * Savoir si le user est connecté
     * par ex. pour conditionner un affichage ou un traitement
     * 
     * @return bool
     */
    public static function isConnected() : bool
    {
        // Retourne true si user stocké
        return isset($_SESSION[self::SESSION_DATA_NAME]);
    }

    /**
     * Récupère l'objet User (Model) stocké
     * pour pouvoir l'utiliser
     * 
     * @return User|null
     */
    public static function getUser()
    {
        // Si user existe on le retourne, sinon null
        if (self::isConnected()) {
            return $_SESSION[self::SESSION_DATA_NAME];
        }

        return null;
    }

    /**
     * Récupération du rôle du User
     * 
     * @return int|null id du rôle en BDD
     */
    public static function getRoleId() : ?int
    {
        if (self::isConnected()) {
            return self::getUser()->role_id;
        }

        return null;
    }

    /**
     * Le user connecté est-il admin ?
     * 
     * @return bool connecté ou non
     */
    public static function isAdmin() : bool
    {
        return self::getRoleId() == self::ROLE_ADMIN;
    }
}
