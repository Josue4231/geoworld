<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - GeoWorld</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* Style de base */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 0;
        }

        header {
            background-color:rgb(15, 245, 206);
            color: white;
            padding: 15px 0;
            text-align: center;
        }

        h1 {
            margin: 0;
        }

        main {
            padding: 20px;
        }

        p {
            font-size: 1.1em;
            line-height: 1.6;
        }

        a {
            color:rgb(20, 230, 72);
            text-decoration: none;
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
        }

        .container {
            max-width: 900px;
            margin: 20px auto;
            background-color: white;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            width: 100%;
            bottom: 0;
        }

        /* Styles pour l'image */
        .image-container {
            text-align: center;
            margin: 20px 0;
        }

        img {
            width: 100%;
            max-width: 700px;
            height: auto;
            border-radius: 8px;
        }
    </style>
</head>
<body>

    <header>
        <h1>Bienvenue sur GeoWorld</h1>
        <nav>
            <ul>
                <li><a href="hearder.php">Introduction</a></li>
                <li><a href="page_home.php">Home</a></li>
                <li><a href="Continent.php">Continent</a></li>
                <li><a href="Langues.php">Langues</a></li>
                <li><a href="Histoire.php">Histoire du monde</a></li>
                <li><a href="Carte.php">Carte du monde</a></li>
                <li><a href="Fonction.php">Fonction</li></a>

            </ul>
        </nav>
    </header>

    <div class="container">
            <h2>La page Langues</h2>
            <p>Ce code génère une page Web qui affiche un tableau des langues les plus parlées dans le monde. </p>
            <p>Ainsi que le nombre de pays où chaque langue est parlée. Il permet à l'utilisateur de consulter ces informations et d'obtenir plus de détails sur chaque langue en cliquant sur son nom.</p> 
            <p>Le tableau est alimenté par des données récupérées depuis une base de données via des fonctions PHP.</p>
            
            <p>Pour consulter les données SQL utilisées dans ce projet, vous pouvez accéder à la base de données via ce lien : 
                <a href="http://localhost/phpmyadmin/index.php?route=/sql&pos=0&db=world&table=Country" target="_blank">Accéder à la base de données SQL</a>.
                <ul>
                    <li>ID:josue</li>
                    <li>Password: root</li>
                <p>Pour les detail du code Home veuiller cliquer ici :</p>
                <a href="https://www.canva.com/design/DAGjpz3SueA/NvkqTQEyHbHM7pTc1tCUCw/edit" target="_blank">Detail Langues</a>. 
                <p>Si cela n'afficher pas telecharger vers dans mon dossier </p>
            </p>
        </div>

        <div class="image-container">
            <img src="page/Langues.png" alt="Image représentant le projet GeoWorld">
        </div>
    </main>

    <footer>
        <p>&copy; 2025 GeoWorld | Fait par Josue Kialengela-Tazi</p>
    </footer>

</body>
</html>
