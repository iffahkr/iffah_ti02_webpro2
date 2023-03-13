<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-4">
                <form method="POST" action="form2.php">
                    <div class="form-group row">
                        <label for="uts" class="col-4 col-form-label">Nilai UTS</label> 
                        <div class="col-8">
                            <input id="uts" name="uts" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="uas" class="col-4 col-form-label">Nilai UAS</label> 
                        <div class="col-8">
                            <input id="uas" name="uas" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tugas" class="col-4 col-form-label">Nilai Tugas</label> 
                        <div class="col-8">
                            <input id="tugas" name="tugas" type="text" class="form-control">
                        </div>
                    </div> 
                    <div class="form-group row">
                        <div class="offset-4 col-8">
                            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>

                <?php

                $uts = $_POST['uts'];
                $uas = $_POST['uas'];
                $tugas = $_POST['tugas'];

                function keterangan($uts, $uas, $tugas){
                    if (($uts + $uas + $tugas)/3 >= 75) {
                        $keterangan = "Lulus";
                    } else {
                        $keterangan = "Tidak Lulus";
                    }
                }

                function predikat($keterangan){
                    switch($keterangan){
                        case "Lulus":
                            echo "Kamu Pintar";
                            break;
                        case "Tidak Lulus":
                            echo "Kamu Hampir Pintar";
                            break;
                        default:
                            echo "Kamu Belum Ujian";
                            break;
                    }
                }

                predikat("Lulus");

                ?>
            </div>
        </div>
    </div>
</body>
</html>