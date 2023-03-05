<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pembelanjaan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container mt-4">
    <h2 class="mb-4">Belanja Online</h2>
    <hr>
        <div class="row">
            <div class="col-md-6 mt-4">
                <form method="POST" action="form_belanja.php">
                    <div class="form-group row">
                        <label for="customer" class="col-4 col-form-label">Customer</label> 
                        <div class="col-8">
                            <input id="customer" name="customer" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4">Pilih Produk</label> 
                        <div class="col-8">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" checked id="produk_0" type="radio" class="custom-control-input" value="TV"> 
                                <label for="produk_0" class="custom-control-label">TV</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="Kulkas"> 
                                <label for="produk_1" class="custom-control-label">Kulkas</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="Mesin cuci"> 
                                <label for="produk_2" class="custom-control-label">Mesin cuci</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
                        <div class="col-8">
                            <select id="jumlah" name="jumlah" class="custom-select">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                    </div> 
                    <div class="form-group row">
                        <div class="offset-4 col-8">
                            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                <div class="list-group ml-5" style="width: 300px; margin-top: 24px;">
                    <a class="list-group-item list-group-item-action text-white active" aria-current="true">
                        Daftar Harga
                    </a>
                    <a class="list-group-item list-group-item-action">TV : 4.200.00</a>
                    <a class="list-group-item list-group-item-action">Kulkas : 3.100.000</a>
                    <a class="list-group-item list-group-item-action">Mesin cuci : 3.800.000</a>
                    <a class="list-group-item list-group-item-action text-white active" aria-current="true">
                        Harga dapat berubah setiap saat
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>