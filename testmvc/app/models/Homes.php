<?php 

class Homes
{
    use Model;

    protected $table = 'homes';
    
    public function getMovieById($id)
    {
      return $this->first(['id' => $id]);
    }
}
