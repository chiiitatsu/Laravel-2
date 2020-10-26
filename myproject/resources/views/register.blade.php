<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>新規登録画面</title>
        
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
            .contact-form .item input[type=password]{
                display: block;
                margin-left: 100px;
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

        </header>

        @if(count($errors) > 0)
        <p>入力に誤りがあります</p>
        @endif

        <form class="contact-form" action="/home" method="post">
        @csrf
            @ERROR('name')
            <div>ERROR {{$message}}</div>
            @enderror
            <div class="item">
                <label class="label" for="name" >名前</label>
                <input  name="name"  type="text" value="{{old('name')}}">
            </div>

            @ERROR('password')
            <div>ERROR {{$message}}</div>
            @enderror
            <div class="item">
                <label class="label" for="password">Password</label>
                <input name="password" type=password  value="{{old('password')}}">
            </div>

            @ERROR ('password_confirmation')
            <div>ERROR {{$message}}</div>
            @enderror
            <div class="item">
                <label class="label" for="password_confirmation">確認パスワード</label>
                <input name="password_confirmation" type=password  value="{{old('password_confirmation')}}">
            </div>

            <div class="register">
                <input type="submit" value="登録">
            </div>
        </form>
        
        
    </body>
</html>