<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#1a1a1a] text-white p-10">

    <div class="text-center">
    <h1 class="text-[50px] font-bold mb-10">MONEY MANAGER</h1>

    <form method="POST" action="{{ route('login') }}" class="flex justify-center">

        @csrf
         <div class="bg-black text-white p-10 w-[400px] rounded-[20px]">
            <h3 class="font-bold mb-5">Login</h3>
            <label for="email" class="m-4">E-Mail</label><input type="text" name="email" id="email" class="outline-0 w-[250px] h-10 rounded-[20px] text-black text-center">
            <label for="password" class="m-4">Password</label><input type="password" name="password" id="password" class="outline-0 w-[250px] h-10 rounded-[20px] text-black text-center"><br>
            <input type="checkbox" id="remember_me" name="remember" class="mr-2 cursor-pointer">{{ __('Remember me') }}<br>
            <button class="cursor-pointer bg-slate-700 p-2 rounded-[8px] hover:bg-[#1a1a1a] mt-2 mb-2">
                {{ __('Log in') }}
            </button><br>
            @if (Route::has('password.request'))
                <a class="hover:text-yellow-600" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif
        </div>
    </form>
    <a href="/"><h1 class="mt-[150px]  bg-slate-700 p-2 rounded-[8px] hover:bg-[#1a1a1a] border-2">Back to home</h1></a>
    </div>
</body>
</html>