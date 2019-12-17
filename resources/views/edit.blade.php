@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Uredi kontakt
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
      <form method="post" action="{{ route('contacts.update', $contact->id) }}">
          <div class="form-group">
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
          </div>
          <button type="submit" class="btn btn-primary">Ažuriraj kontakt</button>
          <a href="/home" class="btn btn-secondary ">Odustani</a>
          <!-- <button onclick="window.location.href = '/home';" class="btn btn-secondary">Odustani</button> -->
      </form>
  </div>
</div>
@endsection