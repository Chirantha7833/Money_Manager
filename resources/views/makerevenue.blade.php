<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Revenue</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#1a1a1a] text-white p-10 text-center">
    <h1 class="text-[50px] font-bold mb-10">Make Revenue</h1>

    <form action="{{ url('/make-revenue') }}" method="post" class="bg-black rounded-[20px] h-[420px] w-[500px] text-center mx-auto">
        @csrf 
        <div class="flex">
        <div class="flex flex-col ml-10">
                <label for="date" class="mt-10 p-2">Date</label> 
                <label for="amount" class="mt-10 p-2">Amount</label>
                <label for="description" class="mt-10 p-2">Description</label>
                
            </div>
   
            <div class="flex flex-col text-center">
            <input name="date" type="date" class="mt-10 ml-5 text-black border-0 outline-none p-2 rounded-[8px]">
            <input name="amount" type="text" class="mt-10 ml-5 text-black border-0 outline-none p-2 rounded-[8px]">
            <textarea name="description" type="textarea" class="mt-10 ml-5 text-black border-0 outline-none p-2 rounded-[8px]"></textarea>
            </div>
        </div>
             

        <button type="submit" class="cursor-pointer bg-slate-700 p-2 rounded-[8px] hover:bg-[#1a1a1a] mt-5 mb-2">SUBMIT</button>
    </form>
    <a href="/dashboard"><h1 class="mt-[50px]  bg-slate-700 p-2 rounded-[8px] hover:bg-[#1a1a1a] border-2">Dashboard</h1></a>
</body>
</html>
