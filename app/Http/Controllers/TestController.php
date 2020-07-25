<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use GuzzleHttp\Client;

class TestController extends Controller{

	public function test1(){

		$url = "http://api.1911.com/user/info";
		//$url ='https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=APPID&secret=APPSECRET';
		$response = file_get_contents($url);
		var_dump($response);
	}

	public function test2(){
		echo Str::random(30);

	}


//http的对称加密
public function easa()
{



	$method = 'AES-256-CBC'; // 设置 加密算法
	$key = '1911api';		// 设置 加密密钥
	$iv = 'qqqqqqqqqqqqqqqq';	// 加密方法 使用
	$option = OPENSSL_RAW_DATA;
	$url = 'http://www.1911.com/easa';
	$data = "hello world";
	//计算密文
	$enc_data = openssl_encrypt($data,$method,$key,$option, $iv);
	//echo "密文:".$enc_data;echo '</br>';
	//base加密
	

	$b64_str = base64_encode($enc_data);
	//echo "base64:".$b64_str;echo '</br>';

	// $client = new Client();
	// $response =	$client ->request('POST',$url,[
	// 	'body' =>$b64_str
	// ]);

	//  echo $response->getBody();	//响应数据
}


//签名
public function sign1(Request $request)
{
	$data="Hello word";
	$key='1911api';
	
	$sign_str= sha1($data . $key);	//签名

	//发送数据	数据+签名

	$url='http://api.1911.com/sign1?data='.$data.'&sign='.$sign_str;
	$response = file_get_contents($url);
	echo $response;

}






}

