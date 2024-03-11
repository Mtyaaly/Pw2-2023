<?php

     function hitungluas($alas,$tinggi) {
        $luas = $alas * $tinggi / 2;
        return $luas;
     }

     function deteksisegitiga($alas,$tinggi) {
        if($alas == $tinggi) {
            return "segitiga sama sisi";
        }elseif ($alas == 0.5 * $tinggi || $tinggi == 0.5 * $alas) {
            return "segitiga siku-siku";
        }else {
            return "segitiga sembarang";
        }
     }

?>