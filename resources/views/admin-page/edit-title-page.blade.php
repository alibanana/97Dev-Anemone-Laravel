@extends('template/admin-template')
@section('title', 'Edit Title')

@section('content')
  <div class="container-fluid">
      <h1 class="h3 mb-2 text-gray-800">Edit Title</h1>
      <div class="card shadow mb-4">
        {{-- <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div> --}}

        @if(session('success'))
          <div class="alert alert-success" role="alert">
            {{session('success')}}
          </div>
        @endif

        @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
        @endif
        
        <div class="card-body">
          <form action="/admin/update-title" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
              <div class="form-group">
                <label for="title">Title</label>
                <input id="text" type="title" class="form-control" name="title"  placeholder="Web's Title" required/>
              </div>
              {{-- <div class="form-group">
                <label for="category_id">Category</label>
                <select class="form-control" id="category_id" name="category_id" required>
                  <!-- <option>None selected</option> -->
                  @foreach($categories as $category)
                    <option value="{{$category->id}}" selected>{{$category->category_name}}</option>
                  @endforeach
                </select>
              </div> --}}
              <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name=description rows="3" placeholder="Product's Description" required></textarea>
              </div>
              <div class="form-group">
                <label for="description">Photo</label>
                <div class="input-group mb-3">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="file" name="file[]" accept="image/jpg, image/jpeg, image/png" multiple required>
                    <label class="custom-file-label" for="file">Choose Photo (.jpg/.jpeg/.png)</label>
                  </div>
                </div>
              </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
  </div>

@endsection