@extends('pages.layout.app')
@section('content')

    <main>
        <!-- section content begin -->
        <div class="uk-section">
            <div class="uk-container">
                <div class="uk-grid">
                    <div class="uk-width-3-5@m">
                        <h1 class="uk-margin-remove-bottom">Contact Us</h1>
                        <p class="uk-text-lead uk-text-muted uk-margin-small-top">Do not hesitate to reach out. Just fill in the contact form here and we’ll be sure to reply as fast as possible.</p>
                    </div>
                    <div class="uk-width-1-1@m uk-margin-large-top">
                        <div class="uk-grid uk-grid-large" data-uk-grid="">
                            <div class="uk-width-1-3@m uk-first-column">
                                <h4 class="uk-margin-medium-top uk-margin-remove-bottom">Main Address</h4>
                                <p class="uk-margin-small-top">Seagram Building, 600 Lexinton Ave 13th Floor,New York, NY 10022, United States </p>
                                <h4 class="uk-margin-medium-top uk-margin-remove-bottom">Message us</h4>
                                <p class="uk-margin-small-top">support@tokendirechub.com</p>
                            </div>
                            <div class="uk-width-2-3@m">
                                <div class="uk-margin-medium-left in-margin-remove-left@s">
                                    <form id="contact-form" class="uk-form uk-grid-small uk-grid" data-uk-grid="">
                                        <div class="uk-width-1-2@s uk-inline uk-first-column">
                                            <span class="uk-form-icon fas fa-user fa-sm"></span>
                                            <input class="uk-input uk-border-rounded" id="name" name="name" type="text" placeholder="Full name">
                                        </div>
                                        <div class="uk-width-1-2@s uk-inline">
                                            <span class="uk-form-icon fas fa-envelope fa-sm"></span>
                                            <input class="uk-input uk-border-rounded" id="email" name="email" type="email" placeholder="Email address">
                                        </div>
                                        <div class="uk-width-1-1 uk-inline uk-grid-margin">
                                            <span class="uk-form-icon fas fa-pen fa-sm"></span>
                                            <input class="uk-input uk-border-rounded" id="subject" name="subject" type="text" placeholder="Subject">
                                        </div>
                                        <div class="uk-width-1-1 uk-grid-margin">
                                            <textarea class="uk-textarea uk-border-rounded" id="message" name="message" rows="6" placeholder="Message"></textarea>
                                        </div>
                                        <div class="uk-width-1-1 uk-grid-margin">
                                            <button class="uk-button uk-button-primary uk-border-rounded uk-align-right" id="sendemail" type="submit" name="submit">Send Message</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- section content end -->
    </main>

@endsection
