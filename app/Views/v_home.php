<?php
if (!empty(session()->getFlashdata('msg'))) { ?>
    <div class="alert alert-success alert-dismissible fade show">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
      <?= session()->getFlashdata('msg'); ?>
    </div>
<?php } ?>

   
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <h1>this is body</h1>
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->