<?php
include "../config/koneksi.php";

if (isset($_POST['submit'])) {
    $pdf=$_FILES['pdf']['File_Document'];
    $pdf_type=$_FILES['file']['type'];
    $pdf_size=$_FILES['pdf']['size'];
    $pdf_tem_loc=$_FILES['pdf']['tmp_name'];
    $pdf_store="../dokumen/".$pdf;

    move_uploaded_file($pdf_tem_loc,$pdf_store);

    $sql="INSERT INTO administrasi (pdf) values('$pdf')";
    $query=mysqli_query($kon,$sql);



  }
