<?php
ob_start();
 // defina aqui o usuario e a senha da administracao
$login = 'admin';
$senha = 'administrador';

if ($login == $_POST['usuario'] && $senha == $_POST['password'])

{
}

else
{
echo "<script type='text/javascript'>
alert('Reveja seu login e sua senha.');
location.href='admin/';
</script>";

}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Area de administracao</title>
<script language="javascript">
function reinic(){
 if(confirm("Deseja realmente reinicializar o chat? Todas as mensagens serão apagadas.")) {
  var janela = window.open('sjdofijwerflisdfjsdfijefmclsdkjvodiujvfsofisdfjweofljsdnfksdfuh.php','janela','toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=no,resizable=no,width=5,height=5'); return false;
janela.window.close();
 }
}

function sairadmin(){
 if(confirm("Deseja realmente sair? Os usuarios do chat NÃO ficarão sabendo.")) {
  location.href='admin/';
 }
}
</script>
</head>
<body bgcolor="#303c6d">
<center><font face="Verdana" size="3" color="white"><b>Área de administração</b><br><br>
<iframe src="chat.php" width="600" height="400" name="chat" align="left">Atualize seu navegador.</iframe><br><iframe name="ultimo" src="ultima.php" frameborder="0" width=300 height=16 marginwidth=0 marginheight=0 hspace=0 vspace=0 frameborder=0 scrolling=no>Favor atualizar seu navegador.</iframe><br><br><hr size="1" color="white">
<form action="gravar.php" method="post" target="chat">
<input name="nick" type="hidden" value="<font color=red><hr size=1 color=red>Moderador</font color=red>">
<input name="acao" type="hidden" value="<font color=red>diz</font color=red>">
<input type="text" name="texto"><input type="submit" value="Dizer">
</form><form action="gravar.php" method="post" target="chat">
<input name="nick" type="hidden" value="<font color=red>Moderador</font color=red>">
<input name="acao" type="hidden" value="<font color=red>alerta</font color=red>">
<input name="texto" type="hidden" value="<a href=# onClick=window.open('termo.htm','Janela','toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=no,resizable=no,width=300,height=300'); return false; ><font color=red>Favor ler nosso termo de uso. </font color=red></a>">
<input type="submit" value="Enviar link para termo de uso"><br></form>
<input type="button" value="Reinicializar chat" onClick="javascript:reinic()">
<input type="button" value="Sair" onClick="javascript:sairadmin()">
</body>
</html>

