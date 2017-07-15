<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Catalog extends CI_Controller {

	public function index()
	{
		$response = array(
			'id' => 'par1',
			'name' => 'Paris',
			'plans' => array(
				array(
					'id' => 'VC1S',
					'name' => 'Cloud Server',
					'specs' => array(
						'id' => "VC1S",
						'ram' => 2048,
						'cpu' => 2,
						'disk' => 50,
						'transfer' => 'Unlimited',
						'dollars_per_hr' => '0.006',
						'dollars_per_mo' => '2.99'
					)
				)
			)
		);

		$this->response->output($response, 200);
	}
}
