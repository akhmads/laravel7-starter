<div>
    <div class="card">
        <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="card-title m-0 me-2">Todo</h5>
        </div>
        <div class="card-body">

            <form wire:submit.prevent="store">
                <div class="mb-3">
                    <div class="input-group">
                        <input type="text" wire:model="name" class="form-control @error('name') is-invalid @enderror" placeholder="Add todo name">
                        <button class="btn btn-outline-primary" type="submit">Add</button>
                    </div>
                    @error('name')
                    <div class="d-block invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </form>

            <table class="table table-bordered mb-3">
            <thead>
            <tr>
                <th class="w-px-75">No</th>
                <th>Todo</th>
                <th class="w-px-100">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($todos as $todo)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $todo->name }}</td>
                <td class="text-center"><button wire:click="destroy('{{ $todo->id }}')" class="btn btn-xs btn-danger">Delete</button></td>
            </tr>
            @endforeach
            </tbody>
            </table>
            {{ $todos->links() }}
        </div>
    </div>
</div>
