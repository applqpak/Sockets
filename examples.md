# Sockets Examples


#1. Creating A Socket Connection To google.com

- `Sockets::connect("google.com", 80);`

#2. Creating A Socket Connection And Writing Data

- `$socket = Sockets::connect("mysite.com", 80);
Sockets::write($socket, "Hi");`
