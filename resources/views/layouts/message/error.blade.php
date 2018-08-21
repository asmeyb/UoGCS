@if(count($errors) > 0)
    <ul class="list-group">
        @foreach($errors->all() as $error)
            <li>
                
                <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                    &times;
                </button>
                    {{ $error }}
                </div>
                
            </li>
        @endforeach
    </ul>
@endif

