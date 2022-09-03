# docker-lamp-xdebug (xdebug step debugging from browser and cli)

Docker example with Apache, MySql 8.0, PhpMyAdmin and Php 7.4.30

- You can use MariaDB 10.1 if you checkout to the tag `mariadb-10.1`
- You can use MySql 5.7 if you checkout to the tag `mysql5.7`

I use docker-compose as an orchestrator. To run these containers:

```
docker-compose up -d
```

Open phpmyadmin at [http://localhost:8000](http://localhost:8000) (root-user:root root-pw:test)
Open web browser to look at a simple php example at [http://localhost:8001](http://localhost:8001)

build image with php 7.4.30 (xdebug 3.1.5)

Run mysql client:

- `docker-compose exec db mysql -u root -p` 

This is a re-elaboration of an existing project (was without xdebug)

See pictures in folder images-readme to replicate xdebug config in phpstorm.
Config in vscode is possible but not mentioned here.

Added functionlity to get API data and outputting it in table.
```
visit "getApiCats.php"
```

author: romeo festi - https://www.linkedin.com/in/romeo-festi-4852646a/
