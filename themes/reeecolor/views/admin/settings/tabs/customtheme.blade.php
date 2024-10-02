<div class="tab-pane mt-3 active" id="customtheme">
    <form method="POST" enctype="multipart/form-data" class="mb-3"
        action="{{ route('admin.settings.update.customthemesettings') }}">
        @csrf
        @method('PATCH')

        <div class="row">
            <div class="col-md-3 p-3">

                <div class="form-group mb-3">
                    <div class="custom-control mb-3 p-0">
                        <label for="maincolor">{{ __('Main Color') }} </label>
                        <input x-model="maincolor" id="maincolor" name="maincolor"
                            type="color" required value="{{ config("SETTINGS::CUSTOMTHEME:MAIN_COLOR", "#343a40") }}"
                            class="form-control @error('maincolor') is-invalid @enderror">
                    </div>
                </div>
                <div class="form-group mb-3">
                    <div class="custom-control mb-3 p-0">

                        <label for="secondarycolor">{{ __('Secondary Color') }} </label>
                        <input x-model="secondarycolor" id="secondarycolor" name="secondarycolor"
                               type="color" required value="{{ config("SETTINGS::CUSTOMTHEME:SECONDARY_COLOR", "#454D55") }}"
                               class="form-control @error('secondarycolor') is-invalid @enderror">
                    </div>
                </div>
                <div class="form-group mb-3">
                    <div class="custom-control mb-3 p-0">

                        <label for="accentcolor">{{ __('Accent Color') }} </label>
                        <input x-model="accentcolor" id="accentcolor" name="accentcolor"
                               type="color" required value="{{ config("SETTINGS::CUSTOMTHEME:ACCENT_COLOR","#007bff") }}"
                               class="form-control @error('accentcolor') is-invalid @enderror">
                    </div>
                </div>

                <div class="custom-control mb-3 p-0">
                    <input value="true" id="enable-customtheme-bg" name="enable-customtheme-bg"
                           {{ config('SETTINGS::CUSTOMTHEME:ENABLE-BG') == 'true' ? 'checked' : '' }}
                           type="checkbox">
                    <label for="enable-login-logo">{{ __('Enable Background Image') }} </label>
                </div>

                <div class="form-group">
                    <div class="custom-file mb-3 mt-3">
                        <input type="file" accept="image/png,image/jpeg,image/jpg" class="custom-file-input" name="background"
                               id="background">
                        <label class="custom-file-label selected" for="background">{{ __('Select System Background') }}</label>
                    </div>
                    @error('background')
                    <span class="text-danger">
                            {{ $message }}
                        </span>
                    @enderror
            </div>
        </div>

        </div>






            <div class="row">
                <button class="btn btn-primary mt-3 ml-3">{{ __('Submit') }}</button>
                <button class="btn btn-secondary mt-3 ml-3" onclick="fillDefault()">{{__('Reset to default')}}</button>
            </div>

    </form>

</div>


<script>
    function fillDefault()
    {
        document.getElementById("maincolor").value = "#343a40";
        document.getElementById("secondarycolor").value = "#454D55";
        document.getElementById("accentcolor").value = "#007bff";
    }
</script>
