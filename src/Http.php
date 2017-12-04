<?php
/**
 *
 * @author  qiangjian@staff.sina.com.cn sunsky303@gmail.com
 * Date: 2017/6/16
 * Time: 10:20
 * @version $Id: $
 * @since 1.0
 * @copyright Sina Corp.
 */

namespace MultiHttp;

abstract class Http {
	const HEAD             = 'HEAD';
	const GET              = 'GET';
	const POST             = 'POST';
	const PUT              = 'PUT';
	const DELETE           = 'DELETE';
	const PATCH            = 'PATCH';
	const OPTIONS          = 'OPTIONS';
	const TRACE            = 'TRACE';
	public static $methods = array(
		'HEAD'    => self::HEAD,
		'GET'     => self::GET,
		'POST'    => self::POST,
		'PUT'     => self::PUT,
		'DELETE'  => self::DELETE,
		'PATCH'   => self::PATCH,
		'OPTIONS' => self::OPTIONS,
		'TRACE'   => self::TRACE,
	);

	abstract function post($uri, $payload = null, array $options = array());

	abstract function patch($uri, $payload = null, array $options = array());

	abstract function put($uri, $payload = null, array $options = array());

	abstract function get($uri, array $options = array());

	abstract function head($uri, array $options = array());

	abstract function delete($uri, array $options = array());

	abstract function options($uri, array $options = array());

	abstract function trace($uri, array $options = array());

    /**
     * @param $method
     * @return bool
     */
    public static function hasBody($method){
        return in_array($method, array(self::POST, self::PUT, self::PATCH, self::OPTIONS));
    }
}