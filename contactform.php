<? php
//define variables and set to empty values
$name_error = $email_error = $phone_error = "";
$name = $email = $phone = $message = $success = "";

//form is submitted with POST method
if($_SERVER["REQUEST_METHODE"]== "POST"){
    if(empty($_POST["name"])){
    $name_error = "Name is required";
    } else {
    $name = test_input($_POST["name"]);
    //check if name only contains letters and wihtespace
    if(!preg_match("/^[a-zA-Z]*$/",$name)){
        $name_error ="Only letters and wihtespace allowed";
    }
    }
     if(empty($_POST["email"])){
        $email_error = "Email is required";
        } else {
        $email = test_input($_POST["email"]);
        //check if email address is well-formed
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $email_error ="Invalid email format";
        }
      }
       if(empty($_POST["phone"])){
              $phone_error = "Phone number is required";
              } else {
              $phone = test_input($_POST["phone"]);
              //check if the phone number is valid
              if(!preg_match("/^(\d[\s-]?)?)[\(\[\s-]{0,2}?\d{3}[\)\]\s-]{0,2}?\d{3}[\s-]?\d{4}$/i",$phone)){
                  $phone_error ="Invalid phone number";
              }
            }
      if(empy($_POST["message"])){
        $message = "";
      }
      else {
        $message = test_input($_POST["message"]);
      }
      if($name_error == '' and $email_error == '' and $phone_error == ''){
      $message_body = '';
      unset($_POST['submit']);
      foreach($_POST as $key => $value){
            $message_message_body .= "$key: $value\n";
            }
            $to ='info@swindiatours.com';
            $subject = 'Contact Form Submit';
            if mail($to,$subject,$message_body){
                $success = "message sent, thank you for contacting us!";
                $name = $email = $phone = $message = '';
            }
        else{
            $errors ="Sorry ,Could not send email.Try again later.";
        }
        }
      }
    }
    function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    }