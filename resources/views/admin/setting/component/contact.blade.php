<div class="tab-pane fade" id="v-pills-contact" role="tabpanel" aria-labelledby="v-pills-contact-tab">
    <div class="row">
        <div class="col-md-12">

            <fieldset class="border p-3">
                <legend class="float-none w-auto legend-title">Contact quick section</legend>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label for="contact_quick_title">Enter Quick contact
                                Title</label>
                            <input class="form-control br-8" type="text" name="contact_quick_title"
                                value="{{ $settings['contact_quick_title'] }}" placeholder="Enter contact Title">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label for="contact_quick_locationtitle">Enter Quick contact
                                Location Title</label>
                            <input class="form-control br-8" type="text" name="contact_quick_locationtitle"
                                value="{{ $settings['contact_quick_locationtitle'] }}"
                                placeholder="Enter contact location">
                        </div>
                        <div class="form-group mb-3">
                            <label for="contact_quick_location">Enter Quick contact
                                Location</label>
                            <input class="form-control br-8" type="text" name="contact_quick_location"
                                value="{{ $settings['contact_quick_location'] }}" placeholder="Enter contact location">
                        </div>
                        <div class="form-group mb-3">
                            <label for="contact_quick_location_icon">Enter icon
                            </label>
                            <input class="form-control br-8" type="text" name="contact_quick_location_icon"
                                value="{{ $settings['contact_quick_location_icon'] }}"
                                placeholder="Enter icon location">
                        </div>
                    </div>
                </div>
            </fieldset>
            <fieldset class="border p-3">
                <legend class="float-none w-auto legend-title">Let’s Connect section</legend>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group mb-3">
                            <label for="contact_description">Enter contact Description</label>
                            <textarea class="form-control ckeditor br-8" name="contact_description" rows="4">{{ $settings['contact_description'] }}</textarea>
                        </div>
                    </div>
                </div>
            </fieldset>
        </div>
    </div>
</div>
