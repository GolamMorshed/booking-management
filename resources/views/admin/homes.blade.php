<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Homes</title>
</head>
<body>
    <div style="margin: 160 150 70 150">
        <button  style="float: right;" type="button" class="btn btn-success">Create New Home</button>
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
                        <button class="btn btn-success">View</button>
                        <button class="btn btn-warning">Edit</button>
                        <button class="btn btn-danger">Delete</button>
                    </td>
                  </tr>           
                </tbody>
                @endforeach
              </table> 
           

            @if(Session::has('Success'))
            <div class="alert alert-success">
                {{ Session::get('Success') }}
            </div>
            @endif
        </div>

        <div style="magin:30 0 0 0">
            <form  action="{{route('care_homes.store')}}" method="post">
               
                @csrf
                <div class="form-group">
                    <label for="">Home Name</label>
                    <input type="text" class="form-control" name="home_name" required>
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" class="form-control" name="email" required>
                </div>
                <div class="form-group">
                    <label for="">Phone No</label>
                    <input type="text" class="form-control" name="phone_no" required>
                </div>
                <div class="form-group">
                    <label for="">Address</label>
                    <input type="text" class="form-control" name="address1" required>
                </div>
                <div class="form-group">
                    <label for="">Address(Optional)</label>
                    <input type="text" class="form-control" name="address2">
                </div>
                <div class="form-group">
                    <label for="">Postcode</label>
                    <input type="text" class="form-control" name="postcode" required>
                </div>
                <div class="form-group">
                    <label for="">City</label>
                    <input type="text" class="form-control" name="city" required>
                </div>
                <div class="form-group">
                    <label for="">Country</label>
                    <input type="text" class="form-control" name="country" required>
                </div>
                <div class="form-group">
                    <label for="">Contact Person Name</label>
                    <input type="text" class="form-control" name="contact_person_name" required>
                </div>
                <div class="form-group">
                    <label for="">Contact Person Phone No</label>
                    <input type="text" class="form-control" name="contact_person_phone_no" required>
                </div>
                <div class="form-group">
                    <label for="">Contact Person Phone Email</label>
                    <input type="email" class="form-control" name="contact_person_email" required>
                </div>
                <input type="submit" class="btn btn-outline-success form-control" value="Submit">
            </form>
        </div>
        
    </div>  
</body>
</html>