<div>
  <div class="row">
    <div class="col-md">
      @if ($statusUpdate)
        <livewire:skill.skill-edit>
      @else
        <livewire:skill.skill-create :information="$information">
      @endif
    </div>
    <div class="col-md">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">The Skills you have</h3>
          <div class="card-tools">
            {{ $skills->links() }}
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body p-0">
          <table class="table table-striped">
            <thead>
              <tr>
                <th style="width: 10px">No.</th>
                <th>Title</th>
                <th style="width: 140px">Action</th>
              </tr>
            </thead>
            @if (session()->has("Message"))
              <div class="alert alert-success m-4">
                {{ session("Message") }}
              </div>
            @endif
            <tbody>
                @php
                    $no = 0;
                @endphp
                @foreach ($skills as $skill)
                @php
                 $no++   
                @endphp
                    <tr>
                        <td>{{ $no }}</td>
                        <td>{{ $skill->Title }}</td>
                        <td style="width: 140px">
                            <button wire:click="getSkill({{ $skill->SkillID }})" class="btn btn-primary btn-sm">Edit</button>
                            <button wire:click="delete({{ $skill->SkillID }})" class="btn btn-danger btn-sm">Delete</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
</div>
