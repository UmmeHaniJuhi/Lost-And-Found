@extends('layouts.adminDashboard')
@section('name', 'Posts Dashboard')
@section('content')
    

    <div class="card">
        <div class="card-header">
          Posts
        </div>
        <div class="card-body">
          <h5 class="card-title">All posts</h5>
          <table class="table table-striped table-light table-hover">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    {{-- <th>Date</th> --}}
                    <th>Urgent</th>
                    <th>Reported</th>
                    <th>PostType</th>
                    <th>Description</th>
                    <th>Location</th>
                    <th>Found</th>
                    <th>Category</th>
                    <th>Phone</th>
                    {{-- <th>Email</th> --}}
                    <th></th>
                    <th></th>
                    <th>Actions</th>
                    <th></th>

                </tr>
              </thead>
              <tbody>
                @foreach ($results as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->title}}</td>
                    {{-- <td>{{$item->date}}</td> --}}
                    {{-- <td>{{$item->urgent}}</td> --}}
                    {{-- <td>{{$item->reported}}</td> --}}

                    @if($item->urgent == true)         
                        <td><input class="form-check-input" type="checkbox" id="flexSwitchCheckDisabled" checked disabled></td>         
                    @else
                        <td><input class="form-check-input" type="checkbox" id="flexSwitchCheckDisabled" disabled></td>        
                    @endif

                    @if($item->reported == true)         
                        <td><input class="form-check-input" type="checkbox" id="flexSwitchCheckDisabled" checked disabled></td>         
                    @else
                        <td><input class="form-check-input" type="checkbox" id="flexSwitchCheckDisabled" disabled></td>        
                    @endif

                    @if($item->type == 'foundpost')
                        <td><p class="">Found</p></td>
                    @else
                        <td><p class="">Lost</p></td>
                    @endif

                    <td>{{$item->description}}</td>
                    <td>{{$item->location}}</td>
                    @if($item->status == 'found')         
                        <td><input class="form-check-input" type="checkbox" id="flexSwitchCheckDisabled" checked disabled></td>         
                    @else
                        <td><input class="form-check-input" type="checkbox" id="flexSwitchCheckDisabled" disabled></td>        
                    @endif
                    <td>{{$item->category}}</td>
                    <td>{{$item->phone}}</td>
                    {{-- <td>{{$item->type}}</td> --}}
                    
                    {{-- <td>{{$item->email}}</td> --}}
                    <td> <a href="{{ url('view_posts/'.$item->id) }}"><button type="button" class="btn btn-info">Details</button></a></td>

                    @if($item->status == 'archived')         
                    <td> <a href="{{ url('activate_post/'.$item->id) }}"><button type="button" class="btn btn-success">Activate</button></a> </td>         
                    @elseif($item->status == 'active')
                    <td> <a href="{{ url('archive_post/'.$item->id) }}"><button type="button" class="btn btn-warning">Archive</button></a> </td>
                    @else        
                    <td> <button type="button" class="btn btn-secondary" disabled>Archive</button> </td>        
                    @endif

                    <td> <a href="{{ url('delete/'.$item->id) }}"><button type="button" class="btn btn-danger">Delete</button></a> </td>

                    @if($item->urgent == false)
                    <td> <a href="{{ url('make_urgent/'.$item->id) }}"><button type="button" class="btn btn-primary text-nowrap">Make Urgent</button></a> </td>
                    @else
                    <td> <a href="{{ url('revoke_urgency/'.$item->id) }}"><button type="button" class="btn btn-dark text-nowrap">Revoke Urgency</button></a> </td>
                    @endif
                </tr>
                @endforeach
            </tbody>
            
        </table>
        
        </div>
    </div>


@endsection