<?php 

class Orders
{
    use Model;
    
    protected $table = 'orders';

    protected $allowedColumns = [
        'id',
        'order_id',
        'payment',
        'refund',
        'username',
        'email',
        'phone',
        'drama_id',
        'drama_date',
        'drama_time',
        'seat_id'
    ];
    
    public function validate($data)
    {
        $this->errors = [];

        if(empty($data['order_id']))
        {
            $this->errors['order_id'] = "Enter booking ID as mentioned in your email message";
        }
        if(empty($data['email']))
        {
            $this->errors['email'] = "Enter email when given the booking time";
        }
        elseif(!filter_var($data['email'],FILTER_VALIDATE_EMAIL))
        {
            $this->errors['email'] = "Email is not correct";
        }

        if(empty($data['phone']))
        {
            $this->errors['phone']="Enter Phone number when given the booking time";
        }

        if(empty($this->errors))
		{
			return true;
		}

		return false;
    }
}
