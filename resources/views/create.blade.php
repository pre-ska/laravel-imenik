@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<!-- <div class="card uper">
  <div class="card-header">
    Novi kontakt
  </div>
  <div class="card-body"> -->
    <!-- @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif -->

      <form method="post" action="{{ route('contacts.store') }}" class=" border border-light p-5">
    <h3 class="text-center">Novi kontakt</h3>

          <!-- <div class="form-group">
              @csrf
              <label for="name">ime</label>
              <input type="text" class="form-control" name="ime"/>
          </div>
          <div class="form-group">
              <label for="price">prezime</label>
              <input type="text" class="form-control" name="prezime"/>
          </div> -->
          <div class="md-form">
            @csrf
            <!-- <i class="fas fa-user prefix"></i> -->
            <input type="text" id="ime" class="form-control" name="ime">
            <label for="ime">Ime</label>
          </div>
          <div class="md-form">
            <!-- <i class="fas fa-user prefix"></i> -->
            <input type="text" id="prezime" class="form-control" name="prezime">
            <label for="prezime">Prezime</label>
          </div>
          <div class="md-form">
            <!-- <i class="fas fa-envelope prefix"></i> -->
            <input type="text" id="email" class="form-control" name="email">
            <label for="email">E-mail adresa</label>
          </div>
          <div class="md-form">
            <!-- <i class="fas fa-phone prefix"></i> -->
            <input type="text" id="telefon" class="form-control" name="telefon">
            <label for="telefon">Telefonski broj</label>
          </div>
          <!-- <div class="form-group">
              <label for="quantity">email</label>
              <input type="text" class="form-control" name="email"/>
          </div> -->
          <!-- <div class="form-group">
              <label for="quantity">telefon</label>
              <input type="text" class="form-control" name="telefon"/>
          </div> -->
          <div style='display: flex;align-items: center;justify-content: center;'>
          <button type="submit" class="btn btn-primary">Spremi kontakt</button>
          <a href="/home" class="btn btn-secondary">Odustani</a>
          </div>
          <!-- <button onclick="window.location.href = '/home';" class="btn btn-secondary">Odustani</button> -->
      </form>
  <!-- </div>
</div> -->
@endsection