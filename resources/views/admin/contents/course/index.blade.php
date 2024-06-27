@extends('admin.main')
@section('content')
<div class="pagetitle">
    <h1>course</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Pages</li>
        <li class="breadcrumb-item active">Blank</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="card">
    <div class="card-body">
      <a href="/admin/course/create" class="btn btn-primary my-2">+ Course</a>
        <table class="table">
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Kategori</th>
                <th>desc</th>
                <th>created_at</th>
                <th>update_at</th>
            </tr>
            @foreach($courses as $course)
            <tr>
                <td>1</td>
                <td>{{$course->name }}</td>
                <td>{{$course->category }}</td>
                <td>{{$course->desc }}</td>
                <td>{{$course->created_at }}</td>
                <td>{{$course->updated_at }}</td>
                <td><a href="" class="btn btn-warning">Edit</a>
                <td><a href="" class="btn btn-danger">Hapus</a>
            </td>
            </tr>
            @endforeach
        </table>
    </div>
    </div>
  </section>
@endsection