<?php
//参数7：是否httponly，只能在http协议下进行传输，false表示在任何协议下都能传输
setcookie('name','zhangsan',time()+100,'','blog.cn',false,true);
setcookie('age','32',time()+100,'','blog.cn',false,true);