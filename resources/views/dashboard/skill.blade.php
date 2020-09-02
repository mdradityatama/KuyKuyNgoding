@extends('adminlte::page')

@section('css')
    <livewire:styles>
    <livewire:scripts>
@stop

@section('content_header')
    <h1>Skill Page</h1>
@stop

@section('content')
        <livewire:skill.skill-index></livewire:skill.skill-index>
@stop