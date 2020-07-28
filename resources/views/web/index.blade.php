@extends('layouts.web.app')
@section('title', 'HomePage')

@section('content')

    @include('web.sections.hero-slider')
            
    @include('web.sections.features')

    @include('web.sections.services')

    @include('web.sections.call-to-action')

   
            
    @include('web.sections.testimonials')

    @include('web.sections.counter')

    @include('web.sections.team')

@endsection

@section('javascript')
@endsection
