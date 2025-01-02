Instalace projektu:
    Pro klonovani projektu: git clone https://github.com/StanQ1/travel-app-max-seminar.git
    Pak: "composer install", pro instalaze zavisloty

Po instalace projektu do slozky napiste do terminalu dalsi prukazy:
    php artisan key:generate
    php artisan migrate
    php artisan db:seed
    php artisan serve

Ta prvni sgeneruje tajemni kod aplikaci, 
druha vykonava migrace, 
db:seed vytvori spoustu (20) zajezdu
serve spousti aplikace

Pro administrovani zajezdu mate odkaz v menu nahore "Admin"
Adminove login je zase "Admin", a heslem je "Heslo"

Pokud budou jakekoliv otazky: xa1per11@gmail.com
