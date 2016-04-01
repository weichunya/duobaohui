<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <style>
            table {
                margin:0 25% auto; 
                width:50%;
                border-collapse: collapse;
                padding: 2px 24px 2px 0px; 
                table-layout:fixed; 
            } 
            table th, td {
                border: 1px solid black;
                height: 40px;
             }
            table tr td:first-child { width: 250px; }
            input[type="text"] {
                width: 100%;
                padding: 10px;
                margin: 0px;
            }
            input[type="submit"] {
                margin:auto; 
                display:block; 
            }
            
            ul {
                margin:30px 25%; 
                width:50%;
            }
        </style>
    
        <script type="application/javascript">
            function xmlhttp() {
                var $xmlhttp;
                if (window.XMLHttpRequest) {
                    // code for IE7+, Firefox, Chrome, Opera, Safari
                    $xmlhttp = new XMLHttpRequest();
                } else {
                    // code for IE6, IE5
                    $xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
                return $xmlhttp;
            }
            window.onload = function() {
                $xmlhttp = xmlhttp();
                $xmlhttp.onreadystatechange = function() {
                    if ($xmlhttp.readyState == 4) {
                        if($xmlhttp.status == 200){
                            document.getElementById('id_token').value = $xmlhttp.responseText;
                        } else {
                            alert('get uptoken other than 200 code was returned')
                        }
                    }
                }
               
                $upTokenUrl = 'http://alipay.localhost/qiniu/qiNiu/upload-key';
                $xmlhttp.open('GET', $upTokenUrl, true);
                $xmlhttp.send(); 
                $bucketDomain = 'http://77fxsr.com2.z0.glb.qiniucdn.com';
                $file = document.getElementById('id_file');
                $file.onchange = function(){
                    $key = $file.value.split(/(\\|\/)/g).pop(); 
                    document.getElementById('id_key').value = $key;
                    
                    $url = document.getElementById('id_url')
                    $url.href = $url.text = $bucketDomain + '/' + $key;
                };
            }; 
        </script>
    </head>
    <title>文件上传</title>
    <h1 style="text-align: center;">上传一个文件</h1>
    <body>
        <ul>
            <li>Upload Token 是使用官方账号的<a href='#'>AK</a>, <a href='#'>SK</a>生成，空间为： imgs </li>
            <li>空间 devtest 绑定的<a href='https://portal.qiniu.com/'>域名</a>是：77fxsr.com2.z0.glb.qiniucdn.com </li>
        </ul>

        <form action="http://up.qiniu.com" method="post" enctype="multipart/form-data" >  
            <table>
                <tr>
                    <td>Upload Token(<a href="">生成Token的代码</a>):</td>
                    <td><input id="id_token" name="token" type="text" /></td>
                </tr>
                <tr>
                    <td>上传文件名:</td>
                    <td><input id="id_key" name="key" type="text" /></td>
                </tr>
                <tr>
                    <td>上传后文件外链(<a href="http://alipay.localhost/qiniu/qiNiu/upload-token">外链规则</a>):</td>
                    <td><a id="id_url" href=""/></a></td>
                </tr>
                <tr>
                    <td>文件（小于4MB）:</td>
                    <td><input id="id_file" name="file" type="file" /></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" value="上传"/></td>
                </tr>
            </table>
        </form>  
    </body>
</html>