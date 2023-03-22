<?php
function kelulusan ($_nilai){
    // jika nilai rata - rata siswa dibawah 55 berikan perintah tidak lulus
    // jika nilai rata - rata siswa diatas 55 berikan perintah lulus
    if($_nilai <55){
        return 'Tidak lulus';
    }else{
        return 'Lulus';
    }
}
// 1. Buat fungsi grade, lalu kasih keterangan :
// jika nilai diatas 85 - 100 grade A
// jika nilai diatas 70 - 84 grade B
// jika nilai diatas 56 - 69 grade C
// jika nilai diatas 36 - 55 grade D
// jika nilai diatas 10 - 35 grade E
// jika tidak ada nilai cetak I (Anda tidak ada nilai)
function grade($_nilai){
    if($_nilai >= 85){
        return "A";
    }elseif($_nilai >= 70){
        return "B";
    }elseif($_nilai >= 56){
        return "C";
    }elseif($_nilai >= 36){
        return "D";
    }elseif($_nilai >= 10){
        return "E";
    }else{
        return "I(Anda tidak ada nilai)";
    }
}
?>