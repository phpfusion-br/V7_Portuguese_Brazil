<?php
// Error messages
$locale['500'] = "Ocorreu um erro";
$locale['501'] = "O link de ativa��o que voc� clicou n�o � mais v�lido.<br /><br />
Contate o administrador do site em <a href='mailto:".$settings['siteemail']."'>".$settings['siteemail']."</a> caso voc� deseje solicitar uma re-ativa��o manual.";
$locale['502'] = "O link de re-ativa��o que voc� clicou � inv�lido novamente!<br /><br />
Contate o administrador do site em <a href='mailto:".$settings['siteemail']."'>".$settings['siteemail']."</a> caso voc� deseje solicitar uma re-ativa��o manual.";
$locale['503'] = "O link de re-ativa��o que voc� usou n�o pode ativar sua conta.<br />
Talvez a sua conta j� foi reativada e, nesse caso, voc� deve ser capaz de <a href='".$settings['siteurl']."login.php'>entre aqui</a>.<br /><br />
Se voc� n�o consegue entrar, por favor contate o administrador do site em <a href='mailto:".$settings['siteemail']."'>".$settings['siteemail']."</a> caso voc� deseje solicitar uma re-ativa��o manual.";
// Send confirmation mail
$locale['504'] = "Conta reativada em ".$settings['sitename'];
$locale['505'] = "Ol� [USER_NAME],\n
Sua conta em ".$settings['sitename']." foi re-ativada. Esperamos v�-lo com mais freq��ncia no site.\n\n
Atenciosamente,\n\n
".$settings['siteusername'];
$locale['506'] = "Reativado pelo usu�rio.";
?>
