<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home page</title>
</head>
    <body>
    <div>
        <a href="{{$links["url1"]}}">{{$links["url1"]}}</a>
    </div>
    <div>
          <a href="{{$links["url2"]}}">{{$links["url2"]}}</a>
    </div>
    @if(!(empty($fio) || empty($phone)) )
    <div>
        {{mb_substr($fio,0,160,'UTF-8')}}
    </div>
    <div>
        {{preg_replace("/[^0-9]/", "", $phone)}}
    </div>
    @endif
</body>
</html>
