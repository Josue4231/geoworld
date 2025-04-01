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
    <h1>Carte de L'Afrique<h1>
<img src="images/Afrique.png" alt="">
</body>
</html>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>L'Histoire de l'Afrique</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Verdana', sans-serif;
            background-color: #e8f5e9;
            color: #2c6e49;
            padding: 20px;
        }
        header {
            background-color: #1b5e20;
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
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        p {
            font-size: 1.1em;
            line-height: 1.8;
            margin-bottom: 15px;
        }
        .highlight {
            color: #ff7043;
            font-weight: bold;
        }
        footer {
            text-align: center;
            margin-top: 40px;
            font-size: 1em;
            color: #2c6e49;
        }
    </style>
</head>
<body>

    <header>
        <h1>L'Histoire de l'Afrique</h1>
    </header>

    <section>
        <p>
            L'Afrique, berceau de l'humanité, est un continent au passé fascinant. Depuis les premières traces de l'Homo sapiens en <span class="highlight">Afrique de l'Est</span>, le continent a été le foyer de civilisations antiques comme l'Égypte, le royaume du <span class="highlight">Caire</span> et Carthage, qui ont joué un rôle central dans l'histoire du monde.
        </p>

        <p>
            Les royaumes africains ont prospéré bien avant l'arrivée des Européens, comme ceux du <span class="highlight">Mali</span>, du <span class="highlight">Kénédougou</span>, et du <span class="highlight">Zimbabwe</span>, qui étaient des centres d'échanges commerciaux, de savoir et de culture.
        </p>

        <p>
            L'Afrique a connu une époque douloureuse avec la traite des esclaves, durant laquelle des millions de personnes ont été emmenées vers d'autres continents. Cependant, les peuples africains ont résisté et se sont battus pour leur indépendance, comme en témoignent les luttes menées par des leaders comme <span class="highlight">Nelson Mandela</span> et <span class="highlight">Kwame Nkrumah</span>.
        </p>

        <p>
            Aujourd'hui, l'Afrique est un continent riche de sa diversité, avec plus de 50 pays et une grande variété de cultures, de langues et de paysages, des savanes du <span class="highlight">Sahara</span> aux jungles tropicales du <span class="highlight">Congo</span>.
        </p>
    </section>

    <footer>
        <p>Histoire inspirée par les grandes civilisations africaines.</p>
    </footer>

</body>
</html>
