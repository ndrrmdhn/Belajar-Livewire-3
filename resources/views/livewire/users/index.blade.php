<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="mb-0">User List</h2>
        {{-- <a href="{{ route('users.create') }}" class="btn btn-primary">
            <i class="bi bi-plus-lg"></i> Add User
        </a> --}}
    </div>
    <div class="card shadow-sm">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col" style="width: 5%;">#</th>
                            <th scope="col" style="width: 8%;">Avatar</th>
                            <th scope="col" style="width: 22%;">Name</th>
                            <th scope="col" style="width: 25%;">Email</th>
                            <th scope="col" class="text-center" style="width: 15%;">Role</th>
                            <th scope="col" class="text-end" style="width: 25%;">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        @forelse($users as $index => $user)
                        <tr>
                            <th scope="row">{{ method_exists($users, 'firstItem') ? $users->firstItem() + $index : $index + 1 }}</th>
                            <td>
                                <img src="{{ $user->avatar_url ?? 'https://ui-avatars.com/api/?name='.urlencode($user->name) }}" alt="Avatar" class="rounded-circle border" width="40" height="40">
                            </td>
                            <td>
                                <div class="fw-semibold">{{ $user->name }}</div>
                            </td>
                            <td>
                                <span class="text-muted">{{ $user->email }}</span>
                            </td>
                            <td class="text-center">
                                <span class="badge bg-{{ $user->role === 'admin' ? 'success' : 'secondary' }} px-3 py-2 fs-6">
                                    {{ ucfirst($user->role) }}
                                </span>
                            </td>
                            <td class="text-end">
                                <div class="btn-group" role="group">
                                    <button type="button" class="btn btn-sm btn-outline-info" title="View" data-bs-toggle="modal" data-bs-target="#userModal{{ $user->id }}">
                                        <i class="bi bi-eye"></i>
                                    </button>

                                    <!-- User Detail Modal -->
                                    <div class="modal fade" id="userModal{{ $user->id }}" tabindex="-1" aria-labelledby="userModalLabel{{ $user->id }}" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content border-0 shadow-lg">
                                                <div class="modal-header bg-secondary text-white border-0">
                                                    <h5 class="modal-title" id="userModalLabel{{ $user->id }}">
                                                        <i class="bi bi-person-circle me-2"></i>User Details
                                                    </h5>
                                                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body px-4 py-4">
                                                    <div class="d-flex flex-column align-items-center mb-4">
                                                        <img src="{{ $user->avatar_url ?? 'https://ui-avatars.com/api/?name='.urlencode($user->name) }}" alt="Avatar" class="rounded-circle border border-3 border-primary shadow-sm mb-3" width="90" height="90">
                                                        <h5 class="mb-1 fw-bold">{{ $user->name }}</h5>
                                                        <span class="badge bg-{{ $user->role === 'admin' ? 'success' : 'secondary' }} px-3 py-2 fs-6">
                                                            {{ ucfirst($user->role) }}
                                                        </span>
                                                    </div>
                                                    <ul class="list-group list-group-flush mb-2">
                                                        <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0">
                                                            <span class="fw-semibold text-muted">Email:</span>
                                                            <span>{{ $user->email }}</span>
                                                        </li>
                                                        <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0">
                                                            <span class="fw-semibold text-muted">Role:</span>
                                                            <span>{{ ucfirst($user->role) }}</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="modal-footer border-0 pt-0 pb-4">
                                                    <button type="button" class="btn btn-outline-secondary w-100" data-bs-dismiss="modal">
                                                        <i class="bi bi-x-circle me-1"></i>Close
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-sm btn-outline-warning" title="Edit">
                                        <i class="bi bi-pencil"></i>
                                    </a>
                                    <button wire:click="delete({{ $user->id }})" class="btn btn-sm btn-outline-danger" title="Delete" onclick="return confirm('Are you sure?');">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" class="text-center py-4 text-muted">
                                <i class="bi bi-people fs-2 mb-2"></i>
                                <div>No users found.</div>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        @if(method_exists($users, 'links'))
        <div class="card-footer bg-dark border-top-0">
            <div class="d-flex justify-content-between align-items-center flex-wrap">
                <div class="text-muted small">
                    Showing 
                    <span class="fw-semibold">
                        {{ $users->firstItem() ?? 0 }}
                    </span>
                    to 
                    <span class="fw-semibold">
                        {{ $users->lastItem() ?? 0 }}
                    </span>
                    of 
                    <span class="fw-semibold">
                        {{ $users->total() ?? 0 }}
                    </span>
                    users
                </div>
                <div>
                    {{ $users->links('pagination::bootstrap-5') }}
                </div>
            </div>
        </div>
        @endif
    </div>
</div>