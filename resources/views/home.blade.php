@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="text-center">
        <h1 class="display-4">Welcome to Our Website</h1>
        <p class="lead">We are delighted to have you here. Explore our services and feel free to contact us for more information.</p>
    </div>

    <div class="row mt-5">
        <div class="col-md-4">
            <div class="card">
                <img src="https://images.pexels.com/photos/3589903/pexels-photo-3589903.jpeg?auto=compress&cs=tinysrgb&dpr=1&fit=crop&h=360&w=712" class="card-img-top" alt="About Us">
                <div class="card-body">
                    <h5 class="card-title">About Us</h5>
                    <p class="card-text">Learn more about our mission, vision, and values. We are committed to providing the best services.</p>
                    <a href="#" class="btn btn-primary">Read More</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <img src="https://images.pexels.com/photos/3584930/pexels-photo-3584930.jpeg?auto=compress&cs=tinysrgb&dpr=1&fit=crop&h=360&w=712" class="card-img-top" alt="Our Services">
                <div class="card-body">
                    <h5 class="card-title">Our Services</h5>
                    <p class="card-text">Discover the wide range of services we offer to meet your needs. We are here to help you.</p>
                    <a href="{{ url('/services') }}" class="btn btn-primary">Explore Services</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <img src="https://images.pexels.com/photos/3589903/pexels-photo-3589903.jpeg?auto=compress&cs=tinysrgb&dpr=1&fit=crop&h=360&w=712" class="card-img-top" alt="Contact Us">
                <div class="card-body">
                    <h5 class="card-title">Contact Us</h5>
                    <p class="card-text">Get in touch with us for any queries or support. We are here to assist you all the time.</p>
                    <a href="{{ url('/contact') }}" class="btn btn-primary">Contact Now</a>
                </div>
            </div>
        </div>
    </div>

    {{-- slider --}}
    <div class="row mt-5">
        <div class="col-md-6">
            <h2>Testimonials</h2>
            <div id="carouselTestimonials" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="testimonial">
                            <p class="testimonial-text">"This company is amazing. Their services are top-notch and they really care about their customers."</p>
                            <p class="testimonial-author">- John Doe</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="testimonial">
                            <p class="testimonial-text">"I had a great experience with their team. They were professional and exceeded my expectations."</p>
                            <p class="testimonial-author">- Jane Smith</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselTestimonials" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselTestimonials" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

        <div class="col-md-6">
            <h2>Latest News</h2>
            <ul class="list-group">
                <li class="list-group-item">
                    <h5>News Title 1</h5>
                    <p>Short description of the news content. <a href="#">Read more</a></p>
                </li>
                <li class="list-group-item">
                    <h5>News Title 2</h5>
                    <p>Short description of the news content. <a href="#">Read more</a></p>
                </li>
                <li class="list-group-item">
                    <h5>News Title 3</h5>
                    <p>Short description of the news content. <a href="#">Read more</a></p>
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection