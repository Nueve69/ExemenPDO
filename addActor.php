
<?php 

include_once __DIR__ . '/vendor/autoload.php';

use App\Repository\ActorRepository;

var_dump($_POST);

$actorRepository = new ActorRepository();

if(isset($_POST['first_name']) && isset($_POST['last_name'])) {
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];

    $actorRepository->addActor(['first_name' => $firstName, 'last_name' => $lastName]);
}

header( 'location: index.php' );
exit();