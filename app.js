$(function () {
    $("").click(function () {
        // 入力された値を取得
        
        // urlを設定
        var url = "https://zipcloud.ibsnet.co.jp/api/search?zipcode=";
        // 送るデータを成形する
        var param = { zipcode: zipcode };
        // サーバーと通信(Ajax)
        
        $.ajax({
            type: "", 
            cache: false,
            data: {"content": content},
            url: url+param,
            dataType: "json"
        })
        .done(function (res) {
            if (res.status != 200) {
                // 通信には成功。APIの結果がエラー
                // エラー内容を表示
                $('#zip_result').html(res.message);
            } else {
                let result = data.results[0];
                $('#address1').val(result.address1);
                $('#address2').val(result.address2);
                $('#address3').val(result.address3);
            }

        })
        .fail(function (error) {
            console.log(error);
            $('#zip_result').html("<p>通信エラーです。時間をおいてお試しください</p>");
        });
    });
});