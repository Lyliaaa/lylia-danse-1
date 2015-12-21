<?php
    $text = addslashes($_POST['message']);
    if(empty($text)||empty($_POST['email'])){
        echo "Vous devez completez tout les champs";

    }
    else {

            $body .= "________________________________________________\n";
            if ( isset($_POST) ) {
              foreach( $_POST as $key => $val ) {
                  if (( $key != sendto ) && ( $key != server ) && ( $key != resulturl )) {
                        $body .= $key . " : " . $val . "\n";
                        echo $key . " : " . $val . "<br />";
                  }
               }
            }
            $body .= "________________________________________________\n";
            $body .= "submitted by : " . $_SERVER['REMOTE_ADDR'] . "\n";
            $body .= "from page    : " . $_SERVER['HTTP_REFERER'] ;
            mail('lyliadanse@gmail.com', $_POST['nom'], $body , 'From: ' . $_POST['email']);
    }
?>