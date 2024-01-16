

<?php

// HOW TO CONNECT PHP TO MYSQL USING VSCODE, TABLEPLUS AND LARAGON
$host = "localhost";
$user = "root";
$pass = "";
$dbname   = "learn_db";


    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    
  $statement = $pdo -> prepare("select * from learn_table");

$statement -> execute();

// $post = $statement -> fetchAll(); 
$posts = $statement -> fetchAll(PDO::FETCH_ASSOC);

$dump = var_dump($posts);

echo '<pre>'; 
$dump; 
echo '</pre>';

foreach($posts as $post){
    echo '<li>'; echo $post['blog-title']; echo '</li>';
}