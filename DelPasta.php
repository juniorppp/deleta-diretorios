//Com este comando vc consegue deletar um diretorio sem precisar deletar os subdiretorios

function DeletaDir($pasta){
$DirDel = system("rm -r $pasta");

  if($DirDel){
      echo "Pasta deletada com sucesso!";
      }else{
      echo "Erro ao deletar esta pasta";
      }
}

//Fazendo a chamada da função DeletarDir
DeletarDir('imagens/pasta');

