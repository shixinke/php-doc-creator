<?php
/**
* Yaf自动补全类(基于最新的3.0.7版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2018/05/20
*/

/**
*视图加载异常
*/
class Yaf_Exception_LoadFailed_View extends Yaf_Exception_LoadFailed implements Throwable
{
    /**
     * @var string $file 
     * 异常文件名称
     * @access protected
     */
    protected $file;

    /**
     * @var int $line 
     * 异常文件行数
     * @access protected
     */
    protected $line;

    /**
     * @var string $message 
     * 异常信息
     * @access protected
     */
    protected $message;

    /**
     * @var int $code 
     * 异常码
     * @access protected
     */
    protected $code    =    0;

    /**
     * @var Throwable $previous 
     * 上一个异常对象
     * @access protected
     */
    protected $previous;

    /**
     * 
     *克隆方法
     * @example 
     * @return 
     */
    private final  function __clone()
    {
    
    }

    /**
     * 
     *初始化异常
     * @example 
     * @param string $message 异常提示
     * @param int $code 异常码
     * @param Throwable $previous 上一个异常对象
     * @return 
     */
    public function __construct(string $message = '', int $code = 0, Throwable $previous)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function __wakeup()
    {
    
    }

    /**
     * 
     *获取异常信息
     * @example 
     * @return string
     */
    public final  function getMessage(): string
    {
    
    }

    /**
     * 
     *获取异常码
     * @example 
     * @return int
     */
    public final  function getCode(): int
    {
    
    }

    /**
     * 
     *获取异常文件名称
     * @example 
     * @return string
     */
    public final  function getFile(): string
    {
    
    }

    /**
     * 
     *获取异常行数
     * @example 
     * @return int
     */
    public final  function getLine(): int
    {
    
    }

    /**
     * 
     *获取trace调试数组
     * @example 
     * @return array
     */
    public final  function getTrace(): array
    {
    
    }

    /**
     * 
     *获取前一个异常对象
     * @example 
     * @return Throwable
     */
    public final  function getPrevious()
    {
        return new Exception();
    }

    /**
     * 
     *获取调试信息的字符串
     * @example 
     * @return string
     */
    public final  function getTraceAsString(): string
    {
    
    }

    /**
     * 
     *转化为字符串
     * @example 
     * @return string
     */
    public function __toString(): string
    {
    
    }

}

