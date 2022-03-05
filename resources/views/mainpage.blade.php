<!-- Верстка главной страницы -->
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, maximum-scale=1">
    <title>Astarus Projects</title>
    <link rel="icon" src="img/logo.png" type="image/png">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <link href="css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="css/animate.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/stylename.css" rel="stylesheet" type="text/css">


    <!--[if lt IE 9]>
    <script src="js/respond-1.1.0.min.js"></script>
    <script src="js/html5shiv.js"></script>
    <script src="js/html5element.js"></script>

    <![endif]-->
</head>
<body>

<!--Первый слайд-->
@include('result_message')
<section id="hero_section"  class="top_cont_outer">
    <div class="hero_wrapper top_cont_outer">
        <div class="container-fluid" >
            <div class="row need-hideDesc WhiteBack">
                <div class="col-md-offset-1 col-md-2 col-xs-offset-1 col-xs-3">
                    <a href="/"><img class="marginImg" src="img/logo.png" alt="logo"></a>
                </div>

                <div class="col-md-offset-10 col-md-2 col-xs-offset-10 col-xs-2 ">
                    <div class="dropdown marginDrop">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                            <img src="img/GroupDrop.png">
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="/dashboard">Личный кабинет</a></li>
                            <li><a href="/admin">Панель администратора</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row need-hide">
                <div class="col-md-offset-1 col-md-6 col-xs-offset-1 col-xs-3">
                    <a href="/"><img class="marginImg" src="img/logo.png" alt="logo"></a>
                </div>
                <div class="col-md-offset-10 col-md-2 col-xs-offset-10 col-xs-3 ">
                    <div class="dropdown marginDrop">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                            <img src="img/GroupDrop.png">
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="/dashboard"><h2>Личный кабинет</h2></a></li>
                            <li><a href="/admin"><h2>Панель администратора</h2></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="hero_section" >
                <div class="row justify-left">
                    <div class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1">
                        <h2 class="h2Main"><strong>Разработка мобильных<br> приложений и веб-сервисов</strong> </h2>
                        <p class="p2Main">Повышаем лояльность и продажи, улучшаем сервис,<br> снижаем расходы за счет
                            автоматизации и оптимизации бизнес-процессов  с <br>помощью мобильных приложений и
                            веб-сервисов.</p>
                        <a href="#feedback-form" class="read_more2">  Рассчитать проект  </a>
                        <img class="img2Main need-hide" src="img/groupimg.png">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Первый слайд-->
