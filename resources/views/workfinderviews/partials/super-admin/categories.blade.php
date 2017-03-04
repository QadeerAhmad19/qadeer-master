@extends('app')

@section('content')
    <div class="content">
        @include('workfinderviews.partials.super-admin.left-nav')
    </div>
    <div class="dashboard-content">
        @if(!isset($category))
        <div style="margin-left: 142px; margin-top: 12px;">
            <table class="table table-condensed">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Text</th>
                    <th>$ Rate</th>
                    <th>Edit Button</th>
                    {{--<th></th>--}}
                </tr>
                </thead>
                <tbody>
                @foreach($categories as $cat=>$value)
                    <tr>
                        <td>{{$value->name}}</td>
                        <td>{{$value->short_dec}}</td>
                        <td>{{$value->per_hour}}</td>
                        <td>
                            <button type="button" class="btn btn-info btn-lg" onclick="javascript:location.href='/admin/EditCat/{{$value->id}}';">Edit</button>
                        </td>
                        {{--<td>--}}
                        {{--<button type="button" class="btn btn-info btn-lg" onclick="javascript:location.href='/portal/sadmin/delete_current_category/{{$value->id}}';">Delete</button>--}}
                        {{--</td>--}}
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        @else
            <div class="cat-form">
                <form action="/admin/saveeditcat" method="post">
                    <input type="hidden" value="{{csrf_token()}}" name="_token"/>
                    <input type="hidden" value="{{$category->id}}" name="id"/>
                <h4 class="heading-primary text-uppercase mb-lg">Edit Category</h4>
                <div class="row">
                    <div class="col-sm-6 col-md-6">
                        <div class="form-group">
                            <label class="font-weight-normal">Name<span class="required">*</span></label>
                            <input type="text" name="cat_name" class="form-control" value="{{$category->name}}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-md-6">
                        <div class="form-group">
                            <label class="font-weight-normal">Short Description<span class="required">*</span></label>
                            <input type="text" name="cat_dec" class="form-control" value="{{$category->short_dec}}">
                        </div>
                    </div>
                </div>
                    <div class="row">
                        <div class="col-sm-6 col-md-6">
                            <div class="form-group">
                                <label class="font-weight-normal">$ Hourly Rate<span class="required">*</span></label>
                                <input type="number" name="rate" class="form-control" value="{{$category->per_hour}}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-md-6">
                            <div class="form-group">
                                <button class="btn btn-save">Save</button>
                            </div>
                        </div>
                    </div>
            </form>
            </div>
        @endif
    </div>
@endsection
