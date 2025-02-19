<?php
namespace Project\Controllers;

use \Core\Controller;
use \Project\Models\Products;

/**
 *
 */
class ProductController extends Controller {
	
	private $products;

	function __construct() {
		$this->products = [
			1 => [
				'name'     => 'product1',
				'price'    => 100,
				'quantity' => 5,
				'category' => 'category1',
			],
			2 => [
				'name'     => 'product2',
				'price'    => 200,
				'quantity' => 6,
				'category' => 'category2',
			],
			3 => [
				'name'     => 'product3',
				'price'    => 300,
				'quantity' => 7,
				'category' => 'category2',
			],
			4 => [
				'name'     => 'product4',
				'price'    => 400,
				'quantity' => 8,
				'category' => 'category3',
			],
			5 => [
				'name'     => 'product5',
				'price'    => 500,
				'quantity' => 9,
				'category' => 'category3',
			],
		];
	}

	// №2
	public function show($num) {
		$this->title = 'Действие show контроллера Product';
		
		$product = $this->products[$num['n']];
		return $this->render('product/show', [
				'product' 	=> $product['name'],
				'category'  => $product['category'],
				'price'  	=> $product['price'],
				'quantity'  => $product['quantity'],
			]);
	}

	public function all() {
		$this->title = 'Список всех продуктов';
		$data = (new Products)->getAll();
		return $this->render('product/all', [
			'products' 	=> $data,
			'title' 	=> $this->title,
		]);
	}

	public function one($params) {
		$this->title = 'Описание продукта';
		$product = (new Products)->getById($params['id']);
		return $this->render('product/one', [
			'title' 	=> $this->title,
			'product' 	=> $product,
		]);
	}
}