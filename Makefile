install:
	composer install

lint:
	composer run-script phpcs -- --standard=PSR12 src bin

brain-even:
	./bin/brain-even

brain-calc:
	./bin/brain-calc

brain-gcd:
	./bin/brain-gcd

brain-progression:
	./bin/brain-progression

brain-prime:
	./bin/brain-prime
	
brain-games:
	php bin/brain-games.php
	
validate:
	composer validate
