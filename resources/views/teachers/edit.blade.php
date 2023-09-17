@extends('layouts.plantilla')

@section('title', 'Edit/Update Teacher')
@section('content')

<a class="btn btn-primary" type="button" href="{{ route('teachers.index') }}">Back</a>
<h2>Edit/Update teacher</h2>

<div class="card card-body">
    <div class="card card-plain h-100">
        <div class="card-header pb-0 p-3">
            <div class="row">
                <div class="col-md-8 d-flex align-items-center">
                    <h6 class="mb-3">Teacher's Data</h6>
                </div>
            </div>
        </div>

        @include('partials.form-errors')

        <div class="card-body p-3">
            <form action="{{ route('teachers.update', $teacher->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="mb-3 col-md-6">
                        <label class="form-label">First name</label>
                        <input type="text" class="form-control border border-2 p-2" name="first_name" value="{{ $teacher->first_name }}">
                    </div>

                    <div class="mb-3 col-md-6">
                        <label class="form-label">Last name</label>
                        <input type="text" class="form-control border border-2 p-2" name="last_name" value="{{ $teacher->last_name }}">
                    </div>

                    <div class="mb-3 col-md-6">
                        <label class="form-label">Email address</label>
                        <input type="email" class="form-control border border-2 p-2" name="email" value="{{ $teacher->email }}">
                    </div>
                    
                    <div class="mb-3 col-md-6">
                        <label class="form-label">Phone</label>
                        <input type="number" class="form-control border border-2 p-2" name="phone" value="{{ $teacher->phone }}">
                    </div>
                </div>
                <button type="submit" class="btn bg-gradient-dark">Submit</button>
            </form>
        </div>
    </div>
</div>

@endsection