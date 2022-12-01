<?php
include "../koneksi.php";

// uji tombol simpan
if(isset($_POST['bsimpan'])){
    $namaFile = $_FILES['adfile']['name'];
    $namaSementara = $_FILES['adfile']['tmp_name'];
    
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
    $simpan = mysqli_query($kon, "INSERT INTO perdes (JenisPerdes, NoTanggalDt, Tentang, Uraian, TangalSepakat, NoTanggalDl, NoTanggalLD, NoTanggalBD, Keterangan, File_Document)
                                    VALUES ('$_POST[apjp]',
                                             '$_POST[apntd]',
                                             '$_POST[apt]',
                                             '$_POST[apu]',
                                             '$_POST[aptkp]',
                                             '$_POST[apntdl]',
                                             '$_POST[apntdld]',
                                             '$_POST[apntdbd]',
                                             '$_POST[apk]',
                                             '$namaFile ') ");

    //jika sukses
    if($simpan){
        echo "<script>alert('Simpan Data Sukses')
            document.location='../DAFTAR ARSIP/tampilaperdes.php';
            </script>";
    }else{
        echo "<script>alert('Simpan Data Gagal')
        document.location='../DAFTAR ARSIP/tampilaperdes.php';
        </script>";
    }

}
if(isset($_POST['bubah'])){
    $namaFile = $_FILES['adfile']['name'];
    $namaSementara = $_FILES['adfile']['tmp_name'];
    
    // tentukan lokasi file akan dipindahkan
    $dirUpload = "../dokumen/";
    
    // pindahkan file
    $terupload = move_uploaded_file($namaSementara, $dirUpload.$namaFile);
    
    if ($terupload) {
        $ubah = mysqli_query($kon, "UPDATE perdes SET
                                                        JenisPerdes = '$_POST[apjp]',
                                                        NoTanggalDt = '$_POST[apntd]',
                                                        Tentang = '$_POST[apt]',
                                                        Uraian = '$_POST[apu]',
                                                        TangalSepakat = '$_POST[aptkp]',
                                                        NoTanggalDl = '$_POST[apntdl]',
                                                        NoTanggalLD = '$_POST[apntdld]',
                                                        NoTanggalBD = '$_POST[apntdbd]',
                                                        Keterangan = '$_POST[apk]',
                                                        File_Document = '$namaFile'
                                                        WHERE id = '$_POST[id]'
                                                         ");
        echo "Upload berhasil!<br/>";
        echo "Link: <a href='".$dirUpload.$namaFile."'>".$namaFile."</a>";
    } else {
        $ubah = mysqli_query($kon, "UPDATE perdes SET
                                                        JenisPerdes = '$_POST[apjp]',
                                                        NoTanggalDt = '$_POST[apntd]',
                                                        Tentang = '$_POST[apt]',
                                                        Uraian = '$_POST[apu]',
                                                        TangalSepakat = '$_POST[aptkp]',
                                                        NoTanggalDl = '$_POST[apntdl]',
                                                        NoTanggalLD = '$_POST[apntdld]',
                                                        NoTanggalBD = '$_POST[apntdbd]',
                                                        Keterangan = '$_POST[apk]'
                                                        WHERE id = '$_POST[id]'
                                                         ");
        echo "Upload Gagal!";
    }

    // ubahdata suratmasuk
    

    //jika sukses
    if($ubah){
        echo "<script>alert('Ubah Data Sukses')
            document.location='../DAFTAR ARSIP/tampilaperdes.php';
            </script>";
    }else{
        echo "<script>alert('Ubah Data Gagal')
        document.location='../DAFTAR ARSIP/tampilaperdes.php';
        </script>";
    }
}
if(isset($_POST['bhapus'])){
 
    // Hapus Data Suratmasuk
    $hapus = mysqli_query($kon, " DELETE FROM perdes WHERE id ='$_POST[id]' ");

    //jika sukses
    if($hapus){
        echo "<script>alert('Hapus Data Sukses')
            document.location='../DAFTAR ARSIP/tampilaperdes.php';
            </script>";
    }else{
        echo "<script>alert('Hapus  Data Gagal')
        document.location='../DAFTAR ARSIP/tampilaperdes.php';
        </script>";
    }
}

?>