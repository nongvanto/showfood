<?php
namespace App\database;
use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Events\Dispatcher;
use Illuminate\Container\Container;
class Database 
{
     public function __construct (  ){
    
        $capsule = new Capsule;
        $capsule->addConnection([
            'driver'    => $_ENV['DRIVER'],
            'host'      => $_ENV['HOST'],
            'database'  => $_ENV['DATABASE'],
            'username'  => $_ENV['USERNAME'],
            'password'  => $_ENV['PASSWORD'],
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
        ]);
        
        // Set the event dispatcher used by Eloquent models... (optional)
        
        $capsule->setEventDispatcher(new Dispatcher(new Container));
        
        // Make this Capsule instance available globally via static methods... (optional)
        $capsule->setAsGlobal();
        
        // Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
        $capsule->bootEloquent();
    
        }
}
