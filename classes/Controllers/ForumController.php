<?php
namespace Controllers;

use MySQL;

class ForumController{

     private $forumModel;

     public function __construct()
     {
          $this->forumModel = new  \Models\ForumModel();
     }

      public function home(){
          if(isset($_POST['cadastrar_forum'])){
               $nome = $_POST['nome'];
               $sql = \MySQL::conectar()->prepare("INSERT INTO `tb_foruns` VALUES (null,?)");
               $sql->execute(array($nome));
               echo '<script>alert("Cadastro feito com sucesso!")</script>';
          }
         $this->forumModel->listarForuns();
      }

      public function topicos($idForum){
          //TODO: VERIFICAR SE EXISTE O FORUM SELECIONADO
          //LISTAR TODOS OS TOPICOS COM BASE NO ID DO FORUM
          //CADASTRAR NOVOS TOPICOS
          if(isset($_POST['cadastrar_topico'])){
               $nome = $_POST['titulo_topico'];
               $forum_id = $_POST['forum_id'];
               $sql = \MySql::conectar()->prepare("INSERT INTO `tb_forum.topicos` VALUES (null,?,?)");
               $sql->execute(array($forum_id,$nome));
               echo '<script>alert("Cadastro realizado com sucesso!")</script>';
          }
          $sql = \MySql::conectar()->prepare("SELECT id FROM `tb_foruns` WHERE id = ?");
          $sql->execute(array($idForum));
          if($sql->rowCount() == 1){
               $this->forumModel->listarTopicos($idForum);
          }else{
               die('O fórum não existe :(');
          }
          
     }

      public function postSingle($arr){
          if(isset($_POST['cadastrar_post'])){
               $topico_id = $_POST['topico_id'];
               $nome = $_POST['nome'];
               $mensagem = $_POST['mensagem'];

               $sql = \MySQL::conectar()->prepare("INSERT INTO `tb_forum.posts` VALUES (null,?,?,?)");
               $sql->execute(array($topico_id,$nome,$mensagem));
               echo '<script>alert("Seu post foi enviado!")</script>';
          }
          $verefica = \MySQL::conectar()->prepare("SELECT id FROM `tb_forum.topicos` WHERE id = ?");
          $verefica->execute(array($arr[2]));
          if($verefica->rowCount() == 1){
               $this->forumModel->listarPosts($arr);
          }else{
               die('O topico nao existe');  
          }
      }
}
?>