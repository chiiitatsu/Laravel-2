<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>ホーム画面</title>
        
        <style>
            * {
                margin:0; padding:0;
            }
            
            header {
                height: 100px;
                width: 100%;
                padding: 0 0;
                background-color:dimgray;
                color: white;
            }
            
            header .headline{
                line-height: 100px;
                float: left;
                font-size: 18px;
                margin-left: 50px;
            }
            
            .nav-list {
                line-height: 100px;
                float: right;
                margin-right: 100px;
                list-style: none;
            }
            
            .nav-list-item {
                list-style: none;
                display: inline-block;
                margin: 0 20px;
            }
            
            .contact-form {
                border: 1px solid #ccc;
                font-size: 13px;
                font-family: sans-serif;
                position: absolute;
                top: 180px;
                left: 570px;
            }
            .contact-form .item {
                display: block;
                overflow: hidden;
                margin-bottom: 10px;
            }
            .contact-form .register {
                padding: 5px 0px 5px 60px;
            }
            .contact-form .item .label {
                float: left;
                padding: 5px;
                margin:0;
            }
            .contact-form .item input[type=text],
            .contact-form .item input[type=email],
            .contact-form .item input[type=password]{
                display: block;
                margin-left: 80px;
                width: 200px;
                padding: 5px;
                border: 1px solid #ccc;
                box-sizing: border-box;
                font-size: 13px;
            }
            input[type=submit] {
                border: none;
                outline: none;
                display: block;
                line-height: 30px;
                width: 160px;
                text-align: center;
                font-size: 13px;
                color: #fff;
                background-color: #696;
                border-bottom: 4px solid #464;
                cursor:pointer;

                box-sizing: content-box;
                transition:0.3s ease all
            }
            input[type=submit]:hover{
                border-bottom-width:0;
                transform:translateY(4px)
            }
            

        </style>
        
    </head>
    
    <body>
        <!-- header -->
        <header>
            <h1 class="headline">
                <a>Laravel</a>
            </h1>

            <ul class="nav-list">
                <li class="nav-list-item">
                    <a href="">Log out</a>
                </li>
            </ul>
            
        </header>

        <p>{{$name}}</p>
    </body>
</html>