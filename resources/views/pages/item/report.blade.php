<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body{
            font-family: dejavu sans;
        }
        table{
            width: 100%;
            border-collapse: collapse;
        }
        td, th{
            border:1px solid #000;
            padding: 5px;
        }
        .center{
            text-align: center;
        }
    </style>
</head>
<body>
<h3>List of Book</h3>
<table>
    <thead>
    <tr>
        <th class="px-4 py-3">Name</th>
        <th class="px-4 py-3">Serial Number</th>
        <th class="px-4 py-3">Category</th>
        <th class="px-4 py-3">Quantity</th>
    </tr>
    </thead>
    <tbody>
    @foreach($items as $item)
        <tr>
            <td class="px-4 py-3">{{$item->name}}</td>
            <td class="px-4 py-3">{{$item->serial_number }}</td>
            <td class="px-4 py-3">{{ $item->category->name }}</td>
            <td class="px-4 py-3">{{ $item->quantity }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
