<?php

$db = "login.db";
$tb = "users";

$sq = new SQLiteDatabase($db, 0666, $er);
if ($er) exit($er);


function init(){
  global $tb, $sq;
  $q = "CREATE TABLE $tb (
  ID bigint(20) NOT NULL PRIMARY KEY,
  username TEXT,
  password TEXT)
  ";

  $r = $sq->queryexec($q);
}

$q = "SELECT name FROM sqlite_master WHERE name='$tb';";
$r = $sq->arrayQuery($q);

if(empty($r)){
  print "Initializing... done.";
  init();
} else {
  print "yeah its there";
}

