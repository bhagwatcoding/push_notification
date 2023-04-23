<?php session_start();

include 'push.php';
$array=array(); 
$rows=array(); 
$notifList = $push->listNotificationUser($_SESSION['username']);
$record = 0;
foreach ($notifList as $key) {
 $data['title'] = $key['title'];
 $data['msg'] = $key['notif_msg'];
 $data['icon'] = 'https://phpzag.com/demo/push-notification-system-with-php-mysql-demo/avatar.png';
 $data['url'] = 'https://google.com';
 $rows[] = $data;
 $nextime = date('Y-m-d H:i:s',strtotime(date('Y-m-d H:i:s'))+($key['notif_repeat']*60));
 $push->updateNotification($key['id'],$nextime);
 $record++;
}
$array['notif'] = $rows;
$array['count'] = $record;
$array['result'] = true;
echo json_encode($array);
?>