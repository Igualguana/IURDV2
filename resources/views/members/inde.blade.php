@extends('members.layout')
@section('content')
    <div class="container">
        <div class="row">
 
            <div class="col-md-12
            ">
                <div class="card">
                    <div class="card-header">
                        <h2>Laravel 9 Crud</h2>
                    </div>
                    <div class="card-body">
                             
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>lastName</th>
                                        <th>telephone</th>
                                        <th>address</th>
                                        <th>country</th>
                                        <th>state</th>
                                        <th>zip</th>
                                        <th>Pedido de Oración</th>
                                        <th>¿Como conoció la Iglesia?</th>
                                        <th>Foto</th>
                                                                           </tr>
                                </thead>
                                <tbody>
                                @foreach($members as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->firstName}}</td>
                                        <td>{{ $item->lastName}}</td>
                                        <td>{{ $item->telephone}}</td>
                                        <td>{{ $item->address}}</td>
                                        <td>{{ $item->country}}</td>
                                        <td>{{ $item->state}}</td>
                                        <td>{{ $item->zip}}</td>
                                        <td>{{ $item->Oracion}}</td>
                                        <td>{{ $item->Medio}}</td>
                                       <td> <img src="{{asset($item->image)}}" width="50" height="50"
                            /></td>
                            <td>
                                <a href="{{ url('/member/' . $item->id) }}" title="View Student"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                <a href="{{ url('/student/' . $item->id . '/edit') }}" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                <form method="POST" action="{{ url('/student' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete Student" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                                </tbody>
                            </table>
                        </div>
 
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection