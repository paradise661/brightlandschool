<div class="tab-pane fade" id="v-pills-seo" role="tabpanel" aria-labelledby="v-pills-seo-tab">
    <div class="row">

        {{-- homepage --}}
        <fieldset class="border p-3">
            <legend class="float-none w-auto legend-title">Homepage Seo Settings</legend>
            <div class="row">

                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="homepage_seo_title">Enter Homepage Seo
                            Title</label>
                        <input class="form-control br-8" type="text" name="homepage_seo_title"
                            value="{{ $settings['homepage_seo_title'] }}" placeholder="Enter About Title">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="homepage_seo_keywords">Enter Homepage Seo Keywords</label>
                        <input class="form-control br-8" type="text" name="homepage_seo_keywords"
                            value="{{ $settings['homepage_seo_keywords'] }}" placeholder="Enter About Seo Keywords">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group mb-3">
                        <label for="homepage_seo_description">Enter About Description</label>
                        <textarea class="form-control br-8" name="homepage_seo_description" rows="4">{{ $settings['homepage_seo_description'] }}</textarea>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group mb-3">
                        <label for="homepage_seo_schema">Enter Seo Schema</label>
                        <textarea class="form-control br-8" name="homepage_seo_schema" rows="4">{{ $settings['homepage_seo_schema'] }}</textarea>
                    </div>
                </div>

            </div>
        </fieldset>

        {{-- about us  --}}
        <fieldset class="border p-3">
            <legend class="float-none w-auto legend-title">About Us Seo Settings</legend>
            <div class="row">

                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="about_seo_title">Enter Homepage Seo
                            Title</label>
                        <input class="form-control br-8" type="text" name="about_seo_title"
                            value="{{ $settings['about_seo_title'] }}" placeholder="Enter About Title">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="about_seo_keywords">Enter Homepage Seo Keywords</label>
                        <input class="form-control br-8" type="text" name="about_seo_keywords"
                            value="{{ $settings['about_seo_keywords'] }}" placeholder="Enter About Seo Keywords">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group mb-3">
                        <label for="about_seo_description">Enter About Description</label>
                        <textarea class="form-control br-8" name="about_seo_description" rows="4">{{ $settings['about_seo_description'] }}</textarea>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group mb-3">
                        <label for="about_seo_schema">Enter Seo Schema</label>
                        <textarea class="form-control br-8" name="about_seo_schema" rows="4">{{ $settings['about_seo_schema'] }}</textarea>
                    </div>
                </div>

            </div>
        </fieldset>

        {{-- team --}}
        <fieldset class="border p-3">
            <legend class="float-none w-auto legend-title">Our Team Seo Settings</legend>
            <div class="row">

                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="team_seo_title">Enter Team Seo
                            Title</label>
                        <input class="form-control br-8" type="text" name="team_seo_title"
                            value="{{ $settings['team_seo_title'] }}" placeholder="Enter About Title">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="team_seo_keywords">Enter Team Seo Keywords</label>
                        <input class="form-control br-8" type="text" name="team_seo_keywords"
                            value="{{ $settings['team_seo_keywords'] }}" placeholder="Enter About Seo Keywords">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group mb-3">
                        <label for="team_seo_description">Enter Team Description</label>
                        <textarea class="form-control br-8" name="team_seo_description" rows="4">{{ $settings['team_seo_description'] }}</textarea>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group mb-3">
                        <label for="team_seo_schema">Enter Seo Schema</label>
                        <textarea class="form-control br-8" name="team_seo_schema" rows="4">{{ $settings['team_seo_schema'] }}</textarea>
                    </div>
                </div>

            </div>
        </fieldset>

        {{-- Testimonial --}}
        <fieldset class="border p-3">
            <legend class="float-none w-auto legend-title">Our Testimonial Seo Settings</legend>
            <div class="row">

                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="testimonial_seo_title">Enter Testimonial Seo
                            Title</label>
                        <input class="form-control br-8" type="text" name="testimonial_seo_title"
                            value="{{ $settings['testimonial_seo_title'] }}" placeholder="Enter About Title">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="testimonial_seo_keywords">Enter Testimonial Seo Keywords</label>
                        <input class="form-control br-8" type="text" name="testimonial_seo_keywords"
                            value="{{ $settings['testimonial_seo_keywords'] }}"
                            placeholder="Enter About Seo Keywords">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group mb-3">
                        <label for="testimonial_seo_description">Enter Testimonial Description</label>
                        <textarea class="form-control br-8" name="testimonial_seo_description" rows="4">{{ $settings['testimonial_seo_description'] }}</textarea>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group mb-3">
                        <label for="testimonial_seo_schema">Enter Seo Schema</label>
                        <textarea class="form-control br-8" name="testimonial_seo_schema" rows="4">{{ $settings['testimonial_seo_schema'] }}</textarea>
                    </div>
                </div>

            </div>
        </fieldset>

        {{-- Facilities --}}
        <fieldset class="border p-3">
            <legend class="float-none w-auto legend-title"> Facilities Seo Settings</legend>
            <div class="row">

                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="features_seo_title">Enter Facilities Seo
                            Title</label>
                        <input class="form-control br-8" type="text" name="features_seo_title"
                            value="{{ $settings['features_seo_title'] }}" placeholder="Enter About Title">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="features_seo_keywords">Enter Facilities Seo Keywords</label>
                        <input class="form-control br-8" type="text" name="features_seo_keywords"
                            value="{{ $settings['features_seo_keywords'] }}" placeholder="Enter About Seo Keywords">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group mb-3">
                        <label for="features_seo_description">Enter Facilities Description</label>
                        <textarea class="form-control br-8" name="features_seo_description" rows="4">{{ $settings['features_seo_description'] }}</textarea>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group mb-3">
                        <label for="features_seo_schema">Enter Seo Schema</label>
                        <textarea class="form-control br-8" name="features_seo_schema" rows="4">{{ $settings['features_seo_schema'] }}</textarea>
                    </div>
                </div>

            </div>
        </fieldset>

        {{-- Gallery --}}
        <fieldset class="border p-3">
            <legend class="float-none w-auto legend-title">Gallery Seo Settings</legend>
            <div class="row">

                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="gallery_seo_title">Gallery Seo
                            Title</label>
                        <input class="form-control br-8" type="text" name="gallery_seo_title"
                            value="{{ $settings['gallery_seo_title'] }}" placeholder="Enter About Title">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="gallery_seo_keywords">Enter Privacy Seo Keywords</label>
                        <input class="form-control br-8" type="text" name="gallery_seo_keywords"
                            value="{{ $settings['gallery_seo_keywords'] }}" placeholder="Enter About Seo Keywords">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group mb-3">
                        <label for="gallery_seo_description">Enter Privacy Description</label>
                        <textarea class="form-control br-8" name="gallery_seo_description" rows="4">{{ $settings['gallery_seo_description'] }}</textarea>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group mb-3">
                        <label for="gallery_seo_schema">Enter Seo Schema</label>
                        <textarea class="form-control br-8" name="gallery_seo_schema" rows="4">{{ $settings['gallery_seo_schema'] }}</textarea>
                    </div>
                </div>

            </div>
        </fieldset>

        {{-- Notices Sections --}}
        <fieldset class="border p-3">
            <legend class="float-none w-auto legend-title">Notices Seo Settings</legend>
            <div class="row">

                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="notice_seo_title">Enter Notices Seo
                            Title</label>
                        <input class="form-control br-8" type="text" name="notice_seo_title"
                            value="{{ $settings['notice_seo_title'] }}" placeholder="Enter Notice Title">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="homepage_description">Enter Notices Seo Keywords</label>
                        <input class="form-control br-8" type="text" name="notice_seo_keywords"
                            value="{{ $settings['notice_seo_keywords'] }}" placeholder="Enter Notice Seo Keywords">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group mb-3">
                        <label for="homepage_seo_keywords">Enter About Description</label>
                        <textarea class="form-control br-8" name="notice_seo_description" rows="4">{{ $settings['notice_seo_description'] }}</textarea>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group mb-3">
                        <label for="notice_seo_schema">Enter Seo Schema</label>
                        <textarea class="form-control br-8" name="notice_seo_schema" rows="4">{{ $settings['notice_seo_schema'] }}</textarea>
                    </div>
                </div>

            </div>
        </fieldset>

        <fieldset class="border p-3">
            <legend class="float-none w-auto legend-title">Events SEO</legend>
            <div class="row">

                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="event_seo_title">Enter Events SEO Title</label>
                        <input class="form-control br-8" type="text" name="event_seo_title"
                            value="{{ $settings['event_seo_title'] ?? '' }}" placeholder="Enter SEO Title">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="event_seo_keywords">Enter Events SEO Keywords</label>
                        <input class="form-control br-8" type="text" name="event_seo_keywords"
                            value="{{ $settings['event_seo_keywords'] ?? '' }}" placeholder="Enter SEO Keywords">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group mb-3">
                        <label for="event_seo_description">Enter Events SEO Description</label>
                        <textarea class="form-control br-8" name="event_seo_description" rows="4">{{ $settings['event_seo_description'] ?? '' }}</textarea>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group mb-3">
                        <label for="event_seo_schema">Enter SEO Schema</label>
                        <textarea class="form-control br-8" name="event_seo_schema" rows="4">{{ $settings['event_seo_schema'] ?? '' }}</textarea>
                    </div>
                </div>

            </div>
        </fieldset>

        {{-- Blogs --}}
        <fieldset class="border p-3">
            <legend class="float-none w-auto legend-title">Blogs Seo</legend>
            <div class="row">

                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="blogs_seo_title">Enter Blogs Seo
                            Title</label>
                        <input class="form-control br-8" type="text" name="blogs_seo_title"
                            value="{{ $settings['blogs_seo_title'] }}" placeholder="Enter scholorship Seo Title">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="blogs_seo_description">Enter Blogs
                            Seo Keywords</label>
                        <input class="form-control br-8" type="text" name="blogs_seo_description"
                            value="{{ $settings['blogs_seo_description'] }}"
                            placeholder="Enter service Seo Keywords">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group mb-3">
                        <label for="blogs_seo_keywords">Enter Blogs Seo
                            Description</label>
                        <textarea class="form-control br-8" name="blogs_seo_keywords" rows="4">{{ $settings['blogs_seo_keywords'] }}</textarea>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group mb-3">
                        <label for="blogs_seo_schema">Enter Seo Schema
                        </label>
                        <textarea class="form-control br-8" name="blogs_seo_schema" rows="4">{{ $settings['blogs_seo_schema'] }}</textarea>
                    </div>
                </div>

            </div>
        </fieldset>

        {{-- Downloads --}}
        <fieldset class="border p-3">
            <legend class="float-none w-auto legend-title">Download Seo Settings</legend>
            <div class="row">

                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="download_seo_title">Enter Download Seo
                            Title</label>
                        <input class="form-control br-8" type="text" name="download_seo_title"
                            value="{{ $settings['download_seo_title'] }}" placeholder="Enter Homepage Title">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="homepage_description">Enter Download
                            Seo Keywords</label>
                        <input class="form-control br-8" type="text" name="download_seo_keywords"
                            value="{{ $settings['download_seo_keywords'] }}"
                            placeholder="Enter download Seo Keywords">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group mb-3">
                        <label for="download_seo_description">Enter Download Seo
                            Description</label>
                        <textarea class="form-control br-8" name="download_seo_description" rows="4">{{ $settings['download_seo_description'] }}</textarea>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group mb-3">
                        <label for="download_seo_schema">Enter Seo Schema</label>
                        <textarea class="form-control br-8" name="download_seo_schema" rows="4">{{ $settings['download_seo_schema'] }}</textarea>
                    </div>
                </div>
            </div>
        </fieldset>

        {{-- contact us --}}
        <fieldset class="border p-3">
            <legend class="float-none w-auto legend-title">Contact Seo</legend>
            <div class="row">

                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="contact_seo_title">Enter Contact Seo
                            Title</label>
                        <input class="form-control br-8" type="text" name="contact_seo_title"
                            value="{{ $settings['contact_seo_title'] }}" placeholder="Enter  Seo Title">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="contact_seo_keywords">Enter contact
                            Seo Keywords</label>
                        <input class="form-control br-8" type="text" name="contact_seo_keywords"
                            value="{{ $settings['contact_seo_keywords'] }}" placeholder="Enter  Seo Keywords">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group mb-3">
                        <label for="contact_seo_description">Enter contact Seo
                            Description</label>
                        <textarea class="form-control br-8" name="contact_seo_description" rows="4">{{ $settings['contact_seo_description'] }}</textarea>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group mb-3">
                        <label for="contact_seo_schema">Enter Seo Schema
                        </label>
                        <textarea class="form-control br-8" name="contact_seo_schema" rows="4">{{ $settings['contact_seo_schema'] }}</textarea>
                    </div>
                </div>

            </div>
        </fieldset>

        {{-- Admission --}}
        <fieldset class="border p-3">
            <legend class="float-none w-auto legend-title">Admission Seo</legend>
            <div class="row">

                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="admission_seo_title">Enter Admission Seo
                            Title</label>
                        <input class="form-control br-8" type="text" name="admission_seo_title"
                            value="{{ $settings['admission_seo_title'] }}" placeholder="Enter  Seo Title">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="admission_seo_keywords">Enter Admission
                            Seo Keywords</label>
                        <input class="form-control br-8" type="text" name="admission_seo_keywords"
                            value="{{ $settings['admission_seo_keywords'] }}" placeholder="Enter  Seo Keywords">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group mb-3">
                        <label for="admission_seo_description">Enter Admission Seo
                            Description</label>
                        <textarea class="form-control br-8" name="admission_seo_description" rows="4">{{ $settings['admission_seo_description'] }}</textarea>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group mb-3">
                        <label for="admission_seo_schema">Enter Seo Schema
                        </label>
                        <textarea class="form-control br-8" name="admission_seo_schema" rows="4">{{ $settings['admission_seo_schema'] }}</textarea>
                    </div>
                </div>

            </div>
        </fieldset>

        {{-- faq --}}
        <fieldset class="border p-3">
            <legend class="float-none w-auto legend-title">Faq Seo</legend>
            <div class="row">

                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="faqs_seo_title">Enter Faq Seo
                            Title</label>
                        <input class="form-control br-8" type="text" name="faqs_seo_title"
                            value="{{ $settings['faqs_seo_title'] }}" placeholder="Enter  Seo Title">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="faqs_seo_keywords">Enter Faq
                            Seo Keywords</label>
                        <input class="form-control br-8" type="text" name="faqs_seo_keywords"
                            value="{{ $settings['faqs_seo_keywords'] }}" placeholder="Enter  Seo Keywords">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group mb-3">
                        <label for="faqs_seo_description">Enter Faq Seo
                            Description</label>
                        <textarea class="form-control br-8" name="faqs_seo_description" rows="4">{{ $settings['faqs_seo_description'] }}</textarea>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group mb-3">
                        <label for="faqs_seo_schema">Enter Seo Schema
                        </label>
                        <textarea class="form-control br-8" name="faqs_seo_schema" rows="4">{{ $settings['faqs_seo_schema'] }}</textarea>
                    </div>
                </div>

            </div>
        </fieldset>
        <fieldset class="border p-3">
            <legend class="float-none w-auto legend-title">Branch SEO</legend>
            <div class="row">

                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="branch_seo_title">Enter Branch SEO Title</label>
                        <input class="form-control br-8" type="text" name="branch_seo_title"
                            value="{{ $settings['branch_seo_title'] ?? '' }}" placeholder="Enter SEO Title">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="branch_seo_keywords">Enter Branch SEO Keywords</label>
                        <input class="form-control br-8" type="text" name="branch_seo_keywords"
                            value="{{ $settings['branch_seo_keywords'] ?? '' }}" placeholder="Enter SEO Keywords">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group mb-3">
                        <label for="branch_seo_description">Enter Branch SEO Description</label>
                        <textarea class="form-control br-8" name="branch_seo_description" rows="4">{{ $settings['branch_seo_description'] ?? '' }}</textarea>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group mb-3">
                        <label for="branch_seo_schema">Enter SEO Schema</label>
                        <textarea class="form-control br-8" name="branch_seo_schema" rows="4">{{ $settings['branch_seo_schema'] ?? '' }}</textarea>
                    </div>
                </div>
            </div>
        </fieldset>

    </div>
</div>
