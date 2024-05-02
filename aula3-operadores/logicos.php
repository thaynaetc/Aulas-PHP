<?php
    //logicos e (&&), ou (||) nao (!)

    $res = ((10 <= 5) || (10==20)) && (5 == 5);
    var_dump($res);

    $res2 = !$res;
    var_dump ($res2);
?>