<!--Кейсы-->
<section id="aboutUs">
    <div class="inner_wrapper">
        <div class="container-fluid">
            <div class="col-md-offset-10">
            <img class="img2MainSecond need-hide" src="img/Group263.png">
            </div>
            <div class="row justify-content-center">
                <div class="col-md-11 col-md-offset-1 col-xs-offset-1 col-xs-10">
                    <h2 class="h2Sec"><strong>Проекты</strong></h2>
                    <div id="myCarousel1" class="carousel slide" data-ride="carousel" data-interval="0">
                        <!-- Wrapper for carousel items -->
                        <div class="carousel-inner need-hide">
                            <div class="item active">
                                <div class="row">
                                    <div class="col-xs-12 col-md-3">
                                        <div class="thumb-wrapper">
                                            <div class="img-box">
                                                <img src="img/image8.png" class="img-responsive" alt="">
                                            </div>
                                            <div class="thumb-content">
                                                <h4><strong>Castrol</strong></h4>
                                                <p class="item-price">A weekly round-up for Web and app developers spanning the mobile-facing Web and native apps.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-md-3">
                                        <div class="thumb-wrapper">
                                            <div class="img-box">
                                                <img src="img/image8.png" class="img-responsive" alt="">
                                            </div>
                                            <div class="thumb-content">
                                                <h4><strong>Castrol</strong></h4>
                                                <p class="item-price">A weekly round-up for Web and app developers spanning the mobile-facing Web and native apps.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-md-3">
                                        <div class="thumb-wrapper">
                                            <div class="img-box">
                                                <img src="img/image8.png" class="img-responsive" alt="">
                                            </div>
                                            <div class="thumb-content">
                                                <h4><strong>Castrol</strong></h4>
                                                <p class="item-price">A weekly round-up for Web and app developers spanning the mobile-facing Web and native apps.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="row">
                                    <div class="col-xs-12 col-md-3">
                                        <div class="thumb-wrapper">
                                            <div class="img-box">
                                                <img src="img/image8.png" class="img-responsive" alt="">
                                            </div>
                                            <div class="thumb-content">
                                                <h4><strong>Castrol</strong></h4>
                                                <p class="item-price">A weekly round-up for Web and app developers spanning the mobile-facing Web and native apps.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-md-3">
                                        <div class="thumb-wrapper">
                                            <div class="img-box">
                                                <img src="img/image8.png" class="img-responsive" alt="">
                                            </div>
                                            <div class="thumb-content">
                                                <h4><strong>Castrol</strong></h4>
                                                <p class="item-price">A weekly round-up for Web and app developers spanning the mobile-facing Web and native apps.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-md-3">
                                        <div class="thumb-wrapper">
                                            <div class="img-box">
                                                <img src="img/image8.png" class="img-responsive" alt="">
                                            </div>
                                            <div class="thumb-content">
                                                <h4><strong>Castrol</strong></h4>
                                                <p class="item-price">A weekly round-up for Web and app developers spanning the mobile-facing Web and native apps.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="row">
                                    <div class="col-xs-12 col-md-3">
                                        <div class="thumb-wrapper">
                                            <div class="img-box">
                                                <img src="img/image8.png" class="img-responsive" alt="">
                                            </div>
                                            <div class="thumb-content">
                                                <h4 >Castrol</h4>
                                                <p class="item-price">A weekly round-up for Web and app developers spanning the mobile-facing Web and native apps.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-md-3">
                                        <div class="thumb-wrapper">
                                            <div class="img-box">
                                                <img src="img/image8.png" class="img-responsive" alt="">
                                            </div>
                                            <div class="thumb-content">
                                                <h4 >Castrol</h4>
                                                <p class="item-price">A weekly round-up for Web and app developers spanning the mobile-facing Web and native apps.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-md-3">
                                        <div class="thumb-wrapper">
                                            <div class="img-box">
                                                <img src="img/image8.png" class="img-responsive" alt="">
                                            </div>
                                            <div class="thumb-content">
                                                <h4 >Castrol</h4>
                                                <p class="item-price">A weekly round-up for Web and app developers spanning the mobile-facing Web and native apps.</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="item">
                                <div class="row">
                                    <div class="col-xs-12 col-md-3">
                                        <div class="thumb-wrapper">
                                            <div class="img-box">
                                                <img src="img/image8.png" class="img-responsive" alt="">
                                            </div>
                                            <div class="thumb-content">
                                                <h4 >Castrol</h4>
                                                <p class="item-price">A weekly round-up for Web and app developers spanning the mobile-facing Web and native apps.</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="item">
                                <div class="row">
                                    <div class="col-xs-12 col-md-3">
                                        <div class="thumb-wrapper">
                                            <div class="img-box">
                                                <img src="img/image8.png" class="img-responsive" alt="">
                                            </div>
                                            <div class="thumb-content">
                                                <h4 >Castrol</h4>
                                                <p class="item-price">A weekly round-up for Web and app developers spanning the mobile-facing Web and native apps.</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>

                        <div class="carousel-inner need-hideDesc">
                            <div class="item active">
                                <div class="row">
                                    <div class="col-xs-12 col-md-3">
                                        <div class="thumb-wrapper">
                                            <div class="img-box">
                                                <img src="img/image8.png" class="img-responsive" alt="">
                                            </div>
                                            <div class="thumb-content">
                                                <h4><strong>Castrol</strong></h4>
                                                <p class="item-price">A weekly round-up for Web and app developers spanning the mobile-facing Web and native apps.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="row">
                                    <div class="col-xs-12 col-md-3">
                                        <div class="thumb-wrapper">
                                            <div class="img-box">
                                                <img src="img/image8.png" class="img-responsive" alt="">
                                            </div>
                                            <div class="thumb-content">
                                                <h4><strong>Castrol</strong></h4>
                                                <p class="item-price">A weekly round-up for Web and app developers spanning the mobile-facing Web and native apps.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="row">
                                    <div class="col-xs-12 col-md-3">
                                        <div class="thumb-wrapper">
                                            <div class="img-box">
                                                <img src="img/image8.png" class="img-responsive" alt="">
                                            </div>
                                            <div class="thumb-content">
                                                <h4 >Castrol</h4>
                                                <p class="item-price">A weekly round-up for Web and app developers spanning the mobile-facing Web and native apps.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Carousel controls -->
                            <div class="row need-hideDesc">
                                <div class="col-xs-4  col-xs-offset-3  controls"  >
                                    <a class="carousel-control left" href="#myCarousel1" data-slide="prev">
                                        <i class="fa fa-angle-left"></i>
                                    </a>
                                    <a class="carousel-control right" href="#myCarousel1" data-slide="next">
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                </div>
                            </div>

                        </div>
                        <!-- Carousel indicators -->
                        <div class="row">
                            <div class="col-xs-12 col-md-3 col-xs-offset-1 col-md-offset-3">
                                <ol class="carousel-indicators">
                                    <li data-target="#myCarousel1" data-slide-to="0" class="active"></li>
                                    <li data-target="#myCarousel1" data-slide-to="1" ></li>
                                    <li data-target="#myCarousel1" data-slide-to="2" ></li>

                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Кейсы-->
