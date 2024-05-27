<!DOCTYPE html>
/*-------------------*/
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notre Équipe</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background: #f4f4f4;
            color: #333;
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
        .team {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            padding: 20px;
        }
        .member, .professor {
            background: white;
            margin: 15px;
            padding: 20px;

            width: calc(25% - 20px);
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            border-radius: 10px;
            text-align: center;
        }
        .professor {
            border: 3px solid #0056b3; /* Distinct border to highlight */
            background: #e6f0ff; /* Lighter background to stand out */
        }
        .member img, .professor img {
            width: 100%;
            height: auto;
            border-radius: 10px;
            cursor: pointer;
        }
        .member h3, .member p, .member span, .professor h3, .professor p, .professor span {
            margin: 5px 0;
        }
        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0,0,0,0.8);

        }
        .modal-content {
            margin: 5% auto;
            padding: 20px;
            width: 1000%;
            max-width: 1000px;
            display: flex;
            align-items: center; /* This will center the modal content vertically */
            justify-content: center; /* This will center the modal content horizontally */

        }
        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
        }
        .close:hover,
        .close:focus {
            color: #000;
            text-decoration: none;
        }
    </style>
</head>
<body>
<header>
    <h1>Rencontrez Notre Équipe</h1>
</header>
<nav>
    <a href="index.php">Accueil</a>
    <a href="details.php">Détails</a>
    <a href="galerie.php">Galerie</a>
    <a href="equipe.php">Equipe</a>
    <a href="contact.php">Contact</a>
