@if($errors->any())
    <div class="alert alert-danger my-2">
        <p><strong>Opps Something went wrong</strong></p>
        <ul class="m-0">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    </div>
@endif