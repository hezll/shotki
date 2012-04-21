<?php
/**
 * @package api
 * @version $Id$
 * @copyright (c) 2008 Hanmei Team
 */

/**
 * @ignore
 */
if (!defined('IN_APP'))
{
    die('Hacking attempt');
}

class Curl_Class
{
    public $timeout = 60;

    function Curl_Class()
    {
        return true;
    }

    function execute($method, $url, $fields = '', $userAgent = '', $httpHeaders = '', $username = '', $password = '')
    {
        $ch = Curl_Class::create();
        if (false === $ch)
        {
            return false;
        }

        if (is_string($url) && strlen($url))
        {
            $ret = curl_setopt($ch, CURLOPT_URL, $url);
        }
        else
        {
            return false;
        }
        //是否显示头部信息
        curl_setopt($ch, CURLOPT_HEADER, false);
        //
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        if ($username != '')
        {
            curl_setopt($ch, CURLOPT_USERPWD, $username . ':' . $password);
        }

        $method = strtolower($method);
        if ('post' == $method)
        {
            curl_setopt($ch, CURLOPT_POST, true);
            if (is_array($fields))
            {
                $sets = array();
                foreach ($fields AS $key => $val)
                {
                    $sets[] = $key . '=' . urlencode($val);
                }
                $fields = implode('&',$sets);
            }
            curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
        }
        else if ('put' == $method)
        {
            curl_setopt($ch, CURLOPT_PUT, true);
        }

        //curl_setopt($ch, CURLOPT_PROGRESS, true);
        //curl_setopt($ch, CURLOPT_VERBOSE, true);
        //curl_setopt($ch, CURLOPT_MUTE, false);
		
        curl_setopt($ch, CURLOPT_TIMEOUT, $this->timeout);//设置curl超时秒数，例如将信息POST出去3秒钟后自动结束运行。

        if (strlen($userAgent))
        {
            curl_setopt($ch, CURLOPT_USERAGENT, $userAgent);
        }

        if (is_array($httpHeaders))
        {
            curl_setopt($ch, CURLOPT_HTTPHEADER, $httpHeaders);
        }

        $ret = curl_exec($ch);
        /*
        if (curl_errno($ch))
        {
            curl_close($ch);
            return @array(curl_error($ch), curl_errno($ch));
        }
        else
        {
            curl_close($ch);
            if (!is_string($ret) || !strlen($ret))
            {
                return false;
            }
            return $ret;
        }*/
            if (!is_string($ret) || !strlen($ret))
            {
			    //var_dump('________________________________________false__________________________________________________________________________________');
				//var_dump(curl_error($ch));
				//var_dump('________________________________________false__________________________________________________________________________________');

                return false;
            }
            //var_dump('_________________echo api return info________________________________________________________________________________________________');
			//var_dump($ret);
            return $ret;


    }

    function post($url, $fields, $userAgent = '', $httpHeaders = '', $username = '', $password = '')
    {
        $ret = Curl_Class::execute('POST', $url, $fields, $userAgent, $httpHeaders, $username, $password);
        if (false === $ret)
        {
            return false;
        }

        if (is_array($ret))
        {
            return false;
        }
        return $ret;
    }

    function get($url, $userAgent = '', $httpHeaders = '', $username = '', $password = '')
    {
        $ret = Curl_Class::execute('GET', $url, '', $userAgent, $httpHeaders, $username, $password);
        if (false === $ret)
        {
            return false;
        }

        if (is_array($ret))
        {
            return false;
        }
        return $ret;
    }

    function create()
    {
        $ch = null;
        if (!function_exists('curl_init'))
        {
            return false;
        }
        $ch = curl_init();
        if (!is_resource($ch))
        {
            return false;
        }
        return $ch;
    }

}
