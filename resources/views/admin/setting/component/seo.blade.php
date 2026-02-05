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

        {{-- Register --}}
        <fieldset class="border p-3">
            <legend class="float-none w-auto legend-title"> Register Seo Settings</legend>
            <div class="row">

                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="features_seo_title">Enter Register Seo
                            Title</label>
                        <input class="form-control br-8" type="text" name="features_seo_title"
                            value="{{ $settings['features_seo_title'] }}" placeholder="Enter About Title">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="features_seo_keywords">Enter Register Seo Keywords</label>
                        <input class="form-control br-8" type="text" name="features_seo_keywords"
                            value="{{ $settings['features_seo_keywords'] }}" placeholder="Enter About Seo Keywords">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group mb-3">
                        <label for="features_seo_description">Enter Register Description</label>
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

        {{-- privacy --}}
        <fieldset class="border p-3">
            <legend class="float-none w-auto legend-title">Privacy Seo Settings</legend>
            <div class="row">

                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="quote_seo_title">Privacy Seo
                            Title</label>
                        <input class="form-control br-8" type="text" name="quote_seo_title"
                            value="{{ $settings['quote_seo_title'] }}" placeholder="Enter About Title">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="quote_seo_keywords">Enter Privacy Seo Keywords</label>
                        <input class="form-control br-8" type="text" name="quote_seo_keywords"
                            value="{{ $settings['quote_seo_keywords'] }}" placeholder="Enter About Seo Keywords">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group mb-3">
                        <label for="quote_seo_description">Enter Privacy Description</label>
                        <textarea class="form-control br-8" name="quote_seo_description" rows="4">{{ $settings['quote_seo_description'] }}</textarea>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group mb-3">
                        <label for="quote_seo_schema">Enter Seo Schema</label>
                        <textarea class="form-control br-8" name="quote_seo_schema" rows="4">{{ $settings['quote_seo_schema'] }}</textarea>
                    </div>
                </div>

            </div>
        </fieldset>

        {{-- abroad Sections --}}
        <fieldset class="border p-3">
            <legend class="float-none w-auto legend-title">Abroad Seo Settings</legend>
            <div class="row">

                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="abroads_seo_title">Enter Abroad Seo
                            Title</label>
                        <input class="form-control br-8" type="text" name="abroads_seo_title"
                            value="{{ $settings['abroads_seo_title'] }}" placeholder="Enter About Title">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="homepage_description">Enter Abroad Seo Keywords</label>
                        <input class="form-control br-8" type="text" name="abroads_seo_keywords"
                            value="{{ $settings['abroads_seo_keywords'] }}" placeholder="Enter About Seo Keywords">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group mb-3">
                        <label for="homepage_seo_keywords">Enter About Description</label>
                        <textarea class="form-control br-8" name="abroads_seo_description" rows="4">{{ $settings['abroads_seo_description'] }}</textarea>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group mb-3">
                        <label for="abroads_seo_schema">Enter Seo Schema</label>
                        <textarea class="form-control br-8" name="abroads_seo_schema" rows="4">{{ $settings['abroads_seo_schema'] }}</textarea>
                    </div>
                </div>

            </div>
        </fieldset>

        {{-- Services --}}
        <fieldset class="border p-3">
            <legend class="float-none w-auto legend-title">Services Seo Settings</legend>
            <div class="row">

                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="service_seo_title">Enter Services Seo
                            Title</label>
                        <input class="form-control br-8" type="text" name="service_seo_title"
                            value="{{ $settings['service_seo_title'] }}" placeholder="Enter Homepage Title">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="homepage_description">Enter Services
                            Seo Keywords</label>
                        <input class="form-control br-8" type="text" name="service_seo_keywords"
                            value="{{ $settings['service_seo_keywords'] }}" placeholder="Enter service Seo Keywords">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group mb-3">
                        <label for="service_seo_description">Enter Services Seo
                            Description</label>
                        <textarea class="form-control br-8" name="service_seo_description" rows="4">{{ $settings['service_seo_description'] }}</textarea>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group mb-3">
                        <label for="service_seo_schema">Enter Seo Schema</label>
                        <textarea class="form-control br-8" name="service_seo_schema" rows="4">{{ $settings['service_seo_schema'] }}</textarea>
                    </div>
                </div>
            </div>
        </fieldset>

        {{-- course --}}
        <fieldset class="border p-3">
            <legend class="float-none w-auto legend-title">Course Seo Settings</legend>
            <div class="row">

                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="course_seo_title">Enter Course Seo
                            Title</label>
                        <input class="form-control br-8" type="text" name="course_seo_title"
                            value="{{ $settings['course_seo_title'] }}" placeholder="Enter Course Title">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="course_seo_keywords">Enter Course
                            Seo Keywords</label>
                        <input class="form-control br-8" type="text" name="course_seo_keywords"
                            value="{{ $settings['course_seo_keywords'] }}" placeholder="Enter Course Seo Keywords">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group mb-3">
                        <label for="course_seo_description">Enter Course Seo
                            Description</label>
                        <textarea class="form-control br-8" name="course_seo_description" rows="4">{{ $settings['course_seo_description'] }}</textarea>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group mb-3">
                        <label for="course_seo_schema">Enter Seo Schema</label>
                        <textarea class="form-control br-8" name="course_seo_schema" rows="4">{{ $settings['course_seo_schema'] }}</textarea>
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
        <fieldset class="border p-3">
            <legend class="float-none w-auto legend-title">Events SEO</legend>
            <div class="row">

                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="events_seo_title">Enter Events SEO Title</label>
                        <input class="form-control br-8" type="text" name="events_seo_title"
                            value="{{ $settings['events_seo_title'] ?? '' }}" placeholder="Enter SEO Title">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="events_seo_keywords">Enter Events SEO Keywords</label>
                        <input class="form-control br-8" type="text" name="events_seo_keywords"
                            value="{{ $settings['events_seo_keywords'] ?? '' }}" placeholder="Enter SEO Keywords">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group mb-3">
                        <label for="events_seo_description">Enter Events SEO Description</label>
                        <textarea class="form-control br-8" name="events_seo_description" rows="4">{{ $settings['events_seo_description'] ?? '' }}</textarea>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group mb-3">
                        <label for="events_seo_schema">Enter SEO Schema</label>
                        <textarea class="form-control br-8" name="events_seo_schema" rows="4">{{ $settings['events_seo_schema'] ?? '' }}</textarea>
                    </div>
                </div>

            </div>
        </fieldset>

    </div>
</div>
