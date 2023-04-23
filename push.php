<?php
include 'database/run.php';
class Push extends Database{
    private $table = 'notif';
    private $user = 'notif_user';
    
    public function listNotification() {
        parent::select($this->table);
        return parent::getResult();
    }
	public function listNotificationUser($user){
        $time = date('Y-m-d H:i:s');
		$this->select($this->table, '*', null, "username='$user' AND notif_loop > 0 AND notif_time <= '$time'");
        return parent::getResult();
    }
    public function listUsers(){
        $this->select($this->user, '*', null, "username != 'admin'");
        return parent::getResult();
	}
    public function listUsersId($id){
        $this->select($this->user, 'username', null, "id = $id");
        return parent::getResult()[0]['username'];
    }	
	public function loginUsers($username, $password){
        $this->select($this->user, "id as userid, username, password", null, "username='$username' AND password='$password'");
        return parent::getResult();
	}	
	public function saveNotification($title, $msg, $time, $loop, $loop_every, $user){
        $arr = ['title' => $title, 'notif_msg' => $msg, 'notif_time' => $time, 'notif_repeat' => $loop, 'notif_loop' => $loop_every, 'username' => $user];
        return $this->insert($this->table, $arr) ? 1 : 0;

	}

	public function updateNotification($id, $nextTime) {
        $time = date('Y-m-d H:i:s');
        $this->select($this->table, 'notif_loop', null, "id='$id'");
        return $nl = parent::getResult();
        
        // return $arr = ['notif_time' => "$nextTime", 'publish_date' => "$time", 'notif_loop' => "notif_loop-1"];
        // $this->update($this->table, $arr ,"id='$id'");
	}	

    
}

$push = new Push();

?>