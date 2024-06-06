<!doctype html>
<?php
session_start();
include('includes/config.php');
?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Barang</title>
  </head>
  <body>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- JavaScript untuk menampilkan Modal -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <nav class="navbar navbar-expand-lg bg-warning" style="background-color: lightblue !important">
  <!-- <div class="container-fluid">
    <a class="navbar-brand" href="#">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Data Barang</a>
        </li>  
      </ul>
    </div>
  </div> -->
</nav>
<!-- Search dan menampilkan data -->
<h1 h1 style="text-align:center">Search Barang</h1>
<div class="container">
<a href="index.php" type="button" class="btn btn-primary" style="margin-bottom: 10px">BACK </a>

<table class="table" style="border: 1px solid black; border-collapse: collapse">
  <thead>
  <tr>
      <th scope="col" style="border-right: 1px solid black">Kode</th>
      <th scope="col" style="border-right: 1px solid black">Nama Barang</th>
      <th scope="col" style="border-right: 1px solid black">Jenis</th>
      <th scope="col" style="border-right: 1px solid black">Satuan</th>
      <th scope="col" style="border-right: 1px solid black">Merk</th>
      <th scope="col" style="border-right: 1px solid black">Produsen</th>
      <th scope="col" style="border-right: 1px solid black">Harga Beli</th>
    </tr>
  </thead>
  <tbody>
  <?php 
        $nama_barang = $_POST['nama_barang'];
        // $sqlbarang = "SELECT * FROM tb_barang WHERE nama_barang='$nama_barang'";
        $sqlbarang = "SELECT * FROM tb_barang WHERE LOWER(nama_barang) LIKE LOWER('%$nama_barang%')";
        $querybarang = mysqli_query($koneksidb,$sqlbarang);
        while ($result = mysqli_fetch_array($querybarang)){
            ?>
        <tr>
            <td style="border-right: 1px solid black"><?php echo htmlentities($result['kode_barang']);?></td>
            <td style="border-right: 1px solid black"><?php echo htmlentities($result['nama_barang']);?></td>
            <td style="border-right: 1px solid black"><?php echo htmlentities($result['jenis']);?></td>
            <td style="border-right: 1px solid black"><?php echo htmlentities($result['satuan']);?></td>
            <td style="border-right: 1px solid black"><?php echo htmlentities($result['merk']);?></td>
            <td style="border-right: 1px solid black"><?php echo htmlentities($result['produsen']);?></td>
            <td style="border-right: 1px solid black"><?php echo htmlentities($result['harga_beli']);?></td>
        <!-- <td class='text-left'>
            <a class='btn btn-warning btn-sm' data-bs-toggle='modal' data-bs-target='#konfirmasi_update' data-href="barang_formedit.php?id=<?php echo $result['id'];?>">UPDATE </a>
            <a class='btn btn-danger btn-sm' data-bs-toggle='modal' data-bs-target='#konfirmasi_hapus' data-href="barang_hapus.php?id=<?php echo $result['id'];?>">DELETE</a>

            <div class="modal fade" id="konfirmasi_update" tabindex="-1" aria-labelledby="myModalUpdate" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <p>Apakah Anda yakin ingin mengubah data barang ini?</p>
                        </div>
                        <div class="modal-footer">
                            <a class="btn btn-primary btn-sm btn-ya"> Ya</a>
                            <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal">Tidak</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="konfirmasi_hapus" tabindex="-1" aria-labelledby="myModalHapus" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <p>Apakah Anda yakin ingin menghapus data barang ini?</p>
                        </div>
                        <div class="modal-footer">
                            <a class="btn btn-primary btn-sm btn-ya"> Ya</a>
                            <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal">Tidak</button>
                        </div>
                    </div>
                </div>
            </div>
        <script>
            $(document).ready(function() {
                $('#konfirmasi_update').on('show.bs.modal', function(e) {
                    $(this).find('.btn-ya').attr('href', $(e.relatedTarget).data('href'));
                });
                $('#konfirmasi_hapus').on('show.bs.modal', function(e) {
                    $(this).find('.btn-ya').attr('href', $(e.relatedTarget).data('href'));
                });
            });
        </script>
        </td> -->
    </tr>
    <?php } ?>
    </tbody>
    </table>
<div> 
  </body>
</html>