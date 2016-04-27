<!DOCTYPE html>
<html lang="en-US">
<head>

	<!-- ==============================================
	Title and basic Meta Tags
	=============================================== -->
	<meta charset="utf-8">
	<title>Деньги Кредит - кредит наличными каждому!</title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">

	<!-- ==============================================
	Mobile Metas
	=============================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

	<!-- ==============================================
	CSS
	=============================================== -->
	<link rel="stylesheet" href="css/rev-grid.css" media="all">
	<link rel="stylesheet" href="css/font-awesome.min.css" media="all">
	<link rel="stylesheet" href="css/base.css" media="all">
	<link rel="stylesheet" href="css/first-demo.css" media="all">
	<link rel="stylesheet" href="css/responsive.css" media="all">

	<!--[if lt IE 9]>
		<script src="js/html5.js"></script>
		<script src="js/respond.min.js"></script>
	<![endif]-->

	<!--[if lte IE 8]>
		<link rel="stylesheet" type="text/css" href="css/ie.css" />
	<![endif]-->

	<!-- ==============================================
	Fonts
	=============================================== -->
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro%7cPT+Sans:300,400,600' rel='stylesheet' type='text/css'>

	<!-- ==============================================
	Favicons
	=============================================== -->
	<link rel="shortcut icon" href="img/favicon.ico">

</head>

<body class="no-preloader" id="top">

	<div class="preloader">
		<div class="preloader-logo">
			<div class="preloader-spinner"></div>
			<p>Загрузка Деньги Кредит</p>
		</div>
	</div>

	<section class="section intro">
		<div class="container container-back">
			<div class="row">
				<div class="column-1000 text-center intro-heading-block">
					<img src="img/logo-2.png" alt="approach" title="Approach Landing Page" class="logo">
					<h1>Деньги Кредит - Кредит наличными каждому!</h1>
