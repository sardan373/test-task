<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
    <div class="header__links d-md-block">
        <?
        $showDelimeter = false;
        foreach($arResult as $arItem):
            if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
                continue;
            if ($showDelimeter){
                echo ', ';
            }?>
            <a class="header__links--item" href="<?=$arItem["LINK"]?>">
                <?=$arItem["TEXT"]?>
            </a><?
        $showDelimeter = true;
        endforeach;
        ?>
    </div>
<?endif?>