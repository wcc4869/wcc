<?php
/**
 * Created by PhpStorm.
 * User: wcc
 * Date: 2017/9/5
 * Time: 下午3:34
 */

require 'vendor/autoload.php';

use Elasticsearch\ClientBuilder;

$client = ClientBuilder::create()->build();

//$params = [
//    'index' => 'log',
//    'type' => 'ems_log',
//    'id' => '3',
//    'body'=>[
//        'title'=>'title3',
//        'content'=>'苏建'
//    ],
//];
//
//$response = $client->index($params);
//print_r($response);


//
//$params = [
//    'index' => 'my_index',
//    'type' => 'my_type',
//    'id' => 'my_id'
//];
//
//$response = $client->get($params);
//print_r($response);


//$params = [
//    'index' => 'log',
//    'type' => 'ems_log',
//    'body' => [
//        'query' => [
//            'bool'=>[
//                'must'=>[
//            'match' => ['content' => '苏建'], ['title' => 'title3']
//        ]]]
//    ]
//];
//
//$params['index'] = 'log';
//$params['type'] = 'ems_log';
//$params['body']['query']['bool']['should'] = array(
//    ['match'=>['title'=>'title3']],
//    ['match'=>['content'=>'张龙']],
//);
//
//
//
//
//$response = $client->search($params);
//print_r($response);



//$params = [
//    'index' => 'my_index',
//    'type' => 'my_type',
//    'id' => 'my_id'
//];
//
//$response = $client->delete($params);
//print_r($response);

//   批量索引
//for($i = 0; $i < 2; $i++) {
//    $params['body'][] = [
//        'index' => [
//            '_index' => 'my_index2',
//            '_type' => 'my_type2',
//        ]
//    ];
//
//    $params['body'][] = [
//        'my_field' => 'my_value',
//        'second_field' => 'some more values'
//    ];
//}
//
//var_export($params);
//print_r($responses);die;


//$params = ['body' => []];
//
//for ($i = 1; $i <= 10; $i++) {
//    $params['body'][] = [
//        'index' => [
//            '_index' => 'my_index2',
//            '_type' => 'my_type2',
//            '_id' => $i
//        ]
//    ];
//
//    $params['body'][] = [
//        'my_field' => 'my_value11',
//        'second_field' => 'some more values11'
//    ];
//
//    // Every 1000 documents stop and send the bulk request
//    if ($i % 3 == 0) {
//        $responses = $client->bulk($params);
//
//        // erase the old bulk request
//        $params = ['body' => []];
//
//        // unset the bulk response when you are done to save memory
//        unset($responses);
//    }
//}
//
//// Send the last batch if it exists
//if (!empty($params['body'])) {
//    $responses = $client->bulk($params);
//}