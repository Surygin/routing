MyRoute - класс для реализации роутинга (URL адресов) в проекте.

Для работы нужно:
1. создать новый экземпляр класса MyRoute.
2. вызвать у него функцию Get_my_route и передать текущий URL.
3. В классе MyRoute, в масссиве $routes, необходимо добавить все необходимые URL адреса, которые вам нужны, в формате "ключ => значение". Слева адрес который вы хотите сделать, справа - как он должен отрабатываться на самом деле.

Так же необходимо настроить сервер, что бы изначально все запросы происходили на index.php

Для сервера apach нужно создать файл .htaccess со следующеми параметрами:

Options +FollowSymLinks -Indexes
 RewriteEngine On

 RewriteCond %{HTTP:Authorization} .
 RewriteRule .* - [E=HTTP_AUTHORIZATION:%{HTTP:Authorization}]

 RewriteCond %{REQUEST_FILENAME} !-d
 RewriteCond %{REQUEST_FILENAME} !-f
 RewriteRule ^ index.php [L] 

Для NGINX 

location / {
    try_files $uri $uri/ /index.php?$query_string;
}