<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();?>

        </div>
        <!-- /content -->

    </div>
    <!-- /content box -->
<div class="side">
    <!-- side anonse -->
    <!-- /side anonse -->
    <!-- side wrap -->
    <div class="side-wrap">


        <!-- footer rew slider box -->
        <?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"vertical_multilevel1", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"COMPONENT_TEMPLATE" => "vertical_multilevel1",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "left",
		"USE_EXT" => "N",
		"MENU_THEME" => "green"
	),
	false
);?>
        <!-- / footer rew slider box -->
    </div>
    <!-- /side wrap -->
</div>
</div>
<!-- /page -->
<div class="empty"></div>
</div>
<!-- /wrap -->
<!-- footer -->
<footer class="footer">
    <div class="inner-wrap">


    </div>
</footer>
<!-- /footer -->
    </body>

</html>