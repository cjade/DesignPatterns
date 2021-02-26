<?php


namespace FactoryMethod\php;

spl_autoload_register(function ($className){
   $fileName = str_replace('\\', DIRECTORY_SEPARATOR, $className).'.php';
    if(is_file($fileName)){
        require $fileName;
    }else{
        echo $fileName .' is not exist';die;
    }
});




function clientCode(SocialNetworkPoster $creator)
{
    // ...
    $creator->post("Hello world!");
    $creator->post("I had a large hamburger this morning!");
    // ...
}


echo "Testing ConcreteCreator1:\n";
clientCode(new FacebookPoster("john_smith", "******"));
echo "\n\n";