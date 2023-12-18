<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passbook</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#1a1a1a] text-white p-5 text-center">
<h1 class="text-[50px] font-bold mb-10">Pass Book</h1>
<div class="flex">
<h3 class="text-center p-2 ml-[300px] mb-5  bg-black rounded-[20px]"> Current Balance :  {{$totalBalance}}</h3>
<a href="{{ url('/passbook/export') }}"><h3 class="text-center ml-[550px] mb-5 cursor-pointer hover:bg-black hover:text-white bg-gray-900 rounded-[18px] text-gray-300 p-2 hover:border-2">Download Statement</h3></a>
</div>

    <table class="mx-auto bg-black rounded-[20px] w-[900px] h-[400px]">
        <tr class="text-cyan-400 border-b-2">
        <th>Transaction ID</th>
        <th>Date</th>
        <th>Description</th>
        <th>Revenue</th>
        <th>Expenditure</th>
        <th>Balance</th>
        </tr>
        @foreach($data as $row)
        <tr class="text-gray-300">
            <td>{{$row->id}}</td>
            <td>{{$row->date}}</td>
            <td>{{$row->description}}</td>
            <td>{{$row->revenue}}</td>
            <td>{{$row->expenditure}}</td>
            <td>{{$row->balance}}</td>   
        </tr>
        @endforeach
     
    </table>
    <a href="/dashboard"><h1 class="mt-[50px]  bg-slate-700 p-2 rounded-[8px] hover:bg-[#1a1a1a] border-2">Dashboard</h1></a>

</body>
</html>