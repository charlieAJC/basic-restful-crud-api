# RESTFUL CRUD API 範例

簡單的 API 範例，內含會員註冊 / 登入 及 商品的增刪修
[分支新增] Swagger api

## References

https://techsolutionstuff.com/post/laravel-rest-api-crud-tutorial

https://learnku.com/docs/laravel/9.x/passport/12270

https://github.com/DarkaOnLine/L5-Swagger

https://hosomikai.medium.com/laravel-%E4%BD%BF%E7%94%A8swagger-%E7%94%A2%E5%87%BAapi%E6%96%87%E4%BB%B6-2f2a934c3b25

## Install

* 安裝 `l5-swagger` 套件

    Swagger 的描述檔可以寫在

    1. API Controller 的 function 上
    安裝指令：`composer require darkaonline/l5-swagger`
    2. 新增 `app\Docs` 資料夾，將描述檔放在資料夾裡的檔案裡
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

3. 如果不希望 Swagger 介面顯示在正式環境上
   * 正式環境的 `storage/api-docs` 中不應出現任何檔案
   * 正式環境的 `.env` 中一定要有參數 `L5_SWAGGER_GENERATE_ALWAYS=false` 以避免套件生成 Swagger 文件
