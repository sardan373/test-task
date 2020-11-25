<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$arItem['PREVIEW_PICTURE']['SRC'] = CFile::ResizeImageGet($arItem['PREVIEW_PICTURE']['ID'], ['width' => 1290, 'height' => 685], BX_RESIZE_IMAGE_EXACT)['src'];
$arItem['PREVIEW_PICTURE']['THUMB_SRC'] = CFile::ResizeImageGet($arItem['PREVIEW_PICTURE']['ID'], ['width' => 196, 'height' => 108], BX_RESIZE_IMAGE_EXACT)['src'];
