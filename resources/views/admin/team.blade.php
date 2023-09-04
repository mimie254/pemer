<x-app-layout>

</x-app-layout>



<!DOCTYPE html>
<html lang="en">
<head>

    @include('admin.admincss')


</head>

<body>
<div class="container-scroller">

    @include('admin.navbar')



<form action="{{url('/uploadteam')}}" method="post"  enctype="multipart/form-data" >
@csrf
    <div>

        <label>Name</label>
        <input style="color: blueviolet" type="text" name="name" required="" placeholder="Enter Name">

    </div>
    <div>

        <label>Position</label>
        <input style="color: blueviolet" type="text" name="position" required="" placeholder="Enter Position">

    </div>
    <div>

        <input  type="file" name="image" required="" />

    </div>
    <div>


        <input  type="submit" value="save">

    </div>
</form>
<div>
    <table bgcolor="black">

        <tr>
            <th style="padding: 30px">name</th>
            <th style="padding: 30px">position</th>
            <th style="padding: 30px">image</th>
            <th style="padding: 30px">Action</th>
            <th style="padding: 30px">Action 2</th>
        </tr>
        @foreach($data as $data)
        <tr align="center">
            <td>{{$data->name}}</td>
            <td>{{$data->position}}</td>
            <td><img height="100px" width="100px" src="/teamimage/{{$data->image}}"></td>
            <td><a href="{{url('/updateteam',$data->id)}}">Update</a> </td>
            <td><a href="{{url('/deleteteam',$data->id)}}">Delete</a> </td>
        </tr>
        @endforeach
    </table>
</div>



</div>

@include('admin.adminscript')
</body>


<!-- partial -->

<!-- partial -->

<!-- container-scroller -->
<!-- plugins:js -->

<!-- End custom js for this page -->



















