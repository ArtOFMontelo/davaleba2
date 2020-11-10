@extends('Layouts.app')

@section('content')

    {{ Form::open(['action' => '\App\Http\Controllers\CarController@store', 'autocomplete' => 'off']) }}

        <div class="form-group">
            <label>Name</label>
            <input name="name" type="string" class="form-control">
        </div>

        <div class="form-group">
            <label>Make</label>
            <input name="make" type="string" class="form-control">
        </div>

        <div class="form-group">
            <label>Model</label>
            <input name="model" type="float" class="form-control">
        </div>

        <div class="form-group">
            <label>License Number</label>
            <input name="license_number" type="float" class="form-control">
        </div>

        <div class="form-group">
            <label>Weight</label>
            <input name="weight" type="float"  class="form-control">
        </div>

        <div class="form-group">
            <label>Registration Year</label>
            <input name="registration_year" type="float"  class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Create</button>
        <a class="btn btn-danger" href="/">Back</a>

    {{ Form::close() }}

@endsection