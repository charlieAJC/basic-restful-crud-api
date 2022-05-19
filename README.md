# RESTFUL CRUD API 範例

簡單的 API 範例，內含會員註冊 / 登入 及 商品的增刪修

## References

https://techsolutionstuff.com/post/laravel-rest-api-crud-tutorial

https://learnku.com/docs/laravel/9.x/passport/12270

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
