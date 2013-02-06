<?php
// Member Management Options
$locale['400'] = "Membros";
$locale['401'] = "Usu�rio";
$locale['402'] = "Adicionar Novo Membro";
$locale['403'] = "Tipo de Usu�rio";
$locale['404'] = "Op��es";
$locale['405'] = "Ver";
$locale['406'] = "Editar";
$locale['407'] = "Ativar";
$locale['408'] = "Desbanir";
$locale['409'] = "Banir";
$locale['410'] = "Remover";
$locale['411'] = "N�o h� membros %s";
$locale['412'] = " com a inicial ";
$locale['413'] = " come�ando com ";
$locale['414'] = "Mostrar Todos";
$locale['415'] = "Pesquisar por membros:";
$locale['416'] = "Buscar";
$locale['417'] = "Membros";
$locale['418'] = "Desativados";
$locale['419'] = "Banidos";
// Ban/Unban/Delete Member
$locale['420'] = "Banido";
$locale['421'] = "Desbanido";
$locale['422'] = "Membro Removido";
$locale['423'] = "Voc� tem certeza que deseja remover este membro?";
$locale['424'] = "Membro Ativado";
// Edit Member Details
$locale['430'] = "Editar Membro";
$locale['431'] = "Dados do Membro Atualizados";
$locale['432'] = "Retornar � Administra��o de Membros";
$locale['433'] = "Retornar ao Painel de Administra��o";
$locale['434'] = "N�o foi poss�vel atualizar os dados do Membro:";
// Extra Edit Member Details form options
$locale['440'] = "Salvar Altera��es";
// Update Profile Errors
$locale['450'] = "N�o � poss�vel editar o administrador prim�rio.";
$locale['451'] = "Voc� deve especificar um nome de usu�rio e um endere�o de email.";
$locale['452'] = "O nome de usu�rio cont�m caracteres inv�lidos.";
$locale['453'] = "O nome de usu�rio ".(isset($_POST['user_name']) ? $_POST['user_name'] : "")." j� est� sendo utilizado.";
$locale['454'] = "Endere�o de email inv�lido.";
$locale['455'] = "O endere�o de email ".(isset($_POST['user_email']) ? $_POST['user_email'] : "")." j� est� sendo utilizado.";
$locale['456'] = "As senhas n�o combinam.";
$locale['457'] = "Senha inv�lida: use somente caracteres alfanum�ricos.<br />
A senha deve conter, no m�nimo, 6 caracteres.";
$locale['458'] = "<b>Aviso:</b> Execu��o de script inesperada.";
// View Member Profile
$locale['470'] = "Perfil do Membro";
$locale['472'] = "Estat�sticas";
$locale['473'] = "Grupos de Usu�rios";
// Add Member Errors
$locale['480'] = "Adicionar Membro";
$locale['481'] = "A conta do membro foi criada.";
$locale['482'] = "A conta do membro n�o p�de ser criada.";
// Suspension Log 
$locale['510s'] = "Entrar para Suspens�o "; // Ou 'Entrar para Suspender'
$locale['511s'] = "N�o h� suspens�es registadas para este membro no registo de suspens�o.";
$locale['512s'] = "suspens�es anteriores do ";
$locale['513'] = "Num."; // como em n�mero
$locale['514'] = "Data"; // ou 'Dados'
$locale['515'] = "Motivo"; // ou 'Justificativa' ou ainda 'Porqu�'
$locale['516'] = "Suspender Administrador";
$locale['517'] = "A��o do Sistema";
$locale['518'] = "Voltar ao perfil de usu�rio"; // ou 'Voltar ao status de usu�rio'
$locale['519'] = "Hist�rico de suspen��o deste usu�rio "; // ou 'Log de suspens�o deste Usu�rio'
$locale['520'] = "Levantado: ";
$locale['521'] = "IP: ";
$locale['522'] = "Ainda n�o reintegrado";
$locale['540'] = "Erro";
$locale['541'] = "Erro: Voc� deve indicar um motivo para a suspens�o!";
$locale['542'] = "Erro: Voc� deve indicar um motivo para o banimento!";
// User Management Admin
$locale['550'] = "Suspender usu�rio: ";
$locale['551'] = "Dura��o em dias:";
$locale['552'] = "Motivo:"; // ou 'Justificativa' ou ainda 'Porqu�'
$locale['553'] = "Suspender";
$locale['554'] = "N�o h� suspens�es registadas para este membro no registo de suspens�o.";
$locale['555'] = "Se voc� decidir que esse usu�rio deve ser banido, clique em 'Banir'";
$locale['556'] = "Suspender Suspens�o do Usu�rio: ";
$locale['557'] = "Suspender Suspens�o";
$locale['558'] = "Suspender Proibi��o de Usu�rio: ";
$locale['559'] = "Suspender Proibi��o ";
$locale['560'] = "Suspender Proibi��o de Seguran�a de Usu�rio: ";
$locale['561'] = "Suspender Proibi��o de Seguran�a";
$locale['562'] = "Proibir Usu�rio: ";
$locale['563'] = "Proibir Usu�rio por Seguran�a: ";
$locale['585a'] = "Por favor, especifique uma raz�o por que voc� est� proibindo ou autorizando ";

