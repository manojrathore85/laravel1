<div>
    <h1>UserList</h1>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>S.No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php // dd($users); ?>
            @foreach($users as $user)
            <tr>
                <th>{{$user->id}}</th>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>
                    <button class="btn btn-sm btn-warning" wire:click="edit({{$user->id}})">Edit</button>
                    <button class="btn btn-sm btn-danger" wire:click="delete({{$user->id}})">Delete</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $users->links() }}

<div class="modal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">User</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <livewire:register/>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
</div>