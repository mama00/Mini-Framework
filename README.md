# Mini-Framework
Mini-Framework for educational purpose
Mini-Framework for trainning code clean and scallable,for now it is very basic and need a lot of work,but you can still make a good app with it.
Feel free to remove code in App folder they are just here for showing how the framework works.
the code of the framework are in framework folder.
But you have to respect the architecture. Controller must be in controller folder ,model in model folder ,and so on...
 
Config.php:Where you indicate parameter of your Database.
index.php Single entry point.all your route must go there the format of your link must be index?action='your url'

app/Route/Route.php is where you register route for your application (match route with controller function) syntax is the same as Laravel
your Controller@thefunction

app/Model is where you can create your model (they must extends BaseModel),you have primaryKey and Table variable to indicate the table  you want the model to represent.

BaseModel for now only have a few function (its really basic) getById which return array representing the tuple who match the id passed in parameter.
all() :return all tuple of the table in array format
query(): where you can query directly the table.

app/Controller is where you can create your controller 

You also have the View class which contain the static method View which will call the file indicated in parameter View assume that the base folder is app/View , you can also pass variable to View they will be available as $contenu in the view..

Framework support Middleware you can register your middleware in the same file you register your route. Your middleware must be a class that extends BaseMiddleware as you see in the example in app\Middleware folder. Your class must implement handle() method and finish with the $this->Next($request) in orther to send the request in the chain list.

Envent are also supported now create and Event class and activate it with EventManager
create event in app\Event\Event folder and listener in app\Event\Listener and register your event in serviceProvider\EventServiceProvider.php

Now with the Help of fm you will be able to generate all File you need with just a command.
fm is a command line tools which help you build fast code.

you can generate model,controller,middleware,event,listener like this
php fm make:model yourmodelname 
php fm make:middleware yourmiddleware
php fm make:controller yourcontroller
php fm make:event yourevent
php fm make:listener yourlistener 

dont add the .php fm will do it for you :)

Thank you for visiting .Feel free to modify everything .this is just for educational purpose
 
