@if($errors->any())
    <div class="notification-is-danger">
        <ul style="list-style-type: none; color: red">
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif