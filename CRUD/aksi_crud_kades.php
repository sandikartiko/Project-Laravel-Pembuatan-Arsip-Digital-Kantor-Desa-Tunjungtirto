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
    $simpan = mysqli_query($kon, "INSERT INTO perkades (jenisperkades, tglditetapkan, tentang, uraian, tanggalkesepakatan, tgllapor, tgllembardesa, tglberitadesa, keterangan, file_document)
                                    VALUES ('$_POST[adjp]',
                                             '$_POST[adntd]',
                                             '$_POST[adt]',
                                             '$_POST[adu]',
                                             '$_POST[adtkp]',
                                             '$_POST[adntdl]',
                                             '$_POST[adntdld]',
                                             '$_POST[adntdbd]',
                                             '$_POST[adk]',
                                             '$namaFile ') ");

    //jika sukses
    if($simpan){
        echo "<script>alert('Simpan Data Sukses')
            document.location='../DAFTAR ARSIP/tampilkades.php';
            </script>";
    }else{
        echo "<script>alert('Simpan Data Gagal')
        document.location='../DAFTAR ARSIP/tampilkades.php';
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
        $ubah = mysqli_query($kon, "UPDATE perkades SET
                                                        jenisperkades = '$_POST[adjp]',
                                                        tglditetapkan = '$_POST[adntd]',
                                                        tentang = '$_POST[adt]',
                                                        uraian = '$_POST[adu]',
                                                        tanggalkesepakatan = '$_POST[adtkp]',
                                                        tgllapor = '$_POST[adntdl]',
                                                        tgllembardesa = '$_POST[adntdld]',
                                                        tglberitadesa = '$_POST[adntdbd]',
                                                        keterangan = '$_POST[adk]',
                                                        file_document = '$namaFile'
                                                        WHERE id = '$_POST[id]'
                                                         ");
        echo "Upload berhasil!<br/>";
        echo "Link: <a href='".$dirUpload.$namaFile."'>".$namaFile."</a>";
    } else {
        $ubah = mysqli_query($kon, "UPDATE perkades SET
                                                        jenisperkades = '$_POST[adjp]',
                                                        tglditetapkan = '$_POST[adntd]',
                                                        tentang = '$_POST[adt]',
                                                        uraian = '$_POST[adu]',
                                                        tanggalkesepakatan = '$_POST[adtkp]',
                                                        tgllapor = '$_POST[adntdl]',
                                                        tgllembardesa = '$_POST[adntdld]',
                                                        tglberitadesa = '$_POST[adntdbd]',
                                                        keterangan = '$_POST[adk]'
                                                        WHERE id = '$_POST[id]'
                                                         ");
        echo "Upload Gagal!";
    }

    // ubahdata suratmasuk
    

    //jika sukses
    if($ubah){
        echo "<script>alert('Ubah Data Sukses')
            document.location='../DAFTAR ARSIP/tampilkades.php';
            </script>";
    }else{
        echo "<script>alert('Ubah Data Gagal')
        document.location='../DAFTAR ARSIP/tampilkades.php';
        </script>";
    }
}
if(isset($_POST['bhapus'])){
 
    // Hapus Data Suratmasuk
    $hapus = mysqli_query($kon, " DELETE FROM perkades WHERE id ='$_POST[id]' ");

    //jika sukses
    if($hapus){
        echo "<script>alert('Hapus Data Sukses')
            document.location='../DAFTAR ARSIP/tampilkades.php';
            </script>";
    }else{
        echo "<script>alert('Hapus  Data Gagal')
        document.location='../DAFTAR ARSIP/tampilkades.php';
        </script>";
    }
}

?>