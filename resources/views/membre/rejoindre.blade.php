@extends('layouts.header')
@section('title', 'Nous rejoindre')
@section('content')

<section class="rejoindreSection1">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h1 class="py-5 text-center text-gray-500">Adhésion à la fondation</h1>
                @if(session()->has('success'))
                <div class="alert alert-success mb-0" style="border-radius: unset;">
                    {{ session('success') }}
                </div>
                @elseif(session()->has('danger'))
                <div class="alert alert-danger mb-0" style="border-radius: unset;">
                    {{ session('danger') }} <a href="{{ route('membre') }}">ici</a>.
                </div>
                @else
                <form method="POST" action="{{route('addmembre')}}" class="border-light" enctype="multipart/form-data" id="register">
                    @csrf
                    <input type="hidden" value="1">
                    <input type="hidden" value="" name="ts" id="h1">
                    <div class="row my-2">
                        <div class="mb-3 col-lg-6 ">
                            <label for="exampleInputtext1" class="form-label">Nom*</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="nom" aria-describedby="textHelp" name="nom" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="mb-3 col-lg-6 ">
                            <label for="exampleInputtext1" class="form-label">Prenoms*</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="prenom" aria-describedby="textHelp" name="prenom" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row my-2">
                        <div class="mb-3 col-lg-6">
                            <label for="exampleInputtext1" class="form-label">Numéro de téléphone*</label>
                            <input type="tel" class="form-control @error('tel') is-invalid @enderror" id="tel" aria-describedby="textHelp" name="tel" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="mb-3 col-lg-6">
                            <label for="exampleInputEmail1" class="form-label">Email*</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" aria-describedby="emailHelp" name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row my-2">
                        <div class="mb-3 col-lg-6">
                            <label for="exampleInputtext1" class="form-label">Addresse*</label>
                            <input type="text" class="form-control @error('adresse') is-invalid @enderror" id="exampleInputtext1" aria-describedby="textHelp" name="adresse" value="{{ old('adresse') }}" required autocomplete="adresse" autofocus>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="mb-3 col-lg-6">
                            <label for="exampleInputtext1" class="form-label">Code postale*</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="exampleInputtext1" aria-describedby="textHelp" name="postal" value="{{ old('postal') }}" required autocomplete="postal" autofocus>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row my-2">
                        <div class="mb-3 col-lg-6">
                            <label for="exampleInputtext1" class="form-label">Ville*</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="exampleInputtext1" aria-describedby="textHelp" name="ville" value="{{ old('ville') }}" required autocomplete="ville" autofocus>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="mb-3 col-lg-6">
                            <label for="exampleInputtext1" class="form-label">Pays*</label>
                            {{-- <input type="text" class="form-control @error('name') is-invalid @enderror" id="exampleInputtext1" aria-describedby="textHelp" name="pays" value="{{ old('pays') }}" required autocomplete="pays" autofocus> --}}
                            <select name="pays" class="form-control js-example-basic-single" id="pays" aria-label="Pays">
                                <option value="AL">Alabama</option>
                                <option value="WY">Wyoming</option>
                            </select>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                    </div>

                    <div class="row my-2">
                        <div class="mb-3 col-lg-6">
                            <label for="exampleInputtext1" class="form-label">Date de naissance*</label>
                            <input type="date" class="form-control @error('name') is-invalid @enderror" id="exampleInputtext1" aria-describedby="textHelp" name="birth" value="{{ old('birth') }}" required autocomplete="birth" autofocus>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="mb-3 col-lg-6">
                            <label for="exampleInputtext1" class="form-label">Profession*</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="exampleInputtext1" aria-describedby="textHelp" name="profession" value="{{ old('profession') }}" required autocomplete="profession" autofocus>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row my-2">
                        <div class="mb-3 col-lg-6">
                            <label for="exampleInputtext1" class="form-label">Photo de la CNI (format pdf)*</label>
                            <input type="file" accept="application/pdf/*" class="form-control @error('name') is-invalid @enderror" id="exampleInputtext1" aria-describedby="textHelp" name="cin" value="{{ old('cin') }}" required autocomplete="cin" autofocus>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="mb-3 col-lg-6">
                            <label for="exampleInputtext1" class="form-label">Casier judiciaire*</label>
                            <input type="file" accept="application/pdf/*" class="form-control @error('name') is-invalid @enderror" id="exampleInputtext1" aria-describedby="textHelp" name="casier" value="{{ old('casier') }}" required autocomplete="casier" autofocus>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row my-2">

                        <div class="mb-3 col-lg-12">
                            <label for="exampleInputtext1" class="form-label">Lettre de motivation*</label>
                            <input type="file" accept="application/pdf/*" class="form-control @error('name') is-invalid @enderror" id="exampleInputtext1" aria-describedby="textHelp" name="motive" value="{{ old('motive') }}" required autocomplete="motive" autofocus>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <p class="form-label my-3"> Télecharger un exemplaire de la lettre de motivation à adresser au Président de CA de la fondation <a href="">ici</a>.</p>
                        </div>
                    </div>
                    <button class=" mt-5 py-2 w-100">Payer les frais d’adhésion 10.000CFA</button>
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

            event.preventDefault();

            var url = $(this).attr('data-action');

            $.ajax({
                url: '/membre/rejoindre',
                method: 'POST',
                data: new FormData(this),
                dataType: 'JSON',
                contentType: false,
                cache: false,
                processData: false,
                success: function(response) {}
            });

            openKkiapayWidget({
                amount: "10000",
                position: "center",
                name: $('#nom').val() + ' ' + $('#prenom').val(),
                email: $('#email').val(),
                phone: $('#tel').val(),
                callback: "http://127.0.0.1:5500/membre/adhesion",
                // sandbox: true,
                theme: "#48746D",
                // key: "83d25e20e6c111ea874b458efa5162a0"
                // key: "c8cd2d702dab11ecb30d13c7d805295f"
                key: "1283ee43a7e00476a6c179aa602b83f234d4a934" 
            });

            addSuccessListener(response => {
                $('#h1').val(response.transactionId);
                event.currentTarget.submit();
            });

            addFailedListener(error => {});

        });
    })
</script>