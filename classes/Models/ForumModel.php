<?php
 namespace Models;

 class ForumModel{
      
     public function listarForuns(){
         $listarForuns = \MySQL::conectar()->prepare("SELECT * FROM `tb_foruns` ");
         $listarForuns->execute();
         $foruns=$listarForuns->fetchAll();
         include('Views/forum_home.php');
     }

     public function listarTopicos($idForum){
            $forumNome = \MySQL::conectar()->prepare("SELECT * FROM `tb_foruns` WHERE id = ?");
			$forumNome->execute(array($idForum));
			$forumInfo = $forumNome->fetch();
			$listarTopicos = \MySQL::conectar()->prepare("SELECT * FROM `tb_forum.topicos` WHERE forum_id = ?");
			$listarTopicos->execute(array($idForum));
			$topicos = $listarTopicos->fetchAll();
            include('Views/topicos.php');
     }

     public function listarPosts($arr){
        $idForum = $arr[1];
        $idTopico = $arr[2];
        $nomeForum = \MySQL::conectar()->prepare("SELECT * FROM `tb_foruns` WHERE id = ?");
        $nomeForum->execute(array($idForum));
        $nomeForum = $nomeForum->fetch()['nome'];
        $nomeTopico = \MySQL::conectar()->prepare("SELECT * FROM `tb_forum.topicos` WHERE id = ?");
        $nomeTopico->execute(array($idTopico));
        $nomeTopico = $nomeTopico->fetch()['nome'];
        $pegarPosts = \MySQL::conectar()->prepare("SELECT * FROM `tb_forum.posts` WHERE topico_id = ?");
        $pegarPosts->execute(array($idTopico));
        $pegarPosts = $pegarPosts->fetchAll();
        include('Views/topico_single.php');
     }
 }

?>