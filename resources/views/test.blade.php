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
            .t {
                margin: auto;
            }
            .alert {
                color: red;
            }
        </style>
    </head>
    <body>
        <div class="content">
            <div class="title m-b-md">
                Тестовое задание
            </div> 
        <form method="POST" action="{{ route('add') }}">
            <p>
                Введите имя: <input type="label" name="title" value="{{ old('title') }}">
            </p>
            <p>
                Введите расчет: <textarea name="text">{{ old('text') }}</textarea> 
            </p>
            <div>
                <input type="submit" name="add" value="Добавление в БД">            
            </div>
            {{ csrf_field() }}
            <!-- @if (count($errors) > 0)
                <div class="alert">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif -->
        </form>

        <form method="get" action="{{ route('test') }}">
            <div>
                Секретный код 
                <select name="ver">
                    <option>></option>
                    <option><</option>
                    <option>=</option>
                </select>
                <input type="label" name="val" value="{{ old('val') }}">
                <input type="submit" name="look" value="Просмотр">
            </div>

            <p>
                Список сохраненных ранее расчетов:
            </p>

            <table border ="1" class="t">
            <tr>
                <th>Наименование</th> 
                <th>Расчетные данные</th>
                <th>Секретный код</th>
            </tr>
            @for($i = 0; $i < count($tests);$i++)  
            <tr>
                <th>{{ $tests[$i]->name }}</th> 
                <th>{{ $tests[$i]->str }}</th>
                <th>{{ $tests[$i]->secret_code }}</th>
            </tr>
            @endfor                              
            </table> 
        </form>
        </div>                
    </body>
</html>
