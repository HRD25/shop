@extends('layouts.app')

@section('content')
    <div class="container-fluid pt-1 view-height">
        <div class="row">
            <div class="col-sm-2 bg-white me-2 mt-2 border border-grey" style="height: 430px">
                <h3 class="mb-0"><b>FILTERS</b></h3>
                <hr class="mt-0 pt-0">
                <div class="container-fluid">
                    <label for="priceof">Price Of</label>
                    <input id="priceof" type="number" class="form-control m-0 p-0" placeholder="100">
                    <label for="priceto">Price To</label>
                    <input id="priceto" type="number" class="form-control m-0 p-0" placeholder="1000">
                </div>
                <hr class="mt-3">
                <div class="container-fluid">
                    <select class="form-select" multiple aria-label="multiple select example" id="category">
                        <option selected>Computer</option>
                        <option value="1">Laptop</option>
                        <option value="2">TV</option>
                        <option value="3">Phone</option>
                        <option value="3">Monitor</option>
                        <option value="3">Console</option>
                    </select>
                </div>
                <hr class="mt-3">
                <div class="container-fluid">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Buy" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Buy Now
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Buy" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Auction
                        </label>
                    </div>
                </div>
                <hr class="mt-3">
                <div class="container-fluid text-center" style="display: flex">
                    <button class="btn-sm btn-dark p-1 border-1" style="width: 200px;">Search</button>
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
                                        <a href="/item/1">
                                            <button class="button-view-in-card">
                                                View
                                            </button>
                                        </a>

                                        <a href="#" class="heart-in-card">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="black"
                                                class="bi bi-heart" viewBox="0 0 16 16">
                                                <path
                                                    d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                                            </svg>
                                        </a>

                                        <input type="number" value="" placeholder="1" class="border-1 text-center" min="0"
                                            max="255" style="width: 50px;border-radius:10px;">

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

                                        <input type="number" value="" placeholder="1" class="border-1 text-center" min="0"
                                            max="255" style="width: 50px;border-radius:10px;">

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

                                        <input type="number" value="" placeholder="1" class="border-1 text-center" min="0"
                                            max="255" style="width: 50px;border-radius:10px;">

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

                                        <input type="number" value="" placeholder="1" class="border-1 text-center" min="0"
                                            max="255" style="width: 50px;border-radius:10px;">

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
@endsection
