<div class="tab-pane fade show active" id="v-pills-global" role="tabpanel" aria-labelledby="v-pills-global-tab">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group mb-3">
                <label for="site_logo">Site Main Logo</label>
                <div class="custom-file">
                    <input class="mainlogo" id="site_logo" data-show-remove="false"
                        data-default-file="{{ $settings['site_main_logo'] }}" type="file" name="site_main_logo">
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group mb-3">
                <label for="footer_logo">Site Fav Icon</label>
                <div class="custom-file">
                    <input class="footerlogo" id="footer_logo" data-show-remove="false"
                        data-default-file="{{ $settings['site_fav_icon'] }}" type="file" name="site_fav_icon">
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group mb-3">
                <label for="site_footer_logo">Site Footer Logo</label>
                <div class="custom-file">
                    <input class="mainlogo" id="site_footer_logo" data-show-remove="false"
                        data-default-file="{{ $settings['site_footer_logo'] }}" type="file" name="site_footer_logo">
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group mb-3">
                <label for="site_breadcrumb_banner">Site Breadcrumb Banner</label>
                <div class="custom-file">
                    <input type="hidden" name="site_breadcrumb_banner_removed" value="0">
                    <input class="mainlogo1" id="site_breadcrumb_banner"
                        data-default-file="{{ asset($settings['site_breadcrumb_banner']) }}" data-show-remove="true"
                        type="file" name="site_breadcrumb_banner">

                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group mb-3">
                <label for="site_information">Site Information</label>
                <textarea class="form-control br-8" name="site_information" rows="4" placeholder="Enter Site Information">{{ $settings['site_information'] }}</textarea>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group mb-3">
                <label for="site_phone">Phone Number</label>
                <input class="form-control br-8" type="tel" name="site_phone" value="{{ $settings['site_phone'] }}"
                    placeholder="Enter Phone Number">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group mb-3">
                <label for="site_email">Email</label>
                <input class="form-control br-8" type="email" name="site_email" value="{{ $settings['site_email'] }}"
                    placeholder="Enter Email">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group mb-3">
                <label for="site_location">Location</label>
                <input class="form-control br-8" type="text" name="site_location"
                    value="{{ $settings['site_location'] }}" placeholder="Enter Location">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group mb-3">
                <label for="site_location_url">Location Url</label>
                <input class="form-control br-8" type="text" name="site_location_url"
                    value="{{ $settings['site_location_url'] }}" placeholder="Enter Location Url">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group mb-3">
                <label for="site_map">Map</label>
                <input class="form-control br-8" type="text" name="site_map" value="{{ $settings['site_map'] }}"
                    placeholder="Enter Location Url">
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group mb-3">
                <label for="site_copyright">Site Copyright</label>
                <textarea class="form-control br-8" name="site_copyright" rows="4" placeholder="Enter Site Copyright">{{ $settings['site_copyright'] }}</textarea>
            </div>
        </div>
        {{-- <div class="col-md-12">
            <div class="form-group mb-3">
                <label for="blog_title">Recent Blog Title</label>
                <textarea name="blog_title" rows="4" class="form-control br-8" placeholder="Enter Site Copyright">{{ $settings['blog_title'] }}</textarea>
            </div>
        </div> --}}
    </div>
</div>
