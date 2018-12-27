@csrf
<div class="was-validated">
    <label for="exampleInputName">New name for your Project</label>
    <input type="text" class="form-control {{$errors->has('title') ? 'is-invalid' : ''}}" name="title"
           id="title" aria-describedby="title"
           placeholder="Enter your project name" value="{{old('title') ?? $project->title}}" required>
    <div class="invalid-feedback">
        The project name must be at least 2 characters.
    </div>
    @if($errors->has('title'))
        <div class="invalid-feedback">
            {{$errors->get('title')[0]}}
        </div>
    @endif
</div>
<div class="was-validated">
    <label for="validationTextarea">Description</label>
    <textarea class="form-control {{$errors->has('description') ? 'is-invalid' : ''}}"
              name="description" placeholder="Write a description of your project"
              required>{{old('description') ?? $project->description}}</textarea>
    <div class="invalid-feedback">
        Please write a description.
    </div>
    @if($errors->has('description'))
        <div class="invalid-feedback">
            {{$errors->get('description')[0]}}
        </div>
    @endif
</div>
<div class="form-group col-md-4">
    <label for="user_id">Responsible for the project</label>
    <select id="user_id" name="user_id" class="form-control" {{$errors->has('user_id') ? 'is-invalid' : ''}}>
        @foreach($users as $user)
            <option value="{{$user->id}}" {{$project->user_id == $user->id ? 'selected' : ''}}>{{$user->name}}</option>
        @endforeach
    </select>
</div>