@extends('layouts.main')

@section('content')
    @section('title', 'Catalog')
    @include('inc.alert')
    <style>
        .book {
            border: 1px solid #acb4c5;
            text-align: center;
            margin-top: 20px;
            border-radius: 15px;
            padding: 20px
        }
        .book_link{
            color: #1a202c;
        }
        .book_link:hover{
            box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
            color: #1a202c;
        }
        .book_title{
            margin-top: 10px;
        }
        .book_author{
            color: #6b7280;
        }
        .book_price{
            font-size: 18px;
        }
    </style>
    <div class="container">
        <div class="row">
            @foreach($items as $item)
                @if($item->status)
                <div class="col-md-3">
                    <a href="#" class="book_link">
                        <div class="book">
                            <div class="imgContainer">
                                <img src="{{$item->image}}" alt="">
                            </div>
                            <h3 class="book_title">{{$item->name}}</h3>
                            <p class="book_author">{{$item->author}}</p>
{{--                            <p class="book_price">{{$item->price}}тг</p>--}}
                        </div>
                    </a>
                </div>
                @endif
            @endforeach
        </div>
    </div>
@endsection
