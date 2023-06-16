<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Homes</title>
</head>
<body>
    <div style="margin: 80 150 70 150">
        <button style="float: right;" type="button" class="btn btn-success">
            <a href="{{ route('care_homes.create') }}" style="color: white; text-decoration: none;">Create New Home</a>
        </button>
        <br>
        <br>
        <br>
        <div>   
            <table class="table">
                <thead>
                  <tr>
                    <th>Home name</th>
                    <th>Email</th>
                    <th>Phone No</th>
                    <th>Contact Person</th>
                    <th>Contact Person Email</th>
                    <th>Contact Person Phone No</th>
                    <th>Action</th>
                  </tr>
                </thead>
                @foreach ($homes as $home)
                <tbody>
                  <tr>
                    <td>{{$home->home_name}}</td>
                    <td>{{$home->email}}</td>
                    <td>{{$home->phone_no}}</td>
                    <td>{{$home->contact_person_name}}</td>
                    <td>{{$home->contact_person_phone_no}}</td>
                    <td>{{$home->contact_person_email}}</td>
                    <td>
                        <button class="btn btn-success" > <a href="{{ route('care_homes.show',$home->id) }}" style="color: white; text-decoration: none;">View/Edit</a></button>
                        <button class="btn btn-danger"  value="{{$home->id}}">Delete</button>
                    </td>
                  </tr>           
                </tbody>
                @endforeach
              </table>  
    </div>  
</body>
</html>