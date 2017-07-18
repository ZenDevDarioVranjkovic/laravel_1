@extends('layouts.master')

@section('content')
    <h1>Some content</h1>
    {{ 2 == 2 ? "hello" : "Does not equal" }}
@endsection