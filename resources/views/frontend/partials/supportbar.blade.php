@php 
if(empty(get_static_option('home_page_page_builder_status')) && in_array($home_page_variant,['07','09','19']) || Route::currentRouteName() == 'frontend.course.lesson'){ return;} 
@endphp
@if(!empty(get_static_option('home_page_support_bar_section_status')))
    <div class="top-bar-area header-variant-{{get_static_option('home_page_variant')}}">
        <div class="container @if($home_page_variant == '20') container-two" @endif>
            <div class="row">
                <div class="col-lg-12">
                    <div class="top-bar-inner">
                        <div class="left-content">
                            <ul class="social-icons">
                            </ul>
                        </div>
                        <div class="right-content">
                            <ul>
                                <ul>
                                    <li><a href="#">|Now Offering Telehealth! Call us today to schedule an appointment|</a></li>
                                    <li><a href="#">|Call Pearland:281-809-3664|</a></li>
                                    <li><a href="#">|Call Houston: 832-645-0004|</a></li>
                               </ul>
                                
                                @if(!empty(get_static_option('language_select_option')))
                                    <li>
                                        <select id="langchange">
                                            @foreach($all_language as $lang)
                                                <option @if($user_select_lang_slug == $lang->slug) selected @endif value="{{$lang->slug}}" class="lang-option">{{explode('(',$lang->name)[0] ?? $lang->name}}</option>
                                            @endforeach
                                        </select>
                                    </li>
                                @endif
                                @if(!empty(get_static_option('navbar_button')))
                                    <li>
                                        @php
                                            $custom_url = !empty(get_static_option('navbar_button_custom_url_status')) ? get_static_option('navbar_button_custom_url') : route('frontend.request.quote');
                                        @endphp
                                        <div class="btn-wrapper">
                                            <a href="{{$custom_url}}" rel="canonical"
                                               @if(!empty(get_static_option('navbar_button_custom_url_status'))) target="_blank"
                                               @endif class="boxed-btn reverse-color">{{get_static_option('navbar_'.$user_select_lang_slug.'_button_text')}}</a>
                                        </div>
                                    </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif