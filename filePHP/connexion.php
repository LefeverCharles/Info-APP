<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="styles.css" />
        <title>Beyond Sight</title>
        <link rel="icon" href="images/favicon.ico" />
    </head>

    <body>
    	<!-- Menu Bar -->
    	<!--<div><img src="images/menu_icon.png" class = "icon_menu"></div>-->
    	<nav class = "menu_bar">
    		<div class = "left">
                <a href="accueil.html">
                    <div><img src="images/logo_blanc_sans_fleche.png" class = "chrono"></div>
                    <div><img src="images/logo_blanc_fleche2.png" class = "fleche"></div>
                </a>
			</div>
			<div class = "center">
                <div><a href="accueil.html">Accueil</a></div>
                <div><a href="forum.html">Forum</a></div>
                <div><a href="FAQ.html">FAQ</a></div>
                <div><a href="contact.html">Contact</a></div>
                
            </div>
			<div class = "right">
				<div><a href="connexion.html" class="active">Connexion</a></div>
				<div><a href="inscription.html" >Inscription</a></div>
			</div>
            <div class = "langues">
                <span>Fr</span>
                <div class = "not_choosen_language">
                    <ul>
                        <li><a href="">English</a></li>
                        <li><a href="">Chinese</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        
        <!-- Bouton Search-->
        <div class = "search-box">
            <input class="search-txt" type="text" name="" placeholder="Rechercher un utilisateur...">
            <a class="search-btn" href="#">
                <div><img src="images/loupe.png" class="loupe"></div>
            </a>
        </div>


        <div id="bgConnexion">
            <div id="titleConnexion">
                <h2 id= "h2Connexion">Connexion<h2/>
            </div>
        </div>

        <div class="frameConnexion">
            <form action="">
                <label for="e_mail">Adresse-Email</label>
                <input type="text" class="champConnexion" id="e_mail" name="Adresse-Email" placeholder="Adresse-Email...">
                <label for="Mot_de_Passe">Mot De Passe</label>
                <input type="password" name="MotDePasse" id="Mot_de_Passe" class="champConnexion" placeholder="Mot De Passe">
                <input type="submit" value="Connexion" onclick="window.open('Resultat.html')">
            </form>
        </div>





    </body>
</html>