<!--Консультация-->
<section  id="service">
    <div class="container-fluid">
        <div>
            <img class="img2Main" src="img/Group264.png">
        </div>

        <div class="service_wrapper">
            <div class="row">
                <div class="col-md-5 col-md-offset-1 col-xs-11 col-xs-offset-1 marginForCons">
                    <h2 class="h2Third">Получить консультацию</h2>
                    <p class="pCons">Краткий текст информация, описание акции или просто призыв к действию</p>
                </div>
                <div class="col-md-4 col-md-offset-2 col-xs-offset-1 col-xs-11 ButtonCons">
                    <a href="#feedback-form" class="read_more2 ">Рассчитать проект</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Консультация-->
<!--Как мы работаем-->
<section  id="clients">
    <div class="inner_wrapper size">
     <div class="container-fluid">
         <div class="col-md-offset-10">
             <img class="img2Main need-hide" src="img/Group266.png">
         </div>
         <div class="col-md-11  col-xs-11 col-md-offset-1 col-xs-offset-1">
             <h2 class="morePad h2Third"><strong>Как мы работаем</strong></h2>
         </div>
     </div>
    <div class="client_logos newWidth">
        <div class="container-fluid">
            <div class="bs-callout bs-callout-active" id="callout-glyphicons-dont-mix">
                <div class="row">
                    <div class="col-md-2">
                        <h3 ><strong>Анализ</strong></h3>
                    </div>
                    <div class="col-md-9">
                        <p>Анализируем и прорабатываем бизнес-модель проекта, его потребности. Проводим бенчмаркинг и анализ конкурентов. Дорабатываем концепцию. Определяем роли пользователей, функционал для каждой роли. Результаты сводим в документе, называемом "бэклог".</p>
                    </div>
                </div>
            </div>
            <div class="bs-callout" id="callout-glyphicons-dont-mix">
                <div class="row">
                    <div class="col-md-2">
                        <h3><strong>UX</strong></h3>
                    </div>
                    <div class="col-md-9">
                        <p>После этого UX-специалист создаёт интерактивные прототипы. Мы приводим в соответствие визуальную часть и функционал из бэклога . На этом этапе интерфейс выглядит схематично. Это путь, по которому пользователь будет "ходить" по приложению.</p>
                    </div>
                </div>
            </div>
            <div class="bs-callout" id="callout-glyphicons-dont-mix">
                <div class="row">
                    <div class="col-md-2">
                        <h3><strong>UI</strong></h3>
                    </div>
                    <div class="col-md-9">
                        <p>Далее — UI. Рисуем приятный интерфейс и уникальный корпоративный стиль для вашего проекта. Отрисовываем анимации, инфографику, иконки и логотип.</p>
                    </div>
                </div>
            </div>
            <div class="bs-callout" id="callout-glyphicons-dont-mix">
                <div class="row">
                    <div class="col-md-2">
                        <h3><strong>Dev</strong></h3>
                    </div>
                    <div class="col-md-9">
                        <p>Когда макеты созданы, мы приступаем к разработке программной части приложения.
                            Когда проект готов и полностью протестирован, размещаем его на Google Play и AppStore.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
        </div>
