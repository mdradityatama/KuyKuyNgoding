@extends('adminlte::page')

@section('css')
    <livewire:styles>
    <livewire:scripts>
@stop

@section('content_header')
    <h1>Profile Edit</h1>
@stop

@section('content')
        <livewire:profile-edit></livewire:profile-edit>
@stop