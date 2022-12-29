.PHONY: tests
tests:
	@./vendor/bin/phpunit

benchmark:
	@./vendor/bin/phpbench run --report=aggregate --precision=3

benchmark-csv:
	@./vendor/bin/phpbench run --report=aggregate --precision=3 --output=csv