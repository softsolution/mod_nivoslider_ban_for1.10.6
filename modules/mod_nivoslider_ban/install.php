<?php
/* ************************************************************************** */
/* created by soft-solution.ru, support@soft-solution.ru                      */
/* module module_mod_nivoslider_ban for InstantCMS 1.10.6                     */
/* license: commercialcc                                                      */
/* Незаконное использование преследуется по закону                            */
/* ************************************************************************** */

function info_module_mod_nivoslider_ban(){

        $_module['title']         = 'Cлайдер-галлерея NivoSlider для баннеров';
        $_module['name']          = 'Cлайдер-галлерея NivoSlider для баннеров';
        $_module['description']   = 'Cлайдер-галлерея NivoSlider для баннеров';
        $_module['link']          = 'mod_nivoslider_ban';
        $_module['position']      = 'top';
        $_module['author']        = '<a href="http://soft-solution.ru" target="_blank">soft-solution.ru</a>';
        $_module['version']       = '1.0';

        $_module['config'] = array();
        $_module['config']['shownum']='5';
        $_module['config']['effect']='random';
        $_module['config']['slices']='15';
        $_module['config']['boxCols']='8';
        $_module['config']['boxRows']='4';
        $_module['config']['animSpeed']='500';
        $_module['config']['pauseTime']='3000';
        $_module['config']['directionNav']='1';
        $_module['config']['directionNavHide']='1';
        $_module['config']['controlNav']='1';
        $_module['config']['controlNavThumbs']='0';
        $_module['config']['pauseOnHover']='1';
        $_module['config']['manualAdvance']='0';
        $_module['config']['prevText']='Prev';
        $_module['config']['nextText']='Next';

        return $_module;

    }

    function install_module_mod_nivoslider_ban(){

        return true;

    }

    function upgrade_module_mod_nivoslider_ban(){

        return true;

    }

?>