@extends('layouts.app')

@section('content')
    <div class="container-fluid pt-1 view-height">
        <div class="row">

            <div class="col-sm-1"></div>

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

            <div class="col-sm-8 d-flex" style="flex-direction: column">
                @foreach ($items as $item)

                    <div class="container-fluid mt-2">
                        <a href="">
                            <div class="card card-body item-card-container" style="height: 200px;border-radius:10px">
                                <div class="container-fluid d-flex">

                                    <div class="photo-in-card">
                                        <img src="{{ $item->photo }}" class="img-fluid" style="width: 180px">
                                    </div>

                                    <div class="media-in-card">
                                        <div>
                                            <h3>{{ $item->name }}</h3>
                                        </div>
                                        <div style="text-align: left">
                                            <span>od User</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                @endforeach
            </div>
        </div>
    </div>
    </div>
@endsection
