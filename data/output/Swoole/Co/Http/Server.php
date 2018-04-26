<?php
/**
* Swoole自动补全类(基于最新的2.1.3版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2018/04/25
*/

/**
*http异步客户端
*/
class Server extends swoole_server
{
    /**
     * @var callable $onConnect 
     * 连接成功回调函数
     * @access public
     */
    public $onConnect;

    /**
     * @var callable $onReceive 
     * 接收到数据时回调此函数
     * @access public
     */
    public $onReceive;

    /**
     * @var callable $onClose 
     * TCP客户端连接关闭后，在worker进程中回调此函数
     * @access public
     */
    public $onClose;

    /**
     * @var callable $onPacket 
     * 接收到UDP数据包时回调此函数，发生在worker进程中
     * @access public
     */
    public $onPacket;

    /**
     * @var callable $onBufferFull 
     * 当缓存区达到最高水位时触发此事件
     * @access public
     */
    public $onBufferFull;

    /**
     * @var callable $onBufferEmpty 
     * 当缓存区低于最低水位线时触发此事件
     * @access public
     */
    public $onBufferEmpty;

    /**
     * @var callable $onStart 
     * Server启动在主进程的主线程回调此函数
     * @access public
     */
    public $onStart;

    /**
     * @var callable $onShutdown 
     * 此事件在Server正常结束时发生
     * @access public
     */
    public $onShutdown;

    /**
     * @var callable $onWorkerStart 
     * 此事件在Worker进程/Task进程启动时发生
     * @access public
     */
    public $onWorkerStart;

    /**
     * @var callable $onWorkerStop 
     * 此事件在worker进程终止时发生。在此函数中可以回收worker进程申请的各类资源
     * @access public
     */
    public $onWorkerStop;

    /**
     * @var callable $onWorkerExit 
     * 仅在开启reload_async特性后有效。异步重启特性，会先创建新的Worker进程处理新请求，旧的Worker进程自行退出
     * @access public
     */
    public $onWorkerExit;

    /**
     * @var callable $onWorkerError 
     * 当worker/task_worker进程发生异常后会在Manager进程内回调此函数
     * @access public
     */
    public $onWorkerError;

    /**
     * @var callable $onTask 
     * 在task_worker进程内被调用
     * @access public
     */
    public $onTask;

    /**
     * @var callable $onFinish 
     * 当worker进程投递的任务在task_worker中完成时，task进程会通过swoole_server->finish()方法将任务处理的结果发送给worker进程。
     * @access public
     */
    public $onFinish;

    /**
     * @var callable $onManagerStart 
     * 当管理进程启动时调用它
     * @access public
     */
    public $onManagerStart;

    /**
     * @var callable $onManagerStop 
     * 当管理进程结束时调用它
     * @access public
     */
    public $onManagerStop;

    /**
     * @var callable $onPipeMessage 
     * 当工作进程收到由 sendMessage 发送的管道消息时会触发onPipeMessage事件
     * @access public
     */
    public $onPipeMessage;

    /**
     * @var iterator $connections 
     * TCP连接迭代器
     * @access public
     */
    public $connections;

    /**
     * @var string $host 
     * 连接的主机
     * @access public
     */
    public $host;

    /**
     * @var int $port 
     * 连接的主机的端口
     * @access public
     */
    public $port    =    0;

    /**
     * @var int $type 
     * socket的类型
     * @access public
     */
    public $type    =    0;

    /**
     * @var int $mode 
     * 运行模式(swoole提供了3种运行模式，默认为SWOOLE_PROCESS多进程模式)
     * @access public
     */
    public $mode    =    0;

    /**
     * @var array $ports 
     * 当监听多端口时的端口列表
     * @access public
     */
    public $ports;

    /**
     * @var int $master_pid 
     * 主进程ID
     * @access public
     */
    public $master_pid    =    0;

    /**
     * @var int $manager_pid 
     * 管理进程ID
     * @access public
     */
    public $manager_pid    =    0;

