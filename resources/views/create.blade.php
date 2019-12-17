@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Novi kontakt
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
      <form method="post" action="{{ route('contacts.store') }}">

          <div class="form-group">
              @csrf
              <label for="name">ime</label>
              <input type="text" class="form-control" name="ime"/>
          </div>
          <div class="form-group">
              <label for="price">prezime</label>
              <input type="text" class="form-control" name="prezime"/>
          </div>
          <div class="form-group">
              <label for="quantity">email</label>
              <input type="text" class="form-control" name="email"/>
          </div>
          <div class="form-group">
              <label for="quantity">telefon</label>
              <input type="text" class="form-control" name="telefon"/>
          </div>
          <button type="submit" class="btn btn-primary">Spremi kontakt</button>
          <a href="/home" class="btn btn-secondary ">Odustani</a>
          <!-- <button onclick="window.location.href = '/home';" class="btn btn-secondary">Odustani</button> -->
      </form>
  </div>
</div>
@endsection