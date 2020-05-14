<?php
if (!empty(session()->getFlashdata('success'))) { ?>
    <div class="alert alert-success alert-dismissible fade show">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
      <?= session()->getFlashdata('success'); ?>
    </div>
<?php } ?>
    
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row justify-content-md-center">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" action="<?= base_url('parameter/update/'.$pt['pt_cd']); ?>" method="post">
                <div class="card-body">
                  <div class="form-group row">
                    <div class="col-sm-6">
                      <label>Profile ID</label>
                      <input name="pt_cd" value="<?= $pt['pt_cd'] ?>"  class="form-control" id="" required>
                    </div>
                    <div class="col-sm-6">
                      <label>Nama</label>
                      <input name="pt_nm" value="<?= $pt['pt_nm'] ?>"  class="form-control" id="" placeholder="" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-6">
                      <label>Negara</label>
                      <input name="pt_country" value="<?= $pt['pt_country'] ?>"  class="form-control" id="" placeholder="" required>
                    </div>
                    <div class="col-sm-6">
                      <label>NPWP</label>
                      <input name="pt_npwp" value="<?= $pt['pt_npwp'] ?>"  class="form-control" id="" placeholder="" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-6">
                      <label>Alamat</label>
                      <textarea name="pt_addr" class="form-control" required><?=
                      $pt['pt_addr'] ?>
                      </textarea>
                    </div>
                    <div class="col-sm-6">
                      <label>Nama PIC</label>
                      <input name="pt_pic_nm" value="<?= $pt['pt_pic_nm'] ?>"  class="form-control" id="" placeholder="" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-6">
                      <label>No. Telp</label>
                      <input name="pt_pic_telp" value="<?= $pt['pt_pic_telp'] ?>"  class="form-control" id="" placeholder="">
                    </div>                  
                    <div class="col-sm-6">
                      <label>email</label>
                      <input name="pt_email" value="<?= $pt['pt_email'] ?>"  class="form-control" id="" placeholder="">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-6">
                      <label>Website</label>
                      <input name="pt_website" value="<?= $pt['pt_website'] ?>"  class="form-control" id="" placeholder="">
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Update Profile</button>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
            <!-- /.card -->
            <!-- /.card -->
            </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->