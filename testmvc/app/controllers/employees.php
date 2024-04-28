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

        $employeeRole = isset($_GET['role']) ? $_GET['role'] : null;
        $employee = new employee;
        // show($employeeRole);
        if ($employeeRole) {
            $arr['role'] = $employeeRole;
            $employeeData = $employee->where($arr);
            show($employeeData);

            if ($employeeData){
                $data['role'] = $employeeData;
            }else{
                echo "employee role not found";
                exit();
            }
        }




        $result['employees'] = $employee->findAll();
        $data['employees'] = $result['employees'];
        // show($data['employees']);
        $jobs = new Jobs;
        $result['role'] = $jobs->findall();
        $data['role'] = $result['role'];

        $this->view('admin/employees', $data);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['delete_employee'])) {
                $emp['email'] = $_POST['delete_employee'];

                // show($emp);
                $arr1['isActive'] = 1;
                $user = new User;
                $employee = $user->first($emp);
                $id = $employee->id;
                $user->update($id, $arr1);
                
                // $this->employeeDelete($empId, $employee);
            }
        }


        $jobs = new Jobs;
        $result = $this->jobRole($jobs);

        // $data['username'] = empty($_SESSION['USER']) ? 'User':$_SESSION['USER']->email;

        $data['role'] = $result;
    }

    private function jobRole($jobs)
    {
        $result = $jobs->findAll();
        foreach ($result as $key) {

            unset($key->startTime);
            unset($key->endTime);
            unset($key->salary);
            unset($key->id);
            unset($key->jobSummary);
        }
        // show($result);
        return $result;
        // $data['jobs'] = $result;
        // $this->view('addemployee', $data);
    }

    private function employeeDelete($data, $employee)
    {
        // Use $data instead of $id
        $employee->delete($data, 'id');
        redirect("employees");
    }
}
