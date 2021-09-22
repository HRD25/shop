@extends('layouts.app')

@section('content')
    <div class="container-fluid mt-4">
        <div class="col-sm-2 bg-dark text-white">
            <h3>Cart Items</h3>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <div class="card card-body pb-0" style="height:350px;overflow: auto">
                    <div class="row">
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
                            <hr class="m-0 p-0">
                        </div>
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


        <div class="col-sm-2 bg-dark text-white mt-2">
            <h3>Cart Items</h3>
        </div>
    </div>
@endsection
