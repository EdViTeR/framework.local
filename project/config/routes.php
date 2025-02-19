<?php
	use \Core\Route;
	
	return [
		new Route('/product/all/', 'product', 'all'),
		new Route('/product/:n/', 'product', 'show'),
		new Route('/user/all/', 'user', 'all'),
		new Route('/user/first/:n/', 'user', 'first'),
		new Route('/user/:id/', 'user', 'show'),
		new Route('/user/:id/:key/', 'user', 'info'),

		new Route('/test/:var1/:var2/', 'num', 'sum'),

		new Route('/page/:id', 'page', 'one'),
		new Route('/pages/', 'page', 'all'),
		new Route('/page/act/', 'page', 'act'),
		new Route('/page/test/', 'page', 'test'),
		// new Route('/page/:id/', 'page', 'show'),

		new Route('/hello/', 'hello', 'index'),
		
		new Route('/my-page1/', 'page', 'show1'),
		new Route('/my-page2/', 'page', 'show2'),
		new Route('/my-test1/', 'test', 'act1'),
		new Route('/my-test2/', 'test', 'act2'),
		new Route('/my-test3/', 'test', 'act3'),

	];