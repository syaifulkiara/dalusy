<div class="modal fade" id="modal-default">
  <div class="modal-dialog modal-lg">
    <div class="modal-content" style="border: solid 2px #989898; border-radius: 10px 10px 10px 10px; padding: 10px">
      <div class="modal-header">
       <h3 class="modal-title" id="exampleModalLabel" style="color: firebrick; font-family: Impact"><img src="<?php echo base_url('assets/img/work.png')?>" width="40px" class="img-responsive" />   Tambah Data Overtime</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         
          <div class="form-group">
             <label for="day_date">Day / Date</label>
             <input type="text" name="day_date" class="form-control tanggal" value="<?php echo set_value('day_date') ?>" placeholder="dd-mm-yyyy" required >
          </div>
        
          <div class="row">
            <div class="col-sm-6">
              <!-- text input -->
              <div class="form-group">
                <label>Start</label>
                <input type="text" name="start" class="form-control" value="<?php echo set_value('start') ?>" placeholder="00:00">
                <small>Misal: <?php echo date('H:i') ?></small>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label>Finish</label>
                <input type="text" name="finish" class="form-control" value="<?php echo set_value('finish') ?>" placeholder="00:00" required>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
              <!-- textarea -->
              <div class="form-group">
                <label>Activity</label>
                <textarea class="form-control" name="activity" rows="3" value="<?php echo set_value('activity') ?>" placeholder="Enter ..." required></textarea>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label>Location</label>
                <textarea class="form-control" name="location" rows="3" value="<?php echo set_value('location') ?>" placeholder="Enter ..." required></textarea>
              </div>
            </div>
          </div>
         
        </div>


         <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">
            <i class="fa fa-times"></i> Tutup
          </button>
          <button type="submit" name="submit" class="btn btn-success btn-sm">
            <i class="fa fa-save"></i> Simpan Data
          </button>
        </div>

    
    </div>
  </div>
</div>