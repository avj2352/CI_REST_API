# Created Codeigniter powered REST API
### 6th October 2016

### API library files for the framework can be found in github.com/chriskacerguis/codeigniter-restserver
https://github.com/chriskacerguis/codeigniter-restserver

###.htaccess file configuration

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

### Changing Arrays and Objects to JSON

1. To create a JSON object - Create an associative array
2. To create a JSON array - Create a simple primitive array

```
function student_get(){
  $this->data[1] = array('name' => 'Pramod', 'age'=>'29');
  $this->data[2] = array('name' => 'Shwetha', 'age'=>'28');
  $this->data[3] = ['one','two','three'];
  $this->response($this->data);
}//end:get_students
```
