<?php require_once('../auth.php'); ?>
<?php if (isset($auth) && $auth) {?>
<?php
$switchNodeDT = $_GET['switchNodeDT'];
$forward0 = exec('sudo [ -f /etc/nginx/conf.d/forward0.conf ] && echo installed');

if ($switchNodeDT == "NodeDTshow"){
    exec('sudo /opt/de_GWD/ui-NodeDTshow r');
}
elseif ($switchNodeDT == "NodeDThide"){
    exec('sudo /opt/de_GWD/ui-NodeDThide r');
}

if ($forward0 == installed)	exec('sudo /opt/de_GWD/ui-FWD0save r');
?>
<?php }?>