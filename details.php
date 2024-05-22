<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails du Réveil du Futur</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            color: #333;
            background: #f4f4f4;
        }
        nav {
            background: #ffffff; /* Beige */
            padding: 15px 0; /* Augmentation de la taille */
            text-align: center;
            box-shadow: 0 1px 3px rgba(0,0,0,0.2); /* Ombre sous la nav */
            border-top: 1px solid rgba(0,0,0,0.1);
            border-bottom: 1px solid rgba(0,0,0,0.1);
        }
        nav a {
            color: #333;
            text-decoration: none;
            padding: 12px 20px;
            font-size: 18px; /* Taille du texte augmentée */
            display: inline-block; /* Centrer le texte verticalement et maintenir l'espacement */
            position: relative;
        }
        nav a:not(:last-child):after {
            content: '';
            position: absolute;
            right: 0;
            top: 50%;
            transform: translateY(-50%);
            width: 1px;
            height: 20px;
            background: rgba(0,0,0,0.1); /* Trait de séparation */
            box-shadow: 1px 0 3px rgba(0,0,0,0.3); /* Effet d'ombre sur le trait */
        }
        nav a:hover, nav a:focus {
            background-color: #333333;
            color: #ffffff;
            border-radius: 5px;
        }
        header, footer {
            background: #ffffff;
            color: #333333;
            padding: 20px;
            text-align: center;
        }
        .content {
            width: 80%;
            margin: 20px auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        h1, h2 {
            color: #0056b3;
        }
        p {
            line-height: 1.6;
        }
        ul {
            margin: 20px 0;
            padding-left: 20px;
        }
        li {
            margin-bottom: 10px;
        }
        .image {
            text-align: center;
        }
        .image img {
            width: 50%;
            border-radius: 8px;
        }
    </style>
</head>
<body>
<header>
    <h1>Détails du Réveil du Futur</h1>
</header>
<nav>
    <a href="index.php">Accueil</a>
    <a href="details.php">Détails</a>
    <a href="galerie.php">Galerie</a>
    <a href="equipe.php">Equipe</a>
    <a href="contact.php">Contact</a>
</nav>

<div class="content">
    <section class="description">
        <h2>Description</h2>
        <p>Ce réveil n'est pas simplement un réveil, c'est un assistant de vie conçu pour améliorer votre routine matinale grâce à des technologies de pointe.</p>
    </section>

    <section class="features">
        <h2>Fonctionnalités Clés</h2>
        <ul>
            <li>Interface utilisateur intuitive et écran tactile.</li>
            <li>Connexion Bluetooth pour une intégration avec d'autres appareils domestiques.</li>
            <li>Capteurs de lumière pour un réveil en douceur avec simulation de l'aube.</li>
            <li>Application mobile dédiée pour une personnalisation complète des alarmes.</li>
        </ul>
    </section>

    <section class="technical-details">
        <h2>Détails Techniques</h2>
        <ul>
            <li>Dimensions: 120mm x 80mm x 60mm</li>
            <li>Poids: 400g</li>
            <li>Batterie: Lithium-ion rechargeable avec une autonomie de 7 jours</li>
            <li>Garantie: 2 ans</li>
        </ul>
    </section>

    <section class="expert-reviews">
        <h2>Avis d'Experts</h2>
        <p>Les critiques technologiques et les utilisateurs conviennent que le "Réveil du Futur" est une révolution dans le domaine des technologies personnelles de gestion du temps et du sommeil.</p>
    </section>

    <div class="image">
        <img src="https://i.ibb.co/HDBf4yc/horloge.png" alt="Réveil du Futur">
    </div>
</div>

<footer>
    <p>Contactez-nous: info@lereveildufutur.com</p>
</footer>
</body>
</html>
