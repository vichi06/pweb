<?php
session_start();
require('controller/etudiant.php');
require('controller/professeur.php');
require('controller/utilisateur.php');

$professeurActions = array (
    'setQuestionsAffichables',
    'startTest',
    'continueTest',
    'stopTest',
    'createTest'
);

$etudiantActions = array(
    'enregistrerReponse',
    'joinSession'
);

$utilisateurActions = array(
    'login',
    'ident',
    'tableauDeBord',
    'logout',
    'afficherTest'
);

$pages = array(
    'pageUtilisation1',
    'pageUtilisation2',
    'pageUtilisation3',
    'pageDeveloppeurs',
    'register'
);

if(isset($_GET['action'])) {
    $action = $_GET['action'];

    if(in_array($action, $pages)) {
        $action ();
    }
    if(in_array($action, $utilisateurActions)) {
        $action ();
    }
    if(in_array($action, $etudiantActions)) {
        if(isset($_SESSION['profil']['typeU']) && $_SESSION['profil']['typeU'] == 'etudiant') {
            $action ();
        }
    }
    if(in_array($action, $professeurActions)) {
        if(isset($_SESSION['profil']['typeU']) && $_SESSION['profil']['typeU'] == 'professeur') {
            $action ();
        }
    }
}
else {
    index();
}
