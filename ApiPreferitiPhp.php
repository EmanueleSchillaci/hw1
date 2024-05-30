 <?php

 
session_start();

// Check if the user is logged in
if (!isset($_SESSION['IDusername'])) {
    header("Location: login.php");
    exit;
}

// Set the response content type to JSON
header('Content-Type: application/json');

// Connect to the database
$conn = mysqli_connect("localhost", "root", "", "hw1") or die(mysqli_connect_error());
$username = mysqli_real_escape_string($conn, $_SESSION['IDusername']);

// Read and decode the JSON file
$file = "./GamePass.json";
if (!file_exists($file)) {
    die(json_encode(array("error" => "File not found")));
}

$end_point = file_get_contents($file);
$json = json_decode($end_point, true);
if (json_last_error() !== JSON_ERROR_NONE) {
    die(json_encode(array("error" => "Invalid JSON format")));
}

// Initialize the new JSON array
$nuovoJson = array();

// Process each game
foreach ($json["gamePassGames"] as $game) {
    $pref = false;
    $titolo = mysqli_real_escape_string($conn, $game['title']);

    // Check if the game is in the user's favorites
    $query = "SELECT * FROM preferiti WHERE userID = '$username' AND titolo = '$titolo'";
    $res = mysqli_query($conn, $query);
    if ($res && mysqli_num_rows($res) > 0) {
        $pref = true;
    }

    $res = mysqli_query($conn, $query);

// Verifica se ci sono errori SQL



    // Add the game to the new JSON array
    $nuovoJson[] = array(
        "title" => $game["title"],
        "genre" => $game["genre"],
        "developer" => $game["developer"],
        "release_date" => $game["release_date"],
        "link_store" => $game["link_store"],
        "image" => $game["image"],
        "preferiti" => $pref
    );
}

// Output the new JSON array

echo json_encode($nuovoJson);

 
 

 /*
 
session_start();

if (!isset($_SESSION['IDusername'])) {
  header("Location: login.php");
  exit;
}

header('Content-Type: application/json');
$conn = mysqli_connect("localhost", "root", "", "hw1") or die(mysqli_connect_error());
$username = $_SESSION['IDusername'];

$file = "./GamePass.json";
$end_point =file_get_contents($file);
$json=json_decode($end_point,true);
print''. $username . '';

$nuovoJson = array();

for ($i = 0; $i < count($json["gamePassGames"]); $i++) {
  $pref = false;
  $titolo = $json['gamePassGames'][$i]['title'];

  // Correggi la variabile $titolo in $nome nella query SQL
  $query = "SELECT * FROM preferiti WHERE userID ='$username' AND titolo ='$titolo' ";
  $res = mysqli_query($conn, $query);
  if (mysqli_num_rows($res) > 0) {
    $pref = true;
  } else {
    $pref = false;
  }

  $nuovoJson[] = array(
    "title" => $titolo,
    "genre" => $json['gamePassGames'][$i]["genre"],
    "developer" => $json['gamePassGames'][$i]["developer"],
    "release_date" => $json['gamePassGames'][$i]["release_date"],
    "link_store" => $json['gamePassGames'][$i]["link_store"],
    "image" => $json['gamePassGames'][$i]["image"],
    "preferiti" => $pref

  );

}



echo json_encode($nuovoJson); */
?>