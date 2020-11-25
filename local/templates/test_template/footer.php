<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?> 

        <footer class="footer">
            <div class="container text--white d-flex justify-content-between flex-wrap">
                <span class="footer__compy"><?$APPLICATION->IncludeFile(
                    SITE_TEMPLATE_PATH . '/include_areas/footer_copyright.inc',
                    Array(),
                    Array("MODE"=>"text")
                );?></span>
                <a class="footer__create">Создание сайта — Individ</a>
            </div>
        </footer>
    </body>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <script src="<?=SITE_TEMPLATE_PATH?>/script.js"></script>
</html>
