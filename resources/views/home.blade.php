@extends('layouts.app')

@section('content')

hello welcome {{auth()->user()->name}}
@endsection