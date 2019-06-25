<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>
    <div class="login-page">
        <div class="form">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                   @foreach ($errors->all() as $error)
                   <li>{{ $error }}</li>
                   @endforeach
                </ul>
            </div>
        @endif

        @if (session('message'))
            {{ session('message') }}
        @endif
          <form class="login-form" action="{{ route('user.login') }}" method="post">
              @csrf
            <input name="email" value="{{ old('email') }}" type="email" placeholder="username" required/>
            <input name="password" type="password" placeholder="password" required/>
            <button>login</button>
            <p class="message">Not registered? <a href="#">Create an account</a></p>
          </form>
        </div>
      </div>
</body>
</html>
