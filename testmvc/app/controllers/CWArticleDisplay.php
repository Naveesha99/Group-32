<?php 

/**
 * home class
 */
class CWArticleDisplay
{
    use Controller;
    public function index()
	{

		// $data['username'] = empty($_SESSION['USER']) ? 'User':$_SESSION['USER']->email;

		$this->view('cwArticleDisplay');
	}
}

//     public function index()
//     {
//         $employee = new Article;
//         $result = $employee->findAll();
//         $data = $result;

//         $this->view('employees', $data);

//         if (isset($_POST['employee_id'])) {
//             $empId = $_POST['employee_id'];
//             $this->employeeDelete($empId, $employee);
//         }
// 		// $show($_POST);
//     }

//     private function employeeDelete($data, $employee)
//     {
//         // Use $data instead of $id
//         $employee->delete($data, 'id');
//         redirect("employees");
//     }
// }