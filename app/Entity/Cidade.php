<?php

namespace App\Entity;

use App\Db\Database;

class Cidade{
	public $id;
    public $name;
    public $uf;

    public function cadastrar(){
        $obDatabase = new Database('cities');

		//fixme pode ser aqui a bomba
		$this->id = $obDatabase->insert([
			'name' => $this->name,
			'uf' => $this->uf
		]);

		return true;
    }

	public function atualizar(){
		return (new Database('cities'))->update('id = '.$this->id,[
			'name' => $this->name,
			'uf' => $this->uf
		]);
	}

	public function excluir(){
		return (new Database('cities'))->delete('id = '. $this->id);
	}

	public static function getCidades($where = null, $order = null, $limit = null){
		return (new Database('cities'))->select($where, $order,$limit)->fetchAll(\PDO::FETCH_CLASS,self::class);
	}

	public static function getCidade($id){
		return (new Database('cities'))->select('id = ' .$id)->fetchObject(self::class);
	}




}