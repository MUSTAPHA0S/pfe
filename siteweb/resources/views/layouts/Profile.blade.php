<table class="table">
    <tr>
        <th>id</th>
        <th>nom</th>
        <th>prenom</th>
    </tr>

    <tr>
        <td>{{ $user->id }}</td>
        <td>{{ $user->nom }}</td>
        <td>{{ $user->prenom }}</td>
    </tr>
</table>
@if(Auth::check())
<p>Nom : {{ Auth::user()->nom }} !</p>
<p>Email : {{ Auth::user()->email }}</p>
@endif
