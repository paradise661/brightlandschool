<div class="tab-pane fade" id="v-pills-about" role="tabpanel" aria-labelledby="v-pills-about-tab">
    <div class="row">

        {{-- About Sections --}}
        <fieldset class="border p-3">
            <legend class="float-none w-auto legend-title">About Settings</legend>
            <div class="row">
                <!-- About Title -->
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label class="pb-2" for="aboutpage_about_title">Enter About Title</label>
                        <input class="form-control br-8" type="text" name="aboutpage_about_title"
                            value="{{ $setting['aboutpage_about_title'] ?? '' }}" placeholder="Enter About Title">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label class="pb-2" for="aboutpage_about_title1">Enter Sub Title</label>
                        <input class="form-control br-8" type="text" name="aboutpage_about_title1"
                            value="{{ $setting['aboutpage_about_title1'] ?? '' }}" placeholder="Enter Sub Title">
                    </div>
                </div>
                <div class="col-md-6">
                    <label class="form-group mb-3" for="aboutpage_about_image">Enter About Banner1</label>
                    <div class="custom-file">
                        <input class="mainlogo" id="aboutpage_about_image" data-show-remove="false"
                            data-default-file="{{ $setting['aboutpage_about_image'] ?? '' }}" type="file"
                            name="aboutpage_about_image">
                    </div>
                </div>
                <div class="col-md-6">
                    <label class="form-group mb-3" for="aboutpage_about_image_1">Enter About Banner2</label>
                    <div class="custom-file">
                        <input class="mainlogo" id="aboutpage_about_image1" data-show-remove="false"
                            data-default-file="{{ $setting['aboutpage_about_image1'] ?? '' }}" type="file"
                            name="aboutpage_about_image1">
                    </div>
                </div>
                <div class="col-md-6">
                    <label class="form-group mb-3" for="aboutpage_about_image2">Enter About Banner3</label>
                    <div class="custom-file">
                        <input class="mainlogo" id="aboutpage_about_image2" data-show-remove="false"
                            data-default-file="{{ $setting['aboutpage_about_image2'] ?? '' }}" type="file"
                            name="aboutpage_about_image2">
                    </div>
                </div>
                <div class="col-md-6">
                    <label class="form-group mb-3" for="aboutpage_about_image3">Enter About Banner4</label>
                    <div class="custom-file">
                        <input class="mainlogo" id="aboutpage_about_image3" data-show-remove="false"
                            data-default-file="{{ $setting['aboutpage_about_image3'] ?? '' }}" type="file"
                            name="aboutpage_about_image3">
                    </div>
                </div>
                <!-- About Description -->
                <div class="col-md-12 mt-3">
                    <div class="form-group mb-3">
                        <label class="pb-2" for="aboutpage_about_description">Enter About
                            Description</label>
                        <textarea class="form-control br-8 ckeditor2" name="aboutpage_about_description" rows="4">{{ $setting['aboutpage_about_description'] ?? '' }}</textarea>
                    </div>
                </div>

                <!-- About Features -->
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label class="pb-2" for="aboutpage_about_feature">Enter About Feature 1
                            Text</label>
                        <input class="form-control br-8" type="text" name="aboutpage_about_feature"
                            value="{{ $setting['aboutpage_about_feature'] ?? '' }}"
                            placeholder="Enter About Feature 1 Text">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label class="pb-2" for="aboutpage_about_feature1">Enter About Feature 2
                            Text</label>
                        <input class="form-control br-8" type="text" name="aboutpage_about_feature1"
                            value="{{ $setting['aboutpage_about_feature1'] ?? '' }}"
                            placeholder="Enter About Feature 2 Text">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label class="pb-2" for="aboutpage_about_feature2">Enter About Feature 3
                            Text</label>
                        <input class="form-control br-8" type="text" name="aboutpage_about_feature2"
                            value="{{ $setting['aboutpage_about_feature2'] ?? '' }}"
                            placeholder="Enter About Feature 3 Text">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label class="pb-2" for="aboutpage_about_feature3">Enter About Feature 4
                            Text</label>
                        <input class="form-control br-8" type="text" name="aboutpage_about_feature3"
                            value="{{ $setting['aboutpage_about_feature3'] ?? '' }}"
                            placeholder="Enter About Feature 4 Text">
                    </div>
                </div>

                <!-- Years of Experience -->
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label class="pb-2" for="aboutpage_about_years">Enter Years of
                            Experience</label>
                        <input class="form-control br-8" type="text" name="aboutpage_about_years"
                            value="{{ $setting['aboutpage_about_years'] ?? '' }}"
                            placeholder="Enter Years of Experience">
                    </div>
                </div>

                <!-- About Stat Description -->
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label class="pb-2" for="aboutpage_about_years_text">Enter Years
                            Description</label>
                        <input class="form-control br-8" type="text" name="aboutpage_about_years_text"
                            value="{{ $setting['aboutpage_about_years_text'] ?? '' }}"
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
                        <label class="pb-2" for="team_title">Enter Team Title</label>
                        <input class="form-control br-8" type="text" name="team_title"
                            value="{{ $setting['team_title'] }}" placeholder="Enter team_title Title">
                    </div>
                </div>
                <div class="col-md-12">
                </div>
            </div>
        </fieldset>
    </div>
</div>
