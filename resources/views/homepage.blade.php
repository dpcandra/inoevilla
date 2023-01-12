@extends('layouts.main')

@section('container')

    <section class="jumbotron">
        <div class="jumbo-title container h-100">
            <div class="row h-100 align-items-end">
                <div class="col-lg-6 bg-white">
                    <div class="bg-white d-flex flex-column px-3">
                        <h1 class="mx-auto mt-4 text-uppercase">WELLCOME</h1>
                        <h5 class="mx-auto my-3 text-center">Beauty nature meet cozy beach view</h5>
                        <p class="text-center text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. A commodi necessitatibus sed dolore temporibus, sequi vitae vel alias. Totam, quae accusamus? Asperiores?</p>
                    </div><!--bg-white-->
                </div><!--col-lg--->
            </div><!--row-->
        </div><!--jumbo-title-->
    </section>

    <section class="featured">
        <div class="container">
            <div class="row">
                <div class="col-6 col-md-6 col-lg-3 d-flex flex-column py-3 py-md-4 py-lg-5">
                    <div class="featured-item d-flex flex-column my-auto">
                        <div class="bg-icons mx-auto d-flex">
                            <svg class="mx-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M346.3 271.8l-60.1-21.9L214 448H32c-17.7 0-32 14.3-32 32s14.3 32 32 32H544c17.7 0 32-14.3 32-32s-14.3-32-32-32H282.1l64.1-176.2zm121.1-.2l-3.3 9.1 67.7 24.6c18.1 6.6 38-4.2 39.6-23.4c6.5-78.5-23.9-155.5-80.8-208.5c2 8 3.2 16.3 3.4 24.8l.2 6c1.8 57-7.3 113.8-26.8 167.4zM462 99.1c-1.1-34.4-22.5-64.8-54.4-77.4c-.9-.4-1.9-.7-2.8-1.1c-33-11.7-69.8-2.4-93.1 23.8l-4 4.5C272.4 88.3 245 134.2 226.8 184l-3.3 9.1L434 269.7l3.3-9.1c18.1-49.8 26.6-102.5 24.9-155.5l-.2-6zM107.2 112.9c-11.1 15.7-2.8 36.8 15.3 43.4l71 25.8 3.3-9.1c19.5-53.6 49.1-103 87.1-145.5l4-4.5c6.2-6.9 13.1-13 20.5-18.2c-79.6 2.5-154.7 42.2-201.2 108z"/></svg>
                        </div>
                        <h5 class="text-center my-3">Beach View</h5>
                        <p class="text-center text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos aspernatur ea libero dignissimos officiis ullam, minus iste exercitationem! Dolore, ratione.</p>
                    </div>
                </div><!--col-3-->

                <div class="col-6 col-md-6 col-lg-3 d-flex flex-column py-3 py-md-4 py-lg-5">
                    <div class="featured-item d-flex flex-column my-auto">
                        <div class="bg-icons mx-auto d-flex">
                            <svg class="mx-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M168.5 72L256 165l87.5-93h-175zM383.9 99.1L311.5 176h129L383.9 99.1zm50 124.9H256 78.1L256 420.3 433.9 224zM71.5 176h129L128.1 99.1 71.5 176zm434.3 40.1l-232 256c-4.6 5-11 7.9-17.8 7.9s-13.2-2.9-17.8-7.9l-232-256c-7.7-8.5-8.3-21.2-1.5-30.4l112-152c4.5-6.1 11.7-9.8 19.3-9.8H376c7.6 0 14.8 3.6 19.3 9.8l112 152c6.8 9.2 6.1 21.9-1.5 30.4z"/></svg>
                        </div>
                        <h5 class="text-center my-3">Luxury</h5>
                        <p class="text-center text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos aspernatur ea libero dignissimos officiis ullam, minus iste exercitationem! Dolore, ratione.</p>
                    </div>
                </div><!--col-3-->
                
                <div class="col-6 col-md-6 col-lg-3 d-flex flex-column py-3 py-md-4 py-lg-5">
                    <div class="featured-item d-flex flex-column my-auto">
                        <div class="bg-icons mx-auto d-flex">
                            <svg class="mx-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M224 0c70.7 0 128 57.3 128 128s-57.3 128-128 128s-128-57.3-128-128S153.3 0 224 0zM209.1 359.2l-18.6-31c-6.4-10.7 1.3-24.2 13.7-24.2H224h19.7c12.4 0 20.1 13.6 13.7 24.2l-18.6 31 33.4 123.9 39.5-161.2c77.2 12 136.3 78.8 136.3 159.4c0 17-13.8 30.7-30.7 30.7H265.1 182.9 30.7C13.8 512 0 498.2 0 481.3c0-80.6 59.1-147.4 136.3-159.4l39.5 161.2 33.4-123.9z"/></svg>
                        </div>
                        <h5 class="text-center my-3">VIP Service</h5>
                        <p class="text-center text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos aspernatur ea libero dignissimos officiis ullam, minus iste exercitationem! Dolore, ratione.</p>
                    </div>
                </div><!--col-3-->

                <div class="col-6 col-md-6 col-lg-3 d-flex flex-column py-3 py-md-4 py-lg-5">
                    <div class="featured-item d-flex flex-column my-auto">
                        <div class="bg-icons mx-auto d-flex">
                            <svg class="mx-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M16 0H144c5.3 0 10.3 2.7 13.3 7.1l81.1 121.6c-49.5 4.1-94 25.6-127.6 58.3L2.7 24.9C-.6 20-.9 13.7 1.9 8.5S10.1 0 16 0zM509.3 24.9L401.2 187.1c-33.5-32.7-78.1-54.2-127.6-58.3L354.7 7.1c3-4.5 8-7.1 13.3-7.1H496c5.9 0 11.3 3.2 14.1 8.5s2.5 11.5-.8 16.4zM432 336c0 97.2-78.8 176-176 176s-176-78.8-176-176s78.8-176 176-176s176 78.8 176 176zM264.4 241.1c-3.4-7-13.3-7-16.8 0l-22.4 45.4c-1.4 2.8-4 4.7-7 5.1L168 298.9c-7.7 1.1-10.7 10.5-5.2 16l36.3 35.4c2.2 2.2 3.2 5.2 2.7 8.3l-8.6 49.9c-1.3 7.6 6.7 13.5 13.6 9.9l44.8-23.6c2.7-1.4 6-1.4 8.7 0l44.8 23.6c6.9 3.6 14.9-2.2 13.6-9.9l-8.6-49.9c-.5-3 .5-6.1 2.7-8.3l36.3-35.4c5.6-5.4 2.5-14.8-5.2-16l-50.1-7.3c-3-.4-5.7-2.4-7-5.1l-22.4-45.4z"/></svg>
                        </div>
                        <h5 class="text-center my-3">Four Star</h5>
                        <p class="text-center text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos aspernatur ea libero dignissimos officiis ullam, minus iste exercitationem! Dolore, ratione.</p>
                    </div>
                </div><!--col-3-->
                
            </div><!--row-->
        </div><!--container-->
    </section>
    
    <section class="facilities">
        <div class="row mx-0">
            <div class="col-md-6 col-lg-6">
                <img src="{{ asset("/images/facilities.jpg") }}" alt="" class="img-fluid">
            </div><!--col-6-->

            <div class="col-md-6 col-lg-6 p-5">
                <div class="row row-facility pb-4">
                    <div class="col-6 col-md-6 col-lg-4">
                        <p class="text-muted">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M432 256c0 17.7-14.3 32-32 32L48 288c-17.7 0-32-14.3-32-32s14.3-32 32-32l352 0c17.7 0 32 14.3 32 32z"/></svg>
                            Rooms
                        </p>
                        <p class="text-muted">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M432 256c0 17.7-14.3 32-32 32L48 288c-17.7 0-32-14.3-32-32s14.3-32 32-32l352 0c17.7 0 32 14.3 32 32z"/></svg>
                            Restaurant
                        </p>
                        <p class="text-muted">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M432 256c0 17.7-14.3 32-32 32L48 288c-17.7 0-32-14.3-32-32s14.3-32 32-32l352 0c17.7 0 32 14.3 32 32z"/></svg>
                            Pool
                        </p>
                    </div><!--col-4-->
                    <div class="col-6 col-md-6 col-lg-4">
                        <p class="text-muted">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M432 256c0 17.7-14.3 32-32 32L48 288c-17.7 0-32-14.3-32-32s14.3-32 32-32l352 0c17.7 0 32 14.3 32 32z"/></svg>
                            SPA
                        </p>
                        <p class="text-muted">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M432 256c0 17.7-14.3 32-32 32L48 288c-17.7 0-32-14.3-32-32s14.3-32 32-32l352 0c17.7 0 32 14.3 32 32z"/></svg>
                            Laundry
                        </p>
                        <p class="text-muted">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M432 256c0 17.7-14.3 32-32 32L48 288c-17.7 0-32-14.3-32-32s14.3-32 32-32l352 0c17.7 0 32 14.3 32 32z"/></svg>
                            Yoga Center
                        </p>
                    </div><!--col-4-->
                </div><!--row-->
                
                <div class="py-4 text-uppercase facility-title">
                    <h1>Luxury
                        <img style="width: 55px" src="{{ asset("/icons/andbird.svg") }}" alt="">
                    </h1>
                    <h1>Comfortable Rooms</h1>
                </div>

                <p class="luxury-p text-muted">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsum, in, quo et pariatur est quasi error odio delectus similique vero mollitia, facilis ad ipsa quidem officia! Deleniti provident quam hic. Fuga repellat obcaecati omnis commodi nemo repellendus laborum, tempora incidunt vero? Molestias, nesciunt necessitatibus error cumque saepe facere deleniti dolorum!</p>

            </div><!--col-6-->
            
        </div><!--row-->
    </section>

    <section class="new-guest">
        <div class="row mx-0">

            <div class="col-lg-6 news-event">
                <h1 class="text-uppercase mt-5 mb-3">
                    News 
                    <img style="width: 55px" src="{{ asset("/icons/andbird.svg") }}" alt="">
                     Event
                </h1>
                <hr>

                <div class="news">
                    <img src="{{ asset("/images/makanan.png") }}" alt="">
                    <div>
                        <small></small>
                        <b></b>
                        <p></p>
                    </div>
                </div>

            </div><!--col-lg-6-->

            <div class="col-lg-6 guest-book mt-5 mb-3">
                <h1 class="text-uppercase">
                    Guest Book
                </h1>    
                <div>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odio corporis, totam, nostrum at eum aspernatur sequi voluptatem aliquid obcaecati fugit molestias ipsa aliquam, natus atque? Assumenda quidem illum sequi deserunt? Voluptas ipsa, eos exercitationem voluptatum accusantium sed necessitatibus, sapiente magnam ducimus soluta quidem, distinctio a. Necessitatibus ducimus exercitationem eum quam!</p>
                </div>
            </div><!--col-lg-6-->

        </div><!--row-->
    </section>

@endsection