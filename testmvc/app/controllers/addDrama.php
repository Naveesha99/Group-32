<?php

/**
 * home class
 */
class addDrama
{
    use Controller;

    public function index()
    {
        $data = [];


        if ($_SERVER['REQUEST_METHOD'] == "POST") {

            $home = new Homes;

            $data['title'] = $_POST['title'];
            $data['description'] = $_POST['description'];
            $data['image'] = $_POST['image'];


            if ($home->validate($_POST)) {


                //_______add drama into home table_________
                $arr['title'] = $_POST['title'];
                $arr['description'] = $_POST['description'];
                $arr['image'] = $_POST['image'];
                $arr1['title'] = $_POST['title'];
                $result = $home->first($arr1);

                if ($result) {
                    $data['errors']['added'] = "This drama is already added";

                } else {
                    $home->insert($arr);
                }

                // $home->insert($arr);

            } else {
                $data['errors'] = $home->errors;
            }
        }

        $this->view('admin/adddrama', $data);
    }
}