</section>
<!--Как мы работаем-->
<!-- Выбор пакета -->
<section id="Portfolio" class="content">
    <div class="container-fluid portfolio_title">
        <div class="col-md-11  col-xs-11 col-md-offset-1 col-xs-offset-1">
            <h2 class="h2Sec"><strong>Выбор пакета</strong></h2>
        </div>
    </div>
<div class="container newWidth">
    <div class="row" >
        <div class="col-xs-12 col-md-4 thumbnail2">
            <a href="#feedback-form" class="thumbnail">
                <img class="imgHow" src="/img/Vector.png" alt="...">
                <h2 class="align-center">Демоверсия</h2>
                <p class="pNew">
                    Демоверсия включает в себя не только схемы и прототипы, но и живой функционал - реализованную механику работы приложения или важнейший функционал по бэклогу.
                    Ее можно запустить в подготовленной среде. Это не позволит проверить гипотезы на пользователях, но вы сможете потестировать функционал и показать его инвесторам.
                </p>
                <button href="#feedback-form" class="read_more2gray"> Рассчитать проект </button>
            </a>
        </div>
        <div class="col-xs-12 col-md-4">
            <a href="#feedback-form" class="thumbnail">
                <img class="imgHow" src="/img/Outline.png" alt="...">
                <h2 class="align-center">Разработка <br> полного продукта</h2>
                <p class="pNew" >
                    Это полный цикл создания продукта. Мы реализуем весь функционал, который согласовали в бэклоге. Вы получаете целостный продукт без "заглушек".
                    Пакет содержит анализ, описание требований, и обработку идеи, подготовку технической документации, проектирование, разработку фирменного стиля и всех интерфейсов, разработку мобильных приложений. После этого мы размещаем приложение на AppStore, Google Play, продвигаем в сети, помогаем собирать и анализировать статистику.
                </p>
                <button href="#feedback-form" class="read_more2">Рассчитать проект </button>
            </a>
        </div>
        <div class="col-xs-12 col-md-4 thumbnail2">
            <a href="#feedback-form" class="thumbnail">
                <img class="imgHow" src="/img/Group.png" alt="...">
                <h2 class="align-center">MVP</h2>
                <p class="pNew">
                    Приложение с минимальным набором функционала, которое можно использовать на мобильных устройствах. К примеру, мессенджер, с помощью которого можно только переписываться, но не обмениваться файлами и тому подобное.
                    В отличие от демоверсии, это полноценная разработка, хотя и с минимальным дизайном и функционалом.
                </p>
                <button  class="read_more2gray">Рассчитать проект</button>
            </a>
        </div>
    </div>

