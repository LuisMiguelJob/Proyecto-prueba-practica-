@extends('layouts.plantilla')

@section('title', 'Add Teacher')
@section('content')

    <a class="btn btn-primary" type="button" href="{{ route('teachers.index') }}">Back</a>
    
    <h2>Add teacher</h2>
    @include('partials.form-errors')

    <div class="card card-body">
            <div class="card card-plain h-100">
                <div class="card-header pb-0 p-3">
                    <div class="row">
                        <div class="col-md-8 d-flex align-items-center">
                            <h6 class="mb-3">Teacher's Data</h6>
                        </div>
                    </div>
                </div>
                <div class="card-body p-3">
                    <form action="{{ route('teachers.store') }}" method="POST">
                        @csrf
                        @method('POST')
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="form-label">First name</label>
                                <input type="text" class="form-control border border-2 p-2" name="first_name" value="{{ old('first_name') }}">
                            </div>

                            <div class="mb-3 col-md-6">
                                <label class="form-label">Last name</label>
                                <input type="text" class="form-control border border-2 p-2" name="last_name" value="{{ old('last_name') }}">
                            </div>

                            <div class="mb-3 col-md-6">
                                <label class="form-label">Email address</label>
                                <input type="email" class="form-control border border-2 p-2" name="email" value="{{ old('email') }}">
                            </div>
                            
                            <div class="mb-3 col-md-6">
                                <label class="form-label">Phone</label>
                                <input type="number" class="form-control border border-2 p-2" name="phone" value="{{ old('phone') }}">
                            </div>
                            {{-- <div class="mb-3 col-md-6">
                                <label class="form-label">Location</label>
                                <input type="text" class="form-control border border-2 p-2">
                            </div>
                            <div class="mb-3 col-md-12">
                                <label for="floatingTextarea2">About</label>
                                <textarea class="form-control border border-2 p-2"
                                    placeholder=" Say something about yourself" id="floatingTextarea2" rows="4" cols="50"></textarea>
                            </div> --}}
                        </div>
                        <button type="submit" class="btn bg-gradient-dark">Submit</button>
                    </form>
                </div>
            </div>
    </div>

@endsection
