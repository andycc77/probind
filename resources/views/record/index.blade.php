@extends('layouts.admin')

{{-- Web site Title --}}
@section('title')
    {{ trans('record/title.view_records') }} :: @parent
@endsection

{{-- Content Header --}}
@section('header')
    {{ trans('record/title.view_records') }}
    <small>{{ trans('record/title.view_records_subtitle', ['domain' => $zone->domain]) }}</small>
@endsection

{{-- Breadcrumbs --}}
@section('breadcrumbs')
    <li>
        <a href="{{ route('home') }}">
            <i class="fa fa-dashboard"></i> {{ trans('site.dashboard') }}
        </a>
    </li>
    <li class="active">
        {{ trans('record/title.view_records') }}
    </li>
@endsection


{{-- Content --}}
@section('content')

    <!-- Notifications -->
    @include('partials.notifications')
    <!-- ./ notifications -->

    <!-- actions -->
    <a href="{{ route('zones.records.create', $zone) }}" class="btn btn-success margin-bottom" role="button">
            <i class="fa fa-plus"></i> {{ trans('record/title.create_new') }}
    </a>
    <!-- /.actions -->
    <div class="box">
        <div class="box-body">
            @include('record._table')
        </div>
    </div>
@endsection
