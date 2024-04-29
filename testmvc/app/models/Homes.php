<?php 

class Homes
{
    use Model;

    protected $table = 'homes';
    
    protected $allowedColumns = [
      'id',
      'title',
      'description',
      'image'
  ];

  public function validate($data)
  {
      $this->errors = [];

      if(empty($data['title']))
      {
          $this->errors['title'] = "Plaease enter the title";
      }
      if(empty($data['description']))
      {
          $this->errors['description'] = "Please enter description";
      }
      if(!empty($data['description']) && strlen($data['description']) < 100)
      {
          $this->errors['description'] = "Description must be at least 100 characters";
      }
      if(empty($data['image']))
      {
          $this->errors['image']="Please upload cover image";
      }
      if(empty($this->errors))
      {
        return true;
      }

      return false;
  }


  public function getMovieById($id)
  {
    return $this->first(['id' => $id]);
  }
}
