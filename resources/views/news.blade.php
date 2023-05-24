<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Новини Legacy of  Sothorys</title>
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
                    <a href="auth" class="nav__link">Особистий кабінет</a>
                </li>
            </ul>
        </nav>
        <div class="navbar-toggle">&#9776;</div>
    </div>
</header>
      <?php $news1 = $news->reverse()?>
      @foreach($news1 as $new)
      <div class="news-itemm">
        <h2>{{$new->news_name}}</h2>
        <img src="{{$new->news_img}}" alt="Изображение новости">
        <p>{{$new->news_desc1}}</p>
        <div style="display: flex; justify-content: space-between; align-items: center; margin-top: 10px;">
          <div>
            <p class="news-itemm__date">{{$new->news_date}}</p>
          </div>
          <a href="news/{{$new->id}}" class="read-more">Детальніше</a>
        </div>
      </div>
      @endforeach
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