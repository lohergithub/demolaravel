@extends('layouts.app')



@section('title')
    Page Home
@endsection


@section('content')
    <main id="main">
        @include('layouts.partials.slide')
        @include('layouts.pages.about')
        @include('layouts.pages.services')
        @include('layouts.pages.whyus')
        @include('layouts.pages.feature')
        @include('layouts.pages.portfolio')
        @include('layouts.pages.team')
        @include('layouts.pages.client')
        @include('layouts.pages.pricing')
        @include('layouts.pages.faq')
    </main>
@endsection