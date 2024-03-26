<div>
    <div class="section-title"></div>
    <div class="form-group">
        <label>Viloyat
            @if ($errors->has('region_id'))
                <div style="color: red">{{ $errors->first('region_id') }}</div>
            @endif
        </label>
        <select wire:model.live="regionId" name="region_id" class="form-control selectric">
            <option value="">-select-</option>
            @foreach ($regions as $region)
                <option value="{{ $region->id }}"> {{ $region->name }} </option>
            @endforeach

        </select>

    </div>
    <div class="form-group">
        <label>Shahar
            @if ($errors->has('district_id'))
                <div style="color: red">{{ $errors->first('district_id') }}</div>
            @endif
        </label>

        <select wire:model.live="cityId" name="district_id" class="form-control selectric">
            <option value="">-select-</option>
            @foreach ($cities as $city)
                <option value="{{ $city->id }}"> {{ $city->name }} </option>
            @endforeach

        </select>
    </div>
    <div class="form-group">
        <label>MPJ(APJ)*
            @if ($errors->has('quarter_id'))
                <div style="color: red">{{ $errors->first('quarter_id') }}</div>
            @endif
        </label>

        <select wire:model.live="" name="quarter_id" class="form-control selectric">
            <option value="">-select-</option>
            @foreach ($quarters as $quarter)
                <option value="{{ $quarter->id }}"> {{ $quarter->name }} </option>
            @endforeach

        </select>
    </div>

    <div class="form-group form-float">
        <div class="form-line">
            <label class="form-label">Koshe(uy)*
                @if ($errors->has('street'))
                <div style="color: red">{{ $errors->first('street') }}</div>
            @endif
            </label>
            <textarea name="street" cols="30" rows="3" class="form-control no-resize" required></textarea>
        </div>
    </div>
    <div class="form-group">
        <div class="section-title">Jenillik turin saylan
          
        </div>
        <div class="custom-control custom-radio">
            <input type="radio" id="customRadio1" value="Jaslar dapteri" name="privilege"
                class="custom-control-input">
            <label class="custom-control-label" for="customRadio1">Jaslar dapteri</label>
        </div>
        <div class="custom-control custom-radio">
            <input type="radio" id="customRadio2 " value="Temir dapter" name="privilege" class="custom-control-input">
            <label class="custom-control-label" for="customRadio2">Temir dapter</label>
        </div>
        <div class="custom-control custom-radio">
            <input type="radio" id="customRadio3" value="Hayallar dapteri" name="privilege"
                class="custom-control-input">
            <label class="custom-control-label" for="customRadio3">Hayallar dapteri</label>
        </div>
        <div class="custom-control custom-radio">
            <input type="radio" id="customRadio4" value="Nagranligi bar" name="privilege"
                class="custom-control-input">
            <label class="custom-control-label" for="customRadio4">Nagranligi bar</label>
        </div>
    </div>
    <div class="section-title">Jenillik beriwshi hujjet(pdf,zip,jpg)
        @if ($errors->has('privilege_file'))
        <div style="color: red">{{ $errors->first('privilege_file') }}</div>
       @endif
    </div>
    <div class="custom-file">
        <input type="file" class="custom-file-input" name="privilege_file" id="customFile">
        <label class="custom-file-label" for="customFile">Choose file</label>
    </div>


</div>
