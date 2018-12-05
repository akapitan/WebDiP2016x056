<?php
require_once 'vanjske_biblioteke/Smarty/libs/Smarty.class.php';

function SmartyVarijable(&$smarty) {
    if(isset($_SESSION['korisnicko_ime'])) {
        $smarty->assign('ime', $_SESSION['ime']);
        $smarty->assign('prezime', $_SESSION['prezime']);
        $smarty->assign('id_korisnik', $_SESSION['id_korisnik']);
        $smarty->assign('uloga2', $_SESSION['uloga']);
        $smarty->assign('email', $_SESSION['email']);
        $smarty->assign('korisnik', $_SESSION['korisnicko_ime']);
        $smarty->assign("prikazi", "visible");
        $smarty->assign("bodovi", $_SESSION['bodovi']);
        if($_SESSION['uloga'] == 1){$smarty->assign("uloga" , "http://icons.iconarchive.com/icons/iconarchive/red-orb-alphabet/256/Letter-A-icon.png");}
        elseif ($_SESSION['uloga'] == 2) {$smarty->assign("uloga" , "http://icons.iconarchive.com/icons/iconarchive/red-orb-alphabet/256/Letter-M-icon.png");}
        elseif ($_SESSION['uloga'] == 3) {$smarty->assign("uloga" , "http://icons.iconarchive.com/icons/iconarchive/red-orb-alphabet/256/Letter-U-icon.png");}
    }else{
        $smarty->assign('ime', '');
        $smarty->assign('prezime', '');
        $smarty->assign('korisnik_id', '');
        $smarty->assign('uloga', '');
        $smarty->assign('email', '');
        $smarty->assign('korisnicko_ime', '');
        $smarty->assign("prikazi", "hidden");
    }
}
function SmartyDirektoriji(&$smarty) {
    $smarty->setTemplateDir('predlosci/');
    $smarty->setCacheDir('vanjske_biblioteke/Smarty/cache/');
    $smarty->setConfigDir('vanjske_biblioteke/Smarty/configs/');
    $smarty->setCompileDir('vanjske_biblioteke/Smarty/templates_c/');
}
