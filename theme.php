<?php if (isset($_POST["check"])) {
        
        $cookie_name = "use";
        $cookie_value =[["navbar-dark", "bg-dark"],["bg-dark"]];
        setcookie($cookie_name, json_encode($cookie_value), time() + (86400 * 30), "/"); // 86400 = 1 day
      
        header("Location: $_SERVER[HTTP_REFERER]");
        return;
      
        
}else{
 
  //tema oscuro para checkeado navbar-light bg-light
$cookie_name = "use";
$cookie_value =[["navbar-light", "bg-light"],["bg-white"]];
setcookie($cookie_name, json_encode($cookie_value), time() + (86400 * 30), "/"); // 86400 = 1 day

header("Location: $_SERVER[HTTP_REFERER]");
return;

}
       ?>
