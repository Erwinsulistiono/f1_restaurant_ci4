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
                  <td><?= $value['tgl_masuk']; ?></td>
                  <td>
                    <a href="<?= base_url('user/edit/'.$value['id']); ?>" class="btn btn-warning">edit</a>
                    <a href="<?= base_url('user/delete/'.$value['id']); ?>" class="btn btn-danger" onClick="return confirm('Hapus Data ?')">hapus</a>
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