<?php

class Reminder {

    public function __construct() {

    }

  // Create a reminder, view reminders (read), update existing reminders, and delete reminders
    public function get_all_reminders ($user_id) {
      $db = db_connect();
      $statement = $db->prepare("select * from reminders where user_id = ?;");
      $statement->execute([$user_id]);
      $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
      return $rows;
    }

    public function create_reminder () {
      $db = db_connect();
      $statement = $db->prepare("select * from reminders;");
      $statement->execute();
      $rows = $statement->fetch(PDO::FETCH_ASSOC);
      return $rows;
    }
  
    public function update_reminder ($reminder_id) {
      $db = db_connect();
      $statement = $db->prepare("select * from reminders;");
      $statement->execute();
      $rows = $statement->fetch(PDO::FETCH_ASSOC);
      return $rows;
    }
  
    public function delete_reminder ($reminder_id) {
      $db = db_connect();
      $statement = $db->prepare("select * from reminders;");
      $statement->execute();
      $rows = $statement->fetch(PDO::FETCH_ASSOC);
      return $rows;
    }
  
}
?>
