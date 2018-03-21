<?php
/**
 * Created by PhpStorm.
 * User: wcc
 * Date: 2017/11/6
 * Time: 下午5:00
 */

header("Content-Type: text/html; charset=utf-8");

require_once(dirname(__FILE__) . '/' . 'IGt.Push.php');
require_once(dirname(__FILE__) . '/' . 'igetui/IGt.AppMessage.php');
require_once(dirname(__FILE__) . '/' . 'igetui/IGt.APNPayload.php');
require_once(dirname(__FILE__) . '/' . 'igetui/template/IGt.BaseTemplate.php');
require_once(dirname(__FILE__) . '/' . 'IGt.Batch.php');
require_once(dirname(__FILE__) . '/' . 'igetui/utils/AppConditions.php');

//http的域名
define('HOST','http://sdk.open.api.igexin.com/apiex.htm');


//定义常量, appId、appKey、masterSecret 采用本文档 "第二步 获取访问凭证 "中获得的应用配置
define('APPKEY','HVw1C2rQVw5RthUjsvB3w7');
define('APPID','4jd5vKM4hi9GvzGiLInwp3');
define('MASTERSECRET','qVxXNkKSvo8jJNc0Vu4P17');
define('CID','e62838d7f855f0b76a9330cbd15dcdd3');
//define('BEGINTIME','2015-03-06 13:18:00');
//define('ENDTIME','2015-03-06 13:24:00');


pushMessageToSingle();
//pushMessageToApp();
//群推接口案例
function pushMessageToApp(){
    $igt = new IGeTui(HOST,APPKEY,MASTERSECRET);
    //定义透传模板，设置透传内容，和收到消息是否立即启动启用
    $template = IGtNotificationTemplateDemo();
    //$template = IGtLinkTemplateDemo();
    // 定义"AppMessage"类型消息对象，设置消息内容模板、发送的目标App列表、是否支持离线发送、以及离线消息有效期(单位毫秒)
    $message = new IGtAppMessage();
    $message->set_isOffline(true);
    $message->set_offlineExpireTime(10 * 60 * 1000);//离线时间单位为毫秒，例，两个小时离线为3600*1000*2
    $message->set_data($template);
    
    $appIdList=array(APPID);
    $phoneTypeList=array('ANDROID');
    $provinceList=array('浙江');
    $tagList=array('haha');
    //用户属性
    //$age = array("0000", "0010");
    
    
    //$cdt = new AppConditions();
    // $cdt->addCondition(AppConditions::PHONE_TYPE, $phoneTypeList);
    // $cdt->addCondition(AppConditions::REGION, $provinceList);
    //$cdt->addCondition(AppConditions::TAG, $tagList);
    //$cdt->addCondition("age", $age);
    
    $message->set_appIdList($appIdList);
    //$message->set_conditions($cdt->getCondition());
    
    $rep = $igt->pushMessageToApp($message,"任务组名");
    
    var_dump($rep);
    echo ("<br><br>");
}
////透传功能
// function IGtTransmissionTemplateDemo($app , $msg) {
//    $template = new \IGtTransmissionTemplate();
//    $template->set_appId($app['access_id']);//应用appid
//    $template->set_appkey($app['access_key']);//应用appkey
//    $template->set_transmissionType(2);//透传消息类型，1为立即启动，2则广播等待客户端自启动
//    $content['aps'] = array(
//        'title' => $msg['title'],
//        'module_id' => $msg['link_module'],
//        'id' => (string)$msg['content_id'],
//        'alert' => $msg['content'],
//        'outlink'=>$msg['outlink'],
//        'badge' =>1,
//    );
//    $content = json_encode($content);
//    $template->set_transmissionContent($content);//透传内容
//    //$template->set_pushInfo("actionLocKey","badge","message","sound","payload","locKey","locArgs","launchImage");
//    $template->set_pushInfo("查看",1,$msg['ios_content'],"sound",$content,"","","");
//    return $template;

