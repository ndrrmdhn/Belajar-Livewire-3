<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <div class="card shadow-sm border-1 rounded">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Edit User</h4>
                </div>
                <div class="card-body">
                    @if (session()->has('message'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('message') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <form wire:submit.prevent="update" autocomplete="off">
                        <input type="hidden" wire:model="userIndex">

                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input wire:model.defer="user.name" type="text" class="form-control @error('user.name') is-invalid @enderror" id="name" placeholder="Enter full name" autofocus>
                            @error('user.name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input wire:model.defer="user.email" type="email" class="form-control @error('user.email') is-invalid @enderror" id="email" placeholder="Enter email address">
                            @error('user.email') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>

                        <div class="d-flex justify-content-between">
                            <button type="submit" class="btn btn-primary px-4">
                                <i class="bi bi-save me-1"></i> Update
                            </button>
                            <a href="{{ route('users.index') }}" class="btn btn-outline-secondary px-4">
                                <i class="bi bi-arrow-left me-1"></i> Cancel
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>