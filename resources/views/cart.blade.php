@extends('layouts.app')

@section('content')
    <div class="container mt-4 view-height">
        <div class="nav-breadcrumb m-0">
            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
                aria-label="breadcrumb">
                <ol class="breadcrumb m-0 p-0">
                    <li class="breadcrumb-item home">
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                class="bi bi-house-fill mb-1" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                                <path fill-rule="evenodd"
                                    d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
                            </svg>
                        </a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Cart</li>
                </ol>
            </nav>
        </div>

        <div class="col-sm-2 bg-dark text-white">
            <h2>Cart Items</h2>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <div class="card card-body box-list-cart-items pb-0 mb-4">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-sm-3">
                                    <img src="https://sklep.ntt.pl/65480-large_default/komputer-do-gier-ntt-game-r-ryzen-5-3400g-amd-vega-11-16gb-ram-480gb-ssd-w10.jpg"
                                        class="img-fluid" style="height: 100px">
                                </div>

                                <div class="col-sm-5">
                                    <h3>Computer</h3>
                                    <p>This is a very good computer.You can play in new games and surf at internet.You
                                        can
                                        watch popular movies.</p>
                                </div>
                                <div class="col-sm-2 text-center">
                                    <input type="number" value="1" style="width: 50px;margin-top:20px">
                                </div>

                                <div class="col-sm-2">

                                    <button class="btn-sm btn-danger text-white border-1"
                                        style="margin-top:20px">Delete</button>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-sm-3">
                                    <img src="https://sklep.ntt.pl/65480-large_default/komputer-do-gier-ntt-game-r-ryzen-5-3400g-amd-vega-11-16gb-ram-480gb-ssd-w10.jpg"
                                        class="img-fluid" style="height: 100px">
                                </div>

                                <div class="col-sm-5">
                                    <h3>Computer</h3>
                                    <p>This is a very good computer.You can play in new games and surf at internet.You can
                                        watch popular movies.</p>
                                </div>

                                <div class="col-sm-2 text-center">
                                    <input type="number" value="1" style="width: 50px;margin-top:20px">
                                </div>

                                <div class="col-sm-2">
                                    <button class="btn-sm btn-danger text-white border-1"
                                        style="margin-top:20px">Delete</button>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-sm-3">
                                    <img src="https://sklep.ntt.pl/65480-large_default/komputer-do-gier-ntt-game-r-ryzen-5-3400g-amd-vega-11-16gb-ram-480gb-ssd-w10.jpg"
                                        class="img-fluid" style="height: 100px">
                                </div>

                                <div class="col-sm-5">
                                    <h3>Computer</h3>

                                    <p>This is a very good computer.You can play in new games and surf at internet.You can
                                        watch popular movies.</p>
                                </div>

                                <div class="col-sm-2 text-center">
                                    <input type="number" value="1" style="width: 50px;margin-top:20px">
                                </div>

                                <div class="col-sm-2">
                                    <button class="btn-sm btn-danger text-white border-1"
                                        style="margin-top:20px">Delete</button>
                                </div>
                            </div>
                            <hr>
                        </div>
                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-sm-3">
                                    <img src="https://sklep.ntt.pl/65480-large_default/komputer-do-gier-ntt-game-r-ryzen-5-3400g-amd-vega-11-16gb-ram-480gb-ssd-w10.jpg"
                                        class="img-fluid" style="height: 100px">
                                </div>

                                <div class="col-sm-5">
                                    <h3>Computer</h3>
                                    <p>This is a very good computer.You can play in new games and surf at internet.You can
                                        watch popular movies.</p>
                                </div>
                                <div class="col-sm-2 text-center">
                                    <input type="number" value="1" style="width: 50px;margin-top:20px">
                                </div>

                                <div class="col-sm-2">

                                    <button class="btn-sm btn-danger text-white border-1"
                                        style="margin-top:20px">Delete</button>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-sm-3">
                                    <img src="https://sklep.ntt.pl/65480-large_default/komputer-do-gier-ntt-game-r-ryzen-5-3400g-amd-vega-11-16gb-ram-480gb-ssd-w10.jpg"
                                        class="img-fluid" style="height: 100px">
                                </div>

                                <div class="col-sm-5">
                                    <h3>Computer</h3>
                                    <p>This is a very good computer.You can play in new games and surf at internet.You can
                                        watch popular movies.</p>
                                </div>
                                <div class="col-sm-2 text-center">
                                    <input type="number" value="1" style="width: 50px;margin-top:20px">
                                </div>

                                <div class="col-sm-2">

                                    <button class="btn-sm btn-danger text-white border-1"
                                        style="margin-top:20px">Delete</button>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-sm-3">
                                    <img src="https://sklep.ntt.pl/65480-large_default/komputer-do-gier-ntt-game-r-ryzen-5-3400g-amd-vega-11-16gb-ram-480gb-ssd-w10.jpg"
                                        class="img-fluid" style="height: 100px">
                                </div>

                                <div class="col-sm-5">
                                    <h3>Computer</h3>
                                    <p>This is a very good computer.You can play in new games and surf at internet.You can
                                        watch popular movies.</p>
                                </div>
                                <div class="col-sm-2 text-center">
                                    <input type="number" value="1" style="width: 50px;margin-top:20px">
                                </div>

                                <div class="col-sm-2">

                                    <button class="btn-sm btn-danger text-white border-1"
                                        style="margin-top:20px">Delete</button>
                                </div>
                            </div>
                        </div>
                        <hr class="m-0 p-0">
                    </div>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="card card-body">
                    <div>
                        <h2><b>Podsumowanie</b></h2>
                    </div>
                    <hr class="mt-0">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Ilosc</th>
                                <th>Nazwa</th>
                                <th>koszt jednej</th>
                                <th>Dostawa</th>
                                <th>Vat</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>3</td>
                                <td>Computer</td>
                                <td>3500zl</td>
                                <td>100zl</td>
                                <td>0,23%</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="text-center">
                        <button class="btn-sm btn-dark">Kupuje i place</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
