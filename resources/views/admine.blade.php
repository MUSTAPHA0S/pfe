<!DOCTYPE html>
<!-- Coding by CodingLab | www.codinglabweb.com -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!----======== CSS ======== -->
    <link rel="stylesheet" href="{{ asset('css1.css')}}">

    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <!--<title>Dashboard Sidebar Menu</title>-->
    <style>


        
        .table {
            height: 20vw;
            margin-top: 100px;
        }
    </style>
</head>

<body>
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <a class="navbar-brand" href="/siteweb/public">
                        <img class="logo" src="logo2.png" alt=".."></a> </span>
    
                <div class="text logo-text">
                    <span class="name">Don de vie</span>
                </div>
            </div>
    
            <i class='bx bx-chevron-right toggle'></i>
        </header>
    
        <div class="menu-bar">
            <div class="menu">
    
                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="/siteweb/public">
                            <i class='bx bx-home-alt icon'></i>
                            <span class="text nav-text">Acceuill</span>
                        </a>
                    </li>
    
                    <li class="nav-link">
                        <a href="admine">
                            <i class='bx  icon'></i>
                            <span class="text nav-text">Infos donneurs</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    


    @include('layouts.app')

<div class="position-absolute top-50 start-50 translate-middle">
    <h1  style="margin-top:10px;margin-bottom: 30px;margin-left: 10vw">Gestion des donneurs</h1>
    <button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="margin-left: 20vw">
        <i class="material-icons align-top "></i>
        Ajouter
      </button>
    <table class="table table-striped table-bordered">
      <thead>   
          <tr style="background-color: #435d7d">
            <th colspan="9" class="text-light" style="font-size: 25px">Liste des donneurs</th>
          </tr>
          <tr>
              <th>Nom</th>
              <th>Prenom</th>
              <th>Sexe</th>
              <th>Groupage</th>
              <th>Date de Naissance</th>
              <th>Téléphone</th>
              <th>Email</th>
              <th colspan="3">Actions</th>
          </tr>
      </thead>
      <tbody>
        @foreach ($donneurs as $donneur)
          <tr>
              <td>{{ $donneur->nom }}</td>
              <td>{{ $donneur->prenom }}</td>
              <td >{{ $donneur->sexe }}</td>
              <td >{{ $donneur->groupage }}</td>
              <td>{{ $donneur->dateNaissance }}</td>
              <td>{{ $donneur->telephone }}</td>
              <td>{{ $donneur->email }}</td>
              <td class="text-center">
                  <a href="javascript:void(0)" onclick="editdonneur({{ $donneur->id }})">
                      <img src="edit.png" alt="edit" width="25">
                  </a>
              </td>   
              


              <td class="text-center">
                  <a href="javascript:void(0)" onclick="deletedonneur({{ $donneur->id }})">
                      <img src="delete.png" alt="delete" width="25">
                  </a>
              </td>



              <td class="text-center">
                <a href="######">
                    <img src="delete.png" alt="delete" width="25">
                </a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>

</div>
                                                <!-- Modal -->

  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel" style="margin-left: 10vw">Ajouter donneur</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        
            
                            <div class="card-body">
                                <form method="POST" action="{{ route('admine.store') }}">
                                    @csrf
            
                                    <div class="row mb-3">
                                        <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Nom') }}</label>
            
                                        <div class="col-md-6">
                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
            
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="prenom" class="col-md-4 col-form-label text-md-end">{{ __('Prenom') }}</label>
            
                                        <div class="col-md-6">
                                            <input id="prenom" type="text" class="form-control @error('prenom') is-invalid @enderror" name="prenom" value="{{ old('prenom') }}" required >
            
                                            @error('prenom')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="sexe" class="col-md-4 col-form-label text-md-end">{{ __('sexe') }}</label>
            
                                        <div class="col-md-6">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="sexe"  value="Homme">
                                                <label class="form-check-label" for="inlineRadio1">Homme</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="sexe"  value="femme">
                                                <label class="form-check-label" for="inlineRadio2">Femme</label>
                                            </div>
                                            @error('sexe')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
            
                                    <div class="row mb-3">
                                        <label for="groupage" class="col-md-4 col-form-label text-md-end">{{ __('groupage sanguin') }}</label>
            
                                        <div class="col-md-6">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="groupage"  value="A+">
                                                <label class="form-check-label" for="inlineRadio1">A+</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="groupage"  value="A-">
                                                <label class="form-check-label" for="inlineRadio2">A-</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="groupage"  value="B+">
                                                <label class="form-check-label" for="inlineRadio1">B+</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="groupage"  value="B-">
                                                <label class="form-check-label" for="inlineRadio2">B-</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="groupage"  value="AB+">
                                                <label class="form-check-label" for="inlineRadio1">AB+</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="groupage"  value="AB-">
                                                <label class="form-check-label" for="inlineRadio2">AB-</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="groupage"  value="O+">
                                                <label class="form-check-label" for="inlineRadio1">O+</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="groupage"  value="O-">
                                                <label class="form-check-label" for="inlineRadio2">O-</label>
                                            </div>
                                            @error('groupage')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
            
                                    <div class="row mb-3">
                                        <label for="telephone" class="col-md-4 col-form-label text-md-end">{{ __('Telephone') }}</label>
            
                                        <div class="col-md-6">
                                            <input id="telephone" type="text" class="form-control @error('telephone') is-invalid @enderror" name="telephone" value="{{ old('telephone') }}" required autocomplete="telephone">
            
                                            @error('telephone')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
            
                                    <div class="row mb-3">
                                        <label for="dateNaissance" class="col-md-4 col-form-label text-md-end">{{ __('Date de naissance') }}</label>
            
                                        <div class="col-md-6">
                                            <input id="dateNaissance" type="date" class="form-control @error('dateNaissance') is-invalid @enderror" name="dateNaissance" value="{{ old('dateNaissance') }}" required autocomplete="dateNaissance">
            
                                            @error('dateNaissance')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Address E-Mail') }}</label>
            
                                        <div class="col-md-6">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
            
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </form>
                            </div>
                    </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
          <button type="submit" href="/store/{{$donneur->id}}" class="btn btn-primary">Ajouter donneur</button>
        </div>
      </div>
    </div>
  </div>

  

    

    
</body>
<script>
    const body = document.querySelector('body'),
        sidebar = body.querySelector('nav'),
        toggle = body.querySelector(".toggle"),
        searchBtn = body.querySelector(".search-box"),
        modeSwitch = body.querySelector(".toggle-switch"),
        modeText = body.querySelector(".mode-text");

    toggle.addEventListener("click", () => {
        sidebar.classList.toggle("close");
    })

    searchBtn.addEventListener("click", () => {
        sidebar.classList.remove("close");
    })

    modeSwitch.addEventListener("click", () => {
        body.classList.toggle("dark");

        if (body.classList.contains("dark")) {
            modeText.innerText = "Light mode";
        } else {
            modeText.innerText = "Dark mode";
        }
    });

    <script>
  function editdonneur(id){
    $('#editdonneurModal').modal('toggle');
    $.get('/admine/' + id, function(donneur){
      $('#nom').val(donneur.nom);
      $('#prenom').val(donneur.prenom);
      $('#telephone').val(donneur.telephone);
      $('#dateNaissance').val(donneur.dateNaissance);
      $('#email').val(donneur.email);
      $('#id').val(donneur.id);
    });
  }
  function deletedonneur(id){
    $('#deletedonneurModal').modal('toggle');
    $('#deletedonneurForm').attr('action', '/admine/' + id);
  }
</script>
</html>
