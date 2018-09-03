<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Тестовое задание</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="content">
            <div class="title m-b-md">
                Тестовое задание
            </div> 
            <p>
                Введите имя: <input type="label" name="title" value="">
            </p>
            <p>
                Введите расчет: <textarea></textarea> 
            </p>
            <div>
                <input type="submit" name="add" value="Добавление в БД">
                <input type="submit" name="look" value="Просмотр">
            </div>

                <!-- <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div> -->
        </div>

        <?php if (isset($_POST['look'])) {?>

        <form name="secr_table" action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <div>
                Секретный код 
                <select name="ver">
                    <option>></option>
                    <option><</option>
                    <option>=</option>
                </select>
            </div>

            <p>
                Список сохраненных ранее расчетов:
            </p>

            <table border ="1">
            <tr>
                <th>Наименование</th> 
                <th>Расчетные данные</th>
                <th>Секретный код</th>
            </tr>
                        
            <?php 
                //if ($_POST['ver'] = ">") 
                //    {$query = "SELECT * FROM (SELECT * FROM `variants` WHERE '$date' BETWEEN `period_from` AND `period_to`  ORDER BY (`period_to` - `period_from`) ) AS mt GROUP BY `title`"; 
                //}elseif ($_POST['ver'] = "<") {$query = "SELECT * FROM (SELECT * FROM `variants` WHERE '$date' BETWEEN `period_from` AND `period_to`  ORDER BY `period_from` DESC) AS mt_1 GROUP BY `title`";
                //}elseif ($_POST['ver'] = "=") {$query = "SELECT * FROM (SELECT * FROM `variants` WHERE '$date' BETWEEN `period_from` AND `period_to`  ORDER BY `period_from` DESC) AS mt_1 GROUP BY `title`";
                //}else {$query = "SELECT * FROM (SELECT * FROM `variants` WHERE '$date' BETWEEN `period_from` AND `period_to`  ORDER BY `period_from` DESC) AS mt_1 GROUP BY `title`";}

                //$res = $connection->query($query);
                
                //$table = [];
                //while (($row = $res->fetch_assoc()) != false) {
                //$table[] = $row;
                //}
                //print_r($table);
                //$count = count($table);
                
                //for ($i=0; $i < $count; $i++) { 
                    //$mas = $table[$i]; ?>

                <!-- <tr>
                    <th><?=$table[$i][0]?></th> 
                    <th><?=$table[$i][0]?></th>
                    <th><?=$table[$i][0]?></th>
                </tr> -->
                <?php   } ?>
                        
            </table>     
        </form>       
    </body>
</html>
