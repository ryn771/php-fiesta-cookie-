<?php
$favorite=array('Bulbasaur','Ivysaur');

$animal=array(
    array(
        'species'=>'Bulbasaur',
        'type1'=>'Grass',
        'type2'=>'Poison',
        'ability'=>'Overgrow',
        'hp'=>45,
        'attack'=>49,
        'defence'=>49,
    ),
    array(
        'species'=>'Ivysaur',
        'type1'=>'Grass',
        'type2'=>'Poison',
        'ability'=>'Overgrow',
        'hp'=>60,
        'attack'=>62,
        'defence'=>63,
    ),
    array(
        'species'=>'Venusaur',
        'type1'=>'Grass',
        'type2'=>'Poison',
        'ability'=>'Overgrow',
        'hp'=>80,
        'attack'=>82,
        'defence'=>83,
    ),
    array(
        'species'=>'Charmander',
        'type1'=>'Fire',
        'type2'=>'N/A',
        'ability'=>'Blaze',
        'hp'=>39,
        'attack'=>52,
        'defence'=>43,
    ),
    array(
        'species'=>'Charmeleon',
        'type1'=>'Fire',
        'type2'=>'N/A',
        'ability'=>'Blaze',
        'hp'=>58,
        'attack'=>64,
        'defence'=>58,
    ),
    array(
        'species'=>'Charizard',
        'type1'=>'Fire',
        'type2'=>'Flying',
        'ability'=>'Blaze',
        'hp'=>78,
        'attack'=>84,
        'defence'=>78,
    ),
    array(
        'species'=>'Squirtle',
        'type1'=>'Water',
        'type2'=>'N/A',
        'ability'=>'Torrent',
        'hp'=>44,
        'attack'=>48,
        'defence'=>65,
    ),
    
    array(
        'species'=>'Wartortle',
        'type1'=>'Water',
        'type2'=>'N/A',
        'ability'=>'Torrent',
        'hp'=>59,
        'attack'=>63,
        'defence'=>80,
    ),
    
    array(
        'species'=>'Blastoise',
        'type1'=>'Water',
        'type2'=>'N/A',
        'ability'=>'Torrent',
        'hp'=>79,
        'attack'=>83,
        'defence'=>100,
    ),
    
    array(
        'species'=>'Caterpie',
        'type1'=>'Bug',
        'type2'=>'N/A',
        'ability'=>'Shield Dust',
        'hp'=>50,
        'attack'=>20,
        'defence'=>55,
    ),
    
);


echo "<pre>";
echo var_dump($animal);
echo var_dump($favorite);

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>01sa.php</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body> <caption>List of Species</caption>
    <div class="container-md">
    <table class="table table-dark table-hover">
      <thead>
              <tr>
                  <th>Id</th>
                  <th>Species</th>
                  <th>Type1</th>
                  <th>Type2</th>
                  <th>Ability</th>
                  <th>Hp</th>
                  <th>Attack</th>
                  <th>Defence</th>
              </tr> 
          </thead>
          <?php 
              $id=1; 
              foreach($animal as $a ){ 
                ?>
            <tbody>
              <tr>
                  <td><?php echo $id;?></td>
                  <td><?php echo $a['species'];?></td>
                  <td><?php echo $a['type1'];?></td>
                  <td><?php echo $a['type2'];?></td>
                  <td><?php echo $a['ability'];?></td>
                  <td><?php echo $a['hp'];?></td>
                  <td><?php echo $a['attack'];?></td>
                  <td><?php echo $a['defence'];?></td>
              </tr>
           
          </tbody>
          <?php 
              $id=$id+1;
            } 
            ?>
      </table>
      </div>
    </body>
</html>