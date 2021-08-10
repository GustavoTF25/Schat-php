<?php
$nick = $_POST['nick'];
$cor = $_POST['cor'];
if($nick == ""){
echo "<script> location.href='index.php'; </script>";
exit;
}
?>

<html>
<head>
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=7">
  <meta name="viewport" content="width=100%,height=80%,initial-scale=1">
  <title>MysteriousUnderground</title>
 
  
</head>



<body bgcolor="#303c6d"><font face="Verdana" size="2" color="white">

 <div><iframe name="chat" src="chat.php" width="100%" height="80%" frameborder="0">Atualize seu navegador.</iframe><br></div><div><iframe name="ultimo" src="ultima.php" frameborder="0" width=300 height=16 marginwidth=0 marginheight=0 hspace=0 vspace=0 frameborder=0 scrolling=no>Favor atualizar seu navegador.</iframe></div>
<!--FORM DE FALA-->
<hr color="white"><form action="gravar.php" method="post" target="chat">
 <font color="<?php echo $cor ?>"><b><?php echo $nick ?></b></font color="<?php echo $cor ?>">
<input name="nick" type="hidden" value="<?php echo $nick ?>">
<input name="cor" type="hidden" value="<?php echo $cor ?>">
 
  </select> : <textarea cols="32" rows="5" type="text" name="texto" onfocus="this.value='';"></textarea> <input type="submit" value="Enviar" >

</form>
<form action="sair.php" method="post">
<input name="nick" type="hidden" value="<?php echo $nick ?>">
<input name="cor" type="hidden" value="<?php echo $cor ?>">
<input type="submit" value="Sair">
</form>
</font>
</body>
</html>