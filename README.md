Hello!
===

Byron is a minimalistic blogging platform.

Installing
---

After cloning the repository make sure to update the dependencies by running the following command:

```
git submodule update --init
```


Byron can be started two ways...

Nginx
---

This is a basic configuration file for Nginx. Copy this to your Nginx `sites-available` folder and enable it.
Replace root, server\_name, port and fastcgi\_pass to fit your needs.

```
server {
  listen 80;
   server_name my.byron.blog;

  root /path/to/your/folder;

  location / {
    include fastcgi.conf;
    try_files $uri /index.php;

    fastcgi_intercept_errors on;

    # change this line to your fastcgi sock path/url
    fastcgi_pass 127.0.0.1:9000; 
  }

  location ~ \.(css|png|jpg|gif|svg|tga)$ {
    expires max;
  }
}
```

Command line
---

You can run your server by just using the PHP command.
The following command will run a server listening on every local ip on port 8080.
the `-t` parameter specifies the folder where your Byron files are.

```
php -S 0.0.0.0:8080 -t /path/to/your/folder
```

Using Byron
---

Right now Byron only supports files without spaces nor strange characters in the name, so "this file.md" won't be found.

That said, to start using Byron just create a file inside the `posts/` folder inside your Byron folder, refresh your browser and it the new file will show on the menu. That's it!

