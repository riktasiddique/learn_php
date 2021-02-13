<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day-1(Home Work)</title>
</head>
<body>
<!-- For Loop -->
<ul>
<?php
// using for loop
$a="5 Sentence Printed Using by For loop : ";
echo "<h1>$a</h1>";
for($i=0; $i<=5; $i++){
    $a= "<h2>What's up?</h2>";
    echo $a;
}
$a="Printed a 1 to 5 Using by For loop : ";
echo "<h1>$a</h1>";
for($i=0; $i<=5; $i++){
    $a= "<h1>$i</h1>";
    echo $a;
}
// End For Loop 

// post increment
$a="Post increment: ";
echo "<h1>$a</h1>";
$number=33;
echo $number;
echo "<br>";
echo $number++;
echo "<br>";
echo $number;
echo "<br>";
echo $number++;
echo "<br>";
echo $number;
// pre increment
$a="Pre increment: ";
echo "<h1>$a</h1>";
$number=77;
echo $number;
echo "<br>";
echo ++$number;
echo "<br>";
echo $number;
echo "<br>";
echo ++$number;
// Nested Loop 
$a="Nested Loop ";
echo "<h1>$a</h1>";
for($i=10; $i<=15; $i++){
    for($j=1; $j<=10; $j++){
        $a= "<h1> $i x $j = ". $i*$j ."</h1>";
        echo $a;
    }
}
// If Else  and Ternary Statement
$a="If Else  and Ternary Statement: ";
echo "<h1>$a</h1>";
$a=10;
if($a === 10){
    echo "<h2>It's 10</h2>";
}
else{
    echo "<h2>It's not  10</h2>";
}
$b= "11";
echo $b === 11? "<h2>It's 11</h2>":"<h2>It's not 11</h2>";

// Arry 
$a="Arry: ";
echo "<h1>$a</h1>";
$arry=["rikta", "eshita","sakib","hamza"];
print_r ($arry);
echo "<br>";
echo "<br>";
print_r ($arry[2]);
// Arry: Index change
$a="Arry: Index change ";
echo "<h1>$a</h1>";
$name =[12=>"lubna", 14=> "Ruksana", 99=>"Mitu", 11=> "Sharmin" ];
print_r ($name);
echo "<br>";
echo "<br>";
print_r ($name[14]);
// For Each Statement
$a="For Each Statement: ";
echo "<h1>$a</h1>";
$arry = [
    "100"=> [
        "name"=>"Rikta",
        "city"=>"faridpur"
    ],
    "101"=> [
        "name"=>"eshita",
        "city"=>"gazipur"
    ]
    ];
?>
</ul>
<ul>
<?php
foreach($arry as $id=>$a){
    echo "<li> ID: $id ". $a["city"]." </li>";
}
?>
</ul>
<?php
$informstions=[
    "171002024"=>[
        "name"=>"Rikta Akter",
        "Dept"=> "CSE",
        "blood group"=> "0(+ve)",
        "home"=>[
            "distrect"=>"Faridpur",
            "Thana"=> "Bhanga",
        ],
        "SSC"=>[
            "group"=>"science",
            "result"=>"4.44",
            "school"=> "Bhanga Model Pilot High School"
        ],
        "HSC"=>[
            "group"=>"science",
            "result"=>"4.50",
            "school"=> "Uttara Model Collage"
        ]
        ],
    "171002027"=>[
        "name"=>"Nosrat Eshita",
        "Dept"=> "CSE",
        "blood group"=> "B(+ve)",
        "home"=>[
            "distrect"=>"Gazipur",
            "Thana"=> "somewhere",
        ],
        "SSC"=>[
            "group"=>"science",
            "result"=>"4.48",
            "school"=> "Gazipur Model Pilot High School"
        ],
        "HSC"=>[
            "group"=>"science",
            "result"=>"4.55",
            "school"=> "Mohammadpur Model Collage"
        ]
    ]
        ];
echo "<ul>";
$a="Foreach :";
echo "<h1>$a</h1>";
foreach($informstions as $infor => $informstion){
    echo "<li> ID: $infor </li>";
    echo "<li> ID: $infor Department: ". $informstion["Dept"] ." Bloodgroup: ". $informstion["blood group"] ." Address: ". $informstion["home"]["Thana"] ." ". $informstion["home"]["Thana"] ."</li>";
}
echo "</ul>";

?>
</body>
</html>