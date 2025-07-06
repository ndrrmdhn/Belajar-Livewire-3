<div class="container my-5 d-flex justify-content-center">
    <div class="card shadow" style="max-width: 400px; width: 100%;">
        <div class="card-body text-center">
            <div class="mb-4">
                <img src="https://ui-avatars.com/api/?name={{ urlencode($user->name) }}&background=0D8ABC&color=fff&size=128"
                    alt="Avatar" class="rounded-circle img-thumbnail shadow-sm" width="128" height="128">
            </div>
            <h3 class="card-title mb-2">{{ $user->name }}</h3>
            <p class="card-text text-muted mb-1">
                <i class="bi bi-envelope"></i> {{ $user->email }}
            </p>
        </div>
    </div>
</div>
