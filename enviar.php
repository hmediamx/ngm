<?php include("encabezado.php"); ?>


<div class="main rios">




<?php

// Strips nasty tags from code..
function cleanEvilTags($data) {
  $data = preg_replace("/javascript/i", "j&#097;v&#097;script",$data);
  $data = preg_replace("/alert/i", "&#097;lert",$data);
  $data = preg_replace("/about:/i", "&#097;bout:",$data);
  $data = preg_replace("/onmouseover/i", "&#111;nmouseover",$data);
  $data = preg_replace("/onclick/i", "&#111;nclick",$data);
  $data = preg_replace("/onload/i", "&#111;nload",$data);
  $data = preg_replace("/onsubmit/i", "&#111;nsubmit",$data);
  $data = preg_replace("/<body/i", "&lt;body",$data);
  $data = preg_replace("/<html/i", "&lt;html",$data);
  $data = preg_replace("/document\./i", "&#100;ocument.",$data);
  $data = preg_replace("/<script/i", "&lt;&#115;cript",$data);
  return strip_tags(trim($data));
}

// Cleans output data..
function cleanData($data) {
  $data = str_replace(' & ', ' &amp; ', $data);
  return (get_magic_quotes_gpc() ? stripslashes($data) : $data);
}

function multiDimensionalArrayMap($func,$arr) {
  $newArr = array();
  if (!empty($arr)) {
    foreach($arr AS $key => $value) {
      $newArr[$key] = (is_array($value) ? multiDimensionalArrayMap($func,$value) : $func($value));
    }
  }
  return $newArr;
}








if (!empty($_POST)){

  $data['success'] = true;
  $_POST  = multiDimensionalArrayMap('cleanEvilTags', $_POST);
  $_POST  = multiDimensionalArrayMap('cleanData', $_POST);

  //your email adress 
  $emailTo ="alheranx@hotmail.com"; //"yourmail@yoursite.com";

  //from email adress
  $emailFrom ="no-reply@eniacmartinez.com"; //"contact@yoursite.com";

  //email subject
  $emailSubject = "Mensaje de mi web";

  $name = $_POST["nombre"];
  $email = $_POST["email"];
  $comment = $_POST["mensaje"];
  if($name == "")
   $data['success'] = false;
 
 if (!preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $email)) 
   $data['success'] = false;


 if($comment == "")
   $data['success'] = false;

   if($data['success'] == true) {

    $message = "Nombre: $name<br>
    e-mail: $email<br>
    Mensaje: $comment";


    $headers = "MIME-Version: 1.0" . "\r\n"; 
    $headers .= "Content-type:text/html; charset=utf-8" . "\r\n"; 
    $headers .= "From: <$emailFrom>" . "\r\n";
    mail($emailTo, $emailSubject, $message, $headers);

    $data['success'] = true;
    //echo json_encode($data);
    echo "<h1>Gracias por enviarnos tu mensaje</h1>";
  }
}
?>


</div>


<?php include("pie.php"); ?>