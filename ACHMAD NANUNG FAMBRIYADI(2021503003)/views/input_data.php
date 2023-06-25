<div class="container">
  <h2>Input Data Pelanggaran</h2>
  <form action="controllers/proses_input_data.php" method="post">
    <div class="form-group">
      <label>Nama:</label>
      <input type="text" class="form-control"placeholder="ketik nama" name="ID_PELANGGARAN">
    </div>
    <div class="form-group">
      <label>Jenis Pelanggaran:</label>
      <input type="text" class="form-control"placeholder="ketik jenis_pelanggaran" name="JENIS_PELANGGARAN">
    </div>
    <div class="form-group">
      <label>Sangsi:</label>
      <input type="text" class="form-control"placeholder="ketik sangsi" name="SANGSI_PELANGGARAN">
    </div>
    <button type="input_data" class="btn btn-primary">Input data</button>
  </form>
</div>