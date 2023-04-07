<h2>Você está em: <a href="<?php echo INCLUDE_PATH; ?>">FORUM</a> > <a href="<?php echo INCLUDE_PATH.$idForum ?>"><?php echo $nomeForum; ?></a> > <?php echo $nomeTopico; ?></h2>

<?php
	foreach ($pegarPosts as $key => $value) {
		echo '<h3>'.$value['nome'].'</h3>';
		echo '<p>'.$value['mensagem'].'</p>';
		echo '<hr>';
	}
?>

<h3 style="background:rgb(225,225,225);">Responda a este tópico:</h3>
<form method="post">
	<input style="width: 100%;height: 40px;" type="text" name="nome">
	<textarea style="width: 100%;height: 120px;margin-top: 10px;" name="mensagem"></textarea>
	<input type="hidden" name="topico_id" value="<?php echo $idTopico; ?>">
	<input type="submit" name="cadastrar_post" value="Enviar!">
</form>