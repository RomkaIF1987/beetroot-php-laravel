@csrf
<div class="form-group">
    <label for="exampleInputName">New name for your Project</label>
    <input type="text" class="form-control {{$errors->has('title') ? 'is-invalid' : ''}}" name="title"
           id="title" aria-describedby="title"
           placeholder="Enter your project name" value="{{old('title') ?? $project->title}}">
    <small id="name" class="form-text text-muted">Come up with a project name</small>
    @if($errors->has('title'))
        <div class="invalid-feedback">
            {{$errors->get('title')[0]}}
        </div>
    @endif
</div>
<div class="form-group">
    <label>Description</label>
    <input type="text" class="form-control {{$errors->has('description') ? 'is-invalid' : ''}}"
           name="description" placeholder="Description"
           aria-describedby="title" value="{{old('description') ?? $project->description}}">
    <small id="emailHelp" class="form-text text-muted">Write a description of your project</small>
    @if($errors->has('description'))
        <div class="invalid-feedback">
            {{$errors->get('description')[0]}}
        </div>
    @endif
</div>