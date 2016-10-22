# ATTZ Make The Web Base Application Kit Foundation By Laravel PHP Framework

base ACL
base AdminLte
base CRUD Generate

#Install

composer update


#Install Database

php artisan migrate


#Add Database Management 

php artisan crud:generate Conf --fields="key#string,value#string" --route=yes --pk=id --view-path="admin" --namespace=Admin --route-group=admin

#Login Account

ID:admin@attz.tw
PWD:admin

See The File database/migrations/2016_07_21_173250_entrust_setup_tables.php

## License

licensed under the [MIT license](http://opensource.org/licenses/MIT).
