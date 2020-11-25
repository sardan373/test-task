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

<div class="slider d-none d-xl-block">
    <div class="container">
        <div class="slider__container col-12 offset-0 col-xl-10 offset-xl-1">
            <div class="slider__main">
                <?foreach($arResult["ITEMS"] as $arItem):?>
                    <?
                    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                    ?>
                    <img class="slider__pic" src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" alt="">
                <?endforeach;?>
            </div>
        </div>
    </div>
    <div class="slider__dots-container d-none d-md-block col-md-12 offset-0 col-xl-8 offset-xl-2">
        <div class="slider__dot">
            <?foreach($arResult["ITEMS"] as $arItem):?>
                <img class="slider__pic" src="<?=$arItem['PREVIEW_PICTURE']['THUMB_SRC']?>" alt="" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
            <?endforeach;?>
        </div>
    </div>
</div>
