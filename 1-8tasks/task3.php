<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

        $cities = array(
            "Italy" => "Rome",
            "Luxembourg" => "Luxembourg",
            "Belgium" => "Brussels",
            "Denmark" => "Copenhagen",
            "Finland" => "Helsinki",
            "France" => "Paris",
            "Slovakia" => "Bratislava",
            "Slovenia" => "Ljubljana",
            "Germany" => "Berlin",
            "Greece" => "Athens",
            "Ireland" => "Dublin",
            "Netherlands" => "Amsterdam",
            "Portugal" => "Lisbon",
            "Spain" => "Madrid"
        );

        // Sort the array by capital in ascending order
        asort($cities);

        // Define a custom function to display the capital and country name
        function display($capital, $country) {
            echo "Capital of $country is $capital<br>";
        }

        // Use array_walk to apply the display function to each element of the sorted array
        array_walk($cities, 'display');
        
    ?> 

</body>
</html>