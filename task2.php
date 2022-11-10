<?php

function oddCount($num) {
    $oddnum = [];
    for($i = 1; $i < $num; $i++) {
        if ($i%2 != 0) {
            array_push($oddnum, $i);
        }
    }

    foreach($oddnum as $v) {
        echo $v . " ";
    }
}

oddCount(15);