<?php
function CurrentUrl()
{
    // dd(parse_url($_SERVER["REQUEST_URI"]));
    $url = parse_url($_SERVER["REQUEST_URI"]);
    return $url["path"];
}
function IsUrl($url)
{
    return CurrentUrl() === $url;
}
function dd($var)
{
    echo "<pre>";
    var_dump($var);
    echo "</pre>";

    die();
}
function redirecTo($url)
{
    header("location:$url");
    exit;
}

function executeQuery($sql, $params = [])
{
    global $connection;
    $stmt = mysqli_prepare($connection, $sql);
    mysqli_stmt_execute($stmt, $params);
    return mysqli_stmt_get_result($stmt);
}

function fetchAll($sql, $params = [])
{
    $results = executeQuery($sql, $params);
    return mysqli_fetch_all($results, MYSQLI_ASSOC);
}

function fetchOne($sql, $params = [])
{
    $results = executeQuery($sql, $params);
    return mysqli_fetch_assoc($results);
}
