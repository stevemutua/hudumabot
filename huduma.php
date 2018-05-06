<?php

ini_set("error_reporting", E_ALL);
$token="492903481:AAGjkLL0zFk930Sh19kCA3tENBFZhfP8pn4";
$url='https://api.telegram.org/bot'.$token;


$updates=file_get_contents('php://input');
$updateArray=json_decode($updates, TRUE);
$chat_id=$updateArray["message"]["chat"]["id"];
$message=$updateArray["message"]["text"];   


switch($message){
    case "mose":
       check_fee();  
    sendMessage($chat_id,"Hello Moses");
    break;
    case "/start":
  sendMessage($chat_id,"Hello, am grateful to see you here. Am kisii University Bot You can use me to check your fee balance, Report session , Register units, Download Exam card and many more");
    break;
    case "/feebalance":
    sendMessage($chat_id,"Kindly Enter your Registration Number");
    break;
    
    case "/reportsession":
    sendMessage($chat_id,"Opps!! Our Developers are  working on these");
        break;
    case "/registerunits":
     sendMessage($chat_id,"Opps!! Our Developers are  working on these"); 
    break;
    
    case "IN14/20358/15":
        sendMessage($chat_id,"Your Fee balance is 9000");
        sendMessage($chat_id,"Kindly make arrangements and pay the fee before 20th April 2018. Use our banks accounts below");
        sendMessage($chat_id,"Any National Bank: 0123003500900. Kenya Commercial Bank(KCB): 1148599398");
    break;
        
    case "4";
        sendMessage($chat_id,"Your Fee balance is -2000");
        sendMessage($chat_id,"Thankyou for Josphine  paying fess in advace, continue paying using our accounts below");
        sendMessage($chat_id,"Any National Bank: 0123003500900. Any  Kenya Commercial Bank(KCB): 1148599398");
    break;
        
    case "IN14/20368/15":
        sendMessage($chat_id,"Your Fee balance is 9000");
        sendMessage($chat_id,"Kindly make arrangements and pay the fee before 20th April 2018. Use our banks accounts below");
        sendMessage($chat_id,"Any National Bank: 0123003500900. Kenya Commercial Bank(KCB): 1148599398");
    break;
        
    default:
    sendMessage($chat_id,"Opps!! Dont Understand these");
}

 function sendMessage($chat_id,$message){
    $update=$GLOBALS[url]."/sendmessage?chat_id=".$chat_id."&text=".$message;
    file_get_contents($update);
}


?>
