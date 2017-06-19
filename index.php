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
   <div class="mysideNav" class="sidenav">
 			<h1>SPINN<span>UP</span></h1>
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
            <hr></hr>
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
                  <img src="images/no-image-small (1).jpg" alt="Stat">
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
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
    </ul>
  </div>
</div>
<?php require 'views/footer.php'; ?>
