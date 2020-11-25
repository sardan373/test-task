<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
	<div class="col-xl-8 nav-mobile">
		<nav class="nav align-items-start justify-content-xl-end align-items-xl-center justify-content-center h-100">
			<ul class="nav__list d-flex flex-column align-center justify-content-around flex-xl-row h-100">
                <?
                foreach($arResult as $arItem):
                    if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
                        continue;
                    $class = '';
                    if($arItem["SELECTED"]) {
                        $class = ' nav__item--active';
                    }
                ?>
                    <li class="nav__item<?=$class?>"><a class="nav__link" href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>                    
                <?endforeach?>
            </ul>
        </nav>
    </div>
    <div class="col-2 d-flex d-xl-none justify-content-end"><a class="burger-menu"><span class="burger-menu__elem"></span><span class="burger-menu__elem"></span><span class="burger-menu__elem"></span></a></div>
<?endif?>
