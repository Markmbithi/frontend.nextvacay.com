@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-4/12 bg-white p-6 rounded-lg">
            <div> {{ session()->get('message') }} </div>
        </div>
    </div>
@endsection