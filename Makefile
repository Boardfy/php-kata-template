.PHONY: test
test:
	docker compose run php vendor/bin/phpunit
