<?php

  $matches = [
    partita1=>[
      casa => ['torino', 73],
      ospite => ['milano',50],
    ],
    partita2=>[
      casa => ['genova', 60],
      ospite => ['milano',50],
    ],
    partita3=>[
      casa => ['napoli', 73],
      ospite => ['pisa',50],
    ],
    partita4=>[
      casa => ['pisa', 73],
      ospite => ['torino',50],
    ],
    partita5=>[
      casa => ['catania', 10],
      ospite => ['trofarello',150],
    ],
    partita6=>[
      casa => ['trofarello', 73],
      ospite => ['catania',10],
    ],
    partita7=>[
      casa => ['genova', 73],
      ospite => ['catania',50],
    ]
  ];


 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>php-snacks-b1</title>
   </head>
   <body>


     <h1>php-snacks-b1</h1>
     <h2>punti partite</h2>
      <ul>
        <?php
        // var_dump($matches);
        foreach ($matches as $match) {
          $casa = $match['casa'][0];
          $ospite = $match['ospite'][0];
          $puntiCasa = $match['casa'][1];
          $puntiOspite = $match['ospite'][1];

          echo "<li>$casa - $ospite | $puntiCasa - $puntiOspite</li>";

        }
        ?>
      </ul>

      <h2>validazione</h2>

      <form class="" action="test.php" method="get">
        <h3>NAME</h3>
        <input type="text" name="name" value="">
        <h3>MAIL</h3>
        <input type="text" name="email" value="">
        <h3>AGE</h3>
        <input type="text" name="age" value=""><br>
        <input type="submit">
      </form>
      <h2>
        <?php
        $name = $_GET['name'];
        $mail = $_GET['email'];
        $age = $_GET['age'];
        if (strlen($name) > 3 && stripos( $mail , '@') && stripos( $mail , '.') && is_numeric ( $age )) {
          echo 'Accesso riuscito';
        }else{
          echo 'Accesso  non riuscito';
        };
        ?>
      </h2>

   </body>
 </html>
