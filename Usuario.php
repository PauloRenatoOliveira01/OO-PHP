<?php 

require_once 'autoload.php';

class Usuario extends Permissao{
	private $telefone;
	private $data_cadastro;
	private $nome;

	public function cadastrar(){
		print "<p>Cadastro realizado com sucesso!</p>";
	}

	public function preencherDados($nome, $telefone, $nivel){
        if($nome == NULL)    { throw new Exception('Preencha o campo nome');}
        if($telefone == NULL){ throw new Exception('Preencha o campo telefone');}
        if($nivel == NULL)   { throw new Exception('Preencha o campo nível');}

		print "Nome: ".$this->nome = $nome . " | ";
		print "Telefone: ".$this->telefone = $telefone . " | ";
		print "Nível: ".$this->nivel = $nivel . " | ";
		print "Data do cadastro: " . $this->getDataCadastro();
	}

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;

        return $this;
    }

    public function getTelefone(){
        return $this->telefone;
    }
   
    public function setTelefone($telefone){
        $this->telefone = $telefone;

        return $this;
    }

    public function getDataCadastro(){
        return $this->data_cadastro;
    }
  
    public function setDataCadastro($data_cadastro){
        $this->data_cadastro = $data_cadastro;

        return $this;
    }

}