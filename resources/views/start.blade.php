@extends('layouts.app')

@section('content')
    <div class="container pt-1 view-height">

        <div class="nav-breadcrumb m-0">
            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
                aria-label="breadcrumb">
                <ol class="breadcrumb m-0 p-0">
                    <li class="breadcrumb-item home">
                        <a href="#"> <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                class="bi bi-house-fill mb-1" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                                <path fill-rule="evenodd"
                                    d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
                            </svg>
                        </a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Start</li>
                </ol>
            </nav>
        </div>

        <div class="row">
            <div class="col-sm-3 bg-white me-2 mt-2 border border-grey" style="max-height: 600px">
                <h3 class="mb-0">UNDER FILTERS</h3>
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
                        <div class="card card-body p-0" style="height: 240px;border-radius:10px">

                            <div class="container-fluid d-flex " style="height: 100%;">
                                <div class="photo mt-1 mb-1" style="height: 100%;width:30%;">
                                    <img src="{{ $item->photo }}" class="img-fluid">
                                </div>

                                <div class="info" style="color: black;width:50%">
                                    <h4 class="ms-2 mb-0"><b>{{ $item->name }}</b></h4>

                                    <span class="ms-2 mt-1"><a href=""
                                            style="text-decoration: none;color:grey">Supersprzedawca.com</a></span>

                                    <div class="ms-2 mt-1">
                                        <span class="ps-2 pe-2"
                                            style="background: grey;color:white;border-radius:15px">Electronic</span>
                                        <span class="ps-2 pe-2"
                                            style="background: grey;color:white;border-radius:15px">new</span>
                                        <span class="ps-2 pe-2"
                                            style="background: grey;color:white;border-radius:15px">8 gb ram</span>
                                    </div>

                                    <div class="ms-2 mt-2">
                                        <span style="font-size: 24px"><b>2000zł</b></span>
                                    </div>

                                    <div class="ms-2 mt-2">
                                        <span style=""></span>
                                    </div>

                                    <div class="ms-2 mt-2" style="position: absolute;bottom:0px">
                                        <span style="color: grey">Free Supply from 150zł </span>
                                    </div>
                                </div>

                                <div class="text-center" style="width: 20%;height:100%">
                                    <div class="firm-logo" style="width: 100%;height:50%">

                                        <div class="star-in-card" style="position: absolute;right:10px;top:5px">
                                            <a href="" class="ms-4" style="color: rgba(0, 196, 213, 1) !important;text-decoration:none">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                                                    <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                                                  </svg>
                                            </a>
                                        </div>

                                        <div class="mt-2">
                                            <span style="color: black">Logo</span>
                                        </div>

                                    </div>

                                    <div class="users-buy" style="width: 100%;height:50%;">
                                        <div style="position:absolute;bottom: 0px">
                                            <span style="color: black">bought 100 people</span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    </div>
@endsection