    /**
     * @var int $worker_id 
     * 当前工作进程(包括worker进程和task进程)编号
     * @access public
     */
    public $worker_id    =    -1;

    /**
     * @var boolean $taskworker 
     * 当前进程是否是task工作进程
     * @access public
     */
    public $taskworker    =    '';

    /**
     * @var int $worker_pid 
     * 当前工作进程ID(操作系统进程)
     * @access public
     */
    public $worker_pid    =    0;

    /**
     * @var callable $onRequest 
     * 请求回调函数
     * @access public
     */
    public $onRequest;

    /**
     * @var callable $onHandshake 
     * TCP握手时的回调函数
     * @access public
     */
    public $onHandshake;

    /**
     * @var array $setting 
     * 通过swoole_server:set()设置的参数会保存到setting属性上
     * @access public
     */
    public $setting;

    /**
     * 
     *绑定事件(为事件注册函数)
     * @example 
     * @param string $event_name 事件名称
     * @param callable $callback 事件对应的回调函数
     * @return 
     */
    public function on($event_name, Callable $callback)
    {
    }

    /**
     * 
     *启动HTTP server
     * @example 
     * @return 
     */
    public function start()
    {
    }

    /**
     * 
     *序列化函数调用的魔术方法(在PHP进行序列化时，serialize() 检查类中是否有 __sleep() ,如果有，则该函数将在任何序列化之前运行。该函数必须返回一个需要进行序列化保存的成员属性数组，并且只序列化该函数返回的这些成员属性. 该函数有两个作用: 第一. 在序列化之前,关闭对象可能具有的任何数据库连接等. 第二. 指定对象中需要被序列化的成员属性,如果某个属性比较大而不需要储存下来,可以不把它写进__sleep要返回的数组中,这样该属性就不会被序列化)
     * @example 
     * @return 
     */
    public function __sleep()
    {
    }

    /**
     * 
     *反序列化函数调用的魔术方法(unserialize() 从字节流中创建了一个对象之后,马上检查是否具有__wakeup 的函数的存在。如果存在，__wakeup 立刻被调用。使用 __wakeup 的目的是重建在序列化中可能丢失的任何数据库连接以及处理其它重新初始化的任务)
     * @example 
     * @return 
     */
    public function __wakeup()
    {
    }

    /**
     * 
     *swoole_server初始化方法
     * @example 
     * @param string $host 主机IP
     * @param int $port 端口
     * @param int $mode 运行模式
     * @param int $sock_type socket类型
     * @return 
     */
    public function __construct($host, $port, $mode, $sock_type)
    {
    }

    /**
     * 
     *析构函数
     * @example 
     * @return 
     */
    public function __destruct()
    {
    }

    /**
     * 
     *添加监听端口(是addlistener的别名)
     * @example 
     * @param string $host 监听的主机
     * @param int $port 监听的端口号
     * @param int $sock_type socket类型
     * @return 
     */
    public function listen($host, $port, $sock_type)
    {
    }

    /**
     * 
     *添加监听端口
     * @example 
     * @param string $host 监听的主机
     * @param int $port 监听的端口号
     * @param int $sock_type socket类型
     * @return 
     */
    public function addlistener($host, $port, $sock_type)
    {
    }

    /**
     * 
     *设置swoole_server运行时的参数
     * @example 
     * @param array $settings 配置选项
     * @return 
     */
    public function set(Array $settings)
    {
    }

    /**
     * 
     *向客户端发送数据
     * @example 
     * @param int $fd 连接句柄
     * @param string $send_data 发送的数据
     * @param int $reactor_id UDP服务器使用$fd保存客户端IP，$extraData保存server_fd和port
     * @return 
     */
    public function send($fd, $send_data, $reactor_id)
    {
    }

