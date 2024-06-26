
<!DOCTYPE html>


<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Телефонная книга</title>
        <link rel="stylesheet" href="/style/style.css">
    </head>
    

    <?php //echo htmlspecialchars($_POST['name']); ?>


    <body class="blur">
        <div class="main_container">

            <div class="phones_box">
                 <div class="phones_contain">

                    <h1 class="title phones_title">Телефонная книга</h1>
                    <div class="blueline"></div>

                    <div class="phones_column">
                        <?php 
                            $allNumbers = json_decode(file_get_contents("data/phone_numbers.json")); 

                            foreach ( $allNumbers as $item ) { 
                        ?>
                    
                            <div class="phone_item">
                                
                                

                                <h1 class="txt phoneitem_text"><?php echo $item->name; ?></h1>

                                <h1 class="txt phoneitem_text"><?php echo $item->phone; ?></h1>
                                
                                <form action="delete_number.php" method="post">
                                    <button class="phone_delete" type="submit" name="delet" id="delet" value=<?php echo $item->id; ?>>Удалить</button>
                                </form>

                            </div>

                        <?php } ?>

                    </div>

                 </div>
            </div>


            <div class="add_form_box">
                 
                <form class="num_form" action="save_number.php" method="post">
                    
                    <input class="num_input" name="name" id="name" type="text" placeholder="Имя">

                    <input class="num_input" name="phone" id="phone" type="tel" placeholder="Номер телефона">

                    <button class="num_submit" type="submit">Добавить +</button>
                </form>

            </div>

        </div>
    </body> 

</html>
