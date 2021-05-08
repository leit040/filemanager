@extends('layout')
@section('content')

    <table border="2">
        <tr>
            <th>id</th>
            <th>filename</th>
            <th>url</th>
            <th>CloudService</th>
            <th>Created-at</th>
            <th>Updated_at</th>
            <th>action</th>
        </tr>

            @foreach($files as $file)
            <tr>
        <td>{{$file->id}}</td>
        <td>{{$file->real_file_name}}</td>
        <td>{{$file->file_url}}</td>
        <td>{{$file->CloudService}}</td>
        <td>{{$file->created_at}}</td>
        <td>{{$file->updated_at}}</td>
        <td><a href="/delete/{{$file->id}}">Delete</a></td>
        </tr>
            @endforeach

    </table>

    <div class="form">
        <form action="/save"  method="post" enctype="multipart/form-data" class="main_form">
            @csrf
            <input type="file" name="file" >
            <input type="submit"value="Save">
        </form>
    </div>
    </div>
@endsection
