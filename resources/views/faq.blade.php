@extends('layouts.header')
@section('title', 'FAQs')
@section('content')
<!-- SECTION 1 -->
<section class="realisationSection1">
    <div class="back">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 ">
                    <h2>
                        Foire aux Questions de la Fondation les Amis de A à Z
                    </h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION 1 -->


<!-- SECTION 2 -->
<section class="faqSection2">
    <div class="container">

        @foreach($faqs as $faq)
        <div class="accordian mt-4">
            <div class="accordian_head">
                <div class="accordian_toggler">+</div>
                <span class="accordian_title">{{$faq->titre}}</span>
            </div>
            <div class="accordian_body">
                <p class="accordian_description">
                    {{$faq->description}}
                </p>
            </div>
        </div>
        @endforeach
    </div>
</section>
<!-- END SECTION 2 -->

@endsection