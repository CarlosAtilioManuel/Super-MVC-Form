<?php

    namespace App\Model;

    use App\DAO\PessoaDAO;

    class PessoaModel extends Model{
        public $id, $nome, $cpf, $data_nascimento;

        public function save(){
            $dao = new PessoaDAO();

            (empty($this->id)) == true ? $dao->insert($this) : $dao->update($this);
        }

        public function getAllRows(){
            $dao = new PessoaDAO();

            $this->rows = $dao->select();
        }

        public function getById(int $id) {
            $dao = new PessoaDAO();

            $obj = $dao->selectById($id);

            if ($obj) {
                return $obj;
            }else {
                return new PessoaModel();
            }

        }

        public function delete(int $id) {
            $dao = new PessoaDAO();

            $dao->delete($id);
        }
    }