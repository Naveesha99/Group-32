<?php
/**
 * emp task class
 */

class Emp_tasks
{
    use Model;

    protected $table= 'emptasks';

    protected $allowedColumns =[

        'id',
        'task',
        'place',
        'relavant_date',
        'relavant_time',
        'status',
        'emp_id',
        'Created_at',

    ];

    public function validate($data){
        $this->errors =[];

        if (empty($data['task'])) {
            $this->errors['task'] = "Task is required";
        }

        if (empty($data['place'])) {
            $this->errors['place'] = "place is required";
        }

        if (empty($data['relavant_date'])) {
            $this->errors['relavant_date'] = " Date is required";
        } elseif (!strtotime($data['relavant_date'])){
            $this->errors['relavant_date'] ="Invalid  date format";
        }

        if (empty($data['relavant_time'])) {
            $this->errors['relavant_time'] = "Time is required";
        } elseif(!strtotime($data['relavant_time'])){
            $this->errors['relavant_time']="Invalid time format";
        }


        if(!empty($data['relavant_date']) && !empty($data['relavant_time'])) {
            $start_timestamp = strtotime($data['relavant_date']);
            $end_timestamp = strtotime($data['relavant_time']);
        }
        
        if (empty($this->errors)) {
            return true;
        }

        return false;
    }
}