$locale['566'] = "proibi��o suspensa";
$locale['568'] = "Proibi��o de Seguran�a Imposta";
$locale['569'] = "Proibi��o de seguran�a Suspensa";
$locale['572'] = "Membro suspenso";
$locale['573'] = "Suspens�o suspensa"; // Ficou estranho mas � isso mesmo
$locale['574'] = "Membro desativado";
$locale['575'] = "Membro reativado";
$locale['576'] = "Conta cancelada";
$locale['577'] = "Cancelamento de conta desfeito";
$locale['578'] = "Conta cancelada e tornada an�nima"; // Estranho mas � isso
$locale['579'] = "Tornar conta an�nima desfeita"; // Estranho mas � isso
$locale['580'] = "Desativar membros inativos";
$locale['581'] = "Voc� tem mais de 50 usu�rios inativos e ter� que executar o processo de desativa��o <strong>%d vezes</strong>.";
$locale['582'] = "Reativar";
$locale['583'] = "Renov�-lo"; // ou 'Renovar'
$locale['584'] = "Selecione o novo estatus";
$locale['585'] = "Este membro foi banido por raz�es de seguran�a! Tem certeza que deseja reintegr�-lo agora?";

$locale['590'] = "Suspender";
$locale['591'] = "Reativar";
$locale['592'] = "suspens�o";
$locale['593'] = "retirar suspens�o";
$locale['594'] = "Por favor, especifique uma raz�o por que voc� est� ";
$locale['595'] = " o usu�rio ";
$locale['596'] = "Dura��o:";

$locale['600'] = "Banir por seguran�a";
$locale['601'] = "Banindo por seguran�a";
$locale['602'] = "Desfazer Proibi��o"; // Unban
$locale['603'] = "Desfazendo Proibi��o"; // unbanning
$locale['604'] = "Motivo:"; // ou 'Raz�o' ou 'Justificativa' ou ainda 'Porqu�'
// Deactivation System
$locale['610'] = "<strong>%d usu�rio(s)</strong> n�o entrou por <strong>%d dia(s)</strong> e foram marcados como inativos. 
Ao desativar, estes usu�rios ter�o <strong>%d dia(s)</strong> antes de serem %s.";
$locale['611'] = "Por favor note que alguns usu�rios podem ter postado conte�do em seu site, como postagens, coment�rios, fotos etc
estes ser�o eliminados quando os usu�rios forem desativados e exclu�dos.";
$locale['612'] = "usu�rio";
$locale['613'] = "usu�rios";
$locale['614'] = "Desativar";
$locale['615'] = "permanentemente apagado";
$locale['616'] = "tornar an�nimo";
$locale['617'] = "Aviso:"; // ou 'Advert�ncia' ou 'Informa��o' ou ainda 'Aviso pr�vio'
$locale['618'] = "� altamente recomend�vel mudar a a��o de 'desactiva��o' para 'tornar an�nimo' em vez de apagar e assim prevenir perda de dados!";
$locale['619'] = "Voc� pode faz�-lo aqui.";
$locale['620'] = "tornar an�nimo";
$locale['621'] = "Desativa��o autom�tica de usu�rios inativos.";
?>
