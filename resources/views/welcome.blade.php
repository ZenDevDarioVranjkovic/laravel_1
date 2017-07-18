@extends('layouts.master')

@section('content')
    <div class="row">
        <col-md-12>
            <h1>Control Structures</h1>
                @if(true)
                <p>This only displays if it is true</p>
                @else
                <p>This only displays if it is false</p>
                @endif

                @for($i = 0; $i < 5; $i++)
                    <p>{{ $i + 1}}. Iteration</p>
                @endfor
        </col-md-12>
    </div>
@endsection