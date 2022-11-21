<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini-CRM | Login</title>
    {{-- <link rel="stylesheet" href="/css/style.css"> --}}
    <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>
<body style="background-image: url('img/customerservice.jpg'); background-repeat: no-repeat;
background-size: cover;">

<div class="border border-3 border-dark rounded p-2 mb-2 border-opacity-10 w-25 bg-dark text-light position-absolute top-50 start-50 translate-middle">
    <h2 class="text-center m-2" style="font-family: serif;"><b>Login</b></h2>
    <form action="{{ route('actionlogin') }}" method="post">
        
        @csrf
        @method('post')
        <div class="form-group m-3">
            <label for="email">Email address</label>
            <input type="email" id="email" name="email" class="form-control"
            value="{{ old('email') }}">
            <span class="text-danger">@error('email') {{ $message }}@enderror</span>
        </div>
        
        <div class="form-group m-3">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" class="form-control"
            value="{{ old('password') }}">
            <span class="text-danger">@error('password') {{ $message }}@enderror</span>
        </div>
        @if(Session::has('fail'))
        <div class="alert alert-danger">{{ Session::get('fail') }}</div>
        @endif

            <div class="form-group m-3 mt-4">
            <input class="w-100" type="submit" value="Log-in">
            </div>
        </form>
    </div>
</body>
</html>