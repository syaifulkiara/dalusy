
<div class="row">
    <div class="col-md-4" style="border: solid 2px #989898; border-radius: 10px 10px 10px 10px; padding: 10px">
        <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="card-img">
    </div>
    <div class="col-md-8">
        <div class="card-body" style="border: solid 2px #989898; border-radius: 10px 10px 10px 10px; padding: 10px">
            <div class="float-right">
                <a href="<?php echo base_url('profile/ubahpassword') ?>" class="btn btn-danger btn-sm"><i class="fa fa-key"></i> Ubah Password</a>

                <a href="<?php echo base_url('profile/edit') ?>" class="btn btn-warning btn-sm"><i class="fa fa-pen"></i> Edit Profile</a>
            </div>
            <h2><i class="fa fa-user fa-fw"></i><b><?= $user['nama_user']; ?></b></h3>
                <p><small class="text-muted">Username: <b><?php echo $user['username']; ?></b><br>
                    Akses Level: <b><?php echo $user['akses_level']; ?></b><br>
                    Member since <b><?php echo date('d-M-Y',strtotime($user['tanggal_update'])) ; ?></b></small></p>

                    <strong><i class="fas fa-book mr-1"></i> Email</strong>

                    <p class="text-muted">
                        <?= $user['email']; ?>
                    </p>
                    <strong><i class="fas fa-map-marker-alt mr-1"></i> Alamat</strong>

                    <p class="text-muted">Malibu, California</p>

                    <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>

                    <p class="text-muted">
                        <span class="tag tag-danger">UI Design</span>
                        <span class="tag tag-success">Coding</span>
                        <span class="tag tag-info">Javascript</span>
                        <span class="tag tag-warning">PHP</span>
                        <span class="tag tag-primary">Node.js</span>
                    </p>

                    <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card-body">
                            <div class="info-box bg-info">
                                <span class="info-box-icon"><i class="far fa-folder"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Data Tersimpan</span>
                                    <span class="info-box-number"><?php echo $this->fungsi->count_ovt_id()?></span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <div class="col-md-4">
                        <div class="card-body">
                            <div class="info-box bg-success">
                                <span class="info-box-icon"><i class="far fa-thumbs-up"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Likes</span>
                                    <span class="info-box-number">41,410</span>
                                </div>
                                <!-- /.info-box -->
                            </div>
                            <!-- /.col -->
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-body">
                            <div class="info-box bg-warning">
                                <span class="info-box-icon"><i class="far fa-calendar-alt"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Events</span>
                                    <span class="info-box-number"><?php echo $this->fungsi->count_ovt_id()?></span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                    </div>
                </div>
                </div>
                <!-- /.row -->
            </div>
        </div>





