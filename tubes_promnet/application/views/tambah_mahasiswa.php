<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>CodeIgniter CRUD</title>
  </head>
  <body>
    <h1 align="center">CodeIgniter Create, Read, Update, Delete (CRUD)</h1>
    <hr>
    <form class="" action="<?php echo site_url("Mahasiswa/add") ?>" method="post" align="center">
      <p>NIM: </p>
      <input type="text" name="nim" value="">
      <p>Nama: </p>
      <input type="text" name="nama" value="">
      <p>Jenis_Kelamin: </p>
      <input type="radio" name="jenis_kelamin" value="L">Laki-Laki
      <input type="radio" name="jenis_kelamin" value="P">Perempuan
      <br>

      <p>Program_Studi: </p>
      <select name="program_studi">
        <option value="Pendidikan Ilmu Komputer">Pendidikan Ilmu Komputer</option>
        <option value="Ilmu Komputer">Ilmu Komputer</option>
      </select>

      <p>Alamat: </p>
      <textarea name="alamat" rows="8" cols="80"></textarea>
      <br>

      <input type="submit" name="simpan" value="Send">
      <br><br>
      <button type="button" name="cancel">
        <a href=<?php echo site_url('Mahasiswa/index') ?>>Cancel</a>
      </button>
    </form>
  </body>
</html>
<?php
 ?>
