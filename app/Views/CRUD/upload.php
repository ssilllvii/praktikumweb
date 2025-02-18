<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<main>
  <div class="title">
    <h1>Tambah Data Mahasiswa</h1>
  </div>
  <div class="form">
    <form method="post">
      <div class="input">
        <label for="nim">Nim</label>
        <input type="text" name="nim" id="nim" />
      </div>
      <div class="input">
        <label for="nama">Nama</label>
        <input type="text" name="nama" id="nama" />
      </div>
      <div class="input">
        <label for="prodi">Prodi</label>
        <input type="text" name="prodi" id="prodi" />
      </div>
      <div class="input">
        <label for="universitas">Universitas</label>
        <input type="text" name="universitas" id="universitas" />
      </div>
      <div class="input">
        <label for="nomor_handphone">Nomor Handphone</label>
        <input type="text" name="nomor_handphone" id="nomor_handphone" />
      </div>
      <div class="button">
        <button type="submit" value="Submit">Submit</button>
      </div>
    </form>
  </div>
</main>
<?= $this->endSection(); ?>
