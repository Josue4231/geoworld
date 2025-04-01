<?php
/**
 * Ce script est composé de fonctions d'exploitation des données
 * détenues pas le SGBDR MySQL utilisées par la logique de l'application.
 *
 * C'est le seul endroit dans l'application où a lieu la communication entre
 * la logique métier de l'application et les données en base de données, que
 * ce soit en lecture ou en écriture.
 *
 * PHP version 7
 *
 * @category  Database_Access_Function
 * @package   Application
 * @author    SIO-SLAM <sio@ldv-melun.org>
 * @copyright 2019-2021 SIO-SLAM
 * @license   http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link      https://github.com/sio-melun/geoworld
 */

/**
 *  Les fonctions dépendent d'une connection à la base de données,
 *  cette fonction est déportée dans un autre script.
 */
require_once 'connect-db.php';

/**
 * Obtenir la liste de tous les pays référencés d'un continent donné
 *
 * @param string $continent le nom d'un continent
 * 
 * @return array tableau d'objets (des pays)
 */
function getCountriesByContinent($continent)
{
    // pour utiliser la variable globale dans la fonction
    global $pdo;
    $query = 'SELECT * FROM Country WHERE Continent = :cont;';
    $prep = $pdo->prepare($query);
    // on associe ici (bind) le paramètre (:cont) de la req SQL,
    // avec la valeur reçue en paramètre de la fonction ($continent)
    // on prend soin de spécifier le type de la valeur (String) afin
    // de se prémunir d'injections SQL (des filtres seront appliqués)
    $prep->bindValue(':cont', $continent, PDO::PARAM_STR);
    $prep->execute();
    // var_dump($prep);  pour du debug
    // var_dump($continent);

    // on retourne un tableau d'objets (car spécifié dans connect-db.php)
    return $prep->fetchAll();
}

/**
 * Obtenir la liste des pays
 *
 * @return liste d'objets
 */
function getAllCountries()
{
    global $pdo;
    $query = 'SELECT * FROM Country;';
    return $pdo->query($query)->fetchAll();
}
function getContinent()
{
global $pdo;
$query = 'SELECT DISTINCT continent FROM Country;';
return $pdo->query($query)->fetchAll();
}

function getLangue()
{
    global $pdo;
    $query = 'SELECT l.Name AS Language, COUNT(DISTINCT cl.idCountry) AS NombreDePays FROM `CountryLanguage` cl JOIN `Language` l ON cl.idLanguage = l.id GROUP BY l.Name ORDER BY NombreDePays DESC;  ';
    return $pdo->query($query)->fetchAll();
}
function getinformationpays($id)
{
    global $pdo;
    $query = 'SELECT * FROM Country WHERE id = :id;';
    $prep = $pdo->prepare($query);
    $prep->bindValue(':id', $id, PDO::PARAM_INT);
    $prep->execute();
    // var_dump($prep);  pour du debug
    // var_dump($continent);

    // on retourne un tableau d'objets (car spécifié dans connect-db.php)
    return $prep->fetch();

}

function  getCapitale($idpays)
{

global $pdo;
$query = 'SELECT Name FROM City WHERE id =:id;';
$prep = $pdo->prepare($query);
    $prep->bindValue(':id', $idpays, PDO::PARAM_STR);
    $prep->execute();
    // var_dump($prep);  pour du debug
    // var_dump($continent);

    // on retourne un tableau d'objets (car spécifié dans connect-db.php)
    return $prep->fetch();
}

function getpayslangue($country){
    global $pdo;
    $query = "SELECT cl.idCountry, c.Name AS Country, c.Continent, c.Population, c.Region FROM `CountryLanguage` cl JOIN `Language` l ON cl.idLanguage = l.id JOIN `Country` c ON cl.idCountry = c.id WHERE l.Name = '$country';";
    //$prep = $pdo->prepare($query);
    //$prep->bindValue(':id', $idpays, PDO::PARAM_STR);
    //$prep->execute();
    // var_dump($prep);  pour du debug
    // var_dump($continent);
    echo $query;

    // on retourne un tableau d'objets (car spécifié dans connect-db.php)
    //return $prep->fetch();
    return $pdo->query($query)->fetchAll();

}
function getPays($id)
{
    global $pdo;
    $query = "SELECT * FROM Country WHERE id = $id ;";
    //$prep = $pdo->prepare($query);
    //$prep->bindValue(':id', $idpays, PDO::PARAM_STR);
    //$prep->execute();
    // var_dump($prep);  pour du debug
    // var_dump($continent);
    echo $query;

    return $pdo->query($query)->fetch();
}
function getPaysByName($name)
{
    global $pdo;
    $query = "SELECT * FROM Country WHERE Name = '$name';";
    return $pdo->query($query)->fetch();
}