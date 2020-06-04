<?php

$productenLijst = array ("appel", "banaan", "meloen", "mandarijn", "Ui", "Peer", "Perzik", "Citroen", "Limoen", "Prei");
$productenPrijs = array ( 0.25, 0.35, 1.55, 0.20, 0.35, 0.60, 0.40, 0.25, 0.95, 0.28);

function getInput()
{
    $input = $_GET['input'] ?? 'vul een waarde in hierboven en klik op [check]';
    echo var_dump($input);
}


function getProductNr()
{
    $productnummer = $_GET['productnummer'] ?? 'vul een productnummer in!';
    echo $productnummer;
}

function getAmount()
{
    $aantalProd = $_GET['aantal'] ?? 'vul een aantal in!';
    echo $aantalProd;
}

function getAge()
{
    $leeftijd = $_GET['leeftijd'] ?? 'vul een leeftijd in!';
    switch($leeftijd) 
    {
        case 19:  
        break;
        case 18:       
        break;
        case 17:
        break;
        case 16:
        break;
        default:     
    }
    echo $leeftijd;
}

function getDiscount()
{
    $leeftijd = $_GET['leeftijd'] ?? 'vul een leeftijd in!';
    switch($leeftijd) 
    {
        case 0.19:
        break;
        case 18:       
        break;
        case 17:
        break;
        case 16:
        break;
        default:     
    }
    echo $leeftijd;
}

function getPrijs()
{
    $productenLijst = array ("appel", "banaan", "meloen", "mandarijn", "Ui", "Peer", "Perzik", "Citroen", "Limoen", "Prei");
    $productenPrijs = array ( 0.25, 0.35, 1.55, 0.20, 0.35, 0.60, 0.40, 0.25, 0.95, 0.28);

    $productnummer = $_GET['productnummer'] ?? 'vul een productnummer in!';
    $aantalProd = $_GET['aantal'] ?? 'vul een aantal in!';
    
    echo $aantalProd * $productenPrijs[$productnummer];
}



?>