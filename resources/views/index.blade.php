@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }

.thead-dark th{

  color: blue;
  background-color: red;
  border-color: yellow;

}

</style>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif

  <div  class="pagination"style="display:inline-block">
{{ $contacts->links() }}
</div>
<a href="/contacts/create" style="background:transparent; float:right;"  class="btn btn-light">Novi kontakt</a>
  <!-- <a href="/contacts/create" style="float:right; margin: 10px 0 30px 0;" style="background:transparent"  class="btn btn-light">Novi kontakt</a> -->

  <!-- <button onclick="window.location.href = '/contacts/create';" style="float:right; margin: 10px 0 30px 0;" class="btn btn-primary btnX">Novi kontakt</button> -->
  <table class="table table-striped" style="margin-top:30px;">
    <thead class="thead-dark text-center" style='  color: #F5F5F5; background-color: #6E7A87; border-color: #F5F5F5' >
        <tr>
          <td>ID</td>
          <td>Ime</td>
          <td>Prezime</td>
          <td>Email</td>
          <td>Telefon</td>
          <td colspan="2">Akcije</td>
        </tr>
    </thead>
    <tbody  class="thead-dark text-center">
        @foreach($contacts as $contact)
        <tr>
            <td>{{$contact->id}}</td>
            <td>{{$contact->ime}}</td>
            <td>{{$contact->prezime}}</td>
            <td>{{$contact->email}}</td>
            <td>{{$contact->telefon}}</td>
            <!-- <td><a href="{{ route('contacts.edit',$contact->id)}}" class="btn btn-primary">Uredi</a></td> -->
            <td><a href="{{ route('contacts.edit',$contact->id)}}"><i class="fas fa-edit fa-2x indigo-text"></i></a></td>
            <td>
                <form action="{{ route('contacts.destroy', $contact->id)}}" method="post" id='form'>
                  @csrf
                  @method('DELETE')
                  <!-- <a  onclick="document.getElementsByTagName('form')[0].submit();" href="" ><i class="fas fa-trash-alt fa-2x red-text"></i></a> -->
                  <button onclick="return confirm('Brisanje kontakta.\nDali ste sigurni?')" style="border:none; color:red; background:none; cursor: pointer;  outline:none;" type="submit"><i class="fas fa-trash-alt fa-2x red-text"></i></button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>


<div>
<!-- <div  class="pagination"style="display:inline-block">
{{ $contacts->links() }}
</div>
<a href="/contacts/create" style="background:transparent; float:right;"  class="btn btn-light">Novi kontakt</a> -->
@endsection