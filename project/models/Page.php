<?php
	namespace Project\Models;
	use \Core\Model;
	
	class Page extends Model {

		public function getById($id) {
			return $this->findOne("SELECT * FROM page WHERE id=$id");
		}

		public function getByRange($from, $to) {
			return $this->findMany("SELECT * FROM page WHERE id>=$from 
				AND id<=$to");
		}

		public function getAll() {
			return $this->findMany("SELECT * FROM page");
			// return $this->findMany("SELECT id, title, text FROM page");
		}
	}
?>