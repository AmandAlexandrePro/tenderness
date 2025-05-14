<div id="changelog">
    <h1 id="changelog-title">1.0.0</h1>
    <h3 id="changelog-added">Ajouté :</h3>
    <div id="changelog-added-body">
        <ul>
            <li>Ajout de plusieurs fichiers / dossiers :
                <h3>/</h3>
                <ul>
                    <li>
                        <a href="./.gitignore">.gitignore</a>
                    </li>
                </ul>
                <h3>/routes</h3>
                <ul>
                    <li>
                        <a href="./database">database</a>
                    </li>
                    <li>
                        <a href="./add_panier.php">add_panier.php</a>
                    </li>
                    <li>
                        <a href="./panier.js">panier.js</a>
                    </li>
                    <li>
                        <a href="./panier.php">panier.php</a>
                    </li>
                    <li>
                        <a href="./remove_panier.php">remove_panier.php</a>
                    </li>
                </ul>
            </li>
            <li>
                <h3>/README.md</h3>
                <li>Ajout de la catégorie <code>Initialisation de la base de données</code></li>
            </li>
            <li>
                <h3>/index.php</h3>
                <ul>
                    <li>Ajout de l'exécution de la fonction <code>session_start</code> permettant de commencer automatiquement la session</li>
                    <li>Ajout de la navigation vers le panier dans la barre de navigation</li>
                    <li>Ajout d'un script JavaScript permettant la redirection PHP (<code>unable to modify headers after session_start()</code>)</li>
                </ul>
            </li>
            <li>
                <h3>/routes/realiste.php & /routes/viva-pinata.php</h3>
                <li>Ajout de l'implémentation de l'ajout de produits au panier</li>
            </li>
        </ul>
    </div>
    <h3 id="changelog-changed">Changé :</h3>
    <div id="changelog-changed-body">
        <ul>
            <h3>/routes/realiste.php & /routes/viva-pinata.php</h3>
            <li>Remplacement des produits statiques par la récupération des produits associés aux pages avec une connexion à une base de données</li>
        </ul>
    </div>
    <h3 id="changelog-removed">Supprimé :</h3>
    <div id="changelog-removed-body">
        <ul>
            <h3>/routes/index.php</h3>
            <li>Suppression de la modification du style (<code>CSS</code>) de la balise <code>input</code></li>
        </ul>
    </div>
    <h3 id="changelog-fixed">Fixé :</h3>
    <div id="changelog-fixed-body">
        <ul>
            <h3>/index.php</h3>
            <li>Modification de la variable <code>$pathname</code> pour récupérer le chemin de l'URL complète de la requête</li>
            <h3>/routes/index.php</h3>
            <li>Ajout de la classe <code>z-40</code> dans la barre de navigation, côté mobile, afin que celle-ci soit superposé aux éléments des pages.</li>
        </ul>
    </div>
    <h1 id="changelog-old">Pour consulter les modifications antérieures, veuillez vous référer aux <a id="changelog-old-link" href="https://github.com/AmandAlexandrePro/tenderness/releases">versions GitHub</a>.</h1>
</div>