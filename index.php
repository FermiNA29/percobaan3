<?php

/*
Buatlah sebuah function hitung() yang menerima satu parameter berupa string. Function akan menghitung hasil sesuai string tersebut dan mengembalikan nilai hasil perhitungannya. String tersebut hanya menerima 1 operasi perhitungan saja yaitu operasi sebagai berikut: (*) perkalian, (*) pembagian, (+) penjumlahan, (-) pengurangan, dan (%) modulus.
ATURAN : Wajib menyertakan pseudocode atau algoritma sederhana menggunakan list langkah pengerjaan. Jika kode berjalan tapi tidak menyertakan algoritma/pseudcode maka poin gugur.

*/
  function hitung($string_data)
  {
    $pattern = "/[*\s:\s%\s\-\s]/";
    $angka = preg_split($pattern, $string_data);
    $oprt = strpos($string_data, "+");

  }
 
  // TEST CASES
//   echo hitung("102*2"); //204
  echo hitung("2+3"); //5
//   echo hitung("100:25"); //4
//   echo hitung("10%2"); //5
//   echo hitung("99-2"); //97
?>

<?php
/*
Buatlah sebuah function perolehan_medali() yang menerima satu parameter berupa array multidimensi yang berisi nama negara dan perolehan medali. function akan menghitung jumlah medali emas, perak dan perunggu per negara. function akan me-return sebuah array berisi array asosiatif per-negara disertai jumlah masing-masing perolehan medal. jika tidak ada data pada array yang diinputkan di parameter, maka function me-return "no data"
Total Poin 10 : Pseudocode/Algoritma (3 poin) + Jawaban benar/kode berjalan (7 poin)
*/

/**
 * CONTOH:
 * perolehan_medali(
 *  array(
 *    array('Indonesia', 'emas'),
 *    array('India', 'perak'),
 *    array('Korea Selatan', 'emas' ),
 *    array('India', 'perak'),
 *    array('India', 'emas'),
 *    array('Indonesia', 'perak'),
 *    array('Indonesia', 'emas'),
 *  )
 * );
 *
 * output:
 * Array(
 *    Array (
 *      [negara] => 'Indonesia'
 *      [emas] => 2
 *      [perak] => 1
 *      [perunggu] => 0
 *    ),
 *    Array (
 *      [negara] => 'India'
 *      [emas] => 1
 *      [perak] => 2
 *      [perunggu] => 0
 *    ),
 *    Array (
 *      [negara] => 'Korea Selatan'
 *      [emas] => 1
 *      [perak] => 0
 *      [perunggu] => 0
 *    )
 * )
 *
 *
 */
 
function perolehan_medali($arr){
  // Kode kamu di sini
}
 
 
 // TEST CASES
 print_r (perolehan_medali(
   array(
    array('Indonesia', 'emas'),
    array('India', 'perak'),
    array('Korea Selatan', 'emas' ),
    array('India', 'perak'),
    array('India', 'emas'),
    array('Indonesia', 'perak'),
    array('Indonesia', 'emas')
   )
  ));
/**
 * output:
 * Array(
 *    Array (
 *      [negara] => 'Indonesia'
 *      [emas] => 2
 *      [perak] => 1
 *      [perunggu] => 0
 *    ),
 *    Array (
 *      [negara] => 'India'
 *      [emas] => 1
 *      [perak] => 2
 *      [perunggu] => 0
 *    ),
 *    Array (
 *      [negara] => 'Korea Selatan'
 *      [emas] => 1
 *      [perak] => 0
 *      [perunggu] => 0
 *    )
 * )
 */
 
 print_r(perolehan_medali([])); // no data
?>