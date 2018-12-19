@echo off 
　　if "%1" == "h" goto begin 
　　mshta vbscript:createobject("wscript.shell").run("%~nx0 h",0)(window.close)&&exit 
　　:begin 
php-cgi -b 127.0.0.1:9000
