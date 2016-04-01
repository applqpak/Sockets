# Sockets Examples


#1. Creating A Socket Connection To google.com

- `Sockets::connect("google.com", 80);`

#2. Writing Data To A Socket Connection

- `Sockets::write($socket, "Hi");`

#3. Closing A Socket Connection

- `Sockets::close($socket);`

#4. Creating, Writing And Closing A Socket Connection - Putting It All Together

- `$socket = Sockets::connect("mysite.com", 80); Sockets::write($socket, "Hi"); Sockets::close($socket);`
