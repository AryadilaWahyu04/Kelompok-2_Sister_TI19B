<font color="orange">
<?php echo $this->session->flashdata('hasil'); ?>
</font>
<table border="1">
    <tr><th>ID</th><th>NIM</th><th>NAMA</th><th>NOMOR</th><th>ALAMAT</th><th></th></tr>
    <?php
    foreach ($datamahasiswa as $mahasiswa){
        echo "<tr>
              <td>$mahasiswa->id</td>
              <td>$mahasiswa->nim</td>
              <td>$mahasiswa->nama</td>
              <td>$mahasiswa->nomor</td>
              <td>$mahasiswa->alamat</td>
              </tr>";
    }
    ?>
</table>
