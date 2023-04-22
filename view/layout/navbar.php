<!--Navbar-->
<nav id="navbar" class="navbar navbar-expand-xl p-0 z-depth-2 fixed-top">

  <!-- Navbar brand -->
  <a id="navbarBrand" class="navbar-brand px-5 d-flex flex-center" href="<?php echo site_url() .'/index.php'; ?>" data-toggle="tooltip" data-placement="right" title="Pagina principală">
      <img src="<?php echo site_img() . '/icon.png'; ?>" alt="Liverpool" id="iconI"><span class="ml-2">LFC Romania</span>
  </a>

  <!-- Collapse button -->
  <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Collapsible content -->
  <div class="collapse navbar-collapse" id="navbarCollapse">

    <!-- Container -->
    <div class="container">
      <!-- Links -->
      <ul class="navbar-nav mr-auto">

        <!-- News-->
        <li class="nav-item py-2 px-3">
          <a class="nav-link" href="<?php echo site_url() . '/view/news.php'; ?>">Noutăți
          </a>
        </li>
        <!-- News-->

        <!-- Team -->
        <li class="nav-item dropdown py-2 px-3">
          <a class="nav-link dropdown-toggle" id="team" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">Echpă</a>
          <div class="dropdown-menu" aria-labelledby="team">
            <a class="dropdown-item" href="<?php echo site_url() . '/view/team.php'; ?>">Lot</a>
             <a class="dropdown-item" href="<?php echo site_url() . '/view/transfer.php'; ?>">Transferuri</a>
          </div>
        </li>
        <!-- Team -->

        <!-- Fixtures -->
        <li class="nav-item dropdown py-2 px-3">
          <a class="nav-link dropdown-toggle" id="fixtures" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">Program Competițional</a>
          <div class="dropdown-menu" aria-labelledby="fixtures">
            <a class="dropdown-item" href="<?php echo site_url() . '/view/calendar.php'; ?>">Calendar</a>
             <a class="dropdown-item" href="<?php echo site_url() . '/view/clasament.php'; ?>">Clasament</a>
          </div>
        </li>
        <!-- Fixtures -->        

      <!-- Club -->
      <li class="nav-item dropdown py-2 px-3 mr-auto">
        <a class="nav-link dropdown-toggle" id="ucl" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">Club</a>
        <div class="dropdown-menu dropdown-primary" aria-labelledby="ucl">
          <a class="dropdown-item" href="<?php echo site_url() . '/view/ucl2005.php'; ?>">Champions League 2004-2005</a>
           <a class="dropdown-item" href="<?php echo site_url() . '/view/ucl2019.php'; ?>">Champions League 2018-2019</a>
        </div>
      </li>
       <!-- Club -->

       <!-- Administrare -->
      <li id="admin" class="nav-item dropdown py-2 px-3">
        <a class="nav-link dropdown-toggle" id="adminDropdown" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false"><i class="fas fa-cog mr-2"></i>Administrare</a>
        <div class="dropdown-menu" aria-labelledby="adminDropdown">
          <a class="dropdown-item" href="<?php echo site_url() . '/view/AdminNews.php'; ?>"><i class="fas fa-newspaper mr-2"></i>Noutăți</a>
          <a class="dropdown-item" href="<?php echo site_url() . '/view/AdminTeam.php'; ?>"><i class="fas fa-futbol mr-2"></i>Lot</a>
          <a class="dropdown-item" href="<?php echo site_url() . '/view/AdminTransfer.php'; ?>"><i class="fas fa-exchange-alt mr-2"></i>Transferuri</a>
          <a class="dropdown-item" href="<?php echo site_url() . '/view/AdminCalendar.php'; ?>"><i class="fas fa-calendar-alt mr-2"></i>Calendar</a>
          <a class="dropdown-item" href="<?php echo site_url() . '/view/AdminClasament.php'; ?>"><i class="fas fa-align-justify mr-2"></i>Clasament</a>
        </div>
      </li>
       <!-- Administrare -->

       <!-- Cont -->
       <li id="cont" class="nav-item dropdown py-2 px-3">
         <a class="nav-link dropdown-toggle" id="contDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user mr-2"></i>Cont</a>
         <div class="dropdown-menu" aria-labelledby="contDropdown">
           <a class="dropdown-item" href="<?php echo site_url() . '/view/contNou.php'; ?>"><i class="fas fa-user-plus mr-2"></i>Înregistrare</a>
           <a class="dropdown-item" href="<?php echo site_url() . '/view/contExistent.php'; ?>" ><i class="fas fa-user-check mr-2"></i>Logare</a>
         </div>
       </li>
       <!-- Cont -->

       <!-- Dates Cont -->
       <li id="user" class="nav-item dropdown py-2 px-3">
        <a class="nav-link dropdown-toggle" id="authDropdowns" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user-circle mr-2"></i><?php echo $classUserAuth->callFunction('getAuthName'); ?></a>
         <div class="dropdown-menu" aria-labelledby="authDropdowns">
             <a class="dropdown-item" href="<?php echo site_url() . '/view/myAccount.php'; ?>"><i class="fas fa-user mr-2"></i>Profilul meu</a>
             <a class="dropdown-item" href="<?php echo site_url() . '/logout.php'; ?>" ><i class="fas fa-power-off mr-2"></i>Deconectare</a>
         </div>
       </li>
       <!-- Dates Cont -->

      </ul>
      <!-- Links -->
    </div>
    <!-- Container -->
  </div>
  <!-- Collapsible content -->

</nav>
<!--/.Navbar-->
