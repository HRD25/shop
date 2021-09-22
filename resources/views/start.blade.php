@extends('layouts.app')

@section('content')
    <div class="container-fluid pt-1">
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
                <div class="container-fluid text-center">
                    <button class="btn-sm btn-dark">Search</button>
                </div>
            </div>

            <div class="col-sm-9">
                <div class="row">
                    <div class="col-sm-4 pt-2">
                        <div class="card card-body p-0">
                            <div class="row">
                                <div class="col-sm-12">
                                    <img src="https://sklep.ntt.pl/65480-large_default/komputer-do-gier-ntt-game-r-ryzen-5-3400g-amd-vega-11-16gb-ram-480gb-ssd-w10.jpg"
                                        class="img-fluid">
                                </div>

                                <div class="col-sm-12">
                                    <div class="row">
                                        <div class="col-sm-4 text-start">
                                            <button class="btn btn-dark p-0" style="width: 100px">
                                                View
                                            </button>
                                        </div>
                                        <div class="col-sm-8 text-end">
                                            <input type="number" value="1" class="border-1"
                                                style="width: 50px;margin-right:10px;border-radius:10px;">
                                            <a href="" style="color:black">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="black"
                                                    class="bi bi-basket3-fill" viewBox="0 0 16 16"
                                                    style="margin-bottom: 5px">
                                                    <path
                                                        d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15.5a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H.5a.5.5 0 0 1-.5-.5v-1A.5.5 0 0 1 .5 6h1.717L5.07 1.243a.5.5 0 0 1 .686-.172zM2.468 15.426.943 9h14.114l-1.525 6.426a.75.75 0 0 1-.729.574H3.197a.75.75 0 0 1-.73-.574z" />
                                                </svg>
                                                <span>Add to Card</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 pt-2">
                        <div class="card card-body">
                            <img src="https://sklep.ntt.pl/65480-large_default/komputer-do-gier-ntt-game-r-ryzen-5-3400g-amd-vega-11-16gb-ram-480gb-ssd-w10.jpg"
                                class="img-fluid">
                        </div>
                    </div>

                    <div class="col-sm-4 pt-2">
                        <div class="card card-body">
                            <img src="https://sklep.ntt.pl/65480-large_default/komputer-do-gier-ntt-game-r-ryzen-5-3400g-amd-vega-11-16gb-ram-480gb-ssd-w10.jpg"
                                class="img-fluid">
                        </div>
                    </div>

                    <div class="col-sm-4 pt-2">
                        <div class="card card-body">
                            <img src="https://sklep.ntt.pl/65480-large_default/komputer-do-gier-ntt-game-r-ryzen-5-3400g-amd-vega-11-16gb-ram-480gb-ssd-w10.jpg"
                                class="img-fluid">
                        </div>
                    </div>

                    <div class="col-sm-4 pt-2">
                        <div class="card card-body">
                            <img src="https://sklep.ntt.pl/65480-large_default/komputer-do-gier-ntt-game-r-ryzen-5-3400g-amd-vega-11-16gb-ram-480gb-ssd-w10.jpg"
                                class="img-fluid">
                        </div>
                    </div>

                    <div class="col-sm-4 pt-2">
                        <div class="card card-body">
                            <img src="https://sklep.ntt.pl/65480-large_default/komputer-do-gier-ntt-game-r-ryzen-5-3400g-amd-vega-11-16gb-ram-480gb-ssd-w10.jpg"
                                class="img-fluid">
                        </div>
                    </div>

                    <div class="col-sm-4 pt-2">
                        <div class="card card-body">
                            <img src="https://sklep.ntt.pl/65480-large_default/komputer-do-gier-ntt-game-r-ryzen-5-3400g-amd-vega-11-16gb-ram-480gb-ssd-w10.jpg"
                                class="img-fluid">
                        </div>
                    </div>

                    <div class="col-sm-4 pt-2">
                        <div class="card card-body">
                            <img src="https://sklep.ntt.pl/65480-large_default/komputer-do-gier-ntt-game-r-ryzen-5-3400g-amd-vega-11-16gb-ram-480gb-ssd-w10.jpg"
                                class="img-fluid">
                        </div>
                    </div>

                    <div class="col-sm-4 pt-2">
                        <div class="card card-body">
                            <img src="https://sklep.ntt.pl/65480-large_default/komputer-do-gier-ntt-game-r-ryzen-5-3400g-amd-vega-11-16gb-ram-480gb-ssd-w10.jpg"
                                class="img-fluid">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
