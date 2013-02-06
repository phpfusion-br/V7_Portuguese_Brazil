<?php
$locale['email_create_subject'] = "Conta criada em ";
$locale['email_create_message'] = "Ol� [USER_NAME],\n
Sua conta no ".$settings['sitename']." j� foi criada.\n
Agora voc� pode entrar usando seus dados abaixo:\n
Usu�rio: [USER_NAME]\n
Senha: [PASSWORD]\n\n
Sauda��es,\n
".$settings['siteusername'];

$locale['email_activate_subject'] = "Conta criada em ";
$locale['email_activate_message'] = "Ol� [USER_NAME],\n
Sua conta no ".$settings['sitename']." j� foi criada.\n
Agora voc� pode entrar usando o Usu�rio e Senha criados.\n\n
Sauda��es,\n
".$settings['siteusername'];

$locale['email_deactivate_subject'] = "Reativa��o da conta requerida em ".$settings['sitename'];
$locale['email_deactivate_message'] = "Ol� [USER_NAME],\n
J� se passou ".$settings['deactivation_period']." dia(s) desde seu �ltimo acesso no site ".$settings['sitename'].". Seu nome de usu�rio foi marcado como inativo mas todos os dados da sua conta e cont�do permanecem intactos.\n
Para reativar a sua conta basta clicar no link abaixo:\n
".$settings['siteurl']."reactivate.php?user_id=[USER_ID]&code=[CODE]\n\n
Sauda��es,\n
".$settings['siteusername'];

$locale['email_ban_subject'] = "Sua conta no ".$settings['sitename']." foi banida";
$locale['email_ban_message'] = "Ol� [USER_NAME],\n
Sua conta no ".$settings['sitename']." foi banida para ".$userdata['user_name']." Pelo motivo citado abaixo:\n
[REASON].\n
Caso deseje saber mais informa��es sobre este banimento, por favor, entre em contato como o administrador do site em ".$settings['siteemail'].".\n
".$settings['siteusername'];

$locale['email_secban_subject'] = "Sua conta no ".$settings['sitename']." foi banida";
$locale['email_secban_message'] = "Ol� [USER_NAME],\n
Sua conta no ".$settings['sitename']." foi banida para ".$userdata['user_name']." porque acretita-se que algumas a��es est�o associadas � sua conta. Foi considerada quest�o de seguran�a no site.\n
Caso deseje saber mais informa��es sobre este banimento por seguran�a, por favor, entre em contato como o administrador do site em 
".$settings['siteemail'].".\n
".$settings['siteusername'];

$locale['email_suspend_subject'] = "Sua conta no ".$settings['sitename']." foi suspensa";
$locale['email_suspend_message'] = "Ol� [USER_NAME],\n
Sua conta no ".$settings['sitename']." foi suspensa para ".$userdata['user_name']." em [DATE] (site time) Pelo motivo citado abaixo:\n
[REASON].\n
Caso deseje saber mais informa��es sobre esta suspens�o, por favor, contate o administrador do site em 
".$settings['siteemail'].".\n
".$settings['siteusername'];
?>