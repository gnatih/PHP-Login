<?php
/**
PHP-Login: A simple, plugable user-management system
Copyright (C) 2010  Jayesh Gohel

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, version 3 of the License.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

See http://www.gnu.org/licenses/
**/

/**
Notes:
This page is the login interface.
It can be used in two ways - 
embedded or standalone
The embedded version can be integrated,
with any other .php page as an include,
or within an <iframe> tag for .html pages.


**/
include('login.inc');
$mode = (empty($_REQUEST['q'])) ? '' : $_REQUEST['q'];

switch($mode){
  case "embed":
    print "embedded";
    exit;
    
  case "admin":
    print "administratior";
    break;
  
  case "forgot_password":
  break;
  
  case "register":
  break;

  default:
  break;
}
?>
<html>
<head>
<title>Login</title>
<script type="text/javascript" src="script.js"></script>
<link type="text/css" rel="stylesheet" href="style.css" />
</head>
<body>
<div id="wrapper">
  <div id="login-box">
    <p>
    <label for="username">Username</label>
    <input id="username" name="username" type="text" />
    </p>
    <p>
    <label for="password">Password</label>
    <input id="password" name="password" type="text" />
    </p>
    
    <input type="submit" class="button" value="Login" />
    <p><a href="register">Register</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="forgot">Forgot your password</a></p>
  </div>
</div>
</body>
</html>
