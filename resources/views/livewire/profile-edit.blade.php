<div>
    <div class="row">
        <div class="col-md">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Edit Profile</h3>
                </div>
                <form wire:submit.prevent="update">
                    <div class="card-body">
                        @if (session()->has("message"))
                            <div class="alert alert-success">
                                {{ session("message")}}
                            </div>
                        @endif
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input wire:model="name" type="text" name="name" class="form-control @error("name") is-invalid @enderror" id="name" placeholder="Enter Name" value="{{ $data->name }}"> 
                            @error('name')
                                <span class="invalid-feedback">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input wire:model="email" type="email" name="email" class="form-control" id="email" value="{{ $data->email }}" disabled>
                        </div>
                    </div>
        
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Update Profile</button>
                    </div>

                </form>
            </div>
        </div>
        <div class="col-md">
            <div class="card card-danger">
                <div class="card-header">
                    <h3 class="card-title">Change Password</h3>
                </div>
                <form role="form" wire:submit.prevent="changePassword" >
                    <div class="card-body">
                        @if (session()->has("messageChangePassword"))
                            <div class="alert alert-success">
                                {{ session("messageChangePassword") }}
                            </div>
                        @endif
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input wire:model="password" type="password" name="password" class="form-control @error("password") is-invalid @enderror" id="password" placeholder="New Password"> 
                            @error("password")
                                <span class="invalid-feedback">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="confirmation_password">Confirmation Password</label>
                            <input wire:model="password_confirmation" type="password" name="password_confirmation" class="form-control" id="confirmation_password" placeholder="Confirmation Password">
                        </div>
                    </div>
        
                    <div class="card-footer">
                        <button type="submit" class="btn btn-danger">Update Password</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


</div>