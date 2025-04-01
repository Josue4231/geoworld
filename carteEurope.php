<?php
/**
 * Home Page
 *
 * PHP version 7
 *
 * @category  Page
 * @package   Application
 * @author    SIO-SLAM <sio@ldv-melun.org>
 * @copyright 2019-2021 SIO-SLAM
 * @license   http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link      https://github.com/sio-melun/geoworld
 */
?>

<?php  require_once 'header.php'; ?>
<?php
require_once 'inc/manager-db.php';
if (isset($_GET['name']) && !empty($_GET['name']) ){
$continent = ($_GET['name']);
$desPays = getCountriesByContinent($continent);
}
else{
$continent = "Monde";
$desPays = getAllCountries();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Carte de L'Europe<h1>
<img src="images/map-Europe.png" alt="" width="700" height="400">
</body>
</html>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Histoire de l'Europe</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        header {
            background-color: #4CAF50;
            color: white;
            padding: 10px 0;
            text-align: center;
        }
        section {
            padding: 20px;
            margin: 10px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1, h2 {
            color: #333;
        }
        p {
            text-align: justify;
        }
        .timeline {
            list-style-type: none;
            padding: 0;
        }
        .timeline li {
            margin: 20px 0;
            padding: 10px;
            background-color: #e0e0e0;
            border-radius: 6px;
        }
        footer {
            text-align: center;
            background-color: #333;
            color: white;
            padding: 10px;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
    </style>
</head>
<body>

    <header>
        <h1>L'Histoire de l'Europe</h1>
    </header>

    <section>
        <h2>Introduction</h2>
        <p>
            L'histoire de l'Europe est complexe et riche, marquée par des événements majeurs, des révolutions et des découvertes qui ont façonné non seulement le continent européen, mais aussi le monde entier. Des civilisations anciennes aux guerres mondiales du 20e siècle, l'Europe a été un témoin central dans l'évolution de l'humanité.
        </p>
    </section>

    <section>
        <h2>Les Civilisations Anciennes</h2>
        <p>
            L'histoire de l'Europe remonte à l'Antiquité, avec des civilisations comme les Grecs et les Romains. Les Grecs ont posé les bases de la philosophie, de la politique et des sciences, tandis que l'Empire romain a étendu son influence sur une grande partie de l'Europe, de l'Afrique du Nord et du Moyen-Orient.
        </p>
    </section>

    <section>
        <h2>Le Moyen Âge</h2>
        <p>
            Après la chute de l'Empire romain en 476, l'Europe est entrée dans une période appelée le Moyen Âge. Cette époque a été marquée par la féodalité, les invasions barbares et la montée de l'Église catholique comme force dominante. Les croisades, les guerres et les événements religieux ont également joué un rôle clé durant cette période.
        </p>
    </section>

    <section>
        <h2>La Renaissance et les Révolutions</h2>
        <p>
            Au 15e et 16e siècles, l'Europe a vécu la Renaissance, un renouveau culturel et artistique qui a conduit à d'importantes avancées dans les arts, la science et la littérature. Cette période a vu l'émergence de grandes figures comme Léonard de Vinci et Michel-Ange. Les révolutions scientifiques et les découvertes géographiques ont également marqué cette époque.
        </p>
    </section>

    <section>
        <h2>Les Guerres Mondiales</h2>
        <p>
            Au 20e siècle, l'Europe a été le théâtre des deux guerres mondiales, des conflits dévastateurs qui ont redessiné les frontières et les relations internationales. La Première Guerre mondiale (1914-1918) a été suivie par la Seconde Guerre mondiale (1939-1945), qui a causé la mort de millions de personnes et conduit à des changements majeurs dans l'ordre mondial.
        </p>
    </section>

    <section>
        <h2>L'Europe Moderne</h2>
        <p>
            Après la Seconde Guerre mondiale, l'Europe a connu une reconstruction rapide et une intégration progressive, notamment avec la création de l'Union européenne. Aujourd'hui, l'Europe est un centre économique et politique majeur, avec des défis contemporains tels que la migration, le changement climatique et la coopération internationale.
        </p>
    </section>

    <section>
        <h2>Chronologie des événements majeurs</h2>
        <ul class="timeline">
            <li><strong>476 :</strong> Chute de l'Empire romain d'Occident</li>
            <li><strong>800 :</strong> Charlemagne couronné empereur du Saint-Empire romain germanique</li>
            <li><strong>1492 :</strong> Découverte de l'Amérique par Christophe Colomb</li>
            <li><strong>1914-1918 :</strong> Première Guerre mondiale</li>
            <li><strong>1939-1945 :</strong> Seconde Guerre mondiale</li>
            <li><strong>1957 :</strong> Traité de Rome et création de la Communauté économique européenne (CEE)</li>
            <li><strong>1993 :</strong> Création de l'Union européenne (UE)</li>
        </ul>
    </section>

    

</body>
</html>
