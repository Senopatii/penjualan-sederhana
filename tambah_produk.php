<?php
  include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
  
?>
<!DOCTYPE html>
<html>
<head>
<title></title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <style type="text/css">
      * {
        font-family: "Trebuchet MS";
      }
      h1 {
        text-transform: uppercase;
        color: black;
      }
    label {
      margin-top: 10px;
      float: left;
      text-align: left;
      width: 100%;
    }
    input {
      padding: 6px;
      width: 100%;
      box-sizing: border-box;
      background: #f8f8f8;
      border: 2px solid #ccc;
      outline-color: salmon;
    }
	textarea {
      padding: 6px;
      width: 100%;
      box-sizing: border-box;
      background: #f8f8f8;
      border: 2px solid #ccc;
      outline-color: salmon;
    }
	select {
      padding: 6px;
      width: 100%;
      box-sizing: border-box;
      background: #f8f8f8;
      border: 2px solid #ccc;
      outline-color: salmon;
    }
	 div {
      width: 50%;
      height: auto;
    }
  </style>
</head>
<body>
<div class="container" style="margin-top:20px">
        <h1 class="style1">DATA HANDPHONE</h1>
        <a href="index.php">
        <button class="btn btn-outline-primary">&lt;&lt;Kembali</button>
        </a>
        <hr>
<form method="POST" action="proses_tambah.php" enctype="multipart/form-data" >
      <section class="base">
        <div>
          <label>Merk Hp</label>
          <label for="select"></label>
          <select name="merk_hp">
            <option>Samsung</option>
            <option>Oppo</option>
            <option>Iphone</option>
            <option>Nokia</option>
          </select>
        </div>
        <div>
          <label>Harga</label>
         <input type="text" name="harga" required="" />
        </div>
        <div>
          <label>Spesifikasi</label>
          <textarea name="spesifikasi"></textarea>
        </div>
        <div>
          <label>Gambar</label>
         <input type="file" name="gambar" required="" />
        </div>
        <p>
        <div>
         <button type="submit" class="btn btn-primary">Simpan</button><t></t>
         <button type="reset" class="btn btn-secondary">Batal</button>
        </div>
  </section>
</form>
</body>
</html>