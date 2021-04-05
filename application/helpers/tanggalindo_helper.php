<?php
function format_tgl($thedate) {
       $hari=substr($thedate,0,2);
       //untuk dapatkan hari yg di posisi 5 sbnyk 2 krktr
       $bulan=substr($thedate,3,2);
       //untuk dapatkan hari yg di posisi 0 sbnyk 4 krktr
       $tahun=substr($thedate,6,4);
       //pengabungan variabel $hari $bulan $tahun
       $tanggal="$tahun-$bulan-$hari ";
       //fungsi hasil output variabel $tanggal
       return $tanggal;
   }
function waktuindo ($thedate) {
        $jam=substr($thedate,11,2);
		//untuk dapatkan hari yg di posisi 14 sbnyk 2 krktr
		$menit=substr($thedate,14,2);
		//untuk dapatkan hari yg di posisi 8 sbnyk 2 krktr
		$hari=substr($thedate,8,2);
		//untuk dapatkan hari yg di posisi 5 sbnyk 2 krktr
		$bulan=get_namabulan(substr($thedate,5,2));
		//untuk dapatkan hari yg di posisi 0 sbnyk 4 krktr
		$tahun=substr($thedate,0,4);
		//pengabungan variabel $hari $bulan $tahun
		$tanggal="$hari $bulan $tahun $jam:$menit";
		//fungsi hasil output variabel $tanggal
		return $tanggal;
	}
 function tglindonesia($thedate) {

		$hari=substr($thedate,8,2);
		//untuk dapatkan hari yg di posisi 5 sbnyk 2 krktr
		$bulan=get_namabulan(substr($thedate,5,2));
		//untuk dapatkan hari yg di posisi 0 sbnyk 4 krktr
		$tahun=substr($thedate,0,4);
		//pengabungan variabel $hari $bulan $tahun
		$tanggal="$hari $bulan $tahun ";
		//fungsi hasil output variabel $tanggal
		return $tanggal;
	}
 function arsiptgl($thedate) {

		$bulan=get_namabulan(substr($thedate,5,2));
		//untuk dapatkan hari yg di posisi 0 sbnyk 4 krktr
		$tahun=substr($thedate,0,4);
		//pengabungan variabel $hari $bulan $tahun
		$tanggal="$bulan $tahun ";
		//fungsi hasil output variabel $tanggal
		return $tanggal;
	}
 function get_namabulan($bulan) {
		switch($bulan) {
		  case 1 : $namabulan="Januari"; break;
		  case 2 : $namabulan="Februari"; break;
		  case 3 : $namabulan="Maret"; break;
		  case 4 : $namabulan="April"; break;
		  case 5 : $namabulan="Mei"; break;
		  case 6 : $namabulan="Juni"; break;
		  case 7 : $namabulan="Juli"; break;
		  case 8 : $namabulan="Agustus"; break;
		  case 9 : $namabulan="September";break;
		  case 10 : $namabulan="Oktober";break;
		  case 11 : $namabulan="November"; break;
		  case 12 : $namabulan="Desember"; break;
		} return $namabulan;
	}
 function get_hari($bulan) {
		switch($bulan) {
		  case 1 : $namabulan="Ahad"; break;
		  case 2 : $namabulan="Senin"; break;
		  case 3 : $namabulan="Selasa"; break;
		  case 4 : $namabulan="Rabu"; break;
		  case 5 : $namabulan="Kamis"; break;
		  case 6 : $namabulan="Jum'at"; break;
		  case 7 : $namabulan="Sabtu"; break;
		} return $namabulan;
	}
function tglform($thedate) {

		$hari=substr($thedate,8,2);
		//untuk dapatkan hari yg di posisi 5 sbnyk 2 krktr
		$bulan=substr($thedate,5,2);
		//untuk dapatkan hari yg di posisi 0 sbnyk 4 krktr
		$tahun=substr($thedate,0,4);
		//pengabungan variabel $hari $bulan $tahun
		$tanggal="$hari-$bulan-$tahun ";
		//fungsi hasil output variabel $tanggal
		return $tanggal;
	}
