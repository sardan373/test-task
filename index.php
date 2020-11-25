<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "");
$APPLICATION->SetTitle("Новые котельники");
?>

<?$APPLICATION->IncludeComponent("bitrix:news.list","mainpage_mainbanner",Array(
        "DISPLAY_DATE" => "N",
        "DISPLAY_NAME" => "Y",
        "DISPLAY_PICTURE" => "Y",
        "DISPLAY_PREVIEW_TEXT" => "N",
        "AJAX_MODE" => "N",
        "IBLOCK_TYPE" => "content",
        "IBLOCK_ID" => "1",
        "NEWS_COUNT" => "1",
        "SORT_BY1" => "SORT",
        "SORT_ORDER1" => "ASC",
        "SORT_BY2" => "DATE_BEGIN",
        "SORT_ORDER2" => "DESC",
        "FILTER_NAME" => "",
        "FIELD_CODE" => Array("*"),
        "PROPERTY_CODE" => Array("*"),
        "CHECK_DATES" => "Y",
        "DETAIL_URL" => "",
        "PREVIEW_TRUNCATE_LEN" => "",
        "ACTIVE_DATE_FORMAT" => "d.m.Y",
        "SET_TITLE" => "N",
        "SET_BROWSER_TITLE" => "N",
        "SET_META_KEYWORDS" => "N",
        "SET_META_DESCRIPTION" => "N",
        "SET_LAST_MODIFIED" => "N",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
        "ADD_SECTIONS_CHAIN" => "N",
        "HIDE_LINK_WHEN_NO_DETAIL" => "Y",
        "PARENT_SECTION" => "",
        "PARENT_SECTION_CODE" => "",
        "INCLUDE_SUBSECTIONS" => "Y",
        "CACHE_TYPE" => "A",
        "CACHE_TIME" => "3600",
        "CACHE_FILTER" => "Y",
        "CACHE_GROUPS" => "Y",
        "DISPLAY_TOP_PAGER" => "N",
        "DISPLAY_BOTTOM_PAGER" => "N",
        "PAGER_TITLE" => "Новости",
        "PAGER_SHOW_ALWAYS" => "N",
        "PAGER_TEMPLATE" => "",
        "PAGER_DESC_NUMBERING" => "Y",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
        "PAGER_SHOW_ALL" => "Y",
        "PAGER_BASE_LINK_ENABLE" => "Y",
        "SET_STATUS_404" => "N",
        "SHOW_404" => "N",
        "MESSAGE_404" => "",
        "PAGER_BASE_LINK" => "",
        "PAGER_PARAMS_NAME" => "arrPager",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_ADDITIONAL" => ""
    )
);?>

