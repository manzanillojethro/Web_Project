<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project</title>
    <link rel="stylesheet" href="{{ asset('home.css') }}">
</head>

<body>
    <div class="container">
        <h1>Log In</h1>
        <form action="/homepage" method="POST" class="login-form">
            @csrf
            <input type="text" name="username" placeholder="Username" class="form-input"
                value="{{ old('username') }}" pattern="[A-Za-z]+" title="Please enter only alphabetic characters">

            @if ($errors->has('username'))
                <div class="error-message">
                    {{ $errors->first('username') }}
                </div>
            @endif
            <button type="submit" name="login_type" value="user" class="submit-btn">Login</button>
            <button type="submit" name="login_type" value="guest" class="submit-btn">Guest</button>
        </form>

    </div>
</body>

</html>