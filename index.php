
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tiket Konser</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .form-container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
<div class="container">
    <div class="form-container">
        <form action="" method="post">
            <h4 class="text-center mt-2 mb-3">Cek Tiket Bus</h4>
            <div class="form-group">
                <label for="jumlah">Masukkan Jumlah Tiket</label>
                <input type="number" id="jumlah" name="jumlah" class="form-control" required min="1">
            </div>
            <div class="form-group">
                <label for="jenis">Pilih Kelas Tiket</label>
                <select name="jenis" id="jenis" class="form-control">
                    <option value="disabled">----</option>
                    <option value="VIP">VIP</option>
                    <option value="Private">Private</option>
                    <option value="Executive">Executive</option>
                    <option value="Ekonomi">Ekonomi</option>
                </select>
            </div>
            <button type="submit" name="btn-submit" class="btn btn-primary">Beli</button>
            <?php 

            if(isset($_POST['btn-submit'])) {
                include('logicTiket.php');
                $beli = new Beli;
                $beli->setHarga(750000, 1000000, 450000, 250000);
                $beli->jenis = $_POST['jenis'];
                $beli->jumlah = $_POST['jumlah'];

                echo $beli->cetakPembelian();
            }

            ?>
        </form>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>