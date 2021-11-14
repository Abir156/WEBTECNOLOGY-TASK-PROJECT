<?php
  class User
  {
    public $username, $password, $fname, $lname, $gender, $dob, $religion, $present_address, $permanent_address, $phone, $email, $url;

    function __construct($username, $password, $fname, $lname, $gender, $dob, $religion, $email, $present_address = "", $permanent_address = "", $phone = "", $url = "")
    {
      $this->username = $username;
      $this->password = $password;
      $this->fname = $fname;
      $this->lname = $lname;
      if ($gender === 'male') {
        $this->gender = 1;
      }
      else if ($gender === 'female') {
        $this->gender = 0;
      }
      $this->dob = $dob;
      $this->religion = strtoupper(substr($religion, 0, 1));
      $this->present_address = $present_address;
      $this->permanent_address = $permanent_address;
      $this->phone = $phone;
      $this->email = $email;
      $this->url = $url;
    }
  }

?>
