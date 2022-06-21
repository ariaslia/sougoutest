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
    //$webService['sns'][0]['users'][0]['name'];
    $webService =[
        "sns"=>[
            0=>[
                "users"=>[
                    0=>[
                        "name"=>"aida",
                        "id"=>1,
                    ],
                    1=>[
                        "name"=>"ito",
                        "id"=>2,
                    ],
                ],
                "device"=>[
                    0=>[
                        "name"=>"phone",
                        "priority"=>"1",
                    ],
                    1=>[
                        "name"=>"PC",
                        "priority"=>"2",
                    ],
                ],
            ],
            1=>[
                "users"=>[
                    0=>[
                        "name"=>"ueda",
                        "id"=>3,
                    ],
                    1=>[
                        "name"=>"eda",
                        "id"=>4,
                    ],
                ],
                "device"=>[
                    0=>[
                        "name"=>"phone",
                        "priority"=>"1",
                    ],
                    1=>[
                        "name"=>"PC",
                        "priority"=>"2",
                    ],
                ],
            ],
        ],
        "app"=>[
            0=>[
                "users"=>[
                    0=>[
                        "name"=>"kaida",
                        "id"=>5,
                    ],
                    1=>[
                        "name"=>"kikuda",
                        "id"=>6,
                    ],
                ],
                "device"=>[
                    0=>[
                        "name"=>"phone",
                        "priority"=>"1",
                    ],
                    1=>[
                        "name"=>"PC",
                        "priority"=>"2",
                    ],
                ],
            ],
            1=>[
                "users"=>[
                    0=>[
                        "name"=>"kusuda",
                        "id"=>7,
                    ],
                    1=>[
                        "name"=>"keida",
                        "id"=>8,
                    ],
                ],
                "device"=>[
                    0=>[
                        "name"=>"phone",
                        "priority"=>"1",
                    ],
                    1=>[
                        "name"=>"PC",
                        "priority"=>"2",
                    ],
                ],
            ],

        ],

    ];

    echo $webService['sns'][0]['users'][0]['name'];
    





?>

