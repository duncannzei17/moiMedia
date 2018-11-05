@extends('layouts.app')

@section('content')
<?php use App\Http\Controllers\ArticlesController;
echo ArticlesController::show(); ?>

@endsection
