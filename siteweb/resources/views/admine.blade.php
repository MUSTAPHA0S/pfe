@foreach ($donneurs as $donneur)
<tr>
<td>{{donneur->nom}}</td>
<td> {{donneur->prenom}}</td>
<td> {{donneur->dateNaissance}}</td>
<td> {{donneur->telephone}}</td>
<td> {{donneur->email}}</td>
<td> {{donneur->dateNaissance}}</td>
</tr>
    
@endforeach