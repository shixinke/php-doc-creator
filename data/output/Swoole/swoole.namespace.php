<?php
/**
* Swoole自动补全类(基于最新的2.0.10版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2017/12/25
*/

/**
*
*/
/**
 * php.ini配置选项: 

 * 
 * swoole.aio_thread_num=2

 * 
 * swoole.display_errors=On

 * 
 * swoole.use_namespace=1

 * 
 * swoole.fast_serialize=1

 * 
 * swoole.unixsock_buffer_size=8388608

*/
/**

*/
define('SWOOLE_BASE', 4);
/**

*/
define('SWOOLE_THREAD', 2);
/**

*/
define('SWOOLE_PROCESS', 3);
/**

*/
define('SWOOLE_IPC_UNSOCK', 1);
/**

*/
define('SWOOLE_IPC_MSGQUEUE', 2);
/**

*/
define('SWOOLE_IPC_PREEMPTIVE', 3);
/**

*/
define('SWOOLE_SOCK_TCP', 1);
/**

*/
define('SWOOLE_SOCK_TCP6', 3);
/**

*/
define('SWOOLE_SOCK_UDP', 2);
/**

*/
define('SWOOLE_SOCK_UDP6', 4);
/**

*/
define('SWOOLE_SOCK_UNIX_DGRAM', 5);
/**

*/
define('SWOOLE_SOCK_UNIX_STREAM', 6);
/**

*/
define('SWOOLE_TCP', 1);
/**

*/
define('SWOOLE_TCP6', 3);
/**

*/
define('SWOOLE_UDP', 2);
/**

*/
define('SWOOLE_UDP6', 4);
/**

*/
define('SWOOLE_UNIX_DGRAM', 5);
/**

*/
define('SWOOLE_UNIX_STREAM', 6);
/**

*/
define('SWOOLE_SOCK_SYNC', 0);
/**

*/
define('SWOOLE_SOCK_ASYNC', 1);
/**

*/
define('SWOOLE_SYNC', 2048);
/**

*/
define('SWOOLE_ASYNC', 1024);
/**

*/
define('SWOOLE_KEEP', 4096);
/**

*/
define('SWOOLE_EVENT_READ', 512);
/**

*/
define('SWOOLE_EVENT_WRITE', 1024);
/**

*/
define('SWOOLE_VERSION', '2.0.10');
/**

*/
define('SWOOLE_AIO_BASE', 0);
/**

*/
define('SWOOLE_AIO_LINUX', 1);
/**

*/
define('SWOOLE_FILELOCK', 2);
/**

*/
define('SWOOLE_MUTEX', 3);
/**

*/
define('SWOOLE_SEM', 4);
/**

*/
define('SWOOLE_RWLOCK', 1);
/**

*/
define('SWOOLE_SPINLOCK', 5);
/**

*/
define('WEBSOCKET_OPCODE_TEXT', 1);
/**

*/
define('WEBSOCKET_OPCODE_BINARY', 2);
/**

*/
define('WEBSOCKET_OPCODE_PING', 9);
/**

*/
define('WEBSOCKET_STATUS_CONNECTION', 1);
/**

*/
define('WEBSOCKET_STATUS_HANDSHAKE', 2);
/**

*/
define('WEBSOCKET_STATUS_FRAME', 3);
/**

*/
define('WEBSOCKET_STATUS_ACTIVE', 3);
/**

*/
define('SWOOLE_FAST_PACK', 1);
/**

*/
define('UNSERIALIZE_OBJECT_TO_ARRAY', 1);
/**

*/
define('UNSERIALIZE_OBJECT_TO_STDCLASS', 2);
/**
* 
*
* @example 
* 
* @return 
*/
function swoole_version()
{
}

/**
* 
*
* @example 
* 
* @return 
*/
function swoole_cpu_num()
{
}

/**
* 
*
* @example 
* 
* @return 
*/
function swoole_last_error()
{
}

