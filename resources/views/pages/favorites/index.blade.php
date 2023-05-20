@extends('layouts.main')

@section('content')
    @section('title', 'Favorites')
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
                height: 300px;
            }

            .book {
                position: relative;
                border: 1px solid #f5f5f5;
                margin: 0 5px;
            }

            .favorite {
                position: absolute;
                left: 20px;
                z-index: 99;
            }
            .online{
                position: absolute;
                top: 0;
                right: 0;
                background-color: #0b5ed7;
                color: #fff;
                padding: 0 5px;
                border-radius: 5px;
            }
            @media (max-width: 767px) {
                .favorite {
                    left: -20px;
                }
            }
        </style>
    </head>

    <section class="text-gray-600 body-font">

        <div class="px-5 py-24 mx-auto">
            <div class="flex flex-wrap -m-4">
                @foreach($items as $item)
                    <div class="lg:w-1/4 md:w-1/2 p-4 w-full book">
                        <a href="{{route('catalog.favorites', $item->id)}}" class="favorite">
                            @php
                                $isFavorite = false;
                            @endphp
                            @foreach($favorites as $favorite)
                                @if($item->id == $favorite->item_id && auth()->user()->id == $favorite->user_id)
                                    @php
                                        $isFavorite = true;
                                    @endphp
                                @endif
                            @endforeach
                            @if(!$isFavorite)
                                <img src="{{asset('images/heart.png')}}" width="25" alt="">
                            @else
                                <img src="{{asset('images/heart_active.png')}}" width="25" alt="">
                            @endif
                        </a>
                        <a href="{{route('catalog.detail', $item->id)}}">
                            <div class="block relative h-48 rounded overflow-hidden">
                                <img class="object-cover object-center block book_img"
                                     src="{{url('storage/media/books/' . $item->image)}}"
                                     alt="{{$item->image}}">
                                @if(strlen($item->pdf) > 0)
                                    <span class="online">Есть в онлайн</span>
                                @endif
                            </div>
                            <div class="mt-4">
                                <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">{{$item->category}}</h3>
                                <h2 class="text-gray-900 title-font text-lg font-medium">{{$item->name}}</h2>
                                <p class="mt-1">{{$item->quantity > 0 ? "Есть в наличии" : "Нет в наличии"}}</p>
                            </div>
                        </a>
                    </div>

                @endforeach
            </div>
        </div>
    </section>
@endsection
