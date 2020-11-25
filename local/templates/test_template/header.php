<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta charset="utf-8">
        <meta name="robots" content="index, follow">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <?\Bitrix\Main\Page\Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/main.css");?>
        <?$APPLICATION->ShowHead();?>
        <title><?$APPLICATION->ShowTitle()?></title>
        <script src="https://api-maps.yandex.ru/2.1/?apikey=&lt;e1f2c454-88cf-4d81-b25f-09909cd64251&gt;&amp;lang=ru_RU" type="text/javascript"></script>
        <!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    </head>
    <body>
        <div id="panel"><?$APPLICATION->ShowPanel();?></div>
        <header class="header">
            <div class="container header__container">
                <div class="row align-items-center h-100">
                    <div class="col-10 col-xl-4 d-flex">
                        <a class="logo" href="/"><img src="/img/logo.svg"></a>
                        <?$APPLICATION->IncludeComponent("bitrix:menu","header_small",Array(
                                "ROOT_MENU_TYPE" => "header_small", 
                                "MAX_LEVEL" => "1", 
                                "CHILD_MENU_TYPE" => "top", 
                                "USE_EXT" => "Y",
                                "DELAY" => "N",
                                "ALLOW_MULTI_SELECT" => "Y",
                                "MENU_CACHE_TYPE" => "N", 
                                "MENU_CACHE_TIME" => "3600", 
                                "MENU_CACHE_USE_GROUPS" => "Y", 
                                "MENU_CACHE_GET_VARS" => "" 
                            )
                        );?>
                    </div>
                    <?$APPLICATION->IncludeComponent("bitrix:menu","header",Array(
                            "ROOT_MENU_TYPE" => "top", 
                            "MAX_LEVEL" => "1", 
                            "CHILD_MENU_TYPE" => "top", 
                            "USE_EXT" => "Y",
                            "DELAY" => "N",
                            "ALLOW_MULTI_SELECT" => "Y",
                            "MENU_CACHE_TYPE" => "N", 
                            "MENU_CACHE_TIME" => "3600", 
                            "MENU_CACHE_USE_GROUPS" => "Y", 
                            "MENU_CACHE_GET_VARS" => "" 
                        )
                    );?>
                </div>
            </div>
        </header>
