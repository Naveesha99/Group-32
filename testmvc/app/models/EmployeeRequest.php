<?php

/**
 * User class
 */

class EmployeeRequest
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
        'status',


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
        }

        if (empty($data['end_date'])) {
            $this->errors['end_date'] = "end date is required";
        }

        if (empty($data['reason'])) {
            $this->errors['reason'] = "reason is required";
        }




        if (empty($this->errors)) {
            return true;
        }

        return false;
    }
}
