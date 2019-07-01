<div class="form-group">
    @php
        if(old('category_id')){
            $category_id=old('category_id');
        }elseif(isset($post)){
            $category_id=$post->category_id;
        }else{
            $category_id=null;
        }
    @endphp
    <label class="col-md-12">Category</label>
    <div class="col-md-12">
        <select name="category_id" id="category" class="form-control form-control-line @error('category_id') is-invalid @enderror">
            <option value="">Select Category</option>
            @foreach ($categories as $category)
                <option @if ($category_id==$category->id) selected @endif value={{ $category->id }}>{{ $category->name }}</option>
            @endforeach
        </select>
        {{--  <input name="title" value="{{ old('title', isset($post)?$post->title:null) }}" type="text" class="form-control form-control-line @error('title') is-invalid @enderror">  --}}
    </div>
    @error('category_id')
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    @php
        if(old('author_id')){
            $author_id=old('author_id');
        }elseif(isset($post)){
            $author_id=$post->author_id;
        }else{
            $author_id=null;
        }
    @endphp
        <label class="col-md-12">Author</label>
        <div class="col-md-12">
            <select name="author_id" id="category" class="form-control form-control-line @error('author_id') is-invalid @enderror">
                <option value="">Select Author</option>
            @foreach ($authors as $author)
                <option @if ($author_id==$author->id) selected @endif  value={{ $author->id }}>{{ $author->name }}</option>
            @endforeach
            </select>
            {{--  <input name="title" value="{{ old('title', isset($post)?$post->title:null) }}" type="text" class="form-control form-control-line @error('title') is-invalid @enderror">  --}}
        </div>
        @error('author_id')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

<div class="form-group">
    <label class="col-md-12">Title</label>
    <div class="col-md-12">
        <input name="title" value="{{ old('title', isset($post)?$post->title:null) }}" type="text" class="form-control form-control-line @error('title') is-invalid @enderror">
    </div>
    @error('title')
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>


<div class="form-group">
    <label class="col-md-12">Details</label>
    <div class="col-md-12">
        <textarea name="details" rows="5" class="form-control form-control-line @error('details') is-invalid @enderror">{{ old('address', isset($post)?$post->details:null) }}</textarea>
    </div>
</div>

<div class="form-group">
        <label class="col-md-12">Image</label>
        <div class="col-md-12">
            @if (isset($post) && $post->file != null)
                <img src="{{ asset($post->file) }}" alt="" width="100px" hieght="100px">
            @endif
            <input name="file" type="file" class="form-control form-control-line @error('file') is-invalid @enderror">
        </div>
        @error('file')
            <div class="text-danger">{{ $message }}</div>
        @enderror
</div>

<div class="form-group">
    @php
        if(old('status')){
            $status=old('status');
        }elseif(isset($post)){
            $status=$post->status;
        }else{
            $status=null;
        }
    @endphp
    <label class="col-md-12">Status</label>
    <div class="col-md-12">
        <input name="status" @if($status=='published') checked @endif value="published" type="radio" id="published"><label for="published">Published</label>
        <input name="status" @if($status=='unpublished') checked @endif value="unpublished" type="radio" id="unpublished"><label for="unpublished">Unpublished</label>
        <input name="status" @if($status=='draft') checked @endif value="draft" type="radio" id="draft"><label for="draft">Draft</label>
    </div>
    @error('status')
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>
