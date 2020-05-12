    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row justify-content-md-center">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <!-- form start -->              
              <form class="form-horizontal" action="<?= base_url('user/save'); ?>" method="post">
                <div class="card-body">
                  <div class="form-group row">
                    <div class="col-md-6">
                      <label>Employee ID</label>
                      <input name="id" type="" class="form-control" id="" required>
                    </div>
                    <div class="col-md-6">
                      <label>Nama</label>
                      <input name="nama" type="" class="form-control" id="" placeholder="" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-md-6">
                      <label>Telp</label>
                      <input name="telp" type="" class="form-control" id="" placeholder="" required>
                    </div>
                    <div class="col-md-6">
                      <label>Jabatan</label>
                      <input name="jabatan" type="" class="form-control" id="" placeholder="" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-md-6">
                      <label>Cabang</label>
                      <select name="cabang" class="form-control select2" style="width: 100%;" required>
                        <option>Head Office</option>
                        <option>Mall Kota Kasablanka</option>
                        <option>Mall Pejaten Village</option>
                        <option>Lippo Mall Puri/option>
                        <option>Gandaria City</option>
                        <option>Mall Kelapa Gading</option>
                        <option>Pluit Village</option>
                      </select>
                    </div>
                    <div class="col-md-6">
                      <label>Level</label>
                      <input name="level" type="" class="form-control" id="" placeholder="" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-md-6">
                      <label>Tanggal Lahir</label>
                      <input name="tgl_lahir" type="date" class="form-control" id="" placeholder="">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-md-6">
                      <label>Password</label>
                      <input name="password" type="password" class="form-control" id="password" placeholder="" required>
                    </div>
                    <div class="col-md-6">
                      <label>Confirm Password</label>
                      <input name="password_confirm" type="password" class="form-control" id="password_confirm" placeholder="" required>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info"><b>Tambah User</b></button>
                  <a href="<?= base_url('user'); ?>" id="cancel" name="cancel" class="btn btn-default float-right"><b>Cancel</b></a>
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

<script type="text/javascript">
  window.onload = function () {
    var txtPassword = document.getElementById("password");
    var txtConfirmPassword = document.getElementById("password_confirm");
      txtPassword.onchange = ConfirmPassword;
      txtConfirmPassword.onkeyup = ConfirmPassword;
        function ConfirmPassword() {
          txtConfirmPassword.setCustomValidity("");
          if (txtPassword.value != txtConfirmPassword.value) {
              txtConfirmPassword.setCustomValidity("Password tidak sama.");
            }
        }
    }
</script>