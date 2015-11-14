<?php

require('../sendsms.php');

$sms = new Sdk_SMS();
$sms->sms_type = SMSTYPE_DIRECT;
$sms->add_recipient('+393479057982');
$sms->add_recipient('+393479876543');
$sms->message = 'hello world!';;
$sms->sender = 'test';
$sms->set_immediate(); // or sms->set_scheduled_delivery($unix_timestamp)
$sms->order_id = '999FFF111';
echo 'About to send a message '.$sms->count_smss().' SMSs long ';
echo 'to '.$sms->count_recipients().' recipients </br>';
if ($sms->validate()) {
  $res = $sms->send();
  if ($res['ok']) {
    echo $res['sentsmss'].' SMS sent, order id is '.$res['order_id'].' </br>';
  } else {
    echo 'Error sending SMS: '.$sms->problem().' </br>';
  }
} else {
    echo 'invalid SMS: '.$sms->problem().' </br>';
}


?>
