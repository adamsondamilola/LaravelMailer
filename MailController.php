<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Mail; //For calling mailer

use App\Http\Controllers\Controller;

class MailController extends Controller {
   
  public function basic_email() 
  {
      $sender_name = array('name'=>"Any Name");
   
      Mail::send(['text'=>'mail'], $sender_name, function($message) {
         $message->to('receiver_email_address', 'Subject of Message')->subject
            ('body of the message');
         $message->from('sender_email_address','Name of Sender');
      });
      echo "Message Sent!";
   }
   
  public function html_email() 
   {
      $sender_name = array('name'=>"Any Name");
      Mail::send('mail', $sender_name, function($message) {
         $message->to('receiver_email_address', 'Subject of Message')->subject
            ('body of the message');
         $message->from('sender_email_address','Name of Sender');
      });
      echo "Message Sent!";
   }
   
  public function attachment_email() 
  {
      $sender_name = array('name'=>"Any Name");
      Mail::send('mail', $sender_name, function($message) {
         $message->to('receiver_email_address', 'Subject of Message')->subject
            ('body of the message');
         $message->attach('file_path_or_url'); 
         $message->attach('file_path_or_url');
         $message->attach('file_path_or_url'); //You can add more attachments
         $message->from('sender_email_address','Name of Sender');
      });
      echo "Message Sent!";
   }
}
