# PHPTest

## Synopsis

**Test** App: the application let the user create, remove, update, delete products and see a list of those.

## Download and Configuration

1. Clone this **repo**
2. Install or Update libs using composer
3. Update file /app/config/parameters.yml with Your DB data
4. Create MySQL Database with the same name configured in 'database_name'
5. If you want to configure a VirtualHost please follow **next step**
6. If applicable (based on OS settings), set the right permissions on folder /web/uploads/products

## Sample Apache VirtualHost
```
<VirtualHost example-ip:80>
    DocumentRoot "/path/to/app/web"
    ServerName domain.example
</VirtualHost>
```

## MySQL table

```
CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `tags` varchar(2000) NOT NULL,
  `image` varchar(512) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
```

## Tests

Open the web address where you configured your application. (ie: http://locahost/PHPTest/web or http://domain.example)
**Browse** application using the top menu

## License

Not this time