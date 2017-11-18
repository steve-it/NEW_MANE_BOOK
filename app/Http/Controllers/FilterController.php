<?php
/**
 * Created by PhpStorm.
 * User: steve
 * Date: 18/11/17
 * Time: 08:37
 */


include '../app/config/connexionBD.php';

use App\Domaine;

if(isset($_GET['action'])) {
    extract($_GET);



    if ($action == "sessionAnnee") {
       // include "models/ModelsAnnee.php";

        $annee = new Domaine();

        echo $annee->getsessionAnnee($idannee);
    }

}