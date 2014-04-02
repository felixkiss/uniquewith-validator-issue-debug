## felixkiss/uniquewith-validator [Debugging](https://github.com/felixkiss/uniquewith-validator/issues)

Proof of concept application to investigate the problems found in
[felixkiss/uniquewith-validator/issues](https://github.com/felixkiss/uniquewith-validator/issues).

Installation:
```
git clone git@github.com:felixkiss/uniquewith-validator-issue-debug.git
cd uniquewith-validator-issue-debug
git checkout issue-<number>
composer update
php artisan migrate
```

Run the tests:
```
phpunit
```

Try in Browser:
```
php artisan serve
```
