<h1>🚗 Véhicule Manager</h1>

### ![Docker](https://img.shields.io/badge/-Docker-black?style=flat-square&logo=docker) Commandes Docker

- Démarrer docker - docker-compose up
- voir les conteneur - docker ps
- Démarrer un service - docker exec -it <nom du conteneur> bash
- Connexion BDD - mysql -h < Host > -u < user > -p < password >

   Migration
   
- Créer un model + migration : docker-compose run myapp php artisan make:model < nom du model > -m
- Faire un migrate : docker-compose run myapp php artisan migrate
 
### ![MariaDB](https://img.shields.io/badge/MariaDB-black?style=flat-square&logo=mariadb) Commandes MariaDB

 - show databases (voir les BDDS)
 - Show tables (voir les tables)
  
 ### ![GitHub](https://img.shields.io/badge/-GitHub-181717?style=flat-square&logo=github) Commandes Github
 
 - Créer une branche github et aller dessus : git checkout -b < nom de la branche >
 - Stocker les modification : git stash 
 - Pull les modif sur la branche : git pull --rebase 
 - Récupérer les modifications du stash : git stash pop
 - Commit avec add les modif dans fichier : git commit -a -m" < le message > "
 - Push la branche : git push -u origin main
 
 - Pour naviguer entrer les branches github : git checkout < nom de la branche >

 - Commande pour generate swagger : sudo docker-compose run myapp php artisan l5-swagger:generate
 
  

