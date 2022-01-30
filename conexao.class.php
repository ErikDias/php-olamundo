<?php

Class Conexao {
    private $host = "ec2-3-214-190-189.compute-1.amazonaws.com";
    private $user = "qcxueuwutugaom";
    private $pswd = "534dfd6c06233dde14633d795ed6702154f227a41bfd773af7106c3466e3cc5f";
    private $banco = "dd8pp99pbdat4j";
    private $banco;
    private $strCon;
    private $con;

    function Conexao($banco) {
        $this->banco = $banco;
        $this->strCon = "host=$this->host user=$this->user password=$this->pswd dbname=$this->banco";
    }
    pg_connect("host=$this->host user=$this->user password=$this->pswd dbname=$this->banco");

    function Open() {
        $this->con=pg_connect($this->strCon);
    }

    function Close() {
        pg_close($this->con);
    }

    function StatusCon() {
        if ($this->con) {
            echo 'conectado';
        }
        else {
            echo 'desconectado';
            exit;
        }
    }
}  

?>