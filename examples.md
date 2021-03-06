# Sockets Examples.


###1. Creating A Socket Connection To google.com.

- `Sockets::connect("google.com", 80);`

###2. Writing Data To A Socket Connection.

- `Sockets::write($socket, "Hi");`

###3. Closing A Socket Connection.

- `Sockets::close($socket);`

##4. Creating, Writing And Closing A Socket Connection - Putting It All Together.

- `$socket = Sockets::connect("mysite.com", 80); Sockets::write($socket, "Hi"); Sockets::close($socket);`


# SocketServer Examples.

###1. Creating A Web Socket Server.

- `SocketsServer::create("0.0.0.0", 80);` <- This creates a Socket Server running on localhost.

###2. Accepting A Connection.

- `SocketsServer::accept($socket);`

###3. Writing Data To A Connection.

- `SocketsServer::write($connection, "HTTP/1.1 200 OK\r\nServer: PHP " . phpversion() . "\r\nContent-Type: text/html\r\n\r\n");`

###4. Closing A Connection.

- `SocketsServer::connection_close($connection);`

###5. Closing The Web Socket Server.

- `SocketsServer::close($socket);`

##6. Creating, Accepting Connections, Writing Data, And Closing A Connection - Putting it all together + Creating A "Hello, world!" Page.

- `$socket = SocketsServer::create("0.0.0.0", 80); $connection = SocketsServer::accept($socket); SocketsServer::write($connection, "HTTP/1.1 200 OK\r\nServer: PHP " . phpversion() . "\r\nContent-Type: text/html"); SocketsServer::write($connection, "<!DOCTYPE html><html><head><title>Hello, world!</title></head><body><center><h1>Hello, world!</h1></center></body></html>"); SocketsServer::connection_close($connection); SocketsServer::close($socket);`
