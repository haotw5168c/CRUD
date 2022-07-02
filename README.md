# CRUD

1. 新增公佈欄資料

    Api Url: board/create.php

    Api 呼叫方式: POST

    |Body參數|格式|必填|說明|
    |-|-|-|-|
    |title|string|required|公佈欄標題|
    |content|string|required|公佈欄內容|

2. 查詢公佈欄資料
    
    Api Url: board/read.php

    Api 呼叫方式: GET
    
    - 查詢所有公佈欄資料
    
        無須填入參數
    
    - 查詢某個公佈欄資料
    
        |Url參數|格式|必填|說明|
        |-|-|-|-|
        |id|integer|required|要查詢公佈欄資料 ID|
 
3. 更改某筆公佈欄資料

    Api Url: board/update.php

    Api 呼叫方式: POST
    
    |Body參數|格式|必填|說明|
    |-|-|-|-|
    |id|integer|required|更改某筆公佈欄資料 ID|
    |title|string|required|公佈欄標題|
    |content|string|required|公佈欄內容|

4. 刪除某個公佈欄資料

    Api Url: board/delete.php

    Api 呼叫方式: GET
    
    |Url參數|格式|必填|說明|
    |-|-|-|-|
    |id|integer|required|要刪除公佈欄資料 ID|
