# PatientManagemenetFaker

Juste pour aliment la base de donnée utilisée dans le projet [PatientManagement](https://github.com/estromganda/PatientManagement) pour les teste lors de developpement

# Installation
``` bash
git pull https://github.com/estromganda/PatientManagement.git
cd PatientManagement
composer install
# Copier le fichier .env et modifier les identifiants de connexion de base de donnée
cp .env.example .env
php artisan migrate
php artisan db:seed

