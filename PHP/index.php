<?php

//問題１
for ($i = 1; $i <= 100; $i++) {
    if($i%15==0){
        echo 'FizzBuzz';
        echo '<br>';
    }else if($i%5==0){
        echo 'Buzz';
        echo '<br>';
    }else if($i%3==0){
        echo 'Fizz';
        echo '<br>';
    }else{
        echo $i;
        echo '<br>';
    }
}

    echo '<hr>';
    //問題２
    for($i=1;$i<=10000;$i++){
		$yakusuu=0;
        //iまでの数字でiを割り続け、約数があれば１をたし、約数の個数が２こになれば素数
		for($j=1;$j<=$i;$j++){
			if($i%$j==0){
                $yakusuu++;
            }
		}
		if($yakusuu==2){
            echo $i.' ';
        }
        
	}

    echo '<hr>';
    //問題３
    //5次元配列
    //一つのものを定義するのに５つの要素を必要とすればよい
    //
    $

    





?>

