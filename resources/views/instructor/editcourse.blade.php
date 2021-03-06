@extends('instructor.layout')

@section('content')
	<div class="row">
		<div class="col-md-8 col-md-offset-1">
			<h2>Edit Post</h2>
              <form method="POST" action="/courses/{{$cpost->id}}/edit" >
               {{ method_field('PATCH') }}
                          
               		<input type="hidden" name="_token" value="{{ csrf_token() }}"></input>
                    <div class="form-group">
                    Post Title
                    <textarea name="title" class="form-control">{{$cpost->title}}</textarea>
                    </div>

                    <div class="form-group">
                    Post Description
                    <textarea name="desc" class="form-control">{{$cpost->desc}}</textarea>
                    </div>

                    <div class="form-group">
                    Image
                    <input class="file_in" type="file" name="image">{{$cpost->image}}</input>
                    Or<br>File  
                    <input class="file_in" type="file" name="file">{{$cpost->file}}</input>
                    </div>
                        
                    <button type="submit" class="btn btn-primary">Save Changes</button>         
                         
               </form>
		</div>
	</div>
@endsection