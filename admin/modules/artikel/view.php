
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    <i class="fa fa-folder-o icon-title"></i> Data Artikel

    <a class="btn btn-primary btn-social pull-right" href="?module=form_artikel&form=add" title="Tambah Data" data-toggle="tooltip">
      <i class="fa fa-plus"></i> Tambah
    </a>
  </h1>

</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-12">

    <?php  
    // fungsi untuk menampilkan pesan
    // jika alert = "" (kosong)
    // tampilkan pesan "" (kosong)
    if (empty($_GET['alert'])) {
      echo "";
    } 
    // jika alert = 1
    // tampilkan pesan Sukses "Data artikel baru berhasil disimpan"
    elseif ($_GET['alert'] == 1) {
      echo "<div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-check-circle'></i> Sukses!</h4>
              Data artikel baru berhasil disimpan.
            </div>";
    }
    // jika alert = 2
    // tampilkan pesan Sukses "Data artikel berhasil diubah"
    elseif ($_GET['alert'] == 2) {
      echo "<div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-check-circle'></i> Sukses!</h4>
              Data artikel berhasil diubah.
            </div>";
    }
    // jika alert = 3
    // tampilkan pesan Sukses "Data artikel berhasil dihapus"
    elseif ($_GET['alert'] == 3) {
      echo "<div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-check-circle'></i> Sukses!</h4>
              Data artikel berhasil dihapus.
            </div>";
    }
    ?>

      <div class="box box-primary">
        <div class="box-body">
          <!-- tampilan tabel artikel -->
          <table id="dataTables1" class="table table-bordered table-striped table-hover">
            <!-- tampilan tabel header -->
            <thead>
              <tr>
                <th class="center">No.</th>
                <th class="center">Kode Artikel</th>
                <th class="center">Tanggal Dibuat Artikel</th>
                <th class="center">Judul Artikel</th>
                <th class="center">Isi Artikel</th>
                <th class="center">Gambar</th>
                <!-- <th class="center">Sub Judul1</th>
                <th class="center">Sub Deskripsi1</th>
                <th class="center">Sub Foto1</th>
                <th class="center">Sub Judul2</th>
                <th class="center">Sub Deskripsi2</th>
                <th class="center">Sub Foto2</th>
                <th class="center">Sub Judul3</th>
                <th class="center">Sub Deskripsi3</th>
                <th class="center">Sub Foto3</th>
                <th class="center">Sub Judul4</th>
                <th class="center">Sub Deskripsi4</th>
                <th class="center">Sub Foto4</th>
                <th class="center">Sub Judul5</th>
                <th class="center">Sub Deskripsi5</th>
                <th class="center">Sub Foto5</th> -->

                <th class="center">Action</th>
                
              </tr>
            </thead>
            <!-- tampilan tabel body -->
            <tbody>
            <?php  
            $no = 1;
            
            // fungsi query untuk menampilkan data dari tabel artikel
            $query = mysqli_query($mysqli, "SELECT * FROM artikel ORDER BY id_artikel DESC")
                                            or die('Ada kesalahan pada query tampil Data artikel: '.mysqli_error($mysqli));
            
            // tampilkan data
            while ($data = mysqli_fetch_assoc($query)) { 
            //   $harga_beli = format_rupiah($data['harga_beli']);
            //   $harga_jual = format_rupiah($data['harga_jual']);
              // menampilkan isi tabel dari database ke tabel di aplikasi
              $isi = substr($data['isi'],0,100);
              echo "<tr>
                      <td width='50' class='center'>$no</td>
                      <td width='150' class='center'>$data[id_artikel]</td>
                      <td width='150' class='center'>$data[tgl_artikel]</td>
                      <td width='180'class='center'>$data[judul]</td>
                      <td width='100'class='center'>$isi...</td>
                      <td><center><img src='images/".$data['foto']."' width='100' height='100'></center></td>

                      

                      <td class='center' width='100'>
                        <div>
                          <a data-toggle='tooltip' data-placement='top' title='Ubah' style='margin-right:5px' class='btn btn-primary btn-sm' href='?module=form_artikel&form=edit&id=$data[id_artikel]'>
                              <i style='color:#fff' class='glyphicon glyphicon-edit'></i>
                          </a>";
            ?>
                          <a data-toggle="tooltip" data-placement="top" title="Hapus" class="btn btn-danger btn-sm" href="modules/artikel/proses.php?act=delete&id=<?php echo $data['id_artikel'];?>" onclick="return confirm('Anda yakin ingin menghapus artikel <?php echo $data['nama_artikel']; ?> ?');">
                              <i style="color:#fff" class="glyphicon glyphicon-trash"></i>
                          </a>
            <?php
              echo "    </div>
                      </td>
                    </tr>";
              $no++;
            }
            ?>
            </tbody>
          </table>
        </div><!-- /.box-body -->
      </div><!-- /.box -->
    </div><!--/.col -->
  </div>   <!-- /.row -->
  <!-- <td width='180'class='center'>$data[sub_judul1]</td>
                      <td width='100'class='center'>$data[sub_deskripsi1]</td>
                      <td><center><img src='images/sub-artikel/".$data['sub_foto1']."' width='100' height='100'></center></td>

                      <td width='180'class='center'>$data[sub_judul2]</td>
                      <td width='100'class='center'>$data[sub_deskripsi2]</td>
                      <td><center><img src='images/sub-artikel/".$data['sub_foto2']."' width='100' height='100'></center></td>

                      <td width='180'class='center'>$data[sub_judul3]</td>
                      <td width='100'class='center'>$data[sub_deskripsi3]</td>
                      <td><center><img src='images/sub-artikel/".$data['sub_foto3']."' width='100' height='100'></center></td>
                      
                      <td width='180'class='center'>$data[sub_judul4]</td>
                      <td width='100'class='center'>$data[sub_deskripsi4]</td>
                      <td><center><img src='images/sub-artikel/".$data['sub_foto4']."' width='100' height='100'></center></td>

                      <td width='180'class='center'>$data[sub_judul5]</td>
                      <td width='100'class='center'>$data[sub_deskripsi5]</td>
                      <td><center><img src='images/sub-artikel/".$data['sub_foto5']."' width='100' height='100'></center></td> -->
</section><!-- /.content