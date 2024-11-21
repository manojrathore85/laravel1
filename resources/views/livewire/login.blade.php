<div class="offset-md-4 col-md-4 pt-5">
    <div class="card">
        <div class="card-header">
            <h4>Login</h4>
        </div>
        <div class="card-body">
             @error('credentials') 
                <div class="alert alert-danger">                   
                    <span class="text-danger">{{ $message }}</span>
                </div>
            @enderror
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
           
            <button class="btn btn-primary" wire:click='login()' >login</button>

          
        </div>
    </div>
</div>

