<div class="tab-pane fade" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
    <div class="row">
        {{-- About Sections --}}
        <fieldset class="border p-3">
            <legend class="float-none w-auto legend-title">About Settings</legend>
            <div class="row">
                <!-- About Title -->
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label class="pb-2" for="about_title">Enter About Title</label>
                        <input class="form-control br-8" type="text" name="about_title"
                            value="{{ $setting['about_title'] ?? '' }}" placeholder="Enter About Title">
                    </div>
                </div>
                <div class="col-md-6">
                    <label class="form-group mb-3" for="about_image_1">Enter About Banner1</label>
                    <div class="custom-file">
                        <input class="mainlogo" id="about_image_1" data-show-remove="false"
                            data-default-file="{{ $setting['about_image_1'] ?? '' }}" type="file"
                            name="about_image_1">
                    </div>
                </div>
                <div class="col-md-6">
                    <label class="form-group mb-3" for="about_image_2">Enter About Banner2</label>
                    <div class="custom-file">
                        <input class="mainlogo" id="about_image_2" data-show-remove="false"
                            data-default-file="{{ $setting['about_image_2'] ?? '' }}" type="file"
                            name="about_image_2">
                    </div>
                </div>
                <!-- About Description -->
                <div class="col-md-12">
                    <div class="form-group mb-3">
                        <label class="pb-2" for="about_description">Enter About Description</label>
                        <textarea class="form-control br-8 ckeditor1" name="about_description" rows="4">{{ $setting['about_description'] ?? '' }}</textarea>
                    </div>
                </div>

                <!-- About Features -->
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label class="pb-2" for="about_feature_1_text">Enter About Feature 1 Text</label>
                        <input class="form-control br-8" type="text" name="about_feature_1_text"
                            value="{{ $setting['about_feature_1_text'] ?? '' }}"
                            placeholder="Enter About Feature 1 Text">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label class="pb-2" for="about_feature_1_icon">Enter About Feature 1 Icon</label>
                        <input class="form-control br-8" type="text" name="about_feature_1_icon"
                            value="{{ $setting['about_feature_1_icon'] ?? '' }}"
                            placeholder="Enter About Feature 1 Icon">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label class="pb-2" for="about_feature_2_text">Enter About Feature 2 Text</label>
                        <input class="form-control br-8" type="text" name="about_feature_2_text"
                            value="{{ $setting['about_feature_2_text'] ?? '' }}"
                            placeholder="Enter About Feature 2 Text">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label class="pb-2" for="about_feature_2_icon">Enter About Feature 2 Icon</label>
                        <input class="form-control br-8" type="text" name="about_feature_2_icon"
                            value="{{ $setting['about_feature_2_icon'] ?? '' }}"
                            placeholder="Enter About Feature 2 Icon">
                    </div>
                </div>

                <!-- Years of Experience -->
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label class="pb-2" for="about_years_of_experience">Enter Years of Experience</label>
                        <input class="form-control br-8" type="text" name="about_years_of_experience"
                            value="{{ $setting['about_years_of_experience'] ?? '' }}"
                            placeholder="Enter Years of Experience">
                    </div>
                </div>

                <!-- About Stat Description -->
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label class="pb-2" for="about_stat_description">Enter Stat Description</label>
                        <input class="form-control br-8" type="text" name="about_stat_description"
                            value="{{ $setting['about_stat_description'] ?? '' }}" placeholder="Enter Stat Description">
                    </div>
                </div>

                <!-- About Highlights -->
                <div class="col-md-12">
                    <div class="form-group mb-3">
                        <label class="pb-2" for="about_highlights">Enter About Highlights</label>
                        @php
                            $highlights = isset($setting['about_highlights']) ? $setting['about_highlights'] : '';
                            if (is_string($highlights)) {
                                $highlights = explode(',', $highlights); // Convert comma-separated string into an array
                            }
                        @endphp

                        <textarea class="form-control br-8 ckeditor2" name="about_highlights" rows="3">
                        {{ isset($highlights) ? implode(', ', $highlights) : '' }}
                        </textarea>

                    </div>
                </div>

                <!-- About Phone Icon and Number -->
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label class="pb-2" for="about_phone_icon">Enter Phone Icon</label>
                        <input class="form-control br-8" type="text" name="about_phone_icon"
                            value="{{ $setting['about_phone_icon'] ?? '' }}" placeholder="Enter Phone Icon">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label class="pb-2" for="about_phone_label">Enter Phone Label</label>
                        <input class="form-control br-8" type="text" name="about_phone_label"
                            value="{{ $setting['about_phone_label'] ?? '' }}" placeholder="Enter Phone Label">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label class="pb-2" for="about_phone_number">Enter Phone Number</label>
                        <input class="form-control br-8" type="text" name="about_phone_number"
                            value="{{ $setting['about_phone_number'] ?? '' }}" placeholder="Enter Phone Number">
                    </div>
                </div>
            </div>
        </fieldset>

        {{-- title --}}
        <fieldset class="border p-3">
            <legend class="float-none w-auto legend-title">Services,Abroad & Blogs Title Settings</legend>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label class="pb-2" for="service_title">Enter Services Title</label>
                        <input class="form-control br-8" type="text" name="service_title"
                            value="{{ $setting['service_title'] }}" placeholder="Enter service_title Title">
                    </div>
                    <div class="form-group mb-3">
                        <label class="pb-2" for="abroads_title">Enter Abroad Title</label>
                        <input class="form-control br-8" type="text" name="abroads_title"
                            value="{{ $setting['abroads_title'] }}" placeholder="Enter abroads_title Title">
                    </div>
                    <div class="form-group mb-3">
                        <label class="pb-2" for="testimonial_title">Enter Testimonial Title</label>
                        <input class="form-control br-8" type="text" name="testimonial_title"
                            value="{{ $setting['testimonial_title'] }}" placeholder="Enter abroads_title Title">
                    </div>
                    <div class="form-group mb-3">
                        <label class="pb-2" for="course_title">Enter Course Title</label>
                        <input class="form-control br-8" type="text" name="course_title"
                            value="{{ $setting['course_title'] }}" placeholder="Enter abroads_title Title">
                    </div>
                    <div class="form-group mb-3">
                        <label class="pb-2" for="blogs_title">Enter Blogs Title</label>
                        <input class="form-control br-8" type="text" name="blogs_title"
                            value="{{ $setting['blogs_title'] }}" placeholder="Enter blogs_title Title">
                    </div>
                </div>

                <div class="col-md-12">
                </div>
            </div>
        </fieldset>

    </div>
</div>
