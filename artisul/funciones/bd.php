<?php

function fn_ConectarBD()
{
    $dbhost = "127.0.0.2";
    $dbuser = "root";
    $dbpass = "Pass123.";
    $db = "artisul";
    $conn =  mysqli_connect($dbhost, $dbuser, $dbpass,$db) or trigger_error(mysqli_error(),
        E_USER_ERROR);

    return $conn;
}

function fn_CerrarBD($conn)
{
    mysqli_close($conn);
}

function fn_EjecutarQuery($query){

    $conn = fn_ConectarBD();
    $Sql = mysqli_query($conn, $query) or trigger_error(mysqli_error($conn));

    return $Sql;
}

function fn_ExtraerQuery($sql){

    $Sql = mysqli_fetch_array($sql,MYSQLI_ASSOC);

    return $Sql;
}

function fn_NumeroRegistros($sql){

    $Sql = mysqli_num_rows($sql);

    return $Sql;
}



