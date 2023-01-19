@extends('members.layout')
@section('content')
    <div class="container">
        <div class="row">
 
            <div class="col-md-12">
                <div class="card">
                    <div class="py-5 text-center">
                        <img class="d-block mx-auto mb-4" src="{{ asset("storage/logo2.png")}}" alt="" width="150" height="150">
                
                       
                        <h2>IGLESIA UNIVERSAL DEl REINO DE DIOS </h2>
                        <p class="lead">"Soy siervo del Señor, que me ha llamado para anunciar el Evangelio." (Romanos 1:1)</p>
                        <br>
                        <h3>Dale Click Button</h3>
                        <div class="card-body">
                            <a href="{{ url('/member/create') }}" class="btn btn-success btn-sm" title="Add New Student">
                                <i class="fa fa-plus" aria-hidden="true"></i> Add New Member
                            </a>
                            <br/>
                            <br/>
                           
                        </div>
                      </div>
                    
                </div>
            </div>
        </div>
    </div>
@endsection