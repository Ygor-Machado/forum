@extends('admin.layouts.app')

@section('title', 'Fórum')

@section('header')
    @include('admin.supports.partials.header')
@endsection

@section('content')
    @include('admin.supports.partials.content')

<x-pagination
              :paginator="$supports"
              :appends="$filters"
/>
@endsection

