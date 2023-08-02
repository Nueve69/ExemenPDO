
<?php 

include_once __DIR__ . '/vendor/autoload.php';

use App\Repository\MovieRepository;

var_dump($_POST);

$movieRepository = new MovieRepository();

if(isset($_POST['title']) && isset($_POST['release_date'])) {
    $title = $_POST['title'];
    $date = $_POST['release_date'];

    $movieRepository->addMovie(['title' => $title, 'release_date' => $date]);
}

header( 'location: index.php' );
exit();