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

<div class="info__list row">
    <?foreach($arResult["ITEMS"] as $arItem):?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>
            <div
                class="col-6 col-xl-3 info__item d-flex d-md-block flex-column flex-md-row"
                id="<?=$this->GetEditAreaId($arItem['ID']);?>"
                >
                <img class="ico" src="<?=CFile::GetPath($arItem['PROPERTIES']['PICTURE']['VALUE'])?>" alt="">
                <div class="d-flex flex-column">
                    <span class="info__nums"><?=$arItem['PROPERTIES']['NUMBER']['~VALUE']['TEXT']?></span>
                    <span class="info__desc"><?=$arItem['NAME']?></span>
                    </div>
            </div>
    <?endforeach;?>
</div>
