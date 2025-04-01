<?php
require_once 'header.php';
require_once 'inc/manager-db.php';

// Vérifier si un continent est spécifié dans l'URL
if (isset($_GET['name']) && !empty($_GET['name'])) {
    $continent = $_GET['name'];
    $desPays = getCountriesByContinent($continent);
} else {
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
<h1>Carte de L'Asie<h1>
<img src="images/map-asie.png" alt="" >
</body>
</html>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Histoire de l'Asie - <?php echo htmlspecialchars($continent); ?></title>

    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: justify;
        }

        header {
            background-color: #2C3E50;
            color: white;
            padding: 20px 0;
            width: 100%;
            text-align: center;
        }

        h1 {
            font-size: 2.5rem;
            margin: 0;
            text-transform: uppercase;
        }

        .content {
            width: 80%;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            margin: 20px 0;
        }

        h2 {
            font-size: 2rem;
            color: #2C3E50;
            text-align: center;
            margin-bottom: 20px;
        }

        h3 {
            font-size: 1.5rem;
            color: #2980B9;
            margin-top: 20px;
        }

        p {
            line-height: 1.6;
            font-size: 1rem;
            margin-bottom: 15px;
        }

        ul {
            margin-left: 40px;
            font-size: 1rem;
        }

        footer {
            background-color: #2C3E50;
            color: white;
            text-align: center;
            padding: 10px;
            width: 100%;
        }
    </style>
</head>
<body>

    <header>
        <h1>Histoire de l'Asie</h1>
    </header>

    <div class="content">
        <h2>Un Voyage à Travers l'Histoire de l'Asie</h2>

        <p>L'Asie, le plus grand continent du monde, est un carrefour de civilisations anciennes et modernes. Depuis les premières sociétés humaines jusqu'aux grandes dynasties et aux développements économiques actuels, l'Asie a joué un rôle central dans l'histoire mondiale.</p>

        <h3>Les Premières Civilisations</h3>
        <p>Les premières civilisations de l'Asie se sont développées autour des grandes vallées fluviales comme le fleuve Jaune en Chine et le fleuve Indus en Inde. Ces sociétés ont laissé des traces profondes dans le développement de la culture, de l'agriculture et des systèmes d'écriture.</p>

        <ul>
            <li><strong>La civilisation de la vallée de l'Indus :</strong> L'une des premières grandes civilisations, connue pour ses villes planifiées et ses systèmes d'égouts avancés.</li>
            

        <h3>Les Dynasties et Empires de l'Asie</h3>
        <p>Au fil des siècles, plusieurs dynasties et empires ont dominé l'Asie, chacune ayant marqué son époque par des avancées dans les domaines de l'art, de la science, et de la gouvernance.</p>

        <ul>
            <li><strong>Les dynasties chinoises :</strong> La Chine impériale a connu de grandes dynasties, telles que les Tang, les Ming et les Qing, qui ont contribué à la grandeur de l'Empire du Milieu.</li>
            <li><strong>L'Empire Mongol :</strong> L'Empire mongol de Gengis Khan s'est étendu sur une grande partie de l'Asie et de l'Europe, et a favorisé des échanges entre les civilisations d'Orient et d'Occident.</li>
            <li><strong>Les empires indiens :</strong> Les Maurya et Gupta ont contribué au développement de l'Inde, avec des avancées dans les sciences, l'architecture et la religion.</li>
        </ul>

        <h3>Les Routes Commerciales et les Échanges Culturels</h3>
        <p>L'Asie a toujours été un centre d'échanges commerciaux, notamment à travers la fameuse <strong>Route de la Soie</strong>, qui reliait la Chine à l'Europe et au Moyen-Orient. Ces routes ont favorisé les échanges de marchandises, mais aussi d'idées, de religions et de technologies.</p>






 