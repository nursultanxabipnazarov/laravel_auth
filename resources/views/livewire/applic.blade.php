
<div>
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="card-header">
                    <h4>Vertical Layout</h4>
                   
                </div>
                <div class="card-body">
                    <form id="wizard_with_validation" action="" method="POST" enctype="multipart/form-data">
                        <h3>Account Information</h3>
                        <fieldset>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <label class="form-label">Familiya*</label>
                                    <h1>  </h1>
                                    <input type="text" class="form-control" name="lastname" wire:model.live = "lastname" required>
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <label class="form-label">Ati*</label>
                                    <input type="text" class="form-control" name="firstname" required>
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <label class="form-label">JSHSHIR*</label>
                                    <input type="password" class="form-control" name="jshshir" id="password">
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <label class="form-label">Telefon*</label>
                                    <input type="password" class="form-control" name="phone">
                                </div>
                            </div>
                        </fieldset>
                        <h3>Profile Information</h3>
                        <fieldset>
                            <div class="section-title"></div>
                            <div class="form-group">
                              <label>Viloyat</label>
                              <select wire:model.live="regionId"   class="form-control selectric"  >
                                <option value="">-select-</option>
                                @foreach ($regions as $region)
                                    
                                <option value="{{$region->id}}" > {{$region->name}} </option>
                                @endforeach
                             
                              </select>
                              
                            </div>
                            <div class="form-group">
                              <label  >Shahar</label>
                              
                              <select wire:model.live="cityId"   class="form-control selectric"  >
                                <option value="">-select-</option>
                                @foreach ($cities as $city)
                                    
                                <option value="{{$city->id}}" > {{$city->name}} </option>
                                @endforeach
                             
                              </select>
                            </div>
                            <div class="form-group">
                                <label  >MPJ(APJ)*</label>
                                
                                <select wire:model.live=""   class="form-control selectric"  >
                                  <option value="">-select-</option>
                                  @foreach ($quarters as $quarter)
                                      
                                  <option value="{{$quarter->id}}" > {{$quarter->name}} </option>
                                  @endforeach
                               
                                </select>
                              </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <label class="form-label">MPJ(APJ)*</label>
                                    <input type="email" name="email" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <label class="form-label">Koshe(uy)*</label>
                                    <textarea name="street" cols="30" rows="3" class="form-control no-resize" required></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="section-title">Jenillik turin saylan</div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio1" name="privilege" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio1">Jaslar dapteri</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio2" name="privilege" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio2">Temir dapter</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio3" name="privilege" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio3">Hayallar dapteri</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio4" name="privilege" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio4">Nagranligi bar</label>
                                </div>
                            </div>
                            <div class="section-title">Jenillik beriwshi hujjet(pdf,zip,jpg)</div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="privilege_file" id="customFile">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>
                        </fieldset>
                        <h3> Finish</h3>
                        <fieldset>

                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>