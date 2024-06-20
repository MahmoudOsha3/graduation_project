@extends('layouts.website.app')

@section('title') Departments @endsection

@livewireStyles()

@section('content')

    <livewire:doctor-within-departments />

    @livewireScripts()
@endsection
