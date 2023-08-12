<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>
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
    USERS
    <div style="position :relative; top: 60px; right: -150px">
    <table bgcolor="#ffd700" border="3px">
        <tr>
            <th style="padding: 30px">name</th>
            <th style="padding: 30px">email</th>
            <th style="padding: 30px">Action</th>
        </tr>
        @foreach($data as $data)
        <tr align="center">
            <td>{{$data->name}}</td>
            <td>{{$data->email}}</td>

            @if($data->usertype=="0")
            <td><a href="{{url('deleteusers', $data->id)}}">Delete</a></td>
            @else
            <td><a >Forbidden</a></td>

            @endif
        </tr>
        @endforeach
    </table>
    </div>
</div>
</body>
@include('admin.adminscript')
</body>
</html>
