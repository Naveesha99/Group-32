<?php

/**
 * edit article  class
 */

class CWEditArticle
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
        $data = [];

        $articleId = isset($_GET['id']) ? $_GET['id'] : null;
        // echo $articleId;
        $article = new Article;

        if ($articleId) {
            $arr1['id'] = $articleId;

            $articleData = $article->where($arr1);

            if ($articleData) {

                $data['article'] = $articleData;
                // show($data);

            } else {
                echo "Article not found.";
                exit();
            }
        }

        if ($_SERVER['REQUEST_METHOD'] == "POST") {


            if (isset($_POST['save_draft'])) {
                $_POST['status'] = 0;
                $article->update($articleId, $_POST, 'id');
                redirect('cwDraft');
            }

            if (isset($_POST['submit_article'])) {
                $_POST['status'] = 1;
                $_POST['progress'] = 'pending';

                if ($_FILES["image"]["error"] == 4) {
                    echo
                    "<script> alert('Image Does Not Exist'); </script>";
                } else {
                    $fileName = $_FILES["image"]["name"];
                    // $fileSize = $_FILES["image"]["size"];
                    $tmpName = $_FILES["image"]["tmp_name"];
    
                    $validImageExtension = ['jpg', 'jpeg', 'png'];
                    $imageExtension = explode('.', $fileName);
                    $imageExtension = strtolower(end($imageExtension));
    
                    if (!in_array($imageExtension, $validImageExtension)) {
                        echo
                        "
                        <script>
                          alert('Invalid Image Extension');
                        </script>
                        ";
                    } else {
                        // $newImageName = uniqid();
                        $fileNameNew = uniqid('', true) . '.' . $imageExtension;
    
                        $fileDestination = $_SERVER['DOCUMENT_ROOT'] . '/Group-32/testmvc/public/assets/images/drama_portal/' . $fileNameNew;
    
                        if (file_exists($fileDestination)) {
                            unlink($fileDestination); // Delete the existing image file
                        }
    
                        move_uploaded_file($tmpName, $fileDestination);
                        // $_SESSION['USER']->image = $fileNameNew;
                        // show($_SESSION['USER']->image);
    
                        echo
                        "
                        <script>
                          alert('Successfully Added');
                          
                        </script>
                        ";
                    }
                }
    
                //show($_POST);
                $updateData = [
                    'article_name' => $_POST['article_name'],
                    'category' => $_POST['category'],
                    'article_content' => $_POST['article_content'],
                    'image' => $fileNameNew,
                    'status' => $_POST['status'],
                    'progress' => $_POST['progress'],
                    // 'cwName' => $_POST['cwName'],
                    // 'cw_id' => $_POST['cw_id']
                ];
                //show($updateData);
    
                $article->update($articleId, $updateData, 'id');
                redirect('cwArticleReview');
            }
    
    
        }

       

        // redirect('cwArticleDisplay');

        if ($_SESSION['USER']->user_type == 'Content Writer') {
        $this->view('contentwriter/cwEditArticle', $data);
        }
    }
}
