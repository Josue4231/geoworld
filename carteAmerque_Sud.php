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
    <h1>L'Amerique du Sud<h1>
<img src="images/carteSud.png" alt="">
</body>
</html>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Histoire de l'Amérique du Sud</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        h1 {
            color: #2C3E50;
            text-align: center;
        }
        p {
            font-size: 1.2em;
            color: #34495E;
            line-height: 1.6;
        }
        .highlight {
            color: #E74C3C;
            font-weight: bold;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: white;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>L'Histoire de l'Amérique du Sud</h1>

        <p>
            L'Amérique du Sud est un continent riche en histoire et en diversité culturelle. 
            Elle a été habitée depuis des millénaires par de nombreuses civilisations, telles que les Incas , qui ont construit l'un des plus grands empires précolombiens dans les Andes.
        </p>

        <p>
            Lors de la conquête par les Européens au XVe siècle, les explorateurs espagnols et portugais ont établi des colonies, ce qui a marqué un tournant important dans l'histoire du continent. L'Amérique du Sud est alors devenue un centre d'exploitation des ressources naturelles, comme l'or et l'argent.
        </p>

        <p>
            Au XIXe siècle, la plupart des nations sud-américaines ont obtenu leur indépendance. Des figures emblématiques comme Simón Bolívar ont mené des révolutions pour chasser les colonisateurs européens et créer des républiques indépendantes.
        </p>

        <p>
            Aujourd'hui, l'Amérique du Sud est un continent vibrant, avec des cultures, des paysages et des traditions uniques. Des merveilles naturelles comme l'Amazonie et les chutes d'Iguazú attirent des visiteurs du monde entier.
        </p>
    </div>

</body>
</html>
