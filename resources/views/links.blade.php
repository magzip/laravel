<!DOCTYPE html>
<html>
<head>
    <title>Links</title>
</head>
<body>
<table>
    <tr>
        <th>ID</th>
        <th>Имя</th>
        <th>Фамилия</th>
        <th>Статус</th>
    </tr>

@foreach($employees as $key => $arr)
        @if($arr['banned'])
            <tr bgcolor="#dc143c">
                @else
            <tr bgcolor="#006400">
        @endif

            <td>{{ $key+1 }}</td>
            <td>{{ $arr['name'] }}</td>
            <td>{{ $arr['surname'] }}</td>

            <td>Забанен</td>

        </tr>

@endforeach

</table>
</body>
</html>
