<?php

	// Edited with github

	// output
	echo "Belajar PHP<br>";
	print_r("Output dengan Print R<br>");
	var_dump("Output dengan var dump");

	// Komentar
	// Komentar satu baris
	/* 
		Komentar lebih dari satu baris
		
		Komentar digunakan untuk memberikan 
		keterangan program, komentar tidak di
		dijalankan waktu program dijalankan.
	*/


	// Variabel
	/*
		Variabel digunakan untuk menyimpan nilai / memori yang nantinya dapat di panggil kembali, nilai didalam variabel dapat berubah - ubah selama program berjalan.
	*/

	// Mendeklarasikan Variabel
	$buah = "Jeruk";
	echo $buah;

	$buah .= " dan Apel";
	echo $buah;

	echo "<br>";

	// Tipe data
	// String
	/* String adalah tipe data yang diisi 
			karakter - karakter.
			String di dalam PHP harus di apit tanda pertik 1 (') atau petik 2 (").
	*/
	// Integer
	/*
		Integer adalah tipe data yang diisi bilangan bulat.
	*/
	// Float
	/*
		Float adalah tipe data yang diisi bilangan pecahan.
	*/
	// Boolean
	/*
		Boolean tipe data yang hanya memiliki 2 Nilai = TRUE dan FALSE
	*/

	var_dump('Ini tipe data string');
	echo "<br>";
	var_dump(50);
	echo "<br>";
	var_dump(50.7);
	echo "<br>";
	var_dump(TRUE);

	// Pengkondisian
	if(TRUE){
		echo "Kondisi pertama benar";
	}
	elseif(TRUE){
		echo "Kondisi kedua benar";
	}
	else{
		echo "Semua Kondisi salah";
	}
	echo "<br>";
	// Operator == 
	$nilai1 = 80;
	$nilai2 = "80";
	if($nilai1 === $nilai2) {
		echo "Nilai sama";
	}else{
		echo "Nilai tidak sama";
	}
	echo "<br>";

	// Operator >
	$nilai1 = 90;
	$nilai2 = 100;
	if($nilai1 > $nilai2) {
		echo "Nilai 1 Lebih besar";
	}else{
		echo "Nilai 1 lebih kecil";
	}

	echo "<br>";
	// Operator <
	$nilai1 = -12;
	$nilai2 = 1;
	if($nilai1 < $nilai2) {
		echo "Nilai 1 Lebih kecil";
	}else{
		echo "Nilai 1 lebih besar";
	}

	echo "<br>";
	// Operator >=
	$nilai1 = 100;
	$nilai2 = 100;
	if($nilai1 >= $nilai2) {
		echo "Nilai 1 Lebih besar / sama";
	}else{
		echo "Nilai 1 tidak lebih besar / sama";
	}
	echo "<br>";
	// Operator <=
	$nilai1 = 90;
	$nilai2 = 100;
	if($nilai1 <= $nilai2) {
		echo "Nilai 1 Lebih kecil / sama";
	}else{
		echo "Nilai 1 tidak lebih kecil / sama";
	}
	echo "<br>";
	// Operator !=
	$nilai1 = 90;
	$nilai2 = 100;
	if($nilai1 != $nilai2) {
		echo "Nilai 1 tidak sama dengan nilai 2";
	}else{
		echo "Nilai 1 sama dengan nilai 2";
	}


	echo "<br>";
	$nilai1 = TRUE;
	$nilai2 = FALSE;
	if( $nilai1 && $nilai2 ) {
		echo "Kondisi benar";
	}else{
		echo "Kondisi Salah";
	}

	echo "<br>";
	$nilai1 = TRUE;
	$nilai2 = FALSE;
	if( $nilai1 || $nilai2 ) {
		echo "Kondisi benar / salah satu benar";
	}else{
		echo "Semua kondisi salah";
	}
	echo "<br>";
	$nilai1 = FALSE;
	$nilai2 = TRUE;
	$nilai3 = FALSE;
	if( $nilai1 || $nilai2 || $nilai3 ) {
		echo "Kondisi benar / salah satu benar";
	}else{
		echo "Semua kondisi salah";
	}
	echo "<br>";
	/*
		Jika 	Nilai 0 	-	65 = Gagal
					Nilai 66 	-	79 = Mengulang
					Nilai 80 	-	100= Lulus
	*/
	$nilai_mk = 0;
	if($nilai_mk >= 80 && $nilai_mk <= 100 ){
		echo "Lulus";
	}elseif($nilai_mk >= 66 && $nilai_mk <= 79) {
		echo "Mengulang";
	}elseif($nilai_mk <= 65 && $nilai_mk >= 0) {
		echo "Gagal";
	}else{
		echo "Nilai tidak diketahui";
	}
?>