/**
* 
*
* @example 
* 
* @param  $fd
* @param  $read_callback
* @param  $write_callback
* @param  $events
* @return 
*/
function swoole_event_add($fd, $read_callback, $write_callback, $events)
{
}

/**
* 
*
* @example 
* 
* @param  $fd
* @param  $read_callback
* @param  $write_callback
* @param  $events
* @return 
*/
function swoole_event_set($fd, $read_callback, $write_callback, $events)
{
}

/**
* 
*
* @example 
* 
* @param  $fd
* @return 
*/
function swoole_event_del($fd)
{
}

/**
* 
*
* @example 
* 
* @return 
*/
function swoole_event_exit()
{
}

/**
* 
*
* @example 
* 
* @return 
*/
function swoole_event_wait()
{
}

/**
* 
*
* @example 
* 
* @param  $fd
* @param  $data
* @return 
*/
function swoole_event_write($fd, $data)
{
}

/**
* 
*
* @example 
* 
* @param  $callback
* @return 
*/
function swoole_event_defer($callback)
{
}

/**
* 
*
* @example 
* 
* @param  $callback
* @return 
*/
function swoole_event_cycle($callback)
{
}

/**
* 
*
* @example 
* 
* @param  $ms
* @param  $callback
* @param  $param
* @return 
*/
function swoole_timer_after($ms, $callback, $param)
{
}

/**
* 
*
* @example 
* 
* @param  $ms
* @param  $callback
* @return 
*/
function swoole_timer_tick($ms, $callback)
{
}

/**
* 
*
* @example 
* 
* @param  $timer_id
* @return 
*/
function swoole_timer_exists($timer_id)
{
}

/**
* 
*
* @example 
* 
* @param  $timer_id
* @return 
*/
function swoole_timer_clear($timer_id)
{
}

/**
* 
*
* @example 
* 
* @param array $settings
* @return 
*/
function swoole_async_set(Array $settings)
{
}

/**
* 
*
* @example 
* 
* @param  $filename
* @param  $callback
* @param  $chunk_size
* @param  $offset
* @return 
*/
function swoole_async_read($filename, $callback, $chunk_size, $offset)
{
}

/**
* 
*
* @example 
* 
* @param  $filename
* @param  $content
* @param  $offset
* @param  $callback
* @return 
*/
function swoole_async_write($filename, $content, $offset, $callback)
{
}

/**
* 
*
* @example 
* 
* @param  $filename
* @param  $callback
* @return 
*/
function swoole_async_readfile($filename, $callback)
{
}

/**
* 
*
* @example 
* 
* @param  $filename
* @param  $content
* @param  $callback
* @param  $flags
* @return 
*/
function swoole_async_writefile($filename, $content, $callback, $flags)
{
}

/**
* 
*
* @example 
* 
* @param  $hostname
* @param  $callback
* @return 
*/
function swoole_async_dns_lookup($hostname, $callback)
{
}

/**
* 
*
* @example 
* 
* @param  $domain_name
* @return 
*/
function swoole_async_dns_lookup_coro($domain_name)
{
}

/**
* 
*
* @example 
* 
* @param  $read_array
* @param  $write_array
* @param  $error_array
* @param  $timeout
* @return 
*/
function swoole_client_select($read_array, $write_array, $error_array, $timeout)
{
}

/**
* 
*
* @example 
* 
* @param  $read_array
* @param  $write_array
* @param  $error_array
* @param  $timeout
* @return 
*/
function swoole_select($read_array, $write_array, $error_array, $timeout)
{
}

/**
* 
*
* @example 
* 
* @param  $process_name
* @return 
*/
function swoole_set_process_name($process_name)
{
}

/**
* 
*
* @example 
* 
* @return 
*/
function swoole_get_local_ip()
{
}

/**
* 
*
* @example 
* 
* @return 
*/
function swoole_get_local_mac()
{
}

/**
* 
*
* @example 
* 
* @param  $errno
* @return 
*/
function swoole_strerror($errno)
{
}

/**
* 
*
* @example 
* 
* @return 
*/
function swoole_errno()
{
}

