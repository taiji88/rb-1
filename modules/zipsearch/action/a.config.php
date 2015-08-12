<?php
if(!defined('__KIMS__')) exit;

checkAdmin(0);

$badword = trim($badword);
$badword = str_replace("\r\n","",$badword);
$badword = str_replace("\n","",$badword);


$fdset = array('skin_pc','skin_mobile');

$gfile= $g['dir_module'].'var/var.php';
$fp = fopen($gfile,'w');
fwrite($fp, "<?php\n");
foreach ($fdset as $val)
{
	fwrite($fp, "\$d['zipsearch']['".$val."'] = \"".trim(${$val})."\";\n");
}
fwrite($fp, "?>");
fclose($fp);
@chmod($gfile,0707);



getLink('reload','parent.','','');
?>