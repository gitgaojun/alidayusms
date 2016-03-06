<?php
header('content-type:text/html;charset=utf-8');
date_default_timezone_set('Asia/Shanghai');

/**
 * http://www.alidayu.com/admin/service/tpl
 * http://open.taobao.com/apitools/apiTools.htm
 * 
 * 
 */

// include "alidayu/TopSdk.php";
// $c = new TopClient;
// $c->appkey = '23320876';
// $c->secretKey = 'baa05ae77aef851af35b17e50fc1bcc6';
// $req = new AlibabaAliqinFcSmsNumSendRequest;
// $req->setExtend("111");
// $req->setSmsType("normal");
// $req->setSmsFreeSignName("注册验证");
// $params = json_encode(array(
// 		'code'=>'12340',
// 		'product'=>'jun'
// ));
// $req->setSmsParam($params);
// $req->setRecNum("13510066907");
// $req->setSmsTemplateCode("SMS_5385636");
// $resp = $c->execute($req);
// var_dump($resp);exit;
//登录验证


include "alidayu/TopSdk.php";
$c = new TopClient;
$c->appkey = '23320876';
$c->secretKey = 'baa05ae77aef851af35b17e50fc1bcc6';
$req = new AlibabaAliqinFcSmsNumSendRequest;
$req->setExtend("111");
$req->setSmsType("normal");
$req->setSmsFreeSignName("登录验证");
$params = json_encode(array(
		'code'=>'12340',
		'product'=>'jun'
));
$req->setSmsParam($params);
$req->setRecNum("13510066900");
$req->setSmsTemplateCode("SMS_5385638");
$resp = $c->execute($req);
var_dump($resp);exit;
