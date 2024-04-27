<?php

/**
 * employee Task class
 */

class EmpTask
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

    $empId = empty($_SESSION['USER']) ? 'User':$_SESSION['USER']->id;

    $emp_task = new Emp_tasks;
    

    if ($empId) {
      $arr1['emp_id'] = $empId;
      $empData = $emp_task->where($arr1);
      if ($empData) {
          $result = $empData;
      } else {
          echo "Task not found.";
          exit();
      }
  }
    $data = $result;

    $this->view('employee/empTask', $data);
  }
}
