<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("test");
CModule::IncludeModule('iblock');
print_r($_GET['str']);
?>


<hr/>
    <pre><?print_r($USER->GetID());?></pre>
<hr/>


<?/*$rsUsers = CUser::GetList();
        while($rsUsers->NavNext(true, "f_")) :
            echo "[".$f_ID."] (".$f_LOGIN.") ".$f_NAME." ".$f_LAST_NAME."<br>";
        endwhile;?>
    <pre>
<?
/*
$ELEMENT_ID = 10;  // код элемента
$PROPERTY_CODE = "ID_USER";  // код свойства
$PROPERTY_VALUE = ["555", "666"];  // значение свойства

// Установим новое значение для данного свойства данного элемента
CIBlockElement::SetPropertyValuesEx($ELEMENT_ID, false, array($PROPERTY_CODE => $PROPERTY_VALUE));
*/
/*


$arSelect = Array();
$arFilter = Array("IBLOCK_ID"=>2, "");
$res = CIBlockElement::GetList(Array(), $arFilter, false, Array(), $arSelect);
while($ob = $res->GetNextElement())
{
    $arFields = $ob->GetFields();
    print_r($arFields);
}*/
?><pre>
<?
$db_props = CIBlockElement::GetProperty(2, 10, array(), Array());
if($ar_props = $db_props->Fetch())
    $FORUM_TOPIC_ID = IntVal($ar_props["VALUE"]);
else
    $FORUM_TOPIC_ID = false;
print_r($ar_props["VALUE"]);
?>
</pre>


<?php

$user = explode(" ", $ar_props["VALUE"]);

if (in_array($USER->GetID(), $user)) {
    echo "Совпало";
}

else  {echo "не совпало";
}
?>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");?>
