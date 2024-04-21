<?php

    $allNumbers = json_decode(file_get_contents("data/phone_numbers.json"), true);

   
    foreach ( $allNumbers as $k => $item )
    {
        if ( $item["id"] == htmlspecialchars($_POST['delet']) )
        {
        
            unset( $allNumbers[$k] );

            $newJson = json_encode($allNumbers); 
            file_put_contents("data/phone_numbers.json", $newJson);

            header("Location: /index.php");

            exit( );
        }
    }
    
    

?>