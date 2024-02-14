<?php

/**
 * home class
 */
class employees
{
    use Controller;

    public function index()
    {
        $employee = new employee;
        $result = $employee->findAll();
        $data = $result;

        $this->view('admin/employees', $data);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['delete_employee'])) {
                $empId = $_POST['delete_employee'];
                $this->employeeDelete($empId, $employee);
            }
        
            if (isset($_POST['update_employee'])) {
                unset($_POST['update_employee']);
                $this->employeeUpdate($_POST, $employee);
            }
        }
        
        // $show($_POST);1
    }

    private function employeeDelete($data, $employee)
    {
        // Use $data instead of $id
        $employee->delete($data, 'id');
        redirect("employees");
    }

    private function employeeUpdate($data, $employee)
    {
        if (isset($data['id'])) {
            $id = $data['id'];
            unset($data['id']);
            $employee->update($id, $data, 'id');
        }
    }
}