</div>
</section>
<!--Наши клиенты -->
<section class="page_section" id="clients">
    <div class="container-fluid">
        <div class="col-md-11 col-xs-11 col-md-offset-1 col-xs-offset-1">
        <h2 class="h2Sec"><strong>Наши клиенты</strong></h2>
        </div>
        <div class='row need-hideDesc'>
            <div class="container-fluid">
                <div class='col-md-offset-2 col-md-8'>
                    <div class="carousel slide" data-ride="carousel" id="quote-carousel3">
                        <div class="carousel-inner">
                            <!-- Клиент 1 -->
                            <div class="item active">
                                <blockquote>
                                    <div class="row justify-content-center">
                                        <div class="col-xs-6 marginImg">
                                            <a href="javascript:void(0)"><img src="img/amocrm-logo-white 1.png" alt=""></a>
                                        </div>
                                        <div class="col-xs-6 marginImg">
                                            <a href="javascript:void(0)"><img src="img/1c-bitrix-logo 1.png" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-xs-6 marginImg">
                                            <a href="javascript:void(0)"><img src="img/amocrm-logo-white 1.png" alt=""></a>
                                        </div>
                                        <div class="col-xs-6 marginImg">
                                            <a href="javascript:void(0)"><img src="img/1c-bitrix-logo 1.png" alt=""></a>
                                        </div>
                                    </div>
                                </blockquote>
                            </div>
                            <!-- Клиент 2 -->
                            <div class="item">
                                <blockquote>
                                    <div class="row justify-content-center">
                                        <div class="col-xs-6 marginImg">
                                            <a href="javascript:void(0)"><img src="img/amocrm-logo-white 1.png" alt=""></a>
                                        </div>
                                        <div class="col-xs-6 marginImg">
                                            <a href="javascript:void(0)"><img src="img/1c-bitrix-logo 1.png" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-xs-6 marginImg">
                                            <a href="javascript:void(0)"><img src="img/amocrm-logo-white 1.png" alt=""></a>
                                        </div>
                                        <div class="col-xs-6 marginImg">
                                            <a href="javascript:void(0)"><img src="img/1c-bitrix-logo 1.png" alt=""></a>
                                        </div>
                                    </div>
                                </blockquote>
                            </div>
                            <!-- Клиент 3 -->
                            <div class="item">
                                <blockquote>
                                    <div class="row justify-content-center">
                                        <div class="col-xs-6 marginImg">
                                            <a href="javascript:void(0)"><img src="img/amocrm-logo-white 1.png" alt=""></a>
                                        </div>
                                        <div class="col-xs-6 marginImg">
                                            <a href="javascript:void(0)"><img src="img/1c-bitrix-logo 1.png" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-xs-6 marginImg">
                                            <a href="javascript:void(0)"><img src="img/amocrm-logo-white 1.png" alt=""></a>
                                        </div>
                                        <div class="col-xs-6 marginImg">
                                            <a href="javascript:void(0)"><img src="img/1c-bitrix-logo 1.png" alt=""></a>
                                        </div>
                                    </div>
                                </blockquote>
                            </div>
                        </div>
                        <div class="col-xs-4 col-md-4 col-xs-offset-4 col-md-offset-4">
                            <!-- Точечные индикаторы -->
                            <ol class="carousel-indicators myIndicator">
                                <li data-target="#quote-carousel3" data-slide-to="0" class="active"></li>
                                <li data-target="#quote-carousel3" data-slide-to="1"></li>
                                <li data-target="#quote-carousel3" data-slide-to="2"></li>
                            </ol>
                        </div>
                        <div class="need-hide">
                            <!-- Кнопки След.Пред. -->
                            <a data-slide="prev" href="#quote-carousel3" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
                            <a data-slide="next" href="#quote-carousel3" class="right carousel-control"><i class="fa fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!--Наши клиенты -->
    <!-- Логотипы -->
        <div class="client_logos need-hide">
            <div class="container-fluid">
                <div class="col-md-offset-1 col-xs-offset-1 col-md-2">
                    <ul class="fadeInRight animated wow">
                        <li><a href="javascript:void(0)"><img src="img/amocrm-logo-white 1.png" alt=""></a></li>
                    </ul>
                </div>
                <div class="col-md-2">
                    <ul class="fadeInRight animated wow">
                        <li><a href="javascript:void(0)"><img src="img/1c-bitrix-logo 1.png" alt=""></a></li>
                    </ul>
                </div>
                <div class="col-md-2">
                    <ul class="fadeInRight animated wow">
                        <li><a href="javascript:void(0)"><img src="img/amocrm-logo-white 1.png" alt=""></a></li>
                    </ul>
                </div>
                <div class="col-md-2">
                    <ul class="fadeInRight animated wow">
                        <li><a href="javascript:void(0)"><img src="img/amocrm-logo-white 1.png" alt=""></a></li>
                    </ul>
                </div>
                <div class="col-md-2">
                    <ul class="fadeInRight animated wow">
                        <li><a href="javascript:void(0)"><img src="img/amocrm-logo-white 1.png" alt=""></a></li>
                    </ul>
                </div>
            </div>
            <!-- Второй ряд -->
            <div class="container-fluid">
                <div class="col-md-offset-1 col-xs-offset-1 col-md-2">
                    <ul class="fadeInRight animated wow">
                        <li><a href="javascript:void(0)"><img src="img/amocrm-logo-white 1.png" alt=""></a></li>
                    </ul>
                </div>
                <div class="col-md-2">
                    <ul class="fadeInRight animated wow">
                        <li><a href="javascript:void(0)"><img src="img/1c-bitrix-logo 1.png" alt=""></a></li>
                    </ul>
                </div>
                <div class="col-md-2">
                    <ul class="fadeInRight animated wow">
                        <li><a href="javascript:void(0)"><img src="img/amocrm-logo-white 1.png" alt=""></a></li>
                    </ul>
                </div>
                <div class="col-md-2">
                    <ul class="fadeInRight animated wow">
                        <li><a href="javascript:void(0)"><img src="img/amocrm-logo-white 1.png" alt=""></a></li>
                    </ul>
                </div>
                <div class="col-md-2">
                    <ul class="fadeInRight animated wow">
                        <li><a href="javascript:void(0)"><img src="img/amocrm-logo-white 1.png" alt=""></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Логотипы -->
