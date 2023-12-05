<?php

class Funcionario{
    private int $id;
    private string $nome;
    private string $cargo;
    private string $cpf;
    private string $email;
    private string $senha;
    private string $datanascimento;
    private string $telefone;
    private string $logradouro;

    public function __construct(
        $id,
        $nome,
        $cargo,
        $cpf,
        $email,
        $senha,
        $datanascimento,
        $telefone,
        $logradouro
    ) {
        $this->id = $id;
        $this->nome = $nome;
        $this->cargo = $cargo;
        $this->cpf = $cpf;
        $this->email = $email;
        $this->senha = $senha;
        $this->datanascimento = $datanascimento;
        $this->telefone = $telefone;
        $this->logradouro = $logradouro;
    }
    
    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getCargo() {
        return $this->cargo;
    }

    public function getCpf() {
        return $this->cpf;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function getDataNascimento() {
        return $this->datanascimento;
    }

    public function getTelefone() {
        return $this->telefone;
    }

    public function getLogradouro() {
        return $this->logradouro;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setCargo($cargo) {
        $this->cargo = $cargo;
    }

    public function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
    }

    public function setDataNascimento($datanascimento) {
        $this->datanascimento = $datanascimento;
    }

    public function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    public function setLogradouro($logradouro) {
        $this->logradouro = $logradouro;
    }

}