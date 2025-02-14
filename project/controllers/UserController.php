<?php
namespace Project\Controllers;

use \Core\Controller;

/**
 * 
 */ 
class UserController extends Controller {
	
	private $user;

	function __construct() {
		$this->users = [
			1 => ['name'=>'user1', 'age'=>'23', 'salary' => 1000], 
			2 => ['name'=>'user2', 'age'=>'24', 'salary' => 2000], 
			3 => ['name'=>'user3', 'age'=>'25', 'salary' => 3000], 
			4 => ['name'=>'user4', 'age'=>'26', 'salary' => 4000], 
			5 => ['name'=>'user5', 'age'=>'27', 'salary' => 5000]
		];
	}

	public function show($id) {
		var_dump($this->users[$id['id']]);
	}

	public function info($name) {
		foreach ($this->users as $key => $value) {
			if ($value['name'] == $name['key']) {
				echo $value['age'];
			}
		}
	}

	public function all() {
		foreach ($this->users as $key => $value) {
			echo $value['name'];
		}
	}

	public function first($num) {
		foreach ($this->users as $key => $value) {
			if ($key <= $num['n']) {
				echo $value['name'];
			}
		}
	}
}