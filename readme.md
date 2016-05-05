First tab:

```sh
$ php -S localhost:5432 -t . server.php
```

Second tab:

```sh
$ UNDEMANDING_CLIENT_HOST=127.0.0.1 UNDEMANDING_CLIENT_PORT=4321 UNDEMANDING_CLIENT_PATH=. vendor/bin/phpunit
```
