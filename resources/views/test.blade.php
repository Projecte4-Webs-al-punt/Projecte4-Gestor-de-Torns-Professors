@extends('layouts.app')
@section('content')
<form method="POST" action="{{ route('upload') }}" enctype="multipart/form-data">
  @csrf
    <label for="image">Select a file:</label>
    <input type="file" id="image" name="image"><br><br>
    <input type="submit">
  </form>
@endsection
