<div class="row">
    <div class="col-md-4" style="border: solid 2px #989898; border-radius: 10px 10px 10px 10px; padding: 10px">
        <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="card-img">
    </div>
    <div class="col-md-8">
        <div class="card-body" style="border: solid 2px #989898; border-radius: 10px 10px 10px 10px; padding: 10px">
            <h2><i class="fa fa-user fa-fw"></i><b><?= $user['nama_user']; ?></b></h3>
                <hr>
                <?= $this->session->flashdata('notifpass'); ?>
                <form action="<?= base_url('profile/ubahpassword'); ?>" method="post">
                    <div class="form-group">
                        <label for="current_password"><i class="fa fa-key"></i> Password Lama</label>
                        <input type="password" class="form-control" id="current_password" name="current_password">
                        <?= form_error('current_password', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="new_password1">Password Baru</label>
                        <input type="password" class="form-control" id="new_password1" name="new_password1">
                        <?= form_error('new_password1', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="new_password2">Ulangi Password</label>
                        <input type="password" class="form-control" id="new_password2" name="new_password2">
                        <?= form_error('new_password2', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-key"></i> Change Password</button>
                        <a href="<?php echo base_url('profile') ?>" class="btn btn-default btn-sm"><i class="fa fa-undo"></i> Kembali</a>
                    </div>
                </form>

            </div>
            <!-- /.row -->
        </div>
    </div>
