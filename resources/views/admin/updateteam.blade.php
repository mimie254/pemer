<x-app-layout>

</x-app-layout>



<!DOCTYPE html>
<html lang="en">
<head>

    <base href="/public">
    @include('admin.admincss')
</head>

<body>
<div class="container-scroller">
    @include('admin.navbar')

    <form action="{{url('/updateteammember',$data->id)}}" method="post" enctype="multipart/form-data">

        @csrf
        <div class="input-group mb-3">
            <label> Name</label>
            <input style="color: whitesmoke" type="text" class="form-control" name="name"    value="{{$data->name}}">
        </div>
        <div class="input-group mb-3">
            <label> Position</label>
            <input style="color: whitesmoke" type="text" class="form-control" name="position" value="{{$data->position}}">
        </div>
        <div class="input-group mb-3">
            <label> old image</label>
            <!--input type="file" name="image"/-->
            <img height="200px" width="200px" src="/teamimage/{{$data->image}}">
        </div>
        <div class="input-group mb-3">
            <label> new image</label>
            <input style="color: whitesmoke" type="file" class="form-control" name="image"  value="{{$data->image}}">
        </div>

        <div class="col-8">
            <button type="submit" class="btn btn-primary btn-block">Update CarList</button>

        </div>
    </form>
    <div>

</div>

@include('admin.adminscript')
</body>


<!-- partial -->

<!-- partial -->

<!-- container-scroller -->
<!-- plugins:js -->

<!-- End custom js for this page -->



















