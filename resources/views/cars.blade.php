@extends('layouts.app')

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
  <div class="card-body" style="background:#f5f5f5;">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="/cars/store">
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
              <label for="quantity">Price:</label>
              <input type="text" class="form-control" name="price"/>
          </div>
          <button type="submit" class="btn btn-success">
            <i class="fas fa-save"></i>&nbsp;
            Save
          </button>
      </form>
  </div>
</div>
@endsection