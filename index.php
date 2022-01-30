<?
#incluindo a classe conexao (supondo estar no mesmo diretorio)
include 'conexao.class.php'

#instanciando o objeto
$conexao = new Conexao('dd8pp99pbdat4j');

#chamada ao metodo open que abra a conexao
$conexao->open();

#verificando o status da conexao
$conexao->statusCon();

#encerrando a conexao
$conexao->close();

#verificando a conexao apos close();
$conexao->statusCon();
?>