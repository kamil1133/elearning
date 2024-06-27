@extends('admin.main')
@section('content')
<div class="pagetitle">
    <h1>student</h1>
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
        
        <form action="/admin/course/store" method="post" class="mt-3">
            @csrf
            <div class="mb-2">
                <label for="name" class="form-label">Nama course</label>
                <input type="name" name="name" id="name" class="form-control">
            </div>

            <div class="mb-2">
              <label for="kategori" class="form-label">kategori</label>
              <input type="kategori" name="kategori" id="kategori" class="form-control">
          </div>

            <div class="mb-2">
                <label for="desc" class="form-label">Deskripsi</label>
                <input type="desc" name="desc" id="desc" class="form-control">
            </div>

            

            <div class="mb-4">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>


    </div>
    </div>
  </section>
@endsection