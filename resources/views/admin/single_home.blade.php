<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>{{$single_home->home_name}} Details</title>
</head>
<body>
    <div style="padding:80 160 50 160">
        <h4 style="text-align:center">{{$single_home->home_name}} Details</h4>
        <hr>
        <div>
            @if(Session::has('Success'))
            <div class="alert alert-success">
                {{ Session::get('Success') }}
            </div>
            @endif
        </div>
        <form  action="{{route('care_homes.update',$single_home->id)}}" method="update">   
            @csrf
            <div class="form-group">
                <label for="">Home Name</label>
                <input type="text" class="form-control" value="{{$single_home->home_name}}" name="home_name">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="email" class="form-control" value="{{$single_home->email}}" name="email" >
            </div>
            <div class="form-group">
                <label for="">Phone No</label>
                <input type="text" class="form-control" value="{{$single_home->phone_no}}" name="phone_no" >
            </div>
            <div class="form-group">
                <label for="">Address</label>
                <input type="text" class="form-control" value="{{$single_home->address1}}" name="address1" >
            </div>
            <div class="form-group">
                <label for="">Address(Optional)</label>
                <input type="text" class="form-control" value="{{$single_home->address2}}" name="address2">
            </div>
            <div class="form-group">
                <label for="">Postcode</label>
                <input type="text" class="form-control" value="{{$single_home->postcode}}" name="postcode" >
            </div>
            <div class="form-group">
                <label for="">City</label>
                <input type="text" class="form-control" value="{{$single_home->city}}" name="city" >
            </div>
            <div class="form-group">
                <label for="">Country</label>
                <input type="text" class="form-control" value="{{$single_home->country}}" name="country" >
            </div>
            <div class="form-group">
                <label for="">Contact Person Name</label>
                <input type="text" class="form-control" value="{{$single_home->contact_person_name}}" name="contact_person_name" >
            </div>
            <div class="form-group">
                <label for="">Contact Person Phone No</label>
                <input type="text" class="form-control" value="{{$single_home->contact_person_phone_no}}" name="contact_person_phone_no" >
            </div>
            <div class="form-group">
                <label for="">Contact Person Phone Email</label>
                <input type="email" class="form-control"  value="{{$single_home->contact_person_email}}"  name="contact_person_email" >
            </div>
            <input type="submit" class="btn btn-outline-success form-control" value="Update">
        </form>
    </div>
</body>
</html>