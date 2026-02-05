<div class="tab-pane fade" id="v-pills-about" role="tabpanel" aria-labelledby="v-pills-about-tab">
    <div class="row">

        {{-- About Sections --}}
        <fieldset class="border p-3">
            <legend class="float-none w-auto legend-title">About Settings</legend>
            <div class="row">
                <!-- About Title -->
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label class="pb-2" for="about_title_2">Enter About Title</label>
                        <input class="form-control br-8" type="text" name="about_title_2"
                            value="{{ $setting['about_title_2'] ?? '' }}" placeholder="Enter About Title">
                    </div>
                </div>
                <div class="col-md-6">
                    <label class="form-group mb-3" for="about_image_3">Enter About Banner1</label>
                    <div class="custom-file">
                        <input class="mainlogo" id="about_image_3" data-show-remove="false"
                            data-default-file="{{ $setting['about_image_3'] ?? '' }}" type="file"
                            name="about_image_3">
                    </div>
                </div>
                <div class="col-md-6">
                    <label class="form-group mb-3" for="about_image_4">Enter About Banner2</label>
                    <div class="custom-file">
                        <input class="mainlogo" id="about_image_4" data-show-remove="false"
                            data-default-file="{{ $setting['about_image_4'] ?? '' }}" type="file"
                            name="about_image_4">
                    </div>
                </div>
                <!-- About Description -->
                <div class="col-md-12">
                    <div class="form-group mb-3">
                        <label class="pb-2" for="about_description_2">Enter About Description</label>
                        <textarea class="form-control br-8 ckeditor" name="about_description_2" rows="4">{{ $setting['about_description_2'] ?? '' }}</textarea>
                    </div>
                </div>

                <!-- About Features -->
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label class="pb-2" for="about_feature_1_text_2">Enter About Feature 1 Text</label>
                        <input class="form-control br-8" type="text" name="about_feature_1_text_2"
                            value="{{ $setting['about_feature_1_text_2'] ?? '' }}"
                            placeholder="Enter About Feature 1 Text">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label class="pb-2" for="about_feature_1_icon_2">Enter About Feature 1 Icon</label>
                        <input class="form-control br-8" type="text" name="about_feature_1_icon_2"
                            value="{{ $setting['about_feature_1_icon_2'] ?? '' }}"
                            placeholder="Enter About Feature 1 Icon">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label class="pb-2" for="about_feature_2_text_2">Enter About Feature 2 Text</label>
                        <input class="form-control br-8" type="text" name="about_feature_2_text_2"
                            value="{{ $setting['about_feature_2_text_2'] ?? '' }}"
                            placeholder="Enter About Feature 2 Text">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label class="pb-2" for="about_feature_2_icon_2">Enter About Feature 2 Icon</label>
                        <input class="form-control br-8" type="text" name="about_feature_2_icon_2"
                            value="{{ $setting['about_feature_2_icon_2'] ?? '' }}"
                            placeholder="Enter About Feature 2 Icon">
                    </div>
                </div>

                <!-- Years of Experience -->
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label class="pb-2" for="about_years_of_experience_2">Enter Years of Experience</label>
                        <input class="form-control br-8" type="text" name="about_years_of_experience_2"
                            value="{{ $setting['about_years_of_experience_2'] ?? '' }}"
                            placeholder="Enter Years of Experience">
                    </div>
                </div>

                <!-- About Stat Description -->
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label class="pb-2" for="about_stat_description_2">Enter Stat Description</label>
                        <input class="form-control br-8" type="text" name="about_stat_description_2"
                            value="{{ $setting['about_stat_description_2'] ?? '' }}"
                            placeholder="Enter Stat Description">
                    </div>
                </div>

                <!-- About Highlights -->
                <div class="col-md-12">
                    <div class="form-group mb-3">
                        <label class="pb-2" for="about_highlights_2">Enter About Highlights</label>
                        @php
                            $highlights = isset($setting['about_highlights_2']) ? $setting['about_highlights_2'] : '';
                            if (is_string($highlights)) {
                                $highlights = explode(',', $highlights); // Convert comma-separated string into an array
                            }
                        @endphp

                        <textarea class="form-control br-8 video-desc" name="about_highlights_2" rows="3">
                        {{ isset($highlights) ? implode(', ', $highlights) : '' }}
                        </textarea>

                    </div>
                </div>

                <!-- About Phone Icon and Number -->
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label class="pb-2" for="about_phone_icon_2">Enter Phone Icon</label>
                        <input class="form-control br-8" type="text" name="about_phone_icon_2"
                            value="{{ $setting['about_phone_icon_2'] ?? '' }}" placeholder="Enter Phone Icon">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label class="pb-2" for="about_phone_label_2">Enter Phone Label</label>
                        <input class="form-control br-8" type="text" name="about_phone_label_2"
                            value="{{ $setting['about_phone_label_2'] ?? '' }}" placeholder="Enter Phone Label">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label class="pb-2" for="about_phone_number_2">Enter Phone Number</label>
                        <input class="form-control br-8" type="text" name="about_phone_number_2"
                            value="{{ $setting['about_phone_number_2'] ?? '' }}" placeholder="Enter Phone Number">
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
