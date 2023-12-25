<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact page</title>
</head>
<body>
    @foreach($contact_us as $contact=>$value)
        <div>{{$value}}</div>
    @endforeach
<form action="/my_page">
    <p>Ваше ФИО: <input name="fio"></p>
    <p>Ваш номер телефона: <input name="number_phone"></p>
    <input type="submit" value="Отправить">
</form>
<div>
    <div>Ваши данные</div>

</div>
</body>
</html>
