@extends('layouts.app')

@section('content')
<div class="lien-retour">
    <a href="{{ route('admin.gestion') }}">Retour à la page de gestion</a>
</div>
<div class="table-admin">
    <h1>Bannières</h1>

    <table class="table-element">
        <thead>
            <tr>
                <th>Image</th>
                <th>Titre</th>
                <th>Sous-titre</th>
                <th>Url</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
            <form action="{{ route('banniere.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="ajouter-produit">
                    <td><input type="file" class="form-control" id="image" name="image"></td>
                    <td><input type="text" name="titre"></td>
                    <td><input type="text" name="sous_titre"></td>
                    <td><input type="text" name="url"></td>
                    <td id="btn-msg"><button type="submit" class="btn btn-primary">Ajouter une bannière</button></td>
                </div>
            </form>

            @foreach($bannieres as $banniere)
            <tr>
                <td class="image-ban"><img src="{{ asset('storage/bannieres/' . $banniere->image) }}" alt=""></td>
                <td>{{ $banniere->titre }}</td>
                <td>{{ $banniere->sous_titre }}</td>
                <td>{{ $banniere->url }}</td>
                <td id="btn-sup-ban">
                    <form action="{{ route('banniere.supprimer', $banniere->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Supprimer</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var nbrBannieres = document.querySelectorAll('.image-ban').length;
        var btnSubmit = document.querySelector('button[type="submit"]');
        var message = document.querySelector('#btn-msg');
        console.log(btnSubmit);

        if (nbrBannieres > 3) {
            // Hide the submit button and display a message
            btnSubmit.style.display = 'none';

            // You may want to replace the line below with your own logic for displaying a message.
            // For simplicity, I'm creating a new element and appending it to the document body.
            var messageElement = document.createElement('p');
            messageElement.textContent = 'Vous avez atteint le nombre maximum de bannières.';
            messageElement.style.color = 'red';
            // insert the message element in the <td id="btn-msg">
            message.appendChild(messageElement); 
            

            // You may also want to disable the file input
            var fileInput = document.querySelector('input[type="file"]');
            fileInput.disabled = true;

            // You may also want to disable the other inputs
            var inputs = document.querySelectorAll('input[type="text"]');
            inputs.forEach(function(input) {
                input.disabled = true;
            });


        }
    });
</script>

@endsection