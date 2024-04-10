<?php 

class Timeslot2
{
    use Model;

    protected $table = 'time2';
    
    protected $allowedColumns = [
        'id',
        'drama_id',
        'date',
        'time',
        'seat_id',
        'status',
        'username',
        'email',
        'phone',
        'price'
    ];

    public function validate($data)
    {
        $this->errors = [];

        if(empty($data['username']))
        {
            $this->errors['username'] = "Plaease enter your name";
        }
        if(empty($data['email']))
        {
            $this->errors['email'] = "Enter your working email";
        }
        elseif(!filter_var($data['email'],FILTER_VALIDATE_EMAIL))
        {
            $this->errors['email'] = "Email is not valid";
        }

        if(empty($data['phone']))
        {
            $this->errors['phone']="Enter your Phone number";
        }

        if(empty($this->errors))
		{
			return true;
		}

		return false;
    }
}
