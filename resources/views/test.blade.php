@extends('layouts.app')
@section('content')
<!-- <form method="POST" action="" enctype="multipart/form-data">
  
    <label for="image">Select a file:</label>
    <input type="file" id="image" name="image"><br><br>
    <input type="submit">
  </form> -->
  <div class="card-body">
    <form method="POST" enctype="multipart/form-data" id="upload-image" action="{{ url('upload') }}" >
      @csrf
        <div class="row">

            <div class="col-md-12">
                <div class="form-group">
                    <input type="file" name="image" placeholder="Choose image" id="image">
                @error('image')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
                </div>
            </div>
               
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary" id="submit">Submit</button>
            </div>
        </div>     
    </form>

</div>
@endsection
