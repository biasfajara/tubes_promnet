<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>CodeIgniter CRUD</title>
  </head>
  <body>
    <h1 align="center">CodeIgniter Create, Read, Update, Delete (CRUD)</h1>
    <hr>
    <table border="1" cellspacing="0" cellpadding="8" align="center">
      <thead>
        <th>id</th>
        <th>nim</th>
        <th>nama</th>
        <th>jenis_kelamin</th>
        <th>program_studi</th>
        <th>alamat</th>
        <th>Action</th>
      </thead>
      <tbody>
        <?php foreach ($mahasiswa as $value): ?>
          <tr>
            <td><?php echo $value->id ?></td>
            <td><?php echo $value->nim ?></td>
            <td><?php echo $value->nama ?></td>
            <td><?php echo $value->jenis_kelamin ?></td>
            <td><?php echo $value->program_studi ?></td>
            <td><?php echo $value->alamat ?></td>
            <td>
              <a href="<?php echo site_url('Mahasiswa/v_add') ?>">Add</a>
              <a href="#">Edit</a>
              <a href="#">Delete</a>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>

    </table>
  </body>
</html>
<?php
 ?>
