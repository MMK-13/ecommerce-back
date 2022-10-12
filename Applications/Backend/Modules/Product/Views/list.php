<?php
	$data = [];
	foreach ($products as $product) {
		$data[] = [
			'id' => $product['RefProduct'],
			'name' => $product['Name'],
			'description' => $product['Description']
		];
	}

	echo json_encode($data);