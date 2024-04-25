<?php

/**
 * home class
 */
class Addseats
{
    use Controller;

    public function index()
    {
        $data = [];
        
        //_________________________Check validation__________________________________
		if($_SERVER['REQUEST_METHOD'] == "POST")
		{
            if(isset($_POST['title']) && $_POST['title']==null)
            {
                $data['no_title'] = 'Drama title is required';
            }
            if(isset($_POST['description']) && $_POST['description']==null)
            {
                $data['no_description'] = 'Drama description is required';
            }
            if ($_FILES["image"]["error"] == 4) 
            {
                $data['no_image']= 'Image Does Not Exist';
            }




        //________________Check and insert data into database_____________________________________
            if(isset($_POST['title'])  &&  isset($_POST['description']))
            {
                if($_POST['title']!=null && $_POST['description']!=null)
                {

                    $home = new Homes;

                    $data['title'] = $_POST['title'];
                    $data['description'] = $_POST['description'];
                    $data['image'] = $_FILES['image'];

                    if ($_FILES["image"]["error"] == 4) 
                    {
                        $data['no_image_v']= 'Image Does Not Exist';
                    } 
                    else 
                    {
                        $fileName = $_FILES["image"]["name"];
                        $tmpName = $_FILES["image"]["tmp_name"];

                        $imageExtension = pathinfo($fileName, PATHINFO_EXTENSION);
                        $imageExtension_lc = strtolower($imageExtension);
                        $validImageExtension = ["jpg", "jpeg", "png", "webp"];

                        if (!in_array($imageExtension_lc, $validImageExtension)) 
                        {
                            $data['extns_invalid'] = 'Invalid Image Extension';
                        } 
                        else 
                        {
                            $homesss = new Homes;
                            $row = $homesss->findAll();

                            if (is_array($row) && !empty($row)) 
                            {
                                $last_element = end($row);      
                                $img_name = $last_element->id + 1;
                            } 
                            else 
                            {
                                $img_name = 1;
                            }

                            $fileNameNew = $img_name.'.'.$imageExtension;
                        //show($fileNameNew);

                            $fileDestination = $_SERVER['DOCUMENT_ROOT'] . '/Group-32/testmvc/public/assets/images/drama_img/' . $fileNameNew;

                            move_uploaded_file($tmpName, $fileDestination);


                        // $data['title'] = $_POST['title'];
                            //$data['description'] = $_POST['description'];
                               // $data['image'] = $fileNameNew;

                            
                                //_______add drama into home table_________
                                $arr['title'] = $_POST['title'];
                                $arr['description'] = $_POST['description'];
                                $arr['image'] = $fileNameNew;
                                $home->insert($arr);

                                $data['ok'] = 'Drama Added successed...!';
                                redirect('addtimes');
                        }

                    }
                }
                else
                {
                    $data['not_all'] = 'Please fill all the fields';
                }
            }
        }
        $this->view('/ticket_booking/addseats', $data);
    }
}
