@extends('layouts.body')

@section('Title')
    Admin
@endsection




@section('content')
<div id="deleteStudentModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="width: 1000px">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Supprimer Etudiant</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Voulez-vous vraiment supprimer cet Etudiant ?</p>
          <small class="font-weight-bold" style="color:#edb200;">
              <i class="fas fa-exclamation-triangle"></i>
              Cette action ne peut pas être annulée !
          </small>
          <div class="modal-footer">
            <a href="{{ Route('admine') }}" class="btn btn-secondary" >Annuler</a>
            <form action="{{ Route('admin_delete',['id' => $id]) }}"  method="POST">
              @csrf
              @method('DELETE')
              <input type="submit" value="Supprimer" class="btn btn-danger">
            </form>
            
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection