<?php
// class Dog{
//     public function __invoke(){
//         echo "Break";
//     }
// }
// $saprky = new Dog();
// $saprky();
function foo(){

}
echo is_callable('foo') ? '"foo" is callable' : '"foo" is not callable',PHP_EOL;
if(true === is_callable(function(){})){
    echo 'anonymous function is callable';
}else{
    echo 'anonymous function is NOT callable';
}