<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Кодекс Legacy of  Sothorys</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('/styles/style.css')}}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
</head>
<link rel="shortcut icon" href="/images/web.ico" type="image/x-icon">
<body>
    <header>
        <div class="header">
            <a href="/index" class="header__logo"><img src="/images/Logo.png" alt="Logo"></a>
            <nav>
                <ul class="nav">
                    <li class="nav__item">
                        <a href="/info" class="nav__link">Кодекс</a>
                    </li>
                    <li class="nav__item">
                        <a href="/news" class="nav__link">Новини</a>
                    </li>
                    <li class="nav__item">
                        <a href="#" class="nav__link">Форум</a>
                    </li>
                    <li class="nav__item">
                        <a href="/auth" class="nav__link">Особистий кабінет</a>
                    </li>
                </ul>
            </nav>
            <div class="navbar-toggle">&#9776;</div>
        </div>
    </header>
    <div class="Titels">
        <h2 class="Titels__title">Кодекс</h2>
        <ul class="infos">
            @foreach($categories as $category)
            <?php $items=$category->items?>
            <li class="infos__item">
                <a class="infos__item">{{$category->category_name}}</a>
            </li>
            @foreach($items as $item_temp)
            <li class="infos__item">
                <a href="/info/{{$item_temp->id}}" class="infos__link">{{$item_temp->item_name}}</a>
            </li>
            @endforeach
            @endforeach
        </ul>
    </div>
    <div class="Textos">
        @if(!$item)
        <h3 class="pageTitle">Кодекс</h3>
        <p class="textContainer">Ласкаво просимо до кодексу, виберіть потрібну тему</p>
        @else
        <h3 class="pageTitle">{{$item->item_name}}</h3>
        <p class="textContainer">{{$item->item_decs}}</p>
        @endif
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var navbarToggle = document.querySelector('.navbar-toggle');
            var navbarMenu = document.querySelector('.nav');

            navbarToggle.addEventListener('click', function () {
                navbarMenu.classList.toggle('navbar-open');
            });
        });
    </script>
</body>
</html>