<div class="info">
    <div class="container info__container">
        <div class="info__pre-title"><?$APPLICATION->IncludeFile(
            SITE_TEMPLATE_PATH . '/include_areas/mainpage_subtitle.inc',
            Array(),
            Array("MODE"=>"text")
        );?></div>
        <div class="title-wrapper d-flex flex-column flex-md-row">
            <div class="title info__title"><?$APPLICATION->IncludeFile(
                SITE_TEMPLATE_PATH . '/include_areas/mainpage_title.inc',
                Array(),
                Array("MODE"=>"text")
            );?></div>
            <?$APPLICATION->IncludeFile(
                SITE_TEMPLATE_PATH . '/include_areas/mainpage_button.inc',
                Array(),
                Array("MODE"=>"html")
            );?>
        </div>
        <div class="info__adress"><?$APPLICATION->IncludeFile(
            SITE_TEMPLATE_PATH . '/include_areas/mainpage_address.inc',
            Array(),
            Array("MODE"=>"text")
        );?></div>
        <div class="look-map d-none d-xl-flex align-items-center" href="#block-map"><img class="ico-map" src="/img/ico-map.svg" alt="">Посмотреть на карте</div>

        <?$APPLICATION->IncludeComponent("bitrix:news.list","mainpage_params",Array(
                "DISPLAY_DATE" => "N",
                "DISPLAY_NAME" => "Y",
                "DISPLAY_PICTURE" => "Y",
                "DISPLAY_PREVIEW_TEXT" => "N",
                "AJAX_MODE" => "N",
                "IBLOCK_TYPE" => "content",
                "IBLOCK_ID" => "2",
                "NEWS_COUNT" => "999",
                "SORT_BY1" => "SORT",
                "SORT_ORDER1" => "ASC",
                "SORT_BY2" => "DATE_BEGIN",
                "SORT_ORDER2" => "DESC",
                "FILTER_NAME" => "",
                "FIELD_CODE" => Array("*"),
                "PROPERTY_CODE" => Array("*"),
                "CHECK_DATES" => "Y",
                "DETAIL_URL" => "",
                "PREVIEW_TRUNCATE_LEN" => "",
                "ACTIVE_DATE_FORMAT" => "d.m.Y",
                "SET_TITLE" => "N",
                "SET_BROWSER_TITLE" => "N",
                "SET_META_KEYWORDS" => "N",
                "SET_META_DESCRIPTION" => "N",
                "SET_LAST_MODIFIED" => "N",
                "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                "ADD_SECTIONS_CHAIN" => "N",
                "HIDE_LINK_WHEN_NO_DETAIL" => "Y",
                "PARENT_SECTION" => "",
                "PARENT_SECTION_CODE" => "",
                "INCLUDE_SUBSECTIONS" => "Y",
                "CACHE_TYPE" => "A",
                "CACHE_TIME" => "3600",
                "CACHE_FILTER" => "Y",
                "CACHE_GROUPS" => "Y",
                "DISPLAY_TOP_PAGER" => "N",
                "DISPLAY_BOTTOM_PAGER" => "N",
                "PAGER_TITLE" => "Новости",
                "PAGER_SHOW_ALWAYS" => "N",
                "PAGER_TEMPLATE" => "",
                "PAGER_DESC_NUMBERING" => "Y",
                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                "PAGER_SHOW_ALL" => "Y",
                "PAGER_BASE_LINK_ENABLE" => "Y",
                "SET_STATUS_404" => "N",
                "SHOW_404" => "N",
                "MESSAGE_404" => "",
                "PAGER_BASE_LINK" => "",
                "PAGER_PARAMS_NAME" => "arrPager",
                "AJAX_OPTION_JUMP" => "N",
                "AJAX_OPTION_STYLE" => "Y",
                "AJAX_OPTION_HISTORY" => "N",
                "AJAX_OPTION_ADDITIONAL" => ""
            )
        );?>
        <button class="button button--large" type="undefined">Записаться на консультацию</button>
    </div>
</div>

<?$APPLICATION->IncludeComponent("bitrix:news.list","mainpage_info",Array(
        "DISPLAY_DATE" => "N",
        "DISPLAY_NAME" => "Y",
        "DISPLAY_PICTURE" => "Y",
        "DISPLAY_PREVIEW_TEXT" => "N",
        "AJAX_MODE" => "N",
        "IBLOCK_TYPE" => "content",
        "IBLOCK_ID" => "3",
        "NEWS_COUNT" => "4",
        "SORT_BY1" => "SORT",
        "SORT_ORDER1" => "ASC",
        "SORT_BY2" => "DATE_BEGIN",
        "SORT_ORDER2" => "DESC",
        "FILTER_NAME" => "",
        "FIELD_CODE" => Array("*"),
        "PROPERTY_CODE" => Array("*"),
        "CHECK_DATES" => "Y",
        "DETAIL_URL" => "",
        "PREVIEW_TRUNCATE_LEN" => "",
        "ACTIVE_DATE_FORMAT" => "d.m.Y",
        "SET_TITLE" => "N",
        "SET_BROWSER_TITLE" => "N",
        "SET_META_KEYWORDS" => "N",
        "SET_META_DESCRIPTION" => "N",
        "SET_LAST_MODIFIED" => "N",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
        "ADD_SECTIONS_CHAIN" => "N",
        "HIDE_LINK_WHEN_NO_DETAIL" => "Y",
        "PARENT_SECTION" => "",
        "PARENT_SECTION_CODE" => "",
        "INCLUDE_SUBSECTIONS" => "Y",
        "CACHE_TYPE" => "A",
        "CACHE_TIME" => "3600",
        "CACHE_FILTER" => "Y",
        "CACHE_GROUPS" => "Y",
        "DISPLAY_TOP_PAGER" => "N",
        "DISPLAY_BOTTOM_PAGER" => "N",
        "PAGER_TITLE" => "Новости",
        "PAGER_SHOW_ALWAYS" => "N",
        "PAGER_TEMPLATE" => "",
        "PAGER_DESC_NUMBERING" => "Y",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
        "PAGER_SHOW_ALL" => "Y",
        "PAGER_BASE_LINK_ENABLE" => "Y",
        "SET_STATUS_404" => "N",
        "SHOW_404" => "N",
        "MESSAGE_404" => "",
        "PAGER_BASE_LINK" => "",
        "PAGER_PARAMS_NAME" => "arrPager",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_ADDITIONAL" => ""
    )
);?>

