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

<div class="project">
    <div class="container">
        <ul class="nav nav-tabs project__switch d-flex" id="myTab" role="tablist">
            <?
            $first = true;
            foreach($arResult["ITEMS"] as $key => $arItem):
                ?>
                <li class="nav-item">
                    <a
                        class="nav-link<?if ($first) {?> active<?}?> project__switch-item"
                        id="tab<?=$key?>-tab"
                        data-toggle="tab"
                        href="#tab<?=$key?>"
                        role="tab"
                        aria-controls="tab<?=$key?>"
                        aria-selected="<?if ($first){?>true<?}else{?>false<?}?>"
                        >
                        <?=$arItem['NAME']?>
                    </a>
                    </li>
                <?
                $first = false;
            endforeach;
            ?>
        </ul>
    </div>

    <div class="tab-content" id="myTabContent">
        <?
        $first = true;
        foreach($arResult["ITEMS"] as $key => $arItem):
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            ?>
                <div
                    class="project__content tab-pane fade<?if ($first) {?> show active<?}?>"
                    id="tab<?=$key?>"
                    role="tabpanel"
                    aria-labelledby="tab<?=$key?>-tab"
                    >
                    <div class="project__wrap container-fluid d-flex" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                        <div class="row">
                            <div
                                class="project__picture col-12 col-lg-6 order-lg-1"
                                style="background: url('<?=CFile::ResizeImageGet($arItem['PREVIEW_PICTURE']['ID'], ['height' => 666, 'width' => 825], BX_RESIZE_IMAGE_EXACT)['src']?>') left top no-repeat;"
                                ></div>
                            <div class="container-fluid col-12 col-lg-6">
                                <div class="project__about">
                                    <div class="title title--gold project__title"><?=$arItem['NAME']?></div>
                                    <?=$arItem['PREVIEW_TEXT']?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?
            $first = false;
        endforeach;
        ?>
    </div>
</div>
