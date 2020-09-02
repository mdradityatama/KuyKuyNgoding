<div>
    <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Update Skill</h3>
        </div>
        <form wire:submit.prevent="update">
          <div class="card-body">
            <input type="hidden" wire:model="skillID" />
            <div class="form-group" data-children-count="1">
              <label for="titleSkill">Title</label>
              <input wire:model="title" type="text" class="form-control @error("title") is-invalid @enderror" id="titleSkill" placeholder="Enter Skill Name" >
              @error("title")
                <div class="invalid-feedback">
                    <span><strong>{{ $message }}</strong></span>
                </div>
              @enderror
            </div>
          </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Update</button>
          </div>
        </form>
      </div>
</div>
