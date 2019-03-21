<?php
error_reporting(E_ALL ^ E_NOTICE);
require_once './tencentcloud-sdk-php-master/src/QcloudApi/QcloudApi.php';

$config = array(
    'SecretId'      => '',
    'SecretKey'     => '',
    'RequestMethod' => 'POST',
    'DefaultRegion' => 'gz');

$wenzhi = QcloudApi::load(QcloudApi::MODULE_WENZHI, $config);

//$package = array("text"=>"6月25日，省委书记、省人大常委会主任巴音朝鲁在长春会见了全国人大常委会副委员长、农工党中央主席陈竺率领的全国人大常委会执法检查组一行。
//　巴音朝鲁欢迎陈竺一行来我省就《中华人民共和国传染病防治法》执法情况检查指导工作，感谢全国人大常委会和农工党中央对吉林的关心支持。他说，全国人大常委会执法检查组来我省检查指导工作，是对我省贯彻落实党中央、国务院重大战略部署的一次检阅，是对我省坚决执行国家法律法规工作的一次推动。希望执法检查组切实加强指导，帮助我省把传染病防控和突发公共卫生事件应对工作提高到一个新水平。我们将以此次检查为契机，深入贯彻落实习近平总书记的重要指示精神，作好健康中国战略的吉林篇章。
//　陈竺对我省医疗卫生健康工作，特别是认真贯彻落实传染病防治法给予充分肯定。他表示，执法检查组将按照部署要求，认真检查法律法规实施情况，支持和推动吉林不断提升传染病防控水平，为实现全面小康、建设幸福美好吉林作出新贡献。
//　全国人大科教文卫委员会副主任委员杨志今，省领导张安顺、金振吉、车秀兰、安立佳，省人大常委会秘书长常晓春参加会见。");

$package = array("text" => "做出工献");
$a       = $wenzhi->LexicalCheck($package);

if ($a === false) {
    $error = $wenzhi->getError();
    echo "Error code:" . $error->getCode() . ".\n";
    echo "message:" . $error->getMessage() . ".\n";
    echo "ext:" . var_export($error->getExt(), true) . ".\n";
} else {
    var_export($a);
}
$respon = $wenzhi->getLastResponse();
//echo $respon;

//echo "\nRequest :" . $wenzhi->getLastRequest();
//echo "\nResponse :" . $wenzhi->getLastResponse();
echo "\n";
