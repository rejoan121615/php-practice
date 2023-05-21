<?php

  if (! isset($_SERVER['PHP_AUTH_USER']) || !isset($_SERVER['PHP_AUTH_PW'])) {
    header('WWW-Authenticate: Basic Realm="Authentication"');
    header('HTTP/1.1 401 Unauthorized');
  } else {
    echo "Your supplied user-name:".$_SERVER['PHP_AUTH_USER'];
    echo "";
  }
?>