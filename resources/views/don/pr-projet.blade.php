@extends('layouts.header')
@section('title', 'Pour projet')
@section('content')

<section class="rejoindreSection1">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h1 class="py-5 text-center text-grey-500">Donation pour projet</h1>
                @if(session()->has('success'))
                <div class="alert alert-success mb-0" style="border-radius: unset;">
                    {{ session('success') }}
                </div>
                @elseif(session()->has('danger'))
                <div class="alert alert-danger mb-0" style="border-radius: unset;">
                    {{ session('danger') }} 
                </div>
                @else
                <form method="POST" action="{{route('donpr')}}" class="border-light" id="register">
                    @csrf
                    <input type="hidden" value="1">
                    <input type="hidden" value="" name="ts" id="h1">
                    <div class="row my-2">
                        <div class="mb-3 col-lg-6 ">
                            <label for="nome" class="form-label">Nom et Prénoms*</label>
                            <input type="text" placeholder="Ex: John Doe" class="form-control @error('name') is-invalid @enderror" id="nom" aria-describedby="textHelp" name="nom" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="mb-3 col-lg-6">
                            <label for="tel" class="form-label">Numéro de téléphone*</label>
                            <input type="tel" placeholder="Ex: 00229 60000000" class="form-control @error('tel') is-invalid @enderror" id="tel" aria-describedby="textHelp" name="tel" value="{{ old('tel') }}" required autocomplete="tel" autofocus>

                            @error('tel')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                    </div>

                    <div class="row my-2">
                        <div class="mb-3 col-lg-6">
                            <label for="email" class="form-label">Email*</label>
                            <input type="email" placeholder="Ex: john@gmail.com" class="form-control @error('email') is-invalid @enderror" id="email" aria-describedby="emailHelp" name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                        </div>

                        <div class="mb-3 col-lg-6">
                            <label for="adresse" class="form-label">Addresse</label>
                            <input type="text" placeholder="Ex: Cotonou, Bénin" class="form-control @error('adresse') is-invalid @enderror" id="adresse" aria-describedby="textHelp" name="adresse" value="{{ old('adresse') }}"  autocomplete="adresse" autofocus>
                            @error('adresse')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row my-2">

                        <div class="mb-3 col-lg-6 ">
                            <label for="projet" class="form-label">Titre du projet*</label>

                            <select required name="projet" id="projet" class="form-select">
                                <option selected>Choisir un projet</option>
                                {{-- <option value="Assistance aux personnes du troisième âge">Assistance aux personnes du troisième âge</option>
                                <option value="Assistance aux orphelins">Assistance aux orphelins</option>
                                <option value="Coaching aux couples">Coaching aux couples</option>
                                <option value="Education & Jeunesse">Education & Jeunesse</option> --}}
                                @foreach($projets as $projet)
                                <option value="{{$projet->titre}}">{{$projet->titre}}</option>
                                @endforeach 
                            </select>
                        </div>

                        <div class="mb-3 col-lg-6">
                            <label for="montant" class="form-label">Montant*</label>
                            <input type="number" min="100" step="100" placeholder="Ex: 10000 FCFA" class="form-control @error('montant') is-invalid @enderror" id="montant" aria-describedby="textHelp" name="montant" value="{{ old('montant') }}" required autocomplete="montant" autofocus>
                        </div>
                    </div>

                    <div class="row my-2">
                        <div class="mb-3 col-lg-12">
                            <label for="message" class="form-label">Message</label>
                            <textarea name="message" id="" placeholder="L'aide aux orphelins est un acte noble" cols="" rows="5" class="form-control @error('message') is-invalid @enderror"></textarea>

                            @error('message')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div id="paypal-button-container">
                        <button class=" mt-5 py-2 w-100" type="submit">Faite le don</button>
                    </div>

                    <p id="result-message"></p>
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
                url: '/don/pour-projet',
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