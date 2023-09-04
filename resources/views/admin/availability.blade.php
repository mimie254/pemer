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
<div style="position: relative; top: 70px; right: -150px;">
    <table bgcolor="gray" border="1px">
        <tr>
            <th style="padding: 40px;">name</th>
            <th style="padding: 40px; ">email</th>
            <th style="padding: 40px;" >phone number </th>
            <th style="padding: 40px; ">message</th>
        </tr>
         @foreach($data  as $data)
        <tr align="center" >
            <td>{{$data->name}}</td>
            <td>{{$data->email}}</td>
            <td>{{$data->phone_number}}</td>
            <td>{{$data->message}}</td>
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



















