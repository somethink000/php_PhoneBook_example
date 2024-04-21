<?php

    function findBiggerId($array)
    {
        $bigger = 0;
        
        foreach( $array as $item ){
            if ( $item->id > $bigger ) {
                $bigger = $item->id;
            }
        }

        return ++$bigger;
    }
    

    


    $allNumbers = json_decode(file_get_contents("data/phone_numbers.json"));

    $newNumber = Array (
        "id" => findBiggerId($allNumbers),
        "name" => htmlspecialchars($_POST['name']),
        "phone" => htmlspecialchars($_POST['phone']),
    );
    
    $allNumbers[] = $newNumber;

    $newJson = json_encode($allNumbers); 
    file_put_contents("data/phone_numbers.json", $newJson);

    header("Location: /index.php");

    exit( );

?>