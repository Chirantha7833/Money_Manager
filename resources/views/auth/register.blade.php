<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#1a1a1a] text-white p-2">
    <div class="text-center">
    <h1 class="text-[50px] font-bold mb-5">MONEY MANAGER</h1>
    <form method="POST" action="{{ route('register') }}" class="bg-black w-[500px] mx-auto pt-2 rounded-[25px]">
        @csrf
        
        <h3 class="font-bold">Register</h3>
        <div class="flex flex-col items-center">
        <div class="p-5 text-left w-[250px]">
            <label for="name" class="m-4">Name</label>
            <input type="text" name="name" id="name" class="outline-0 w-[250px] h-10 rounded-[20px] text-black text-center">
        </div>
        <div class="p-5 text-left w-[250px]">
            <label for="email" class="m-4">E-Mail</label>
            <input type="text" name="email" id="email" class="outline-0 w-[250px] h-10 rounded-[20px] text-black text-center">
        </div>
        
        <div class="p-5 text-left w-[250px]">
            <label for="password" class="m-4">Password</label>
            <input type="password" name="password" id="password" required autocomplete="new-password" class="outline-0 w-[250px] h-10 rounded-[20px] text-black text-center">
            <!-- <input :messages="$errors->get('password')"> -->
        </div>
        
        <div class="p-5 text-left w-[250px]">
            <label for="confirmpassword" class="m-4">Re-Type Password</label>
            <input type="password" name="password_confirmation" id="password_confirmation" required autocomplete="new-password" class="outline-0 w-[250px] h-10 rounded-[20px] text-black text-center">
            <!-- <input :messages="$errors->get('password_confirmation')"> -->
        </div>
        </div>
            

        <div class="">
            <a class=""href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>
        </div>

        <button class="cursor-pointer bg-slate-700 p-2 rounded-[8px] hover:bg-[#1a1a1a] mt-2 mb-2">
        {{ __('Register') }}
        </button>        
    </form>
    <a href="/"><h1 class="mt-[40px]  bg-slate-700 p-2 rounded-[8px] hover:bg-[#1a1a1a] border-2">Back to home</h1></a>

    </div>
</body>
</html>
