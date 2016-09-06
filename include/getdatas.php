<?php
    require_once('config.php');
    //if($_SERVER['HTTP_REFERER']!="http://".$_SERVER['SERVER_NAME']."/") die("<h1>Atavın başın axtarırsan?</h1>");
    header("Content-type: text/json");

    $request = array();
    $request['fields'] = array('id', 'title', 'views_total','embed_url','description','thumbnail_120_url','tags');
    //$request['owners'] = "x1oe11a";
    //add tags here
    $request['tags']="koffie";

    if($_GET['id']){
        $request['ids']=$_GET['id'];
        unset($request['tags']);
    }

    if($_GET['axtar']){
        $request['search'] = $_GET['axtar'];
        unset($request['owners']);
        if($_GET['page']){
            $request['page'] = $_GET['page'];
        }
    }

    if($_GET['npage']){
        $request['page'] = $_GET['npage'];
    }

    if($_GET['limit']){
        $request['limit'] = $_GET['limit'];
        if($_GET['sort'])
            $request['sort'] = $_GET['sort'];
    }

    $result = $api->get(
    '/videos',
    $request
    );

    echo json_encode($result);

?>
