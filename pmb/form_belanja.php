<?php
// mengambil data yang di input oleh user
include 'navbar.php';
include 'sidebar.php';
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"></h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                        <li class="breadcrumb-item active">Belanja Online</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Belanja Online - Sintia Sari</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
	<h1 class="mx-3">Belanja Online</h1>

	<div class="container-fluid">
		<div class="card d-flex">
			<div class="row">
				<div class="col-8">
					<div class="Form mt-4 mx-5">
						<form action="form_belanja.php" method="post">
							<div class="form-group row">
								<label for="customer" class="col-2 col-form-label">Customer</label>
								<div class="col-4">
									<input id="customer" required name="customer" placeholder="Nama Customer"
										type="text" class="form-control">
								</div>
							</div>

							<div class="form-group row">
								<label class="col-2">Pilih Produk</label>
								<div class="col-8">
									<div class="custom-control custom-radio custom-control-inline">
										<input name="produk" id="produk_0" type="radio" class="custom-control-input"
											value="TV">
										<label for="produk_0" class="custom-control-label">TV</label>
									</div>
									<div class="custom-control custom-radio custom-control-inline">
										<input name="produk" required id="produk_1" type="radio"
											class="custom-control-input" value="Kulkas">
										<label for="produk_1" class="custom-control-label">KULKAS</label>
									</div>
									<div class="custom-control custom-radio custom-control-inline">
										<input name="produk" id="produk_2" type="radio" class="custom-control-input"
											value="Mesin Cuci">
										<label for="produk_2" class="custom-control-label">MESIN CUCI</label>
									</div>
								</div>
							</div>
							<div class="form-group row">
								<label for="jumlah" class="col-2 col-form-label">Jumlah</label>
								<div class="col-2">
									<input id="jumlah" name="jumlah" placeholder="Jumlah" type="text"
										class="form-control">
								</div>
							</div>
							<div class="form-group row">
								<div class="offset-1 col-8">
									<input type="submit" value="Kirim" name="proses" class="btn btn-success">
								</div>
							</div>
						</form>
					</div>
				</div>
				<div class="col-4">
					<div class="list-group position-relative">
						<button type="button" class="list-group-item list-group-item-action active" aria-current="true">
							Daftar Harga
						</button>
						<button type="button" class="list-group-item list-group-item-action">TV: 4.200.000</button>
						<button type="button" class="list-group-item list-group-item-action">Kulkas: 3.100.000</button>
						<button type="button" class="list-group-item list-group-item-action">MESIN CUCI:
							3.800.000</button>
						<button type="button" class="list-group-item list-group-item-action active" aria-current="true">
							Harga Dapat Berubah Setiap Saat
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="card mt-2 pb-2">
			<div class="row">
				<div class="col-12 d-flex flex-column px-4">
				<section class="content">
					<?php
					if (isset($_POST['proses'])) {
						$customer = $_POST['customer'];
						$produk = $_POST['produk'];
						$jumlah = $_POST['jumlah'];
						if ($produk == "TV"){
							$total = $jumlah * 4200000;
     						$total_belanja = number_format($total,0,",",".");
						} elseif ($produk == "Kulkas") {
							$total = $jumlah * 3100000;
							$total_belanja = number_format($total,0,",",".");
						} elseif ($produk == "Mesin Cuci") {
							$total = $jumlah * 3800000;
							$total_belanja = number_format($total,0,",",".");
				
						}
				
						echo "<p>Nama Customer : " .$customer;
						echo "<p>Produk Pilihan : " .$produk;
						echo "<p>Jumlah Beli : " .$jumlah;
						echo "<p>Total Belanja : Rp. " .$total_belanja;
						}
						?>
					</section>
				</div>
			</div>
		</div>
	</div>
</body>

</html>

<?php
include 'footer.php';
?>