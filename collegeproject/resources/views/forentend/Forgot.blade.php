<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{url('/')}}/forgot" method="post">
        {{csrf_field()}}
        @if(Session('error'))
       <div> {{Session('success')}}</div>
        @endif
        @if(Session('success'))
     <div>   {{Session('success')}}</div>
        @endif
        <input type="email" name="emial" id="email">
        <button type="submit">submit</button>
    </form>
</body>
</html>