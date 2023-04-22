<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title><?php echo $pageTitle; ?></title>
  <!-- Icon -->
  <link rel="icon" type="image/png" href="<?php echo site_url() . '/img/icon.png'; ?>">
  <!-- Font Awesome -->
  <link href="<?php echo site_url() . '/fontAwsome/css/all.css'; ?>" rel="stylesheet"> 
  <!-- Bootstrap core CSS -->
  <link href="<?php echo site_url() . '/css/bootstrap/bootstrap.min.css';?>" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="<?php echo site_url() . '/css/bootstrap/mdb.min.css'; ?>" rel="stylesheet">
  <!-- Date Picker -->
  <link rel="stylesheet" type="text/css" href="<?php echo site_url() . '/css/bootstrap-datepicker.css'; ?>">
  <!-- Swall alert -->
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'></link>  
  <!-- Your custom styles (optional) -->
  <link href="<?php echo site_url() . '/css/styles.css'; ?>" rel="stylesheet">
</head>
<script>
  let status = "<?php echo $classUserAuth->callFunction('authNavbar', $role); ?>";
</script>
<body onload="navbarDisplayByAuth(status);">
