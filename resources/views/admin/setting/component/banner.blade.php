<div class="tab-pane fade" id="v-pills-banner" role="tabpanel" aria-labelledby="v-pills-banner-tab">
    <div class="row">

        <fieldset class="border p-3">
            <legend class="float-none w-auto legend-title">About, Teacher, Testimonial & Admission Banner</legend>
            <div class="row">

                <div class="col-md-6">
                    <label class="form-group mb-3" for="about_breadcrum_image">Upload About Breadcrum
                        Banner</label>
                    <div class="custom-file">
                        <input class="mainlogo" id="about_breadcrum_image" data-show-remove="false"
                            data-default-file="{{ $setting['about_breadcrum_image'] ?? '' }}" type="file"
                            name="about_breadcrum_image">
                    </div>
                </div>
                <div class="col-md-6">
                    <label class="form-group mb-3" for="teacher_breadcrum_image">Upload Teacher Breadcrum
                        Banner</label>
                    <div class="custom-file">
                        <input class="mainlogo" id="teacher_breadcrum_image" data-show-remove="false"
                            data-default-file="{{ $setting['teacher_breadcrum_image'] ?? '' }}" type="file"
                            name="teacher_breadcrum_image">
                    </div>
                </div>
                <div class="col-md-6">
                    <label class="form-group mb-3" for="testimonial_breadcrum_image">Upload Testimonial Breadcrum
                        Banner</label>
                    <div class="custom-file">
                        <input class="mainlogo" id="testimonial_breadcrum_image" data-show-remove="false"
                            data-default-file="{{ $setting['testimonial_breadcrum_image'] ?? '' }}" type="file"
                            name="testimonial_breadcrum_image">
                    </div>
                </div>
                <div class="col-md-6">
                    <label class="form-group mb-3" for="admission_breadcrum_image">Upload Admission Breadcrum
                        Banner</label>
                    <div class="custom-file">
                        <input class="mainlogo" id="admission_breadcrum_image" data-show-remove="false"
                            data-default-file="{{ $setting['admission_breadcrum_image'] ?? '' }}" type="file"
                            name="admission_breadcrum_image">
                    </div>
                </div>
            </div>
        </fieldset>

        <fieldset class="border p-3">
            <legend class="float-none w-auto legend-title">Facilities Settings</legend>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label class="pb-2" for="facilitiespage_sport_title">Enter Sport Facilities Title</label>
                        <input class="form-control br-8" type="text" name="facilitiespage_sport_title"
                            value="{{ $setting['facilitiespage_sport_title'] }}" placeholder="Enter Sport Title">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label class="pb-2" for="facilitiespage_sport_title1">Enter Sport Facilities Sub Title</label>
                        <input class="form-control br-8" type="text" name="facilitiespage_sport_title1"
                            value="{{ $setting['facilitiespage_sport_title1'] }}" placeholder="Enter Sport Sub Title">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label class="pb-2" for="facilitiespage_support_title">Enter Facilities Support Title</label>
                        <input class="form-control br-8" type="text" name="facilitiespage_support_title"
                            value="{{ $setting['facilitiespage_support_title'] }}" placeholder="Enter Support Title">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label class="pb-2" for="facilitiespage_support_title1">Enter Facilities Support Sub
                            Title</label>
                        <input class="form-control br-8" type="text" name="facilitiespage_support_title1"
                            value="{{ $setting['facilitiespage_support_title1'] }}"
                            placeholder="Enter Support Sub Title">
                    </div>
                </div>

                <div class="col-md-6">
                    <label class="form-group mb-3" for="facilitiespage_breadcrum_image">Enter Facilities Breadcrum
                        Banner</label>
                    <div class="custom-file">
                        <input class="mainlogo" id="facilitiespage_breadcrum_image" data-show-remove="false"
                            data-default-file="{{ $setting['facilitiespage_breadcrum_image'] ?? '' }}" type="file"
                            name="facilitiespage_breadcrum_image">
                    </div>
                </div>
            </div>
        </fieldset>

        <fieldset class="border p-3">
            <legend class="float-none w-auto legend-title">Gallery Settings</legend>
            <div class="row">

                <div class="col-md-6">
                    <label class="form-group mb-3" for="gallery_breadcrum_image">Upload Gallery Breadcrum
                        Banner</label>
                    <div class="custom-file">
                        <input class="mainlogo" id="gallery_breadcrum_image" data-show-remove="false"
                            data-default-file="{{ $setting['gallery_breadcrum_image'] ?? '' }}" type="file"
                            name="gallery_breadcrum_image">
                    </div>
                </div>
                <div class="col-md-6">
                    <label class="form-group mb-3" for="gallery_breadcrum_image1">Upload Gallery Breadcrum
                        Banner1</label>
                    <div class="custom-file">
                        <input class="mainlogo" id="gallery_breadcrum_image1" data-show-remove="false"
                            data-default-file="{{ $setting['gallery_breadcrum_image1'] ?? '' }}" type="file"
                            name="gallery_breadcrum_image1">
                    </div>
                </div>
            </div>
        </fieldset>

        <fieldset class="border p-3">
            <legend class="float-none w-auto legend-title">Notices Settings</legend>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label class="pb-2" for="notices_title">Enter Notice
                            Title</label>
                        <input class="form-control br-8" type="text" name="notices_title"
                            value="{{ $setting['notices_title'] }}" placeholder="Enter Notice Title">
                    </div>
                </div>
                <div class="col-md-6">
                    <label class="form-group mb-3" for="notices_breadcrum_image">Upload Notice Breadcrum
                        Banner</label>
                    <div class="custom-file">
                        <input class="mainlogo" id="notices_breadcrum_image" data-show-remove="false"
                            data-default-file="{{ $setting['notices_breadcrum_image'] ?? '' }}" type="file"
                            name="notices_breadcrum_image">
                    </div>
                </div>

            </div>
        </fieldset>

        <fieldset class="border p-3">
            <legend class="float-none w-auto legend-title">Events Settings</legend>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label class="pb-2" for="events_title">Enter Events
                            Title</label>
                        <input class="form-control br-8" type="text" name="events_title"
                            value="{{ $setting['events_title'] }}" placeholder="Enter Events Title">
                    </div>
                </div>
                <div class="col-md-6">
                    <label class="form-group mb-3" for="events_breadcrum_image">Upload Notice Breadcrum
                        Banner</label>
                    <div class="custom-file">
                        <input class="mainlogo" id="events_breadcrum_image" data-show-remove="false"
                            data-default-file="{{ $setting['events_breadcrum_image'] ?? '' }}" type="file"
                            name="events_breadcrum_image">
                    </div>
                </div>

            </div>
        </fieldset>

        <fieldset class="border p-3">
            <legend class="float-none w-auto legend-title">Blogs Settings</legend>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label class="pb-2" for="blogs_title">Enter Blogs
                            Title</label>
                        <input class="form-control br-8" type="text" name="blogs_title"
                            value="{{ $setting['blogs_title'] }}" placeholder="Enter Blogs Title">
                    </div>
                </div>
                <div class="col-md-6">
                    <label class="form-group mb-3" for="blogs_breadcrum_image">Upload Blogs Breadcrum
                        Banner</label>
                    <div class="custom-file">
                        <input class="mainlogo" id="blogs_breadcrum_image" data-show-remove="false"
                            data-default-file="{{ $setting['blogs_breadcrum_image'] ?? '' }}" type="file"
                            name="blogs_breadcrum_image">
                    </div>
                </div>

            </div>
        </fieldset>

        <fieldset class="border p-3">
            <legend class="float-none w-auto legend-title">Downloads Settings</legend>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label class="pb-2" for="downloads_title">Enter Downloads
                            Title</label>
                        <input class="form-control br-8" type="text" name="downloads_title"
                            value="{{ $setting['downloads_title'] }}" placeholder="Enter Downloads Title">
                    </div>
                </div>
                <div class="col-md-6">
                    <label class="form-group mb-3" for="downloads_breadcrum_image">Upload Downloads Breadcrum
                        Banner</label>
                    <div class="custom-file">
                        <input class="mainlogo" id="downloads_breadcrum_image" data-show-remove="false"
                            data-default-file="{{ $setting['downloads_breadcrum_image'] ?? '' }}" type="file"
                            name="downloads_breadcrum_image">
                    </div>
                </div>

            </div>
        </fieldset>

        <fieldset class="border p-3">
            <legend class="float-none w-auto legend-title">Contact Settings</legend>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label class="pb-2" for="contact_form_title">Enter Contact form
                            Title</label>
                        <input class="form-control br-8" type="text" name="contact_form_title"
                            value="{{ $setting['contact_form_title'] }}" placeholder="Enter Contact Title">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label class="pb-2" for="contact_why_title">Enter Contact title
                            Title</label>
                        <input class="form-control br-8" type="text" name="contact_why_title"
                            value="{{ $setting['contact_why_title'] }}" placeholder="Enter Contact Title">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label class="pb-2" for="contact_map_title">Enter Contact title
                            Title</label>
                        <input class="form-control br-8" type="text" name="contact_map_title"
                            value="{{ $setting['contact_map_title'] }}" placeholder="Enter Contact Map Title">
                    </div>
                </div>
                <div class="col-md-6">
                    <label class="form-group mb-3" for="contact_breadcrum_image">Upload contact Breadcrum
                        Banner</label>
                    <div class="custom-file">
                        <input class="mainlogo" id="contact_breadcrum_image" data-show-remove="false"
                            data-default-file="{{ $setting['contact_breadcrum_image'] ?? '' }}" type="file"
                            name="contact_breadcrum_image">
                    </div>
                </div>

            </div>
        </fieldset>

        <fieldset class="border p-3">
            <legend class="float-none w-auto legend-title">Teacher Group Photo</legend>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label class="pb-2" for="teacher_group_title">Enter Group
                            Title</label>
                        <input class="form-control br-8" type="text" name="teacher_group_title"
                            value="{{ $setting['teacher_group_title'] ?? '' }}" placeholder="Enter Contact Title">
                    </div>
                </div>

                <div class="col-md-6">
                    <label class="form-group mb-3" for="teacher_group_photo">Upload Teacher Group Photo</label>
                    <div class="custom-file">
                        <input class="mainlogo" id="teacher_group_photo" data-show-remove="false"
                            data-default-file="{{ $setting['teacher_group_photo'] ?? '' }}" type="file"
                            name="teacher_group_photo">
                    </div>
                </div>

            </div>
        </fieldset>
    </div>
</div>
