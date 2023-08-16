<?php

function query($sql)
{
    $conn = mysqli_connect('localhost', 'crudapp', 'crudapp', 'crudapp');
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
    return $result;
}
