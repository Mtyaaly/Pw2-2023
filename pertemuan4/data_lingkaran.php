<?php
    require_once 'class_lingkaran.php';

   echo "Nilai php". Lingkaran::PHI;


   $lingkar1 = new Lingkaran(7);
   $lingkar2 = new Lingkaran(68);

   echo '<br>Luas Lingkaran 1=' . $lingkar1->getLuas() . 'cm';
   echo '<br>keliling Lingkaran 1=' . $lingkar1->getKel() . 'cm';
   echo '<br>Luas Lingkaran 2=' . $lingkar2->getLuas() . 'cm';
   echo '<br>keliling Lingkaran 2=' . $lingkar1->getKel() . 'cm';


?>
