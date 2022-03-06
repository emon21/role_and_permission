@error('name')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
{{--  
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif  --}}