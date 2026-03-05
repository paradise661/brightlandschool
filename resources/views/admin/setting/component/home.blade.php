<div class="tab-pane fade" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
    <div class="row">
        {{-- About Sections --}}
        <fieldset class="border p-3">
            <legend class="float-none w-auto legend-title">About Settings</legend>
            <div class="row">
                <!-- About Title -->
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label class="pb-2" for="homepage_about_title">Enter About Title</label>
                        <input class="form-control br-8" type="text" name="homepage_about_title"
                            value="{{ $setting['homepage_about_title'] ?? '' }}" placeholder="Enter About Title">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label class="pb-2" for="homepage_about_title1">Enter Sub Title</label>
                        <input class="form-control br-8" type="text" name="homepage_about_title1"
                            value="{{ $setting['homepage_about_title1'] ?? '' }}" placeholder="Enter Sub Title">
                    </div>
                </div>
                <div class="col-md-6">
                    <label class="form-group mb-3" for="homepage_about_image">Enter About Banner1</label>
                    <div class="custom-file">
                        <input class="mainlogo" id="homepage_about_image" data-show-remove="false"
                            data-default-file="{{ $setting['homepage_about_image'] ?? '' }}" type="file"
                            name="homepage_about_image">
                    </div>
                </div>
                <div class="col-md-6">
                    <label class="form-group mb-3" for="homepage_about_image_1">Enter About Banner2</label>
                    <div class="custom-file">
                        <input class="mainlogo" id="homepage_about_image1" data-show-remove="false"
                            data-default-file="{{ $setting['homepage_about_image1'] ?? '' }}" type="file"
                            name="homepage_about_image1">
                    </div>
                </div>
                <div class="col-md-6">
                    <label class="form-group mb-3" for="homepage_about_image2">Enter About Banner3</label>
                    <div class="custom-file">
                        <input class="mainlogo" id="homepage_about_image2" data-show-remove="false"
                            data-default-file="{{ $setting['homepage_about_image2'] ?? '' }}" type="file"
                            name="homepage_about_image2">
                    </div>
                </div>
                <div class="col-md-6">
                    <label class="form-group mb-3" for="homepage_about_image3">Enter About Banner4</label>
                    <div class="custom-file">
                        <input class="mainlogo" id="homepage_about_image3" data-show-remove="false"
                            data-default-file="{{ $setting['homepage_about_image3'] ?? '' }}" type="file"
                            name="homepage_about_image3">
                    </div>
                </div>
                <!-- About Description -->
                <div class="col-md-12 mt-3">
                    <div class="form-group mb-3">
                        <label class="pb-2" for="homepage_about_description">Enter About Description</label>
                        <textarea class="form-control br-8 ckeditor1" name="homepage_about_description" rows="4">{{ $setting['homepage_about_description'] ?? '' }}</textarea>
                    </div>
                </div>

                <!-- About Features -->
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label class="pb-2" for="homepage_about_feature">Enter About Feature 1 Text</label>
                        <input class="form-control br-8" type="text" name="homepage_about_feature"
                            value="{{ $setting['homepage_about_feature'] ?? '' }}"
                            placeholder="Enter About Feature 1 Text">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label class="pb-2" for="homepage_about_feature1">Enter About Feature 2 Text</label>
                        <input class="form-control br-8" type="text" name="homepage_about_feature1"
                            value="{{ $setting['homepage_about_feature1'] ?? '' }}"
                            placeholder="Enter About Feature 2 Text">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label class="pb-2" for="homepage_about_feature2">Enter About Feature 3 Text</label>
                        <input class="form-control br-8" type="text" name="homepage_about_feature2"
                            value="{{ $setting['homepage_about_feature2'] ?? '' }}"
                            placeholder="Enter About Feature 3 Text">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label class="pb-2" for="homepage_about_feature3">Enter About Feature 4 Text</label>
                        <input class="form-control br-8" type="text" name="homepage_about_feature3"
                            value="{{ $setting['homepage_about_feature3'] ?? '' }}"
                            placeholder="Enter About Feature 4 Text">
                    </div>
                </div>

                <!-- Years of Experience -->
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label class="pb-2" for="homepage_about_years">Enter Years of Experience</label>
                        <input class="form-control br-8" type="text" name="homepage_about_years"
                            value="{{ $setting['homepage_about_years'] ?? '' }}"
                            placeholder="Enter Years of Experience">
                    </div>
                </div>

                <!-- About Stat Description -->
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label class="pb-2" for="homepage_about_years_text">Enter Years Description</label>
                        <input class="form-control br-8" type="text" name="homepage_about_years_text"
                            value="{{ $setting['homepage_about_years_text'] ?? '' }}"
                            placeholder="Enter Years Description">
                    </div>
                </div>
            </div>
        </fieldset>

        {{-- title --}}
        <fieldset class="border p-3">
            <legend class="float-none w-auto legend-title">Homepage Title Settings</legend>
            <div class="row">

                <div class="form-group mb-3 col-md-12">
                    <label class="pb-2" for="homepage_notices_title">Enter Notices Title</label>
                    <input class="form-control br-8" type="text" name="homepage_notices_title"
                        value="{{ $setting['homepage_notices_title'] }}" placeholder="Enter Notices Title">
                </div>
                <div class="form-group mb-3 col-md-6">
                    <label class="pb-2" for="homepage_mission_title">Enter Mission Title</label>
                    <input class="form-control br-8" type="text" name="homepage_mission_title"
                        value="{{ $setting['homepage_mission_title'] }}" placeholder="Enter Mission Title">
                </div>
                <div class="form-group mb-3 col-md-6">
                    <label class="pb-2" for="homepage_mission_title1">Enter Mission Sub Title</label>
                    <input class="form-control br-8" type="text" name="homepage_mission_title1"
                        value="{{ $setting['homepage_mission_title1'] }}" placeholder="Enter Mission Sub Title">
                </div>
                <div class="form-group mb-3 col-md-6">
                    <label class="pb-2" for="homepage_message_title">Enter Message Title</label>
                    <input class="form-control br-8" type="text" name="homepage_message_title"
                        value="{{ $setting['homepage_message_title'] }}" placeholder="Enter Message Title">
                </div>
                <div class="form-group mb-3 col-md-6">
                    <label class="pb-2" for="homepage_message_title1">Enter Message Sub Title</label>
                    <input class="form-control br-8" type="text" name="homepage_message_title1"
                        value="{{ $setting['homepage_message_title1'] }}" placeholder="Enter Message Sub Title">
                </div>

                <div class="form-group mb-3 col-md-6">
                    <label class="pb-2" for="homepage_academics_title">Enter Academy Title</label>
                    <input class="form-control br-8" type="text" name="homepage_academics_title"
                        value="{{ $setting['homepage_academics_title'] }}" placeholder="Enter Academy Title">
                </div>
                <div class="form-group mb-3 col-md-6">
                    <label class="pb-2" for="homepage_academics_title1">Enter Academy Sub Title</label>
                    <input class="form-control br-8" type="text" name="homepage_academics_title1"
                        value="{{ $setting['homepage_academics_title1'] }}" placeholder="Enter Academy Sub Title">
                </div>

                <div class="form-group mb-3 col-md-6">
                    <label class="pb-2" for="homepage_whychoose_title">Enter WhyChooseUs Title</label>
                    <input class="form-control br-8" type="text" name="homepage_whychoose_title"
                        value="{{ $setting['homepage_whychoose_title'] }}" placeholder="Enter WhyChooseUs Title">
                </div>
                <div class="form-group mb-3 col-md-6">
                    <label class="pb-2" for="homepage_whychoose_title1">Enter WhyChooseUs Sub Title</label>
                    <input class="form-control br-8" type="text" name="homepage_whychoose_title1"
                        value="{{ $setting['homepage_whychoose_title1'] }}"
                        placeholder="Enter WhyChooseUs Sub Title">
                </div>

                <div class="form-group mb-3 col-md-6">
                    <label class="pb-2" for="homepage_facilities_title">Enter Facilities Title</label>
                    <input class="form-control br-8" type="text" name="homepage_facilities_title"
                        value="{{ $setting['homepage_facilities_title'] }}" placeholder="Enter Facilities Title">
                </div>
                <div class="form-group mb-3 col-md-6">
                    <label class="pb-2" for="homepage_facilities_title1">Enter Facilities Sub Title</label>
                    <input class="form-control br-8" type="text" name="homepage_facilities_title1"
                        value="{{ $setting['homepage_facilities_title1'] }}"
                        placeholder="Enter Facilities Sub Title">
                </div>

                <div class="form-group mb-3 col-md-6">
                    <label class="pb-2" for="homepage_blog_title">Enter Blogs Title</label>
                    <input class="form-control br-8" type="text" name="homepage_blog_title"
                        value="{{ $setting['homepage_blog_title'] }}" placeholder="Enter Blogs Title">
                </div>
                <div class="form-group mb-3 col-md-6">
                    <label class="pb-2" for="homepage_blog_title1">Enter Blogs Sub Title</label>
                    <input class="form-control br-8" type="text" name="homepage_blog_title1"
                        value="{{ $setting['homepage_blog_title1'] }}" placeholder="Enter Blogs Sub Title">
                </div>

                <div class="form-group mb-3 col-md-6">
                    <label class="pb-2" for="homepage_testimonials_title">Enter Testimonials Title</label>
                    <input class="form-control br-8" type="text" name="homepage_testimonials_title"
                        value="{{ $setting['homepage_testimonials_title'] }}" placeholder="Enter Testimonials Title">
                </div>
                <div class="form-group mb-3 col-md-6">
                    <label class="pb-2" for="homepage_testimonials_title1">Enter Testimonilas Sub Title</label>
                    <input class="form-control br-8" type="text" name="homepage_testimonials_title1"
                        value="{{ $setting['homepage_testimonials_title1'] }}"
                        placeholder="Enter Testimonilas Sub Title">
                </div>

                <div class="form-group mb-3 col-md-6">
                    <label class="pb-2" for="homepage_gallery_title">Enter Gallery Title</label>
                    <input class="form-control br-8" type="text" name="homepage_gallery_title"
                        value="{{ $setting['homepage_gallery_title'] }}" placeholder="Enter Gallery Title">
                </div>
                <div class="form-group mb-3 col-md-6">
                    <label class="pb-2" for="homepage_gallery_title1">Enter Gallery Sub Title</label>
                    <input class="form-control br-8" type="text" name="homepage_gallery_title1"
                        value="{{ $setting['homepage_gallery_title1'] }}" placeholder="Enter Gallery Sub Title">
                </div>

            </div>
        </fieldset>

        <fieldset class="border p-3">
            <legend class="float-none w-auto legend-title">Homepage Contact Form</legend>
            <div class="row">

                <div class="form-group mb-3 col-md-6">
                    <label class="pb-2" for="homepage_contact_title">Enter Contact Title</label>
                    <input class="form-control br-8" type="text" name="homepage_contact_title"
                        value="{{ $setting['homepage_contact_title'] }}" placeholder="Enter Contact Title">
                </div>
                <div class="form-group mb-3 col-md-6">
                    <label class="pb-2" for="homepage_contact_title1">Enter Contact Sub Title</label>
                    <input class="form-control br-8" type="text" name="homepage_contact_title1"
                        value="{{ $setting['homepage_contact_title1'] }}" placeholder="Enter Mission Title">
                </div>
                <div class="col-md-12 mt-3 col-md-12">
                    <div class="form-group mb-3">
                        <label class="pb-2" for="homepage_contact_description">Enter About Description</label>
                        <textarea class="form-control br-8 " name="homepage_contact_description" rows="4">{{ $setting['homepage_contact_description'] ?? '' }}</textarea>
                    </div>
                </div>
                <div class="form-group mb-3 col-md-6">
                    <label class="pb-2" for="homepage_contact_features">Enter Features Title</label>
                    <input class="form-control br-8" type="text" name="homepage_contact_features"
                        value="{{ $setting['homepage_contact_features'] }}" placeholder="Enter Features Title">
                </div>
                <div class="form-group mb-3 col-md-6">
                    <label class="pb-2" for="homepage_contact_features1">Enter Features Title 1</label>
                    <input class="form-control br-8" type="text" name="homepage_contact_features1"
                        value="{{ $setting['homepage_contact_features1'] }}" placeholder="Enter Features Title">
                </div>
                <div class="form-group mb-3 col-md-6">
                    <label class="pb-2" for="homepage_contact_features2">Enter Features Title 2</label>
                    <input class="form-control br-8" type="text" name="homepage_contact_features2"
                        value="{{ $setting['homepage_contact_features2'] }}" placeholder="Enter Features Title">
                </div>
                <div class="form-group mb-3 col-md-6">
                    <label class="pb-2" for="homepage_contact_formname">Enter contact Form Title</label>
                    <input class="form-control br-8" type="text" name="homepage_contact_formname"
                        value="{{ $setting['homepage_contact_formname'] }}" placeholder="Enter Contact Form Title">
                </div>
            </div>
        </fieldset>

    </div>
</div>
