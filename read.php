<?php 
    //panggil file koneksi ke database
    include "config/koneksi.php";
    //sql query tabel data pegawai
    $sql = "SELECT * from suratmasuk order by id ASC";
    $query = mysqli_query($connect, $sql);
    $no=1;
    while ($row = mysqli_fetch_assoc($query)){            
    echo'<tr>
          <td>'.$no++.'</td>
          <td>'.$row['No_Berkas'].'</td>
          <td>'.$row['Alamat_Pengirim'].'</td>
          <td>'.$row['Tanggl'].'</td>
          <td>'.$row['Keterangan'].'</td>
          <td>'.$row['File_Documnet'].'</td>
          <td>
            <button type="button" class="btn btn-sm btn-info edit" data-id="'.$row['id'].'">Edit</button>
            <button type="button" class="btn btn-sm btn-danger hapus" data-id="'.$row['id'].'">Hapus</button>
          </td>                      
        </tr>';
    }
?>