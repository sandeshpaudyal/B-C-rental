@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<center>
<div class="container">
  <div class="card uper" style="margin:100px;">
    <div class="card-header" style="background:#fff;padding:20px;">
      <h4 class="text-info">
        <i class="fas fa-plus"></i>&nbsp;
        Add cars
      </h4>
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
        <form method="post" action="/cars/store"  enctype="multipart/form-data">
            <div class="form-group">
                @csrf
                <label for="name">Brand:</label>
                <input type="text" class="form-control" style="width:450px;" placeholder="Hyundai" name="brand"/>
            </div>
            <div class="form-group">
                <label for="price">Model :</label>
                <input type="text" class="form-control" style="width:450px;" placeholder="PRO"  name="model"/>
            </div>
            <div class="form-group">
                <label for="quantity">Car type:</label>
                <input type="text" class="form-control" style="width:450px;" placeholder="Hatchback"  name="type"/>
            </div>
             <div class="form-group">
                <label for="quantity">Color:</label>
                <input type="text" class="form-control" style="width:450px;" placeholder="Navy Blue"  name="color"/>
            </div>
             <div class="form-group">
                <label for="quantity">Price:</label>
                <input type="text" class="form-control" style="width:450px;" placeholder="35,000,000"  name="price"/>
            </div><br>

             <div class="form-group">
                <label for="quantity">Image:</label>
                <input type="file" name="car_image" />
            </div>
            <button type="submit" class="btn btn-success" style="border-radius:100px;padding:5px 15px;">
              <i class="fas fa-save"></i>&nbsp;
              Save
            </button>
        </form>
    </div>
  </div>
</div>
</center>
@endsection