 <?php
  // memanggil file koneksi.php untuk membuat koneksi
include 'koneksi.php';

  // mengecek apakah di url ada nilai GET id
  if (isset($_GET['id'])) {
    // ambil nilai id dari url dan disimpan dalam variabel $id
    $id_hp = ($_GET["id"]);

    // menampilkan data dari database yang mempunyai id=$id
    $query = "SELECT * FROM toko_hp WHERE id_hp='$id_hp'";
    $result = mysqli_query($koneksi, $query);
    // jika data gagal diambil maka akan tampil error berikut
    if(!$result){
      die ("Query Error: ".mysqli_errno($koneksi).
         " - ".mysqli_error($koneksi));
    }
    // mengambil data dari database
    $data = mysqli_fetch_assoc($result);
      // apabila data tidak ada pada database maka akan dijalankan perintah ini
       if (!count($data)) {
          echo "<script>alert('Data tidak ditemukan pada database');window.location='index.php';</script>";
       }
  } else {
    // apabila tidak ada data GET id pada akan di redirect ke index.php
    echo "<script>alert('Masukkan data id.');window.location='index.php';</script>";
  }         
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
	textarea {
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
    div {
      width: 50%;
      height: auto;
    }
    </style>
  </head>
  <body>
  <div class="container" style="margin-top:20px">
        <h1>Edit Produk <?php echo $data['merk_hp']; ?></h1>
        <a href="index.php">
        <button class="btn btn-outline-primary">&lt;&lt;Kembali</button>
        </a>
        <hr>
<form method="POST" action="proses_edit.php" enctype="multipart/form-data" >
      <section class="base">
        <!-- menampung nilai id produk yang akan di edit -->
        <input name="id_hp" value="<?php echo $data['id_hp']; ?>"  hidden />
        <div>
          <label>Merk HP</label>
          <input type="text" name="merk_hp" value="<?php echo $data['merk_hp']; ?>" autofocus="" required="" />
        </div>
        <div>
          <label>Harga</label>
         <input type="text" name="harga" required="" value="<?php echo $data['harga']; ?>"/>
        </div>
        <div>
          <label>Spesifikasi</label>
          <textarea name="spesifikasi"><?php echo $data['spesifikasi']; ?></textarea>
        </div>
        <div>
          <label>Gambar</label>
          <img src="gambar/<?php echo $data['gambar']; ?>" style="width: 120px;float: left;margin-bottom: 5px;">
          <input type="file" name="gambar" />
          <i style="float: left;font-size: 11px;color: red">Abaikan jika tidak merubah gambar produk</i>
        </div>
        <br>
        <div align="right">
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </div>
        </section>
      </form>
      <p>
  </body>
</html>