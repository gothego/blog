<?php
header("Content-type: text/html; charset=utf-8");    //设置编码

session_start();        //开启session
$date = time();         //定义当前时间变量
include_once('conn.php');    //连接数据库文件

//输出数组
function dump($str)
{
    echo '<pre>';
    print_r($str);
    echo '</pre>';
}

/***
 * 取得数据库查询的所有结果
 */
function allRes($sql)
{
    $result_array = array();
    $result = mysql_query($sql);

    while ($row = mysql_fetch_array($result)) {
        $result_array[] = $row;
    }
    return $result_array;
}

/**
 * @param $sql
 * @return int
 * 返回符合条件的记录条数
 */
function num_rows($sql)
{
    $query = mysql_query($sql);
    $num = mysql_num_rows($query);
    return $num;
}

/**
 * @param $sql
 * @return array
 * 只查询一条结果
 */
function fetch_one_array($sql)
{
    $result = mysql_query($sql);
    $row = mysql_fetch_array($result);
    return $row;
}

/**
 * smarty 配置
 */
define("SITEPATH", getcwd());
require(SITEPATH . '/smarty/libs/Smarty.class.php');

class Smarty_Canon extends Smarty
{

    function __construct()
    {
        parent::__construct();
        $this->setTemplateDir(SITEPATH . '/templates/');            //设置html模板所在文件夹
        $this->setCompileDir(SITEPATH . '/templates/templates_c/'); //设置smarty编译文件夹
        $this->setConfigDir(SITEPATH . '/templates/configs/');      //smarty配置文件夹
        $this->setCacheDir(SITEPATH . '/templates/cache/');         //smarty缓存文件夹
        $this->left_delimiter = '{{';
        $this->right_delimiter = '}}';
        $this->assign("sitepath", SITEPATH);
    }

}

$s = new Smarty_Canon();
