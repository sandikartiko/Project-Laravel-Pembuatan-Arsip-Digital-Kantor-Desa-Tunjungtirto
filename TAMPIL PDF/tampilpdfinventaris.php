<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>TAMPILAN DATA DOKUMEN PDF INVENTARIS</title>
    <style media="screen">
      embed{
        border: 2px solid black;
        margin-top: 30px;
      }
      .div1{
        margin-left: 170px;
      }
    </style>
  </head>
  <body>
    <div class="div1">
      <?php
     include "../koneksi.php";

      $sql="SELECT File_Document from inventarisbarang";
      $query=mysqli_query($kon,$sql);
      while ($info=mysqli_fetch_array($query)) {
        ?>
      <embed type="application/pdf" src="../dokumen/<?php echo $info['File_Document'] ; ?>" width="900" height="900">
    <?php
      }

      ?>

    </div>

  </body>
</html>