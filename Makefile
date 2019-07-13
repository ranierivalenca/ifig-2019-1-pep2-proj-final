conf-git-geovane:
	git config --global user.name "geovanejose"
	git config --global user.email "geovanejose240899@gmail.com"

conf-git-rebeca:
	git config --global user.name "rebecacristina"
	git config --global user.email "rebecacristina@gmail.com"

luigi:
	git config user.name "Luigimartins"
	git config user.email "luigi.martins.355@gmail.com"

conf:
	sudo apt-get install php7.2 php7.2-mbstring php7.2-mysql php7.2-intl php7.2-xml composer # isso só serve pra sistemas que usam o apt
	cd pro_final && composer install --no-scripts
	# npm install
	# npm run dev
	cd pro_final && cp .env.example .env # copia o example
	cd pro_final && php artisan key:generate # gera a chave
	sudo apt-get install mysql-server-5.7 # instala o bd
	$(MAKE) bd-conf # roda a regra do bd-conf

bd-conf:
	mysql -u root -p --execute="drop database if exists pro_final; create database pro_final; drop user if exists 'estudante'; create user 'estudante' identified by 'Estudante2019@'; grant all privileges on pro_final.* to 'estudante';"
	cd pro_final && sed -i 's/DB_DATABASE.*/DB_DATABASE=pro_final/' .env # ajusta o nome do banco no .env
	cd pro_final && sed -i 's/DB_USERNAME.*/DB_USERNAME=estudante/' .env # ajusta o nome de usuário no .env
	cd pro_final && sed -i 's/DB_PASSWORD.*/DB_PASSWORD=Estudante2019@/' .env # ajusta a senha no .env
	cd pro_final && php artisan migrate:refresh 
	cd pro_final && php artisan serve
