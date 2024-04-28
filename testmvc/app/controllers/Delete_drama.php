<?php 
class Delete_drama
{
	use Controller;
	
	public function index()
	{
        $data = [];

        $home = new Homes;
        $times = new Booking;

        if(isset($_POST['delete']) && isset($_POST['id']))
        {
            $arr['drama_id'] = $_POST['id'];
            $arr2['id'] = $_POST['id'];

            $row = $times->first($arr);
            $row1 = $home->first($arr2);
            if($row)
            {
               $data['details'] = $row1;
               $data['has_time'] = 'Cannot delete this drama because it has time';
            }
            else
            {
                $data['details'] = $row1;
                $data['no_time'] ="Are you sure want to delete this drama?" ;
            }
        }
        if(isset($_POST['update']) && isset($_POST['id']))
        {
            $arr['drama_id'] = $_POST['id'];
            $arr2['id'] = $_POST['id'];

            // $row = $times->first($arr);
            $row1 = $home->first($arr2);
            if($row1)
            {
               $data['details'] = $row1;
               $data['upd_home'] = 'can update';
            }
        }


        /* ____________Update and delete_________________ */
        
            if(isset($_POST['title'])  &&  isset($_POST['description']) && isset($_POST['id']))
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
                                $img_name = $last_element->id * 2;
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
                                $ID = $_POST['id'];
                                $arr['title'] = $_POST['title'];
                                $arr['description'] = $_POST['description'];
                                $arr['image'] = $fileNameNew;
                                $home->update($ID,$arr);

                                $data['ok'] = 'Drama Updated successed...!';
                                redirect('delete_drama');
                        }

                    }
                }
                else
                {
                    $data['not_all'] = 'Please fill all the fields';
                }
            }


            if(isset($_POST['del_id']))
            {
                show($_POST);
                $ID = $_POST['del_id'];
                $homess = new Homes;
                $homess->delete($ID);

                $data['sucess_delete'] = 'successfully deleted.';
            }

        $data['drama'] = $home->findAll();
		$this->view('/ticket_booking/delete_drama', $data);
	}
}
