
<?php
  
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
      $mysql_host = "localhost";
      $mysql_username = "ahmdsalh_DMTECH";
      $mysql_password = "DM_2020_TECH_$$";
      $mysql_database = "ahmdsalh_DMTECH";
      
  
  
      $user = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
      $mail = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
      $cell = filter_var($_POST['cellphone'], FILTER_SANITIZE_NUMBER_INT);
      $Address = filter_var($_POST['Address'],FILTER_SANITIZE_STRING);
      $major = filter_var($_POST['major']);
      $CurrentOccupation = filter_var($_POST['CurrentOccupation'], FILTER_SANITIZE_STRING);
      $interestedin = filter_var($_POST['interestedin'],FILTER_SANITIZE_STRING);
  
      $knowOptions= $_REQUEST["knowOptions"];
  
      $b=implode(", ", $knowOptions);
  
  
  
      $mysqli = new mysqli($mysql_host, $mysql_username, $mysql_password, $mysql_database);
      
      
      $statement = $mysqli->prepare("INSERT INTO users_data (username, email, cellphone, Address, major, CurrentOccupation,interestedin, knowOptions)VALUES(?, ?, ?, ?, ?, ?, ?, ?)"); 
  
  
      $statement->bind_param('ssssssss', $user, $mail, $cell, $Address, $major, $CurrentOccupation, $interestedin, $b ); 
      
      if($statement->execute()){
  
      }else{
          print $mysqli->error; 
  
      }
      
  
  
  
  
  }
  ?> 
  
  
  
  
  
  <?php
  
  
  require 'phpmailer/PHPMailerAutoload.php';
  $mail = new PHPMailer;
  
  $mail->Host='smtp.gmail.com';
  $mail->Port=587;
  $mail->SMTPAuth= true;       
  $mail->SMTPSecure='tls';
  $mail->Username='formfinal132@outlook.com';
  $mail->Password='Ahmed@01154365122';
  
  $mail->setFrom($_POST['email'],$_POST['username']);
  $mail->addAddress('info@disruptivemobility.com');
  $mail->addReplyTo($_POST['email'],$_POST['name']);
  
  $mail->isHTML(true);
  $mail->Subject='DMTech form';
  $mail->Body= implode('', Array( "Name: &nbsp;",  $_POST['username'], "<br/>", "Email: &nbsp;",  $_POST['email'], "<br/>", "cellphone: &nbsp;",  $_POST['cellphone'], "<br/>",
  
  "Address: &nbsp;",  $_POST['Address'], "<br/>", "Major: &nbsp;",  $_POST['major'], "<br/>", "CurrentOccupation: &nbsp;",  $_POST['CurrentOccupation'],
  
  "<br/>", "interested in: &nbsp;",  $_POST['interestedin'], "<br/>", "How did you know about us? &nbsp;", implode(', ', $_POST['knowOptions'])));
  
  
 
  
  for($ct=0;$ct<count($_FILES['attach_file']['tmp_name']);$ct++){
      $mail->AddAttachment($_FILES['attach_file']['tmp_name'][$ct],$_FILES['attach_file']['name'][$ct]);
  }
  
  
  
  
  
  
  
  if(!$mail->send()){
  
  
      $result = " <div class='alert fade show' role='alert' id='fade-out-careersFaild'> 
            <p> 
          Thank you for reaching out! <br> <strong id='careersFaild-strong'> DMTECH team </strong> will contact you soon.  </p>   

          <button type='button' class='close' data-dismiss='alert' aria-label='Close' id='closeButton'>
  <span aria-hidden='true'>&times;</span>
</button>
</div> ";

      include ('careers.php');
  }
  else {
      $result = " <div class='alert fade show' role='alert' id='fade-out-careersSuccess'> 
      <p> Thank you for reaching out! <br> <strong id='careersSucces-strong'> DMTECH team </strong> will contact you soon. </p>   

    <button type='button' class='close' data-dismiss='alert' aria-label='Close' id='closeButton'>
<span aria-hidden='true'>&times;</span>
</button>
</div> ";

      include ('careers.php');
  
  }
  ?>
     
