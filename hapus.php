<?php
	include "koneksi.php";
	if (isset($_GET['no_urut'])) {
		$id_siswa	=$_GET['no_urut'];
	}
	else{
		echo "Oops! No ID Selected";
	}
	
	if (!empty($id_siswa) && $id_siswa != "") {
		$hapus =mysqli_query($conn, "DELETE FROM checkout WHERE no_urut='$no_urut'");
			?>
				<script language="JavaScript">
				alert('SIP! Delete data siswa berhasil ...');
				document.location='checkout.php';
				</script>
			<?php		
	}
?>