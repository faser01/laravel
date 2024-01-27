<!DOCTYPE html>
<html>
<head>
<link rel ="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Новостной портал</title>
    <style>
    body {
        padding: 20px;
    }
</style>
</head>
<body>
<header>
    <div class="d-flex justify-content-between align-items-center">
        <h1>Текстовый логотип</h1>
        <div class="ms-auto text-center">
            @if(isset($user))
                <p>Привет, {{ $user->name }}</p>
                <a href="#">Выход</a>
            @else
                <a href="#">Вход</a>
                <a href="#">Регистрация</a>
            @endif
        </div>
    </div>
</header>

    <div>
        <div>
            <h2>Список последних новостей</h2>
            <ul>
            @foreach($news as $key => $item)
                <li><a href="#">{{ $item->title }}</a></li>
                @if(($key + 1) % 5 == 0 && $key != count($news) - 1)
                    <div style="background-color: gray; height: 100px;">Баннер</div>
                @endif
            @endforeach
            </ul>
          
        </div>

        <div>
            <h2>Основной контент</h2><br/>
            <h3>{{ $article->title }}</h3><br/>
            <img src="{{ asset($article->image) }}" alt="{{ $article->title }}">
            <p>{{ $article->text }}</p><br/>
            <h3>Комментарии</h3>
        </div>
    </div>

    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
    <p class="col-md-4 mb-0 text-body-secondary">© 2024 Руслан Абишев, Inc</p>
    <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
      <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
    </a>
  </footer>
    
</body>
</html>