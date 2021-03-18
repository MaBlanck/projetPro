<?php

//fonction permettant de vérifier la présence des attributs d'un objet
//Vérifie si chaque attribut n'est pas null et pas vide (boucle)
function verifyEachObjectsAttributesIsNotEmpty($object)
{
    $objectVarsAttributes = get_object_vars($object);
    $canSave = true;
    foreach ($objectVarsAttributes as $attributeValue) {
        if (empty($attributeValue)) {
            $canSave = false;
            break;
        }
    }
    return $canSave;
}
