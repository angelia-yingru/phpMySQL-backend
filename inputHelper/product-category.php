<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>會塞資料的小精靈</title>
    <style>
    body {
        width: 50vw;
        word-wrap: break-word;
        line-height: 1.5rem;
        margin: 3rem auto;
    }
    </style>
</head>

<body>
    <p id="info"></p>
</body>
<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
    crossorigin="anonymous"></script>
<script>

// 宣告 欲送出的 [key]
let keys = ["name"]; //example
//
// 宣告 欲送出的 [value]
let name = ["派", "塔", "餅乾", "蛋糕", "千層", "戚風", "造型", "磅蛋糕", "蛋糕捲", "生乳捲", "馬卡龍", "冰淇淋", "禮盒", "花", "茶", "酒", "鹹", "水果", "果乾", "抹茶", "奶茶", "奶油", "牛奶", "香草", "起司", "檸檬", "焦糖", "咖啡", "芝麻", "芋頭", "堅果", "雜糧", "巧克力",]; //example

//
// 宣告 目標網址
let url = "http://localhost:8080/project/api/product/product-category-post.php"; //example

try {
    // 依序放入宣告完的變數 
    multiInput(url, keys, name) //keys 順序對應 value 的放入順序
} catch (e) {
    sayError(e);
};


function multiInput(url, keys, ...arrs) {
    let size = arrs[0].length;
    info.innerText = "小精靈開示了 : "
    if (url == "http://localhost:8080/myPostApi.php") {
        throw "改一下變數麻";
    }
    arrs.forEach(arr => {
        if (arr.length != size) {
            info.innerText += `\n\n 標準長度是 ${size}\n第 ${arrs.indexOf(arr)+1} 個陣列長度是 ${arr.length} `;
            throw "長度怪怪的ㄛ";
        }
    })
    for (let i = 0; i < arrs[0].length; i++) {
        let body = {};
        for (let j = 0; j < keys.length; j++) {
            let arr = arrs[j]
            body[keys[j]] = arr[i];
        }
        $.ajax({
            url: url,
            method: "POST",
            dataType: "json",
            data: body,
            success: function(res) {
                info.innerText +=
                    `\n\n POST資料: \n ${JSON.stringify(body)} \n回應: \n ${JSON.stringify(res)}\n
                    ----------------------`
            },
            error: function(err) {
                info.innerText +=
                    `\n\n POST資料: \n ${JSON.stringify(body)} \n回應:  \n ${JSON.stringify(err)}\n
                    ----------------------`
            },
        });
    }
}

function sayError(e) {
    info.innerText += "\n";
    info.innerText += e;

}
</script>

</html>