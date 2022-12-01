<?php
include "../koneksi.php";


// uji tombol simpan
if(isset($_POST['bsimpan'])){
    $filecount = count($_FILES['tfile']['name']);
    for($i=0;$i<$filecount;$i++){
    $namaFile = $_FILES['tfile']['name'][$i];
    $namaSementara = $_FILES['tfile']['tmp_name'][$i];
    
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
}
    // simpan data
    $simpan = mysqli_query($kon, "INSERT INTO suratmasuk (No_Berkas, Alamat_Pengirim, Tanggal, Keterangan, File_Document)
                                    VALUES ('$_POST[tberkas]',
                                             '$_POST[talamat]',
                                             '$_POST[ttanggal]',
                                             '$_POST[tketerangan]',
                                             '$filecount') ");

    //jika sukses
    if($simpan){
        echo "<script>alert('Simpan Data Sukses')
            document.location='../DAFTAR ARSIP/tampildata.php';
            </script>";
    } else {
        echo "<script>alert('Simpan Data Gagal')
        document.location='../DAFTAR ARSIP/tampildata.php';
        </script>";
    }


}
if(isset($_POST['bubah'])){
    $namaFile = $_FILES['tfile']['name'];
    $namaSementara = $_FILES['tfile']['tmp_name'];
    
    // tentukan lokasi file akan dipindahkan
    $dirUpload = "../dokumen/";
    
    // pindahkan file
    $terupload = move_uploaded_file($namaSementara, $dirUpload.$namaFile);
    
    if ($terupload) {
        $ubah = mysqli_query($kon, "UPDATE suratmasuk SET
                                                        No_Berkas = '$_POST[tberkas]',
                                                        Alamat_Pengirim = '$_POST[talamat]',
                                                        Tanggal = '$_POST[ttanggal]',
                                                        Keterangan = '$_POST[tketerangan]',
                                                        File_Document = '$namaFile'
                                                        WHERE id = '$_POST[id]'
                                                         ");
        echo "Upload berhasil!<br/>";
        echo "Link: <a href='".$dirUpload.$namaFile."'>".$namaFile."</a>";
    }else{
        $ubah = mysqli_query($kon, "UPDATE suratmasuk SET
        No_Berkas = '$_POST[tberkas]',
        Alamat_Pengirim = '$_POST[talamat]',
        Tanggal = '$_POST[ttanggal]',
        Keterangan = '$_POST[tketerangan]'
        WHERE id = '$_POST[id]'
         ");
    }



    // ubahdata suratmasuk
    
    //jika sukses
    if($ubah){
        echo "<script>alert('Ubah Data Sukses')
            document.location='../DAFTAR ARSIP/tampildata.php';
            </script>";
    }else{
        echo "<script>alert('Ubah Data Gagal')
        document.location='../DAFTAR ARSIP/tampildata.php';
        </script>";
    }
}

if(isset($_POST['bhapus'])){

    // Hapus Data Suratmasuk
    $hapus = mysqli_query($kon, " DELETE FROM suratmasuk WHERE id ='$_POST[id]' ");

    //jika sukses
    if($hapus){
        echo "<script>alert('Hapus Data Sukses')
            document.location='../DAFTAR ARSIP/tampildata.php';
            </script>";
    }else{
        echo "<script>alert('Hapus  Data Gagal')
        document.location='../DAFTAR ARSIP/tampildata.php';
        </script>";
    }
}




?>
