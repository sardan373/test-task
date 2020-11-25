<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);

if (empty($arResult['ITEMS']))
    return;
?>

<?foreach($arResult["ITEMS"] as $arItem):?>
    <?
    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
    ?>
        <div class="main" id="<?=$this->GetEditAreaId($arItem['ID']);?>" style="background: url('<?=$arItem['DETAIL_PICTURE']['SRC']?>') 50% 0 no-repeat;">
            <div class="container main__container h-100">
                <?if ($arItem["PREVIEW_PICTURE"]["SRC"]) {?>
                    <div class="main__logo-wrapper"><img class="main__logo" src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt=""></div>
                <?}?>
            </div>
        </div>
<?endforeach;?>
