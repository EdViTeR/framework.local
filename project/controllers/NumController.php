<?php
namespace Project\Controllers;
use \Core\Controller;
use \Project\Models\Hello;

/**
 * 
 */
class NumController extends Controller {
	
	public function sum($params) {
		echo array_sum($params);
	}
}