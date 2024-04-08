<?php

class Request {
    public function post($key) {
        return isset($_POST[$key]) ? $_POST[$key] : null;
    }

    public function get($key) {
        return isset($_GET[$key]) ? $_GET[$key] : null;
      }

      public function request($key) {
        return isset($_REQUEST[$key]) ? $_REQUEST[$key] : null;
      }
}


