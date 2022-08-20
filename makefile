config:
	docker-compose run php php artisan config:cache

update:
	docker-compose run php php artisan down
	docker-compose run php php artisan config:cache
	docker-compose run php php artisan migrate
	docker-compose run php php artisan up

deploy:
	ssh toi@34.92.243.223 'cd /home/toi/project/demo-deploy && make update'