</nav>
<div class="team">
    <!-- Exemple de blocs pour chaque membre de l'équipe -->
    <div class="professor">
        <img src="https://i.ibb.co/dbpwjt1/IMG-20240522-164418.jpg" alt="Dr. John Smith - john.smith@university.edu" onclick="openModal(this.src, this.alt)">
        <h3>Pr. Matthieu Milharo</h3>
        <span>Matthieu.Milharo@univ-lemans.fr</span>
        <p>Professeur et superviseur du projet.</p>
    </div>

    <div class="member">
        <img src="https://i.ibb.co/0MtB00w/IMG-20240522-160832.jpg" alt="Jean Dupont - jean.dupont@university.edu" onclick="openModal(this.src, this.alt)">
        <h3>Sanogo Kassoum</h3>
        <span>Sanogo.Kassoum.Etu@univ-lemans.fr</span>
        <p>Responsable Notices et Co-responsable Développement Site Web. </p>
    </div>
    <div class="member">
        <img src="https://i.ibb.co/0jBVKXk/IMG-20240522-160759.jpg" alt="Jean Dupont - jean.dupont@university.edu" onclick="openModal(this.src, this.alt)">
        <h3>Youssef Ermadi</h3>
        <span>Youssef.Ermadi.Etu@univ-lemans.fr</span>
        <p>Developpeur - site web / Notices. </p>
    </div>
    <div class="member">
        <img src="https://i.ibb.co/ngjbgZT/IMG-20240522-161733.jpg" alt="Jean Dupont - jean.dupont@university.edu" onclick="openModal(this.src, this.alt)">
        <h3>Iheb Ben Jemaa</h3>
        <span>Iheb.Ben_Jemaa.Etu@univ-lemans.fr</span>
        <p>Responsable Développement Site Web, Responsable Gestion de Projet / Notices. </p>
    </div>
    <div class="member">
        <img src="https://i.ibb.co/w73MWN0/IMG-20240522-160845.jpg" alt="Jean Dupont - jean.dupont@university.edu" onclick="openModal(this.src, this.alt)">
        <h3>Aya Barbare</h3>
        <span>Aya.Barbare.Etu@univ-lemans.fr</span>
        <p>Developpeur - site web / Notices. </p>
    </div>
    <div class="member">
        <img src="https://i.ibb.co/HDBf4yc/horloge.png" alt="Jean Dupont - jean.dupont@university.edu" onclick="openModal(this.src, this.alt)">
        <h3>Antoine Riaublanc</h3>
        <span>Antoine.Riaublanc.Etu@univ-lemans.fr</span>
        <p>Developpeur - site web / Notices. </p>
    </div>
    <div class="member">
        <img src="https://i.ibb.co/HDBf4yc/horloge.png" alt="Jean Dupont - jean.dupont@university.edu" onclick="openModal(this.src, this.alt)">
        <h3>Antoine Beaugas</h3>
        <span>Antoine.Beaugas.Etu@univ-lemans.fr</span>
        <p>Responsable équipe Electronique / PCB </p>
    </div>
    <div class="member">
        <img src="https://i.ibb.co/HDBf4yc/horloge.png" alt="Jean Dupont - jean.dupont@university.edu" onclick="openModal(this.src, this.alt)">
        <h3>Emmanuel Koblan</h3>
        <span>Emmanuel.Koblan.Etu@univ-lemans.fr</span>
        <p>Concepteur PCB</p>
    </div>
    <div class="member">
        <img src="https://i.ibb.co/HDBf4yc/horloge.png" alt="Jean Dupont - jean.dupont@university.edu" onclick="openModal(this.src, this.alt)">
        <h3>Baptise Foucras</h3>
        <span>Foucras.Baptise.Etu@univ-lemans.fr</span>
        <p>Developpeur - Bouton Rotatif </p>
    </div>
    <div class="member">
        <img src="https://i.ibb.co/HDBf4yc/horloge.png" alt="Jean Dupont - jean.dupont@university.edu" onclick="openModal(this.src, this.alt)">
        <h3>Alexis Roudin</h3>
        <span>Alexis.Roudin.Etu@univ-lemans.fr</span>
        <p>Developpeur - Bouton Rotatif. </p>
    </div>
    <div class="member">
        <img src="https://i.ibb.co/HDBf4yc/horloge.png" alt="Jean Dupont - jean.dupont@university.edu" onclick="openModal(this.src, this.alt)">
        <h3>Cottineau Estiban</h3>
        <span>Estiban.Cottineau.Etu@univ-lemans.fr</span>
        <p>Responsable CAO / Responsable Gestion de projet / Fixation Cote - Assemblage Final - Ajustement sur les pièces.</p>
    </div>
    <div class="member">
        <img src="https://i.ibb.co/HDBf4yc/horloge.png" alt="Jean Dupont - jean.dupont@university.edu" onclick="openModal(this.src, this.alt)">
        <h3>Djouma Aubin</h3>
        <span>Gauthier.Djouma.Etu@univ-lemans.fr</span>
        <p>Concepteur  CAO - Face Arrière / Avant / boutton de réglage </p>
    </div>
    <div class="member">
        <img src="https://i.ibb.co/HDBf4yc/horloge.png" alt="Jean Dupont - jean.dupont@university.edu" onclick="openModal(this.src, this.alt)">
            <h3>Killian Picot</h3>
        <span>Killian.picot.Etu@univ-lemans.fr</span>
        <p>Responsable Code / CAO / Developpeur code horloge, affichage et interface .</p>
    </div>
    <div class="member">
        <img src="https://i.ibb.co/HDBf4yc/horloge.png" alt="Jean Dupont - jean.dupont@university.edu" onclick="openModal(this.src, this.alt)">
        <h3>Lamere Yvan-Laurent</h3>
        <span>Yvan.Njimagbamboue_Lamere.Etu@univ-lemans.fr</span>
        <p>CAO / PLA / face de coté , button face dessus (fixation) / Aide Assemblage .</p>
    </div>
    <!-- Répétez et modifiez le contenu pour les autres membres -->
    <!-- Assurez-vous d'avoir des images de profil appropriées et des descriptions pour chaque membre -->
</div>

<div id="myModal" class="modal">
    <span class="close" onclick="closeModal()">&times;</span>
    <img class="modal-content" id="img01">
    <div id="caption"></div>
</div>

<footer>
    <p>&copy; 2024 Notre Société. Tous droits réservés.</p>
</footer>

<script>
    function openModal(src, alt) {
        var modal = document.getElementById("myModal");
        var modalImg = document.getElementById("img01");
        var captionText = document.getElementById("caption");
        modal.style.display = "block";
        modalImg.src = src;
        captionText.innerHTML = alt;  // Use the alt attribute as caption text
    }

    function closeModal() {
        var modal = document.getElementById("myModal");
        modal.style.display = "none";
    }
</script>
</body>
</html>
