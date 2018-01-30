<!DOCTYPE html>
 <?php 
   $repInclude = './include/';
  require($repInclude . "_init.inc.php");
  if ( ! estVisiteurConnecte() ) 
  {
        header("Location: cSeConnecter.php");  
  }                    
        if(estVisiteurConnecte()) {
              $idUser = obtenirIdUserConnecte();
              $lgUser = obtenirDetailVisiteur($idConnexion, $idUser);
              $nom = $lgUser['nomcli'];
              $prenom = $lgUser['prenomcli'];
        }
   ?>		
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="css/catalogue.css" />

		<title>Nos Produits</title>

		<link rel="icon" type="image/ico" href="images/mafavicon.ico" />

    </head>
    
<body>
        <div id="bloc_page">
            <header>
                <div id="titre_principal">
                    <img src="images/game.png" alt="Logo" id="logo" />
                    <h1>GamesResearch</h1>
                    <h2>Site de recherche de jeux.</h2>
                </div>
                <div style="position:relative;left:400px;height:120px">
   <div style="position:absolute;z-index:1">
      <img src="images/cadreuser.png">
   </div>  <div style="position:absolute;top:20px; width:150px; height:50px; z-index:2">
      <center>                <h2><font color="#BD8D46">Bonjour,</font></h2>
                    <h2 style="font-weight:bold;margin-top:-20px;margin-bottom:10px;font-family:Comic Sans MS, cursive, sans-serif"><font color="blue"><?php 
                    echo $nom . " " . $prenom ;
                    ?></font></h2></center>
    </div> 
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
			
            <div id="banniere_image"> <! ajouter images dans css>
                <div id="banniere_description"> Jeux en promotion jusqu'a -50% !
                    <a href="catalogue.php" class="bouton_rouge">Voir les catalogues <img src="images/flecheblanchedroite.png" alt="" /></a>
                </div>
            </div>
            
            <section>
                <article>
					<table class="catalogue" cellspacing="0">
						<th class="catalogue" colspan="4">Nos produits</th>
							<tr>
								<td class="catalogue"><a href="http://www.jeuxvideo.com/jeux/pc/00044673-crash-time-5-undercover.htm"><img src="images/crashtime.png"/></a><!Image!></td>
								<td class="catalogue"><b class="catalogue">Crash Time 5</b><!NomDuProduit!></td>
								<td class="catalogue"><span style="color:red;text-decoration:line-through;">
													  <span style="color:black;">13€78</span>
													  </span> 
												  <b>&nbsp;9€64</b><img src="images/30%.png"/><!Prix!></td>
                                                                                                  <td class="catalogue"><form action="panier.php"><input class="nbprod" type="number" value="1" min="1" max="999" ></br><input type="submit" value="Ajouter au panier"></form></td>
							</tr>
							<tr>
								<td class="catalogue"><a href="http://www.jeuxvideo.com/jeux/pc/00021510-section-8.htm"><img src="images/section8.png"/></a><!Image!></td>
								<td class="catalogue"><b class="catalogue">Section 8</b><!NomDuProduit!></td>
								<td class="catalogue"><b class="catalogue">5€48</b><!Prix!></td>
								<td class="catalogue"><form action="panier.php"><input class="nbprod" type="number" value="1" min="1" max="999" ></br><input type="submit" value="Ajouter au panier"></form></td>
							</tr>
							<tr>
								<td class="catalogue"><a href="http://www.jeuxvideo.com/jeux/playstation-4-ps4/00052268-doom.htm"><img src="images/doom.png"/></a><!Image!></td>
								<td class="catalogue"><b class="catalogue">Doom</b><!NomDuProduit!></td>
								<td class="catalogue"><span style="color:red;text-decoration:line-through;">
													  <span style="color:black;">47€88</span>
													  </span> 
													  <b>&nbsp;33€51</b><img src="images/30%.png"/><!Prix!></td>
								<td class="catalogue"><form action="panier.php"><input class="nbprod" type="number" value="1" min="1" max="999" ></br><input type="submit" value="Ajouter au panier"></form></td>
							</tr>
							<tr>
								<td class="catalogue"><a href="http://www.jeuxvideo.com/jeux/jeu-416484/"><img src="images/bo3.png"/></a><!Image!></td>
								<td class="catalogue"><b class="catalogue">Call Of Duty : Black Ops 3</b><!NomDuProduit!></td>
								<td class="catalogue"><span style="color:red;text-decoration:line-through;">
													  <span style="color:black;">55€40</span>
													  </span> 
													  <b>&nbsp;27€70</b><img src="images/50%.png"/><!Prix!></td>
								<td class="catalogue"><form action="panier.php"><input class="nbprod" type="number" value="1" min="1" max="999" ></br><input type="submit" value="Ajouter au panier"></form></td>
							</tr>
							<tr>
								<td class="catalogue"><a href="http://www.jeuxvideo.com/jeux/pc/00044922-lego-le-seigneur-des-anneaux.htm"><img src="images/lego.png"/></a><!Image!></td>
								<td class="catalogue"><b class="catalogue">Lego:Le seigneur des anneaux</b><!NomDuProduit!></td>
								<td class="catalogue"><b class="catalogue">5€98</b><!Prix!></td>
								<td class="catalogue"><form action="panier.php"><input class="nbprod" type="number" value="1" min="1" max="999" ></br><input type="submit" value="Ajouter au panier"></form></td>
							</tr>
					</table>
					<a href=""><img src="images/pagesuivante.png" align="right"  class="pagesuivante"/></a>
                </article>
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
		</div>
    </body>
    
<style>
    .nbprod{
        width:38px;
    }
</style>
  
</html>