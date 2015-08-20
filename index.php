<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<X-Frame-Options: Deny>
<meta name="title" content="測試頁" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>測試頁</title>
</head>
<body>
這裡是測試文字
<br />
<span class="yconnectLogin"></span>
</body>
</html>

<script type="text/javascript">
window.yconnectInit = function() {
    YAHOO.JP.yconnect.Authorization.init({
        button: {
            format: "image",
            type: "a",
            width: 196,
            height: 38,
            className: "yconnectLogin"
        },
        authorization: {
            clientId: "dj0zaiZpPWNmclNxNUxJNm5UTiZzPWNvbnN1bWVyc2VjcmV0Jng9OGI-",
            redirectUri: "http://developer.yahoo.co.jp/start/",
            scope: "openid",
            state: "abc",
            nonce: "def"
        },
        onError: function(res) {
            // エラー発生時のコールバック関数
        },
        onCancel: function(res) {
            // 同意キャンセルされた時のコールバック関数
        }
    });
};
(function(){
var fs = document.getElementsByTagName("script")[0], s = document.createElement("script");
    s.setAttribute("src", "https://s.yimg.jp/images/login/yconnect/auth/1.0.0/auth-min.js");
fs.parentNode.insertBefore(s, fs);
})();
</script>