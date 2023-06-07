@extends('layouts.fe-auth')
@section('content')
    <section style="background-color: #eee;">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp"
                                alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                            <h5 class="my-3">{{ $user->name }}</h5>
                            <p class="text-muted mb-1">{{ Str::afterLast(Auth::user()->profile_type, '\\') }}</p>

                            @if (Auth::user()->profile_type === 'App\Models\University')
                                <p class="text-muted mb-4">{{ $user->full_address }}</p>
                            @endif

                            <div class="d-flex justify-content-center mb-2">
                                <a href="{{ route('auth.edit-profile') }}" type="button" class="btn btn-primary">Edit
                                    Profile Details</a>
                            </div>
                        </div>
                    </div>

                    @if (Auth::user()->profile_type === 'App\Models\University')
                        <div class="card mb-4 mb-lg-0">
                            <div class="card-body p-0">
                                <ul class="list-group list-group-flush rounded-3">
                                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                        <i class="fas fa-globe fa-lg text-warning"></i>
                                        <p class="mb-0">{{ $user->website ?? 'N/A' }}</p>
                                    </li>

                                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                        <i class="fab fa-twitter fa-lg" style="color: #55acee;"></i>
                                        <p class="mb-0">{{ $user->twitter ?? 'N/A' }}</p>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                        <i class="fab fa-instagram fa-lg" style="color: #ac2bac;"></i>
                                        <p class="mb-0">{{ $user->instagram ?? 'N/A' }}</p>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                        <i class="fab fa-facebook-f fa-lg" style="color: #3b5998;"></i>
                                        <p class="mb-0">{{ $user->facebook ?? 'N/A' }}</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    @endif
                </div>

                <div class="col-lg-8">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Full Name</p>
                                </div>

                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ $user->name }}</p>
                                </div>
                            </div>

                            <hr>

                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Email</p>
                                </div>

                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ $user->email }}</p>
                                </div>
                            </div>

                            <hr>

                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Mobile Number</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ $user->full_mobile_number }}</p>
                                </div>
                            </div>

                            <hr>

                            @if (Auth::user()->profile_type === 'App\Models\University')
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Alternative Mobile Number</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">{{ $user->full_alt_mobile_number }}</p>
                                    </div>
                                </div>

                                <hr>

                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Address</p>
                                    </div>

                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">{{ $user->full_address }}</p>
                                    </div>
                                </div>

                                <hr>

                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Status</p>
                                    </div>
                                    <div class="col-sm-9">
                                        @if ($user->status === 'pending')
                                            <label class="badge badge-warning">Pending</label>
                                        @elseif ($user->status === 'active')
                                            <label class="badge badge-success">Active</label>
                                        @elseif ($user->status === 'active')
                                            <label class="badge badge-danger">Inactive</label>
                                        @endif
                                    </div>
                                </div>
                            @endif

                            <hr>

                            @if (Auth::user()->profile_type === 'App\Models\Agent')
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Address</p>
                                    </div>

                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">{{ $user->full_address }}</p>
                                    </div>
                                </div>

                                <hr>

                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Student Source Country</p>
                                    </div>

                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">{{ $user->student_source_country }}</p>
                                    </div>
                                </div>

                                <hr>

                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Preferred Contact Method</p>
                                    </div>

                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">{{ $user->preferred_contact_method }}</p>
                                    </div>
                                </div>

                                <hr>

                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Preferred Contact Method Number</p>
                                    </div>

                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">{{ $user->preferred_contact_method_number }}</p>
                                    </div>
                                </div>

                                <hr>

                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">How Did You Find About Uniwolc</p>
                                    </div>

                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">{{ $user->how_did_you_find_about_uniwolc }}</p>
                                    </div>
                                </div>

                                <hr>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
