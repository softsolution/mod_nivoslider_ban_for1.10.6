<?php
/* ************************************************************************** */
/* created by soft-solution.ru, support@soft-solution.ru                      */
/* module module_mod_nivoslider_ban for InstantCMS 1.10.6                     */
/* license: commercialcc                                                      */
/* Незаконное использование преследуется по закону                            */
/* ************************************************************************** */

function mod_nivoslider_ban($mod, $cfg){

    $inDB = cmsDatabase::getInstance();

    $sql = "SELECT b.id, b.title, b.fileurl
        FROM cms_banners b
        WHERE b.published = 1 AND b.typeimg = 'image'
        ORDER BY b.position ASC
        LIMIT ".$cfg['shownum'];

    $result = $inDB->query($sql);

    if ($inDB->num_rows($result)) {
        $items = array();
        while ($item = $inDB->fetch_assoc($result)) {
            $items[] = $item;
        }
    }

    if(!$items) { return false; }

    cmsPage::initTemplate('modules', $cfg['tpl'])->
        assign('items', $items)->
        assign('cfg', $cfg)->
        assign('module_id', $mod['id'])->
        display($cfg['tpl']);

    return true;

}
?>