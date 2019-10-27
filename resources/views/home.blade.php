@extends('layouts.master')
@section('title')
CLUBS
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header myButton">CLUBS <br> This is a list of lists of association football clubs from all over the world. 
                Each of the articles from here lists clubs playing at the highest level in each country.</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                <a href="/clubs"> <button class="myButton">Click to change clubs</button></a>   
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
