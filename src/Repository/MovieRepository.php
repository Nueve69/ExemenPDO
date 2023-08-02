<?php 


namespace App\Repository; 

use App\Service\PDOService;


class movieRepository

{
    private PDOService $pdoService;

    public function __construct()
    {
    $this->pdoService = new PDOService();
    }
    public function findAll()
    {

    $query = $this->pdoService->getPdo()->query("SELECT*from movie");
    return $query->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function findByTitle($title)
{
    $query = $this->pdoService->getPdo()->prepare("SELECT * FROM movie WHERE title LIKE :title");
    $query->execute(['title' => '%' . $title . '%']);
    return $query->fetchAll(\PDO::FETCH_ASSOC);
}

    public function addMovie(array $array){

        $query = $this->pdoService->getPdo()->prepare("INSERT INTO movie(title, release_date) VALUES(:title, :release_date)");

        $query->bindParam(':title', $array['title']);
        $query->bindParam(':release_date', $array['release_date']);
        $query->execute();

    }

       



    
    

   


   


}