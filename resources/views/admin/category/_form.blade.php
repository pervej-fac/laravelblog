<div class="form-group">
    <label class="col-md-12">Category Name</label>
    <div class="col-md-12">
        <input name="name" value="{{ old('name', isset($category)?$category->name:null) }}" type="text" class="form-control form-control-line @error('name') is-invalid @enderror">
    </div>
    @error('name')
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label class="col-md-12">Details</label>
    <div class="col-md-12">
        <textarea name="details" rows="5" class="form-control form-control-line">{{ old('details', isset($category)?$category->details:null) }}</textarea>
    </div>
</div>
