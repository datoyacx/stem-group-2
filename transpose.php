<?php include 'header.php'; ?>
		<div class="row">
			<div class="col-md-3">
				<h2 class="bk-judulpage">Menu</h2>
				<ul class="bk-menu-list">
								<li>
									<a href="/"><img src="assets/img/icon/kembali.png">Kembali</a>
								</li>
								<li>
									<a href="transpose.php"><img src="assets/img/icon/matematika.png">Transpos Matriks</a>
								</li>					
								<li>
									<a href="operasi.php"><img src="assets/img/icon/matematika.png">Operasi Matriks</a>
								</li>
							</ul>
			</div>
			<div class="col-md-9">
				<h2 class="bk-judulpage">Transpose Matriks</h2>	
				<b>Transpos matrik</b> adalah mengubah baris menjadi kolom dan mengubah kolom menjadi baris
				<form method="post">
				<table border='0'>
					<tr height="50px">
						<td colspan="7" class="jdl"> <center> Masukkan Ordo Matriks </center> </td>
					</tr>
					<tr>
					<tr>
						<td class="tulis"> <center> Baris </center> </td>
						<td width="20px"> </td>
						<td class="tulis"> <center> Kolom </center> </td>
					</tr>
					<tr>
						<td> <input type="text" name="baris"> </td>
						<td width="20px"> </td>
						<td> <input type="text" name="kolom"> </td>
						<td width="10px"> </td>
						<td> <input type="submit" name="show" value="Tampilkan"> </td>
					</tr>
				</table>
				<br>
				<table>
				<?PHP
				//error_reporting(0);
				if (isset($_POST['show'])) {
				$baris = $_POST['baris'];
				$kolom = $_POST['kolom'];
				$transpose = [];
				for ($a=0; $a < $baris; $a++) { 
					for ($i=0; $i < $kolom; $i++) {
						$watnani = '';
						if (isset($_POST['show'.$a.$i]) && $_POST['show'.$a.$i] != null) {
							$watnani = $_POST['show'.$a.$i];
						}
						echo "<input type='text' name='yikez$a$i' value='$watnani'>";
					}
					echo "<br>";
				}
			
				echo "<input type='hidden' name='baris' value='$baris'>";
				echo "<input type='hidden' name='kolom' value='$kolom'>";
				echo "<input type='hidden' name='transpus' value='true'>";
				echo "</tr><tr>
					<td colspan='$i'>
					<input type='hidden' name='bar' value='$baris'> 
					<center>
					<input type='Submit' Name='hsl' value='Hitung'>
					</center>
					</td>
					</tr>";
				}
				if (isset($_POST['hsl'])) {
					$kol = $_POST['kolom'];
					$bar = 	$_POST['baris'];	
					$watt = null;
				for ($a=0; $a < $bar; $a++) { 
					for ($i=0; $i < $kol; $i++) {
						if (isset($_POST['yikez'.$a.$i]) && $_POST['yikez'.$a.$i] != null) {
							$watt[$a][$i] = $_POST['yikez'.$a.$i];
						} else {
							$watt[$a][$i] = 0;
						}
					}
				}

				//print_r($watt);
				for ($a=0; $a < $bar; $a++) { 
					for ($i=0; $i < $kol; $i++) {
						echo "<input type='text' disabled='disabled' name='yikezz$a$i' value='".$watt[$a][$i]."'>";
					}
					echo "<br>";
				}
		
				echo "<br><h4 class='judul'>
							HASIL TRANSPOSE MATRIKS
						</h4> ";
				for ($a=0; $a < $kol; $a++) { 
					for ($i=0; $i < $bar; $i++) {
						echo "<input type='text' disabled='disabled' name='yikez$a$i' value='".$watt[$i][$a]."'>";
					}
					echo "<br>";
				}
				}
				?>
					
			</table>
			</form>
		</div>
	</div>

<?php include 'footer.php'; ?>