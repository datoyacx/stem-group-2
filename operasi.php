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
				<h2 class="bk-judulpage">Operasi Matriks</h2>
			Operasi Penjumlahan dan Pengurangan dari 2 matriks
				<form method="post">
				<table>
					<tr height="50px">
						<td colspan="7" class="jdl"> <center> Masukkan Ordo Matriks </center> </td>
					</tr>
					<tr>
						<td class="tulis"> <center> Baris </center> </td>
						<td width="10px"> </td>
						<td class="tulis"> <center> Kolom </center> </td>
						<td width="20px"> </td>
						<td></td>
						<td> </td>
						<td class="tulis"> </td>
					</tr>
					<tr>
						<td> <input type="text" name="baris"> </td>
						<td width="10px"> </td>
						<td> <input type="text" name="kolom"> </td>
						<td width="20px"> </td>
						<td> <input type="submit" name="show" value="Tampilkan"> </td>
						<td width="20px"> </td>
					</tr>
				</table>
				<?PHP				
				if (isset($_POST['show'])) {
					$baris = $_POST['baris'];
					$kolom = $_POST['kolom'];
					
					echo "<br><div class='math'><h4 class='judul'>
							MATRIKS 1
						</h4>
						<input type='hidden' name='bariis' value='$baris'>
						<input type='hidden' name='koloom' value='$kolom'>";
					for ($a=0; $a < $baris; $a++) { 
						for ($i=0; $i < $kolom; $i++) {
							$sep = '';
							if (isset($_POST['septir'.$a.$i]) && $_POST['septir'.$a.$i] != null) {
								$sep = $_POST['septir'.$a.$i];
							}
							echo "<input type='text' name='septir$a$i' value='$sep'>";
						}
						echo "<br>";
					}
				echo "</div><div class='math'><h4 class='judul'>
							MATRIKS 2
						</h4>";
				for ($a=0; $a < $baris; $a++) { 
					for ($i=0; $i < $kolom; $i++) {
						$tir = '';
						if (isset($_POST['tirsep'.$a.$i]) && $_POST['tirsep'.$a.$i] != null) {
							$tir = $_POST['tirsep'.$a.$i];
						}
						echo "<input type='text' name='tirsep$a$i' value='$tir'>";
					}
					echo "<br>";
				}
				echo "
				</div> <br> <center> <div class='tulis'> Operasi 
							<select name='operasi'>
								<option value='Select Operasi'> Select Operasi
								<option value='Penjumlahan'> Penjumlahan (+)
								<option value='Pengurangan'> Pengurangan (-)
							</select> </div>
				<br> <input type='submit' name='operasinya' value='Hitung'>
							</center>";
				}
				if (isset($_POST['operasinya'])) {
					$operasi = $_POST['operasi'];
					$bariis = $_POST['bariis'];
					$koloom = $_POST['koloom'];
					$watt = null;
					for ($a=0; $a < $bariis; $a++) { 
						for ($i=0; $i < $koloom; $i++) {
							if ($operasi == "Penjumlahan") {
								$watt[$a][$i] = $_POST['septir'.$a.$i] + $_POST['tirsep'.$a.$i];
							} else if ($operasi == "Pengurangan") {
								$watt[$a][$i] = $_POST['septir'.$a.$i] - $_POST['tirsep'.$a.$i];
							} else {
								$watt[$a][$i] = 0;
							}
						}
					}

					//print_r($watt);
					echo "<br><div  class='math'><h4 class='judul'>
							MATRIKS 1
						</h4>";
					for ($a=0; $a < $bariis; $a++) { 
						for ($i=0; $i < $koloom; $i++) {
							echo "<input type='text' name='result$a$i' value='".$_POST['tirsep'.$a.$i]."'>";
						}
						echo "<br>";
					}
					echo "</div><div  class='math'><h4 class='judul'>
							MATRIKS 2
						</h4>";
					for ($a=0; $a < $bariis; $a++) { 
						for ($i=0; $i < $koloom; $i++) {
							echo "<input type='text' name='result$a$i' value='".$_POST['septir'.$a.$i]."'>";
						}
						echo "<br>";
					}
					echo "</div><h4 class='judul'>
							HASIL OPERASI MATRIKS
						</h4> ";
					for ($a=0; $a < $bariis; $a++) { 
						for ($i=0; $i < $koloom; $i++) {
							echo "<input type='text' name='result$a$i' value='".$watt[$a][$i]."'>";
						}
						echo "<br>";
					}
				}
				?>
				</form>
		</div>
	</div>
<?php include 'footer.php'; ?>