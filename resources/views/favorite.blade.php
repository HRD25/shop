@extends('layouts.app')

@section('content')
    <div class="container-fluid pt-2 view-height">
        <div class="row">
            <div class="container" style="display: flex">
                <div class="col-sm-2  text-white text-center">
                    <h2 class="bg-dark"><b>My List Favorits</b></h2>
                </div>

                <div class="col-sm-10 text-end">
                    <h3>Ilosc</h3>
                </div>
            </div>

            <div class="col-sm-9">
                <div class="row">
                    <div class="col-sm-3 mt-2">
                        <div class="card card-body border border-2 p-0" style="border-radius: 15px">
                            <div class="row">
                                <div class="col-sm-12">
                                    <img src="https://sklep.ntt.pl/65480-large_default/komputer-do-gier-ntt-game-r-ryzen-5-3400g-amd-vega-11-16gb-ram-480gb-ssd-w10.jpg"
                                        class="img-fluid" style="border-radius: 15px">
                                </div>
                                <div class="col-sm-12">
                                    <h3 class="mb-0"><b>Computer</b></h3>
                                    <hr class="pt-0 mt-0 mb-2" style="width: 120px;">
                                    <p>This is a very good computer.You can play in new games and surf at internet.You can
                                        watch popular movies.</p>
                                </div>

                                <div class="col-sm-12">
                                    <div class="media-in-card text-start">

                                        <div class="box-heart-in-card">
                                            <button class="button-view-in-card">
                                                View
                                            </button>

                                            <a href="#" class="heart-in-card">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="black"
                                                    class="bi bi-heart" viewBox="0 0 16 16">
                                                    <path
                                                        d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                                                </svg>
                                            </a>
                                        </div>

                                        <div class="box-a-buy-in-card">
                                            <input type="number" value="" placeholder="1" class="border-1 text-center"
                                                style="width: 50px;border-radius:10px;">

                                            <a href="" class="a-buy-in-card">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="black"
                                                    class="bi bi-basket3-fill" viewBox="0 0 16 16">
                                                    <path
                                                        d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15.5a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H.5a.5.5 0 0 1-.5-.5v-1A.5.5 0 0 1 .5 6h1.717L5.07 1.243a.5.5 0 0 1 .686-.172zM2.468 15.426.943 9h14.114l-1.525 6.426a.75.75 0 0 1-.729.574H3.197a.75.75 0 0 1-.73-.574z" />
                                                </svg>
                                                <span>Buy</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
