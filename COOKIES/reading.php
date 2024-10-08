<?php

if(isset($_COOKIE['username'])){
    echo "hello".$_COOKIE['username'];
} else{
    echo "hello guest";
}

?>