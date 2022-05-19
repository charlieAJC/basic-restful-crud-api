<?php
/**
 * @OA\Tag(name="User", description="使用者功能")
 * @OA\Tag(name="Product", description="商品功能")
 */

/**
 * @OA\Post(
 *     path="/api/register",
 *     operationId="user__post_register",
 *     tags={"User"},
 *     summary="會員註冊",
 *     description="會員註冊 Description",
 *     @OA\RequestBody(
 *         @OA\MediaType(
 *             mediaType="application/json",
 *             @OA\Schema(
 *                 type="object",
 *                 @OA\Property(
 *                     property="name",
 *                     description="帳號",
 *                     type="string",
 *                 ),
 *                 @OA\Property(
 *                     property="email",
 *                     description="電子郵件",
 *                     type="string",
 *                 ),
 *                 @OA\Property(
 *                     property="password",
 *                     description="密碼",
 *                     type="string",
 *                 ),
 *                 @OA\Property(
 *                     property="c_password",
 *                     description="確認密碼",
 *                     type="string",
 *                 ),
 *             )
 *         )
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="註冊成功",
 *         @OA\JsonContent(
 *             type="object",
 *             @OA\Property(
 *                 property="success",
 *                 description="執行結果",
 *                 type="boolean",
 *                 example="true",
 *             ),
 *             @OA\Property(
 *                 property="message",
 *                 description="訊息",
 *                 type="string",
 *                 example="User register successfully.",
 *             ),
 *             @OA\Property(
 *                 property="data",
 *                 description="帳號資訊",
 *                 type="object",
 *                 @OA\Property(
 *                     property="token",
 *                     description="令牌",
 *                     type="string",
 *                     example="eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiNmU1NjA0ZjgzMjNiODZjNWJiY2U1ZWE2ZWQ0MGU2MThlNTdmOWU0NjVhYmQ1MjcxMDcyN2NmMDdlN2VlZTYxZTM2M2RkMTcyZTc5YWI3MTciLCJpYXQiOjE2NTI4NjM1MjYuNjczMDE1LCJuYmYiOjE2NTI4NjM1MjYuNjczMjE2LCJleHAiOjE2ODQzOTk1MjYuNjEyOTE3LCJzdWIiOiIyIiwic2NvcGVzIjpbXX0.KDPR6SSQ1gvljWyc89pGU30hLyiOxutOY1_CQRmTBx31ptFBsdXx9UgCKbWX2Qaqbz8yfAtn9Px25NFekYt46GP3IXijtjB6Rf-k5sW1FWbeYUeVKmTsKHZwaxrlgvdUvcSf9Np-cfr8Dd4VS98ZLrrJbJwHrcG_gDlqHHsMvcQRbHriTz_JWcYIxsbEqCoM_LBjf9GSbgLgtuEjcUEn3rboyCIVU660wUOakTPclL-P9eUKBbTuM8XaXo9QWkYfmTSDj-xVr-l8SfPmiHaylYa7josqCz_2oamz2UNBaIcBdjwXd080pRntjhOiI2jCZEwNFju2cKJd5FYVeMucxwuDohU9i2QjZj_Ai_WhXywHVbg4f1IeX6eJPR1LYxpPf7b_2Q_uo4UwRq2QPQjwRKVqATCCEmyR1Uq52py7EDL_WdQgJdhToeWMmSDt9z_tyKuycRG85azrQ7zHCtKFtJMa3colLkUDHZg-C0ayuLusSCrQ4t_Dr0ZoKg7ItPoTqH559hkIGRt3TjAohTtQmuyKToQy6tSUEiYUrZw7FknhzsnwgMkgG3z44Ckr2wMgT4UeQi47XqqyTQd0I7ANwluVV7H-F4kPmpBlm9hfde_fhf8cYU7hFK1zHkzcfZeDt1RWC9m_Ct3YjT9E75VLL3thmA1wKxu1Xi3Lwg1cAp0",
 *                 ),
 *                 @OA\Property(
 *                     property="name",
 *                     description="帳號",
 *                     type="string",
 *                     example="admin",
 *                 ),
 *             ),
 *         )
 *     ),
 *     @OA\Response(
 *         response=403,
 *         description="註冊失敗，欄位規格錯誤",
 *         @OA\JsonContent(
 *             type="object",
 *             @OA\Property(
 *                 property="success",
 *                 description="執行結果",
 *                 type="boolean",
 *                 example="false",
 *             ),
 *             @OA\Property(
 *                 property="message",
 *                 description="訊息",
 *                 type="string",
 *                 example="Validation Error.",
 *             ),
 *             @OA\Property(
 *                 property="data",
 *                 description="資訊",
 *                 type="object",
 *                 @OA\Property(
 *                     property="email",
 *                     description="錯誤欄位名稱及訊息",
 *                     type="string",
 *                     example="The email must be a valid email address.",
 *                 ),
 *             ),
 *         )
 *     )
 * )
 */

/**
 *
 * @OA\Get(
 *     path="/api/products",
 *     operationId="product__get_products",
 *     tags={"Product"},
 *     summary="取得商品列表",
 *     description="取得商品列表 Description",
 *     @OA\Response(
 *         response=200,
 *         description="請求成功",
 *         @OA\JsonContent(
 *             type="object",
 *             @OA\Property(
 *                 property="success",
 *                 type="boolean",
 *                 description="執行結果",
 *                 example="true",
 *             ),
 *             @OA\Property(
 *                 property="message",
 *                 type="string",
 *                 description="訊息",
 *                 example="Products Retrieved Successfully.",
 *             ),
 *             @OA\Property(
 *                 property="data",
 *                 type="array",
 *                 description="商品列表資料",
 *                 @OA\Items(
 *                     @OA\Property(
 *                         property="id",
 *                         type="number",
 *                         example="1"
 *                     ),
 *                     @OA\Property(
 *                         property="name",
 *                         type="string",
 *                         example="Laptop"
 *                     ),
 *                     @OA\Property(
 *                         property="created_at",
 *                         type="string",
 *                         example="2022-05-18 08:52:24"
 *                     ),
 *                     @OA\Property(
 *                         property="updated_at",
 *                         type="string",
 *                         example="2022-05-18 08:52:24"
 *                     ),
 *                 ),
 *             ),
 *         )
 *     ),
 * )
 */
