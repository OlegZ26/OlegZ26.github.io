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
  <link rel="stylesheet" href="css/rev-grid.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/base.css">
  <link rel="stylesheet" href="css/first-demo.css">
  <link rel="stylesheet" href="css/responsive.css">

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

</head>

<body class="no-preloader" id="top">

    <section class="section intro">
        <div class="container container-back">
            <div class="row">
                <div class="column-1000 text-center intro-heading-block">
                    <p class="success-title">Спасибо, заявка принята.</p>
                    <img class="checked-img" src="img/checked.png" alt="checked" class="">
                    <p class="success-message">Cотрудник банка позвонит Вам в течение часа. Рабочее время с 9:00 до 20:00 без выходных.<br>Будьте готовы продиктовать паспортные данные и ИНН, а также приготовьте 2 стационарных номера телефонов, по которым могут подтвердить, что вас знают. Это могут быть ваш домашний телефон, вашего места работы, родственников или соседей.</p>
                    <div class="column-500">
                        <hr>
                    </div>
                </div>
            </div>
            <div class="row" id="middle-top">
                <div class="column-1000 text-center">
                    <p class="card-title">Получите бесплатно кредитную карту с лимитом до 50 000 гривен!</p>
                    <div class="column-25">
                        <p class="bank-name">ПУМБ</p>
                        <img class="credit-card-img" src="img/pumb.png" alt="pumb-card">
                    </div>
                    <div class="column-25">
                        <p class="bank-name">ОТП Банк</p>
                        <img class="credit-card-img" src="img/otpbank.png" alt="otpbank-card">
                    </div>
                    <div class="column-25">
                        <p class="bank-name">Банк Михайловский</p>
                        <img class="credit-card-img" src="img/muhailovski.png" alt="muhailovski-card">
                    </div>
                    <div class="column-25">
                        <p class="bank-name">Альфа Банк</p>
                        <img class="credit-card-img" src="img/alfabank.png" alt="alfabank-card">
                    </div>
                </div>
                <div class="column-60 text-column text-center text-column-success2">
                    <div class="row">
                        <div class="column-80">
                            <h2 class="block-title">Основные выгоды кредитной карты</h2>
                            <ul class="intro-features intro-features-success">
                                <li><img src="img/icon-check.png" alt="check icon">Беспроцентный период до 100 дней</li>
                                <li><img src="img/icon-check.png" alt="check icon">0% за снятие в любых банкоматах</li>
                                <li><img src="img/icon-check.png" alt="check icon">Возобновляемая кредитная линия</li>
                                <li><img src="img/icon-check.png" alt="check icon">Мгновенная рассрочка на любом сайтe</li>
                                <li><img src="img/icon-check.png" alt="check icon">Мгновенная рассрочка на любом сайтe</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section form-clients section-success">
        <div class="container">
            <div class="row">
                <div class="column-40 form-column form-column__success2 text-center">
                    <form method="post" action="/senderthank.php" class="main-form main-form-success" id="requestForm">
                        <input class="required" type="text" name="lastName" id="lastName" maxlength="70" placeholder="Фамилия*">
                        <input class="required" type="text" name="firstName" id="firstName" maxlength="70" placeholder="Имя*">
                        <input class="required" id="phone" name="phone" type="text" maxlength="10" placeholder="Контактный телефон*">
                        <input class="required" id="inn" name="inn" type="text" maxlength="10" placeholder="Ваш ИНН*">
                        <input class="required" id="city" name="city" type="text" placeholder="Город*">
                        <select class="required" name="amount" id="amount">
                            <option value="12000">Желаемый кредитный лимит</option>
                            <option value="4000">1000 - 5000</option>
                            <option value="9000">5000 - 10000</option>
                            <option value="14000">10000 - 15 000</option>
                            <option value="18500">15 000 - 20 000</option>
                            <option value="26000">20 000 - 30 000</option>
                            <option value="40000">30 000 - 50 000</option>
                        </select>
                        <select class="required" name="employment" id="employment">
                            <option value="official">Трудоустройство</option>
                            <option value="official">Официально трудоустроен</option>
                            <option value="officialPrivate">Работаю на СПД</option>
                            <option value="private">СПД</option>
                            <option value="pensioner">Пенсионер</option>
                            <option value="unofficial">Работаю не официально</option>
                            <option value="maternityLeave">Декретный отпуск</option>
                            <option value="no">Временно не работаю</option>
                        </select>
                        <div class="submit-holder">
                            <input class="button button__success" type="submit" id="submit" value="Оформить кредитную карту">
                        </div>
                        <?php
                            $partners = array('module_f');
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
            </div>
        </div>
    </section>

  <!-- ==============================================
  JS
  =============================================== -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/modernizr.js"></script>
    <script src="js/components.js"></script>

</body>
</html>