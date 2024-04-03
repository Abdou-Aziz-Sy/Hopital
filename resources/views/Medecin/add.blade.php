@extends('layouts.dashboard')

@section('content')
<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed layout-compact" dir="ltr" data-theme="theme-default" data-assets-path="../assets/"
    data-template="vertical-menu-template-free">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Schedule Tracker</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        form {
            width: 100%;
            max-width: 500px;
            margin: 0 auto;
        }

        label {
            display: block;
            margin-top: 20px;
        }

        input,
        textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            margin-top: 20px;
            background-color: green;
            color: white;
        }
    </style>

    <form action="{{ URL('/create-schedule') }}" method="POST">
        @csrf
        <label for='title'>{{ __('title') }}</label>
        <input type='text' class='form-control' id='title' name='title'>

        <label for="start">{{__('Start')}}</label>
        <input type='datetime-local' class='form-control' id='start' name='start' required value='{{ now()->toDateTimeLocalString() }}'>

        <label for="end">{{__('Finish')}}</label>
        <input type='datetime-local' class='form-control' id='finish' name='finish' required value='{{ now()->toDateTimeLocalString() }}'>

        <label for="description">{{__('Description')}}</label>
        <textarea id="description" name="description"></textarea>

        <label for="color">{{__('Color')}}</label>
        <input type="color" id="color" name="color" />

        <input type="submit" value="Save" class="btn btn-success" />
    </form>
</html>
@endsection