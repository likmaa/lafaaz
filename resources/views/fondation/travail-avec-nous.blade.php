@extends('layouts.header')
@section('title', 'Travaillez avec nous')
@section('content')

<!-- SECTION 1 -->
<section class="aboutSection1">
    <div class="back">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 align-self-end">
                    <h2>
                        Travail avec nous <br>
                        la Fondation les Amis de A à Z
                    </h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION 1 -->


<!-- SECTION 1 -->
<section class="workSection2">
    <div class="container mt-5">

        <div class="row px-3 align-items-center justify-content-center">
            <div class="col-lg-5 col-md-6 mb-4 mb-md-0">
                <div class="image-wrapper">
                    <img class="img-fluid" src="/assets/img/works1.jpg">
                </div>
            </div>
            <div class="col-lg-5 col-md-6">
                <div class="content">
                    <h4 id="what-is-the-main-mission-of-mine-and-what-i-wanna-do">Nos offres d'emploi</h4>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore
                        et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.
                    </p>
                    <button class="float-end py-2 px-4"><a class="text-white" href="{{route('emplois')}}">Consulter</a></button>

                </div>
            </div>
        </div>

        <div class="row px-3 pt-5 align-items-center justify-content-center">
            <div class="col-lg-5 col-md-6">
                <div class="content py-4">
                    <h4 id="what-is-the-main-mission-of-mine-and-what-i-wanna-do">Bénévolat</h4>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore
                        et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.
                    </p>
                    <button class="float-end py-2 px-4"><a class="text-white" href="{{route('benevol')}}">Consulter</a></button>

                </div>
            </div>
            <div class="col-lg-5 col-md-6 mb-4 mb-md-0">
                <div class="image-wrapper">
                    <img class="img-fluid" src="/assets/img/work2.png">
                </div>
            </div>
        </div>

        <div class="row px-3 pt-5 align-items-center justify-content-center">
            <div class="col-lg-5 col-md-6 mb-4 mb-md-0">
                <div class="image-wrapper">
                    <img class="img-fluid" src="/assets/img/work3.jpg">
                </div>
            </div>
            <div class="col-lg-5 col-md-6">
                <div class="content p-4">
                    <h4 id="what-is-the-main-mission-of-mine-and-what-i-wanna-do">Nos offres de Stage</h4>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore
                        et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.
                    </p>
                    <button class="float-end py-2 px-4"><a class="text-white" href="{{route('stage')}}">Consulter</a></button>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION 1 -->

@endsection
