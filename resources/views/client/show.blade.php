@extends('layouts.app')

@section('content')
    <h4>
       @if ($modify == 1)
            Modify Client
        @elseif ($modify == 0)
            New Client
        @endif
    </h4>

    <form action="{{$modify == 1 ? route('update_client',['client_id' => 1 ]) : route('create_client')}}" method="post">

        <div class="row form-group">
            <label class="col-form-label col-2">Title</label>
            <select class="form-control col-2" name="form[title]">

                @foreach($titles as $title)
                    <option value="{{$title}}">{{$title}}. </option>
                @endforeach
            </select>

            <label class="col-form-label offset-1 col-1">Name</label>

            <input class="form-control col-2" name="form[name]" type="text">

            <label class="col-form-label col-2">Last Name</label>

            <input class="form-control col-2" name="form[lastName]" type="text">

        </div>

        <div class="row form-group">
            <label class="col-2">Address</label>
            <input class="col-10 form-control" name="form[address]" type="text">
        </div>
        <div class="row form-group">
            <label class="col-2">zip_code</label>
            <input class="col-10 form-control" name="form[zipCode]" type="text">
        </div>
        <div class="row form-group">
            <label class="col-2">City</label>
            <input class="col-10 form-control" name="form[city]" type="text">
        </div>
        <div class="row form-group">
            <label class="col-2">State</label>
            <input class="col-10 form-control" name="form[state]" type="text">
        </div>
        <div class="row form-group">
            <label class="col-2">Email</label>
            <input class="col-10 form-control" name="form[email]" type="text">
        </div>
        <div class="row form-group">
            <input value="SAVE" class="btn btn-success col-1 offset-11" type="submit">
        </div>
    </form>


@endsection
