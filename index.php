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
  
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">First</th>
          <th scope="col">Last</th>
          <th scope="col">Handle</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
        </tr>
      </tbody>
    </table>
    
  </div>
</body>
</html>