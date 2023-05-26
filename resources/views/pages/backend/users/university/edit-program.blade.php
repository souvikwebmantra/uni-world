@extends('layouts.app')
@section('content')
    <div class="page-header">
        <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-white me-2">
                <i class="mdi mdi-account-multiple-outline"></i>
            </span> Programs
        </h3>
    </div>

    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Create Program</h4>
                <form class="form-sample"
                    action={{ route('university.program-update', ['id' => $program->id, 'username' => Auth::user()->profile->username]) }}
                    method="POST">
                    @csrf
                    @method('PUT')
                    @if ($errors->any())
                        @include('theme.components.backend.errors', ['errors' => $errors])
                    @endif

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Title</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="title" value="{{ $program->title }}"
                                        required />
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Category</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="category_id" required>
                                        <option value="active">Select a Category</option>
                                        @forelse ($categories as $category)
                                            <option {{ $category->id == $program->category_id ? 'selected' : '' }}
                                                value="{{ $category->id }}">{{ $category->name }}</option>
                                        @empty
                                            <option value="active">No Category Found</option>
                                        @endforelse
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Duration</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="duration"
                                        value="{{ old('duration') ?? $program->duration }}" required />
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Total Sems</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" name="total_sem"
                                        value="{{ old('total_sem') ?? $program->total_sem }}" required />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Status</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="is_active" required>
                                        <option {{ $program->is_active === 1 ? 'selected' : '' }} value="active">
                                            Active</option>
                                        <option {{ $program->is_active === 0 ? 'selected' : '' }} value="inactive">
                                            In Active</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Program Level</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="program_level"
                                        value="{{ old('program_level') ?? $program->program_level }}" required />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Apply Fees</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" name="apply_fees"
                                        value="{{ old('apply_fees') ?? $program->apply_fees }}" required />
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Gross Fees</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" name="gross_fees"
                                        value="{{ old('gross_fees') ?? $program->gross_fees }}" required />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Minimum Qualification</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="minimum_qualification"
                                        value="{{ old('minimum_qualification') ?? $program->minimum_qualification }}"
                                        required />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Minimum GPA</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" name="minimum_gpa"
                                        value="{{ $program->minimum_gpa }}" required />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Minimum Language Test Score</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" name="minimum_language_test_score"
                                        value="{{ $program->minimum_language_test_score }}" />
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Cost Of Living</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" name="cost_of_living"
                                        value="{{ old('cost_of_living') ?? $program->cost_of_living }}" required />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Application Open Date</label>
                                <div class="col-sm-9">
                                    <input type="date" class="form-control" name="application_open_date"
                                        value="{{ old('application_open_date') ?? $program->application_open_date }}"
                                        required />
                                </div>
                            </div>
                        </div>



                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Application Deadline</label>
                                <div class="col-sm-9">
                                    <input type="date" class="form-control" name="application_deadline"
                                        value="{{ old('application_deadline') ?? $program->application_deadline }}"
                                        required />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="col-sm-3 col-form-label" for="exampleTextarea1">Description</label>
                                <textarea class="form-control" id="exampleTextarea1" name="description" rows="4">{{ old('description') ?? $program->description }}
                                </textarea>
                            </div>
                        </div>
                    </div>

                    <input type="hidden" class="form-control" name="university_id"
                        value="{{ Auth::user()->profile->id }}" required />

                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button type="submit" class="btn btn-gradient-primary">Submit</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
