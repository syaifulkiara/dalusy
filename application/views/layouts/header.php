<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>APLIKASI | DASHBOARD</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?php echo base_url('assets') ?>/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assets') ?>/dist/css/adminlte.min.css">
   <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url('assets') ?>/plugins/daterangepicker/daterangepicker.css">
  
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url('assets') ?>/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url('assets') ?>/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url('assets') ?>/plugins/jquery-ui/jquery-ui.min.css">
  <script type="text/javascript">
    window.onload = function() {jam();}
    function jam(){
      var a = document.getElementById('jam'),
      d = new Date(), h, m, s;
      h = d.getHours();
      m = set(d.getMinutes());
      s = set(d.getSeconds());

      a.innerHTML = h + ":" + m + ":" + s;

      setTimeout('jam()', 1000);
    }

    function set(a) {
      a = a < 10 ? '0' + a : a;
      return a;
    }
  </script>
</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">