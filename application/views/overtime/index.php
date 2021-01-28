 <?php
  // open form
 echo form_open(base_url('overtime'),' class="form-horizontal"');
 ?>
<p>
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-default">
<img src="<?php echo base_url('assets/img/add.png')?>" width="25px" class="img-responsive"> Tambah Data

</button>
<a href="<?php echo base_url('overtime/cetak/') ?>" target="_blank" class="float-right btn btn-default"><i class="fa fa-print"></i> Cetak
</a>
</p>


<?php 
  // Panggil form tambah
  include('tambah.php');
  // closed form
  echo form_close();
 ?>
 
   <table class="table table-bordered table-striped table-sm" id="example1">
       <thead>
          <tr>
            <th width="5%" rowspan="2"><center>NO</center></th>
            <th width="11%" rowspan="2"><center>Day/Date</center></th>
            <th colspan="2"><center>Time</center></th>
            <th rowspan="2"><center>OT</center></th>
            <th width="5%" rowspan="2"><center>Project NO</center></th>
            <th colspan="5"></th>
          </tr>
          <tr>
            <th>Start</th>
            <th>Finish</th>
            <th width="25%">Activity</th>
            <th>Location</th>
            <th>Check</th>
            <th>Date</th>
            <th width="10%">Action</th>
          </tr>
        </thead>
      <tbody>
      <?php foreach ($overtime as $key => $ovt) { ?>

    <tr>
      <td><?php echo $key+1; ?></td>
      <td><?php echo date('l, d-m-Y',strtotime($ovt->day_date)); ?></td>
      <td><?php echo $ovt->start; ?></td>
      <td><?php echo $ovt->finish; ?></td>
      <td><?php echo $ovt->ovt; ?></td>
      <td><?php echo $ovt->project_no; ?></td>
      <td><?php echo $ovt->activity; ?></td>
      <td><?php echo $ovt->location; ?></td>
      <td><?php echo $ovt->cek; ?></td>
      <td><?php echo $ovt->date; ?></td>
      <td>
        <div class="btn-group">
          <a href="<?php echo base_url('overtime/cetak/'.$ovt->id_user) ?>"><i class="fa fa-print"></i></a>
          <a href="<?php echo base_url('overtime/edit/'.$ovt->id_overtime) ?>" ><i class="fa fa-edit"></i></a> &nbsp;  
          <a href="<?php echo base_url('overtime/delete/'.$ovt->id_overtime) ?>" onclick="return confirm('Yakin ingin menghapus data ini?')"><i class="fa fa-trash"></i>
          </a>
        </div>  
      </td>
    </tr>

      <?php } ?>
      </tbody>
    </table>

