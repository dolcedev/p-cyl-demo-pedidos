<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CYL | Login</title>

    <style>
        .login-page {
            width: 360px;
            padding: 8% 0 0;
            margin: auto;
        }
        .form {
            position: relative;
            z-index: 1;
            background: #FFFFFF;
            max-width: 360px;
            margin: 0 auto 100px;
            padding: 45px;
            text-align: center;
            box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
        }
        .form input {
            font-family: "Roboto", sans-serif;
            outline: 0;
            background: #f2f2f2;
            width: 100%;
            border: 0;
            margin: 15px 0 0px;
            padding: 15px;
            box-sizing: border-box;
            font-size: 14px;
        }

        .form span.invalid-feedback {
            color: rgb(162, 0, 0);
            font-size: 12px;
        }


        .form button {
            font-family: "Roboto", sans-serif;
            text-transform: uppercase;
            outline: 0;
            background: #0511F2;
            width: 100%;
            border: 0;
            padding: 15px;
            color: #FFFFFF;
            font-size: 14px;
            -webkit-transition: all 0.3 ease;
            transition: all 0.3 ease;
            cursor: pointer;
            margin-top: 15px;
        }
        .form button:hover,.form button:active,.form button:focus {
            background: #0610d2;
        }
        .form .message {
            margin: 15px 0 0;
            color: #b3b3b3;
            font-size: 12px;
        }
        .form .message a {
            color: #0511F2;
            text-decoration: none;
        }
        .form .register-form {
            display: none;
        }
        .container {
            position: relative;
            z-index: 1;
            max-width: 300px;
            margin: 0 auto;
        }
        .container:before, .container:after {
            content: "";
            display: block;
            clear: both;
        }
        .container .info {
            margin: 50px auto;
            text-align: center;
        }
        .container .info h1 {
            margin: 0 0 15px;
            padding: 0;
            font-size: 36px;
            font-weight: 300;
            color: #1a1a1a;
        }
        .container .info span {
            color: #4d4d4d;
            font-size: 12px;
        }
        .container .info span a {
            color: #000000;
            text-decoration: none;
        }
        .container .info span .fa {
            color: #EF3B3A;
        }

        .logo{
            margin-bottom: 20px;
        }

        body {
            background: rgb(5, 17, 242);
            background: linear-gradient(90deg, rgb(9, 19, 218) 0%, rgb(3, 12, 199) 100%);
            font-family: "Roboto", sans-serif;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }
    </style>
</head>
<body>

    <div class="login-page">
        <div class="form">
            <form class="register-form" method="POST" action="{{route("register")}}">
                @csrf
                <img class="logo" src="{{asset('imgs/logoCYL.png')}}" alt="Logo CYL">

                <input type="text" placeholder="nombre" name="name" max="200" value="{{old("name")}}" />
                <span class="invalid-feedback">@error('name'){{$message}}@enderror</span>

                <input type="email" placeholder="email" name="email" max="200" value="{{old("email")}}" />
                <span class="invalid-feedback">@error('email'){{$message}}@enderror</span>

                <input type="password" placeholder="contraseña" name="password" min="4" max="20" />
                <span class="invalid-feedback">@error('password'){{$message}}@enderror</span>

                <input type="password" placeholder="confirmar" name="password_confirmation" min="4" max="20" />

                <button>registrarse</button>
                <p class="message">¿Ya está registrado? <a href="#" data-action="to-login">Ingrese a su cuenta</a></p>
            </form>
            <form class="login-form" method="POST" action="{{route("login")}}">
                @csrf
                <img class="logo" src="{{asset('imgs/logoCYL.png')}}" alt="Logo CYL">

                <input type="email" placeholder="email" name="email" max="200" value="{{old("email")}}" />
                <span class="invalid-feedback">@error('email'){{$message}}@enderror</span>

                <input type="password" placeholder="contraseña" name="password" min="4" max="20" />
                <span class="invalid-feedback">@error('password'){{$message}}@enderror</span>

                <button>ingresar</button>
                <p class="message">¿No está registrado? <a href="#" data-action="to-register">Cree una cuenta</a></p>
            </form>
        </div>
    </div>

      {{-- jquery cdn --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script>
            $('.message a').click(function(e){
                e.preventDefault();
                var data_action = $(this).data('action');

                if(data_action == 'to-login'){
                    localStorage.setItem('is_login_form', true);
                    localStorage.setItem('login_form_time', Date.now());
                }else{
                    localStorage.setItem('is_login_form', false);
                    localStorage.setItem('login_form_time', Date.now());
                }

                $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
            });

            $(document).ready(function(){
                var form = localStorage.getItem('is_login_form');
                var time = localStorage.getItem('login_form_time');

                // if el tiempo existe y es menos de 1 minuto
                if(time && (Date.now() - time) < 60000){
                    if(form == 'false'){
                        $('.login-form .invalid-feedback').hide();
                        $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
                    }else{
                        $('.register-form .invalid-feedback').hide();
                    }
                }

            });


        </script>

</body>
</html>
