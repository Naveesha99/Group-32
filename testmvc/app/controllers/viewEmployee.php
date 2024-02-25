<?php


class viewEmployee
{
    use Controller;

    public function index()
    {

        $data = [];

        $employeeId = isset($_GET['id']) ? $_GET['id'] : null;
        $employee = new Employee;

        if($employeeId){
            $arr['id'] = $employeeId;

            $employeeData = $employee->where($arr);

            if($employeeData){
                $data['employee'] = $employeeData;

            }else {
                echo "employee not found";
                exit();
            }
        }

        $this->view('admin/viewemployee', $data);
    }
}