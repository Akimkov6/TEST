<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?>



<!DOCTYPE html>
<html lang="ru">

<head>
    <?$APPLICATION->ShowHead();?>
    <title><?$APPLICATION->ShowTitle()?></title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/local/templates/.default/css/reset.css" />
    <link rel="stylesheet" href="/local/templates/.default/css/style.css" />
    <link rel="stylesheet" href="/local/templates/.default/css/owl.carousel.css" />
    <script src="/local/templates/.default/js/jquery.min.js"></script>
    <script src="/local/templates/.default/js/owl.carousel.min.js"></script>
    <script src="/local/templates/.default/js/scripts.js"></script>
    <link rel="icon" type="image/vnd.microsoft.icon"  href="./img/favicon.ico">
    <link rel="shortcut icon" href="./img/favicon.ico">
</head>

<body>
<?$APPLICATION->ShowPanel()?>
<!-- wrap -->
<div class="wrap">
    <!-- header -->
    <header class="header">
        <div class="inner-wrap">
            <div class="logo-block"><a href="" class="logo">Уже неМебельный магазин</a>
            </div>
            <div class="main-phone-block">
                <div class="shedule"></div>
            </div>
            <div class="actions-block">
                <form action="/" class="main-frm-search">
                    <input type="text" placeholder="Поиск">
                    <button type="submit"></button>
                </form>
                <nav class="menu-block">
                    <?$APPLICATION->IncludeComponent(
                            "bitrix:system.auth.form",
                            "auth",
                            array("COMPONENT_TEMPLATE" => "auth",
                                "REGISTER_URL" => "/user/reg.php",
                                "FORGOT_PASSWORD_URL" => "/user/",
                                "PROFILE_URL" => "/user/profile.php",
                                "SHOW_ERRORS" => "N"
                            ), false
                        );?>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <!-- /header -->
    <!-- nav -->
    <nav class="nav">
        <div class="inner-wrap">
            <div class="menu-block popup-wrap">
                <a href="" class="btn-menu btn-toggle"></a>
                <div class="menu popup-block">

                </div>
                <div class="menu-overlay"></div>
            </div>
        </div>
    </nav>
    <!-- /nav -->


    <!-- page -->
    <div class="page">
        <!-- content box -->
        <div class="content-box">
            <!-- content -->
            <div class="content">
                <div class="cnt">




