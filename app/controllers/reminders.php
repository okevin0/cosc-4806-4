<?php

class Reminders extends Controller {

    // list all reminders
    public function index() {
      $reminder = $this->model('Reminder');
      $list_of_reminders = $reminder->get_all_reminders($_SESSION['user_id']);
        
      $this->view('reminders/index', ['reminders' => $list_of_reminders]);
      die;
    }

    // create reminder index and create new reminder
    public function create(){
      $this->view('reminders/create/index');
      die;
    }

    public function create_reminder(){
      $reminder = $this->model('Reminder');
      $subject = $_REQUEST['subject'];
      $created_at = date("Y-m-d H:i:s");
      // print_r($subject);
      // die;
      $reminder->create_reminder($_SESSION['user_id'], $subject, $created_at);
      header('Location: /reminders');
    }

}
