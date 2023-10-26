<?php 
  $hotels = [

      [
          'name' => 'Hotel Belvedere',
          'description' => 'Hotel Belvedere Descrizione',
          'parking' => true,
          'vote' => 4,
          'distance_to_center' => 10.4
      ],
      [
          'name' => 'Hotel Futuro',
          'description' => 'Hotel Futuro Descrizione',
          'parking' => true,
          'vote' => 2,
          'distance_to_center' => 2
      ],
      [
          'name' => 'Hotel Rivamare',
          'description' => 'Hotel Rivamare Descrizione',
          'parking' => false,
          'vote' => 1,
          'distance_to_center' => 1
      ],
      [
          'name' => 'Hotel Bellavista',
          'description' => 'Hotel Bellavista Descrizione',
          'parking' => false,
          'vote' => 5,
          'distance_to_center' => 5.5
      ],
      [
          'name' => 'Hotel Milano',
          'description' => 'Hotel Milano Descrizione',
          'parking' => true,
          'vote' => 2,
          'distance_to_center' => 50
      ],

  ];

  $searchPark = isset($_GET["searchPark"]) && $_GET["searchPark"] === "on"  ? true : false;
  var_dump($searchPark);

  // se il searchPark è abilitato modifico il mio array hotels
  if ($searchPark) {
    foreach($hotels as $key => $value){
      // se ha il parcheggio lo metto nel mio array
      if ($value["parking"]) {
        $newArray[] = $value;
      }
    }
    $hotels = $newArray;
  }

  $searchVote = $_GET["searchVote"];
  var_dump($searchVote);

  foreach($hotels as $key => $value){
    // se ha il parcheggio lo metto nel mio array
    if ($value["vote"] >=  $searchVote) {
      $newArray[] = $value;
    }
  }
  $hotels = $newArray;
  

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  <title>PHP Hotel</title>
</head>
<body>
  <div class="container">
    
    <h1>PHP Hotel</h1>

    <form action="index.php" method="get">

      <div class="form-check">
        <input class="form-check-input" type="checkbox" name="searchPark" id="flexCheckDefault">
        <label class="form-check-label" for="flexCheckDefault">
          with parking
        </label>
      </div>

      <label for="inputVote" class="form-label">Vote</label>
      <select name="searchVote" id="inputVote" class="form-select">
        <option value=0>0</option>
        <option value=1>1</option>
        <option value=2>2</option>
        <option value=3>3</option>
        <option value=4>4</option>
        <option value=5>5</option>
      </select>

      <button type="submit" class="btn btn-primary">Filtra</button>
    </form>
  
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Name</th>
          <th scope="col">Description</th>
          <th scope="col">Parking</th>
          <th scope="col">Vote</th>
          <th scope="col">Distance to center</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($hotels as $hotel):?>
        <tr>
          <td><?php echo $hotel["name"] ?></td>
          <td><?php echo $hotel["description"] ?></td>
          <td><?php echo $hotel["parking"] ? "Si" : "No" ?></td>
          <td><?php echo $hotel["vote"] ?></td>
          <td><?php echo $hotel["distance_to_center"] ?></td>
        </tr>
        <?php endforeach ?>
      </tbody>
    </table>

  </div>
</body>
</html>