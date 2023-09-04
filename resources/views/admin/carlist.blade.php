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


    <form action="{{url('uploadcar')}}" method="post" enctype="multipart/form-data">

        @csrf
        <div class="input-group mb-3">
            <input style="color: whitesmoke" type="text" class="form-control" name="title"  autofocus  placeholder="Car Name">
        </div>
        <div class="input-group mb-3">
            <input style="color: whitesmoke" type="text" class="form-control" name="price" placeholder="Estimated Price">
        </div>
        <div class="input-group mb-3">
            <input style="color: whitesmoke" type="file" class="form-control" name="image"  placeholder="Image">
        </div>
        <div class="input-group mb-3">
            <input style="color: whitesmoke" type="text" class="form-control" name="description"  placeholder="Description">
        </div>
        <div class="col-8">
            <button type="submit" class="btn btn-primary btn-block">Add Car</button>

        </div>
    </form>
    <div>
        <table bgcolor="black">
            <tr>
                <th style="padding: 30px">Car Name</th>
                <th style="padding: 30px">Price</th>
                <th style="padding: 30px">Description</th>
                <th style="padding: 30px">image</th>
                <th style="padding: 30px">Action</th>
                <th style="padding: 30px">Action 2</th>

            </tr>
            @foreach($data as $data)
                <tr align="center">
                    <td> {{$data->title}}</td>
                    <td>{{$data->price}}</td>
                    <td>{{$data->description}}</td>
                    <td><img height="200px" width="200px" src="carimage/{{$data->image}}" ></td>
                    <td><a href="{{url('deletecar',$data->id)}}">Delete</a></td>
                    <td><a href="{{url('updateview',$data->id)}}">Update</a></td>

                </tr>
            @endforeach
        </table>
    </div>

</div>
</div>
</body>
@include('admin.adminscript')
