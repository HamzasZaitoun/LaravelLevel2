@extends('front.master')
@section('title', 'service')
@section('services-active', 'active')


@section('hero')

    <x-hero-section title="services" subtitle="service"></x-hero-section>
@endsection

@section('content')

    <x-front-services-component></x-front-services-component>

    <!-- Testimonial Start -->
    <x-front-testimonials-component></x-front-testimonials-component>
    <!-- Testimonial End -->


@endsection
