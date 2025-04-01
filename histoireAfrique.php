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
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vidéo YouTube - Histoire de l'Europe</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
        }

        header {
            background-color: #2C3E50;
            color: white;
            padding: 20px 0;
            width: 100%;
            margin-bottom: 20px;
        }

        h1 {
            font-size: 2.5rem;
            margin: 0;
            text-transform: uppercase;
        }

        section.video {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            width: 100%;
            margin: 0 20px;
        }

        iframe {
            width: 100%;
            height: 450px;
            border: none;
            border-radius: 8px;
        }

        footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            background-color: #2C3E50;
            color: white;
            text-align: center;
            padding: 10px;
            font-size: 0.9rem;
        }
    </style>
</head>
<body>

    <header>
        <h1>Histoire de LAfrique : </h1>
        <p>Voici le lien de la video : https://www.youtube.com/watch?v=kiBs4Tc-WyI<p>
    </header>

    <section class="video">
        <h2>La colonisation de l'Afrique</h2>
        <!-- Intégration de la vidéo YouTube -->
        <iframe src="https://www.youtube.com/watch?v=kiBs4Tc-WyI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </section>

    <footer>
        <p>&copy; 2025 Histoire de L'Afrique. Tous droits réservés.</p>
    </footer>

</body>
</html>