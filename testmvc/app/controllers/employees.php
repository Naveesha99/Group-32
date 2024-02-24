<?php

/**
 * home class
 */
class employees
{
    use Controller;

    public function index()
    {

        if (empty($_SESSION['USER'])) {
			// Redirect or handle the case when the user is not logged in
			// For example, you might want to redirect them to the login page
			redirect('login');
			exit();
		}
        
        $employee = new employee;
        $result['employees'] = $employee->findAll();
        $data['employees'] = $result['employees'];
        // show($data['employees']);
        $jobs = new Jobs;
        $result['role'] = $jobs->findall();
        $data['role'] = $result['role'];

        $this->view('admin/employees', $data);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['delete_employee'])) {
                $empId = $_POST['delete_employee'];
                $this->employeeDelete($empId, $employee);
            }
            
        }

        
    }

    private function employeeDelete($data, $employee)
    {
        // Use $data instead of $id
        $employee->delete($data, 'id');
        redirect("employees");
    }

    // private function employeeUpdate($data, $employee)
    // {
    //     if (isset($data['id'])) {
    //         $id = $data['id'];
    //         unset($data['id']);
    //         // show($data);

    //         $data['empName'] = $_POST['NewempName'];
    //         $employee->update($id, $data, 'id');
    //         show($_POST);
    //     }
    // }

    // private function employeeView($data, $employee)
    // {
    //     $result['view'] = $employee->where($data, 'id');
    //     $data['view'] = $result['view'];
    // }
}
