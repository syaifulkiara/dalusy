
<div class="row">
    <div class="col-md-4" style="border: solid 2px #989898; border-radius: 10px 10px 10px 10px; padding: 10px">
        <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="card-img">
    </div>
    <div class="col-md-8">
        <div class="card-body" style="border: solid 2px #989898; border-radius: 10px 10px 10px 10px; padding: 10px">
            <h2><i class="fa fa-user fa-fw"></i><b><?= $user['nama_user']; ?></b></h3>
                <hr>
                <form method="post" action="<?php echo base_url('profile/edit') ?>" enctype="multipart/form-data" />
                    <div class="form-group row">
                        <label for="nama_user" class="col-sm-2 col-form-label">Full name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama_user" name="nama_user" value="<?= $user['nama_user']; ?>">
                            <?= form_error('nama_user', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="email" name="email" value="<?= $user['email']; ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="username" class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="username" name="username" value="<?= $user['username']; ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Picture</label>
                        <div class="col-sm-10">
                            <div class="row">
                                <div class="col-sm-3">
                                    <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="img-thumbnail">
                                </div>
                                <div class="col-sm-9">
                                    <div class="custom-file">
                                        <input type="file" name="image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row justify-content-end">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-paper-plane"></i> Ubah</button>
                            <a href="<?php echo base_url('profile') ?>" class="btn btn-default btn-sm"><i class="fa fa-undo"></i> Kembali</a>
                        </div>
                    </div>
                </form>
            </div>
            <!-- /.row -->
        </div>
    </div>