<!-- Отзывы -->
<section class="page_section team" id="team">
    <div class="row">
        <div class="container-fluid" style="width: 100%">
            <div class="col-md-6 col-xs-6 col-md-offset-1 col-xs-offset-1">
                <h2 class="h2Sec"><strong>Отзывы</strong></h2>
            </div>
        </div>
    </div>
    <div class='row'>
        <div class="container-fluid">
        <div class='col-md-offset-2 col-md-8'>
            <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                <!-- Карусель отзывов -->
                <div class="carousel-inner">
                    <!-- Отзыв 1 -->
                    <div class="item active">
                        <blockquote>
                            <div class="row justify-content-center">
                                <div class="col-md-12 col-xs-12 marginImgBot">
                                    <img class="img-circle" src="img/photo.png" >
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-md-12 col-xs-12">
                                    <p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit!</p>
                                    <small>Someone famous</small>
                                    <div class="col-md-12 col-xs-12">
                                        <img  src="img/1c-bitrix-logo 1.png" alt="" width="25%" height="25%">
                                    </div>
                                </div>
                            </div>
                        </blockquote>
                    </div>
                    <!-- Отзыв 2 -->
                    <div class="item">
                        <blockquote>
                            <div class="row justify-content-center">
                                <div class="col-md-12 col-xs-12 marginImgBot">
                                    <img class="img-circle" src="img/photo.png" >
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-md-12 col-xs-12">
                                    <p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit!</p>
                                    <small>Someone famous</small>
                                    <div class="col-md-12 col-xs-12">
                                        <img  src="img/1c-bitrix-logo 1.png" alt="" width="25%" height="25%">
                                    </div>
                                </div>
                            </div>
                        </blockquote>
                    </div>
                    <!-- Отзыв 3 -->
                    <div class="item">
                        <blockquote>
                            <div class="row justify-content-center">
                                <div class="col-md-12 col-xs-12 marginImgBot">
                                    <img class="img-circle" src="img/photo.png" >
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-md-12 col-xs-12">
                                    <p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit!</p>
                                    <small>Someone famous</small>
                                    <div class="col-md-12 col-xs-12">
                                        <img  src="img/1c-bitrix-logo 1.png" alt="" width="25%" height="25%">
                                    </div>
                                </div>
                            </div>
                        </blockquote>
                    </div>
                </div>
                <div class="col-xs-4 col-md-4 col-xs-offset-4 col-md-offset-4">
                    <!-- Точечные индикаторы -->
                    <ol class="carousel-indicators myIndicator">
                        <li data-target="#quote-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#quote-carousel" data-slide-to="1"></li>
                        <li data-target="#quote-carousel" data-slide-to="2"></li>
                    </ol>
                </div>
                <div class="need-hide">
                    <!-- Кнопки След.Пред. -->
                    <a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
                    <a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a>
                </div>
                </div>
        </div>
    </div>
    </div>
