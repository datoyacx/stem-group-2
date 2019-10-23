<?php include 'header.php'; ?>
		<div class="row">
			<div class="col-md-3">
				<h2 class="bk-judulpage">Menu</h2>
				<ul class="bk-menu-list">
					<li>
						<a href="index.php"><img src="assets/img/icon/kembali.png">Kembali</a>
					</li>
					<li>
						<a href="periodeget.php"><img src="assets/img/icon/fisika.png">Periode Getaran</a>
					</li>				
					<li>
						<a href="frekuansiget.php"><img src="assets/img/icon/fisika.png">Frekuensi Getaran</a>
					</li>
					<li>
						<a href="getaran.php"><img src="assets/img/icon/fisika.png">Frekuensi & Periode</a>
					</li>
				</ul>
			</div>
			<div class="col-md-9">
				<h2 class="bk-judulpage">Frekuensi Getaran</h2>
			
				<form method="post">
				<table>
					<tr> <td colspan="9"> 
					<b> Frekuensi</b> memiliki rumus f = n / t <br>
					f = frekuensi <br>
					n = jumlah getaran <br>
					t = waktu
					</td>
					</tr>
					<tr height="50px">
						<td class="tulis"> CARI </td>
						<td class="tulis"> <center> : </center> </td>
						<td> 
							<select name='pilrum2' class="fis">
							<option > Select Rumus
							<option value='Frekuansi02'> Frekuansi (f)
							<option value='Waktu02'> Waktu (t)
							<option value='Jumlah Getaran02'>	Jumlah Getaran (n)
						</select>
						</td>
						<td colspan="3"> <center> <input type="submit" name="oke1" value="Tampilkan"> </center> </td>
					</tr>
					<?PHP					
					if (isset($_POST['oke1'])) {
					$sha = $_POST['pilrum2'];
						if ($sha == "Frekuansi02") {
							echo "
								<tr width='50px'>										
									<td colspan='9'> <center class='notif'> Frekuensi f= n/t </center> </td>
								</tr>
								<tr width='50px'>						
									<td class='tulis'> Jumlah Getaran (n) </td>		
									<td width='20px'> </td>		
									<td class='tulis'> <center> Waktu (t) </center> </td>
								</tr>
								<tr>
									<td> <center> <input type='text' name='getaranfrek'> </center> </td>
									<td width='20px'> </td>
									<td> <center> <input type='text' name='waktufrek'> </center> </td>
									<td> <input type='submit' name='htgfrek' Value='HITUNG'> </td>
								</tr>
						";
						} else if($sha == "Waktu02") {
							echo "
								<tr width='50px'>										
									<td colspan='9'> <center class='notif'>  Waktu t=n/f </center> </td>
								</tr>
								<tr width='50px'>			
									<td class='tulis'> Jumlah Getaran (n) </td>
									<td width='20px'> </td>							
									<td class='tulis'> <center> Frekuensi (f) </center> </td>
								</tr>
								<tr>
									<td> <center> <input type='text' name='getaranwak'> </center> </td>
									<td width='20px'> </td>
									<td> <center> <input type='text' name='frekuensiwak'> </center> </td>
									<td> <input type='submit' name='htgwak2' Value='HITUNG'> </td>
								</tr>
						";
						} else if ($sha == "Jumlah Getaran02") {
							echo "
								<tr width='50px'>										
									<td colspan='9'> <center class='notif'>  Jumlah Getaran n=f*t </center> </td>
								</tr>
								<tr width='50px'>										
									<td class='tulis'> <center> Frekuensi (f) </center> </td>
									<td width='20px'> </td>
									<td class='tulis'> <center> Waktu (t) </center> </td>
								</tr>
								<tr>
									<td> <center> <input type='text' name='frekuensiget'> </center> </td>
									<td width='20px'> </td>
									<td> <center> <input type='text' name='waktuget'> </center> </td>
									<td> <input type='submit' name='htgget2' Value='HITUNG'> </td>
								</tr>	
						";
						} else {
							echo "<td colspan='6'> <center class='notif'> ISI RUMUS TERLEBIH DAHULU </center> </td>";
						}
						
					}
					if (isset($_POST['htgfrek'])) {
						$waktufrek = $_POST['waktufrek'];
						$getaranfrek = $_POST['getaranfrek'];
						$hslfrek = $getaranfrek / $waktufrek;
						echo"
								<tr width='50px'>										
									<td colspan='9'> <center class='notif'>  Frekuensi f= n/t </center> </td>
								</tr>
						<tr height='40px'>
							<td class='tulis'> Jml Getaran (n) </td>
							<td width='20px'> </td>
							<td class='tulis'> <center> Waktu (t) </center> </td>
							<td width='20px'> </td>
							<td class='tulis'>Frekuensi (f=n/t) </td>
						</tr>
						<tr>
							<td class='my'> $getaranfrek </td>
							<td width='20px'> </td>
							<td class='my'> $waktufrek </td>
							<td width='20px'> </td>
							
						";
						?>
						<td class='my'> <?php echo(round($hslfrek,2)); ?></td>
						</tr>
						<?php
					}
					if (isset($_POST['htgwak2'])) {
						$frekuensiwak = $_POST['frekuensiwak'];
						$getaranwak = $_POST['getaranwak'];
						$hslwak = $getaranwak / $frekuensiwak;
						echo"
								<tr width='50px'>										
									<td colspan='9'> <center class='notif'>  Waktu t=n/f </center> </td>
								</tr>
						<tr height='40px'>
							<td class='tulis'> <center> Jml Getaran (n) </center> </td>
							<td width='20px'> </td>
							<td class='tulis'> <center> Frekuensi (f) </center> </td>
							<td width='20px'> </td>
							<td class='tulis'> <center> Waktu (t=n/f) </center> </td>
						</tr>
						<tr>
							<td class='my'> $getaranwak </td>
							<td width='20px'> </td>
							<td class='my'> $frekuensiwak </td>
							<td width='20px'> </td>
							
						";
						?>
						<td class='my'> <?php echo(round($hslwak,2)); ?></td>
						</tr>
						<?php
					}
					if (isset($_POST['htgget2'])) {
						$frekuensiget = $_POST['frekuensiget'];
						$waktuget = $_POST['waktuget'];
						$hslget = $waktuget * $frekuensiget;
						echo"
								<tr width='50px'>										
									<td colspan='9'> <center class='notif'>  Jumlah Getaran n=f*t </center> </td>
								</tr>
						<tr height='40px'>
							<td class='tulis'> <center> Frekuensi (f) </center> </td>
							<td width='20px'> </td>
							<td class='tulis'> <center> Waktu (t) </center> </td>
							<td width='20px'> </td>
							<td class='tulis'> <center> Jml Getaran (n=f*t) </center> </td>
						</tr>
						<tr>
							<td class='my'> $frekuensiget </td>
							<td width='20px'> </td>
							<td class='my'> $waktuget </td>
							<td width='20px'> </td>
							
						";
						?>
						<td class='my'> <?php echo(round($hslget,2)); ?></td>
						</tr>
						<?php
					}
					?>							
				</table>
				</form>
			</div>
		</div>
<?php include 'footer.php'; ?>