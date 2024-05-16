@extends('web.layouts.master')
@section('content')
    <div class="data-container">
        <div class="heading">
            <h2>join our team</h2>
        </div>
        <div class="form-container">
            <div class="contact">
                <form action="#" id="job-form">
                    <div class="input-box">
                        <div class="input-field field">
                            <input
                                type="text"
                                placeholder="Full Name"
                                id="job-name"
                                class="job-item"
                                autocomplete="off"
                            />
                            <div class="error-txt">Full Name can't be blank</div>
                        </div>

                        <div class="input-field field">
                            <input
                                type="email"
                                placeholder="E-mail"
                                id="job-email"
                                class="job-item"
                                autocomplete="off"
                            />
                            <div class="error-txt">E-mail Address can't be blank</div>
                        </div>
                    </div>

                    <div class="input-box">
                        <div class="input-field field">
                            <input
                                type="number"
                                placeholder="Phone Number"
                                id="job-phone"
                                class="job-item"
                                autocomplete="off"
                            />
                            <div class="error-txt">Phone Number can't be blank</div>
                        </div>
                        <!-- العنوان -->
                        <div class="input-field field">
                            <input
                                type="text"
                                placeholder="Address"
                                id="job-address"
                                class="job-item"
                                autocomplete="off"
                            />
                            <div class="error-txt">Address can't be blank</div>
                        </div>
                    </div>

                    <div class="input-box">
                        <!-- Job title -->
                        <div class="input-field field">
                            <input
                                type="text"
                                placeholder="Job Title"
                                id="job-title"
                                class="job-item"
                                autocomplete="off"
                            />
                            <div class="error-txt">Job Title can't be blank</div>
                        </div>

                        <!-- CV -->
                        <div class="input-field field cv-box">
                            <label for="cv">Upload Your CV</label>
                            <input
                                type="file"
                                placeholder="Cv"
                                id="cv"
                                name="cv"
                                class="job-item"
                                autocomplete="off"
                                required
                            />
                        </div>
                    </div>

                    <button type="submit">Apply Now</button>
                </form>
            </div>
        </div>
    </div>
@endsection
