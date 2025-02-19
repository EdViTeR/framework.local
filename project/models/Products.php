<?php
namespace Project\Models;

use \Core\Model;

/**
 * 
 */
class Products extends Model {

	public function getById($id) {
		return $this->findOne("SELECT * FROM products WHERE id=$id");
	}

	public function getByRange($from, $to) {
		return $this->findMany("SELECT * FROM page WHERE id>=$from AND id<=$to");
	}

	public function getAll() {
		return $this->findMany("SELECT * FROM products");
	}
}