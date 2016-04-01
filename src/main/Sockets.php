<?php

  // Define Error Types

  const ERROR = E_USER_ERROR;

  const WARNING = E_USER_WARNING;

  const NOTICE = E_USER_NOTICE;

  // Define Socket Errors

  const SOCKET_CONNECT_ERROR = "Failed To Connect To Socket ";

  const SOCKET_WRITE_ERROR = "Failed To Write To Socket ";

  const SOCKET_CLOSE_ERROR = "Failed To Close Socket ";

  // Define Invalid Argument Errors

  const SOCKET_CONNECT_INVALID_ARGUMENT = "Invalid Argument In Sockets::connect() ";

  const SOCKET_WRITE_INVALID_ARGUMENT = "Invalid Argument In Sockets::write() ";

  const SOCKET_CLOSE_INVALID_ARGUMENT = "Invalid Argument In Sockets::close() ";

  // Create error Function

  function error($errorType, $message = null)
  {

    trigger_error($message, $errorType);

  }

  // Define Socket Error Classes

  class SocketConnectError
  {

    public function __construct($message = null)
    {

      if($message == null || $message == "" || $message == " ")
      {

        exit();

      }
      else
      {

        error(ERROR, SOCKET_CONNECT_ERROR . $message);

      }

    }

  }

  class SocketWriteError
  {

    public function __construct($message = null)
    {

      if($message == null || $message == "" || $message == " ")
      {

        exit();

      }
      else
      {

        error(ERROR, SOCKET_WRITE_ERROR . $message);

      }

    }

  }

  class SocketCloseError
  {

    public function __construct($message = null)
    {

      if($message == null || $message == "" || $message == " ")
      {

        exit();

      }
      else
      {

        error(ERROR, SOCKET_CLOSE_ERROR . $message);

      }

    }

  }

  // Define Invalid Argument Classes

  class SocketConnectInvalidArgument
  {

    public function __construct($message = null)
    {

      if($message == null || $message == "" || $message == " ")
      {

        exit();

      }
      else
      {

        error(ERROR, SOCKET_CONNECT_INVALID_ARGUMENT . $message);

      }

    }

  }

  class SocketWriteInvalidArgument
  {

    public function __construct($message = null)
    {

      if($message == null || $message == "" || $message == " ")
      {

        exit();

      }
      else
      {

        error(ERROR, SOCKET_WRITE_INVALID_ARGUMENT . $message);

      }

    }

  }

  class SocketCloseInvalidArgument
  {

    public function __construct($message = null)
    {

      if($message == null || $message == "" || $message == " ")
      {

        exit();

      }
      else
      {

        error(ERROR, SOCKET_CLOSE_INVALID_ARGUMENT . $message);

      }

    }

  }

  // Define Main Sockets Class

  class Sockets
  {

    // Create Sockets connect Function

    public static function connect($ip = null, $port = 80, $timeout = 3)
    {

      if($ip == null || $ip == "" || $ip == " " || $port == null || $port == "" || $port == " " || $timeout == null || $timeout == "" || $timeout == " ")
      {

        $bt = debug_backtrace();

        $caller = array_shift($bt);

        $SocketConnectInvalidArgument = new SocketConnectInvalidArgument("on line " . $caller["line"]);

      }
      else
      {

        $socket = @fsockopen($ip, $port, $errno, $errstr, $timeout);

        if(!($socket))
        {

          $bt = debug_backtrace();

          $caller = array_shift($bt);

          $SocketConnectError = new SocketConnectError("on line " . $caller["line"]);

        }
        else
        {

          return $socket;

        }

      }

    }

    // Create Sockets write Function

    public static function write($resource = null, $data = null)
    {

      if(!(is_resource($resource)))
      {

        $bt = debug_backtrace();

        $caller = array_shift($bt);

        $SocketWriteInvalidArgument = new SocketWriteInvalidArgument("on line " . $caller["line"]);

      }
      else
      {

        if($data == null || $data == "" || $data == " ")
        {

          $bt = debug_backtrace();

          $caller = array_shift($bt);

          $SocketWriteInvalidArgument = new SocketWriteInvalidArgument("on line " . $caller["line"]);

        }
        else
        {

          $writeData = @fwrite($resource, $data);

          if(!($writeData))
          {

            $bt = debug_backtrace();

            $caller = array_shift($bt);

            $SocketWriteError = new SocketWriteError("on line " . $caller["line"]);

          }
          else
          {

            return $writeData;

          }

        }

      }

    }

    // Create Sockets close Function

    public static function close($resource = null)
    {

      if(!(is_resource($resource)))
      {

        $bt = debug_backtrace();

        $caller = array_shift($bt);

        $SocketCloseInvalidArgument = new SocketCloseInvalidArgument("on line " . $caller["line"]);

      }
      else
      {

        $closeSocket = @fclose($resource);

        if(!($closeSocket))
        {

          $bt = debug_backtrace();

          $caller = array_shift($bt);

          $SocketCloseError = new SocketCloseError("on line " . $caller["line"]);

        }
        else
        {

          return $closeSocket;

        }

      }

    }

  }

  // Define SocketsServer Errors

  const SOCKETSSERVER_CREATE_ERROR = "Failed To Create SocketsServer ";

  const SOCKETSSERVER_ACCEPT_ERROR = "Failed To Accept Connections To SocketsServer ";

  const SOCKETSSERVER_CLOSE_ERROR = "Failed To Close SocketsServer ";

  const SOCKETSSERVER_CONNECTION_CLOSE_ERROR = "Failed To Close Connection To SocketsServer ";

  // Define Invalid Argument Errors

  const SOCKETSSERVER_CREATE_INVALID_ARGUMENT = "Invalid Argument In SocketsServer::create() ";

  const SOCKETSSERVER_ACCEPT_INVALID_ARGUMENT = "Invalid Argument In SocketsServer::accept() ";

  const SOCKETSSERVER_CLOSE_INVALID_ARGUMENT = "Invalid Argument In SocketsServer::close() ";

  const SOCKETSSERVER_CONNECTION_CLOSE_INVALID_ARGUMENT = "Invalid Argument In SocketsServer::connection_close() ";

  // Define SocketsServer Error Classes

  class SocketsServerCreateError
  {

    public function __construct($message = null)
    {

      if($message == null || $message == "" || $message == " ")
      {

        exit();

      }
      else
      {

        error(ERROR, SOCKETSSERVER_CREATE_ERROR . $message);

      }

    }

  }

  class SocketsServerAcceptError
  {

    public function __construct($message = null)
    {

      if($message == null || $message == "" || $message == " ")
      {

        exit();

      }
      else
      {

        error(ERROR, SOCKETSSERRVER_ACCEPT_ERROR . $message);

      }

    }

  }

  class SocketsServerCloseError
  {

    public function __construct($message = null)
    {

      if($message == null || $message == "" || $message == " ")
      {

        exit();

      }
      else
      {

        error(ERROR, SOCKETSSSERVER_CLOSE_ERROR . $message);

      }

    }

  }

  class SocketsServerConnectionCloseError
  {

    public function __construct($message = null)
    {

      if($message == null || $message == "" || $message == " ")
      {

        exit();

      }
      else
      {

        error(ERROR, SOCKETSSERVER_CONNECTION_CLOSE_ERROR . $message);

      }

    }

  }

  // Define Invalid Argument Classes

  class SocketsServerCreateInvalidArgument
  {

    public function __construct($message = null)
    {

      if($message == null || $message == "" || $message == " ")
      {

        exit();

      }
      else
      {

        error(ERROR, SOCKETSSERVER_CREATE_INVALID_ARGUMENT . $message);

      }

    }

  }

  class SocketsServerAcceptInvalidArgument
  {

    public function __construct($message = null)
    {

      if($message == null || $message == "" || $message == " ")
      {

        exit();

      }
      else
      {

        error(ERROR, SOCKETSSERVER_ACCEPT_INVALID_ARGUMENT . $message);

      }

    }

  }

  class SocketsServerCloseInvalidArgument
  {

    public function __construct($message = null)
    {

      if($message == null || $message == "" || $message == " ")
      {

        exit();

      }
      else
      {

        error(ERROR, SOCKETSSERVER_CLOSE_INVALID_ARGUMENT . $message);

      }

    }

  }

  class SocketsServerConnectionCloseInvalidArgument
  {

    public function __construct($message = null)
    {

      if($message == null || $message == "" || $message == " ")
      {

        exit();

      }
      else
      {

        error(ERROR, SOCKETSSERVER_CONNECTION_CLOSE_INVALID_ARGUMENT . $message);

      }

    }

  }

  // Define Main SocketsServer Class

  class SocketsServer
  {

    // Create create Function

    public static function create($ip = "0.0.0.0", $port = 80)
    {

      if($ip == null || $ip == "" || $ip == " " || $port == null || $port == "" || $port == " ")
      {

        $bt = debug_backtrace();

        $caller = array_shift($bt);

        $SocketsServerCreateInvalidArgument = new SocketsServerCreateInvalidArgument("on line " . $caller["line"]);

      }
      else
      {

        $socket = @stream_socket_server("tcp://" . $ip . ":" . $port, $errno, $errstr);

        if(!($socket))
        {

          $bt = debug_backtrace();

          $caller = array_shift($bt);

          $SocketsServerCreateError = new SocketsServerCreateError("on line " . $caller["line"]);

        }
        else
        {

          return $socket;

        }

      }

    }

    // Create accept Function

    public static function accept($resource = null)
    {

      if(!(is_resource($resource)))
      {

        $bt = debug_backtrace();

        $caller = array_shift($bt);

        $SocketsServerAcceptInvalidArgument = new SocketsServerAcceptInvalidArgument("on line " . $caller["line"]);

      }
      else
      {

        $acceptSocket = @stream_socket_accept($resource);

        if(!($acceptSocket))
        {

          $bt = debug_backtrace();

          $caller = array_shift($bt);

          $SocketsServerAcceptError = new SocketsServerAcceptError("on line " . $caller["line"]);

        }
        else
        {

          return $acceptSocket;

        }

      }

    }

    // Create close Function

    public static function close($resource = null)
    {

      if(!(is_resource($resource)))
      {

        $bt = debug_backtrace();

        $caller = array_shift($bt);

        $SocketsServerCloseInvalidArgument = new SocketsServerCloseInvalidArgument("on line " . $caller["line"]);

      }
      else
      {

        $closeSocket = @stream_socket_close($resource);

        if(!($closeSocket))
        {

          $bt = debug_backtrace();

          $caller = array_shift($bt);

          $SocketsServerCloseError = new SocketsServerCloseError("on line " . $caller["line"]);

        }
        else
        {

          return $closeSocket;

        }

      }

    }

    // Create connection_close Function

    public function connection_close($connection = null)
    {

      if(!(is_resource($connection)))
      {

        $bt = debug_backtrace();

        $caller = array_shift($bt);

        $SocketsServerConnectionCloseInvalidArgument = new SocketsServerConnectionCloseInvalidArgument("on line " . $caller["line"]);

      }
      else
      {

        $closeConnection = @fclose($connection);

        if(!($closeConnection))
        {

          $bt = debug_backtrace();

          $caller = array_shift($bt);

          error(ERROR, "on line " . $caller["line"]);

        }
        else
        {

          return $closeConnection;

        }

      }

    }

  }

?>
