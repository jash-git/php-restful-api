php restful api

資料來源:https://github.com/lycheng423/RESTful
https://support.ladesk.com/061754-How-to-make-REST-calls-in-PHP

使用/ 測試 方法

 * 发送：
 * GET  http://localhost/phprestfulapi/class  列出所有班级
 * GET  http://localhost/phprestfulapi/class/1    获取指定班的信息
 * POST http://localhost/phprestfulapi/class?name=SAT班&count=23 新建一个班
 * PUT  http://localhost/phprestfulapi/class/1?name=SAT班&count=23  更新指定班的信息（全部信息）
 * PATCH  http://localhost/phprestfulapi/class/1?name=SAT班    更新指定班的信息（部分信息）
 * DELETE  http://localhost/phprestfulapi/class/1 删除指定班
 
http://localhost/phprestfulapi/curl_get_test.php
http://localhost/phprestfulapi/curl_post_test.php
http://localhost/phprestfulapi/curl_put_test.php
http://localhost/phprestfulapi/curl_delete_test.php

PS 可以直接在USBWEBSERVER使用