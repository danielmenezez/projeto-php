<?php
class BancodeDados {
    private $host = "localhost";
    private $user = "root";
    private $senha = "usbw";
    private $banco = "produtos";
    public $con;

    public function conecta(){
        $this->con = @mysqli_connect($this->host, $this->user, $this->senha, $this->banco);
        if(!$this->con){
            die("Problemas com a conexão: " . mysqli_connect_error());
        }
        return $this->con;
    }

    public function sqlquery($sql, $pagina){
        $resultado = @mysqli_query($this->con, $sql);
        if(!$resultado){
            echo '<a href="'.$pagina.'">Voltar</a><br>';
            die('Erro na consulta: ' . mysqli_error($this->con));
        }
        return $resultado;
    }

    public function fechar(){
        mysqli_close($this->con);
    }
}
?>