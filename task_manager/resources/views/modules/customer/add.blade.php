<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="/add{id}" method="POST">
        @csrf
        <table>
            <tr>
                <th>STT</th>
                <td></td>
            </tr>
            <tr>
                <td>
                <th>Họ và tên</th>
                </td>
                <td><input type="text" name="name" value=""></td>
            </tr>
            <tr>
                <td>
                <th>Số điện thoại</th>
                </td>
                <td><input type="text" name="phone" value=""></td>
            </tr>
            <tr>
                <td>
                <th>Email</th>
                </td>
                <td><input type="text" name="email" value=""></td>
            </tr>
            <tr>
                <td><input type="submit"></td>
                </td>
            </tr>

        </table>
    </form>
</body>

</html>