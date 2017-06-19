<?php require 'views/header.php'; ?>
<div class="header_container">
  <div class="menu-toggle">
     <div class="hamburger"></div>
   </div>
   <nav class="site-top-nav">
     <ul class="top-menu">
       <li><a href="#">Contacter l’assistance technique</a></li>
       <li><a href="#">Aide / FAQ</a></li>
     </ul>
   </nav>
   <div class="mysideNav" >
 			<h1><span>SPINN</span><span>UP</span></h1>
 			<nav class="vertical_nav">
 				<ul class="menu">
 					<li><a href=""><i class="fa fa-file-text-o" style="font-size:24px"></i>Vue d'ensemble</a></li>
 					<li><a href=""><i class="fa fa-line-chart" style="font-size:24px"></i>Activités et stats</a></li>
 					<li><a href=""><img src="images/pie-chart.png" alt="notes">Mes projets</a></li>
 					<li><a href=""><i class="material-icons" style="font-size:24px">person_outline</i>Profil d'artiste</a></li>
 					<li><a href=""><img src="images/music.png" alt="notes">Les Pros</a></li>
 					<li><a href=""><img src="images/discount.png" alt="notes">Offres Partenariats</a></li>
 					<li><a href=""><img src="images/news-actualization-day-on-reminder-calendar-page.png" alt="notes">Actualités</a></li>
 					<li><a href="">+ Nouveau Projets</a></li>
 					<li><a href=""><img src="images/settings.png" alt="notes">Parametres</a></li>
 					<li><a href=""><img src="images/logout-sign-with-leftwards-arrow.png" alt="notes">Deconnexion</a></li>
 				</ul>
 			</nav>
 		</div>
</div>
<div class="main_content">
  <div class="content">
    <ul class="content_wrapper">
      <li>
        <div class="project">
          <span>Statut de vos projets</span>
            <hr>
              <div class="project_status">
                <span></span>
                <span></span>
                <span></span>
              </div>
              <div class="top_bar_status">
                <span>2</span>
                <span>Projets incomplets</span>
                <span><a href="#">Visualiser tout</a></span>
              </div>
              <div class="status_content_wrapper">
                <div class="status_image">
                  <img src="images/no-image-small(1).jpg" alt="Stat">
                </div>
                <div class="status_infos">
                  <span> Untitle</span>
                    <p>Ce projet n'a pas été complété. Cliquez sur Continuer pour le terminer et le distribuer sur les plateformes.</p>
                    <a href="#">Continuer</a>
                </div>
              </div>
              <div class="projet_encour">
                <span>0</span>
                <span>Projets en cours de distribution</span>
                <span><a href="#">Visualiser Tout</a></span>
              </div>
              <hr>
              <div class="projet_disponible">
                <span>0</span>
                <span>Projets disponibles sur les plateformes digitales</span>
                <span><a href="#">Visualiser Tout</a></span>
              </div>
              <hr>
              <div class="vos_projets">
                <a href="#">Visualiser Mes projets</a>
              </div>
          </div>
      </li>
      <li>
        <div class="start_info">
          <span>Commencer</span>
          <p>Une fois votre musique distribuée sur les plateformes,
            vous pouvez l'envoyer à un professionnel pour attirer son
            attention. Lisez le profil de nos pros pour savoir à qui votre musique
            est susceptible de correspondre le mieux. Ils écouteront votre musique et, en retour, vous laisseront parfois des commentaires ou enverront votre musique aux responsables artistiques de nos labels partenaires.</p>
            <div class="start_link_info_plus">
              <a href="#">
                  <span><i class="fa fa-check-square" style="font-size:24px;color:green"></i></span>
                  <span>Ouvrer un compte spinnup</span>
                  <span>Effectué</span>
                </span>
              </a>
              <a href="#">
                <span><i class="fa fa-chevron-circle-right" style="font-size:24px;color:red"></i></span>
                <span>Connectez vos réseau sociaux</span>
                <span>Non effecteé</span>
              </a>
              <a href="#">
                <span><i class="fa fa-chevron-circle-right" style="font-size:24px;color:red"></i></span>
                <span>Creer votre premier single,EP ou album</span>
                <span>Non effectué</span>
              </a>
              <a href="#">
                <span><i class="fa fa-chevron-circle-right" style="font-size:24px;color:red"></i></span>
                <span>Completer votre profil d'artiste</span>
                <span>Non effectué</span>
              </a>
            </div>
        </div>
      </li>
      <li>
        <div class="section_pro">
            <span>Nos pros sont impatients d'écouter votre musique</span>
            <div class="pro_thumbnail">
              <img src="images/pros_images/362b07bd5b6cc1ae3ce58042f11b2735.jpeg" alt="">
              <img src="images/pros_images/1dc88f5da539ac694bbc2a46b8681230.jpeg" alt="">
              <img src="images/pros_images/182856c551dc34c1adabb62809f945ad.jpeg" alt="">
              <img src="images/pros_images/0ee85fb3f1ff90fa81bb80f1f451b0e3.jpeg" alt="">
              <img src="images/pros_images/e72865ded29a8f503bc34bf2f6489fd3.jpg" alt="">
            </div>
            <div class="pro_infos">
              <p>Une fois votre musique distribuée sur les plateformes,
                 vous pouvez la mettre en avant auprès d'un professionnel
                 pour attirer son attention. Lisez le profil de nos pros pour
                 savoir à qui votre musique est susceptible de correspondre
                  le mieux. Ils écouteront votre musique et, en retour,
                   vous laisseront parfois des commentaires ou enverront
                   votre musique aux responsables artistiques de nos labels
                   partenaires.</p>
            </div>
            <div class="pro_infos_link">
              <a href="#">Voir les profils de nos pros</a>
            </div>
      </div>
      </li>
      <li>
        <div class="spotify_chart">
          <span>Surveillez les écoutes de vos morceaux sur Spotify au jour le jour</span>
          <div class="link_for_statistique">
            <div class="chart_canvas">
              <canvas id="myChart" height="350px" width="510"></canvas>
            </div>
            <a href="#">
              <span>Visualisez vos statistiques</span>
            </a>
          </div>
        </div>
      </li>
      <li></li>
      <li></li>
    </ul>
  </div>
</div>
<?php require 'views/footer.php'; ?>
