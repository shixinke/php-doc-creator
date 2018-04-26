<?php
/**
* Swoole自动补全类(基于最新的2.1.3版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2018/04/25
*/

/**
*异步HTTP2响应
*/
namespace Swoole\Http2;
class Response
{
    /**
     * @var int $errCode 
     * 错误码
     * @access public
     */
    public $errCode    =    0;

    /**
     * @var int $statusCode 
     * 状态码
     * @access public
     */
    public $statusCode    =    0;

    /**
     * @var string $body 
     * 响应体内容
     * @access public
     */
    public $body;

    /**
     * @var int $streamId 
     * 数据流ID
     * @access public
     */
    public $streamId;

}

