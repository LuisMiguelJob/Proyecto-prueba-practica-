@extends('layouts.plantilla')

@section('title', 'Teacher')
@section('content')
    <a class="btn btn-primary" type="button" href="{{ route('teachers.create') }}">Add teacher</a>    

    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                        <h3 class="text-white text-capitalize ps-4">Teachers</h3>
                    </div>
                </div>
                <div class="card-body pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxxs font-weight-bolder opacity-7">
                                        ID
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxxs font-weight-bolder opacity-7">
                                        First_name / Last_Name
                                    </th>
                                    <th
                                        class="text-uppercase text-secondary text-xxxs font-weight-bolder opacity-7">
                                        Phone
                                    </th>
                                    <th
                                        class="text-uppercase text-secondary text-xxxs font-weight-bolder opacity-7">
                                        Email
                                    </th>
                                    <th
                                        class="text-uppercase text-secondary text-xxxs font-weight-bolder opacity-7">
                                        Functions
                                    </th>
                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($teachers as $teacher)
                                    <tr>
                                        <td>
                                            <div class="d-flex px-3 py-1">
                                                <h6 class="mb-0 text-md">{{ $teacher->id }}</h6>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="d-flex px-3 py-1">
                                                <h6 class="mb-0 text-md">{{ $teacher->first_name . ' ' . $teacher->last_name }}</h6>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="d-flex px-3 py-1">
                                                <h6 class="mb-0 text-md">{{ $teacher->phone }}</h6>
                                            </div>
                                        </td>
                                    
                                        <td>
                                            <div class="d-flex px-3 py-1">
                                                <h6 class="mb-0 text-md">{{ $teacher->email }}</h6>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <h6 class="mb-0 text-md">
                                                    <a class="btn btn-primary" type="button" href="{{ route('teachers.edit', $teacher->id) }}">
                                                        Edit
                                                    </a>
                                                </h6>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
