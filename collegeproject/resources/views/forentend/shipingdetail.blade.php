<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sender Information</title>
</head>
<body>
    <div class="container">
        <h1 style="text-align: center ">SENDER INFORMATION</h1>
        <table class="table my-5">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Company Name</th>
                    <th>City</th>
                    <th>Street</th>
                    <th>Postal Code</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>created_at</th>
                    <th>updated_at</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($senderinfo as $senderinfo)
                <tr>
                    <td>{{$senderinfo->id}}</td>
                    <td>{{$senderinfo->name}}</td>
                    <td>{{$senderinfo->companyname}}</td>
                    <td>{{$senderinfo->city}}</td>
                    <td>{{$senderinfo->street}}</td>
                    <td>{{$senderinfo->postalcode}}</td>
                    <td>{{$senderinfo->email}}</td>
                    <td>{{$senderinfo->phonenumber}}</td>
                    <td>{{$senderinfo->created_at}}</td>
                    <td>{{$senderinfo->updated_at}}</td>
            </tr>
          
            @endforeach
            </tbody>
        </table>
        <table class="table my-5">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Company Name</th>
                    <th>City</th>
                    <th>Street</th>
                    <th>Postal Code</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>created_at</th>
                    <th>updated_at</th>
                </tr>
            </thead>
            <tbody>
                {{-- @foreach ($senderinfo as $senderinfo)
                <tr>
                    <td>{{$senderinfo->id}}</td>
                    <td>{{$senderinfo->name}}</td>
                    <td>{{$senderinfo->companyname}}</td>
                    <td>{{$senderinfo->city}}</td>
                    <td>{{$senderinfo->street}}</td>
                    <td>{{$senderinfo->postalcode}}</td>
                    <td>{{$senderinfo->email}}</td>
                    <td>{{$senderinfo->phonenumber}}</td>
                    <td>{{$senderinfo->created_at}}</td>
                    <td>{{$senderinfo->updated_at}}</td>
            </tr>
          
            @endforeach --}}
            </tbody>
        </table>
    </div>
</body>
</html>