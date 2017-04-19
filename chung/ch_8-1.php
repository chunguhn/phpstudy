<?
	$_title = '챕터 8';
	require_once './inc/header.php';

    define('_HOST_', '10.20.4.51');
    define('__ID__', 'root');
    define('__PWD__', 'phpStudy1!');
    define('__DB__', 'php_study');
       
?>
<h3>get Connection</h3>
<p><code>define('_HOST_', '10.20.4.51');</code></p>
<p><code>define('__ID__', 'root');</code></p>
<p><code>define('__PWD__', 'phpStudy1!');</code></p>
<p><code>define('__DB__', 'php_study');</code></p>
<pre>    
    $con = @mysqli_connect(_HOST_, __ID__, __PWD__, __DB__);
    
    if (!$con) {
        echo "mysqli_connect Error: " . mysqli_connect_error();
    } else {
        echo 'mysqli_connect Connected to MySQL';
    }
</pre>
<?php
    $con = @mysqli_connect(_HOST_, __ID__, __PWD__, __DB__);
    
    if (!$con) {
        echo "mysqli_connect Error: " . mysqli_connect_error();
    } else {
        echo 'mysqli_connect Connected to MySQL';
    }
?>
<pre>
    $con = @new mysqli(_HOST_, __ID__, __PWD__, __DB__);
    
    if ($con->connect_error) {
        echo "mysqli Error: " . $con->connect_error;
    } else {
        echo 'mysqli Connected to MySQL';
    }
</pre>
<?php
    $con = @new mysqli(_HOST_, __ID__, __PWD__, __DB__);
    
    if ($con->connect_error) {
        echo "mysqli Error: " . $con->connect_error;
    } else {
        echo 'mysqli Connected to MySQL';
    }
?>
<pre>
    try{
        $connection = new PDO('mysql:host='._HOST_.';dbname='.__DB__.';charset=utf8', __ID__, __PWD__);

        echo "PDO OK";
    } catch (PDOException $e){
        var_dump($e);
    }
</pre>
<?php
    try{
        $connection = new PDO('mysql:host='._HOST_.';dbname='.__DB__.';charset=utf8', __ID__, __PWD__);

        echo "PDO OK";
    } catch (PDOException $e){
        var_dump($e);
    }

    require_once './inc/footer.php';
?>