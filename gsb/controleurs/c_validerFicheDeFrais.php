<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);

switch ($action){
    case 'selectionnerVisiteurMois':
   
        include 'vues/v_choisirVisiteurMois.php';
        break;
    case 'afficheLaFiche':
    
      $nom = filter_input(INPUT_POST, 'nomV', FILTER_SANITIZE_STRING);
      $mois=substr($_POST['lstMois'],0,4). substr($_POST['lstMois'],5,6); 
      
      $fichesFrais= $pdo->getLesFichesFrais($nom,$mois);
      
        include 'vues/v_choisirVisiteurMois.php';
        include 'vues/v_validerFrais.php';
        break;
   
        
}
 
