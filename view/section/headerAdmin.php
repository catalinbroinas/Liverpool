<!-- Jumbotron -->
<div id="headerAdmin" class="jumbotron text-center m-0">

  <!-- Title -->
  <div class="card-title display-4 font-weight-bold mb-5"><i class="fas <?php echo $icon . " "; ?> mr-3"></i>Administrare <?php echo $title; ?></div>

  <!-- Grid row -->
  <div class="row d-flex justify-content-center">

    <!-- Grid column -->
    <div class="col-xl-7">

      

      <!-- Button -->
      <a href="<?php echo site_url() . '/view/' . $linkInsert; ?>">
        <button class="btnGigant gradientColor-11 mb-0 waves-effect">Insert</button>
      </a>
      <!-- Button -->

       <!-- Button -->
      <a href="<?php echo site_url() . '/view/' . $linkEdit; ?>">
        <button class="btnGigant gradientColor-11 mb-0 waves-effect">Edit</button>
      </a>
      <!-- Button -->

       <!-- Button -->
      <a href="<?php echo site_url() . '/view/' . $linkPage; ?>">
        <button class="btnGigant gradientColor-11 mb-0 waves-effect"><?php echo $title; ?></button>
      </a>
      <!-- Button -->

    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->

</div>
<!-- Jumbotron -->