</section>
<!-- Отзывы -->
<!--Форма обратной связи-->



<section id="feedback-form">

    <div class="feedback-form">
            <div class="container-fluid portfolio_title">
                <div class="col-md-8  col-xs-10 col-md-offset-1 col-xs-offset-1">
                    <h2 class="h2Sec"><strong>Оставьте заявку</strong></h2>
                </div>
            </div>
            <div class="container-fluid feedback_window">
                <div class="row">
                    <div class="col-md-11">
                        <h2 class="marginFeedbackTitle">
                            Заполните небольшой бриф и получите рассчет стоимости Вашего приложения
                        </h2>
                    </div>
                    <div class="col-md-1">
                        <div class="quiz-indicator" id="indicator">1/2</div>
                    </div>
                </div>
                    <hr>
                <div class="row">
                    <div class="quiz" id="quiz">
                        <div class="quiz-questions" id="questions"></div>
                        <div class="quiz-results" id="results"></div>

                        <div class="quiz-controls">
                            <button class="restart" id="restart">С начала</button>
                            <button class=" back " id="back" disabled>Назад</button>
                            <button class=" next " id="next" disabled>Далее</button>
                        </div>
                    </div>
                </div>
            </div>

    </div>
</section>
<!--Форма обратной связи-->
<!--Подвал-->
<footer class="footer_wrapper" id="contact">
    <div class="container-fluid need-hideDesc">
        <div class="col-md-11 col-xs-11 col-md-offset-1 col-xs-offset-1">
            <section class="page_section contact" id="contact">
                <div class="row">
                    <div class="col-xs-6 wow fadeInLeft">
                        <div class="contact_info center">
                            <div class="detail">
                                <p class="pLeft">О нас</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 wow fadeInLeft">
                        <div class="contact_info center">
                            <div class="detail">
                                <p class="pLeft">Блог</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 wow fadeInLeft">
                        <div class="contact_info center">
                            <div class="detail">
                                <p class="pLeft">Поддержка</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 wow fadeInLeft">
                        <div class="contact_info center">
                            <div class="detail">
                                <p class="pLeft">Контакты</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 wow fadeInLeft">
                        <div class="contact_info center">
                            <div class="detail">
                                <p class="pLeft">Портфолио</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 wow fadeInLeft">
                        <div class="contact_info center">
                            <div class="detail">
                                <p class="pLeft">Карьера</p>
                            </div>
                        </div>
                    </div>
                </div>

            </section>
        </div>
    </div>
    <div class="container-fluid">
        <div class="col-md-11 col-xs-11 col-md-offset-1 center">
        <section class="page_section contact" id="contact">
            <div class="contact_section">

                <h2 class="fontNew center">Есть проект? Напишите нам!</h2>

                </div>
            <div class="row">
                <div class="col-lg-4 wow fadeInLeft">
                    <div class="contact_info">
                        <div class="detail">
                            <p class="pCons">+1 234 567890</p>
                        </div>
                        <div class="detail supportEmail">
                            <p class="pCons">support@sitename.com</p>
                        </div>
                    </div>

                    <ul class="social_links center">
                        <li class="twitter animated bounceIn wow delay-02s"><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
                        <li class="facebook animated bounceIn wow delay-03s"><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
                        <li class="pinterest animated bounceIn wow delay-04s"><a href="javascript:void(0)"><i class="fa fa-pinterest"></i></a></li>
                        <li class="gplus animated bounceIn wow delay-05s"><a href="javascript:void(0)"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                </div>

            </div>
            <div class="footer_bottom"><span>© 2022</span> </div>
        </section>
        </div>
    </div>
</footer>
<!-- Подвал -->
<!-- Скрипты -->
<script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery-scrolltofixed.js"></script>
<script type="text/javascript" src="js/jquery.nav.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery.isotope.js"></script>
<script type="text/javascript" src="js/wow.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript" src="/js/app.js"></script>
<!-- Скрипты -->
</body>
</html>
