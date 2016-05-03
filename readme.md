First tab:

```sh
$ php -S localhost:5432 -t . server.php
```

Second tab:

```sh
$ export JASON_THE_PHANTOM_HOST=localhost
    && export JASON_THE_PHANTOM_PORT=4321
    && export JASON_THE_PHANTOM_PATH=.
    && vendor/bin/phpunit
```
