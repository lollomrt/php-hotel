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
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Hotel</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="./style/style.css">
    </head>
    <body>
        <div class="container-fluid d-flex align-items-center justify-content-center h-100vh">
            <div class="w-75">
                <div class="row">
                    <div class="col-100">
                        <table class="table table-striped table-bordered">
                            <thead class="text-uppercase table-primary">
                                <tr>
                                    <th scope="col">name</th>
                                    <th scope="col">description</th>
                                    <th scope="col">parking</th>
                                    <th scope="col">vote</th>
                                    <th scope="col">distance to center</th>
                                </tr>    
                            </thead>
                            <tbody>   
                                <?php foreach($hotels as $hotel) { ?>
                                    <tr>
                                        <td scope="row"><?php echo $hotel['name']?></td>
                                        <td><?php echo $hotel['description']?></td>
                                        <td>
                                            <?php if($hotel['parking']){
                                                echo 'Si';
                                            }else{
                                                echo 'No';
                                            };?>
                                        </td>
                                        <td><?php echo $hotel['vote'].'/5'?></td>
                                        <td><?php echo $hotel['distance_to_center'].'km'?></td>      
                                    </tr>                             
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
</html>

