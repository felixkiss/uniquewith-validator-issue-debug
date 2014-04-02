## felixkiss/uniquewith-validator [Issue #12](https://github.com/felixkiss/uniquewith-validator/issues/12)

Proof of concept application to investigate the problems @edsuna has.

Installation:
```
git clone git@github.com:felixkiss/uniquewith-validator-issue-debug.git
cd uniquewith-validator-issue-debug
git checkout issue-12
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

Go to:
```
http://localhost:8000/phones/apple/iphone-5
http://localhost:8000/phones/apple/iphone-4
```

This should work the first time (i.e. return some JSON) and fail afterwards.
