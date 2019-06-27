@extends('layouts.theme1.master')
@section('content')
    <div class=" offset-2 col-lg-8 col-xlg-9 col-md-7">
        <div class="card">
            <div class="card-body">
                <form class="form-horizontal form-material" action="{{ route('category.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label class="col-md-12">Category Name</label>
                        <div class="col-md-12">
                            <input name="name" value="{{ old('name') }}" type="text" class="form-control form-control-line @error('name') is-invalid @enderror">
                        </div>
                        @error('name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="col-md-12">Details</label>
                        <div class="col-md-12">
                            <textarea name="details" rows="5" class="form-control form-control-line">{{ old('details') }}</textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-12">
                            <button class="btn btn-success">Create</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
