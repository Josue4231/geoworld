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
            background-color:rgb(42, 10, 226);
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
            color:rgb(15, 72, 228);
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
    <main>
        <div class="container">
            <h2>La page Continent</h2>
            <p>L'objectif principal de ce code est d'afficher un tableau interactif des pays d'un continent donné ou du monde entier, avec des liens permettant d'afficher plus d'informations sur chaque pays.</p>
            <p>J'ai utilisé une base de données pour obtenir les informations liées à chaque pays, telles que son nom, sa population, son président, sa superficie, sa région et sa capitale (grâce aux données SQL).</p>
            <p>Par exemple si je clique sur Europe(Continent) cela affichera tout les pays en Europe dans ordre de alphabet </p>
            
            <p>Pour consulter les données SQL utilisées dans ce projet, vous pouvez accéder à la base de données via ce lien : 
                <a href="http://localhost/phpmyadmin/index.php?route=/sql&pos=0&db=world&table=Country" target="_blank">Accéder à la base de données SQL</a>.
                <ul>
                    <li>ID:josue</li>
                    <li>Password: root</li>
                <p>Pour les detail du code Continent veuiller cliquer ici :</p>
                <a href="https://www.canva.com/design/DAGjpiIlHWo/FPZqlV7Ctwlz5zPJS8HxUg/edit" target="_blank">Detail Continent</a>. 
                <p>Si cela n'afficher pas telecharger vers dans mon dossier </p>
            </p>
        </div>

        <!-- Section image -->
        <div class="image-container">
    <img src="page/EuropeC.png" alt="Image représentant le projet GeoWorld" class="image">
    
    
    <span class="continent-text">Cliquez sur un continent</span>


    <img src="page/Continent.png" alt="Image représentant le projet GeoWorld" class="image">
</div>

    </main>

    <footer>
        <p>&copy; 2025 GeoWorld | Fait par Josue Kialengela-Tazi</p>
    </footer>

</body>
</html>