<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="theme-color" content="#000000" />
  <title>CheckOut</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">~
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro%3A400%2C800"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins%3A400%2C800"/>
  <link rel="stylesheet" href="./styles/checkout.css"/>
</head>
<body>
<div class="checkout-TaG">
  <div class="shop-9-oe8">
    <div class="auto-group-vyd6-J56">
      <div class="auto-group-bn1e-DSx">
      
        <div class="group-15-vu6">
          <div class="rectangle-12-s3e">
          </div>
          <a href="coffe.php"><p class="x-m92">X</p></a>
        </div>
      </div>
      <table class="table table-success table-striped" border="1" cellpadding="2">
		<thead>
			<tr>			
				<th>No</th>
				<th>Nama</th>
				<th>Jurusan</th>
				<th>No.Absen</th>
				<th>Alamat</th> 
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php
				include "koneksi.php";
				$query	=mysqli_query($conn, "SELECT * FROM checkout ORDER BY no_urut DESC");
				$no=0;
				while($data	=mysqli_fetch_array($query)){
				$no++
			?>
			<tr>			
				<td><?php echo $no_urut?></td>
				<td><?php echo $data['nama']?></td>
				<td><?php echo $data['jumlah']?></td>
				<td><a href="coffe.php?no_urut=<?=$data['no_urut']?>">Ubah</a> | <a href="hapus.php?id_siswa=<?=$data['no_urut']?>" onclick="return confirm('Yakin ? <?php echo $data['nama']?>  from Database?');">Hapus</a></td>
			</tr>
			<?php
				}
			?>
		</tbody>
    </div>
    <div class="auto-group-tju6-D2x">
      <div class="auto-group-2k8p-jmz">
        <div class="auto-group-7pha-5ax">
          <div class="group-1-DhA">Kopi Susu</div>
          
        </div>
        <div class="auto-group-ux36-qc4">
         
        </div>
        <div class="group-5-4Dv">Kopi Susu</div>
      </div>
      <div class="auto-group-fxxc-j5A">
       
        <div class="group-2-MsE">Kopi Susu</div>
        <div class="group-3-EAL">Kopi Susu</div>
        <div class="group-7-V6G">Kopi Susu</div>
        <div class="group-8-ACQ">Kopi Susu</div>
        <div class="group-6-RPE">Kopi Susu</div>
        <div class="group-4-Vtt">Kopi Susu</div>
        
       
        <div class="group-20-uFn">
          
          <p class="checkout-8PS">Checkout</p>
        </div>
       
        <div class="group-10-qqa">Total Pembayaran :</div>
        <div class="group-27-6Fi">
         
        </div>
        
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</body>