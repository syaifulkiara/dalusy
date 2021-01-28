<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo $title?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/print.css')?>" media="screen">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/print.css')?>" media="print">
</head>
<body onload="print()">
	<div class="cetak">
		<h1>CETAK DATA</h1>
		 <table class="table table-bordered table-striped table-sm" id="example1">
    <thead>
     <tr style="background-color: #009688; color: #fff; border-color: #328d39;">
       
        <th>DAY/DATE</th>
        <th width="5%">START</th>
        <th width="5%">FINISH</th>
        <th width="30%">ACTIVITY</th>
        <th width="10%">LOCATION</th>
        <th width="5%">CHECK</th>
      </tr>
      </thead>
      <tbody>
      

    <tr>
      
      <td><?php echo date('l, d-m-Y',strtotime($overtime->day_date)); ?></td>
      <td><?php echo $overtime->start; ?></td>
      <td><?php echo $overtime->finish; ?></td>
      <td><?php echo $overtime->activity; ?></td>
      <td><?php echo $overtime->location; ?></td>     
    </tr>

     
      </tbody>
    </table>
	</div>
</body>
</html>