<!-- 					<h5>*Мы не гарантируем 100% получение кредита, но мы гарантируем лучшие условия на рынке Украины</h5> -->
				</div>
			</div>
			<div class="row" id="middle-top">
				<div class="column-60 text-column text-center">
					<p class="intro-description">Срочно нужны деньги на торжество, ремонт, обучение, путешествия, авто или что-то другое?</p>
					<div class="row">
						<div class="column-20">
							<img src="img/product-image-2.png" alt="intro-image" class="intro-image">
						</div>
						<div class="column-80">
							<h2>Кредит от 3 000 до 50 000 грн</h2>
							<ul class="intro-features">
                                <li><img src="img/icon-check.png" alt="check icon">Заполняете заявку в любое время</li>
								<li><img src="img/icon-check.png" alt="check icon">Заявка отправится сразу в 3 банка</li>
								<li><img src="img/icon-check.png" alt="check icon">Выбираете лучшее предложение</li>
                                <!-- <li><img src="img/icon-check.png" alt="check icon">Безопасно</li> -->
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section form-clients">
		<div class="container">
			<div class="row">
				<div class="column-40 form-column text-center">
					<form method="post" action="/sender.php" class="main-form" id="requestForm">
						<h4>Нужны деньги наличными?</h4>
						<p class="main-form-description">Заполните заявку и получите решение банка через 30 минут</p>
						<input class="required" type="text" name="lastName" id="lastName" maxlength="70" placeholder="Фамилия*">
                        <input class="required" type="text" name="firstName" id="firstName" maxlength="70" placeholder="Имя*">
                        <input class="required" type="text" name="middleName" id="middleName" maxlength="70" placeholder="Отчество*">
                        <select name="employment" id="employment">
                            <option value="official">Выберите свое трудоустройство</option>
                            <option value="official">Официально трудоустроен</option>
                            <option value="officialPrivate">Работаю на СПД</option>
                            <option value="private">СПД</option>
                            <option value="pensioner">Пенсионер</option>
                            <option value="unofficial">Работаю не официально</option>
                            <option value="maternityLeave">Декретный отпуск</option>
                            <option value="no">Временно не работаю</option>
                        </select>
                        <input input id="age" name="age" type="text" maxlength="2" placeholder="Укажите свой возраст (полных лет)">
                        <input class="required" id="inn" name="inn" type="text" maxlength="10" placeholder="Ваши ИНН*">
						<input class="required" id="phone" name="phone" type="text" maxlength="10" placeholder="Контактный телефон*">
                        <select name="aim" id="aim">
                            <option value="renovation">Укажите цель кредита</option>
                            <option value="technics">Покупка техники</option>
                            <option value="furniture">Покупка мебели</option>
                            <option value="renovation">Ремонт</option>
                            <option value="cure">Лечение</option>
                            <option value="education">Образование</option>
                            <option value="business">На бизнес</option>
                            <option value="otherCredit">Погашение другого кредита</option>
                            <option value="car">Покупка авто</option>
                            <option value="fiesta">На свадьбу/юбилей</option>
                            <option value="rest">На отдых/путешествия</option>
                            <option value="other">Другое</option>
                        </select>
						<select name="amount" id="amount">
                            <option value="12000">Выберите желаемую сумму кредита</option>
							<option value="1700">1000 - 3000</option>
                            <option value="4000">3000 - 5000</option>
                            <option value="7500">5000 - 10 000</option>
                            <option value="12500">10 000 - 15 000</option>
                            <option value="17500">15 000 - 20 000</option>
                            <option value="22500">20 000 - 25 000</option>
                            <option value="27500">25 000 - 30 000</option>
                            <option value="32500">30 000 - 35 000</option>
                            <option value="37500">35 000 - 40 000</option>
                            <option value="42500">40 000 - 45 000</option>
                            <option value="47500">45 000 - 50 000</option>
						</select>
						<div class="submit-holder">
							<div class="submit-arrow animate-arrow">Оформляйте заявку <span>бесплатно</span> у нас на сайте*</div>
							<input class="button" type="submit" id="submit" value="Получить деньги">
						</div>
						<p class="disclaimer">Отправляя заявку, вы подтверждаете свое согласие на обработку ваших данных согласно ЗУ «О защите персональных данных».</p>
                        <?php
                            foreach ($partners as $partner) {
                            echo '<input type="hidden" value="1" name="'.$partner.'" />'."\r\n";
                            }
                        ?>
					</form>
                    <?php
                        function value($key) {
                            global $params;
                            if (isset($params) && isset($params[$key]))
                                return $params[$key];
                            return '';
                        }
                    ?>
				</div>
				<div class="column-60 clients">
					<div class="row">
                        <div class="column-40"><p>Работаем с банками:</p></div>
                        <div class="column-30"><img src="img/mikhailovskiy-bank.png" alt="client-logo" title="Client Logo"></div>
                        <div class="column-30"><img src="img/trast.jpeg" alt="client-logo" title="Client Logo"></div>
                    </div>
                    <div class="row">
                        <div class="column-25"><img src="img/pumb.jpg" alt="client-logo" title="Client Logo"></div>
                        <div class="column-25"><img src="img/alfa-bank.png" alt="client-logo" title="Client Logo"></div>
                        <div class="column-25"><img src="img/otp-bank.png" alt="client-logo" title="Client Logo"></div>
                        <div class="column-25"><img src="img/idea-bank.png" alt="client-logo" title="Client Logo"></div>
                    </div>
				</div>
			</div>
		</div>
	</section>

    <section class="section section-notification">
        <div class="container">
            <div class="row">
                <div class="column-80">
                <h4>*Оформляйте кредиты легко, быстро и на самых выгодных условиях! </br>Не тратьте время на поиски кредитов, заполняете заявку у нас на сайте.</br> И банки сами будут звонить вам и предлагать выгодные условия!</h4>
                </div>
            </div>
        </div>
    </section>

	<section class="section content">
		<div class="container">
			<div class="row">
				<div class="column-1000">
					<h2>Тысячи довольных клиентов:</h2>
					<div class="row content-block">
						<div class="column-80">
							<h4>Елена И., г. Киев:</h4>
							<p>Не хватало денег на поездку за границу…И очень не хотелось бегать по банках в поисках выгодных условий кредита. Оформиза заявку вашем сайте и в течении 2 дней получила кредит наличными на 11 000 гривен. Уже вернулась из путешествия Прибалтикой. Там фантастически! Спасибо. </p>
						</div>
						<div class="column-20">
							<img src="img/content-image-1.png" alt="content-image">
						</div>
					</div>
                    <div class="column-500">
                        <hr>
                    </div>
					<div class="row content-block">
						<div class="column-80 float-right">
							<h4>Сергій П., м. Миколаїв:</h4>
							<p>Не мав змогу особисто відвідати відділення банку для оформлення заявки на кредит, оскільки знаходився на лікарняному. Гроші були потрібні терміново на післяопераційне лікування у зв’язку з виробничою травмою на будівництві. Оформив заявку на кредит на сайті. Рішення за кредитом отримав протягом 30 хвилин. Дуже зручно. Дякую!</p>
						</div>
						<div class="column-20">
							<img src="img/content-image-2.png" alt="content-image">
						</div>
					</div>
                    <div class="column-500">
                        <hr>
                    </div>
					<div class="row content-block">
						<div class="column-80">
							<h4>Светлана Т., г. Днепропетровск:</h4>
							<p>Получила кредит 27 тысяч гривен на 12 мес. Досрочно погасила через 7 мес. Реализовала свою давнюю мечту, обустроила кухню: купила новый телевизор, холодильник и более мелких покупок.</p>
						</div>
						<div class="column-20">
							<img src="img/content-image-3.png" alt="content-image">
						</div>
					</div>
                    <div class="column-500">
                        <hr>
                    </div>
                    <div class="row content-block last-content-block">
                        <div class="column-80 float-right">
                            <h4>Игорь, г. Киев:</h4>
                            <p>Нужны были деньги на празнования свадьбы. Не хватало около половины необходимой суммы. Никогда ранее не оформлял кредит, но поскольку повод того стоил решил отправить заявку. Решение по кредиту приняли очень быстно, никаких поручителей или залогов - все быстро и честно. Свадьба удалась на славу, а кредит погасил досрочно. Все супер!</p>
                        </div>
                        <div class="column-20">
                            <img src="img/content-image-4.png" alt="content-image">
                        </div>
                    </div>
                    <div class="column-500">
                        <hr>
                    </div>
                    <div class="row content-block">
                        <div class="column-75">
                            <div class="column-30">
                                <img class="benefits-icon" src="img/icon-banks.png" alt="banks" title="">
                                <p class="benefits-text">Одна заявка сразу в несколько банков</p>
                            </div>
                            <div class="column-30">
                                <img class="benefits-icon" src="img/icon-97.png" alt="ccheck" title="">
                                <p class="benefits-text">Вероятность получить кредит составляет 97%</p>
                            </div>
                            <div class="column-30">
                                <img class="benefits-icon" src="img/icon-approve.png" alt="approve" title="">
                                <p class="benefits-text">На сегодня 12 775 заявок уже одобрено</p>
                            </div>
                        </div>
                    </div>
				</div>
			</div>
		</div>
	</section>

	<section class="section bottom-cta">
		<div class="container">
			<div class="row">
				<div class="column-60">
					<h2>Оформляйте кредиты легко, быстро и по самым выгодным условиям. Заполняйте заявку у нас на сайте!</h2>
					<a class="button orange cta" href="#middle-top">Оформить кредит</a>
				</div>
				<div class="column-40">
					<img src="img/product-image-1.png" alt="product-image" class="bottom-cta-image">
				</div>
			</div>
		</div>
	</section>

	<section class="section footer">
		<div class="container">
			<div class="row">
				<div class="column-1000">
					<p>Copyright © 2016 Деньги Кредит.</p>
				</div>
			</div>
		</div>
	</section>

	<div id="thanks-popup" class="section thanks-popup mfp-hide">
 		<div class="thanks-heading">
 			<h1>Спасибо за доверие!</h1>
 		</div>
 		<div class="thanks-body">
 			<p>Наши специалисты уже обрабатывают вашу заявку!<br>
			И в ближайшее время (рабочее время) с вами свяжутся.</p>
<!-- 			<p>Хотие получить кредитную карту для удобных расчетов?</p>
			<a class="button orange" href="#">Оформляйте её здесь</a> -->
 		</div>
	</div>

	<!-- ==============================================
	JS
	=============================================== -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/modernizr.js"></script>
  	<script src="js/components.js"></script>
  	<script src="js/custom.js"></script>
    <script src="js/processor.js"></script>
    <script>
        window.onload = function() {
            $('#lastName').val('<?= value('lastName'); ?>');
            $('#firstName').val('<?= value('firstName'); ?>');
            $('#middleName').val('<?= value('middleName'); ?>');
            $('#phone').val('<?= value('phone'); ?>');
            $('#inn').val('<?= value('inn'); ?>');
            $('#age').val('<?= value('age'); ?>');
            $('#amount').val('<?= value('amount'); ?>');
            $('#employment').val('<?= value('employment'); ?>');

            var errorMessage = '<?= isset($message) ? $message : ''; ?>';
            var $alert = $('.alert-box');
            $alert.hide();
            if (errorMessage.length) {
                $alert.text(errorMessage);
                $alert.show();
                $alert.css({display:'block'});
            }
        };
    </script>

</body>
</html>