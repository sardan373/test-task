<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
?>
<?if ($arResult["isFormErrors"] == "Y"):?><?=$arResult["FORM_ERRORS_TEXT"];?><?endif;?>

<?=$arResult["FORM_NOTE"]?>

<?if ($arResult["isFormNote"] != "Y")
{
?>
<div class="sign d-none d-xl-block">
    <div class="container">
        <div class="order__title title text--white col-10 offset-0 offset-lg-1">Записаться на консультацию</div>
            <?=str_replace("<form ", "<form class='form d-flex flex-wrap' ", $arResult["FORM_HEADER"])?>

            <?
            /***********************************************************************************
                                    form questions
            ***********************************************************************************/
            ?>
            
            <?
            $prevType = '';
            foreach ($arResult["QUESTIONS"] as $FIELD_SID => $arQuestion)
            {
                if ($arQuestion['STRUCTURE'][0]['FIELD_TYPE'] == 'hidden')
                {
                    echo $arQuestion["HTML_CODE"];
                }
                elseif ($arQuestion['STRUCTURE'][0]['FIELD_TYPE'] == 'textarea')
                {
                    if (!in_array($prevType, ['', 'textarea'])) {?>
                        </div>
                    <?}?>
                    <div class="form__content col-12 col-lg-5">
                        <?if (is_array($arResult["FORM_ERRORS"]) && array_key_exists($FIELD_SID, $arResult['FORM_ERRORS'])):?>
                            <span class="error-fld" title="<?=htmlspecialcharsbx($arResult["FORM_ERRORS"][$FIELD_SID])?>"></span>
                        <?endif;?>
                        <label>
                            <?
                            if (!empty($arParams['ELEMENT_NAME']) && !empty($arParams['FILED_ID']) && $arQuestion['STRUCTURE'][0]['ID'] == $arParams['FILED_ID']) {
                                $arQuestion["HTML_CODE"] = str_replace(
                                    '</textarea>',
                                    $arParams['ELEMENT_NAME'] . '</textarea>',
                                    $arQuestion["HTML_CODE"]
                                );
                            }
                            ?>
                            <?=str_replace(
                                "<textarea ",
                                "<textarea class='form-control' placeholder='{$arQuestion["CAPTION"]}' ",
                                $arQuestion["HTML_CODE"]
                            )?>
                        </label>
                        <p class="form__help text--white">Все поля обязательны для заполнения</p>
                    </div>
                <?
                }
                else
                {
                    if (in_array($prevType, ['', 'textarea'])) {?>
                        <div class="col-12 offset-0 col-lg-5 offset-lg-1">
                    <?}?>
                    <div class="form-group">
                        <?if (is_array($arResult["FORM_ERRORS"]) && array_key_exists($FIELD_SID, $arResult['FORM_ERRORS'])):?>
                            <span class="error-fld" title="<?=htmlspecialcharsbx($arResult["FORM_ERRORS"][$FIELD_SID])?>"></span>
                        <?endif;?>
                        <label>
                            <?
                            if (!empty($arParams['ELEMENT_NAME']) && !empty($arParams['FILED_ID']) && $arQuestion['STRUCTURE'][0]['ID'] == $arParams['FILED_ID']) {
                                $value = " value='{$arParams['ELEMENT_NAME']}'";
                            } else {
                                $value = '';
                            }
                            ?>
                            <?=str_replace(
                                [
                                    " value ",
                                    "value=",
                                    "<input "
                                ],
                                [
                                    "",
                                    "old-value=",
                                    "<input class='form-control' placeholder='{$arQuestion["CAPTION"]}'{$value} "
                                ],
                                $arQuestion["HTML_CODE"]
                            )?>
                        </label>
                    </div>
            <?
                }
                $prevType = $arQuestion['STRUCTURE'][0]['FIELD_TYPE'];
            } //endwhile
            if (!in_array($prevType, ['', 'textarea'])) {?>
                </div>
            <?}?>
            ?>

            <div class="form__send d-flex align-items-center flex-column col-12 offset-0 col-md-10 flex-md-row offset-md-1">
                <input type="hidden" name="web_form_apply" value="Y" />
                <input type="hidden" name="web_form_apply" value="<?=GetMessage("FORM_APPLY")?>" />
                <button class="button button--standart" type="submit">Отправить</button>
                <div class="form__privacy text--white">Нажимая «Отправить», я даю согласие <a class="form__privacy-link text--white" href="">на обработку персональных данных</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?
} //endif (isFormNote)
?>