<?php
/*
Portuguese Language Fileset
Produced by Sandro Dumke (Sandro Dumke)
Email: sandrodumke@phpfusionbrasil.com
Web: http://www.phpfusionbrasil.com
*/

// Locale Settings
setlocale(LC_TIME, "pt_BR","BR"); // Linux Server (Windows may differ)
$locale['charset'] = "iso-8859-1";
$locale['xml_lang'] = "pt-br";
$locale['tinymce'] = "pt";
$locale['phpmailer'] = "br";

// Full & Short Months
$locale['months'] = "&nbsp|Janeiro|Fevereiro|Mar�o|Abril|Maio|Junho|Julho|Agosto|Setembro|Outubro|Novembro|Dezembro";
$locale['shortmonths'] = "&nbsp|Jan|Fev|Mar|Abr|Mai|Jun|Jul|Ago|Set|Out|Nov|Dez";

// Standard User Levels
$locale['user0'] = "P�blico";
$locale['user1'] = "Membro";
$locale['user2'] = "Administrador";
$locale['user3'] = "Super Administrador";
$locale['user_na'] = "N�o Dispon�vel";
$locale['user_anonymous'] = "Usu�rio An�nimo";
// Standard User Status
$locale['status0'] = "Ativo";
$locale['status1'] = "Banido";
$locale['status2'] = "Desativado";
$locale['status3'] = "Suspenso";
$locale['status4'] = "Banido por Medida de Seguran�a";
$locale['status5'] = "Cancelado";
$locale['status6'] = "An�nimo";
$locale['status7'] = "Desativado";
$locale['status8'] = "Inativo";
// Forum Moderator Level(s)
$locale['userf1'] = "Moderador";
// Navigation
$locale['global_001'] = "Navega��o";
$locale['global_002'] = "N�o h� links definidos\n";
// Users Online
$locale['global_010'] = "Usu�rios Online";
$locale['global_011'] = "Visitantes Online";
$locale['global_012'] = "Membros Online";
$locale['global_013'] = "N�o h� Membros Online";
$locale['global_014'] = "Membros Registrados";
$locale['global_015'] = "Membros Desativados";
$locale['global_016'] = "Mais Novo Membro";
// Forum Side panel
$locale['global_020'] = "T�picos do F�rum";
$locale['global_021'] = "�ltimos T�picos";
$locale['global_022'] = "T�picos Populares";
$locale['global_023'] = "Nenhum T�pico criado";
// Comments Side panel
$locale['global_025'] = "�ltimos Coment�rios";
$locale['global_026'] = "Nenhum coment�rio dispon�vel";
// Articles Side panel
$locale['global_030'] = "Artigos Recentes";
$locale['global_031'] = "Nenhum Artigo dispon�vel";
// Downloads Side panel
$locale['global_032'] = "Downloads Recentes";
$locale['global_033'] = "Nenhum Download dispon�vel";
// Welcome panel
$locale['global_035'] = "Bem-vindo";
// Latest Active Forum Threads panel
$locale['global_040'] = "�ltimos T�picos Ativos no F�rum";
$locale['global_041'] = "Meus T�picos";
$locale['global_042'] = "Minhas Mensagens";
$locale['global_043'] = "Novas Mensagens";
$locale['global_044'] = "T�pico";
$locale['global_045'] = "Visualiza��es";
$locale['global_046'] = "Respostas";
$locale['global_047'] = "�ltima Mensagem";
$locale['global_048'] = "F�rum";
$locale['global_049'] = "Enviado";
$locale['global_050'] = "Autor";
$locale['global_051'] = "Enquete";
$locale['global_052'] = "Movido";
$locale['global_053'] = "Voc� n�o iniciou nenhum t�pico no f�rum.";
$locale['global_054'] = "Voc� n�o enviou nenhuma mensagem no f�rum.";
$locale['global_055'] = "H� %u novas mensagens desde sua �ltima visita.";
$locale['global_056'] = "T�picos Rastreados";
$locale['global_057'] = "Op��es";
$locale['global_058'] = "Parar";
$locale['global_059'] = "Voc� n�o est� acompanhando nenhum t�pico.";
$locale['global_060'] = "N�o acompanhar mais este t�pico?";
// News & Articles
$locale['global_070'] = "Enviado por ";
$locale['global_071'] = "em ";
$locale['global_072'] = "Leia Mais";
$locale['global_073'] = " Coment�rios";
$locale['global_073b'] = " Coment�rio";
$locale['global_074'] = " Leituras";
$locale['global_075'] = "Imprimir";
$locale['global_076'] = "Editar";
$locale['global_077'] = "Not�cias";
$locale['global_078'] = "Nenhuma not�cia foi publicada";
$locale['global_079'] = "Em ";
$locale['global_080'] = "Sem Categoria";
// Page Navigation
$locale['global_090'] = "Anterior";
$locale['global_091'] = "Pr�xima";
$locale['global_092'] = "P�gina ";
$locale['global_093'] = " de ";
// Guest User Menu
$locale['global_100'] = "Entrar";
$locale['global_101'] = "Usu�rio";
$locale['global_102'] = "Senha";
$locale['global_103'] = "Lembrar-me";
$locale['global_104'] = "Entrar";
$locale['global_105'] = "N�o � um membro ainda?<br /><a href='".BASEDIR."register.php' class='side'>Clique aqui</a> e registre-se.";
$locale['global_106'] = "Esqueceu sua senha?<br />Solicite uma nova <a href='".BASEDIR."lostpassword.php' class='side'>aqui</a>.";
$locale['global_107'] = "Registro";
$locale['global_108'] = "Recuperar senha";
// Member User Menu
$locale['global_120'] = "Editar Perfil";
$locale['global_121'] = "Mensagens Privadas";
$locale['global_122'] = "Lista de Membros";
$locale['global_123'] = "Painel de Administra��o";
$locale['global_124'] = "Sair";
$locale['global_125'] = "Voc� tem %u ";
$locale['global_126'] = "nova mensagem";
$locale['global_127'] = "novas mensagens";
$locale['global_128'] = "sujei��o";
$locale['global_129'] = "sujei��es";
// Poll
$locale['global_130'] = "Enquete";
$locale['global_131'] = "Votar";
$locale['global_132'] = "Voc� deve entrar para votar.";
$locale['global_133'] = "Voto";
$locale['global_134'] = "Votos";
$locale['global_135'] = "Votos: ";
$locale['global_136'] = "Iniciada: ";
$locale['global_137'] = "Finalizada: ";
$locale['global_138'] = "Arquivo de Enquetes";
$locale['global_139'] = "Selecione uma Enquete na lista para v�-la:";
$locale['global_140'] = "Ver";
$locale['global_141'] = "Ver Enquete";
$locale['global_142'] = "N�o h� enquetes definidas.";

