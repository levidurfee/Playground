<?php

class Droplets {
	public function create(CreateDroplet $createDroplet) {
		var_dump($createDroplet);
	}
}

class DropletFactory {
	public function create($settings) {
		extract($settings);
		$createDroplet = new CreateDroplet(
			$name, $region, $size, $image
		);
		foreach($settings as $key => $value) {
			$createDroplet->$key = $value;
		}

		return (new Droplets)->create($createDroplet);
	}
}

class Domains {}

class CreateDroplet {
	public $ipv6;
	public function __construct($name, $region, $size, $image) {
		echo $name . "\n";
		echo $region . "\n";
		echo $size . "\n";
		echo $image . "\n";
	}
}

class RetrieveDroplet {}
class ListAllDomains {}

function factory($class) {
	$types = [
		'DropletFactory' => [
			'create' => CreateDroplet::class,
			'retrieve' => RetrieveDroplet::class,
		],
		'domains' => [
			'listAll' => ListAllDomains::class,
		],
	];

	foreach($types as $type => $request) {
		if(in_array($class, $request)) {
			return new $type;
		}
	}
}

factory(CreateDroplet::class)->create([
	'name' => 'levi', 
	'region' => 'nyc1', 
	'size' => '512mb', 
	'image' => 'ubuntu',
	'ipv6' => true
	]
);
