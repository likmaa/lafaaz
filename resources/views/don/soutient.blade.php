@extends('layouts.header')
@section('title', 'Pour soutient')
@section('content')

<section class="rejoindreSection1">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h1 class="py-5 text-center text-grey-500">Donation pour soutien</h1>
                @if(session()->has('success'))
                <div class="alert alert-success mb-0" style="border-radius: unset;">
                    {{ session('success') }}
                </div>
                @elseif(session()->has('danger'))
                <div class="alert alert-danger mb-0" style="border-radius: unset;">
                    {{ session('danger') }}
                </div>
                @else
                <form method="POST" action="{{route('dons')}}" class="border-light" id="register">
                    @csrf
                    <input type="hidden" value="1">
                    <input type="hidden" value="" name="ts" id="h1">
                    <div class="row my-2">
                        <div class="mb-3 col-lg-6 ">
                            <label for="nom" class="form-label">Nom*</label>
                            <input type="text" placeholder="Ex: ZANNOU" class="form-control @error('name') is-invalid @enderror" id="nom" aria-describedby="textHelp" name="nom" value="{{ old('name') }}" autocomplete="name" autofocus>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="mb-3 col-lg-6 ">
                            <label for="prenom" class="form-label">Prenoms*</label>
                            <input type="text" placeholder="Ex: Arnaud" class="form-control @error('prenom') is-invalid @enderror" id="prenom" aria-describedby="textHelp" name="prenom" value="{{ old('prenom') }}" autocomplete="prenom">

                            @error('prenom')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row my-2">
                        <div class="mb-3 col-lg-6">
                            <label for="tel" class="form-label">Numéro de téléphone*</label>
                            <input type="tel" placeholder="Ex: +229 60000000" class="form-control @error('tel') is-invalid @enderror" id="tel" aria-describedby="textHelp" name="tel" value="{{ old('tel') }}" autocomplete="tel">

                            @error('tel')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="mb-3 col-lg-6">
                            <label for="email" class="form-label">Email*</label>
                            <input type="email" placeholder="Ex: arnaudzannou@gmail.com" class="form-control @error('email') is-invalid @enderror" id="email" aria-describedby="emailHelp" name="email" value="{{ old('email') }}" autocomplete="email">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row my-2">
                        <div class="mb-3 col-lg-6">
                            <label for="exampleInputtext4" class="form-label">Adresse</label>
                            <input type="text" placeholder="Ex: Cotonou, Bénin" class="form-control @error('name') is-invalid @enderror" id="exampleInputtext4" aria-describedby="textHelp" name="adresse" value="{{ old('adresse') }}"  autocomplete="adresse">
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3 col-lg-6">
                            <label for="montant" class="form-label">Montant*</label>
                            <input type="number" placeholder="Ex: 10000" class="form-control @error('name') is-invalid @enderror" id="montant" aria-describedby="textHelp" name="montant" value="{{ old('montant') }}" required autocomplete="montant" step="100" min="100">

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row my-2">
                        <div class="mb-3 col-lg-12">
                            <label for="message" class="form-label">Message</label>
                            <textarea name="description" placeholder="Ex: C'est toujours un plaisir et un honneur d'aider et de soutenir les orphelins" id="" cols="" rows="5" class="form-control @error('name') is-invalid @enderror"></textarea>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <button class=" mt-5 py-2 w-100" type="submit">Effectuer le paiement</button>

                </form>
                @endif
            </div>
        </div>
    </div>
</section>

@endsection

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.kkiapay.me/k.js"></script>
<script>
    $(document).ready(function() {

        $("#register").submit(function(event) {

            var url = $(this).attr('data-action');
            $.ajax({
                url: '/don/soutient',
                method: 'POST',
                data: new FormData(this),
                dataType: 'JSON',
                contentType: false,
                cache: false,
                processData: false,
                success: function(response) {}
            });
            openKkiapayWidget({
                amount: $('#montant').val(),
                position: "center",
                name: $('#nom').val(),
                email: $('#email').val(),
                phone: $('#tel').val(),
                callback: "",
                theme: "#48746D",
                key: "1283ee43a7e00476a6c179aa602b83f234d4a934"
            });
            
            addSuccessListener(response => {
                $('#h1').val(response.transactionId);
                event.currentTarget.submit();
            });
            addFailedListener(error => {});

            event.preventDefault();
        });
    })
</script>