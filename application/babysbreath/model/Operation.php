<?php
namespace app\babysbreath\model;
use think\Model;
use app\index\model\GetIP;

class Operation extends Model{

    public function op($op_type,$op_module,$op_admin,$op_details)
    {

        //op_type   操作类型：login为登录，update为修改操作，delete为删除操作，add为添加操作， other为其它操作
        //op_module 操作模块：文章，心情随笔，评论，网站留言，栏目，友情链接，设置，管理员密码

        if($op_admin == ''){

        }else{
            //配置您申请的appkey
            $appkey = "ea92c4361076fa3f30c37d7d7e13e028";
            $op_ip = new GetIP();
            $op_ip = $op_ip -> GetIP(); // 获取用户IP地址

            if($op_ip != '0.0.0.0'){
	//************1.根据IP/域名查询地址************
	            $url = "http://apis.juhe.cn/ip/ip2addr";
	            $params = array(
	                "ip" => $op_ip,//需要查询的IP地址或域名
	                "key" => $appkey,//应用APPKEY(应用详细页查询)
	                "dtype" => "",//返回数据的格式,xml或json，默认json
	            );
	            $paramstring = http_build_query($params);
	            $content = $this -> juhecurl($url,$paramstring);
	            $result = json_decode($content,true);
            }else{
                $result = [
                    'result' => [
                        'area' => "未知城市",
                        'location' => "未知运营商",
                    ],
                    'error_code' => '1',
                    'reason' => "查询失败",
                ];
            }
            if($result){
                if($result['error_code']=='0'){
                    //print_r($result);

                    $op = [
                        'op_ip'         => $op_ip,                 //IP地址
                        'op_city'       => $result['result']['area'],	       //城市
                        'op_isp'        => $result['result']['location'],    //运营商
                        'op_type'       => $op_type,
                        'op_module'     => $op_module,
                        'op_admin'      => $op_admin,
                        'op_details'    => $op_details,
                    ];
                }else{
                    $error =  $result['error_code'].":".$result['reason'];

                    $op = [
                        'op_ip'         => $op_ip,    //IP地址
                        'op_city'       => $error,	  //城市
                        'op_isp'        => $error,    //运营商
                        'op_type'       => $op_type,
                        'op_module'     => $op_module,
                        'op_admin'      => $op_admin,
                        'op_details'    => $op_details,
                    ];
                }
            }else{
                $error =  "请求失败";

                $op = [
                    'op_ip'         => $op_ip,    //IP地址
                    'op_city'       => $error,	  //城市
                    'op_isp'        => $error,    //运营商
                    'op_type'       => $op_type,
                    'op_module'     => $op_module,
                    'op_admin'      => $op_admin,
                    'op_details'    => $op_details,
                ];
            }

            db('operation') -> insert($op);

            /* 实例：
             * array(4) {
                  ["resultcode"] => string(3) "200"
                  ["reason"] => string(16) "Return Successd!"
                  ["result"] => array(2) {
                    ["area"] => string(18) "四川省德阳市"
                    ["location"] => string(6) "电信"
                  }
                  ["error_code"] => int(0)
               }
             * */
        }
    }

    public function loginInfo($Name){
        db('admin') -> where('loginName',$Name) -> update(['lastLoginTime' => date("Y-m-d H:i:s")]);/* 保存登录时间  */
        db('admin') -> where('loginName',$Name) -> setInc('numberOfLogin');/* 登录成功后登录次数加  1   */

    }


    /**
     * 请求接口返回内容
     * @param  string $url [请求的URL地址]
     * @param  string $params [请求的参数]
     * @param  int $ipost [是否采用POST形式]
     * @return  string
     */
    function juhecurl($url,$params=false,$ispost=0){
        $httpInfo = array();
        $ch = curl_init();

        curl_setopt( $ch, CURLOPT_HTTP_VERSION , CURL_HTTP_VERSION_1_1 );
        curl_setopt( $ch, CURLOPT_USERAGENT , 'JuheData' );
        curl_setopt( $ch, CURLOPT_CONNECTTIMEOUT , 60 );
        curl_setopt( $ch, CURLOPT_TIMEOUT , 60);
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER , true );
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        if( $ispost )
        {
            curl_setopt( $ch , CURLOPT_POST , true );
            curl_setopt( $ch , CURLOPT_POSTFIELDS , $params );
            curl_setopt( $ch , CURLOPT_URL , $url );
        }
        else
        {
            if($params){
                curl_setopt( $ch , CURLOPT_URL , $url.'?'.$params );
            }else{
                curl_setopt( $ch , CURLOPT_URL , $url);
            }
        }
        $response = curl_exec( $ch );
        if ($response === FALSE) {
            //echo "cURL Error: " . curl_error($ch);
            return false;
        }
        $httpCode = curl_getinfo( $ch , CURLINFO_HTTP_CODE );
        $httpInfo = array_merge( $httpInfo , curl_getinfo( $ch ) );
        curl_close( $ch );
        return $response;
    }
}

?>