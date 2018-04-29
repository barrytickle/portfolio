<?php
          require_once('class.phpmailer.php');
            $temp_row = array();
            $post = $_POST;
            $email_usr = $_POST['email'];
            $name = $_POST['name'];
            foreach($post as $key => $value){
              $row = file_get_contents('row-template.html');
              $row = str_replace('{{key}}', ucfirst($key), $row);
              $row = str_replace('{{value}}', $value, $row);
              array_push($temp_row, $row);
            }

            $content = implode('', $temp_row);
            $message = file_get_contents('email.html');
            $message = str_replace('{{row-template}}', $content, $message);

            $email = new PHPMailer();
            $email->CharSet = 'UTF-8';
            $email->IsHTML(true);
            $email->From      = $email_usr;
            $email->FromName  = $name;
            $email->Subject   = 'Portfolio Enquiry from - '. $name;
            $email->Body      = $message;
            $email->AddAddress( 'barry.tickle12@gmail.com' );
            if($email->send()){
              die('<script>document.location.href="/thank-you/";</script>');
            }
          ?>
