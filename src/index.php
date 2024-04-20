
<!DOCTYPE html>


<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Телефонная книга</title>
        <link rel="stylesheet" href="/style/style.css">
    </head>
    

    <body class="blur">
        <div class="main_container">

            <div class="phones_box">
                 <div class="phones_contain">

                    <h1 class="title phones_title">Телефонная книга</h1>
                    <div class="blueline"></div>

                    <div class="phones_column">

                        <div class="phone_item">

                            <h1 class="txt phoneitem_text">Имя:</h1>
                            <h1 class="txt phoneitem_text">Владимир пупкин</h1>
            
                            <div class="blueline_solid"></div>

                            <h1 class="txt phoneitem_text">Номер телефона:</h1>
                            <h1 class="txt phoneitem_text">8-970-148-82-28</h1>

                            <div class="blueline_solid"></div> 
                            
                            <form action="action.php" method="post">
                                <button class="phone_delete" type="submit">Удалить</button>
                            </form>

                        </div>

                        <div class="phone_item">

                        </div>
                        <div class="phone_item">

                        </div>
                        <div class="phone_item">

                        </div>

                    </div>

                 </div>
            </div>


            <div class="add_form_box">
                 
                <form class="num_form" action="action.php" method="post">
                    
                    <input class="num_input" name="name" id="name" type="text" placeholder="Имя">

                    <input class="num_input" name="age" id="age" type="tel" placeholder="Номер телефона">

                    <button class="num_submit" type="submit">Добавить +</button>
                </form>

            </div>

        </div>
    </body> 

</html>
