<?php


/**
 * Reservationists class
 */
class Reservationpayments
{

	use Model;

	protected $table = 'reservationpayments';

	protected $allowedColumns = [
		'id',
		'reqid',
		'fullname',
		'mobile',
		'email',
		'ispaid',
		'orderId',
	];

	public function validate($data)
	{
		$this->errors = [];

		// if (empty($data['reqid'])) {
		// 	$this->errors['reqid'] = "reqid is required";
		// }

		// if (empty($data['fullname'])) {
		// 	$this->errors['fullname'] = "Full name is required";
		// }

		// if (empty($data['mobile'])) {
		// 	$this->errors['mobile'] = "mobile is required";
		// } else
		// if (!filter_var($data['mobile'], FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => "/^[0-9]{10}$/")))) {
		// 	$this->errors['mobile'] = "mobile is not valid";
		// }
		
		// if (empty($data['email'])) {
		// 	$this->errors['email'] = "Email is required";
		// } else
		// if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
		// 	$this->errors['email'] = "Email is not valid";
		// }

		// if (empty($data['ispaid'])) {
		// 	$this->errors['ispaid'] = "ispaid is required";
		// }

		if (empty($this->errors)) {
			return true;
		}

		return false;
		// return true;
	}
}
