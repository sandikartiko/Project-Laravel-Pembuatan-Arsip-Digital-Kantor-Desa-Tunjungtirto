<?php
    if(isset($_GET['id'])){
        $id =$_GET['id'];
    }
    else {
        die ("Error. No ID Selected!");    
    }
      
     include "../koneksi.php";

      $sql="SELECT File_Document from suratmasuk WHERE id = $id";
      $query=mysqli_query($kon,$sql);
      while ($info=mysqli_fetch_array($query)) {
        ?>
      <embed type="application/pdf" src="../dokumen/<?php echo $info['File_Document'] ; ?>" width="1500" height="1000">
    <?php
      }

      ?>