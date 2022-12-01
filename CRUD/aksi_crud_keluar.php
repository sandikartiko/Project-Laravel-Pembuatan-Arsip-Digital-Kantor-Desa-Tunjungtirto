<?php
include "../koneksi.php";

// uji tombol simpan
if(isset($_POST['bsimpan'])){
    $namaFile = $_FILES['kfile']['name'];
    $namaSementara = $_FILES['kfile']['tmp_name'];
    
    // tentukan lokasi file akan dipindahkan
    $dirUpload = "../dokumen/";
    
    // pindahkan file
    $terupload = move_uploaded_file($namaSementara, $dirUpload.$namaFile);
    
    if ($terupload) {
        echo "Upload berhasil!<br/>";
        echo "Link: <a href='".$dirUpload.$namaFile."'>".$namaFile."</a>";
    } else {
        echo "Upload Gagal!";
    }

    // simpan data
    $simpan = mysqli_query($kon, "INSERT INTO suratkeluar (No_Berkas, Alamat_Penerima, Tanggal, Keterangan, File_Document)
                                    VALUES ('$_POST[kberkas]',
                                             '$_POST[kalamat]',
                                             '$_POST[ktanggal]',
                                             '$_POST[kketerangan]',
                                             '$namaFile') ");

    //jika sukses
    if($simpan){
        echo "<script>alert('Simpan Data Sukses')
            document.location='../DAFTAR ARSIP/tampilsuratkeluar.php';
            </script>";
    }else{
        echo "<script>alert('Simpan Data Gagal')
        document.location='../DAFTAR ARSIP/tampilsuratkeluar.php';
        </script>";
    }

}
if(isset($_POST['bubah'])){
    $namaFile = $_FILES['kfile']['name'];
    $namaSementara = $_FILES['kfile']['tmp_name'];
    
    // tentukan lokasi file akan dipindahkan
    $dirUpload = "../dokumen/";
    
    // pindahkan file
    $terupload = move_uploaded_file($namaSementara, $dirUpload.$namaFile);
    
    if ($terupload) {
        $ubah = mysqli_query($kon, "UPDATE suratkeluar SET
        No_Berkas = '$_POST[kberkas]',
        Alamat_Penerima = '$_POST[kalamat]',
        Tanggal = '$_POST[ktanggal]',
        Keterangan = '$_POST[kketerangan]',
        File_Document = '$namaFile'
        WHERE id = '$_POST[id]'
         ");

        echo "Upload berhasil!<br/>";
        echo "Link: <a href='".$dirUpload.$namaFile."'>".$namaFile."</a>";
    } else {
        $ubah = mysqli_query($kon, "UPDATE suratkeluar SET
        No_Berkas = '$_POST[kberkas]',
        Alamat_Penerima = '$_POST[kalamat]',
        Tanggal = '$_POST[ktanggal]',
        Keterangan = '$_POST[kketerangan]'
        WHERE id = '$_POST[id]'
         ");
        
   }
  

    //jika sukses
    if($ubah){
        echo "<script>alert('Ubah Data Sukses')
            document.location='../DAFTAR ARSIP/tampilsuratkeluar.php';
            </script>";
    }else{
        echo "<script>alert('Ubah Data Gagal')
        document.location='../DAFTAR ARSIP/tampilsuratkeluar.php';
        </script>";
    }
}
if(isset($_POST['bhapus'])){

    // Hapus Data Suratmasuk
    $hapus = mysqli_query($kon, " DELETE FROM suratkeluar WHERE id ='$_POST[id]' ");

    //jika sukses
    if($hapus){
        echo "<script>alert('Hapus Data Sukses')
            document.location='../DAFTAR ARSIP/tampilsuratkeluar.php';
            </script>";
    }else{
        echo "<script>alert('Hapus  Data Gagal')
        document.location='../DAFTAR ARSIP/tampilsuratkeluar.php';
        </script>";
    }
}

?>