<div class="location d-lg-flex">
    <div class="location__about col-12 col-lg-5 order-lg-1">
        <div class="title title--gold"><?$APPLICATION->IncludeFile(
            SITE_TEMPLATE_PATH . '/include_areas/mainpage_location_title.inc',
            Array(),
            Array("MODE"=>"text")
        );?></div>
        <?$APPLICATION->IncludeFile(
            SITE_TEMPLATE_PATH . '/include_areas/mainpage_location_text.inc',
            Array(),
            Array("MODE"=>"html")
        );?>
    </div>
    <div class="location__video col-lg-6 d-flex justify-content-lg-center">
        <div class="player col-xl-10">
            <?$APPLICATION->IncludeFile(
                SITE_TEMPLATE_PATH . '/include_areas/mainpage_location_video.inc',
                Array(),
                Array("MODE"=>"html")
            );?>
        </div>
    </div>
</div>

<div class="block-map d-none d-xl-block" id="block-map">
    <div class="container d-xl-flex justify-content-between d-md-block">
        <div class="block-map__places col-md-12 col-xl-3">
            <div class="block-map__buid"><img src="/img/block-map-ico-1.svg" alt="">
                <div class="block-map__places-content d-flex flex-column">
                    <h3><?$APPLICATION->IncludeFile(
                        SITE_TEMPLATE_PATH . '/include_areas/mainpage_map_title1.inc',
                        Array(),
                        Array("MODE"=>"text")
                    );?></h3>
                    <div class="block-map__desc text--white"><?$APPLICATION->IncludeFile(
                        SITE_TEMPLATE_PATH . '/include_areas/mainpage_map_text1.inc',
                        Array(),
                        Array("MODE"=>"html")
                    );?></div>
                </div>
            </div>
            <div class="block-map__office"><img src="/img/block-map-ico-2.svg" alt="">
                <div class="block-map__places-content d-flex flex-column">
                    <h3><?$APPLICATION->IncludeFile(
                        SITE_TEMPLATE_PATH . '/include_areas/mainpage_map_title2.inc',
                        Array(),
                        Array("MODE"=>"text")
                    );?></h3><span class="block-map__phone text--white"><?$APPLICATION->IncludeFile(
                        SITE_TEMPLATE_PATH . '/include_areas/mainpage_map_phone.inc',
                        Array(),
                        Array("MODE"=>"text")
                    );?></span>
                    <div class="block-map__desc text--white"><?$APPLICATION->IncludeFile(
                        SITE_TEMPLATE_PATH . '/include_areas/mainpage_map_text2.inc',
                        Array(),
                        Array("MODE"=>"text")
                    );?></div>
                </div>
            </div>
        </div>
        <div class="block-map__map col-lg-12 col-xl-9" id="map"></div>
    </div>
</div>

