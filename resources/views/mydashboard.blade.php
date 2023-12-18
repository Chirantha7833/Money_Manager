<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#1a1a1a] text-white p-10">

<div class="text-center ">
<h1 class="text-[40px] font-bold text-white">DASHBOARD</h1>
<div class="flex justify-between m-10">
    <div class="text-left">
        <div class="bg-black p-5 rounded-[20px]">
        Profile Name:<h1 class="font-bold"> {{ Auth::user()->name }}</h1>
            
                <form method="POST" action="{{ route('logout') }}">
                @csrf

                <a :href="route('logout')"
                onclick="event.preventDefault();
                                this.closest('form').submit();">
                       <h1 class="cursor-pointer hover:bg-black hover:text-white bg-gray-900 text-center mt-10 rounded-[25px] text-gray-400"> 
                        {{ __('Log Out') }}
                        </h1>
                    </a>
                </form>
            
        </div>
        
    <div class="mt-10">
        <ul>
        <a href="/make-revenue"><li class="mt-5 hover bg-black hover:bg-zinc-900 hover:border-2 p-5 rounded-[20px] text-center">Make Revenuve</li></a>
        <a href="/revenue-history"><li class="mt-5 hover bg-black hover:bg-zinc-900 hover:border-2 p-5 rounded-[20px] text-center">Revenue History</li></a>
        <a href="/make-expenditure"><li class="mt-5 hover bg-black hover:bg-zinc-900 hover:border-2 p-5 rounded-[20px] text-center">Make Expenditure</li></a>
        <a href="/expenditure-history"><li class="mt-5 hover bg-black hover:bg-zinc-900 hover:border-2 p-5 rounded-[20px] text-center">Expenditure History</li></a>
        <a href="/pass-book"><li class="mt-5 hover bg-black hover:bg-zinc-900 hover:border-2 p-5 rounded-[20px] text-center">Pass Book</li></a>
    
    </ul>
    
    </div>

</div>


<div>
<h1 class="p-5 font-bold bg-slate-700 mb-5 rounded-[20px]">Your Finance Status</h1>
            <table class="bg-black rounded-[20px]">
                
                <tr class="border-b-2 text-cyan-400">
                    <th class="p-5">FINANCE</th>
                    <th class="p-5">AMOUNT</th>
                </tr>
   
                <tr class="zinc-900">
                    <td class="p-5 text-left text-gray-300">Revenue</td>
                    <td class="p-5 text-left text-gray-500">Rs:{{$totalRevenue}}</td>
                </tr>
   
    
                <tr  class="zinc-900">
                    <td class="p-5 text-left text-gray-300">Expenditure</td>
                    <td class="p-5 text-left text-gray-500">Rs:{{$totalExpenditure}}</td>
                </tr>

                <tr class="zinc-900">
                    <td class="p-5 text-left">Balance</td>
                 <td class="p-5 text-left">Rs:{{$totalBalance}}</td>
                </tr>
            </table>
</div>
</div>



</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
</body>
</html>

