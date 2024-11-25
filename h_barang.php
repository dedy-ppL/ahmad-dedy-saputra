<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Barang</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Barang</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
    <div class="card">
              <div class="card-header">
              <h3 class="card-title"></h3>
                <br>
                <a class="btn mt-2" style="background-color:#17a2b8; color:#ffffff" href="CreateBarang.php"><i class="fa fa-plus nav-icon mr-2"></i>Tambah Barang</a>
                <h3 class="card-title"></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <?php 
              require_once 'controllers/class_barang.php';
              // ciptakan object dari class Produk
              $obj = new Barang($dbh);
              // panggil method tampilkan data produk
              $rs = $obj->dataBarang();
              ?>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Barang</th>
                    <th>Harga Beli</th>
                    <th>Stok</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
                    $no = 1;
                    foreach($rs as $pro){
                ?>
                  <tr>
                  <td><?= $no; ?></td>
                    <td><?= $pro->nama; ?></td>
                    <td><?= $pro->stok; ?></td>
                    <td><?= $pro->harga_beli; ?></td>
                    <td>
                    <form action="controllers/ControllerBarang.php" method="POST">
                        <a class="btn btn-success" href="#"><i class="fa fa-eye"></i></a>
                        <a class="btn btn-warning" href="#"><i class="fa fa-edit"></i></a>
                        <button name="submit" value="hapus" onclick="return confirm('Anda Yakin Data Dihapus?')" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                        <input type="hidden" name="idx" value="#" />
                      </form>
                    </td>
                  </tr>
                  <?php
                  $no++;
                  }
                ?>
                  </tbody>
                  
                  
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->