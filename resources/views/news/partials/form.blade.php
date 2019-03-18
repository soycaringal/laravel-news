<div class="form-group">
    <input 
    	class="form-control" 
    	name="title" 
    	placeholder="Enter Title"
    	type="text" 
    	value="{{ $news->title ?? old('title') }}" 
    >
</div>
<div class="form-group">
    <textarea 
    	class="form-control" 
    	name="body" 
    	cols="30" 
    	rows="5" 
    	placeholder="Enter Body"
    >{{ $news->body ?? old('body') }}</textarea>
</div>
<div class="form-group">
    <button type="submit" class="btn btn-success">Submit</button>
</div>
@csrf