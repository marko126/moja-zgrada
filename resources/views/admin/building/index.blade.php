@extends('admin.layout')

@section('content')

<ol class="breadcrumb">
    <li class="breadcrumb-item active">
        Buildings
    </li>
</ol>
<h1>Buildings List</h1>
<hr>			
<!-- System Message -->
@if(!empty(session()->get('systemMessage')))
<div class="alert alert-success alert-dismissible show" role="alert">
    {{session()->get('systemMessage')}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
<div class="card mb-3">
    <div class="card-header">
        <i class="fa fa-table"></i> Buildings list

        <div class="btn-group btn-group-sm float-right">
            <a class="btn btn-secondary" href="{{route('admin.building.add')}}">
                <i class="fa fa-plus"></i>
                Add Building
            </a>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($buildings as $building)
                    <tr>
                        <td>{{$building['id']}}</td>
                        <td>{{$building['manager_id']}}</td>
                        <td>{{$building['name']}}</td>
                        <td>{{$building['building_number']}}</td>
                        <td>{{$building['unique_id']}}</td>
                        <td>{{$building['tax_id']}}</td>
                        <td>{{$building['address']}}</td>
                        <td>{{$building['city']}}</td>
                        <td>{{$building['township']}}</td>
                        <td>{{$building['postal_code']}}</td>
                        <td>{{$building['entrance']}}</td>
                        <td>{{$building['num_of_apartments']}}</td>
                        <td>{{$building['description']}}</td>
                        <td>{{$building['status']}}</td>
                        <td>
                            <div class="btn-group">
                                <a class="btn btn-secondary" href="{{route('admin.building.edit', ['id' => $building['id']])}}" title="edit"><i class="fa fa-pencil"></i></a>
                                <button class="btn btn-secondary" 
                                        title="delete" 
                                        data-toggle="modal" 
                                        data-target="delete-building"
                                        data-id="{{ $building->id }}"
                                        data-name="{{ $building->name }}">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <form method="POST" action="{{ route('admin.building.delete') }}" class="modal fade" id="delete-building" tabindex="-1" role="dialog" aria-hidden="true">
        @csrf
        <input type="hidden" name="id" value="">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Building</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Are you sure you want to delete building <span id="building-name-span"></span>?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection

@push('footer_js')
<script>
    $('[data-target="delete-building"]').on('click', function () {

        var id = $(this).attr('data-id');

        var name = $(this).attr('data-name');

        $('input[name="id"]').val(id);

        $('#building-name-span').text(name);

        $('#delete-building').modal('show');

    });
</script>
@endpush

