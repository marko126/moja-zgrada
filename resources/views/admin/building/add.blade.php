@extends('admin.layout')

@section('content')

<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="{{route('admin.dashboard')}}">Dashboard</a>
    </li>
    <li class="breadcrumb-item">
        <a href="{{route('admin.building.index')}}">Buildings</a>
    </li>
    <li class="breadcrumb-item active">
        Add
    </li>
</ol>
<h1>Add Building</h1>
<hr>			

<div class="card mb-3">
    <div class="card-header">
        <i class="fa fa-table"></i> Add Building
    </div>
    <div class="card-body">

        <!-- System Message -->
        @if(!empty(session()->get('systemMessage')))
        <div class="alert alert-success alert-dismissible show" role="alert">
            {{session()->get('systemMessage')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        <form method='POST' action="{{route('admin.building.create')}}">
            @csrf
            <div class="form-group">
                <label>Manager id</label> 
                <input name="manager_id" placeholder="Enter Manager id" aria-describedby="titleHelpBlock" class="form-control here" type="text" value="{{old('manager_id')}}"> 
                @if($errors->has('manager_id'))
                <div class="form-errors text-danger">
                    @foreach($errors->get('manager_id') as $errorMessage)
                    <label class="error">{{$errorMessage}}</label>
                    @endforeach
                </div>
                @endif
            </div>
            <div class="form-group">
                <label>Name</label> 
                <input name="name" placeholder="Enter Name" aria-describedby="titleHelpBlock" class="form-control here" type="text" value="{{old('name')}}"> 
                @if($errors->has('name'))
                <div class="form-errors text-danger">
                    @foreach($errors->get('name') as $errorMessage)
                    <label class="error">{{$errorMessage}}</label>
                    @endforeach
                </div>
                @endif
            </div> 
            <div class="form-group">
                <label>Building Number</label> 
                <input name="building_number" placeholder="Enter Building Number" aria-describedby="titleHelpBlock" class="form-control here" type="text" value="{{old('building_number')}}"> 
                @if($errors->has('building_number'))
                <div class="form-errors text-danger">
                    @foreach($errors->get('building_number') as $errorMessage)
                    <label class="error">{{$errorMessage}}</label>
                    @endforeach
                </div>
                @endif
            </div> 
            <div class="form-group">
                <label>Unique id</label> 
                <input name="unique_id" placeholder="Enter Unique id" aria-describedby="titleHelpBlock" class="form-control here" type="text" value="{{old('unique_id')}}"> 
                @if($errors->has('unique_id'))
                <div class="form-errors text-danger">
                    @foreach($errors->get('unique_id') as $errorMessage)
                    <label class="error">{{$errorMessage}}</label>
                    @endforeach
                </div>
                @endif
            </div>
            <div class="form-group">
                <label>Tax id</label> 
                <input name="tax_id" placeholder="Enter Tax id" aria-describedby="titleHelpBlock" class="form-control here" type="text" value="{{old('tax_id')}}"> 
                @if($errors->has('tax_id'))
                <div class="form-errors text-danger">
                    @foreach($errors->get('tax_id') as $errorMessage)
                    <label class="error">{{$errorMessage}}</label>
                    @endforeach
                </div>
                @endif
            </div>
            <div class="form-group">
                <label>Address</label> 
                <input name="address" placeholder="Enter Address" aria-describedby="titleHelpBlock" class="form-control here" type="text" value="{{old('address')}}"> 
                @if($errors->has('address'))
                <div class="form-errors text-danger">
                    @foreach($errors->get('address') as $errorMessage)
                    <label class="error">{{$errorMessage}}</label>
                    @endforeach
                </div>
                @endif
            </div>
            <div class="form-group">
                <label>City</label> 
                <input name="city" placeholder="Enter City" aria-describedby="titleHelpBlock" class="form-control here" type="text" value="{{old('city')}}"> 
                @if($errors->has('city'))
                <div class="form-errors text-danger">
                    @foreach($errors->get('city') as $errorMessage)
                    <label class="error">{{$errorMessage}}</label>
                    @endforeach
                </div>
                @endif
            </div>
            <div class="form-group">
                <label>Township</label> 
                <input name="township" placeholder="Enter Township" aria-describedby="titleHelpBlock" class="form-control here" type="text" value="{{old('township')}}"> 
                @if($errors->has('township'))
                <div class="form-errors text-danger">
                    @foreach($errors->get('township') as $errorMessage)
                    <label class="error">{{$errorMessage}}</label>
                    @endforeach
                </div>
                @endif
            </div>
            <div class="form-group">
                <label>Postal Code</label> 
                <input name="postal_code" placeholder="Enter Postal Code" aria-describedby="titleHelpBlock" class="form-control here" type="text" value="{{old('postal_code')}}"> 
                @if($errors->has('postal_code'))
                <div class="form-errors text-danger">
                    @foreach($errors->get('postal_code') as $errorMessage)
                    <label class="error">{{$errorMessage}}</label>
                    @endforeach
                </div>
                @endif
            </div>
            <div class="form-group">
                <label>Entrance</label> 
                <input name="entrance" placeholder="Enter Entrance" aria-describedby="titleHelpBlock" class="form-control here" type="text" value="{{old('entrance')}}"> 
                @if($errors->has('entrance'))
                <div class="form-errors text-danger">
                    @foreach($errors->get('entrance') as $errorMessage)
                    <label class="error">{{$errorMessage}}</label>
                    @endforeach
                </div>
                @endif
            </div>
            <div class="form-group">
                <label>Number of apartments</label> 
                <input name="num_of_apartments" placeholder="Enter Number of apartments" aria-describedby="titleHelpBlock" class="form-control here" type="text" value="{{old('num_of_apartments')}}"> 
                @if($errors->has('num_of_apartments'))
                <div class="form-errors text-danger">
                    @foreach($errors->get('num_of_apartments') as $errorMessage)
                    <label class="error">{{$errorMessage}}</label>
                    @endforeach
                </div>
                @endif
            </div>
            <div class="form-group">
                <label>Description</label> 
                <input name="description" placeholder="Enter Description" aria-describedby="titleHelpBlock" class="form-control here" type="text" value="{{old('description')}}"> 
                @if($errors->has('description'))
                <div class="form-errors text-danger">
                    @foreach($errors->get('description') as $errorMessage)
                    <label class="error">{{$errorMessage}}</label>
                    @endforeach
                </div>
                @endif
            </div>
            <div class="form-group">
                <label>Status</label> 
                <input name="status" placeholder="Enter Status" aria-describedby="titleHelpBlock" class="form-control here" type="text" value="{{old('status')}}"> 
                @if($errors->has('status'))
                <div class="form-errors text-danger">
                    @foreach($errors->get('status') as $errorMessage)
                    <label class="error">{{$errorMessage}}</label>
                    @endforeach
                </div>
                @endif
            </div>
            <div class="form-group text-right">
                <a href="{{route('admin.building.index')}}" class="btn btn-secondary">Cancel</a>
                <button name="submit" type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
</div>

@endsection