    /**
     * 
     *向任意客户端发送UDP数据包
     * @example 
     * @param string $ip IPv4字符串，如192.168.1.102。如果IP不合法会返回错误
     * @param int $port 为 1-65535的网络端口号，如果端口错误发送会失败
     * @param string $send_data 发送的数据内容，可以是文本或者二进制内容
     * @param int $server_socket 服务器可能会同时监听多个UDP端口，此参数可以指定使用哪个端口发送数据包
     * @return 
     */
    public function sendto($ip, $port, $send_data, $server_socket)
    {
    }

    /**
     * 
     *阻塞的向客户端发送数据
     * @example 
     * @param int $conn_fd 与客户端连接的句柄
     * @param string $send_data 发送的数据
     * @return 
     */
    public function sendwait($conn_fd, $send_data)
    {
    }

    /**
     * 
     *检测fd对应的连接是否存在
     * @example 
     * @param int $fd 连接句柄
     * @return 
     */
    public function exist($fd)
    {
    }

    /**
     * 
     *设置客户端连接为保护状态，不被心跳线程切断
     * @example 
     * @param int $fd 要设置保护状态的客户端连接fd
     * @param boolean $is_protected 设置的状态，true表示保护状态，false表示不保护
     * @return 
     */
    public function protect($fd, $is_protected)
    {
    }

    /**
     * 
     *向客户端发送文件
     * @example 
     * @param int $conn_fd 连接句柄
     * @param string $filename 文件名
     * @param int $offset 指定文件偏移量，可以从文件的某个位置起发送数据。默认为0，表示从文件头部开始发送
     * @param int $length 指定发送的长度，默认为文件尺寸
     * @return 
     */
    public function sendfile($conn_fd, $filename, $offset, $length)
    {
    }

    /**
     * 
     *关闭客户端连接
     * @example 
     * @param int $fd 连接句柄
     * @param boolean $reset 设置为true会强制关闭连接，丢弃发送队列中的数据
     * @return 
     */
    public function close($fd, $reset)
    {
    }

    /**
     * 
     *确认连接，与enable_delay_receive或wait_for_bind配合使用
     * @example 
     * @param int $fd 连接句柄
     * @return 
     */
    public function confirm($fd)
    {
    }

    /**
     * 
     *停止接收数据
     * @example 
     * @param int $fd 连接句柄
     * @return 
     */
    public function pause($fd)
    {
    }

    /**
     * 
     *恢复数据接收。与pause方法成对使用
     * @example 
     * @param int $fd 连接句柄
     * @return 
     */
    public function resume($fd)
    {
    }

    /**
     * 
     *投递一个任务到task_worker连接池中
     * @example 
     * @param mixed $data 要投递的任务数据，可以为除资源类型之外的任意PHP变量
     * @param int $worker_id 可以制定要给投递给哪个task进程，传入ID即可
     * @param callable $finish_callback 完成后的回调函数
     * @return 
     */
    public function task($data, $worker_id, Callable $finish_callback)
    {
    }

    /**
     * 
     *以阻塞的形式投递一个任务到task_worker连接池中
     * @example 
     * @param mixed $data 要投递的任务数据，可以为除资源类型之外的任意PHP变量
     * @param float $timeout 超时时间
     * @param int $worker_id 可以制定要给投递给哪个task进程，传入ID即可
     * @return 
     */
    public function taskwait($data, $timeout, $worker_id)
    {
    }

    /**
     * 
     *并发执行多个Task
     * @example 
     * @param array $tasks 必须为数字索引数组，不支持关联索引数组，底层会遍历$tasks将任务逐个投递到Task进程
     * @param double $timeout 超时时间
     * @return 
     */
    public function taskWaitMulti(Array $tasks, $timeout)
    {
    }

    /**
     * 
     *并发执行Task并进行协程调度
     * @example 
     * @param array $tasks 必须为数字索引数组，不支持关联索引数组，底层会遍历$tasks将任务逐个投递到Task进程
     * @param double $timeout 超时时间
     * @return array
     */
    public function taskCo(Array $tasks, $timeout)
    {
    }

