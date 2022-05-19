# RESTFUL CRUD API 範例

簡單的 API 範例，內含會員註冊 / 登入 及 商品的增刪修
[分支新增] Swagger api

## References

https://techsolutionstuff.com/post/laravel-rest-api-crud-tutorial

https://learnku.com/docs/laravel/9.x/passport/12270

https://github.com/DarkaOnLine/L5-Swagger

https://hosomikai.medium.com/laravel-%E4%BD%BF%E7%94%A8swagger-%E7%94%A2%E5%87%BAapi%E6%96%87%E4%BB%B6-2f2a934c3b25

## Install

Swagger 的描述檔可以寫在

1. API Controller 的 function 上
   安裝指令：`composer require darkaonline/l5-swagger`
2. 開個 `Docs` 的資料夾，將描述檔放在資料夾裡的檔案裡
   安裝指令：`composer require darkaonline/l5-swagger:8.1`

兩者差別只在方法二指定了套件的版本，這是因為此後版本的套件不支援此寫法

參考連結：https://github.com/DarkaOnLine/L5-Swagger/issues/443

## Guide

1. 提供以下 api

    **No login required**

    * User
      * (POST) api/register
      * (POST) api/login
    * Product
      * (GET) api/products

    **No login required**

    * User
      * (GET) api/user
    * Product
      * (POST) api/products
      * (GET) api/products/{productId}
      * (PUT) api/products/{productId}
      * (DELETE) api/products/{productId}

2. Swagger 文件網址：api/documentation
