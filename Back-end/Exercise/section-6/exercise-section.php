<?php
#Bài tập 1
//Tính tổng các số chẵn 
//T = 2 + 4 + 6 + ..+n (n>=2)
// Cách 1
//$t = 0;
//$n = 10;
//for($i = 2 ; $i <= $n; $i++ ){
//    if($i % 2 == 0){
//        $t += $i;
//    }
//}
//echo "Tổng các số chẵn trong dẫy số là {$t}";

//Cách 2
//for($i = 2 ; $i <= $n; $i+=2 ){
//        $t += $i;
//}
//echo "Tổng các số chẵn trong dẫy số là {$t}";

#Bài tập 2
//T = 1/3 + 1/6 + .. +1/n (n>=3)
// Cách 1
//$t1 = 0;
//$n = 6;
//for($i = 3 ; $i <= $n; $i++ ){
//    if($i % 3 == 0){
//        $t1 +=(1/$i);
//    }
//}
//echo "Tổng các số trong dẫy số là {$t1}";

// Cách 2
//$t1 = 0;
//$n = 6;
//for($i = 3 ; $i <= $n; $i+=3 ){
//        $t1 +=(1/$i);
//}
//echo "Tổng các số trong dẫy số là {$t1}";

#Bài tập 3
//T2 = 1/2 + 2/3 + .. + n/n+1 (n>=1)
// Cách 1
$t2 = 0;
$n = 2;
for($i = 1 ; $i <= $n; $i++ ){
        $t2 +=($i/($i+1));
}
echo "Tổng các số trong dẫy số là {$t2}";