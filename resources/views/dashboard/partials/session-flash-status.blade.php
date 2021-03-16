@if (session('status'))
    <div class="aletr alert-success">
        {{ session('status') }}
    </div>
@endif