@extends('layouts.plantilla')

@section('title', 'Add subject')
@section('content')

<a class="btn btn-primary" type="button" href="{{ route('subjects.index') }}">Back</a>
<h3>Add subject</h3>

@include('partials.form-errors')

<div class="card card-body">
    <div class="card card-plain h-100">
        <div class="card-header pb-0 p-3">
            <div class="row">
                <div class="col-md-8 d-flex align-items-center">
                    <h6 class="mb-3">Subject's Data</h6>
                </div>
            </div>
        </div>
        <div class="card-body p-3">
            <form action="{{ route('subjects.store') }}" method="POST">
                @csrf
                @method("POST")
                <div class="row">
                    <div class="mb-3 col-md-6">
                        <label class="form-label">Subject's name</label>
                        <input type="text" class="form-control border border-2 p-2" name="name" value="{{ old('name') }}">
                    </div>

                    <div class="mb-3 col-md-6">
                        <label class="form-label">Email's teacher</label>
                        <input type="email" class="form-control border border-2 p-2" name="email" value="{{ old('email') }}">
                    </div>
                    
                </div>
                <button type="submit" class="btn bg-gradient-dark">Submit</button>
            </form>
        </div>
    </div>
</div>

@endsection