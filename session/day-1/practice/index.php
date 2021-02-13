<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>hello world</h1>
  <?php

  // $a=' <h1>hello world</h1>';
  // echo $a;

  // for($i=1;$i<=10;$i++){
  //   // $c=$i;
  //   // echo $c;
  //   $b="<h2>hello world $i * $i = $i</h2>";
  //   echo $b;
  // }

  //   $v=10;
  //   echo $v;
  //   echo '<br>';
  //   echo ++$v;
  //   echo '<br>';
  //   echo $v;
  //   echo '<br>';
  //   $d=2;
  //   echo $d;
  //   echo '<br>';
  //   echo $d++;
  //   echo '<br>';
  //   echo $d;

    // for($i=1; $i<=10; $i++){
    //   for($j=1; $j<=10;$j++){
    //     $a= "<h1>$i x $j = ". $j*$i ."</h1>";
    //   echo $a;
    //   }
    // }

    // $value=10;
    // if($value ==='10'){
    //   echo "<h1>it's 10</h1>";
    // }
    // else{
    //   echo "<h1>it's not 10</h1>";
    // }
  ?>
  <?php

    $fruits=[8=>"mango",4=>"banana",2=>"licy",0=>"peach"];
    print_r($fruits[4]);
  ?>

  <ul>
  <?php
    foreach($fruits as $value){
      echo "<li>$value</li>";
    }
  ?>
  </ul>
  <!-- rttu -->
  <ul>
  <?php
  $name = ["rikta", "eshita", "lubna", "jarin"];
  print_r($name);
  ?>
  </ul>
  <ul>
    <?php
    foreach($name as $names){
      echo "<li>$names</li>";
    }
    ?>
</body>
</html>