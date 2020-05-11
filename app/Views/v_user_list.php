    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title"></h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>EmployeID</th>
                  <th>Nama</th>
                  <th>Telp</th>
                  <th>Jabatan</th>
                  <th>Cabang</th>
                  <th>Tgl masuk</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php $no=1; foreach ($user as $key => $value) { ?>
                <tr>
                  <td><?= $no++; ?></td>
                  <td><?= $value['id']; ?></td>
                  <td><?= $value['nama']; ?></td>
                  <td><?= $value['telp']; ?></td>
                  <td><?= $value['jabatan']; ?></td>
                  <td><?= $value['cabang']; ?></td>
                  <td><?= $value['tgl masuk']; ?></td>
                  <td>
                    <a href="" class="btn btn-warning">edit</a>
                    <a href="" class="btn btn-danger">hapus</a>
                  </td>
                </tr>
                <?php } ?>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->