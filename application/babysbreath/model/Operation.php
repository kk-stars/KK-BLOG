<?php
namespace app\babysbreath\model;
use think\Model;
use think\Request;

class Operation extends Model{

    public function op($op_type,$op_module,$op_admin,$op_details)
    {
        if($op_admin == ''){

        }else{
            //op_type   操作类型：login为登录，update为修改操作，delete为删除操作，add为添加操作， other为其它操作
            //op_module 操作模块：文章，心情随笔，评论，网站留言，栏目，友情链接，设置，管理员密码

            $op_ip = '125.68.89.117'; //Request::instance() -> ip(); // 获取用户IP地址
            $url='http://ip.taobao.com/service/getIpInfo.php?ip='.$op_ip;
            $result = file_get_contents($url);//获取详细的IP地址信息
            $result = json_decode($result,true);
            if($result['code']!==0 || !is_array($result['data'])) return false;
            //return $result['data'];
            /*
             * array(13)
             * {
             ["ip"] => string(9) "127.0.0.1"
             ["country"] => string(2) "XX"
             ["area"] => string(0) ""
             ["region"] => string(2) "XX"
             ["city"] => string(8) "内网IP"
             ["county"] => string(8) "内网IP"
             ["isp"] => string(8) "内网IP"
             ["country_id"] => string(2) "xx"
             ["area_id"] => string(0) ""
             ["region_id"] => string(2) "xx"
             ["city_id"] => string(5) "local"
             ["county_id"] => string(5) "local"
             ["isp_id"] => string(5) "local"
             }
             * */

            $op = [
                'op_ip'         => $op_ip,                    //IP地址
                'op_country'    => $result['data']['country'],//国家
                'op_region'     => $result['data']["region"], //省份
                'op_city'       => $result['data']["city"],	  //城市
                'op_isp'        => $result['data']["isp"],    //运营商
                'op_region_id'  => $result['data']["region_id"],//省份邮编
                'op_city_id'    => $result['data']["city_id"],  //城市邮编
                'op_type'       => $op_type,
                'op_module'     => $op_module,
                'op_admin'      => $op_admin,
                'op_details'    => $op_details,
            ];
            db('operation') -> insert($op);
        }
    }

    public function loginInfo($Name){
        db('admin') -> where('loginName',$Name) -> update(['lastLoginTime' => date("Y-m-d H:i:s")]);/* 保存登录时间  */
        db('admin') -> where('loginName',$Name) -> setInc('numberOfLogin');/* 登录成功后登录次数加  1   */

    }
}

?>