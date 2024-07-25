# fuzzy-logic-questionnaire

1. Скачайте проект из репозитория git выполнив команду:
    git clone https://github.com/johnydoe79/fuzzy-logic-questionnaire.git
2. Установите docker с официального сайта:
   https://www.docker.com
3. Запустите Docker Compose. В терминале, находясь в корневой директории вашего проекта, выполните команду:
   docker-compose up --build -d
4. Выполните миграции doctrine:
   docker exec -it symfony_app php bin/console d:mi:mi