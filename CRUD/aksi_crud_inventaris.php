<?php
include "../koneksi.php";

// uji tombol simpan
if(isset($_POST['bsimpan'])){
    $namaFile = $_FILES['infile']['name'];
    $namaSementara = $_FILES['infile']['tmp_name'];
    
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
    $simpan = mysqli_query($kon, "INSERT INTO inventarisbarang (Nama_Barang, Tanggal_Pembelian, Kondisi_Barang, Sumber_Dana, Keterangan, File_Document)
                                    VALUES ('$_POST[inbarang]',
                                             '$_POST[intanggal]',
                                             '$_POST[inkondisi]',
                                             '$_POST[insumber]',
                                             '$_POST[inketerangan]',
                                             '$namaFile ') ");

    //jika sukses
    if($simpan){
        echo "<script>alert('Simpan Data Sukses')
            document.location='../DAFTAR ARSIP/tampilinventaris.php';
            </script>";
    }else{
        echo "<script>alert('Simpan Data Gagal')
        document.location='../DAFTAR ARSIP/tampilinventaris.php';
        </script>";
    }

}
if(isset($_POST['bubah'])){
    $namaFile = $_FILES['infile']['name'];
    $namaSementara = $_FILES['infile']['tmp_name'];
    
    // tentukan lokasi file akan dipindahkan
    $dirUpload = "../dokumen/";
    
    // pindahkan file
    $terupload = move_uploaded_file($namaSementara, $dirUpload.$namaFile);
    
    if ($terupload) {
        $ubah = mysqli_query($kon, "UPDATE inventarisbarang SET
                                                        Nama_Barang = '$_POST[inbarang]',
                                                        Tanggal_Pembelian = '$_POST[intanggal]',
                                                        Kondisi_Barang = '$_POST[inkondisi]',
                                                        Sumber_Dana = '$_POST[insumber]',
                                                        Keterangan = '$_POST[inketerangan]',
                                                        File_Document = '$namaFile'
                                                        WHERE id = '$_POST[id]'
                                                         ");
        echo "Upload berhasil!<br/>";
        echo "Link: <a href='".$dirUpload.$namaFile."'>".$namaFile."</a>";
    }else{
        $ubah = mysqli_query($kon, "UPDATE inventarisbarang SET
        Nama_Barang = '$_POST[inbarang]',
        Tanggal_Pembelian = '$_POST[intanggal]',
        Kondisi_Barang = '$_POST[inkondisi]',
        Sumber_Dana = '$_POST[insumber]',
        Keterangan = '$_POST[inketerangan]'
        WHERE id = '$_POST[id]'
         ");
    }


    // ubahdata suratmasuk
    
    //jika sukses
    if($ubah){
        echo "<script>alert('Ubah Data Sukses')
            document.location='../DAFTAR ARSIP/tampilinventaris.php';
            </script>";
    }else{
        echo "<script>alert('Ubah Data Gagal')
        document.location='../DAFTAR ARSIP/tampilinventaris.php';
        </script>";
    }
}
if(isset($_POST['bhapus'])){
 
    // Hapus Data Suratmasuk
    $hapus = mysqli_query($kon, " DELETE FROM inventarisbarang WHERE id ='$_POST[id]' ");

    //jika sukses
    if($hapus){
        echo "<script>alert('Hapus Data Sukses')
            document.location='../DAFTAR ARSIP/tampilinventaris.php';
            </script>";
    }else{
        echo "<script>alert('Hapus  Data Gagal')
        document.location='../DAFTAR ARSIP/tampilinventaris.php';
        </script>";
    }
}

?>