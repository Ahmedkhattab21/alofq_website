@if (session('success'))
    <div class="form-success" role="status">
        <span class="material-symbols-outlined">check_circle</span>
        {{ session('success') }}
    </div>
@endif

@if ($errors->any())
    <div class="form-errors" role="alert">
        <span class="material-symbols-outlined">error</span>
        <div>
            <strong>يرجى مراجعة البيانات التالية:</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endif
