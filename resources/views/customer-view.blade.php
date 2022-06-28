<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="container"> 
    <table class="table">
        <thead>
            <tr>
                <th>Email</th>
                <th>Address</th>
                <th>City</th>
                <th>State</th>
                <th>Zip</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($customers as $customer)
                
            
            <tr>
                <td >{{$customer->email}}</td>
                <td>{{$customer->address}}</td>
                <td>{{$customer->city}}</td>
                <td >{{$customer->State}}</td>
                <td>{{$customer->zip}}</td>
               
            </tr>
            @endforeach
        </tbody>
      </table>
    </div>
   
  </body>
</html>