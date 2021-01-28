<?php 
echo form_open(base_url('overtime/edit/'.$overtime->id_overtime));
?>
<div class="card" style="border: solid 2px #989898; border-radius: 10px 10px 10px 10px; padding: 10px">
   <h3 class="modal-title" id="exampleModalLabel" style="color: firebrick; font-family: Impact"><img src="<?php echo base_url('assets/img/work.png')?>" width="40px" class="img-responsive" />   Edit Data Overtime</h3>
  <hr>
<div class="card-header border-0">
<div class="form-group">
  <label>Day / Date</label>
  <input type="text" name="day_date" class="form-control tanggal" value="<?php echo date('d-m-Y', strtotime($overtime->day_date)) ?>" placeholder="dd-mm-yyyy" required>
</div>

<div class="row">
  <div class="col-sm-6">
    <!-- text input -->
    <div class="form-group">
      <label>Start</label>
      <input type="text" name="start" class="form-control" value="<?php echo $overtime->start ?>" placeholder="00:00">
    </div>
  </div>
  <div class="col-sm-6">
    <div class="form-group">
      <label>Finish</label>
      <input type="text" name="finish" class="form-control" value="<?php echo $overtime->finish ?>" placeholder="00:00" required>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-sm-6">
    <!-- textarea -->
    <div class="form-group">
      <label>Activity</label>
      <textarea class="form-control" name="activity" rows="3" value="" placeholder="Enter ..." required><?php echo $overtime->activity ?></textarea>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="form-group">
      <label>Location</label>
      <textarea class="form-control" name="location" rows="3" value="" placeholder="Enter ..." required><?php echo $overtime->location ?></textarea>
    </div>
  </div>
</div>

</div>


<div class="modal-footer justify-content-between">
<div>
   <a href="<?php echo base_url('overtime') ?>" ><i class="fa fa-undo"></i> Kembali</a>
</div>
  <button type="submit" name="submit" class="btn btn-success btn-sm">
    <i class="fa fa-save"></i> Simpan Data
  </button>
</div>
</div>

<?php 
echo form_close();
?>