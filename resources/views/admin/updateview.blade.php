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
    <div>
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12">
                        <h1>Car Form</h1>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>


        <form action="{{url('update',$data->id)}}" method="post" enctype="multipart/form-data">

            @csrf
            <div class="input-group mb-3">
                <input type="text" class="form-control" name="Title"    value="{{$data->Title}}">
            </div>
            <div class="input-group mb-3">
                <input type="text" class="form-control" name="price" value="{{$data->price}}">
            </div>
            <div class="input-group mb-3">
                <label> old image</label>
                <!--input type="file" name="image"/-->
                <img height="200px" width="200px" src="/carimage/{{$data->image}}">
            </div>
            <div class="input-group mb-3">
                <label> new image</label>
                <input type="file" class="form-control" name="image"  value="{{$data->image}}">
            </div>
            <div class="input-group mb-3">
                <input type="text" class="form-control" name="description"  value="{{$data->description}}">
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



















