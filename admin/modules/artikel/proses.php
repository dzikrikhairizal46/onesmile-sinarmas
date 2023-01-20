<?php
session_start();

// Panggil koneksi database.php untuk koneksi database
require_once "../../config/database.php";

// fungsi untuk pengecekan status login user 
// jika user belum login, alihkan ke halaman login dan tampilkan pesan = 1
if (empty($_SESSION['username']) && empty($_SESSION['password'])){
    echo "<meta http-equiv='refresh' content='0; url=index.php?alert=1'>";
}
// jika user sudah login, maka jalankan perintah untuk insert, update, dan delete
else {
    if ($_GET['act']=='insert') {
        if (isset($_POST['simpan'])) {
            // ambil data hasil submit dari form
            $id_artikel  = mysqli_real_escape_string($mysqli, trim($_POST['id_artikel']));
            $tgl_artikel  = mysqli_real_escape_string($mysqli, trim($_POST['tgl_artikel']));
            $judul  = mysqli_real_escape_string($mysqli, trim($_POST['judul']));
            $isi  = mysqli_real_escape_string($mysqli, trim($_POST['isi']));
            $foto = $_FILES['foto']['name'];
            $tmp = $_FILES['foto']['tmp_name'];

            $sub_judul1  = mysqli_real_escape_string($mysqli, trim($_POST['sub_judul1']));
            $sub_deskripsi1  = mysqli_real_escape_string($mysqli, trim($_POST['sub_deskripsi1']));
            $sub_foto1 = $_FILES['sub_foto1']['name'];
            $tmp1 = $_FILES['sub_foto1']['tmp_name'];

            $sub_judul2  = mysqli_real_escape_string($mysqli, trim($_POST['sub_judul2']));
            $sub_deskripsi2  = mysqli_real_escape_string($mysqli, trim($_POST['sub_deskripsi2']));
            $sub_foto2 = $_FILES['sub_foto2']['name'];
            $tmp2 = $_FILES['sub_foto2']['tmp_name'];


            $sub_judul3  = mysqli_real_escape_string($mysqli, trim($_POST['sub_judul3']));
            $sub_deskripsi3  = mysqli_real_escape_string($mysqli, trim($_POST['sub_deskripsi3']));
            $sub_foto3 = $_FILES['sub_foto3']['name'];
            $tmp3 = $_FILES['sub_foto3']['tmp_name'];


            $sub_judul4  = mysqli_real_escape_string($mysqli, trim($_POST['sub_judul4']));
            $sub_deskripsi4  = mysqli_real_escape_string($mysqli, trim($_POST['sub_deskripsi4']));
            $sub_foto4 = $_FILES['sub_foto4']['name'];
            $tmp4 = $_FILES['sub_foto4']['tmp_name'];


            $sub_judul5  = mysqli_real_escape_string($mysqli, trim($_POST['sub_judul5']));
            $sub_deskripsi5  = mysqli_real_escape_string($mysqli, trim($_POST['sub_deskripsi5']));
            $sub_foto5 = $_FILES['sub_foto5']['name'];
            $tmp5 = $_FILES['sub_foto5']['tmp_name'];

            $sub_judul6  = mysqli_real_escape_string($mysqli, trim($_POST['sub_judul6']));
            $sub_deskripsi6  = mysqli_real_escape_string($mysqli, trim($_POST['sub_deskripsi6']));
            $sub_foto6 = $_FILES['sub_foto6']['name'];
            $tmp6 = $_FILES['sub_foto6']['tmp_name'];

  
            // Rename nama filenya dengan menambahkan tanggal dan jam upload
            $fotobaru = date('d-m-Y-H-is-').$foto;
            $fotobaru1 = date('d-m-Y-H-is-').$sub_foto1;
            $fotobaru2 = date('d-m-Y-H-is-').$sub_foto2;
            $fotobaru3 = date('d-m-Y-H-is-').$sub_foto3;
            $fotobaru4 = date('d-m-Y-H-is-').$sub_foto4;
            $fotobaru5 = date('d-m-Y-H-is-').$sub_foto5;
            $fotobaru6 = date('d-m-Y-H-is-').$sub_foto6;

            // Set path folder tempat menyimpan filenya
            $path = "../../images/".$fotobaru;
            $path1 = "../../images/sub-artikel/".$fotobaru1;
            $path2 = "../../images/sub-artikel/".$fotobaru2;
            $path3 = "../../images/sub-artikel/".$fotobaru3;
            $path4 = "../../images/sub-artikel/".$fotobaru4;
            $path5 = "../../images/sub-artikel/".$fotobaru5;
            $path6 = "../../images/sub-artikel/".$fotobaru6;

            move_uploaded_file($tmp1, $path1);
            move_uploaded_file($tmp2, $path2);
            move_uploaded_file($tmp3, $path3);
            move_uploaded_file($tmp4, $path4);
            move_uploaded_file($tmp5, $path5);
            move_uploaded_file($tmp6, $path6);
            
            //$created_user = $_SESSION['id_user'];
            if(move_uploaded_file($tmp, $path)){

            
            //$created_user = $_SESSION['id_user'];

            // perintah query untuk menyimpan data ke tabel obat
            //print_r($query);
            $query = mysqli_query($mysqli, "INSERT INTO artikel(id_artikel,tgl_artikel,judul,isi,foto,
                                                        sub_judul1,sub_deskripsi1,sub_foto1,
                                                        sub_judul2,sub_deskripsi2,sub_foto2,
                                                        sub_judul3,sub_deskripsi3,sub_foto3,
                                                        sub_judul4,sub_deskripsi4,sub_foto4,
                                                        sub_judul5,sub_deskripsi5,sub_foto5,
                                                        sub_judul6,sub_deskripsi6,sub_foto6)
                VALUES ('$id_artikel','$tgl_artikel','$judul','$isi','$fotobaru',
                '$sub_judul1','$sub_deskripsi1','$fotobaru1',
                '$sub_judul2','$sub_deskripsi2','$fotobaru2',
                '$sub_judul3','$sub_deskripsi3','$fotobaru3',
                '$sub_judul4','$sub_deskripsi4','$fotobaru4',
                '$sub_judul5','$sub_deskripsi5','$fotobaru5',
                '$sub_judul6','$sub_deskripsi6','$fotobaru6')")
                or die('Ada kesalahan pada query insert : '.mysqli_error($mysqli));    

            // cek query

            if ($query) {
                // jika berhasil tampilkan pesan berhasil simpan data
                header("location: ../../main.php?module=artikel&alert=1");
                }
            }   
        }   
    }
    
    elseif ($_GET['act']=='update') {
        if (isset($_POST['simpan'])) {
            if (isset($_POST['id_artikel'])) {
                // ambil data hasil submit dari form
            $id_artikel  = mysqli_real_escape_string($mysqli, trim($_POST['id_artikel']));
            $tgl_artikel  = mysqli_real_escape_string($mysqli, trim($_POST['tgl_artikel']));
            $judul  = mysqli_real_escape_string($mysqli, trim($_POST['judul']));
            $isi  = mysqli_real_escape_string($mysqli, trim($_POST['isi']));
            $foto = $_FILES['foto']['name'];
            $tmp = $_FILES['foto']['tmp_name'];

            $sub_judul1  = mysqli_real_escape_string($mysqli, trim($_POST['sub_judul1']));
            $sub_deskripsi1  = mysqli_real_escape_string($mysqli, trim($_POST['sub_deskripsi1']));
            $sub_foto1 = $_FILES['sub_foto1']['name'];
            $tmp1 = $_FILES['sub_foto1']['tmp_name'];
            

            $sub_judul2  = mysqli_real_escape_string($mysqli, trim($_POST['sub_judul2']));
            $sub_deskripsi2  = mysqli_real_escape_string($mysqli, trim($_POST['sub_deskripsi2']));
            $sub_foto2 = $_FILES['sub_foto2']['name'];
            $tmp2 = $_FILES['sub_foto2']['tmp_name'];
            


            $sub_judul3  = mysqli_real_escape_string($mysqli, trim($_POST['sub_judul3']));
            $sub_deskripsi3  = mysqli_real_escape_string($mysqli, trim($_POST['sub_deskripsi3']));
            $sub_foto3 = $_FILES['sub_foto3']['name'];
            $tmp3 = $_FILES['sub_foto3']['tmp_name'];
            


            $sub_judul4  = mysqli_real_escape_string($mysqli, trim($_POST['sub_judul4']));
            $sub_deskripsi4  = mysqli_real_escape_string($mysqli, trim($_POST['sub_deskripsi4']));
            $sub_foto4 = $_FILES['sub_foto4']['name'];
            $tmp4 = $_FILES['sub_foto4']['tmp_name'];
            

            $sub_judul5  = mysqli_real_escape_string($mysqli, trim($_POST['sub_judul5']));
            $sub_deskripsi5  = mysqli_real_escape_string($mysqli, trim($_POST['sub_deskripsi5']));
            $sub_foto5 = $_FILES['sub_foto5']['name'];
            $tmp5 = $_FILES['sub_foto5']['tmp_name'];


            $sub_judul6  = mysqli_real_escape_string($mysqli, trim($_POST['sub_judul6']));
            $sub_deskripsi6  = mysqli_real_escape_string($mysqli, trim($_POST['sub_deskripsi6']));
            $sub_foto6 = $_FILES['sub_foto6']['name'];
            $tmp6 = $_FILES['sub_foto6']['tmp_name'];
            
  
            // Rename nama filenya dengan menambahkan tanggal dan jam upload
            $fotobaru = date('d-m-Y-H-is-').$foto;
            $fotobaru1 = date('d-m-Y-H-is-').$sub_foto1;
            $fotobaru2 = date('d-m-Y-H-is-').$sub_foto2;
            $fotobaru3 = date('d-m-Y-H-is-').$sub_foto3;
            $fotobaru4 = date('d-m-Y-H-is-').$sub_foto4;
            $fotobaru5 = date('d-m-Y-H-is-').$sub_foto5;
            $fotobaru6 = date('d-m-Y-H-is-').$sub_foto6;

            // Set path folder tempat menyimpan filenya
            $path = "../../images/".$fotobaru;
            $path1 = "../../images/sub-artikel/".$fotobaru1;
            $path2 = "../../images/sub-artikel/".$fotobaru2;
            $path3 = "../../images/sub-artikel/".$fotobaru3;
            $path4 = "../../images/sub-artikel/".$fotobaru4;
            $path5 = "../../images/sub-artikel/".$fotobaru5;
            $path6 = "../../images/sub-artikel/".$fotobaru6;

            move_uploaded_file($tmp1, $path1);
            move_uploaded_file($tmp2, $path2);
            move_uploaded_file($tmp3, $path3);
            move_uploaded_file($tmp4, $path4);
            move_uploaded_file($tmp5, $path5);
            move_uploaded_file($tmp6, $path6);

            //$file_name = $_FILES['gambar']['name'][$i];
			//$tmp_name = $_FILES['gambar']['tmp_name'][$i];				
			//move_uploaded_file($tmp_name, "img/".$file_name);

            //$created_user = $_SESSION['id_user'];
            if(move_uploaded_file($tmp, $path)){
                
                //$updated_user = $_SESSION['id_user'];

                // perintah query untuk mengubah data pada tabel 
                $query = mysqli_query($mysqli, "UPDATE artikel SET  id_artikel      = '$id_artikel',
                                                                    tgl_artikel     = '$tgl_artikel',
                                                                    judul           = '$judul',
                                                                    isi             = '$isi',
                                                                    foto            = '$fotobaru',
                                                                    sub_judul1      = '$sub_judul1',
                                                                    sub_deskripsi1  = '$sub_deskripsi1',
                                                                    sub_foto1       = '$fotobaru1',
                                                                    sub_judul2      = '$sub_judul2',
                                                                    sub_deskripsi2  = '$sub_deskripsi2',
                                                                    sub_foto2       = '$fotobaru2',
                                                                    sub_judul3      = '$sub_judul3',
                                                                    sub_deskripsi3  = '$sub_deskripsi3',
                                                                    sub_foto3       = '$fotobaru3',
                                                                    sub_judul4      = '$sub_judul4',
                                                                    sub_deskripsi4  = '$sub_deskripsi4',
                                                                    sub_foto4       = '$fotobaru4',
                                                                    sub_judul5      = '$sub_judul5',
                                                                    sub_deskripsi5  = '$sub_deskripsi5',
                                                                    sub_foto5       = '$fotobaru5',
                                                                    sub_judul6      = '$sub_judul6',
                                                                    sub_deskripsi6  = '$sub_deskripsi6',
                                                                    sub_foto6       = '$fotobaru6'
                                                                    
                                                              WHERE id_artikel       = '$id_artikel'")
                                            or die('Ada kesalahan pada query update : '.mysqli_error($mysqli));

                // cek query
                if ($query) {
                    // jika berhasil tampilkan pesan berhasil update data
                    header("location: ../../main.php?module=artikel&alert=2");
                    }
                }         
            }
        }
    }

    elseif ($_GET['act']=='delete') {
        if (isset($_GET['id'])) {
            $id_artikel = $_GET['id'];
    
            // perintah query untuk menghapus data pada tabel obat
            $query = mysqli_query($mysqli, "DELETE FROM artikel WHERE id_artikel='$id_artikel'")
                                            or die('Ada kesalahan pada query delete : '.mysqli_error($mysqli));

            // cek hasil query
            if ($query) {
                // jika berhasil tampilkan pesan berhasil delete data
                header("location: ../../main.php?module=artikel&alert=3");
            }
        }
    }       
}       
?>