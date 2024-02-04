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

        $this->view('employees', $data);

        if (isset($_POST['employee_id'])) {
            $empId = $_POST['employee_id'];
            $this->employeeDelete($empId, $employee);
        }
		// $show($_POST);
    }

    private function employeeDelete($data, $employee)
    {
        // Use $data instead of $id
        $employee->delete($data, 'id');
        redirect("employees");
    }
}