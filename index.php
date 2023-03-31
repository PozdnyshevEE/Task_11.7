<?php
    $a1 = 0; $a2 = 0; $a3 = 1; $a4 = 1;
    $b1 = 0; $b2 = 1; $b3 = 0; $b4 = 1;
    $denial1 = !$a1; $denial2 = !$a2; $denial3 = !($a3); $denial4 = !$a4;
    $and1 = ($a1 && $b1); $and2 = ($a2 && $b2); $and3 = ($a3 && $b3); $and4 = ($a4 && $b4);
    $or1 = ($a1 || $b1); $or2 = ($a2 || $b2); $or3 = ($a3 || $b3); $or4 = ($a4 || $b4);
    $xor1 = ($a1 xor $b1); $xor2 = ($a2 xor $b2); $xor3 = ($a3 xor $b3); $xor4 = ($a4 xor $b4);

    $x1 = true; $x2 = false; $x3 = 1; $x4 = 0; $x5 = -1; $x6 = "1"; $x7 = null; $x8 = "php";
    $y1 = true; $y2 = false; $y3 = 1; $y4 = 0; $y5 = -1; $y6 = "1"; $y7 = null; $y8 = "php";

    $x1y1 = ($x1 == $y1); $x1y2 = ($x1 == $y2); $x1y3 = ($x1 == $y3); $x1y4 = ($x1 == $y4); $x1y5 = ($x1 == $y5);
    $x1y6 = ($x1 == $y6); $x1y7 = ($x1 == $y7); $x1y8 = ($x1 == $y8);

    $x2y1 = ($x2 == $y1); $x2y2 = ($x2 == $y2); $x2y3 = ($x2 == $y3); $x2y4 = ($x2 == $y4); $x2y5 = ($x2 == $y5);
    $x2y6 = ($x2 == $y6); $x2y7 = ($x2 == $y7); $x2y8 = ($x2 == $y8);

    $x3y1 = ($x3 == $y1); $x3y2 = ($x3 == $y2); $x3y3 = ($x3 == $y3); $x3y4 = ($x3 == $y4); $x3y5 = ($x3 == $y5);
    $x3y6 = ($x3 == $y6); $x3y7 = ($x3 == $y7); $x3y8 = ($x3 == $y8);

    $x4y1 = ($x4 == $y1); $x4y2 = ($x4 == $y2); $x4y3 = ($x4 == $y3); $x4y4 = ($x4 == $y4); $x4y5 = ($x4 == $y5);
    $x4y6 = ($x4 == $y6); $x4y7 = ($x4 == $y7); $x4y8 = ($x4 == $y8);

    $x5y1 = ($x5 == $y1); $x5y2 = ($x5 == $y2); $x5y3 = ($x5 == $y3); $x5y4 = ($x5 == $y4); $x5y5 = ($x5 == $y5);
    $x5y6 = ($x5 == $y6); $x5y7 = ($x5 == $y7); $x5y8 = ($x5 == $y8);

    $x6y1 = ($x6 == $y1); $x6y2 = ($x6 == $y2); $x6y3 = ($x6 == $y3); $x6y4 = ($x6 == $y4); $x6y5 = ($x6 == $y5);
    $x6y6 = ($x6 == $y6); $x6y7 = ($x6 == $y7); $x6y8 = ($x6 == $y8);

    $x7y1 = ($x7 == $y1); $x7y2 = ($x7 == $y2); $x7y3 = ($x7 == $y3); $x7y4 = ($x7 == $y4); $x7y5 = ($x7 == $y5);
    $x7y6 = ($x7 == $y6); $x7y7 = ($x7 == $y7); $x7y8 = ($x7 == $y8);

    $x8y1 = ($x8 == $y1); $x8y2 = ($x8 == $y2); $x8y3 = ($x8 == $y3); $x8y4 = ($x8 == $y4); $x8y5 = ($x8 == $y5);
    $x8y6 = ($x8 == $y6); $x8y7 = ($x8 == $y7); $x8y8 = ($x8 == $y8);

    $xx1 = true; $xx2 = false; $xx3 = 1; $xx4 = 0; $xx5 = -1; $xx6 = "1"; $xx7 = null; $xx8 = "php";
    $yy1 = true; $yy2 = false; $yy3 = 1; $yy4 = 0; $yy5 = -1; $yy6 = "1"; $yy7 = null; $yy8 = "php";

    $xx1yy1 = ($xx1 === $yy1); $xx1yy2 = ($xx1 === $yy2); $xx1yy3 = ($xx1 === $yy3); $xx1yy4 = ($xx1 === $yy4); 
    $xx1yy5 = ($xx1 === $yy5); $xx1yy6 = ($xx1 === $yy6); $xx1yy7 = ($xx1 === $yy7); $xx1yy8 = ($xx1 === $yy8);

    $xx2yy1 = ($xx2 === $yy1); $xx2yy2 = ($xx2 === $yy2); $xx2yy3 = ($xx2 === $yy3); $xx2yy4 = ($xx2 === $yy4); 
    $xx2yy5 = ($xx2 === $yy5); $xx2yy6 = ($xx2 === $yy6); $xx2yy7 = ($xx2 === $yy7); $xx2yy8 = ($xx2 === $yy8);

    $xx3yy1 = ($xx3 === $yy1); $xx3yy2 = ($xx3 === $yy2); $xx3yy3 = ($xx3 === $yy3); $xx3yy4 = ($xx3 === $yy4);
    $xx3yy5 = ($xx3 === $yy5); $xx3yy6 = ($xx3 === $yy6); $xx3yy7 = ($xx3 === $yy7); $xx3yy8 = ($xx3 === $yy8);

    $xx4yy1 = ($xx4 === $yy1); $xx4yy2 = ($xx4 === $yy2); $xx4yy3 = ($xx4 === $yy3); $xx4yy4 = ($xx4 === $yy4);
    $xx4yy5 = ($xx4 === $yy5); $xx4yy6 = ($xx4 === $yy6); $xx4yy7 = ($xx4 === $yy7); $xx4yy8 = ($xx4 === $yy8);

    $xx5yy1 = ($xx5 === $yy1); $xx5yy2 = ($xx5 === $yy2); $xx5yy3 = ($xx5 === $yy3); $xx5yy4 = ($xx5 === $yy4);
    $xx5yy5 = ($xx5 === $yy5); $xx5yy6 = ($xx5 === $yy6); $xx5yy7 = ($xx5 === $yy7); $xx5yy8 = ($xx5 === $yy8);

    $xx6yy1 = ($xx6 === $yy1); $xx6yy2 = ($xx6 === $yy2); $xx6yy3 = ($xx6 === $yy3); $xx6yy4 = ($xx6 === $yy4);
    $xx6yy5 = ($xx6 === $yy5); $xx6yy6 = ($xx6 === $yy6); $xx6yy7 = ($xx6 === $yy7); $xx6yy8 = ($xx6 === $yy8);

    $xx7yy1 = ($xx7 === $yy1); $xx7yy2 = ($xx7 === $yy2); $xx7yy3 = ($xx7 === $yy3); $xx7yy4 = ($xx7 === $yy4);
    $xx7yy5 = ($xx7 === $yy5); $xx7yy6 = ($xx7 === $yy6); $xx7yy7 = ($xx7 === $yy7); $xx7yy8 = ($xx7 === $yy8);
    
    $xx8yy1 = ($xx8 === $yy1); $xx8yy2 = ($xx8 === $yy2); $xx8yy3 = ($xx8 === $yy3); $xx8yy4 = ($xx8 === $yy4);
    $xx8yy5 = ($xx8 === $yy5); $xx8yy6 = ($xx8 === $yy6); $xx8yy7 = ($xx8 === $yy7); $xx8yy8 = ($xx8 === $yy8);

    require_once('index.html');
?>