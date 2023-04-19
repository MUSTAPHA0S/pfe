





<table class="table">
<tr>
    <th>id</th>
    <th>nom</th>
    <th>prenom</th>
</tr>   

    <tr>
        <td>{{$User->id}}</td>
        <td>{{$User->nom}}</td>
        <td>{{$User->prenom}}</td>
    </tr>
</table>
@if(Auth::check()) 
    <p>nom : {{ Auth::user()->nom }} !</p>
    <p>Email : {{ Auth::user()->email }}</p>
@endif
