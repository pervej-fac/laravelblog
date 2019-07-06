<div class="form-group">
    <label class="col-md-12">Name</label>
    <div class="col-md-12">
        <input name="name" value="{{ old('name', isset($author)?$author->name:null) }}" type="text" class="form-control form-control-line @error('name') is-invalid @enderror">
    </div>
    @error('name')
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label class="col-md-12">Email</label>
    <div class="col-md-12">
        <input name="email" value="{{ old('email', isset($author)?$author->email:null) }}" type="text" class="form-control form-control-line @error('email') is-invalid @enderror">
    </div>
    @error('email')
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label class="col-md-12">Phone</label>
    <div class="col-md-12">
        <input name="phone" value="{{ old('phone', isset($author)?$author->phone:null) }}" type="text" class="form-control form-control-line @error('phone') is-invalid @enderror">
    </div>
    @error('phone')
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label class="col-md-12">Address</label>
    <div class="col-md-12">
        <textarea name="address" rows="5" class="form-control form-control-line @error('address') is-invalid @enderror">{{ old('address', isset($author)?$author->address:null) }}</textarea>
    </div>
</div>

<div class="form-group">
    @php
        if(old('gender')){
            $gender=old('gender');
        }elseif(isset($author)){
            $gender=$author->gender;
        }else{
            $gender=null;
        }
    @endphp
    <label class="col-md-12">Gender</label>
    <div class="col-md-12">
        <input name="gender" @if($gender=='male') checked @endif value="male" type="radio" id="male"><label for="male">Male</label>
        <input name="gender" @if($gender=='female') checked @endif value="female" type="radio" id="female"><label for="female">Female</label>
        <input name="gender" @if($gender=='others') checked @endif value="others" type="radio" id="others"><label for="others">Others</label>
    </div>
    @error('gender')
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label class="col-md-12">Details</label>
    <div class="col-md-12">
        <textarea name="details" rows="5" class="form-control form-control-line @error('details') is-invalid @enderror">{{ old('details', isset($author)?$author->details:null) }}</textarea>
    </div>
</div>

<div class="form-group">
        <label class="col-md-12">Image</label>
        <div class="col-md-12">
            @if (isset($author) && $author->image != null)
                <img src="{{ asset($author->image) }}" alt="" width="100px" hieght="100px">
            @endif
            <input name="image" type="file" class="form-control form-control-line @error('image') is-invalid @enderror">
        </div>
        @error('image')
            <div class="text-danger">{{ $message }}</div>
        @enderror
</div>

