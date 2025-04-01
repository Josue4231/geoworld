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
    <h1>L'Oceanie<h1>
<img src="images/map-oceanie.png" alt="">
</body>
</html>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>L'Histoire de l'Océanie</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f0f4f8;
            color: #2c3e50;
            margin: 0;
            padding: 20px;
        }
        header {
            background-color: #00796b;
            color: white;
            padding: 20px;
            text-align: center;
        }
        header h1 {
            font-size: 2.5em;
        }
        section {
            max-width: 900px;
            margin: 30px auto;
            padding: 25px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        p {
            font-size: 1.1em;
            line-height: 1.6;
            margin-bottom: 15px;
        }
        .highlight {
            color: #004d40;
            font-weight: bold;
        }
        footer {
            text-align: center;
            margin-top: 40px;
            font-size: 1em;
            color: #333;
        }
    </style>
</head>
<body>

    <header>
        <h1>L'Histoire de l'Océanie</h1>
    </header>

    <section>
        <p>
            L'Océanie est un continent composé de nombreuses îles et archipels, répartis sur une vaste étendue d'eau. Avant l'arrivée des Européens, l'Océanie était peuplée par divers peuples autochtones, tels que les <span class="highlight">Maoris</span> en Nouvelle-Zélande, les <span class="highlight">Aborigènes</span> en Australie, et les <span class="highlight">Polynésiens</span> qui ont voyagé à travers l'océan Pacifique.
        </p>

        <p>
            Les premiers habitants de l'Océanie sont arrivés en plusieurs vagues, probablement depuis l'Asie du Sud-Est, au cours de milliers d'années. Ces peuples ont développé des cultures riches et variées, adaptées à leurs environnements insulaires, et ont appris à naviguer dans les vastes océans pour relier les différentes îles.
        </p>

        <p>
            L'arrivée des Européens, à partir du XVIe siècle, a profondément modifié le paysage de l'Océanie. Le navigateur portugais <span class="highlight">Fernão de Magalhães</span> fut l'un des premiers Européens à explorer cette région. Plus tard, les Britanniques, les Français et les Néerlandais ont établi des colonies, souvent au détriment des populations locales.
        </p>

        <p>
            Le XVIIIe siècle a vu l'exploration plus poussée de l'Océanie, notamment par le célèbre explorateur britannique <span class="highlight">James Cook</span>, qui a cartographié une grande partie des îles du Pacifique. Cela a ouvert la voie à une plus grande colonisation et à l'établissement de bases navales.
        </p>

        <p>
            Après des siècles de colonisation, de nombreuses nations océaniennes ont obtenu leur indépendance au XXe siècle, comme <span class="highlight">l'Australie</span> et <span class="highlight">la Nouvelle-Zélande</span>, qui ont formé des États modernes. Certaines îles, comme celles de la Polynésie, restent encore des territoires d'outre-mer sous administration française.
        </p>

        <p>
            Aujourd'hui, l'Océanie est un continent diversifié, avec des paysages allant des plages tropicales aux montagnes arides. Ses nations et ses cultures, telles que les îles Fidji, Hawaï, ou encore les archipels de la Micronésie, continuent de jouer un rôle important dans la scène mondiale, tout en préservant leur riche patrimoine.
        </p>
    </section>

    <footer>
        <p>Un continent de merveilles naturelles et de cultures ancestrales.</p>
    </footer>

</body>
</html>

