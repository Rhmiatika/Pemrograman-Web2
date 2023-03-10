<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Pekan 2</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

    <div class="container">
        <h2>Belanja Online</h2>
<br>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <form action="belanja.php" method="POST">      
                            <div class="form-group row">
                                <label for="nama" class="col-4 col-form-label">Customer</label> 
                                <div class="col-8">
                                <input id="nama" name="nama" placeholder="Nama Customer" type="text" class="form-control" required="required">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-4">Pilih Produk</label> 
                                <div class="col-8">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input name="produk" id="produk_0" type="radio" required="required" class="custom-control-input" value="tv"> 
                                    <label for="produk_0" class="custom-control-label">TV</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input name="produk" id="produk_1" type="radio" required="required" class="custom-control-input" value="kulkas"> 
                                    <label for="produk_1" class="custom-control-label">Kulkas</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input name="produk" id="produk_2" type="radio" required="required" class="custom-control-input" value="mesin cuci"> 
                                    <label for="produk_2" class="custom-control-label">Mesin Cuci</label>
                                </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
                                <div class="col-8">
                                <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control" required="required">
                                </div>
                            </div> 
                            <div class="form-group row">
                                <div class="offset-4 col-8">
                                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </div>
                    
                    </form>

                    <div class="col-md-4">
                        <table class="table table-bordered" >
                            <tr class="table-primary  text-uppercase">
                                <th>daftar harga</th>
                            </tr>
                            <tr>
                                <td>TV: Rp. 4.200.000</td>
                            </tr>
                            <tr>
                                <td>KULKAS: Rp. 3.100.000</td>
                            </tr>
                            <tr>
                                <td>MESIN CUCI: Rp. 3.800.000</td>
                            </tr>
                            <tr class="table-primary text-uppercase">
                                <th>harga dapat berubah setiap saat</th>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <table class="table table-bordered">
                <tr class="table-success">
                    <th>Nama</th>
                    <th>Produk</th>
                    <th>Jumlah</th>
                    <th>Total Harga</th>
                </tr>
                <?php require_once "jumlah.php"; ?>
                <tr>
                    <td><?= $nama;  ?></td>
                    <td><?= $produk;  ?></td>
                    <td><?= $jumlah;  ?></td>
                    <td><?= number_format($total_harga, 0);  ?></td>
                </tr>
            </table>
        </div>
    </div>

</body>
</html>