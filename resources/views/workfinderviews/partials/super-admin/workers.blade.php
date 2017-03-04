@extends('app')

@section('content')
    <div class="content">
        @include('workfinderviews.partials.super-admin.left-nav')
    </div>
    <div class="dashboard-content">
        <div style="margin-left: 142px; margin-top: 12px;">
            <table class="table table-condensed">
                <thead>
                <tr>
                    <th>Image</th>
                    <th>Name</th>
                    <th>$/hour</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Timing Slots</th>
                    <th>Categories</th>
                    <th>Status</th>
                </tr>
                </thead>
                <tbody>
                @foreach($workers as $cat=>$value)
                    <form action="/admin/workerprofilestatus" method="post">
                        <input type="hidden" value="{{csrf_token()}}" name="_token"/>
                        <input type="hidden" value="{{$value->id}}" name="id"/>
                    <tr>
                        <td>
                        <img style="width: 100px" src="{{url('images/uploads/'.$value->image)}}">
                        </td>
                        <td>{{$value->name}}</td>
                        <td>{{$value->rate}}</td>
                        <td>{{$value->email}}</td>
                        <td>{{$value->address}}</td>
                        <td>{{$value->mobile_number}}</td>
                        <td>
                            <ul>
                             @if($value->morning==1)
                                    <li>Available morning time From 8 am to 12 pm</li>
                             @endif
                             @if($value->afternoon==1)
                                     <li>Available afternoon time From 12 pm to 4 pm</li>
                             @endif
                             @if($value->evening==1)
                                     <li>Available evening time From 4 pm to 8 pm</li>
                             @endif
                            </ul>
                        </td>
                        <td>
                            <ul>
                                @foreach($value->categories as $item=>$cat)
                                    <li>{{$cat->name}}</li>
                                @endforeach
                            </ul>
                        </td>
                        <td>
                            <?php
                                $status=null;
                                if($value->status==0) {
                                        $status='Pending';
                                } else if($value->status==1){
                                    $status='Approved';
                                }
                            ?>
                            <select name="status" class="form-control" onchange="this.form.submit()">
                                <option value="{{$value->status}}" selected="true">{{$status}}</option>
                                @if($status=='Pending')
                                    <option value="1">Approved</option>
                                @else
                                    <option value="0">Pending</option>
                                @endif
                            </select>

                        </td>
                    </tr>
                   </form>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
