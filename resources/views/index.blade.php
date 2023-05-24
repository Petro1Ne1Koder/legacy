<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Legacy of  Sothorys</title>
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
            <a href="index" class="header__logo"><img src="/images/Logo.png" alt="Logo"></a>
            <nav>
                <ul class="nav">
                    <li class="nav__item">
                        <a href="info" class="nav__link">Кодекс</a>
                    </li>
                    <li class="nav__item">
                        <a href="news" class="nav__link">Новини</a>
                    </li>
                    <li class="nav__item">
                        <a href="#" class="nav__link">Форум</a>
                    </li>
                    <li class="nav__item">
                        @if($_SESSION)
                        @if($_SESSION["user"])
                        <?php $id=$_SESSION["user"]->id?>
                        <a href="prof/{{$id}}" class="nav__link">Особистий кабінет</a>
                        @else
                        <a href="auth" class="nav__link">Особистий кабінет</a>
                        @endif
                        @else
                        <a href="auth" class="nav__link">Особистий кабінет</a>
                        @endif
                    </li>
                </ul>
            </nav>
            <div class="navbar-toggle">&#9776;</div>
        </div>
    </header>
    
    <section class="banner">
    <section>
        <div class="container">
            <h1 class="banner__title">Ласкаво просимо</h1>
            <p class="banner__text">Legacy of Sothorys - це масштабний рольовий
                проект у сеттингу епічного фентезі, створений
                на базі всіма улюбленої гри Minecraft.
                
                Наш сайт допоможе вам дізнатися історії світу всередині гри, про історичні персони і про особливості саме нашого ігрового сервера. Тут ви можете ознайомитись з новими подіями всередині ігрового світу та про оновлення у розробці. Також на нашому сайті ви зможете прикріпити до свого внутрішньоігрового персонажа унікальний образ і придбати товар у нашому магазині або замовити щось унікальне для себе.</p>
                <div class="btn">
                    <a href="start" class="btn__btn">Почати гру</a>
                </div>
                <img class="banner__img" src="/images/down.png " alt="banner">
        </div>
    </section>
    </section>
    <section class="section">
        <div class="container">
            <h2 class="section__title">Новини</h2>
            <div class="news">
                <?php $landing_news_array=$news->slice(count($news)-3, 3);?>
                @foreach($landing_news_array as $landing_news)
                <div class="news-item">
                    <div class="news-header">
                        <div class="news-info">
                            <h3 class="news-info__title">{{$landing_news->news_name}}</h3>
                        </div>
                    </div>
                    <div class="news-footer">
                        <ul class="news-list">
                            <p class="news-list__item">{{$landing_news->news_desc1}}</p>
                            <a href="news/{{$landing_news->id}}" class="news-list__btn">Детальніше</a>
                        </ul>
                        <img class="news-info__img1" src="{{$landing_news->news_img}}" alt="news">
                        <img class="news-info__line1" src="/images/line.png" alt="news">
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
    </section>
    <section class="contacts">
        <div class="info">
                <div class="info-links">                
                    <div class="info-links__header">
                        <img class="info-links__header__img" src="/images/Dis1.png" alt="Dis">
                    </div>
                    <div class="info-links__btn">
                        <a href="#" class="info-links__btn__btn">Приєднатися</a>
                    </div>
                </div>
                <div class="info-links1">                
                    <div class="info-links1__header">
                        <img src="/images/blackline.png" class="info-links1__header__img" alt="textback">
                        <h4 class="info-links1__header__title">Інші місця де ви можете нас знайти:</h4>
                    </div>
                    <div class="info-links1__btn">
                        <a href="#"><img class="info-links1__btn__instagram" src="/images/inst.png" alt="info-btn"></a>
                        <a href="#"><img class="info-links1__btn__tiktok" src="/images/tiktok.png" alt="info-btn1"></a>
                        <a href="#"><img class="info-links1__btn__patreon" src="/images/patreon.png" alt="info-btn2"></a>
                    </div>
                </div>
        </div>
    </section>
    <section class="end">
        <div class="ending">
            <p class="ending__text">Є питання? Можете звернутися до адміністрації на нашому дискорд сервері або написати нам на пошту: “dan.grishai@gmail.com”</p>
        </div>
    </section>
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