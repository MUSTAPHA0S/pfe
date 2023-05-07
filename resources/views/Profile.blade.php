
<!doctype html>
<html lang="en">

<head>
    <title>Profile</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    {{-- <style>
        @media only screen and (max-width:800px) {
            #no-more-tables tbody,
            #no-more-tables tr,
            #no-more-tables td {
                display: block;
            }
            #no-more-tables thead tr {
                position: absolute;
                top: -9999px;
                left: -9999px;
            }
            #no-more-tables td {
                position: relative;
                padding-left: 50%;
                border: none;
                border-bottom: 1px solid #eee;
            }
            #no-more-tables td:before {
                content: attr(data-title);
                position: absolute;
                left: 6px;
                font-weight: bold;
            }
            #no-more-tables tr {
                border-bottom: 1px solid #ccc;
            }
        }
    </style> --}}
</head>

<body>

@if(Auth::check())
<div class="table-responsive-sm">
    <table class="table bg-white">
        <tbody>
            <tr class="table-primary">
                <th scope="row">Nom</th>
                <td data-title="Nom">{{ Auth::user()->nom }}</td>
            </tr>
            <tr class="table-primary">
                <th scope="row">Prenom</th>
                <td data-title="Prenom">{{ Auth::user()->prenom }}</td>
            </tr>
            <tr class="table-primary">
                <th scope="row">sexe</th>
                <td data-title="sexe">{{ Auth::user()->sexe }}</td>
            </tr>
            <tr class="table-primary">
                <th scope="row">groupage sanguin</th>
                <td data-title="groupage sanguin">{{ Auth::user()->groupage }}</td>
            </tr>
            <tr class="table-primary">
                <th scope="row">Numero de telephone</th>
                <td data-title="Numero de telephone">{{ Auth::user()->telephone }}</td>
            </tr>
            <tr class="table-primary">
                <th scope="row">Date de naissance</th>
                <td data-title="Date de naissance">{{ Auth::user()->dateNaissance }}</td>
            </tr>
            <tr class="table-primary">
                <th scope="row">Email</th>
                <td data-title="Email">{{ Auth::user()->email }}</td>
            </tr>
        </tbody>
    </table>
</div>
@endif
</body>
</html>
