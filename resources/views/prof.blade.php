<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Профiль Legacy of  Sothorys</title>
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
    <body>
        <div class="prof-inf">
          <div class="profile-section">
            <label for="email">Почта: {{$user->email}}</label>     
          </div>
          <div class="profile-section">
            <label for="login">Логін: {{$user->login}}</label>
          </div>
          <form action="/auth/logout" method="post">
            @csrf
            <button class="logout-btn">Выйти</button>
          </form>
        </div>

        <div class="personalization-section">
            <h2>Персонализация</h2>
            <p class="upload-message">Завантажуваний файл повинен бути лише форматом PNG і відповідати правилам.</p>
            <div class="image-preview"></div>
            <input type="file" id="image-upload" accept="image/png">
            <label for="image-upload" class="upload-btn">Загрузить</label>
          </div>
        </div>
        <script>
            // JavaScript для обработки загрузки изображения и отображения его предварительного просмотра
            document.getElementById('image-upload').addEventListener('change', function(event) {
              var imagePreview = document.querySelector('.image-preview');
              imagePreview.innerHTML = ''; // Очищаем предыдущее содержимое предварительного просмотра
        
              var file = event.target.files[0];
              var reader = new FileReader();
        
              reader.onload = function(e) {
                var img = document.createElement('img');
                img.src = e.target.result;
                img.style.maxWidth = '100%';
                img.style.height = 'auto';
                imagePreview.appendChild(img);
              };
        
              reader.readAsDataURL(file);
            });
          </script>
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