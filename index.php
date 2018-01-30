<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="css/style.css" />
		<link rel="alternate stylesheet" href="css/style2.css" type="text/css" title="style2"/>
		
		<meta name="keywords" content="Games, jeux, jeux vidéo, VideoGames" />
		<meta name="author" content="AlexandreKUO" />

		<title>GameResearcher</title>

		<link rel="icon" type="image/ico" href="images/mafavicon.ico" />

			<script type="text/javascript">
				function setActiveStyleSheet(title) {
				var i, a;
				for(i=0; (a = document.getElementsByTagName("link")[i]); i++) 
				{
				if(a.getAttribute("rel").indexOf("style") != -1 && a.getAttribute("title")) 
				{
				a.disabled = true;
				if(a.getAttribute("title") == title) a.disabled = false;
				}
				}
			}
			</script>
    </head>
    
<body>

	<a class="js" href="#" onclick="setActiveStyleSheet('style'); return false;">Style par défaut</a>
	<a class="js" href="#" onclick="setActiveStyleSheet('style2'); return false;">&nbsp;&nbsp;&nbsp;Style 2</a> 
		
		<div id="bloc_page">
		
            <header>
                <div id="titre_principal">
                    <img src="images/game.png" alt="Logo" id="logo" />
                    <h1>GamesResearch</h1>
                    <h2>Site de recherche de jeux.</h2>
                </div>

                
                
                <nav>
                    <ul>
                        <li><a href="index.php">&nbsp;Accueil&nbsp;</a></li>
                        <li><a href="News 1.php">&nbsp;News&nbsp;</a></li>
                        <li><a href="catalogue.php">&nbsp;Catalogue&nbsp;</a></li>
                        <li><a href="formulaire.php">&nbsp;Newsletter&nbsp;</a></li>
                    </ul>
                </nav>
            </header>
            
	<section id="slideshow">
		
		<div class="container">
			<div class="c_slider"></div>
			<div class="slider">
				<figure>
					<img src="images/deadisland2.png" alt="" width="640" height="280" />
					<figcaption><p>Sortie du jeu : "Dead Island 2" le 31/12/2016 !</p></figcaption>
				</figure>
				<figure>
					<img src="images/bo3annonce.png" alt="" width="640" height="280" />
					<figcaption><p>*Promotion* -50% sur Call Of Duty : Black Ops 3 jusqu'au 25/12/2016 !</p></figcaption>
				</figure>
				<figure>
					<img src="images/jeuxoccas.png" alt="" width="640" height="280" />
					<figcaption><p>*Promotion* Jusqu'a -50% sur les jeux d'occasions jusqu'au 25/12/2016!</p></figcaption>
				</figure>
			</div>
		</div>
		
		<span id="timeline"></span>
		

	</section>
			
            <div id="banniere_image"> <! ajouter images dans css>
                <div id="banniere_description">
                    Jeux en promotion jusqu'a -50% !
                    <a href="catalogue.php" class="bouton_rouge">Voir les catalogues <img src="images/flecheblanchedroite.png" alt="" /></a>
                </div>
            </div>
            
            <section>
                <article>
                    <h1><img src="images/news.png" alt="Chargement" class="ico_categorie" />Ouverture du site.</h1>
					<p class="p1">Bonjour,</p>
						<br />
                    <p class="p1">Nous vous remercions de votre patience.</p>
						<br />
                    <p class="p1">Nous vous annonçons enfin l'ouverture du site!</p>
						<br />
                    <p class="p1">Vous pouvez maintenant profiter de nos services via internet.</p>
						<br />
					<p class="p1">Bien sûr nous restons à votre disposition dans nos boutiques.</p>
                </article>
                <aside>
                    <h1>A propos de nous.</h1>
                    <img src="images/bulle.png" alt="" id="fleche_bulle" />
                    <p id="skinava"><img src="images/name.png" /></p>
                    <p></p>
					<h1 class="partenaires">Partenaires :</h1>
					<a href><img src="images/facebook.png" alt="Facebook" OnClick="javascript:window.open('https://www.facebook.com')" class="facebook"/></a>
					<a href><img src="images/micromania.png" alt="Micromania" OnClick="javascript:window.open('https://www.micromania.fr')" class="micromania"/></a>
					</br>
					<a href><img src="images/jvd.png" alt="JeuxVideo.com" OnClick="javascript:window.open('https://www.jeuxvideo.com')" class="jvd"/></a>
				</aside>
            </section>
            
            <footer>
                <div id="last_news">
                    <h1>Dernière nouvelle !</h1>
                    <p><a href="News 1.php">News x</a></p>
                    <p><a href="News 2.php">News x-1</a></p>
					<p><a href="News 3.php">News x-2</a></p>
						<br />
					<p><a href="archives.php">Archives des anciennes News</a></p>
                </div>
                <div id="mes_photos">
                    <h1>Nos Photos</h1>
                    <p>&nbsp;<a href="javascript:window.open('','popup','width=1024,height=768,scrollbars=1')"><img src="" width="20" height="20"></a>
					&nbsp;<a href="javascript:window.open('','popup','width=1024,height=768,scrollbars=1')"><img src="" width="20" height="20"></a>
					&nbsp;<a href="javascript:window.open('','popup','width=1024,height=768,scrollbars=1')"><img src="" width="20" height="20"></a>
					&nbsp;<a href="javascript:window.open('','popup','width=1024,height=768,scrollbars=1')"><img src="" width="20" height="20"></a></p>
					<button onclick="javascript:window.open('nos_images.php')">voir plus...</button>
                </div>
                <div id="team">
                    <h1>Nos Boutiques :</h1>
                    <ul>
                        <li><a href="boutique1.php">Boutique1</a></li>
                        <li><a href="boutique2.php">Boutique2</a></li>
                        <li><a href="boutique3.php">Boutique3</a></li>
                        <li><a href="boutique4.php">Boutique4</a></li>
                    </ul>
				<div id="credits">
					<h1>Crédits</h1>
					<ul>
						<li>author:</br><i><b>AlexandreKUO</b></i></li>
						<li>copyright:</br><i><b>© GameResearch co.</b></i></li>
					</ul>
					<a href="mailto:" title="Ne pas abuser,merci!">Contactez-nous !</a>
                </div>
            </footer>
        </div>
    </body>
</html>
	