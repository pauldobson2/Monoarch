@extends('layouts.app')
@section('content')
    <section>

        <div class="container">

            <div class="row">

                <div class="col-4 col-sm-4 col-md-3 col-lg-3 mt-5">


                    <div class="row">
                        <div class="input-group col-md-4">
                            <input class="form-control border border-end-0 rounded-0" type="search" value="search"
                                id="example-search-input">
                            <span class="input-group-append">
                                <button class="btn btn-outline-secondary border border-start-0 rounded-0" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                    </div>

                    <div class="card p-2 p-md-4 p-lg-4 p-xl-4 mt-4">

                        <p class="category">Categories</p>
                        <p class="mb-0 sub-cat">Tips</p>
                        <hr>
                        <p class="mb-0 sub-cat">Management</p>
                        <hr>
                        <p class="mb-0 sub-cat">Property</p>
                        <hr>
                        <p class="mb-0 sub-cat">Finance</p>
                        <hr>
                        <p class="mb-0 sub-cat">Finance</p>
                        <hr class="mb-0">


                    </div>


                    <div class="card p-2 p-md-4 p-lg-4 p-xl-4 mt-4">
                        <p class="category">Recommendation</p>
                        <p class="fw-bold sub-cat">Latest posts</p>
                        <div class="row">
                            <div class="col-12 col-md-4 col-lg-4">
                                <img src="{{ asset('/images/gray1.svg') }}" class="img-fluid">
                            </div>
                            <div class="col-12 col-lg-8 col-sm-8">
                                <p class="fw-bold mb-0 sub-cat">5 Most Comfortable Areas</p>
                                <div class="d-flex">
                                    <img src="{{ asset('/images/1.svg') }}" class="img-fluid me-1">
                                    <p class="my-1 fw-bold sub-cat">Dreamwell Team</p>
                                </div>
                                <div class="d-flex">
                                    <img src="{{ asset('/images/2.svg') }}" class="img-fluid me-1">
                                    <p class="my-1 sub-cat">13 March</p>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-12 col-md-4 col-lg-4">
                                <img src="{{ asset('/images/gray1.svg') }}" class="img-fluid">
                            </div>
                            <div class="col-12 col-lg-8 col-sm-8">
                                <p class="fw-bold mb-0 sub-cat">5 Most Comfortable Places</p>
                                <div class="d-flex">
                                    <img src="{{ asset('/images/1.svg') }}" class="img-fluid me-1">
                                    <p class="my-1 fw-bold sub-cat">Dreamwell Team</p>
                                </div>
                                <div class="d-flex">
                                    <img src="{{ asset('/images/2.svg') }}" class="img-fluid me-1">
                                    <p class="my-1 sub-cat">16 March</p>
                                </div>
                            </div>
                        </div>

                        <hr>

                        <p class="fw-bold sub-cat">Popular Tags</p>
                        <div class="row">
                            <div class="col-12 col-lg-6 col-xl-6 col-md-6 mt-2">
                                <div class="card text-center m-0 py-1">
                                    <p class="m-0 p-0 sub-cat">House</p>
                                </div>

                            </div>




                            <div class="col-12 col-lg-6 col-xl-6 col-md-6 mt-2">
                                <div class="card text-center m-0 py-1">
                                    <p class="m-0 p-0 sub-cat">tips</p>
                                </div>

                            </div>

                            <div class="col-12 col-lg-6 col-xl-6 col-md-6 mt-2">
                                <div class="card text-center m-0 py-1">
                                    <p class="m-0 p-0 sub-cat">apartment</p>
                                </div>

                            </div>

                            <div class="col-12 col-lg-6 col-xl-6 col-md-6 mt-2">
                                <div class="card text-center m-0 py-1">
                                    <p class="m-0 p-0 sub-cat">design</p>
                                </div>

                            </div>

                            <div class="col-12 col-lg-6 col-xl-6 col-md-6 mt-2">
                                <div class="card text-center m-0 py-1">
                                    <p class="m-0 p-0 sub-cat">property</p>
                                </div>

                            </div>

                            <div class="col-12 col-lg-6 col-xl-6 col-md-6 mt-2">
                                <div class="card text-center m-0 py-1">
                                    <p class="m-0 p-0 sub-cat">style</p>
                                </div>

                            </div>


                        </div>

                    </div>

                    <img src="{{ asset('/images/Rectanglecard.svg') }}" class="img-fluid">
                    <img src="{{ asset('/images/down.svg') }}" class="img-fluid">

                    <img src="{{ asset('/images/customer.svg') }}" class="img-fluid mt-5">
                    <img src="{{ asset('/images/Price.svg') }}" class="img-fluid mt-5">
                    <div class="card mt-5 p-1 p-md-3 p-xl-3 p-lg-3 border-0 shadow pt-3">
                        <p class="text-center mb-0 sub-cat">Schedule a Visit
                        </p>
                        <p class="text-center info">For More Information</p>

                        <form action="{{ route('form.submit') }}" method="POST">
                            @csrf
                            <label class="sub-cat">Date</label>
                            <div class="input-group" id="datepicker">
                                <input type="text" name="date" class="form-control">
                                <span class="input-group-append">
                                    <span class="input-group-text bg-white d-block">
                                        <i class="fa fa-calendar"></i>
                                    </span>
                                </span>
                            </div>

                            <label class="sub-cat">Time</label>
                            <input type="text" name="time" class="form-control">

                            <p class="text-center mt-3 f-600 sub-cat">Your Information</p>

                            <label class="sub-cat">Name</label>
                            <input type="text" name="name" class="form-control">

                            <label class="sub-cat">Phone</label>
                            <input type="text" name="phone" class="form-control">

                            <label class="sub-cat">Email</label>
                            <input type="text" name="email" class="form-control">

                            <label class="sub-cat">Message</label>
                            <input type="text" name="message" class="form-control">
                            @if (session('success'))
                                <p>{{ session('success') }}</p>
                            @endif
                            @if (session('Error'))
                                <p>{{ session('Error') }}</p>
                            @endif
                            <button type="submit" class="btn my-green white-text mt-2 sub-cat">Submit a tour
                                request</button>

                    </div>
                    </form>

                    <img src="{{ asset('/images/video.svg') }}" class="img-fluid mt-4">


                </div>

                <div class="col-8 col-sm-8 col-md-9 col-lg-9">

                    <p class="gray-color mt-5 mb-0 sub-cat">Home / Blog/ <span style="color: black;"><b>Most
                                Comfortable Areas For Living</b></span> </p>
                    <p class="interested mb-0">5 Most Comfortable Areas for Living Space in London</p>

                    <div class="row">

                        <div class="col-4 col-lg-3 col-xl-3">
                            <div class="d-flex">
                                <img src="{{ asset('/images/1.svg') }}" class="img-fluid me-1">
                                <p class="my-1 sub-cat">Dreamwell Team</p>
                            </div>
                        </div>
                        <div class="col-4 col-lg-3 col-xl-3">
                            <div class="d-flex">
                                <img src="{{ asset('/images/2.svg') }}" class="img-fluid me-1">
                                <p class="my-1 sub-cat">13 March</p>
                            </div>
                        </div>
                        <div class="col-4 col-lg-3 col-xl-3">
                            <div class="d-flex">
                                <img src="{{ asset('/images/comment.svg') }}" class="img-fluid me-1">
                                <p class="my-1 sub-cat">23 Comments</p>
                            </div>
                        </div>

                    </div>

                    <img src="{{ asset('/images/most1.svg') }}" class="img-fluid mt-2">

                    <p class="mt-4 gray-color sub-cat">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer
                        ex augue, fermentum id tristique eget, condimentum ut sapien. Ut id quam nec lacus dignissim
                        rutrum. Sed congue massa in elit tincidunt, et tempor ante elementum. Sed fringilla sapien sit
                        amet dictum tempor. Vestibulum eu tempor nisi. Class aptent taciti sociosqu ad litora torquent
                        per conubia nostra, per inceptos himenaeos. In a ex nibh. Nunc porttitor vestibulum diam, vitae
                        hendrerit magna accumsan ac. Etiam vitae volutpat urna. Aenean metus justo, pellentesque non
                        bibendum sed, ultricies vitae dui. Praesent lobortis sollicitudin dictum. Nam blandit diam et
                        erat congue, pharetra feugiat dui aliquam. Nam tempor magna ut nunc mollis venenatis. </p>


                    <div class="row mt-5 ">
                        <div class="col-1"></div>
                        <div class="col-10 border border-success border-5 border-top-0 border-bottom-0">
                            <p class="ms-3 bord sub-cat">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Integer ex augue, fermentum id tristique eget, condimentum ut sapien. Ut id quam nec
                                lacus dignissim rutrum. </p>

                        </div>
                    </div>

                    <p class="gray-color mt-5 sub-cat">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer
                        ex augue, fermentum id tristique eget, condimentum ut sapien. Ut id quam nec lacus dignissim
                        rutrum. Sed congue massa in elit tincidunt, et tempor ante elementum. Sed fringilla sapien sit
                        amet dictum tempor:</p>


                    <p class="my-head">1. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>

                    <p class="gray-color sub-cat">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ex
                        augue, fermentum id tristique eget, condimentum ut sapien. Ut id quam nec lacus dignissim
                        rutrum. Sed congue massa in elit tincidunt, et tempor ante elementum. Sed fringilla sapien sit
                        amet dictum tempor. Vestibulum eu tempor nisi. Class aptent taciti sociosqu ad litora torquent
                        per conubia nostra, per inceptos himenaeos. In a ex nibh. Nunc porttitor vestibulum diam, vitae
                        hendrerit magna accumsan ac. Etiam vitae volutpat urna. Aenean metus justo, pellentesque non
                        bibendum sed, ultricies vitae dui. </p>

                    <img src="{{ asset('/images/most2.svg') }}" class="img-fluid">

                    <p class="my-head mt-5">2. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>

                    <p class="gray-color sub-cat">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ex
                        augue, fermentum id tristique eget, condimentum ut sapien. Ut id quam nec lacus dignissim
                        rutrum. Sed congue massa in elit tincidunt, et tempor ante elementum. Sed fringilla sapien sit
                        amet dictum tempor. Vestibulum eu tempor nisi. Class aptent taciti sociosqu ad litora torquent
                        per conubia nostra, per inceptos himenaeos. In a ex nibh. Nunc porttitor vestibulum diam, vitae
                        hendrerit magna accumsan ac. Etiam vitae volutpat urna. Aenean metus justo, pellentesque non
                        bibendum sed, ultricies vitae dui. </p>

                    <img src="{{ asset('/images/most3.svg') }}" class="img-fluid">


                    <p class="my-head mt-5">3. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>

                    <p class="gray-color sub-cat">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ex
                        augue, fermentum id tristique eget, condimentum ut sapien. Ut id quam nec lacus dignissim
                        rutrum. Sed congue massa in elit tincidunt, et tempor ante elementum. Sed fringilla sapien sit
                        amet dictum tempor. Vestibulum eu tempor nisi. Class aptent taciti sociosqu ad litora torquent
                        per conubia nostra, per inceptos himenaeos. In a ex nibh. Nunc porttitor vestibulum diam, vitae
                        hendrerit magna accumsan ac. Etiam vitae volutpat urna. Aenean metus justo, pellentesque non
                        bibendum sed, ultricies vitae dui. </p>

                    <img src="{{ asset('/images/most4.svg') }}" class="img-fluid">

                    <p class="my-head mt-5">4. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>

                    <p class="gray-color sub-cat">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ex
                        augue, fermentum id tristique eget, condimentum ut sapien. Ut id quam nec lacus dignissim
                        rutrum. Sed congue massa in elit tincidunt, et tempor ante elementum. Sed fringilla sapien sit
                        amet dictum tempor. Vestibulum eu tempor nisi. Class aptent taciti sociosqu ad litora torquent
                        per conubia nostra, per inceptos himenaeos. In a ex nibh. Nunc porttitor vestibulum diam, vitae
                        hendrerit magna accumsan ac. Etiam vitae volutpat urna. Aenean metus justo, pellentesque non
                        bibendum sed, ultricies vitae dui. </p>

                    <img src="{{ asset('/images/most2.svg') }}" class="img-fluid">

                    <p class="my-head mt-5">5. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>

                    <p class="gray-color sub-cat">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ex
                        augue, fermentum id tristique eget, condimentum ut sapien. Ut id quam nec lacus dignissim
                        rutrum. Sed congue massa in elit tincidunt, et tempor ante elementum. Sed fringilla sapien sit
                        amet dictum tempor. Vestibulum eu tempor nisi. Class aptent taciti sociosqu ad litora torquent
                        per conubia nostra, per inceptos himenaeos. In a ex nibh. Nunc porttitor vestibulum diam, vitae
                        hendrerit magna accumsan ac. Etiam vitae volutpat urna. Aenean metus justo, pellentesque non
                        bibendum sed, ultricies vitae dui. </p>

                    <p class="sub-cat">Article Tags</p>

                    <div class="row">

                        <div class="col-md-2 col-lg-2 col-sm-3 col-4 mt-1">
                            <div class="border rounded text-center">
                                <p class="my-1 sub-cat">house</p>
                            </div>
                        </div>

                        <div class="col-md-2 col-lg-2 col-sm-3 col-4 mt-1">
                            <div class="border rounded text-center">
                                <p class="my-1 sub-cat">living space</p>
                            </div>
                        </div>

                        <div class="col-md-2 col-lg-2 col-sm-3 col-4 mt-1">
                            <div class="border rounded text-center">
                                <p class="my-1 sub-cat">london</p>
                            </div>
                        </div>

                        <div class="col-md-2 col-lg-2 col-sm-3 col-4 mt-1">
                            <div class="border rounded text-center">
                                <p class="my-1 sub-cat">apartment</p>
                            </div>
                        </div>

                        <div class="col-md-2 col-lg-2 col-sm-3 col-4 mt-1">
                            <div class="border rounded text-center">
                                <p class="my-1 sub-cat">property</p>
                            </div>
                        </div>

                        <div class="col-md-2 col-lg-2 col-sm-3 col-4 mt-1">
                            <div class="border rounded text-center">
                                <p class="my-1 sub-cat">living area</p>
                            </div>
                        </div>

                    </div>


                    <div class="row mt-4">

                        <div class="col-6 col-md-3 col-lg-3 col-sm-3">
                            <img src="{{ asset('/images/Facebook1.svg') }}" class="img-fluid">
                        </div>

                        <div class="col-6 col-md-3 col-lg-3 col-sm-3">
                            <img src="{{ asset('/images/Twitter1.svg') }}" class="img-fluid">
                        </div>

                        <div class="col-6 col-md-3 col-lg-3 col-sm-3 mt-1 mt-sm-0">
                            <img src="{{ asset('/images/Linkedin1.svg') }}" class="img-fluid">
                        </div>

                        <div class="col-6 col-md-3 col-lg-3 col-sm-3 mt-1 mt-sm-0">
                            <img src="{{ asset('/images/Pinterest1.svg') }}" class="img-fluid">
                        </div>

                    </div>

                    <hr class="mt-5">

                    <div class="row">

                        <div class="col-lg-8 col-md-8 col-xl-8 col-6">
                            <p class="fw-bold sub-cat">Comments <span class="gray-color">(23)</span></p>
                        </div>

                        <div class="col-lg-4 col-xl-4 col-md-4 col-6">
                            <div class="d-flex">

                                <p class="me-2 my-1 sub-cat">Sort By</p>
                                <div class="dropdown ms-2">
                                    <button class="btn btn-light dropdown-toggle sub-cat" type="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Top Categories
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="my-comment mt-5">

                        <div class="d-flex">

                            <img src="{{ asset('/images/circle1.svg') }}" class="img-fluid me-3">

                            <div class="d-flex flex-column">

                                <p class="my-2 mb-0 ms-lg-2 ms-xl-2 ms-md-2 ms-3 fw-bold sub-cat">Penelope Green</p>
                                <div class="d-flex">

                                    <img src="{{ asset('/images/2.svg') }}" class="img-fluid me-1">
                                    <p class="my-1 sub-cat">February 12, 2023</p>

                                </div>


                            </div>

                        </div>
                        <p class="mt-3 sub-cat">I lived in one of that areas, and yes, it’s true. I really love the
                            place so much.</p>
                        <div class="row">

                            <div class="col-lg-3 col-md-3 col-xl-3 col-6">
                                <div class="d-flex">
                                    <img src="{{ asset('/images/thumb1.svg') }}" class="img-fluid me-2">
                                    <p class="my-1 sub-cat">11 Likes</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-xl-3 col-6">
                                <div class="d-flex">
                                    <img src="{{ asset('/images/comment.svg') }}" class="img-fluid me-2">
                                    <p class="my-1 sub-cat">2 replies</p>
                                </div>
                            </div>

                        </div>


                        <div class="d-flex mt-5">

                            <img src="{{ asset('/images/circle1.svg') }}" class="img-fluid me-3">

                            <div class="d-flex flex-column">

                                <p class="my-2 mb-0 ms-lg-2 ms-xl-2 ms-md-2 ms-3 fw-bold sub-cat">Abraham Cole</p>
                                <div class="d-flex">

                                    <img src="{{ asset('/images/2.svg') }}" class="img-fluid me-1">
                                    <p class="my-1 sub-cat">February 12, 2023</p>

                                </div>


                            </div>

                        </div>
                        <p class="mt-3 sub-cat">So true! Everything is in walk-reach. Anyone want to join me living
                            here?</p>
                        <div class="row">

                            <div class="col-lg-3 col-md-3 col-xl-3 col-6">
                                <div class="d-flex">
                                    <img src="{{ asset('/images/thumb1.svg') }}" class="img-fluid me-2">
                                    <p class="my-1 sub-cat">11 Likes</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-xl-3 col-6">
                                <div class="d-flex">
                                    <img src="{{ asset('/images/comment.svg') }}" class="img-fluid me-2">
                                    <p class="my-1 sub-cat">2 replies</p>
                                </div>
                            </div>

                        </div>


                        <div class="d-flex mt-5">

                            <img src="{{ asset('/images/circle1.svg') }}" class="img-fluid me-3">

                            <div class="d-flex flex-column">

                                <p class="my-2 mb-0 ms-lg-2 ms-xl-2 ms-md-2 ms-3 fw-bold sub-cat">Sarah Janet</p>
                                <div class="d-flex">

                                    <img src="{{ asset('/images/2.svg') }}" class="img-fluid me-1">
                                    <p class="my-1 sub-cat">February 12, 2023</p>

                                </div>


                            </div>

                        </div>
                        <p class="mt-3 sub-cat">My mom and I lived there for almost 10 years and if I have a chance to
                            go to London again, I definitely will find a place there again.</p>
                        <div class="row">

                            <div class="col-lg-3 col-md-3 col-xl-3 col-6">
                                <div class="d-flex">
                                    <img src="{{ asset('/images/thumb1.svg') }}" class="img-fluid me-2">
                                    <p class="my-1 sub-cat">11 Likes</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-xl-3 col-6">
                                <div class="d-flex">
                                    <img src="{{ asset('/images/comment.svg') }}" class="img-fluid me-2">
                                    <p class="my-1 sub-cat">2 replies</p>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="row mt-5">

                        <div class="col-4"></div>
                        <div class="col-4">
                            <button class="btn my-green white-text rounded sub-cat">More Comments</button>
                        </div>

                    </div>

                    <form action="">
                        <div class="card border-0 rounded-4 gray-back p-md-3 p-lg-3 p-xl-3 p-2 mt-2">
                            <div class="ms-lg-5 mt-lg-5 me-lg-5 ms-2 me-2 mt-3">

                                <p class="fw-bold sub-cat">Your Comment</p>

                                <p class="sub-cat">Your email address will not be published. Required fields are marked *
                                </p>

                                <div class="row">

                                    <div class="col-lg-6 col-md-6 col-xl-6 col-12">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label sub-cat">Your
                                                Name*</label>
                                            <input type="email" class="form-control" id="exampleFormControlInput1">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-xl-6 col-12">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1"
                                                class="form-label sub-cat">Email*</label>
                                            <input type="email" class="form-control" id="exampleFormControlInput1">
                                        </div>
                                    </div>

                                </div>

                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label sub-cat">Comment*</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="4"></textarea>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value=""
                                        id="flexCheckDefault">
                                    <label class="form-check-label sub-cat" for="flexCheckDefault">
                                        Save my name and email in this browser for the next time I comment.
                                    </label>
                                </div>

                                <button class="btn my-green white-text mt-3 px-5 sub-cat">Submit</button>

                            </div>
                        </div>
                    </form>


                </div>

            </div>

        </div>



        <section class="blogs mt-5 pb-5">
            <div class="d-flex justify-content-center pt-5">
                <p class="news">Blog & News from </p>
                <img src="{{ asset('/images/monarch.svg') }}" class="img-fluid monar">
            </div>
            <div class="container mt-5">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="card blog-card shadow-sm border-0 rounded-4 mt-1">
                            <img src="{{ asset('/images/blog1.svg') }}" class="img-fluid">
                            <p class="invest p-3">Investment on Property, Profitable or Detrimental?</p>
                            <div class="row px-3">
                                <div class="col-1">
                                    <img src="{{ asset('/images/1.svg') }}">
                                </div>
                                <div class="col-5">
                                    <p class="">Dreamwell Team</p>
                                </div>
                                <div class="col-1">
                                    <img src="{{ asset('/images/2.svg') }}">
                                </div>
                                <div class="col-5">
                                    <p class="">10 March</p>
                                </div>

                            </div>
                            <p class="p-3 green-text">Read More</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="card blog-card shadow-sm border-0 rounded-4 mt-1">
                            <img src="{{ asset('/images/blog2.svg') }}" class="img-fluid">
                            <p class="invest p-3">5 Tips on Choosing Comfortable Housing for Families</p>
                            <div class="row px-3">
                                <div class="col-1">
                                    <img src="{{ asset('/images/1.svg') }}">
                                </div>
                                <div class="col-5">
                                    <p class="">Dreamwell Team</p>
                                </div>
                                <div class="col-1">
                                    <img src="{{ asset('/images/2.svg') }}">
                                </div>
                                <div class="col-5">
                                    <p class="">13 March</p>
                                </div>

                            </div>
                            <p class="p-3 green-text">Read More</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="card blog-card shadow-sm border-0 rounded-4 mt-1">
                            <img src="{{ asset('/images/blog3.svg') }}" class="img-fluid">
                            <p class="invest p-3">5 Most Comfortable Areas for Living Space in London</p>
                            <div class="row px-3">
                                <div class="col-1">
                                    <img src="{{ asset('/images/1.svg') }}">
                                </div>
                                <div class="col-5">
                                    <p class="">Dreamwell Team</p>
                                </div>
                                <div class="col-1">
                                    <img src="{{ asset('/images/2.svg') }}">
                                </div>
                                <div class="col-5">
                                    <p class="">16 March</p>
                                </div>

                            </div>
                            <p class="p-3 green-text">Read More</p>
                        </div>
                    </div>

                </div>
            </div>


        </section>

    </section>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const scrollToTopButton = document.getElementById("scrollToTopButton");

            window.addEventListener("scroll", function() {
                if (window.scrollY >= 300) {
                    scrollToTopButton.style.display = "block";
                } else {
                    scrollToTopButton.style.display = "none";
                }
            });

            scrollToTopButton.addEventListener("click", function() {
                window.scrollTo({
                    top: 0,
                    behavior: "smooth"
                });
            });
        });
    </script>
@endsection
