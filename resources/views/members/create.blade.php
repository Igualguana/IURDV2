@extends('members.layout')
@section('content')
 
<div class="card">
  <div class="card-header"></div>
  <div class="card-body">
      
      <form action="{{ url('member') }}" method="post" enctype="multipart/form-data">
        {!! csrf_field() !!}
        <div class="py-5 text-center">
            <img class="d-block mx-auto mb-4" src="{{ asset("storage/logo2.png")}}" alt="" width="150" height="150">
    
           
            <h2>FICHA DE MIEMBRO </h2>
            <p class="lead">"Soy siervo del Señor, que me ha llamado para anunciar el Evangelio." (Romanos 1:1)</p>
            <br>
           
          </div>
          <form class="needs-validation" novalidate>
                <div class="row g-5">
                  
                  <div class="col-md-7 col-lg-12">
                    <h4 class="mb-3"></h4>
                    <div class="py-5 text-center">
                    <div id="preview" class="thumbnail">
        
                        <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNzEiIGhlaWdodD0iMTgwIj48cmVjdCB3aWR0aD0iMTcxIiBoZWlnaHQ9IjE4MCIgZmlsbD0iI2VlZSI+PC9yZWN0Pjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9Ijg1LjUiIHk9IjkwIiBzdHlsZT0iZmlsbDojYWFhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjEycHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+MTcxeDE4MDwvdGV4dD48L3N2Zz4="
                            width="200" height="200" />
    
                    </div>
                    <!--  <span class="alert alert-info" id="file-info">No hay archivo aún</span>-->
    
                    <form id="file-submit" enctype="multipart/form-data">
                        <input id="image" name="image" type="file" />
                        <div class="invalid-feedback">
                            Zip code required.
                          </div>
                    </form>
                </div>
                    
                      <div class="row g-3">
                        <div class="col-sm-6">
                          <label for="firstName" class="form-label">First name</label>
                          <input type="text" class="form-control"  name="firstName" id="firstName" placeholder="" value="{{ old('firstName') }}" required>
                          <div class="invalid-feedback">
                            Zip code required.
                          </div>
                        </div>
            
                        <div class="col-sm-6">
                          <label for="lastName" class="form-label">Last name</label>
                          <input type="text" class="form-control" id="lastName" name="lastName" placeholder="" value="{{ old('lastName') }}" required>
                          <div class="invalid-feedback">
                            Zip code required.
                          </div>
                        </div>
            
                              
                       
                        <div class="col-12">
                            <label for="telephone" class="form-label">telephone</label>
                            <input type="telephone" class="form-control" id="telephone" name="telephone" placeholder="7654456" value="{{ old('telephone') }}" required>
                           
                          </div>
            
                        <div class="col-12">
                          <label for="address" class="form-label">Address</label>
                          <input type="text" class="form-control" id="address" name="address" placeholder="1234 Main St"  value="{{ old('address') }}"required>
                          
                        </div>
            
                      
            
                        <div class="col-md-5">
                          <label for="country" class="form-label">Country</label>
                          <select class="form-select" id="country" name="country" value="{{ old('country') }}"required>
                            <option value="">Choose...</option>
                           
                            <option >Miami</option>
                            <option >Tampa</option>
                            <option >Orlando</option>
                            <option >Hialeah</option>
                            <option >Fort Lauderdale</option>
                            <option >Tallahassee (capital)</option>
                            <option >Jacksonville</option>
                            <option >Pembroke Pines</option>
                            <option >Hollywood</option>
                            <option >Cape Coral</option>
                            <option >St. Petersburg</option>
                            <option >Port St. Lucie</option>
                            <option >Miramar</option>
                            <option >Gainesville</option>
                            <option >Clearwater</option>
                            <option >Lakeland</option>
                            <option >Palm Bay</option>
                            <option >Miami Gardens</option>
                            <option >Boca Raton</option>
                            <option >Deltona</option>
                            <option >West Palm Beach</option>
                            <option >Palm Coast</option>
                            <option >Bradenton</option>
                            <option >Lake Worth</option>
                            <option >Sunrise</option>
                            <option >Largo</option>
                            <option >Melbourne</option>
                            <option >Palm Harbor</option>
                            <option >Key West</option>
                            <option >Panama City</option>
                            <option >Titusville</option>
                            <option >Sanford</option>
                            <option >Kissimmee</option>
                            <option >Homestead</option>
                            <option >Daytona Beach</option>
                            <option >Coral Springs</option>
                            <option >Fort Myers</option>
                            <option >Jupiter</option>
                            <option >Apopka</option>
                            <option >Pompano Beach</option>
                            <option >Pensacola</option>
                            <option >Brandon</option>
                            <option >Ocala</option>
                            <option >Lauderhill</option>
                            <option >Plantation</option>
                            <option >Hollywood</option>
                          </select>
                          
                        </div>
            
                        <div class="col-md-4">
                          <label for="state" class="form-label">State</label>
                          <select class="form-select" id="state"  name="state" value="{{ old('state') }}" required>
                            <option value="">Choose...</option>
                            <option>Florida</option>
                          </select>
                         
                        </div>
            
                        <div class="col-md-3">
                          <label for="zip" class="form-label">Zip</label>
                          <input type="text" class="form-control" id="zip"   name="zip" value="{{ old('zip') }}" placeholder="" required>
                          
                        </div>
                      </div>
    
    
                      <div class="col-12">
                        <label for="Oracion" class="form-label">Pedido de Oración</label>
                        <textarea type="text" class="form-control" id="Oracion"  name="Oracion" placeholder="1234 Main St"  value="{{ old('Oracion') }}"required></textarea>
                        
                      </div>
                     
    
                      
            
                      <hr class="my-4">
                      
                      <div class="col-md-4">
                        <label for="sMedio" class="form-label">¿Como conoció la Iglesia?</label>
                        <select class="form-select" id="Medio"  name="Medio" value="{{ old('Medio') }}" required>
                          <option value="">Choose...</option>
                          <option>TV</option>
                          <option>RADIO</option>
                          <option>EVG</option>
                        </select>
                       
                      </div>
            
                      <hr class="my-4">
            
                      
                      
                      <button class="w-100 btn btn-primary btn-lg" value="Save" type="submit">Enviar formulario </button>
                    </form>
                  </div>
                </div>
            </form>
    </form>
   
  </div>
</div>
 
@stop