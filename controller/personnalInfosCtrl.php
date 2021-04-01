<?php
require_once(__DIR__ . '../../models/personnalInfoModel.php');
$currentDate = date('Y-m-d');
$formError = array();
$phoneRegex = '/^(\+0?1\s)?((\d{3})|(\(\d{3}\)))?(\s|-)\d{3}(\s|-)\d{4}$/';
$passeportRegex = '/^(?!^0+$)[a-zA-Z0-9]{3,20}$/';
$personnal = new Personnal();
$personnal->idUser = $_SESSION['UserId'];
//au clique du bouton SAVE
if (isset($_POST['savePersonnalInfo'])) {
    //Vérification du numéro de téléphone
    if (!empty($_POST['cellNumber'])) {
        if (preg_match($phoneRegex, $_POST['cellNumber'])) {
            $personnal->cellNumber = htmlentities($_POST['cellNumber']);
        } else {
            $formError['cellNumber'] = 'Your phone number is not valid';
        }
    } else if(empty($_POST['cellNumber']) && isset($_POST['nextTravelInfo'])){
        $formError['cellNumber'] = 'This field can not be empty';
    }
    //vérification du numéro de passeport
    if (!empty($_POST['passeportNumber'])) {
        if (preg_match($passeportRegex, $_POST['passeportNumber'])) {
            $personnal->passeportNumber = htmlentities($_POST['passeportNumber']);
        } else {
            $formError['passeportNumber'] = 'Your passeport number is not valid';
        }
    }
    //vérification de la date de naissance
    if (!empty($_POST['dateOfBirth'])) {
        $personnal->dateOfBirth = htmlspecialChars($_POST['dateOfBirth']);
    }

    //Vérification de la date d'expiration
    if (!empty($_POST['expirationDate'])) {
        $personnal->expirationDate = htmlspecialChars($_POST['expirationDate']);
    }
    if (!empty($_POST['legalName'])) {
        $personnal->legalName = htmlspecialChars($_POST['legalName']);
    }

    if (empty($formError)) {
        if ($personnal->updatePersonnalInfos()) {
            $message = 'Your informations has been added successfully. You can now continue the survey.';
        } else {
            $message = 'something went wrong during the process. Please try again';
        }
    }
}
//On récupère les informations déjà enregistrées
$personnalInfos = $personnal->getPersonnalInfoByUserId();
//on éxécute la fonction pour vérifier si les attributs sont tous rempli, si c'est le cas, on affiche le bouton next, sinon on écrit un messa
$nextButtonVisibleState = verifyEachObjectsAttributesIsNotEmpty($personnalInfos);

