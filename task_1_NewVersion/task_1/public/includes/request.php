<?php

class MyRequest
{
  public function post($key)
  {
    return isset($_POST[$key]) ? $_POST[$key] : null;
  }

  public function get($key)
  {
    return isset($_GET[$key]) ? $_GET[$key] : null;
  }

  public function request($key)
  {
    return isset($_REQUEST[$key]) ? $_REQUEST[$key] : null;
  }

  public function setCookie($name, $value)
  {
    setcookie($name, $value);
  }

  public function getCookie($name)
  {
    return isset($_COOKIE[$name]) ? $_COOKIE[$name] : null;
  }

  public function startSession()
  {
    if (!isset($_SESSION)) {
      session_start();
    }
  }

  public function setSession($key, $value)
  {
    $_SESSION[$key] = $value;
  }

  public function getSession($key)
  {
    return isset($_SESSION[$key]) ? $_SESSION[$key] : null;
  }
}

$request = new MyRequest();
