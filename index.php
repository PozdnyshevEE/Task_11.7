<?php
    $a1 = 0; $a2 = 0; $a3 = 1; $a4 = 1;
    $b1 = 0; $b2 = 1; $b3 = 0; $b4 = 1;
    $denial1 = !$a1; $denial2 = !$a2; $denial3 = !($a3); $denial4 = !$a4;
    $and1 = ($a1 && $b1); $and2 = ($a2 && $b2); $and3 = ($a3 && $b3); $and4 = ($a4 && $b4);
    $or1 = ($a1 || $b1); $or2 = ($a2 || $b2); $or3 = ($a3 || $b3); $or4 = ($a4 || $b4);
    $xor1 = ($a1 xor $b1); $xor2 = ($a2 xor $b2); $xor3 = ($a3 xor $b3); $xor4 = ($a4 xor $b4);
    require_once('index.html');
?>