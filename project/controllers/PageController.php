<?php
namespace Project\Controllers;

use \Core\Controller;
use \Project\Models\Page;

class PageController extends Controller {

	private $pages;

	public function __construct() {
		$this->pages = [
			1 => ['title'=>'страница 1', 'text'=>'текст страницы 1'],
			2 => ['title'=>'страница 2', 'text'=>'текст страницы 2'],
			3 => ['title'=>'страница 3', 'text'=>'текст страницы 3'],
		];
	}

	public function one($params) {
		$page = (new Page) -> getById($params['id']);
		$this->title = $page['title'];
		return $this->render('page/one', [
			'text' => $page['data'],
			'h1' => $this->title,
		]);
	}

	public function all() {
		$this->title = 'Список всех страниц';

		$pages = (new Page)->getAll();
		return $this->render('page/all', [
			'pages' => $pages,
			'h1' => $this->title
		]);
	}

	public function test() {
		$page = new Page;
		$data = $page->getById(2);
		$data = $page->getByRange(2, 3);
		$data = $page->getAll();
		var_dump($data);
	}

	public function act() {
		return $this->render('page/act', [
				'header' => 'список юзеров',
				'users'  => ['user1', 'user2', 'user3'],
			]);
	}

	// №3
	public function show($params) {
		$this->title = $this->pages[$params['id']]['title'];
		$text = $this->pages[$params['id']]['text'];
		return $this->render('page/show', [
			'text' 	=> $text,
		]);
	}

	public function show1() {
		echo '1';
	}

	public function show2() {
		echo '2';
	}
}