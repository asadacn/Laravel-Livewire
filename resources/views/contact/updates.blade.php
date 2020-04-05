<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Update Contact</h3>
    </div>

    <div class="bg-light p-2">
        <div class="form-row">
            <input type="hidden" wire:model="selected_id">
            <div class="form-group">
                Name
                <input wire:model="name" type="text" class="form-control ">
            </div>
            <div class="form-group">
                Phone
                <input wire:model="phone" type="text" class="form-control ">
            </div>

            <div class="form-group ">
                <br>
                <button wire:click="update()" class="btn btn-success ml-2">Update</button>
            </div>
        </div>
    </div>

</div>