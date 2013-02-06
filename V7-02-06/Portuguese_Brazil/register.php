<?php
$locale['400'] = "Registro";
$locale['401'] = "Ativar Conta";
// Registration Errors
$locale['402'] = "Você deve especificar um nome de usuário, senha e seu endereço de email.";
$locale['403'] = "O nome de usuário contém caracteres inválidos.";
$locale['404'] = "As duas Senhas não combinam.";
$locale['405'] = "Senha inválida. Use somente caracteres alfanuméricos.<br />
A Senha deve conter, no mínimo, 6 caracteres.";
$locale['406'] = "Seu endereço de email parece ser inválido.";
$locale['407'] = "Desculpe, o nome de usuário ".(isset($_POST['username']) ? $_POST['username'] : "")." já está sendo utilizado.";
$locale['408'] = "Desculpe, o endereço de email ".(isset($_POST['email']) ? $_POST['email'] : "")." já está sendo utilizado.";
$locale['409'] = "Uma conta desativada foi registrada com este endereço de email.";
$locale['410'] = "Código de validação incorreto.";
$locale['411'] = "Seu endereço ou provedor de email está na lista negra.";
// Email Message
$locale['449'] = "Bem-vindo ao ".$settings['sitename'];
$locale['450'] = "Olá ".(isset($_POST['username']) ? $_POST['username'] : "").",\n
Bem-vindo ao ".$settings['sitename'].". Aqui estão os dados de sua conta:\n
Nome de Usuário: ".(isset($_POST['username']) ? $_POST['username'] : "")."
Senha: ".(isset($_POST['password1']) ? $_POST['password1'] : "")."\n
Ative sua conta clicando no seguinte link:\n";
// Registration Success/Fail
$locale['451'] = "Registro concluído";
$locale['452'] = "Você pode entrar agora.";
$locale['453'] = "Um administrador ativará sua conta.";
$locale['454'] = "Seu registro está quase completo: você receberá um e-mail contendo os dados de sua conta junto de um link para ativá-la.";
$locale['455'] = "Sua conta foi verificada.";
$locale['456'] = "O registro falhou";
$locale['457'] = "O envio do email falhou. Por favor, contate o <a href='mailto:".$settings['siteemail']."'>Administrador do Site</a>.";
$locale['458'] = "O registro falhou pelo(s) seguinte(s) motivo(s):";
$locale['459'] = "Por favor, tente novamente";
// Register Form
$locale['500'] = "Por favor, preencha os dados solicitados abaixo. ";
$locale['501'] = "Um email de verificação será enviado para o endereço de email especificado. ";
$locale['502'] = "Os campos marcados com <span style='color:#ff0000;'>*</span> são de preenchimento obrigatório.
O nome de usuário e senha diferenciam maiúsculas de minúsculas.";
$locale['503'] = " Uma vez registrado, você poderá inserir informações adicionais em <em>Editar Perfil</em>.";
$locale['504'] = "Código de Validação:";
$locale['505'] = "Insira o Código de Validação:";
$locale['506'] = "Registrar";
$locale['507'] = "O sistema de registros está desativado.";
$locale['508'] = "Termos de Registro";
$locale['509'] = "Eu li e aceito os <a href='".BASEDIR."print.php?type=T' target='_blank'>Termos de Registro</a>.";
// Validation Errors
$locale['550'] = "Por favor, especifique um nome de usuário.";
$locale['551'] = "Por favor, especifique uma senha.";
$locale['552'] = "Por favor, especifique um endereço de email.";
?>