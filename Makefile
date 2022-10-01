.PHONY: tests
tests:
	docker compose run --rm php vendor/bin/phpunit

.PHONY: version
version:
	docker compose run --rm php --version
