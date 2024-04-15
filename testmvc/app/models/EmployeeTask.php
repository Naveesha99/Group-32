<?php

class EmployeeTask
{
    use Model;

    protected $table = 'employee_task';

    protected $allowedColumns = [
        'taskID',
        'empID',
        'date',
        'startTime',
        'endTime',
    ];

    public function validate($data)
    {
        $this->errors = [];

        if (empty($data['taskID'])) {
            $this->errors['taskID'] = "Task ID is required";
        }

        if (empty($data['empID'])) {
            $this->errors['empID'] = "Employee ID is required";
        }

        if (empty($data['date'])) {
            $this->errors['date'] = "Date is required";
        }

        if (empty($data['startTime'])) {
            $this->errors['startTime'] = "Start time is required";
        }

        if (empty($data['endTime'])) {
            $this->errors['endTime'] = "End time is required";
        }

        if (empty($this->errors)) {
            return true;
        }

        return false;
    }
}