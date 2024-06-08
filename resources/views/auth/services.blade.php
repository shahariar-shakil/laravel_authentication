@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="text-center">
        <h1 class="display-4">Our Services</h1>
        <p class="lead">We offer a range of top-notch services to meet your needs. Explore what we have to offer and how we can help you achieve your goals.</p>
    </div>

    <div class="row mt-5">
        <div class="col-md-4">
            <div class="card h-100">
                <div class="card-body text-center">
                    <i class="bi bi-code-slash display-1 text-primary"></i>
                    <h5 class="card-title mt-3">Web Development</h5>
                    <p class="card-text">Build robust and scalable web applications tailored to your business needs. Our expert developers are skilled in the latest technologies.</p>
                    <a href="#" class="btn btn-primary">Learn More</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100">
                <div class="card-body text-center">
                    <i class="bi bi-bar-chart-line display-1 text-success"></i>
                    <h5 class="card-title mt-3">SEO Optimization</h5>
                    <p class="card-text">Increase your website's visibility on search engines with our professional SEO services. We use proven strategies to boost your rankings.</p>
                    <a href="#" class="btn btn-success">Learn More</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100">
                <div class="card-body text-center">
                    <i class="bi bi-pc-display-horizontal display-1 text-info"></i>
                    <h5 class="card-title mt-3">Digital Marketing</h5>
                    <p class="card-text">Expand your online presence and reach your target audience with our comprehensive digital marketing services, including social media management and PPC campaigns.</p>
                    <a href="#" class="btn btn-info">Learn More</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-md-4">
            <div class="card h-100">
                <div class="card-body text-center">
                    <i class="bi bi-cart-check display-1 text-warning"></i>
                    <h5 class="card-title mt-3">E-commerce Solutions</h5>
                    <p class="card-text">Develop custom e-commerce platforms to enhance your online sales. We provide user-friendly and secure solutions for your business.</p>
                    <a href="#" class="btn btn-warning">Learn More</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100">
                <div class="card-body text-center">
                    <i class="bi bi-phone display-1 text-danger"></i>
                    <h5 class="card-title mt-3">Mobile App Development</h5>
                    <p class="card-text">Create engaging and high-performance mobile applications for both Android and iOS platforms. Our team delivers seamless user experiences.</p>
                    <a href="#" class="btn btn-danger">Learn More</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100">
                <div class="card-body text-center">
                    <i class="bi bi-shield-lock display-1 text-dark"></i>
                    <h5 class="card-title mt-3">Cybersecurity</h5>
                    <p class="card-text">Protect your digital assets with our comprehensive cybersecurity services. We offer assessments, monitoring, and threat mitigation strategies.</p>
                    <a href="#" class="btn btn-dark">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection