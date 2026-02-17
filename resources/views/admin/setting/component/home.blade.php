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
