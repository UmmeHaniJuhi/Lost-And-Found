@extends('layouts.adminDashboard')
@section('name', 'Message Dashboard')



@section('content')
    

    <div class="card">
        <div class="card-header">
            Messages
        </div>
        <div class="card-body">
          <h5 class="card-title">All Messages</h5>
          <table class="table table-striped table-light table-hover">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Email</th>
                    <th></th>

                </tr>
              </thead>
                <tbody>
                @foreach ($results as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->email}}</td>
                    {{-- <td>{{$item->message}}</td> --}}
                    <td>
                        <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal_<?php echo $item->id; ?>">
                    View Message
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="myModal_<?php echo $item->id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog ">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="myModal_<?php echo $item->id; ?>">Message</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    {{$item->message}}
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
                </tr>
                @endforeach
                
                </tbody>
        </table>

        
        
        </div>
    </div>


@endsection