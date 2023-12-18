<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Revenue History</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#1a1a1a] text-white p-5 text-center">
<h1 class="text-[50px] font-bold mb-10">Revenue History</h1>
<table class="mx-auto bg-black rounded-[20px] w-[900px] h-[400px]">
   <tr class="text-cyan-400 border-b-2">
    <th>Revenue ID</th>
    <th>Date</th>
    <th>Description</th>
    <th>Amount</th>
</tr class=""> 
@foreach ($data as $data)
<tr class="text-gray-300">
    <td>{{$data->id}}</td>
    <td>{{$data->date}}</td>
    <td>{{$data->description}}</td>
    <td>{{$data->amount}}</td>
</tr>
@endforeach
<tr class="">
<td colspan="3"><strong>Total Amount = </strong></td>
        <td><strong>{{ $totalAmount }}</strong></td>
</tr>
</table>
<a href="/dashboard"><h1 class="mt-[50px]  bg-slate-700 p-2 rounded-[8px] hover:bg-[#1a1a1a] border-2">Dashboard</h1></a>
</body>
</html>