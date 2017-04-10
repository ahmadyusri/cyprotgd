<?php
	
	$angka = 4;

	if($angka >= 3):
		echo "Variabel angka lebih besar";
	else:
		echo "Variabel angka lebih kecil";
	endif;

	$nilai = 10;
	switch($nilai){
		case 1:
			echo "Variabel nilai = 1";
			break;
		case 9:
			echo "Variabel nilai = 10";
			break;
		case $nilai <= 20:
			echo "Variabel nilai lebih kecil dari 10";
			break;
		default:
			echo "Variabel tidak diketahui";
			break;
	}
	echo "<br>";

	// Perulangan
	/*
		Perulangan digunakan untuk melakukan
		suatu perintah berulang - ulang sesuai
		dengan yang dibutuhkan.
	*/

	// for
	for($nomor = 1;$nomor <= 20;) {
		if($nomor == 10) {
			/* return didalam perulangan digunakan
					untuk memberhentikan perulangan
				 continue didalam perulangan 
				   digunakan untuk men skip /
				   melewatkan perulangan
			*/
			// continue;
		}
		echo "Selamat Datang ".$nomor."<br>";
		$nomor++;
	}

	for($angka=10;$angka>=1;$angka -= 2) {
		echo $angka."<br>";
	}
	/* $nomor++ = Increment yaitu menambahkan 1 
				ke variabel nomor;
		 $nomor-- = Decrement yaitu mengurangkan 1 
				ke variabel nomor;
	*/

	$a = 2;
	while($a <= 5) {
		echo "Nilai a = ".$a;
		$a = $a + 1;
	}

	echo "<br>";
	$b = 2;
	do{
		echo "Perulangan dengan do While<br>";
		$b = $b+1;
	}while($b <= 0);
	echo "<br>";
	for($n= 1; $n<=10;$n++){
		for($o = 1;$o<=20;$o++) {
			echo $n . " " . $o."<br>";
		}
	}

	/*
		Array
			array adalah tipe data yang digunakan
				untuk menyimpan beberapa nilai yang
				berbeda tipe data termasuk array itu 
				sendiri.
	*/

	$buah= array("Jeruk", 
		"Apel",
		1000,
		array("Mangga")
	 );
	var_dump($buah);
	echo "<br>";
	echo $buah[1];
	echo $buah[0];

	$data = array("nama" => "Ahmad Yusri", 
			"alamat" => "Medan"
	);
	echo $data['nama'];
	echo $data['alamat'];

	$sayur = array("Sawi", "Kangkung", "Tomat",
			"Bayam"
		);
	echo "<br>";
	for($index=0;$index < count($sayur);$index++) {
		if( $sayur[$index] != "Tomat" ) {
			echo $sayur[$index]."<br>";
		}else{
			echo $sayur[$index]." tidak boleh tampil<br>";
		}
	}

	$array_multi_dimensi = array(
			array("Data 1 1", "Data 1 2"),
			array("Data 2 1", "Data 2 2", "Data 2 3"),
			array("Data 3 1", "Data 3 2")
		);
	var_dump($array_multi_dimensi);
	echo $array_multi_dimensi[0][0]."<br>";

	for($n= 0; $n<count($array_multi_dimensi);$n++){
		for($o = 0;$o<count($array_multi_dimensi[$n]) ;$o++) {
			echo $array_multi_dimensi[$n][$o]."<br>";
		}
	}
?>