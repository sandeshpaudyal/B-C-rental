@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Add cars
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('cars.store') }}">
          <div class="form-group">
              @csrf
              <label for="name">Brand:</label>
              <input type="text" class="form-control" name="brand"/>
          </div>
          <div class="form-group">
              <label for="price">Model :</label>
              <input type="text" class="form-control" name="model"/>
          </div>
          <div class="form-group">
              <label for="quantity">Car type:</label>
              <input type="text" class="form-control" name="type"/>
          </div>
           <div class="form-group">
              <label for="quantity">Color:</label>
              <input type="text" class="form-control" name="color"/>
          </div>
           <div class="form-group">
              <label for="quantity">price:</label>
              <input type="text" class="form-control" name="price"/>
          </div>
          <button type="submit" class="btn btn-primary">Add</button>
      </form>
  </div>
</div>
@endsection