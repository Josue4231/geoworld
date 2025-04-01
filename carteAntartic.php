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
    <h1>L'Antartic<h1>
<img src="images/Antartique.png" alt="" weight="500" height="500">
</body>
</html>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>L'Histoire de l'Antarctique</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #e6f2ff;
            color: #003366;
            margin: 0;
            padding: 20px;
        }
        header {
            background-color: #004080;
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
            color: #0066cc;
            font-weight: bold;
        }
        footer {
            text-align: center;
            margin-top: 40px;
            font-size: 1em;
            color: #003366;
        }
    </style>
</head>
<body>

    <header>
        <h1>L'Histoire de l'Antarctique</h1>
    </header>

    <section>
        <p>
            L'Antarctique est le continent le plus isolé et le plus froid de la Terre. Il n'a été exploré que relativement récemment, principalement au cours des 19e et 20e siècles. Avant cela, il était largement inconnu, et son existence a été théorisée bien avant qu'il ne soit effectivement découvert.
        </p>

        <p>
            Les premiers explorateurs européens ont commencé à s'intéresser à l'Antarctique au début du 19e siècle. Ce n'est qu'en 1820 que l'explorateur russe <span class="highlight">Fabian Gottlieb von Bellingshausen</span>, avec son équipage, a été l'un des premiers à naviguer près du continent, bien que des missions avaient déjà tenté de l'approcher auparavant sans succès.
        </p>

        <p>
            À partir de la fin du 19e siècle et du début du 20e, des explorateurs comme <span class="highlight">Ernest Shackleton</span> et <span class="highlight">Roald Amundsen</span> ont effectué de célèbres expéditions. Amundsen a été le premier à atteindre le pôle Sud en 1911, battant le Britannique Robert Falcon Scott, qui est mort lors de son expéditions vers le même objectif l'année suivante.
        </p>

        <p>
            L'Antarctique a longtemps été un lieu de compétition intense entre les puissances mondiales. Cependant, au 20e siècle, les explorations scientifiques se sont intensifiées, et en 1959, le <span class="highlight">Traité sur l'Antarctique</span> a été signé par de nombreuses nations. Ce traité stipule que l'Antarctique doit être utilisé à des fins pacifiques et scientifiques, interdisant toute activité militaire.
        </p>

        <p>
            Aujourd'hui, l'Antarctique est principalement une zone de recherche scientifique. Des stations de recherche sont dispersées sur le continent, où des scientifiques étudient les changements climatiques, les écosystèmes polaires et d'autres phénomènes uniques à cette région isolée.
        </p>

        <p>
            Bien que l'Antarctique ne soit pas habité de manière permanente, son rôle dans la compréhension des changements climatiques mondiaux et de l'histoire de la Terre est crucial. Les glaces de l'Antarctique contiennent des informations précieuses sur le passé climatique de notre planète.
        </p>
    </section>

    <footer>
        <p>Un continent de glace et de découverte scientifique.</p>
    </footer>

</body>
</html>
