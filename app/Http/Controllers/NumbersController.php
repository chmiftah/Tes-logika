<?php

namespace App\Http\Controllers;

class NumbersController extends Controller
{
    /**
     * Fungsi untuk mengambil bilangan fibonacci ke $n
     *
     * Contoh
     *   - n = 4, Fb(4) = 3
     */
    public function fibonacci($n)
    {
        $fibos = [];
        for ($i = 0; $i <= $n; $i++) {
            if ($i == 0) {
                $fibos[$i] = 0;
            } elseif ($i == 1) {
                $fibos[$i] = 1;
            } else {
                $fibos[$i] = $fibos[$i-1] + $fibos[$i-2];
            }
        }

        return [
            'result' => $fibos[$n],
        ];
    }

    /**
     * buatlah fungsi penjumlahan 2 bilangan dari deret fibonacci
     *
     * - ambil bilangan fibonacci ke $n1
     * - ambil bilangan fibonacci ke $n2
     * - jumlahkan bilangan tersebut
     * - kembalikan hasilnya
     * - contoh
     *     - n1 = 1, Fb(1) = 1
     *     - n2 = 4, Fb(4) = 3
     *     - Fb(1) + Fb(4) = 4
     */
    public function fibonacciProduct($n1, $n2)
    {		
    	$fibos1 = [];
        for ($i = 0; $i <= $n1; $i++) {
            if ($i == 0) {
                $fibos1[$i] = 0;
            } elseif ($i == 1) {
                $fibos1[$i] = 1;
            } else {
                $fibos1[$i] = $fibos1[$i-1] + $fibos1[$i-2];
            }
        }

          $fibos2 = [];
          for ($i = 0; $i <= $n2; $i++) {
            if ($i == 0) {
                $fibos2[$i] = 0;
            } elseif ($i == 1) {
                $fibos2[$i] = 1;
            } else {
                $fibos2[$i] = $fibos2[$i-1] + $fibos2[$i-2];
            }
        }

        $total= $fibos1[$n1]+$fibos2[$n2];

    		  return [

            'n1' => [$n1],
            'fb(n1)'=>$fibos1[$n1],
          	'n2'=>	[$n2],
          	'fb(n2)'=>$fibos2[$n2],

          	'fb(n1) + fb2(n2)'=>$total,
          	



        ];

    }
}
