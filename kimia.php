<?php error_reporting(0); include 'header.php'; ?>
		<div class="row">
			<div class="col-md-3">
				<h2 class="bk-judulpage">Menu</h2>
				<ul class="bk-menu-list">
					<li>
						<a href="index.php"><img src="assets/img/icon/kembali.png">Kembali</a>
					</li>
					<li>
						<a href="kimia.php"><img src="assets/img/icon/kimia.png">Kimia</a>
					</li>
				</ul>
			</div>
			<div class="col-md-9">
				<h2 class="bk-judulpage">Konfigurasi Dan Struktur Atom</h2>
		<table>
			<tr>
				<td rowspan="3"> <b class="bk-atom"><sup>A</sup><sub>Z</sub>X</b> </td>
				<td width="30px" rowspan="3"> </td>
				<td> X = Lambang Atom </td>
				<td width="30px"> </td>
				<td> Jumlah Proton = Nomor Atom </td>
			</tr>
			<tr>
				<td> A = Nomor Massa </td>
				<td width="30px"> </td>
				<td> Jumlah Elektron = Nomor Atom </td>
			</tr>
			<tr>
				<td> Z = Nomor Atom </td>
				<td width="30px"> </td>
				<td> Jumlah Neutron = Nomor Massa - Nomor Atom </td>
			</tr>
		</table>
		<table>			
		<form method="post">
				<tr height="80px">
					<td class="tulis">  
						<b>Pilih Nama Unsur</b>
					</td>
					<td> : </td>
					<td colspan="3">
						&nbsp;&nbsp;<select name='pilunsur'>
							<option value='Select Unsur'> Select Unsur
							<option value='Oksigen (O)' <?php if ($_POST['pilunsur'] == 'Oksigen (O)') { echo 'selected'; } ?>> Oksigen (O)
							<option value='Hidrogen (H)' <?php if ($_POST['pilunsur'] == 'Hidrogen (H)') { echo 'selected'; } ?>> Hidrogen (H)
							<option value='Carbon (C)' <?php if ($_POST['pilunsur'] == 'Carbon (C)') { echo 'selected'; } ?>>	Carbon (C)
							<option value='Kalsium (Ca)' <?php if ($_POST['pilunsur'] == 'Kalsium (Ca)') { echo 'selected'; } ?>> Kalsium (Ca)
							<option value='Aluminium (Al)' <?php if ($_POST['pilunsur'] == 'Aluminium (Al)') { echo 'selected'; } ?>> Aluminium (Al) 
							<option value='Kalium (K)' <?php if ($_POST['pilunsur'] == 'Kalium (K)') { echo 'selected'; } ?>> Kalium (K)
							<option value='Aurum (Au)' <?php if ($_POST['pilunsur'] == 'Aurum (Au)') { echo 'selected'; } ?>> Aurum (Au)
							<option value='Magnesium (Mg)' <?php if ($_POST['pilunsur'] == 'Magnesium (Mg)') { echo 'selected'; } ?>>	Magnesium (Mg)
							<option value='Neon (Ne)' <?php if ($_POST['pilunsur'] == 'Neon (Ne)') { echo 'selected'; } ?>> Neon (Ne)
							<option value='Nitrogen (N)' <?php if ($_POST['pilunsur'] == 'Nitrogen (N)') { echo 'selected'; } ?>> Nitrogen (N)
						</select>
						<input type='Submit' name='submit' value='Tampilkan'>

					</td>
				</tr>
			<?PHP
				
				$pilihanunsur = $_POST['pilunsur'];
				if ($pilihanunsur != null) {
					if ($pilihanunsur == "Oksigen (O)") {
						$massa = 16;
						$atom = 8;
						$neutron = $massa - $atom ;
						$x = "O";
					} else if($pilihanunsur == "Hidrogen (H)"){
						$massa = 2;
						$atom = 1;
						$x = "H";
						$neutron = $massa - $atom ;
					} else if($pilihanunsur == "Carbon (C)"){
						$massa = 12 ;
						$atom = 6;
						$x = "C";
						$neutron = $massa - $atom ;
					} else if($pilihanunsur == "Kalsium (Ca)"){
						$massa = 40;
						$atom = 20;
						$x = "Ca";
						$neutron = $massa - $atom ;
					} else if($pilihanunsur == "Aluminium (Al)"){
						$massa = 27;
						$atom = 13;
						$x = "Al";
						$neutron = $massa - $atom ;
					}else if($pilihanunsur == "Kalium (K)"){
						$massa = 40;
						$atom = 19;
						$x = "K";
						$neutron = $massa - $atom ;
					} else if($pilihanunsur == "Aurum (Au)"){
						$massa = 197;
						$atom = 79;
						$x = "Au";
						$neutron = $massa - $atom ;
					}else if($pilihanunsur == "Magnesium (Mg)"){
						$massa = 12 ;
						$atom = 24;
						$x = "Mg";
						$neutron = $massa - $atom ;
					} else if($pilihanunsur == "Neon (Ne)"){
						$massa = 20;
						$atom = 10;
						$x = "Ne";
						$neutron = $massa - $atom ;
					} else if($pilihanunsur == "Nitrogen (N)"){
						$massa = 14;
						$atom = 7;
						$x = "N";
						$neutron = $massa - $atom ;
					}
					echo "
						<tr height='30px'>
							<td class='tulis' rowspn='3'>
								<h4><b>$pilihanunsur</b></h4>
							</td>
						</tr>
						<tr>
						<td colspan='3'><b class='bk-atom'><sup>$massa</sup><sub>$atom</sub>$x</b></td>
						</tr>
						<tr>
							<td class='tulis'>
								Nomor Massa (A)
							</td>
							<td class='tulis'>
								:
							</td>
							<td class='my'>
								&nbsp $massa
							</td>	
						</tr>
						<tr>
							<td class='tulis'>
								Nomor Atom (Z)
							</td>
							<td class='tulis'>
								:
							</td>
							<td class='my'>
								&nbsp $atom
							</td>	
						</tr>
						<tr>
							<td class='tulis'>
								Jumlah Elektron (e) {e=Z}
							</td>
							<td class='tulis'>
								:
							</td>
							<td class='my'>
								&nbsp $atom
							</td>	
						</tr>
						<tr>
							<td class='tulis'>
								Jumlah Proton (p) {p=Z}
							</td>
							<td class='tulis'>
								:
							</td>
							<td class='my'>
								&nbsp $atom
							</td>	
						</tr>
						<tr>
							<td class='tulis'>
								Jumlah Neutron (n) {n=A-Z}&nbsp;&nbsp;
							</td>
							<td class='tulis'>
								:
							</td>
							<td class='my'>
								&nbsp $neutron
							</td>	
						</tr>
					";
				}
		?>
		</form>
		</table>
		</div>
	</div>

<?php include 'footer.php'; ?>