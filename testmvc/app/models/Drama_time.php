<?php 

class Drama_time
{
    use Model;

    protected $table = 'timeslot';
    
    public function getMovieById($id)
    {
      return $this->first(['id' => $id]);
    }
}
