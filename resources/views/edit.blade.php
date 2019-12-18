@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<!-- <div class="card uper">
  <div class="card-header">
    Uredi kontakt
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

      <form method="post" action="{{ route('contacts.update', $contact->id) }}" class="border border-light p-5">
    <h3 class="text-center">Ažuriranje kontakta</h3>

          <div class="md-form">
            @csrf
            @method('PATCH')
            <div>
            <i class="fas fa-user prefix active"></i>
            <input autofocus type="text" id="ime" class="form-control" value="{{$contact->ime}}" name="ime">
            <label class="active" for="ime">Ime</label>
            </div>
          </div>
          <div class="md-form">
            <i class="fas fa-user prefix active"></i>
            <input autofocus type="text" id="prezime" class="form-control" value="{{$contact->prezime}}" name="prezime">
            <label class="active" for="prezime">Prezime</label>
          </div>
          <div class="md-form">
            <i class="fas fa-envelope prefix active"></i>
            <input autofocus type="text" id="email" class="form-control" value="{{$contact->email}}" name="email">
            <label class="active" for="email">E-mail adresa</label>
          </div>
          <div class="md-form">
            <i class="fas fa-phone prefix active"></i>
            <input autofocus type="text" id="telefon" class="form-control" value="{{$contact->telefon}}" name="telefon">
            <label class="active" for="telefon">Telefonski broj</label>
          </div>



          <!-- <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="name">ime</label>
              <input type="text" class="form-control" name="ime" value="{{$contact->ime}}"/>
          </div>
          <div class="form-group">
              <label for="price">prezime</label>
              <input type="text" class="form-control" name="prezime" value="{{$contact->prezime}}"/>
          </div>
          <div class="form-group">
              <label for="quantity">email</label>
              <input type="text" class="form-control" name="email" value="{{$contact->email}}"/>
          </div>
          <div class="form-group">
              <label for="quantity">telefon</label>
              <input type="number" class="form-control" name="telefon" value="{{$contact->telefon}}"/>
          </div> -->
          <div style='display: flex;align-items: center;justify-content: center;'>
            <button type="submit" class="btn btn-primary">Ažuriraj kontakt</button>
            <a href="/home" class="btn btn-secondary ">Odustani</a>
          </div>
          <!-- <button onclick="window.location.href = '/home';" class="btn btn-secondary">Odustani</button> -->
      </form>
  <!-- </div>
</div> -->
@endsection