<div class="near d-none d-xl-block">
    <div class="near__content d-lg-flex align-items-center">
        <div class="near__about col-lg-5 order-lg-1 offset-right-1">
            <div class="title"><?$APPLICATION->IncludeFile(
                SITE_TEMPLATE_PATH . '/include_areas/mainpage_nearby_title.inc',
                Array(),
                Array("MODE"=>"text")
            );?></div>
            <?$APPLICATION->IncludeFile(
                SITE_TEMPLATE_PATH . '/include_areas/mainpage_nearby_text.inc',
                Array(),
                Array("MODE"=>"html")
            );?>
        </div>
        <div class="col-lg-1 order-lg-2"></div>
        <?$APPLICATION->IncludeComponent("bitrix:news.list","mainpage_nearby",Array(
                "DISPLAY_DATE" => "N",
                "DISPLAY_NAME" => "Y",
                "DISPLAY_PICTURE" => "Y",
                "DISPLAY_PREVIEW_TEXT" => "N",
                "AJAX_MODE" => "N",
                "IBLOCK_TYPE" => "content",
                "IBLOCK_ID" => "4",
                "NEWS_COUNT" => "999",
                "SORT_BY1" => "SORT",
                "SORT_ORDER1" => "ASC",
                "SORT_BY2" => "DATE_BEGIN",
                "SORT_ORDER2" => "DESC",
                "FILTER_NAME" => "",
                "FIELD_CODE" => Array("*"),
                "PROPERTY_CODE" => Array("*"),
                "CHECK_DATES" => "Y",
                "DETAIL_URL" => "",
                "PREVIEW_TRUNCATE_LEN" => "",
                "ACTIVE_DATE_FORMAT" => "d.m.Y",
                "SET_TITLE" => "N",
                "SET_BROWSER_TITLE" => "N",
                "SET_META_KEYWORDS" => "N",
                "SET_META_DESCRIPTION" => "N",
                "SET_LAST_MODIFIED" => "N",
                "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                "ADD_SECTIONS_CHAIN" => "N",
                "HIDE_LINK_WHEN_NO_DETAIL" => "Y",
                "PARENT_SECTION" => "",
                "PARENT_SECTION_CODE" => "",
                "INCLUDE_SUBSECTIONS" => "Y",
                "CACHE_TYPE" => "A",
                "CACHE_TIME" => "3600",
                "CACHE_FILTER" => "Y",
                "CACHE_GROUPS" => "Y",
                "DISPLAY_TOP_PAGER" => "N",
                "DISPLAY_BOTTOM_PAGER" => "N",
                "PAGER_TITLE" => "Новости",
                "PAGER_SHOW_ALWAYS" => "N",
                "PAGER_TEMPLATE" => "",
                "PAGER_DESC_NUMBERING" => "Y",
                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                "PAGER_SHOW_ALL" => "Y",
                "PAGER_BASE_LINK_ENABLE" => "Y",
                "SET_STATUS_404" => "N",
                "SHOW_404" => "N",
                "MESSAGE_404" => "",
                "PAGER_BASE_LINK" => "",
                "PAGER_PARAMS_NAME" => "arrPager",
                "AJAX_OPTION_JUMP" => "N",
                "AJAX_OPTION_STYLE" => "Y",
                "AJAX_OPTION_HISTORY" => "N",
                "AJAX_OPTION_ADDITIONAL" => ""
            )
        );?>
    </div>
</div>
<div class="recreation d-none d-xl-block">
    <div class="recreation__content d-flex flex-column flex-lg-row">
        <div class="recreation__img col-lg-6"></div>
        <div class="recreation__about col-lg-5">
            <div class="title title--gold"><?$APPLICATION->IncludeFile(
                SITE_TEMPLATE_PATH . '/include_areas/mainpage_recreation_title.inc',
                Array(),
                Array("MODE"=>"text")
            );?></div>
            <div class="text text--white"><?$APPLICATION->IncludeFile(
                SITE_TEMPLATE_PATH . '/include_areas/mainpage_recreation_text.inc',
                Array(),
                Array("MODE"=>"text")
            );?></div>
        </div>
    </div>
</div>

