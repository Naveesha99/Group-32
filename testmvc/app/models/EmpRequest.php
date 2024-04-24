<?php

/**
 * User class
 */

class EmpRequest
{
    use Model;
    protected $table = 'employee_requests';

    protected $allowedColumns = [

        'id',
        'employee_name',
        'leave_type',
        'start_date',
        'end_date',
        'reason',
        'state',
        'emp_id',


    ];

    public function validate($data)
    {
        $this->errors = [];

        if (empty($data['employee_name'])) {
            $this->errors['employee_name'] = "Employee Name is required";
        }

        if (empty($data['leave_type'])) {
            $this->errors['leave_type'] = "Leave type is required";
        }

        if (empty($data['start_date'])) {
            $this->errors['start_date'] = "Start Date is required";
        } elseif (!strtotime($data['start_date'])){
            $this->errors['start_date'] ="Invalid start date format";
        }

        if (empty($data['end_date'])) {
            $this->errors['end_date'] = "end date is required";
        } elseif(!strtotime($data['end_date'])){
            $this->errors['end_date']="Invalid end date format";
        }

        if (empty($data['reason'])) {
            $this->errors['reason'] = "reason is required";
        }

        if(!empty($data['start_date']) && !empty($data['end_date'])) {
            $start_timestamp = strtotime($data['start_date']);
            $end_timestamp = strtotime($data['end_date']);

            if($end_timestamp<$start_timestamp){
                $this->errors['end_date'] ="End date must be greater than or equal to start date";
            }
        }




        if (empty($this->errors)) {
            return true;
        }

        return false;
    }
}
