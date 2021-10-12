@extends('layouts.app')

@section('slider')
    <div class="container">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner" style="height: 600px;border-radius:10px">
                <div class="carousel-item active">
                    <img src="https://image.ceneostatic.pl/data/products/98834524/i-microsoft-surface-laptop-go-12-45-i5-8gb-128gb-win10-thh00009.jpg"
                        class="d-block w-100" alt="..." style="max-height: 600px">
                </div>
                <div class="carousel-item">
                    <img src="https://mi-store.pl/pol_pl_Telewizor-4K-Xiaomi-Mi-TV-P1-43-1457_3.jpg" class="d-block w-100"
                        alt="..." style="max-height: 600px">
                </div>
                <div class="carousel-item">
                    <img src="https://image.ceneostatic.pl/data/products/21622907/i-samsung-rb29ferncss.jpg"
                        class="d-block w-100" alt="..." style="max-height: 600px">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon bg-dark" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="next">
                <span class="carousel-control-next-icon bg-dark" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
@endsection

@section('content')

    <div class="container">
        <div class="d-flex" style="justify-content: center;margin-bottom:10px">
            <div class="col-sm-2 bg-dark text-white text-center ps-0" style="margin-top: 30px;border-radius:20px">
                <h2><b>New Items</b></h2>
            </div>
        </div>


        <div class="row slider">
            @foreach ($items as $item)
                <div class="col-sm-10">
                    <div class="col-sm-12">
                        <div class="card card-body" style="margin-right: 10px;border-radius:10px">
                            <img src="{{ $item->photo }}" class="img-fluid">
                            <p class="card-text">{{ $item->name }}</p>

                            <div class="box-stars">
                                <div class="star-widtget">
                                    <input type="radio" class="rate" id="rate-1">
                                    <label for="rate-1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                        </svg></label>
                                    <input type="radio" class="rate" id="rate-2">
                                    <label for="rate-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                        </svg></label>
                                    <input type="radio" class="rate" id="rate-3">
                                    <label for="rate-3"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                        </svg></label>
                                    <input type="radio" class="rate" id="rate-4">
                                    <label for="rate-4"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                        </svg></label>
                                    <input type="radio" class="rate" id="rate-5">
                                    <label for="rate-5"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                        </svg></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="container">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner" style="border-radius:10px">
                <div class="carousel-item active">
                    <img src="https://weneedmore.space/wp-content/uploads/2021/01/minimalistyczna-tapeta-kalendarz-2021-01.jpg"
                        style="height: 300px" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://weneedmore.space/wp-content/uploads/2021/01/minimalistyczna-tapeta-kalendarz-2021-01.jpg"
                        style="height: 300px" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://weneedmore.space/wp-content/uploads/2021/01/minimalistyczna-tapeta-kalendarz-2021-01.jpg"
                        style="height: 300px" class="d-block w-100" alt="...">
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="w-100 d-flex" style="justify-content: center;margin-bottom:10px">
            <div class="col-sm-3 bg-dark text-white text-center ps-0" style="margin-top: 30px;border-radius:20px">
                <h2><b>New Collections</b></h2>
            </div>
        </div>

        <div class="row slider">
            @foreach ($collection as $item)
                <div class="col-sm-10">
                    <div class="col-sm-12">
                        <div class="card card-body" style="margin-right: 10px;border-radius:10px">
                            <img src="{{ $item->photo }}" class="img-fluid">
                            <p class="card-text">{{ $item->name }}</p>

                            <div class="box-stars">
                                <div class="star-widtget">
                                    <input type="radio" class="rate" id="rate-1">
                                    <label for="rate-1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                        </svg></label>
                                    <input type="radio" class="rate" id="rate-2">
                                    <label for="rate-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                        </svg></label>
                                    <input type="radio" class="rate" id="rate-3">
                                    <label for="rate-3"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                        </svg></label>
                                    <input type="radio" class="rate" id="rate-4">
                                    <label for="rate-4"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                        </svg></label>
                                    <input type="radio" class="rate" id="rate-5">
                                    <label for="rate-5"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                        </svg></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
@endsection
