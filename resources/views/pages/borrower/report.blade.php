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
<h3>List of Borrowers</h3>
<table>
    <thead>
    <tr>
        <th class="px-4 py-3">Borrower Name</th>
        <th class="px-4 py-3">Book</th>
        <th class="px-4 py-3">Department</th>
    </tr>
    </thead>
    <tbody>
    @foreach($borrowers as $borrower)
        <tr>
            <td class="px-4 py-3">{{$borrower->user->name}}</td>
            <td class="px-4 py-3">{{$borrower->item->name }}</td>
            <td class="px-4 py-3">{{ $borrower->department->name }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
