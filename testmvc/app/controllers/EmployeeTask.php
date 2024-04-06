<?php

/**
 * add article class

 */
class EmployeeTask
{
    use Controller;

    public function index()
    {
        if (empty($_SESSION['USER'])) {
            // Redirect or handle the case when the user is not logged in
            // For example, you might want to redirect them to the login page
            redirect('cwLogin');
            exit();
        }

        $this->view('employee/tasks');
    }


}
