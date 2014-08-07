## felixkiss/uniquewith-validator [Issue #19](https://github.com/felixkiss/uniquewith-validator/issues/19)

Proof of concept application to investigate the problems @SuperlativeEntity has.

Installation:
```
git clone git@github.com:felixkiss/uniquewith-validator-issue-debug.git
cd uniquewith-validator-issue-debug
git checkout issue-19
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

Example using option #1 (first one fails, second one succeeds):
```
http://localhost:8000/own-rule/foo
http://localhost:8000/own-rule/bar
```

Example using option #2 and unique_with rule (first two will succeed the first time, and fail afterwards. Custom rule will prevent the last one from succeeding in the first place):
```
http://localhost:8000/unique-with/apple/iphone-4
http://localhost:8000/unique-with/apple/iphone-5
http://localhost:8000/unique-with/samsung/galaxy-s
```

See also https://github.com/felixkiss/uniquewith-validator#extending-the-laravel-validator
