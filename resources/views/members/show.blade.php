@extends('members.layout')
@section('content')
 
<div class="card">
  <div class="card-header"></div>
  <div class="card-body">
      
     
        <div class="py-5 text-center">
            <img class="d-block mx-auto mb-4" src="{{ asset("storage/logo2.png")}}" alt="" width="150" height="150">
    
           
            <h2>FICHA DE MIEMBRO </h2>
            <p class="lead">"Soy siervo del Señor, que me ha llamado para anunciar el Evangelio." (Romanos 1:1)</p>
            <br>
           
          </div>
         
                <div class="row g-5">
                  
                  <div class="col-md-7 col-lg-12">
                    <h4 class="mb-3"></h4>
                    <div class="py-5 text-center">
                    <div id="preview" class="thumbnail">
        
                    
    
                    </div>
                    <!--  <span class="alert alert-info" id="file-info">No hay archivo aún</span>-->
                  <img src="{{asset($members->image)}}" width="200" height="200"
                      />
                    
                </div>
                    
                      <div class="row g-3">
                        <div class="col-sm-6">
                          <label for="firstName" class="form-label"><b>FIRST NAME:</b>&nbsp; {{ $members->firstName }}</label>
                         
                         
                        </div>
            
                        <div class="col-sm-6">
                          <label for="lastName" class="form-label"><b>LAST NAME: </b>&nbsp;{{  $members->lastName}}</label>
                                               
                        </div>
            
                              
                       
                        <div class="col-12">
                            <label for="telephone" class="form-label"><b>TELEPHONE: </b>&nbsp;{{  $members->telephone}}</label>
                                                
                          </div>
                          <hr class="my-4">
                        <div class="col-12">
                          <label for="address" class="form-label"><b>ADDRESS: </b>&nbsp;{{  $members->address}}</label>
                   
                        </div>
            
                      
            
                        <div class="col-md-5">
                          <label for="country" class="form-label"><b>COUNTRY: </b>&nbsp;{{  $members->country}}</label>
                                                   
                        </div>
            
                        <div class="col-md-4">
                          <label for="state" class="form-label"><b>STATE: </b>&nbsp;{{  $members->state}}</label>
                         
                        </div>
            
                        <div class="col-md-3">
                          <label for="zip" class="form-label"><b>ZIP: </b>&nbsp;{{  $members->zip}}</label>
                                                  
                        </div>
                      </div>
    
                      <hr class="my-4">
                      <div class="col-12">
                        <label for="Oracion" class="form-label"><b>PEDIDO DE ORACION</b></label>
                        <p class="card-text"> {{  $members->Oracion}}</p>
                        
                      </div>
                     
    
                     
                      
            
                      <hr class="my-4">
                      
                      <div class="col-md-4">
                        <label for="Medio" class="form-label"><b>¿COMO CONOCIO LA IGLESIA?</b></label>
                        <p class="card-text"> {{  $members->Medio}}</p>
                       
                       
                      </div>
            
                      <hr class="my-4">
            
                      
                      
                      
                    </form>
                  </div>
                </div>
         
 
   
  </div>
</div>
 
@stop

