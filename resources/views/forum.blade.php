@extends ('layouts.header')
@extends ('layouts.headerForum')

@section('headforum')
@endsection('headforum')
@section('nav')
<br>
<div class="left_column">
    <div class="preview">
        <img src="images/alien.png">
        <div class ="zag1-2">
            <h1>Мы приветсвуем Вас на Нашем сайте игровых модификаций к различным играм!</h1>
            <h2>Вы можете перейти на оригинальные источники и также воспользоваться Нашим интернет - ресурсом.</h2>
        </div>
    </div>
    <p>ФОРУМ</p>
    @foreach($forum as $forum)
        <div class="blogs">
            <h4>Заголовок</h4>
            <ul>
                <li>
                    <div class="author-details">
                        <img src="{{$forum->img_url}}" width="45" height="45">
                        {{$forum -> description}}
                        <span>Дата создания блога</span><br>
                        <span>Читать ещё</span>
                    </div>
                </li>
            </ul>
        </div>
    @endforeach
</div>
<div class="right_column">
    <div class="reg">
        @if (!Auth::check())
        <form name="f1" method="get" action="/auth">
            Логин: <br />
            <input name="login" type="text" size="30" maxlength="30" value="" placeholder="Дорогой" /> <br />
            Пароль: <br />
            <input name="pd" type="password" size="30" maxlength="30" value="" placeholder="Пользователь" /> <br />
            Почта: <br />
            <input name="mail" type="email" size="30" maxlength="30" value="" placeholder="Ваша почта" /> <br />
            <input name="remember" type="checkbox" value="yes" /> Запомнить <br />
            <input name="enter" type="submit" class="btn" value="Вход" />
            <input name="perenos" type="button" value="Зарегистрироваться" class="btn" onclick="window.location.href = '/lk'">

        </form>
        @else
            <a href="/logout">Деавторизация</a>
        @endif

    </div>
        <div class="chat_reklama">
            <h4>Наши друзья</h4>
            <a href="#"><img src="images/DiscordLogo.jpg"></a>
        </div>
    </div>



</main>
<footer>
    <div class="late_info">
        <ul class="footer_links">
            <li><a href="http://rootgames.ru" target="_blank">Rootgames.Ru</a></li>
            <li><a href="https://www.nk-cs.ru" target="_blank">www.nk-cs.ru</a></li>
            <li><a href="/index/0-3">Связь с Администрацией</a></li>
        </ul>
    </div>

</footer>
@endsection('nav')
