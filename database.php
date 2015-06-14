<?php

//Connect to mysql
$con = mysqli_connect("localhost", "root", "", "shoutit");

//Test Connection
if(mysqli_connect_errno()) {
    echo 'Fail to connect to MySql: '.mysqli_connect_error();
}