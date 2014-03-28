<?php
/**
 * version 1.1.0
 */
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="feedback/css/jquery.arcticmodal.css">
		<link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>		
    </head>
    <body data-spy="scroll" data-offset="0" data-target="#navigation">
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
		<div id="top"></div>
		<div  data-spy="affix" data-offset-top="10" id="menu">
			<div class="container">
				<div class="row">
					<div class="col-md-2">
						<a href="#top"><img src="img/logo.jpg" class="img-responsive" alt="Дон Фань Реабилитационный центр
											Китайской народной медицины"></a>
					</div>
					<div class="col-md-6">
						<p class="logo-text">
							<a href="#top">Дон Фань</a>
						</p>
						<p class="logo-description">
							Реабилитационный центр <br>
							Китайской народной медицины
						</p>
					</div>
					<div class="col-md-4 links">
						<a href="#specialists">Наши специалисты</a><br>
						<a href="#about-course">Виды услуг</a>
					</div>
					<div class="col-md-4 links">
						<a href="#good-theropy">Почему приходят к нам </a><br>
						<a href="#contacts">Как нас найти</a>
					</div>
					<div class="col-md-8">
						<p class="phone text-center">8 (3462) 44 66 04</p>
						<button class="btn btn-default center-block"  
								data-toggle="modal" data-target="#orderCall">
							Заказать звонок
						</button>
					</div>
				</div>
			</div>
		</div>
		<!-- Modal -->
		<div class="modal fade" id="orderCall" tabindex="-1" role="dialog" aria-labelledby="orderCallLabel" aria-hidden="true">
			<div class="modal-dialog modal-sm">
				<div class="modal-content">
					<form action="" class="form-horizontal" role="form"
						  autocomplete="off" name="orderCall1">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h4 class="modal-title" id="orderCallLabel">Заказ звонка</h4>
						</div>
						<div class="modal-body">
							<div class="form-group">
								<div class="icon-addon addon-md">
									<input type="text" class="form-control" name="name" placeholder="Введите имя">
									<label for="name" class="glyphicon glyphicon-user" rel="tooltip" title="Имя"></label>
								</div>
							</div>
							<div class="form-group">
								<div class="icon-addon addon-md">
									<input type="text" class="form-control phone" name="phone" placeholder="Введите телефон">
									<label for="phone" class="glyphicon glyphicon-phone" rel="tooltip" title="Телефон"></label>
								</div>
							</div>
							<button type="button" class="btn btn-default center-block feedback" name="send">Заказать звонок</button>
							<div class="row" id="security">
								<div class="col-md-4">
									<span class="glyphicon glyphicon-lock"></span>
								</div>
								<div class="col-md-20">
									<p>Ваши контактные данные в безопасности
										и не будут переданы третьим лицам</p>
								</div>
							</div>							
						</div>						
					</form>
				</div>
			</div>
		</div>
		<div class="first-screen">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1>Реабилитация детей с заболеваниями ЦНС<br> 							
							специалистами Китая в Сургуте</h1>
						<h2>ДЦП, ЗПРР, аутизм</h2>
						<p>It has survived not only five centuries, but also 
							the leap into electronic typesetting, remaining 
							essentially unchanged. It was popularised in the
							1960s with the release of Letraset sheets 
							containing Lorem Ipsum passages, and more 
							recently.</p>
					</div>
					<div class="col-md-8 col-md-offset-4">
						<div class="well">
							<h3 class="text-center">Записаться на бесплатную консультацию</h3>
							<form role="form" method="get" name="orderCall2">								
								<div class="form-group">
									<div class="icon-addon addon-md">
										<input type="text" class="form-control" name="name" placeholder="Введите имя">
										<label for="name" class="glyphicon glyphicon-user" rel="tooltip" title="Имя"></label>
									</div>
								</div>
								<div class="form-group">
									<div class="icon-addon addon-md">
										<input type="text" class="form-control phone" name="phone" placeholder="Введите телефон">
										<label for="phone" class="glyphicon glyphicon-phone" rel="tooltip" title="Телефон"></label>
									</div>
								</div>
								<button type="button" class="btn btn-primary center-block feedback" name="send">Записаться на консультацию</button>
								<div class="row" id="security">
									<div class="col-md-4">
										<span class="glyphicon glyphicon-lock"></span>
									</div>
									<div class="col-md-20">
										<p>Ваши контактные данные в безопасности
											и не будут переданы третьим лицам</p>
									</div>
								</div>		
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="triggers">
			<div class="container">
				<div class="row">
					<div class="col-md-5 col-md-offset-3">
						<div class="well">

						</div>
					</div>
				</div>
			</div>
		</div>	
		<div id="specialists">
			<div class="container">
				<div class="row">
					<div class="col-md-24">
						<h2 class="text-center">Наши специалисты</h2>
					</div>
				</div>
				<div class="row text-center">
					<div class="col-md-4">
						<img src="img/specialist4.jpg" alt="" class="img-responsive img-circle">
						<h4>Ли Чанвэй</h4>
						<p><strong>Образование:</strong> высшее</p>
						<p><strong>Специализация:</strong> иглоукалывание, прижигание и массаж</p>
					</div>
					<div class="col-md-4 col-md-offset-1">
						<img src="img/specialist3.jpg" alt="" class="img-responsive img-circle">
						<h4>Ван Дээнь</h4>
						<p><strong>Образование:</strong> высшее</p>
						<p><strong>Специализация:</strong> массаж</p>
					</div>
					<div class="col-md-4 col-md-offset-1">
						<img src="img/specialist1.jpg" alt="" class="img-responsive img-circle">
						<h4>Сюе Яньлян</h4>
						<p><strong>Образование:</strong> среднеспециальное</p>
						<p><strong>Специализация:</strong> массаж</p>
					</div>
					<div class="col-md-4 col-md-offset-1">
						<img src="img/specialist2.jpg" alt="" class="img-responsive img-circle">
						<h4>У Куаотцзэ</h4>
						<p><strong>Образование:</strong> среднеспециальное</p>
						<p><strong>Специализация:</strong> оздоровительный массаж</p>
					</div>	
					<div class="col-md-4 col-md-offset-1">
						<img src="img/trigger1.png" alt="" class="img-responsive">
						<h4>Анатолий Павлович Ефимов</h4>
						<p>There are many variations of passages of Lorem Ipsum 
							available, but the majority have suffered alteration 
							in some form</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-20 col-md-offset-2 well">						
						<h3 class="text-center">Получите больше информации по интересующей Вас теме</h3>

						<form role="form" class="form-inline text-center" method="get" name="orderCall3">	
							<div class="form-group">
								<div class="icon-addon addon-md">
									<select class="form-control" name="questions">
										<option value="">Выберите интересующий Вас вопрос</option>
										<option value="Какие процедуры проводятся в Центре?">Какие процедуры проводятся в Центре?</option>
										<option value="Чем отличаются русские методики массажа и ЛФК для ДЦП от китайских?">Чем отличаются русские методики массажа и ЛФК для ДЦП от китайских?</option>
										<option value="Из каких китайских клиник наши специалисты?">Из каких китайских клиник наши специалисты?</option>
										<option value="Какая длительность курса реабилитации?">Какая длительность курса реабилитации?</option>
										<option value="Какие процедуры чаще всего используются?">Какие процедуры чаще всего используются?</option>
									</select>
									<label for="questions" class="glyphicon glyphicon-book" rel="tooltip" title="Выберите интересующую Вас тему"></label>
								</div>
							</div>	
							<div class="form-group">
								<div class="icon-addon addon-md">
									<input type="text" placeholder="Email" class="form-control" name="email">
									<label for="email" class="glyphicon glyphicon-envelope" rel="tooltip" title="Электронная почта"></label>
								</div>
							</div>														
							<button type="button" class="btn btn-primary feedback" name="send">Получить информацию</button>	
						</form>
						<div class="row" id="security">
							<div class="col-md-2 col-md-offset-6 text-right">
								<span class="glyphicon glyphicon-lock"></span>
							</div>
							<div class="col-md-8">
								<p>Ваши контактные данные в безопасности
									и не будут переданы третьим лицам</p>
							</div>
						</div>	
					</div>
				</div>
			</div>
		</div>
		<div id="about-course">
			<div class="container">
				<div class="row">					
					<div class="col-md-24 text-center">
						<h2>Что входит в реабилитационный курс?</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-9 col-md-offset-3">
						<img src="img/about-course1.jpg" alt="ЛФК" class="img-responsive">
					</div>
					<div class="col-md-9">
						<h4>ЛФК</h4>
						<p>
							It is a long established fact that a reader will 
							be distracted by the readable content of a page 
							when looking at its layout. The point of using 
							Lorem Ipsum is that it has a more-or-less normal 
							distribution of letters, as opposed to using 
							'Content here, content here', making it look 
							like readable English. Many desktop publishing 
							packages and web page editors now use Lorem 
							Ipsum as their default model text, and a search
							for 'lorem ipsum' will uncover many web sites 
							still in their infancy. Various versions have 
							evolved over the years, sometimes by accident, 
							sometimes on purpose (injected humour and the like)
						</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-9 col-md-offset-3">
						<h4>Иглотерапия</h4>
						<p>
							It is a long established fact that a reader will 
							be distracted by the readable content of a page 
							when looking at its layout. The point of using 
							Lorem Ipsum is that it has a more-or-less normal 
							distribution of letters, as opposed to using 
							'Content here, content here', making it look 
							like readable English. Many desktop publishing 
							packages and web page editors now use Lorem 
							Ipsum as their default model text, and a search
							for 'lorem ipsum' will uncover many web sites 
							still in their infancy. Various versions have 
							evolved over the years, sometimes by accident, 
							sometimes on purpose (injected humour and the like)
						</p>						
					</div>
					<div class="col-md-9">
						<img src="img/about-course2.jpg" alt="Иглотерапия" class="img-responsive">
					</div>
				</div>
				<div class="row">
					<div class="col-md-9 col-md-offset-3">
						<img src="img/about-course3.jpg" alt="Массаж" class="img-responsive">
					</div>
					<div class="col-md-9">
						<h4>Массаж</h4>
						<p>
							It is a long established fact that a reader will 
							be distracted by the readable content of a page 
							when looking at its layout. The point of using 
							Lorem Ipsum is that it has a more-or-less normal 
							distribution of letters, as opposed to using 
							'Content here, content here', making it look 
							like readable English. Many desktop publishing 
							packages and web page editors now use Lorem 
							Ipsum as their default model text, and a search
							for 'lorem ipsum' will uncover many web sites 
							still in their infancy. Various versions have 
							evolved over the years, sometimes by accident, 
							sometimes on purpose (injected humour and the like)
						</p>
					</div>
				</div>
				<div class="row attention">					
					<div class="col-md-12 col-md-offset-6 well">
						<h4 class="text-center">Противопоказания</h4>
						<p>
							It is a long established fact that a reader will 
							be distracted by the readable content of a page 
							when looking at its layout. The point of using 
							Lorem Ipsum is that it has a more-or-less normal 
							distribution of letters, as opposed to using 
							'Content here, content here', making it look 
							like readable English. Many desktop publishing 
							packages and web page editors now use Lorem 
							Ipsum as their default model text, and a search
							for 'lorem ipsum' will uncover many web sites 
							still in their infancy. Various versions have 
							evolved over the years, sometimes by accident, 
							sometimes on purpose (injected humour and the like)
						</p>
						<button type="button" class="btn btn-primary center-block"
								data-toggle="modal" data-target="#getAdvice">
							Узнать больше
						</button>
					</div>
				</div>
			</div>
		</div>
		<!-- Modal -->
		<div class="modal fade" id="getAdvice" tabindex="-1" role="dialog" aria-labelledby="getAdviceLabel" aria-hidden="true">
			<div class="modal-dialog modal-sm">
				<div class="modal-content">
					<form action="" class="form-horizontal" role="form"
						  autocomplete="off"  name="orderCall4" >
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h4 class="modal-title" id="getAdviceLabel">Противопоказания</h4>
						</div>
						<div class="modal-body">
							<div class="form-group">
								<div class="icon-addon addon-md">
									<input type="text" class="form-control" name="name" placeholder="Введите имя">
									<label for="name" class="glyphicon glyphicon-user" rel="tooltip" title="Имя"></label>
								</div>
							</div>
							<div class="form-group">
								<div class="icon-addon addon-md">
									<input type="text" class="form-control phone" name="phone" placeholder="Введите телефон">
									<label for="phone" class="glyphicon glyphicon-phone" rel="tooltip" title="Телефон"></label>
								</div>
							</div>
							<button type="button" class="btn btn-primary center-block feedback" name="send">Узнать больше</button>
							<div class="row" id="security">
								<div class="col-md-4">
									<span class="glyphicon glyphicon-lock"></span>
								</div>
								<div class="col-md-20">
									<p>Ваши контактные данные в безопасности
										и не будут переданы третьим лицам</p>
								</div>
							</div>							
						</div>						
					</form>
				</div>
			</div>
		</div>
		<div id="good-theropy">
			<div class="container">
				<div class="row">
					<div class="col-md-24">
						<h2 class="text-center">Лечение в Сургуте - это правильно</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-md-offset-2">
						<img src="img/good-theropy1.jpg" alt="Лечение в Сургуте" class="img-responsive">

					</div>
					<div class="col-md-4 col-md-offset-12">
						<img src="img/good-theropy2.jpg" alt="Лечение в Китае" class="img-responsive">

					</div>					
				</div>
				<div class="row">
					<div class="col-md-8">
						<h3 class="text-center">Лечение в Сургуте</h3>						
					</div>
					<div class="col-md-8 col-md-offset-8">
						<h3 class="text-center">Лечение в Китае</h3>

					</div>					
				</div>
				<div class="row">
					<div class="col-md-8 arrow-left">

						<img src="img/arrow-left.jpg">
						<p>
							Все специалисты центра имеют дипломы 
							медицинских ВУЗов Китая
						</p>
					</div>
					<div class="col-md-8">
						<h4 class="text-center">Дипломированные специалисты</h4>
					</div>
					<div class="col-md-8 arrow-right">

						<img src="img/arrow-right.jpg">
						<p>
							Все специалисты традиционной китайской медицины 
							проходят жёсткий отбор
						</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-8 arrow-left">
						<img src="img/arrow-left.jpg">
						<p>
							Выбрать время для реабилитационного курса удобно.
							Без отрыва от работы и без пропусков 
							ребёнком школьных занятий
						</p>
					</div>
					<div class="col-md-8">
						<h4 class="text-center">Выбор времени для лечения</h4>
					</div>
					<div class="col-md-8 arrow-right">
						<img src="img/arrow-right.jpg">
						<p>
							Выбрать время для реабилитационного курса ребёнка 
							не просто. Сложности взятие отпусков и пропуск 
							ребёнком школы на время реабилитации.
						</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-8 arrow-left">
						<img src="img/arrow-left.jpg">
						<p>
							Привычное окружение и климат дают возможность 
							проходить реабилитационный курс с большим эффектом.
						</p>
					</div>
					<div class="col-md-8">
						<h4 class="text-center">Оклиматизация ребенка</h4>
					</div>
					<div class="col-md-8 arrow-right">
						<img src="img/arrow-right.jpg">
						<p>
							Смена климата и привычного окружения это стресс 
							для ребёнка. Для адаптации к новой среде необходимо
							время, которого может и не быть в связи с 
							ограниченным сроком пребывания за границей.
						</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-8 arrow-left">
						<img src="img/arrow-left.jpg">
						<p>
							При нахождении в Сургуте выбрать оптимальный 
							период реабилитации по состоянию здоровья 
							ребёнка гораздо удобней. 
						</p>
					</div>
					<div class="col-md-8">
						<h4 class="text-center">Состояние здоровья</h4>
					</div>
					<div class="col-md-8 arrow-right">
						<img src="img/arrow-right.jpg">
						<p>
							При обострении заболевания специалисты не могут 
							приступать к полноценному курсу реабилитации. 
							Необходимо выжидать время для восстановления 
							организма ребенка.
						</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-8 arrow-left">
						<img src="img/arrow-left.jpg">
						<p>
							Визы не нужны
						</p>
					</div>
					<div class="col-md-8">
						<h4 class="text-center">Получение визы</h4>
					</div>
					<div class="col-md-8 arrow-right">
						<img src="img/arrow-right.jpg">
						<p>
							Весь перечень вопросом с получением визы для себя 
							и ребёнка занимает не мало времени и сил
						</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-8 arrow-left">
						<img src="img/arrow-left.jpg">
						<p>
							Значительная экономия
						</p>
					</div>
					<div class="col-md-8">
						<h4 class="text-center">Расходы</h4>
					</div>
					<div class="col-md-8 arrow-right">
						<img src="img/arrow-right.jpg">
						<p>
							Расходы на транспорт, проживание, питание и сам 
							реабилитационный курс стоят дорого.
						</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-8 arrow-left">
						<img src="img/arrow-left.jpg">
						<p>
							Русский язык 
						</p>
					</div>
					<div class="col-md-8">
						<h4 class="text-center">Знание иностранного языка</h4>
					</div>
					<div class="col-md-8 arrow-right">
						<img src="img/arrow-right.jpg">
						<p>
							Сложность со знанием языка и необходимость нанимать
							переводчика.
						</p>
					</div>
				</div>
			</div>
		</div>		
		<div id="contacts">
			<div class="container">
				<div class="row">
					<div class="col-md-24">
						<h2 class="text-center">Как нас найти?</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-20 col-md-offset-2">
						<script type="text/javascript" charset="utf-8" src="//api-maps.yandex.ru/services/constructor/1.0/js/?sid=F9J3myrgMl_CjJ2dJ2Fqg7CwPb_NIrGN&width=100%&height=450"></script>
					</div>
				</div>
				<div class="row boss">
					<div class="col-md-6">
						<img src="img/head.jpg" alt="Руководитель" class="img-responsive">
					</div>
					<div class="col-md-10">
						<h3>Руководитель</h3>
						<blockquote>
							<p>Наш центр создан с целью сделать китайскую традиционную 
								медицину доступной для всех нуждающихся. 
								Вы сможете получить качественную, профессиональную и 
								своевременную помощь в реабилитации детей.
								Островок китайской медицины в Сургуте ждет вас.</p>
							<footer>Пань Юекуань</footer>
						</blockquote>
					</div>
					<div class="col-md-8 cont">
						<h3>Контакты</h3>
						<div class="row">
							<div class="col-md-4">
								<span class="glyphicon glyphicon-phone-alt"></span>
							</div>
							<div class="col-md-20 ">
								<p>8 (3462) 123-456</p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<span class="glyphicon glyphicon glyphicon-envelope"></span>
							</div>
							<div class="col-md-20 cont">
								<p>info@example.com</p>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>

		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>

		<script src="js/vendor/bootstrap.min.js"></script> 
		<script src="js/vendor/jquery.maskedinput.min.js"></script> 
		<script type="text/javascript" src="feedback/js/feedback.js"></script>
		<script src="feedback/js/jquery.arcticmodal.js"></script>
		<script src="js/main.js"></script>

		<script> 			var _gaq = [['_setAccount', 'UA-XXXXX-X'], ['_trackPageview']];
			(function(d, t) {
				var g = d.createElement(t), s = d.getElementsByTagName(t)[0];
				g.src = '//www.google-analytics.com/ga.js';
				s.parentNode.insertBefore(g, s)
			}(document, 'script'));
		</script>
    </body>
</html>