// Captcha
$locale['global_150'] = "C�digo de Valida��o:";
$locale['global_151'] = "Digite o c�digo de valida��o:";

// Footer Counter
$locale['global_170'] = "visita �nica";
$locale['global_171'] = "visitas �nicas";
$locale['global_172'] = "Tempo de renderiza��o: %s segundos";
$locale['global_173'] = "Consultas";
// Admin Navigation
$locale['global_180'] = "In�cio da Administra��o";
$locale['global_181'] = "Retornar ao Site";
$locale['global_182'] = "<strong>Aviso:</strong> Senha administrativa n�o inserida ou incorreta.";
// Miscellaneous
$locale['global_190'] = "Modo de Manuten��o Ativado";
$locale['global_191'] = "Seu endere�o de IP est� na lista negra.";
$locale['global_192'] = "O cookie do usu�rio expirou. Por favor fa�a login novamente para continuar.";
$locale['global_193'] = "N�o foi poss�vel criar o cookie do usu�rio. Por favor, certifique-se de ter os cookies ativados para poder efetuar login corretamente.";
$locale['global_194'] = "Esta conta est� suspensa.";
$locale['global_195'] = "Esta conta n�o foi ativada.";
$locale['global_196'] = "Nome de usu�rio e/ou senha inv�lidos.";
$locale['global_197'] = "Por favor, aguarde enquanto lhe transferimos...<br /><br />
[ <a href='index.php'>Ou clique aqui caso n�o deseje esperar</a> ]";
$locale['global_198'] = "<strong>Alerta:</strong> setup.php detectado. Por favor, remova-o imediatamente.";
$locale['global_199'] = "<strong>Aviso:</strong> senha administrativa indefinida. Clique em <a href='edit_profile.php'>Editar Perfil</a> para defini-la.";
//Titles
$locale['global_200'] = " - ";
$locale['global_201'] = ": ";
$locale['global_202'] = $locale['global_200']."Busca";
$locale['global_203'] = $locale['global_200']."FAQ";
$locale['global_204'] = $locale['global_200']."F�rum";
//Themes
$locale['global_210'] = "Ir ao conte�do";
// No themes found
$locale['global_300'] = "Nenhum tema encontrado";
$locale['global_301'] = "Perd�o, mas esta p�gina n�o pode ser exibida. Por causa de algumas circunst�ncias n�o p�demos encontrar nenhum tema para o site. Caso voc� seja administrador do site, ent�o utilize seu cliente FTP e fa�a upload, para o diret�rio <em>themes/</em>, de qualquer tema para o <em>PHP-Fusion v7.02</em>. Ap�s o upload do tema, cheque as suas <em>Configura��es Principais</em> e verifique se o tema selecionado est� na sua pasta <em>themes/</em>. Caso afirmativo, verifique se o tema selecionado possui o mesmo nome (considerando mai�sculas e min�sculas - importante em servidores baseados em UNIX) assim como escolhido na p�gina <em>Configura��es Principais</em>. Se voc� � um usu�rio comum deste site, contate o administrador pelo email ".hide_email($settings['siteemail'])." e reporte o problema.";
$locale['global_302'] = "O tema escolhido nas Configura��es Principais n�o existe ou est� incompleto!";
// JavaScript Not Enabled
$locale['global_303'] = "Oh n�o! Onde est� o <strong>JavaScript</strong>?<br /> Seu navegador n�o possui JavaScript ativado ou n�o suportar JavaScript. Por favor, <strong>habilite o JavaScript</strong> no seu browser para visualizar corretamente este site,<br /> ou <strong>atualize</strong> para um browser que suporte JavaScript; <a href='http://firefox.com' rel='nofollow' title='Mozilla Firefox'>Firefox</a>, <a href='http://apple.com/safari/' rel='nofollow' title='Safari'>Safari</a>, <a href='http://opera.com' rel='nofollow' title='Navegador Opera'>Opera</a>, <a href='http://www.google.com/chrome' rel='nofollow' title='Google Chrome'>Chrome</a> ou uma vers�o do <a href='http://www.microsoft.com/windows/internet-explorer/' rel='nofollow' title='Internet Explorer'>Internet Explorer</a> superior a vers�o 6.";
// User Management
// Member status
$locale['global_400'] = "suspenso";
$locale['global_401'] = "banido";
$locale['global_402'] = "desativado";
$locale['global_403'] = "conta encerrada";
$locale['global_404'] = "conta an�nima";
$locale['global_405'] = "su�rio anonimo";
$locale['global_406'] = "Esta conta foi banida pelo seguinte motivo:";
$locale['global_407'] = "Esta conta foi suspensa at�";
$locale['global_408'] = " pelo seguinte motivo:";
$locale['global_409'] = "Esta conta foi banida por motivo de seguran�a.";
$locale['global_410'] = "Motivo: ";
$locale['global_411'] = "Esta conta foi cancelada.";
$locale['global_412'] = "Esta � uma conta an�nima, provavelmente pela inatividade.";
// Banning due to flooding
$locale['global_440'] = "Banimento Autom�tico por controle de Flood";
$locale['global_441'] = "Sua conta ".$settings['sitename']." foi banida";
$locale['global_442'] = "Ol� [USER_NAME],\n
sua conta ".$settings['sitename']." foi observada com muitas postagens em um curto espa�o de tempo pelo IP ".USER_IP.", e a mesma foi banida para evitar ataques de SPAMMERS.\n
Entre em contato com o administrador pelo e-mail ".$settings['siteemail']." para ter a sua conta restaurada ou um relat�rio do motivo pelo qual a conta foi banida. \n
".$settings['siteusername'];
// Lifting of suspension
$locale['global_450'] = "Suspens�o autom�tica restaurada pelo sistema.";
$locale['global_451'] = "Suspens�o restaurada para ".$settings['sitename'];
$locale['global_452'] = "Ol� USER_NAME,\n
a suspens�o da sua conta em ".$settings['siteurl']." foi restaurada. Suas informa��es de login:\n
Login: USER_NAME
Senha: Ocultado por quest�o de seguran�a.\n
Se voc� esqueceu a sua senha, voc� pode recuperar-la pelo seguinte link: LOST_PASSWORD\n\n
Sauda��es,\n
".$settings['siteusername'];
$locale['global_453'] = "Ol� USER_NAME,\n
A suspens�o da sua conta ".$settings['siteurl']." foi restaurada.\n\n
Atenciosamente,\n
".$settings['siteusername'];
$locale['global_454'] = "Conta reativada no site ".$settings['sitename'];
$locale['global_455'] = "Ol� USER_NAME,\n
A �ltima vez que logou-se no site ".$settings['siteurl']." a sua conta foi reativada e n�o esta mais marcada como conta inativa.\n\n
Atenciosamente,\n
".$settings['siteusername'];
// Function parsebytesize()
$locale['global_460'] = "Vazio";
$locale['global_461'] = "Bytes";
$locale['global_462'] = "KB";
$locale['global_463'] = "MB";
$locale['global_464'] = "GB";
$locale['global_465'] = "TB";
//Safe Redirect
$locale['global_500'] = "Voc� est� sendo redirecionado para %s, por favor, espere. Se voc� n�o for redirecionado, clique aqui.";

// Captcha Locales
$locale['global_600'] = "C�digo de Valida��o";
$locale['recaptcha'] = "pt";

//Miscellaneous
$locale['global_900'] = "N�o � poss�vel converter HEX para DEC";
?>