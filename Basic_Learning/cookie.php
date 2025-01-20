<?php
//cookie is information about a user stored in a user web browser targeted to advertisement, browsig prefrence and other non sensitive information

setcookie('name','value',time()+(60*60*24*7),'/');//name of the cookie, value of the cookie, time of the cookie to expire in seconds from now, path of the cookie

setcookie("name","Pritam",time()+60*60*24*7);
setcookie("age","20",time()+60*60*24*7);

foreach($_COOKIE as $key=>$value){
    echo $key . " = " . $value . "<br>";
}

if(isset($_COOKIE['name'])){
    echo "Cookie is set";
}else{
    echo "Cookie is not set";
}
?>