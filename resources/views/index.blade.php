@extends('layouts.index')

@section('title', 'Portafolio')

@section('content')

<div class="min-h-screen hero bg-base-200">
    <div class="flex-col hero-content lg:flex-row-reverse">
        <img
            src="https://daisyui.com/images/stock/photo-1635805737707-575885ab0820.jpg"
            class="max-w-sm rounded-lg shadow-2xl"
            alt="image-domy"
        />
        <div>
            <h1 class="text-5xl font-bold">Diego Rivas</h1>
            <p class="py-6">Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem
                quasi. In deleniti eaque aut repudiandae et a id nisi.</p>
            <button class="btn btn-primary">Get Started</button>
        </div>
    </div>
</div>

@endsection
