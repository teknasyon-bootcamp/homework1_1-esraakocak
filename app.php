
<?php 

$age =25;


//değer aralıklarına bakılır ve ekrana yas grubunun ismi yazılır
if($age >=0 && $age <= 14 ) {  //0-14 = Çocuk 
    echo "Cocuk";
}
elseif($age >=15 && $age <= 24) { //15-24 = Genç
    echo "Genc";

} 
elseif($age >=25 && $age <= 64) { //25-64 = Yetişkin
    echo "Yetiskin";

} else   //65+ = Yaşlı
   echo "Yasli"

?>


