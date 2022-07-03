# 前端說明

用瀏覽器打開 index.html 測試頁面，內有設計 CRUD 測試表單，輸入對應資料後，點擊提交按鈕，即可收到主機回應的 JSON 格式資料。


# 後端說明

服務架構簡述：透過呼叫對應的 CRUD PHP Url 來對操作資料庫進行操作處理。

1. 新增公佈欄資料

    Api Url: board/create.php

    Api 呼叫方式: POST

    |Body參數|格式|必填|說明|
    |-|-|-|-|
    |title|string|required|公佈欄標題|
    |content|string|required|公佈欄內容|

    Response
    
    處理成功
    
    `{"message":"success"}`
    
    處理失敗
    
    `{"message":"主機回傳錯誤訊息"}`
    
2. 查詢公佈欄資料
    
    Api Url: board/read.php

    Api 呼叫方式: GET
    
    - 查詢所有公佈欄資料
    
        無須填入參數
        
        Response
        
        ```json
        [
            {"id":"1","title":"Title Example","content":"Content Example"},
            {"id":"2","title":"Title ABC","content":"Content ABC"}
        ]
        ```
    
    - 查詢某個公佈欄資料
    
        |Url參數|格式|必填|說明|
        |-|-|-|-|
        |id|integer|required|要查詢公佈欄資料 ID|
        
        Response
        
        ```json
        [
            {
                "id":"1",
                "title":"Title Example",
                "content":"Content Example"
            }
        ]
        ```
 
3. 更改某筆公佈欄資料

    Api Url: board/update.php

    Api 呼叫方式: POST
    
    |Body參數|格式|必填|說明|
    |-|-|-|-|
    |id|integer|required|更改某筆公佈欄資料 ID|
    |title|string|required|公佈欄標題|
    |content|string|required|公佈欄內容|
    
    Response
    
    處理成功
    
    `{"message":"success"}`
    
    處理失敗
    
    `{"message":"主機回傳錯誤訊息"}`

4. 刪除某個公佈欄資料

    Api Url: board/delete.php

    Api 呼叫方式: GET
    
    |Url參數|格式|必填|說明|
    |-|-|-|-|
    |id|integer|required|要刪除公佈欄資料 ID|
    
    Response
    
    處理成功
    
    `{"message":"success"}`
    
    處理失敗
    
    `{"message":"主機回傳錯誤訊息"}`