    /**
     * 
     *用于在task进程中通知worker进程任务已完成
     * @example 
     * @param  mixed $data 
     * @return 
     */
    public function finish($data)
    {
    }

    /**
     * 
     *重启所有工作进程
     * @example 
     * @return 
     */
    public function reload()
    {
    }

    /**
     * 
     *关闭服务器
     * @example 
     * @return 
     */
    public function shutdown()
    {
    }

    /**
     * 
     *停止当前worker进程
     * @example 
     * @param int $worker_id 工作进程ID
     * @return 
     */
    public function stop($worker_id)
    {
    }

    /**
     * 
     *获取最近一次操作错误的错误码
     *返回的错误码：
     *1001 连接已经被Server端关闭了，出现这个错误一般是代码中已经执行了$serv->close()关闭了某个连接，但仍然调用$serv->send()向这个连接发送数据
     * @example 
     * @return 
     */
    public function getLastError()
    {
    }

    /**
     * 
     *检测所有服务器连接，并找出已经超时的连接
     * @example 
     * @param boolean $reactor_id 是否关闭超时的连接，默认为true
     * @return 
     */
    public function heartbeat($reactor_id)
    {
    }

    /**
     * 
     *获取客户端连接信息
     * @example 
     * @param  mixed $fd 连接句柄
     * @param int $reactor_id reactor线程id
     * @return from_id
     */
    public function connection_info($fd, $reactor_id)
    {
    }

    /**
     * 
     *用来遍历所有客户端连接
     * @example 
     * @param int $start_fd 起始fd
     * @param int $find_count 每页取多少条
     * @return 
     */
    public function connection_list($start_fd, $find_count)
    {
    }

    /**
     * 
     *获取连接的信息，别名是swoole_server->connection_info
     * @example 
     * @param  mixed $fd 连接句柄
     * @param int $reactor_id reactor线程id
     * @return 
     */
    public function getClientInfo($fd, $reactor_id)
    {
    }

    /**
     * 
     *用来遍历所有客户端连接(server->connection_list的别名)
     * @example 
     * @param int $start_fd 起始fd
     * @param int $find_count 每页取多少条
     * @return 
     */
    public function getClientList($start_fd, $find_count)
    {
    }

    /**
     * 
     *在指定时间后执行某个回调函数
     * @example 
     * @param int $ms 指定时间，单位为毫秒
     * @param callable $callback 回调函数
     * @param array $param 给回调函数传入的参数
     * @return 
     */
    public function after($ms, Callable $callback, Array $param)
    {
    }

    /**
     * 
     *添加定时器
     * @example 
     * @param int $ms 指定时间，单位为毫秒
     * @param callable $callback 回调函数
     * @return 
     */
    public function tick($ms, Callable $callback)
    {
    }

    /**
     * 
     *清除定时器
     * @example 
     * @param int $timer_id 定时器ID
     * @return 
     */
    public function clearTimer($timer_id)
    {
    }

    /**
     * 
     *延迟执行一个PHP函数
     * @example 
     * @param callable $callback 执行的函数
     * @return 
     */
    public function defer(Callable $callback)
    {
    }

    /**
     * 
     *向任意worker进程或task进程发送消息
     * @example 
     * @param int $dst_worker_id 目标worker的ID
     * @param string $data 发送的消息
     * @return 
     */
    public function sendMessage($dst_worker_id, $data)
    {
    }

    /**
     * 
     *添加一个自定义的工作进程
     * @example 
     * @param Swoole\Process $process 进程对象
     * @return 
     */
    public function addProcess($process)
    {
    }

    /**
     * 
     *得到当前server的活动TCP连接数
     *array (
     * @example 
     * @return 
     */
    public function stats()
    {
    }

    /**
     * 
     *将连接绑定到某个用户定义的ID
     * @example 
     * @param int $fd 连接句柄
     * @param int $uid 用户定义的ID
     * @return 
     */
    public function bind($fd, $uid)
    {
    }

}

