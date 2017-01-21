<?php

// Implementing this for my DigitalOcean API Client isn't as important
// as finishing all of the requests.

class Droplets {
	public function create(CreateDroplet $createDroplet) {
		var_dump($createDroplet);
		echo 'Youre droplet has been created!' . "\n";
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

class factory {
	public static function build($class) {
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
}

// Having a factory function assumes the person using the package won't already
// have one. So we should namespace this. Using a simple class for this example
// irl it would be in a unique namespace to prevent any collisions.
factory::build(CreateDroplet::class)->create([
	'name' => 'levi', 
	'region' => 'nyc1', 
	'size' => '512mb', 
	'image' => 'ubuntu',
	'ipv6' => true
	]
);

// using the above approach will simplify creating the requests and the action
// class. It's easier to pass all the options via an array versus instantiating
// both classes, then adding the extra options to the request, then passing
// the request to the action method.