<?$APPLICATION->IncludeComponent("bitrix:news.list","mainpage_gallery",Array(
        "DISPLAY_DATE" => "N",
        "DISPLAY_NAME" => "Y",
        "DISPLAY_PICTURE" => "Y",
        "DISPLAY_PREVIEW_TEXT" => "N",
        "AJAX_MODE" => "N",
        "IBLOCK_TYPE" => "content",
        "IBLOCK_ID" => "5",
        "NEWS_COUNT" => "999",
        "SORT_BY1" => "SORT",
        "SORT_ORDER1" => "ASC",
        "SORT_BY2" => "DATE_BEGIN",
        "SORT_ORDER2" => "DESC",
        "FILTER_NAME" => "",
        "FIELD_CODE" => Array("*"),
        "PROPERTY_CODE" => Array("*"),
        "CHECK_DATES" => "Y",
        "DETAIL_URL" => "",
        "PREVIEW_TRUNCATE_LEN" => "",
        "ACTIVE_DATE_FORMAT" => "d.m.Y",
        "SET_TITLE" => "N",
        "SET_BROWSER_TITLE" => "N",
        "SET_META_KEYWORDS" => "N",
        "SET_META_DESCRIPTION" => "N",
        "SET_LAST_MODIFIED" => "N",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
        "ADD_SECTIONS_CHAIN" => "N",
        "HIDE_LINK_WHEN_NO_DETAIL" => "Y",
        "PARENT_SECTION" => "",
        "PARENT_SECTION_CODE" => "",
        "INCLUDE_SUBSECTIONS" => "Y",
        "CACHE_TYPE" => "A",
        "CACHE_TIME" => "3600",
        "CACHE_FILTER" => "Y",
        "CACHE_GROUPS" => "Y",
        "DISPLAY_TOP_PAGER" => "N",
        "DISPLAY_BOTTOM_PAGER" => "N",
        "PAGER_TITLE" => "Новости",
        "PAGER_SHOW_ALWAYS" => "N",
        "PAGER_TEMPLATE" => "",
        "PAGER_DESC_NUMBERING" => "Y",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
        "PAGER_SHOW_ALL" => "Y",
        "PAGER_BASE_LINK_ENABLE" => "Y",
        "SET_STATUS_404" => "N",
        "SHOW_404" => "N",
        "MESSAGE_404" => "",
        "PAGER_BASE_LINK" => "",
        "PAGER_PARAMS_NAME" => "arrPager",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_ADDITIONAL" => ""
    )
);?>

<?$APPLICATION->IncludeComponent("bitrix:form.result.new","consultation",Array(
        "AJAX_MODE" => "N", 
        "SEF_MODE" => "Y", 
        "WEB_FORM_ID" => 1, 
        "RESULT_ID" => $_REQUEST["RESULT_ID"], 
        "START_PAGE" => "new", 
        "SHOW_LIST_PAGE" => "Y", 
        "SHOW_EDIT_PAGE" => "N", 
        "SHOW_VIEW_PAGE" => "Y", 
        "SUCCESS_URL" => "", 
        "SHOW_ANSWER_VALUE" => "Y", 
        "SHOW_ADDITIONAL" => "Y", 
        "SHOW_STATUS" => "Y", 
        "EDIT_ADDITIONAL" => "N", 
        "EDIT_STATUS" => "Y", 
        "NOT_SHOW_FILTER" => Array(), 
        "NOT_SHOW_TABLE" => Array(), 
        "CHAIN_ITEM_TEXT" => "", 
        "CHAIN_ITEM_LINK" => "", 
        "IGNORE_CUSTOM_TEMPLATE" => "Y", 
        "USE_EXTENDED_ERRORS" => "Y", 
        "CACHE_TYPE" => "A", 
        "CACHE_TIME" => "3600", 
        "AJAX_OPTION_JUMP" => "N", 
        "AJAX_OPTION_STYLE" => "Y", 
        "AJAX_OPTION_HISTORY" => "N", 
        "SEF_FOLDER" => "/communication/web-forms/", 
        "SEF_URL_TEMPLATES" => Array(
            "new" => "#WEB_FORM_ID#/",
            "list" => "#WEB_FORM_ID#/list/",
            "edit" => "/?RESULT_ID=#RESULT_ID#",
            "view" => "/?RESULT_ID=#RESULT_ID#"
        ),
        "VARIABLE_ALIASES" => Array(
            "new" => Array(),
            "list" => Array(),
            "edit" => Array(),
            "view" => Array(),
        )
    )
);?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>