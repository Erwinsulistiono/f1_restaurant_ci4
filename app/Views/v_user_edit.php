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
              <form class="form-horizontal" action="<?= base_url('user/update/'.$user['id']); ?>" method="post">
                <div class="card-body">
                  <div class="form-group row">
                    <div class="col-sm-6">
                      <label>EmployeeID</label>
                      <input name="id" value="<?= $user['id'] ?>" type="" class="form-control" id="" required>
                    </div>
                    <div class="col-sm-6">
                      <label>Nama</label>
                      <input name="nama" value="<?= $user['nama'] ?>" type="" class="form-control" id="" placeholder="" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-6">
                      <label>Telp</label>
                      <input name="telp" value="<?= $user['telp'] ?>" type="" class="form-control" id="" placeholder="" required>
                    </div>
                    <div class="col-sm-6">
                      <label>Jabatan</label>
                      <input name="jabatan" value="<?= $user['jabatan'] ?>" type="" class="form-control" id="" placeholder="" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-6">
                      <label>Cabang</label>
                      <select name="cabang" value="<?= $user['cabang'] ?>" class="form-control select2" style="width: 100%;" required>
                        <option>Head Office</option>
                        <option>Mall Kota Kasablanka</option>
                        <option>Mall Pejaten Village</option>
                        <option>Lippo Mall Puri/option>
                        <option>Gandaria City</option>
                        <option>Mall Kelapa Gading</option>
                        <option>Pluit Village</option>
                      </select>
                    </div>
                    <div class="col-sm-6">
                      <label>Level</label>
                      <input name="level" value="<?= $user['level'] ?>" type="" class="form-control" id="" placeholder="" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-6">
                      <label>Tanggal Lahir</label>
                      <input name="tgl_lahir" value="<?= $user['tgl_lahir'] ?>" type="date" class="form-control" id="" placeholder="">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-6">
                      <label>Password</label>
                      <input name="password" type="password" class="form-control" id="password" placeholder="">
                    </div>
                    <div class="col-sm-6">
                      <label>Confirm Password</label>
                      <input name="password_confirm" type="password" class="form-control" id="password_confirm" placeholder="">
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Update User</button>
                  <a href="<?= base_url('user'); ?>" id="cancel" name="cancel" class="btn btn-default float-right">Cancel</a>
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