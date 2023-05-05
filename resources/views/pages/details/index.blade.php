@extends('layouts.main')

@section('content')
    @section('title', $item->name)
    <br>
    <br>
    <br>
    @include('inc.alert')
    <head>
        <link rel="stylesheet" href="{{asset('assets/css/tailwind.output.css')}}"/>
        <style>
            .book_img {
                width: auto;
                margin: auto;
                height: 500px;
            }

            .book {
                position: relative;
            }

            .book_container {
                width: 30%;
            }

            .book_content {
                width: 70%;
            }

            @media (max-width: 767px) {
                .favorite {
                    left: -20px;
                }
            }
        </style>
    </head>

    <section class="text-gray-600 body-font overflow-hidden">
        <div class=" px-5 py-24 mx-auto">
            <div class="mx-auto flex flex-wrap">
                <div class="book_container">
                    <img class="lg:w-1/2 w-full lg:h-auto h-64 object-cover object-center rounded book_img"
                         src="{{url('storage/media/books/' . $item->image)}}"
                         alt="{{$item->image}}">
                </div>
                <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0 book_content">
                    @foreach($categories as $category)
                        @if($category->id == $item->category_id )
                            <h2 class="text-sm title-font text-gray-500 tracking-widest">{{$category->name}}</h2>
                        @endif

                    @endforeach
                    <h1 class="text-gray-900 text-2xl title-font font-medium my-2"><b>{{$item->name}}</b></h1>
                    <p class="leading-relaxed">{{$item->description}}</p>
                    <div class="flex">
                        <span class="title-font font-medium text-2xl text-gray-900">{{$item->price}}₸</span>
                        <button
                            class="flex ml-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">
                            Button
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
