@extends('layouts.app')

@section('content')
@foreach ($item as $ite)
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
            <li class="breadcrumb-item" aria-current="page"><a href="/start">Start</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{$ite->name}}</li>
        </ol>
    </nav>
</div>
@endforeach

@endsection
