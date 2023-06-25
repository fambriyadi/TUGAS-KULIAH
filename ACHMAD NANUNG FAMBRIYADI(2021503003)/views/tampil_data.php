<div class="container">
  <h2>Data Pelanggaran</h2>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Jenis pelanggaran</th>
        <th>Sangsi</th>
      </tr>
    </thead>
    <tbody>
      <?php
      require_once 'connect.php';
      $query = mysqli_query($connect, "SELECT * FROM tbpelanggaran");
      $no=1;
      while($hasil = mysqli_fetch_array($query)) {
        $no++;
      
      ?>
      <tr>
        <td><?php echo $no?></td>
        <td><?php echo $hasil['ID_PELANGGARAN']?></td>
        <td><?php echo $hasil['JENIS_PELANGGARAN']?></td>
        <td><?php echo $hasil['SANGSI_PELANGGARAN']?></td> 
      </tr>
      <?php } ?>
      </tbody>
  </table>
</div>
