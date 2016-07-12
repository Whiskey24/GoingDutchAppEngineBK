<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../vendor/autoload.php';

$app = new \Slim\App;
$app->get('/hello/{name}', function (Request $request, Response $response) {
    $name = $request->getAttribute('name');
    $response->getBody()->write("Hello, $name");

    return $response;
});


$app->get('/examplegroups', function (Request $request, Response $response, $args) {
    $response->write('{"1":{"gid":1,"title":"Group 1","subtitle":"group 1 subtitle","picture":"","created_ts":1434605924,"updated_ts":1434615924,"balance":120.03,"member_create_events":1,"member_other_expense":1,"member_add_member":1,"currency":"EUR","sort":1,"email_notify":1,"nickname":"test nick 1","members":{"1":23.23,"2":1542.36,"3":-1000,"5":565.59},"categories":{"1":{"cid":1,"title":"drinks","sort":1,"presents":0,"inactive":0,"can_delete":0},"2":{"cid":2,"title":"food","sort":2,"presents":0,"inactive":0,"can_delete":0},"3":{"cid":3,"title":"presents","sort":3,"presents":1,"inactive":0,"can_delete":0},"4":{"cid":4,"title":"tickets","sort":4,"presents":0,"inactive":0,"can_delete":1}}},"2":{"gid":2,"title":"Group 2","subtitle":"group 2 subtitle","picture":"","created_ts":1434605924,"updated_ts":1434615924,"balance":0.07,"member_create_events":1,"member_other_expense":1,"member_add_member":1,"sort":2,"email_notify":1,"nickname":"test nick 2","currency":"USD","members":{"1":-857.65,"4":452.85,"6":623.88,"7":219.08},"categories":{"1":{"cid":1,"title":"drinks","sort":1,"presents":0,"inactive":0,"can_delete":0},"2":{"cid":2,"title":"food","sort":2,"presents":0,"inactive":0,"can_delete":0},"3":{"cid":3,"title":"presents","sort":3,"presents":1,"inactive":0,"can_delete":0},"4":{"cid":4,"title":"tickets","sort":4,"presents":0,"inactive":0,"can_delete":1}}},"3":{"gid":3,"title":"Group 3","subtitle":"group 3 subtitle","picture":"","created_ts":1434605924,"updated_ts":1434615924,"balance":-123.03,"member_create_events":1,"member_other_expense":1,"member_add_member":1,"currency":"GBP","sort":3,"email_notify":1,"nickname":"test nick 3","members":{"8":853.33,"1":11000.36,"3":-5000.76,"5":-6852},"categories":{"1":{"cid":1,"title":"drinks","sort":1,"presents":0,"inactive":0,"can_delete":0},"2":{"cid":2,"title":"food","sort":2,"presents":0,"inactive":0,"can_delete":0},"3":{"cid":3,"title":"presents","sort":3,"presents":1,"inactive":0,"can_delete":0},"4":{"cid":4,"title":"tickets","sort":4,"presents":0,"inactive":0,"can_delete":1}}},"4":{"gid":4,"title":"Group 4","subtitle":"group 4 subtitle","picture":"","created_ts":1434605924,"updated_ts":1434615924,"balance":555.48,"member_create_events":1,"member_other_expense":1,"member_add_member":1,"currency":"EUR","sort":4,"email_notify":1,"nickname":"test nick 4","members":{"1":853.33,"2":200.36,"3":-2100.76,"5":-1852,"6":782.36,"7":4503.76,"8":-2386},"categories":{"1":{"cid":1,"title":"drinks","sort":1,"presents":0,"inactive":0,"can_delete":0},"2":{"cid":2,"title":"food","sort":2,"presents":0,"inactive":0,"can_delete":0},"3":{"cid":3,"title":"presents","sort":3,"presents":1,"inactive":0,"can_delete":0},"4":{"cid":4,"title":"tickets","sort":4,"presents":0,"inactive":0,"can_delete":1}}}}');
    $newResponse = $response->withHeader('Content-type', 'application/json');
    return $newResponse;
});


$app->run();