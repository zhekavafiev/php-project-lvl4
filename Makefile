server:
	php artisan serve

lint:
	composer run-script phpcs -- -n --standard=PSR12 app/

test:
	php artisan test

deploy:
	git push heroku master

install:
	composer install
	npm install
	cp -n .env.example .env || true
	touch project4
	php artisan config:cache
	php artisan key:generate
	php artisan migrate
	php artisan db:seed