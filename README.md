# Created Codeigniter powered REST API
### 6th October 2016

### API library files for the framework can be found in github.com/chriskacerguis/codeigniter-restserver
https://github.com/chriskacerguis/codeigniter-restserver

##.htaccess file configuration

```
<IfModule mod_rewrite.c>
   Options +FollowSymLinks
   RewriteEngine on
#Send request via index.php
   RewriteCond %{REQUEST_FILENAME} !-f
   RewriteCond %{REQUEST_FILENAME} !-d
   RewriteRule ^(.*)$ /ci_zenStudents/index.php/$1 [L]
</IfModule>
```
