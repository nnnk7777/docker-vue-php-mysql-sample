start-dev:
	docker-compose -f docker-compose.dev.yml up --build -d

start-prod:
	docker-compose -f docker-compose.prod.yml up --build -d --remove-orphans

down-dev:
	docker-compose -f docker-compose.dev.yml down --rmi all

down-prod:
	docker-compose -f docker-compose.prod.yml down --rmi all