<?php

#1.Kiểm tra số nguyên chẵn 

//function check_even($n) {
//    if ($n % 2 == 0)
//        return true;
//    return FALSE;
//}
//
////Gọi hàm
//if (check_even(7))
//    echo "Đây là số nguyên chẵn";
//else
//    echo " Đây là số nguyên lẻ ";
#2. Tính tổng cách số nguyên tố từ 2 -> $n ($n>=2)
//Số nguyên tố
//1 2 3 4 6 7 ... $n
//$n = $x *$y

function check_prim($n) {
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0)
            return false;
    }
    return true;
}

function total_prim($n) {
    $t = 0;
    for ($i = 2; $i <= $n; $i++) {
        if (check_prim($i))
            $t += $i;
    }
    return $t;
}

echo total_prim(15);