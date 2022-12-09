# Reproducer for https://github.com/symfony/symfony/issues/48562

To reproduce:

```shell
composer install
bin/console expose:bug -vvv
```

## Important factoids

[The docs](https://symfony.com/doc/current/service_container/lazy_services.html) say
you have to run `composer require symfony/proxy-manager-bridge`.
I don't think Symfony is using proxy-manager for this anymore, so maybe they
need to be updated?

The bug seems to happen only with arrays, and, which is crazy, with specific
variable names, like `toto` or `coupons`. It does not happen with `coupon` or
`foo` or `c`, unless you clear your cache with `rm -rf var/cache/*`
