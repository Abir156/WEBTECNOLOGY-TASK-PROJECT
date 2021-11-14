<?php
  require "DBConnect.php";
  require "User.php";

  function addUser($user) {
    $conn = connect();
    $sql = $conn->prepare("INSERT INTO users VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $sql->bind_param("ssssissssiss", $user->username, $user->password, $user->fname, $user->lname, $user->gender, $user->dob, $user->religion, $user->present_address, $user->permanent_address, $user->phone, $user->email, $user->url);
    $sql->execute();
    if($sql->errno === 0) {
      return TRUE;
    }
    return FALSE;
  }

  function login($username, $password) {
    $conn = connect();
    $sql = $conn->prepare("SELECT * FROM users WHERE username = ? and password = ?");
    $sql->bind_param("ss", $username, $password);
    $sql->execute();
    $records = $sql->get_result();
    // var_dump($records->num_rows);
    return $records->num_rows === 1;
  }

  function getUser($username) {
    $conn = connect();

    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = $conn->query($sql);
    // var_dump($result);
    if ($result->num_rows === 1) {
      return $result->fetch_assoc();
    }
  }

  function getAllUsers() {
    $conn = connect();

    $sql = "SELECT * FROM users";
    $result = $conn->query($sql);
    // var_dump($result);
    if ($result->num_rows > 0) {
      return $result;
    }
  }

  function deleteUser($username) {
    $conn = connect();

    $sql = "DELETE FROM users WHERE username='$username'";
    $result = $conn->query($sql);
    // var_dump($result);
    if ($result === TRUE) {
      echo "User $username deleted successfully";
    }
    else {
      echo "Error when deleting user: $username";
    }
    return $result;
  }
  // deleteUser('fahim');
  // deleteUser('dewan');
  // deleteUser('b');
?>
