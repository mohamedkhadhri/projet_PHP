<!-- accueil.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'accueil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <style>
        body, html {
            height: 100%;
            margin: 0;
            display: flex;
            flex-direction: column;
            background-image: url('./img/AdobeStock_725710604_Preview.jpeg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            color: #fff; /* Couleur du texte */
        }
        .container {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
           /* background: rgba(255, 255, 255, 0.8); /* Pour une légère transparence */
            padding: 20px;
            border-radius: 10px;
            margin-top: 20px; /* Pour un léger espacement sous la barre de navigation */
        }
        nav {
           /* background: rgba(255, 255, 255, 0.9);*/
            position: absolute; /* Position absolue pour se superposer à l'image de fond */
            width: 100%;
            top: 0;
            z-index: 1000; /* Assure que la barre de navigation est au-dessus du contenu */
        }
        .navbar-brand img {
            max-height: 75px; /* Ajustez la taille de l'image selon vos besoins */
            width: 250px; /* Pour ajuster automatiquement la largeur */
            max-width: 100%; /* Assure que l'image ne dépasse pas la largeur de son conteneur */
        }
        .navbar-nav {
            margin-left: auto; /* Aligner les éléments à droite */
        }
        .nav-link {
            color: black; /* Couleur du texte des liens */
            margin-left: 15px; /* Espacement entre les liens */
        }
        .nav-link:hover {
            color: #ffc107; /* Couleur du texte au survol */
            text-decoration: none; /* Supprime la soulignement par défaut */
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="./img/Capture d’écran 2024-06-30 202219.png" alt="Logo" class="img-fluid"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="./Gsm.html">GSM</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./TV.html">TV</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./PC.html">PC</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./Électroménager.html">Électroménager</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./Accessoires.html">Accessoires</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./Service.html">Service</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-5">
        <h1>Bienvenue sur elctro julia</h1>
        
        <p>Découvrez notre boutique en ligne spécialisée dans la vente de produits électroniques dernier cri. Que vous recherchiez un smartphone GSM de pointe, une télévision haute définition, un ordinateur performant, des appareils électroménagers modernes ou même des composants électroniques pour vos projets DIY, nous avons tout ce dont vous avez besoin. Notre site propose une large gamme de produits sélectionnés pour leur qualité et leur fiabilité, provenant des meilleures marques du marché. Parcourez notre catalogue pour trouver les dernières innovations technologiques et bénéficiez d'une expérience d'achat en ligne simple, sécurisée et rapide. Qu'il s'agisse de répondre à vos besoins personnels ou professionnels, notre équipe est là pour vous guider à chaque étape afin de vous offrir une satisfaction totale dans vos achats électroniques</p>
    </div>
    
</body>
</html>
