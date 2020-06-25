@extends ('layouts.header')
@extends ('layouts.headerSite')

@section('headmain')
@endsection('headmain')
@section('nav')


			<div class="left_column">
				<div class="preview">
					<img src="images/alien.png">
					<div class ="zag1-2">
					<h1>Мы приветсвуем Вас на Нашем сайте игровых модификаций к различным играм!</h1>
					<h2>Вы можете перейти на оригинальные источники и также воспользоваться Нашим интернет - ресурсом.</h2>
					</div>
				</div>
				<div class= "facts">
				<h2>Новостной блок</h2>			
					<ul>
						<li>К январю 2019 года продажи Subnautica перевалили за 5.23 миллиона копий. Если же включить в тираж бесплатные копии, которые в декабре 2018-го дарили всем пользователям Epic Games Store, то получится ещё более внушительная цифра — около 9.73 миллиона.</li>						
						<li>Игра ухитрилась выйти на Nintendo Switch с рейтингом «Для всех возрастов» от американской комиссии ESRB, несмотря на наличие «обнажёнки». Впрочем, недоразумение быстро исправили: через несколько дней игру перевыпустили с новыми рейтингами — Mature (17+) от ESRB и 12+ от европейской PEGI.</li>
						<li>Ну и дату завезти как-нибудь</li>
					</ul>
				</div>
			</div>		
			
			<div class="right_column">			
				<div class="chat_reklama">
					<h4>Наши друзья</h4>
					<a href="#"><img src="images/DiscordLogo.jpg"></a>					
				</div>
				<div class="blogs">
					<h4>Блог</h4>
					<ul>
						<li>						
						<div class="author-details">
							<img src="images/avatarsmall.jpg" width="45" height="45">
							<h5>"Название блога"</h5>
							<span>Дата создания блога</span><br>
							<span>Читать ещё</span>
						</div>
							
						</li>
					</ul>
				</div>				
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