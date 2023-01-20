
 <?php  
// fungsi untuk pengecekan tampilan form
// jika form add data yang dipilih
if ($_GET['form']=='add') { ?> 
  <!-- tampilan form add data -->
	<!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <i class="fa fa-edit icon-title"></i> Input Artikel
    </h1>
    <ol class="breadcrumb">
      <li><a href="?module=beranda"><i class="fa fa-home"></i> Beranda </a></li>
      <li><a href="?module=artikel"> artikel </a></li>
      <li class="active"> Tambah </li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <!-- form start -->
          <form role="form" class="form-horizontal" action="modules/artikel/proses.php?act=insert" method="POST" enctype="multipart/form-data">
            <div class="box-body">
              <?php  
              // fungsi untuk membuat id transaksi
              $query_id = mysqli_query($mysqli, "SELECT RIGHT(id_artikel,6) as kode FROM artikel
                                                ORDER BY id_artikel DESC LIMIT 1")
                                                or die('Ada kesalahan pada query tampil id_artikel : '.mysqli_error($mysqli));

              $count = mysqli_num_rows($query_id);

              if ($count <> 0) {
                  // mengambil data kode_artikel
                  $data_id = mysqli_fetch_assoc($query_id);
                  $kode    = $data_id['kode']+1;
              } else {
                  $kode = 1;
              }

              // buat kode_artikel
              $buat_id   = str_pad($kode, 6, "0", STR_PAD_LEFT);
              $id_artikel = "ARTKL-$buat_id";
              
              ?>

              <div class="form-group">
                <label class="col-sm-2 control-label">ID Artikel</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="id_artikel" value="<?php echo $id_artikel; ?>" readonly required>
                </div>
              </div>

               <div class="form-group">
                <label class="col-sm-2 control-label">Tanggal Dibuat Artikel</label>
                <div class="col-sm-5">
                  <input type="date" class="form-control" name="tgl_artikel" value="<?php echo date('Y-m-d'); ?>" readonly required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Judul artikel</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="judul" autocomplete="off" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Isi artikel</label>
                <div class="col-sm-5">
                  <textarea type="text" rows="4" class="form-control" name="isi" autocomplete="off" required></textarea> 
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">foto Artikel</label>
                <div class="col-sm-5">
                  <input type="file" name="foto">
                  <br/>
               
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Sub Judul-1</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="sub_judul1" autocomplete="off" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Sub Deskripsi-1</label>
                <div class="col-sm-5">
                  <textarea type="text" rows="4" class="form-control" name="sub_deskripsi1" autocomplete="off" required></textarea> 
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">foto Artikel-1</label>
                <div class="col-sm-5">
                  <input type="file" name="sub_foto1">
                  <br/>
               
                </div>
              </div>
              <hr>
              <div class="form-group">
                <label class="col-sm-2 control-label">Sub Judul-2</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="sub_judul2" autocomplete="off" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Sub Deskripsi-2</label>
                <div class="col-sm-5">
                  <textarea type="text" rows="4" class="form-control" name="sub_deskripsi2" autocomplete="off" required></textarea> 
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">foto Artikel-2</label>
                <div class="col-sm-5">
                  <input type="file" name="sub_foto2">
                  <br/>
               
                </div>
              </div>
              <hr>
              <div class="form-group">
                <label class="col-sm-2 control-label">Sub Judul-3</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="sub_judul3" autocomplete="off" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Sub Deskripsi-3</label>
                <div class="col-sm-5">
                  <textarea type="text" rows="4" class="form-control" name="sub_deskripsi3" autocomplete="off" required></textarea> 
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">foto Artikel-3</label>
                <div class="col-sm-5">
                  <input type="file" name="sub_foto3">
                  <br/>
               
                </div>
              </div>
              <hr>
              <div class="form-group">
                <label class="col-sm-2 control-label">Sub Judul-4</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="sub_judul4" autocomplete="off" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Sub Deskripsi-4</label>
                <div class="col-sm-5">
                  <textarea type="text" rows="4" class="form-control" name="sub_deskripsi4" autocomplete="off" required></textarea> 
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">foto Artikel-4</label>
                <div class="col-sm-5">
                  <input type="file" name="sub_foto4">
                  <br/>
               
                </div>
              </div>
              <hr>
              <div class="form-group">
                <label class="col-sm-2 control-label">Sub Judul-5</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="sub_judul5" autocomplete="off" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Sub Deskripsi-5</label>
                <div class="col-sm-5">
                  <textarea type="text" rows="4" class="form-control" name="sub_deskripsi5" autocomplete="off" required></textarea> 
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">foto Artikel-5</label>
                <div class="col-sm-5">
                  <input type="file" name="sub_foto5">
                  <br/>
               
                </div>
              </div>
              <hr>
              <div class="form-group">
                <label class="col-sm-2 control-label">Sub Judul-6</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="sub_judul6" autocomplete="off" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Sub Deskripsi-6</label>
                <div class="col-sm-5">
                  <textarea type="text" rows="4" class="form-control" name="sub_deskripsi6" autocomplete="off" required></textarea> 
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">foto Artikel-6</label>
                <div class="col-sm-5">
                  <input type="file" name="sub_foto6">
                  <br/>
               
                </div>
              </div>

              <div class="col-md-7 pt-4">
                <p style="font-size: 12px; font-style: italic;">*/Jika jumlah berita yg akan di post kurang dari jumlah form berita, isikan saja titik "." pada kolom sub judul dan sub deskripsi, tidak perlu upload file</p>
              </div>


            </div><!-- /.box body -->

            <div class="box-footer">
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <input type="submit" class="btn btn-primary btn-submit" name="simpan" value="Simpan">
                  <a href="?module=artikel" class="btn btn-default btn-reset">Batal</a>
                </div>
              </div>
            </div><!-- /.box footer -->
          </form>
        </div><!-- /.box -->
      </div><!--/.col -->
    </div>   <!-- /.row -->
  </section><!-- /.content -->
<?php
}
// jika form edit data yang dipilih
// isset : cek data ada / tidak
elseif ($_GET['form']=='edit') { 
  if (isset($_GET['id'])) {
      // fungsi query untuk menampilkan data dari tabel artikel
      $query = mysqli_query($mysqli, "SELECT * FROM artikel WHERE id_artikel='$_GET[id]'") 
                                      or die('Ada kesalahan pada query tampil Data artikel : '.mysqli_error($mysqli));
      $data  = mysqli_fetch_assoc($query);
    }
?>
  <!-- tampilan form edit data -->
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <i class="fa fa-edit icon-title"></i> Ubah artikel
    </h1>
    <ol class="breadcrumb">
      <li><a href="?module=beranda"><i class="fa fa-home"></i> Beranda </a></li>
      <li><a href="?module=artikel"> artikel </a></li>
      <li class="active"> Ubah </li>
    </ol>
  </section>

  <!-- Main content -->

  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <!-- form start -->
          <form role="form" class="form-horizontal" action="modules/artikel/proses.php?act=update" method="POST" enctype="multipart/form-data">
            <div class="box-body">
             
              <div class="form-group">
                <label class="col-sm-2 control-label">ID artikel</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="id_artikel" value="<?php echo $data['id_artikel']; ?>" readonly required >
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Tanggal Dibuat Artikel</label>
                <div class="col-sm-5">
                  <input type="date" class="form-control" name="tgl_artikel" value="<?php echo date('Y-m-d'); ?>" readonly required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Judul artikel</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="judul" autocomplete="off" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Isi artikel</label>
                <div class="col-sm-5">
                  <textarea type="text" rows="4" class="form-control" name="isi" autocomplete="off" required></textarea> 
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Foto Artikel</label>
                <div class="col-sm-5">
                  <input type="file" name="foto">
                  <br/>
               
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Sub Judul-1</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="sub_judul1" autocomplete="off" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Sub Deskripsi-1</label>
                <div class="col-sm-5">
                  <textarea type="text" rows="4" class="form-control" name="sub_deskripsi1" autocomplete="off" required></textarea> 
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">foto Artikel-1</label>
                <div class="col-sm-5">
                  <input type="file" name="sub_foto1">
                  <br/>
               
                </div>
              </div>
              <hr>
              <div class="form-group">
                <label class="col-sm-2 control-label">Sub Judul-2</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="sub_judul2" autocomplete="off" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Sub Deskripsi-2</label>
                <div class="col-sm-5">
                  <textarea type="text" rows="4" class="form-control" name="sub_deskripsi2" autocomplete="off" required></textarea> 
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">foto Artikel-2</label>
                <div class="col-sm-5">
                  <input type="file" name="sub_foto2">
                  <br/>
               
                </div>
              </div>
              <hr>
              <div class="form-group">
                <label class="col-sm-2 control-label">Sub Judul-3</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="sub_judul3" autocomplete="off" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Sub Deskripsi-3</label>
                <div class="col-sm-5">
                  <textarea type="text" rows="4" class="form-control" name="sub_deskripsi3" autocomplete="off" required></textarea> 
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">foto Artikel-3</label>
                <div class="col-sm-5">
                  <input type="file" name="sub_foto3">
                  <br/>
               
                </div>
              </div>
              <hr>
              <div class="form-group">
                <label class="col-sm-2 control-label">Sub Judul-4</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="sub_judul4" autocomplete="off" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Sub Deskripsi-4</label>
                <div class="col-sm-5">
                  <textarea type="text" rows="4" class="form-control" name="sub_deskripsi4" autocomplete="off" required></textarea> 
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">foto Artikel-4</label>
                <div class="col-sm-5">
                  <input type="file" name="sub_foto4">
                  <br/>
               
                </div>
              </div>
              <hr>
              <div class="form-group">
                <label class="col-sm-2 control-label">Sub Judul-5</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="sub_judul5" autocomplete="off" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Sub Deskripsi-5</label>
                <div class="col-sm-5">
                  <textarea type="text" rows="4" class="form-control" name="sub_deskripsi5" autocomplete="off" required></textarea> 
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">foto Artikel-5</label>
                <div class="col-sm-5">
                  <input type="file" name="sub_foto5">
                  <br/>
               
                </div>
              </div>
              <hr>
              <div class="form-group">
                <label class="col-sm-2 control-label">Sub Judul-6</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="sub_judul6" autocomplete="off" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Sub Deskripsi-6</label>
                <div class="col-sm-5">
                  <textarea type="text" rows="4" class="form-control" name="sub_deskripsi6" autocomplete="off" required></textarea> 
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">foto Artikel-6</label>
                <div class="col-sm-5">
                  <input type="file" name="sub_foto6">
                  <br/>
               
                </div>
              </div>

              <div class="col-md-7 pt-4">
                <p style="font-size: 12px; font-style: italic;">*/Jika jumlah berita yg akan di post kurang dari jumlah form berita, isikan saja titik "." pada kolom sub judul dan sub deskripsi, tidak perlu upload file</p>
              </div>

            </div><!-- /.box body -->

            <div class="box-footer">
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <input type="submit" class="btn btn-primary btn-submit" name="simpan" value="Simpan">
                  <a href="?module=artikel" class="btn btn-default btn-reset">Batal</a>
                </div>
              </div>
            </div><!-- /.box footer -->
          </form>
        </div><!-- /.box -->
      </div><!--/.col -->
    </div>   <!-- /.row -->
  </section><!-- /.content -->
<?php
}
?>