//通知功能
function IGtNotificationTemplateDemo(){
    $template =  new IGtNotificationTemplate();
    $template->set_appId(APPID);                   //应用appid
    $template->set_appkey(APPKEY);                 //应用appkey
    $template->set_transmissionType(1);            //透传消息类型
    $template->set_transmissionContent("wwwwwwwwwww");//透传内容
    $template->set_title('baidu');                  //通知栏标题
    $template->set_text("www.baidu.com");     //通知栏内容
    $template->set_logo("");                       //通知栏logo
    $template->set_logoURL("www.baidu.com");        //通知栏logo链接
    $template->set_isRing(true);                   //是否响铃
    $template->set_isVibrate(true);                //是否震动
    $template->set_isClearable(true);              //通知栏是否可清除
    
    return $template;
}
// 打开推送的链接的模板,一般的推送用这种模板
function IGtLinkTemplateDemo(){
    $template =  new IGtLinkTemplate();
    $template ->set_appId(APPID);//应用appid
    $template ->set_appkey(APPKEY);//应用appkey
    $template ->set_title("请输入通知标题");//通知栏标题
    $template ->set_text("请输入通知内容");//通知栏内容
    $template ->set_logo("");//通知栏logo
    $template ->set_isRing(true);//是否响铃
    $template ->set_isVibrate(true);//是否震动
    $template ->set_isClearable(true);//通知栏是否可清除
    $template ->set_url("http://www.getui.com/");//打开连接地址
    //$template->set_notifyStyle(0);
    //$template->set_duration(BEGINTIME,ENDTIME); //设置ANDROID客户端在此时间区间内展示消息
    //iOS推送需要设置的pushInfo字段
//        $apn = new IGtAPNPayload();
//        $apn->alertMsg = "alertMsg";
//        $apn->badge = 11;
//        $apn->actionLocKey = "启动";
//    //        $apn->category = "ACTIONABLE";
//    //        $apn->contentAvailable = 1;
//        $apn->locKey = "通知栏内容";
//        $apn->title = "通知栏标题";
//        $apn->titleLocArgs = array("titleLocArgs");
//        $apn->titleLocKey = "通知栏标题";
//        $apn->body = "body";
//        $apn->customMsg = array("payload"=>"payload");
//        $apn->launchImage = "launchImage";
//        $apn->locArgs = array("locArgs");
//
//        $apn->sound=("test1.wav");;
//        $template->set_apnInfo($apn);
    return $template;
}

function pushMessageToSingle(){
    //$igt = new IGeTui(HOST,APPKEY,MASTERSECRET);
    $igt = new IGeTui(HOST,APPKEY,MASTERSECRET);
    
    //消息模版：
    // 1.TransmissionTemplate:透传功能模板
    // 2.LinkTemplate:通知打开链接功能模板
    // 3.NotificationTemplate：通知透传功能模板
    // 4.NotyPopLoadTemplate：通知弹框下载功能模板

//    	$template = IGtNotyPopLoadTemplateDemo();
//    	$template = IGtLinkTemplateDemo();
//    	$template = IGtNotificationTemplateDemo();
    $template = IGtLinkTemplateDemo();
    
    //个推信息体
    $message = new IGtSingleMessage();
    
    $message->set_isOffline(true);//是否离线
    $message->set_offlineExpireTime(3600*12*1000);//离线时间
    $message->set_data($template);//设置推送消息类型
//	$message->set_PushNetWorkType(0);//设置是否根据WIFI推送消息，1为wifi推送，0为不限制推送
    //接收方
    $target = new IGtTarget();
    $target->set_appId(APPID);
    $target->set_clientId(CID);
//    $target->set_alias(Alias);
    
    
    try {
        $rep = $igt->pushMessageToSingle($message, $target);
        var_dump($rep);
        echo ("<br><br>");
        
    }catch(RequestException $e){
        $requstId =e.getRequestId();
        $rep = $igt->pushMessageToSingle($message, $target,$requstId);
        var_dump($rep);
        echo ("<br><br>");
    }
    
}

function IGtTransmissionTemplateDemo(){
    $template =  new IGtTransmissionTemplate();
    $template->set_appId(APPID);//应用appid
    $template->set_appkey(APPKEY);//应用appkey
    $template->set_transmissionType(1);//透传消息类型
    $template->set_transmissionContent("测试离线ddd");//透传内容
    //$template->set_duration(BEGINTIME,ENDTIME); //设置ANDROID客户端在此时间区间内展示消息
    //APN简单推送
//        $template = new IGtAPNTemplate();
//        $apn = new IGtAPNPayload();
//        $alertmsg=new SimpleAlertMsg();
//        $alertmsg->alertMsg="";
//        $apn->alertMsg=$alertmsg;
////        $apn->badge=2;
////        $apn->sound="";
//        $apn->add_customMsg("payload","payload");
//        $apn->contentAvailable=1;
//        $apn->category="ACTIONABLE";
//        $template->set_apnInfo($apn);
//        $message = new IGtSingleMessage();
    
    //APN高级推送
    $apn = new IGtAPNPayload();
    $alertmsg=new DictionaryAlertMsg();
    $alertmsg->body="body";
    $alertmsg->actionLocKey="ActionLockey";
    $alertmsg->locKey="LocKey";
    $alertmsg->locArgs=array("locargs");
    $alertmsg->launchImage="launchimage";
//        IOS8.2 支持
    $alertmsg->title="Title";
    $alertmsg->titleLocKey="TitleLocKey";
    $alertmsg->titleLocArgs=array("TitleLocArg");
    
    $apn->alertMsg=$alertmsg;
    $apn->badge=7;
    $apn->sound="";
    $apn->add_customMsg("payload","payload");
    $apn->contentAvailable=1;
    $apn->category="ACTIONABLE";
    $template->set_apnInfo($apn);
    
    //PushApn老方式传参
//    $template = new IGtAPNTemplate();
//          $template->set_pushInfo("", 10, "", "com.gexin.ios.silence", "", "", "", "");
    
    return $template;
}


?>