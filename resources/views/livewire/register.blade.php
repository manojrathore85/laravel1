<div class="offset-md-4 col-md-4 pt-5">
    <div class="card">
        <div class="card-header">
            <h4>Register</h4>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label for="name">Name</label>
                <input wire:model="name" type="text" name="name" id="name" class="form-control" >
                @error('name') 
                    <span class="text-danger">{{ $message }}</span>
                @enderror          
            </div>
            <div class="form-group">
                <label for="name">Email</label>
                <input wire:model="email" type="email" name="email" id="email" class="form-control" > 
                @error('email') 
                    <span class="text-danger">{{ $message }}</span>
                @enderror            
            </div>
            <div class="form-group">
                <label for="name">Password</label>
                <input wire:model="password" type="password" name="password" id="password" class="form-control" >   
                @error('password') 
                    <span class="text-danger">{{ $message }}</span>
                @enderror          
            </div>
            <div class="form-group">
                <label  for="name">Confirm Password</label>
                <input wire:model="confirm_password" type="password" name="confirm_password" id="confirm_password" class="form-control" >
                @error('confirm_password') 
                    <span class="text-danger">{{ $message }}</span>
                @enderror           
            </div>
            <div class="form-group">
                <label for="name">Profile Image</label>
                <input wire:model="profile_image" class="form-control" type="file" name="profile_image" id="profile_image"> 
                @error('profile_image') 
                    <span class="text-danger">{{ $message }}</span>
                @enderror        
            </div>
            <button class="btn btn-primary" wire:click='save()' >Register</button>

          
        </div>
    </div>
</div>
