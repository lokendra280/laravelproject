<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1 style="text-align: center ">WELCOME TO REGISTRATION DETAIL PANNEL</h1>
        <table class="table my-5">
            <thead>
                <tr>
                    <th>id</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Password</th>
                    <th>created_at</th>
                    <th>updated_at</th>
                </tr>
            </thead>
            <tbody>
             @foreach ($message as $message)
                <tr>
                    <td>{{$message->id}}</td>
                    <td>{{$message->firstname}}</td>
                    <td>{{$message->lastname}}</td>
                    <td>{{$message->email}}</td>
                    <td>{{$message->phonenumber}}</td>
                    <td>{{$message->password}}</td>
                    <td>{{$message->created_at}}</td>
                    <td>{{$message->updated_at}}</td>
                    
                </td>
                <td>
                   
                </td>
            </tr>
           
            @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>