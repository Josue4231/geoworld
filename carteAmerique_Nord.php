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
    <h1><strong>L'Amerique du nord</strong><h1>
<img src="images/Nord.png" alt="" width="1000" height="500">
</body>
</html>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>L'Histoire de l'Amérique du Nord</title>
    <style>
        body {
            font-family: 'Tahoma', sans-serif;
            background-color: #f3f4f6;
            color: #333;
            margin: 0;
            padding: 20px;
        }
        header {
            background-color: #004d40;
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
            color: #00796b;
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
        <h1>L'Histoire de l'Amérique du Nord</h1>
    </header>

    <section>
        <p>
            L'Amérique du Nord est un continent vaste et riche en histoire. Bien avant l'arrivée des Européens, il était habité par des peuples autochtones, tels que les <span class="highlight">Iroquois</span>, les <span class="highlight">Sioux</span>, et les <span class="highlight">Aztèques</span>, qui ont développé des sociétés complexes et des cultures profondes.
        </p>

        <p>
            L'arrivée de Christophe Colomb en 1492 a marqué le début de l'exploration et de la colonisation européenne. Les <span class="highlight">Espagnols</span> ont d'abord exploré le sud, tandis que les <span class="highlight">Français</span> et les <span class="highlight">Britanniques</span> ont établi des colonies dans le nord, ouvrant la voie à un mélange d'influences culturelles.
        </p>

        <p>
            Aux XVIIe et XVIIIe siècles, les colonies britanniques sur la côte est se sont progressivement développées, et en 1776, les <span class="highlight">États-Unis d'Amérique</span> ont déclaré leur indépendance, marquant un tournant majeur dans l'histoire du continent.
        </p>

        <p>
            L'Amérique du Nord a été le théâtre de nombreux événements historiques importants, tels que la <span class="highlight">guerre civile américaine</span> et l'extension vers l'ouest à travers la <span class="highlight">ruée vers l'or</span>, qui ont façonné les frontières et les nations modernes.
        </p>

        <p>
            Aujourd'hui, l'Amérique du Nord est composée de trois grandes nations : les États-Unis, le Canada et le Mexique, chacune avec une culture unique, mais toutes influencées par une histoire commune marquée par des explorations, des conflits, et des luttes pour l'indépendance.
        </p>
    </section>

    <footer>
        <p>Une histoire d'exploration, de défis et de diversité.</p>
    </footer>

</body>
</html>
