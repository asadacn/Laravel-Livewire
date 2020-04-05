<div class="row justify-content-center my-5">
    <div class="h1">Laravel - Livewire CRUD</div>

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            <strong>Sorry!</strong> invalid input.<br><br>
            <ul style="list-style-type:none;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    @if($updateMode)
        @include('contact.updates')
    @else
        @include('contact.new')
    @endif


    <table class="table table-bordered ">
        <tr>
            <td>ID</td>
            <td>NAME</td>
            <td>PHONE</td>
            <td>ACTION</td>
        </tr>

        @foreach($data as $row)
            <tr>
                <td>{{$row->id}}</td>
                <td>{{$row->name}}</td>
                <td>{{$row->phone}}</td>
                <td width="100">
                    <button wire:click="edit({{$row->id}})" class="btn btn-sm btn-warning mb-1">Edit</button>
                    <button wire:click="destroy({{$row->id}})" class="btn btn-sm btn-danger">Del</button>
                </td>
            </tr>
        @endforeach
    </table>

</div> 