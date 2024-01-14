apache2-foreground & 
sleep 5 
php artisan migrate:fresh --seed 
tail -f /dev/null
