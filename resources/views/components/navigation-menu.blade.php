<div data-testid="nav-container" class="styles_parent_nav_wrapper__rVxUu">
   <div class="styles_nav_wrapper__hImpE">
      <style>
         #destinations_menu_button:hover+#destinations_dropdown_panel {
            display: block !important;
         }
      </style>
      <div class="styles_nav_wrapper_inner__ZvwOI">
         <nav data-testid="nav" class="styles_nav__OwJwl container__8nRk6">
            <ul class="col-desktop-10 col-tablet-lg-7 col-tablet-7 col-desktop-lg-10">
               <li><a data-testid="logo" class="styles_logo_wrapper__6Axh_" href="{{ route('home') }}">
                     <img alt="Trip My Soul logo" width="140" height="32" decoding="async" data-nimg="1"
                        class="styles_logo__ktGwM" src="{{ Voyager::image(setting('site.logo')) }}"
                        style="color: transparent; visibility: visible" />
                  </a>
               </li>
               <li>
                  <a data-testid="link-component" id="destinations_menu_button" class="styles_nav_list_item__gXRu_"
                     href="#" onmouseover="showDropdown()" onclick="toggleDropdown()">
                     <button
                        class="styles_button__9Iy0U styles_button_sm__bg1VW styles_hide_focus_outline__f8HVo styles_hide_under_line_on_hover__5QnP2 styles_button_ghost__cuQN3"
                        type="button">
                        Destinations
                        <div class="icon icon_chevronDownGrey" role="presentation" style="width: 16px; height: 16px">
                           <svg viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M4 6L8 10L12 6" stroke="#BEB8C4" stroke-width="1.5" stroke-linecap="round"
                                 stroke-linejoin="round"></path>
                           </svg>
                        </div>
                     </button>
                  </a>
               </li>
               <li>
                  <a data-testid="link-component" id="travel_styles_menu_button" class="styles_nav_list_item__gXRu_"
                     href="#">
                     <button
                        class="styles_button__9Iy0U styles_button_sm__bg1VW styles_hide_focus_outline__f8HVo styles_hide_under_line_on_hover__5QnP2 styles_button_ghost__cuQN3"
                        type="button">
                        Travel Styles
                        <div class="icon icon_chevronDownGrey" role="presentation" style="width: 16px; height: 16px">
                           <svg viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M4 6L8 10L12 6" stroke="#BEB8C4" stroke-width="1.5" stroke-linecap="round"
                                 stroke-linejoin="round"></path>
                           </svg>
                        </div>
                     </button>
                  </a>
               </li>
               <li>
                  <a data-testid="link-component" class="styles_nav_list_item__gXRu_" href="#" id="why_g_menu_button">
                     <button
                        class="styles_button__9Iy0U styles_button_sm__bg1VW styles_hide_focus_outline__f8HVo styles_hide_under_line_on_hover__5QnP2 styles_button_ghost__cuQN3"
                        type="button">
                        Why Trip My Soul
                        <div class="icon icon_chevronDownGrey" role="presentation" style="width: 16px; height: 16px">
                           <svg viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M4 6L8 10L12 6" stroke="#BEB8C4" stroke-width="1.5" stroke-linecap="round"
                                 stroke-linejoin="round"></path>
                           </svg>
                        </div>
                     </button>
                  </a>
               </li>
               <li>
                  <a data-testid="link-component" class="styles_nav_list_item__gXRu_" href="#" id="deals_menu_button">
                     <button
                        class="styles_button__9Iy0U styles_button_sm__bg1VW styles_hide_focus_outline__f8HVo styles_hide_under_line_on_hover__5QnP2 styles_button_ghost__cuQN3"
                        type="button">
                        Deals
                        <div class="icon icon_chevronDownGrey" role="presentation" style="width: 16px; height: 16px">
                           <svg viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M4 6L8 10L12 6" stroke="#BEB8C4" stroke-width="1.5" stroke-linecap="round"
                                 stroke-linejoin="round"></path>
                           </svg>
                        </div>
                     </button>
                  </a>
               </li>
            </ul>
            <div data-testid="user-controls"
               class="styles_user_controls__A_KJn col-desktop-2 col-tablet-lg-1 col-desktop-lg-2 col-tablet-1">
               <a data-testid="link-component" id="nav_search_button" class="styles_user_control__NlZo_" href="#">
                  <div class="icon icon_searchControl" role="presentation">
                     <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                           d="M9.75008 18.0832C14.3525 18.0832 18.0834 14.3522 18.0834 9.74984C18.0834 5.14746 14.3525 1.4165 9.75008 1.4165C5.14771 1.4165 1.41675 5.14746 1.41675 9.74984C1.41675 14.3522 5.14771 18.0832 9.75008 18.0832Z"
                           stroke="#313041" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M20.5832 20.5834L15.6423 15.6426" stroke="#313041" stroke-width="2"
                           stroke-linecap="round" stroke-linejoin="round"></path>
                     </svg>
                  </div>
                  <span class="sr-only">Search</span>
               </a>
               <a data-testid="link-component" class="styles_user_control__NlZo_" href="contact-us/index.html">
                  <div class="icon icon_call" role="presentation">
                     <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                           d="M21.0001 15.9211V18.9211C21.0012 19.1996 20.9441 19.4752 20.8326 19.7304C20.721 19.9856 20.5574 20.2147 20.3521 20.4029C20.1469 20.5912 19.9046 20.7346 19.6408 20.8238C19.377 20.913 19.0974 20.9461 18.8201 20.9211C15.7429 20.5867 12.7871 19.5352 10.1901 17.8511C7.77388 16.3157 5.72539 14.2672 4.19006 11.8511C2.50003 9.24228 1.4483 6.27207 1.12006 3.18107C1.09507 2.90454 1.12793 2.62583 1.21656 2.3627C1.30518 2.09956 1.44763 1.85776 1.63482 1.65269C1.82202 1.44763 2.04986 1.28378 2.30385 1.1716C2.55783 1.05941 2.8324 1.00133 3.11006 1.00107H6.11006C6.59536 0.996297 7.06585 1.16815 7.43382 1.48461C7.80179 1.80106 8.04213 2.24052 8.11005 2.72107C8.23668 3.68114 8.47151 4.6238 8.81006 5.53107C8.9446 5.889 8.97372 6.27799 8.89396 6.65195C8.81421 7.02592 8.62892 7.36918 8.36005 7.64107L7.09006 8.91107C8.51361 11.4146 10.5865 13.4875 13.0901 14.9111L14.3601 13.6411C14.6319 13.3722 14.9752 13.1869 15.3492 13.1072C15.7231 13.0274 16.1121 13.0565 16.4701 13.1911C17.3773 13.5296 18.32 13.7644 19.2801 13.8911C19.7658 13.9596 20.2095 14.2043 20.5266 14.5786C20.8437 14.9529 21.0122 15.4306 21.0001 15.9211Z"
                           stroke="#313041" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                     </svg>
                  </div>
                  <span class="sr-only">Contact Us</span>
               </a>
               <style>
                  .styles_profile_avatar_dropdown__XEkpK.show {
                     display: block !important;
                  }
               </style>
               <div class="styles_user_control_profile_wrapper__wrzvd">
                  <button type="button" id="profile_dropdown_button"
                     class="styles_user_control__NlZo_ styles_user_control_profile_button__wjFdG">
                     <div class="icon icon_user" role="presentation">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M20 21V19C20 17.9391 19.5786 16.9217 18.8284 16.1716C18.0783 15.4214 17.0609 15 16 15H8C6.93913 15 5.92172 15.4214 5.17157 16.1716C4.42143 16.9217 4 17.9391 4 19V21"
                              stroke="#313041" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                           <path
                              d="M12 11C14.2091 11 16 9.20914 16 7C16 4.79086 14.2091 3 12 3C9.79086 3 8 4.79086 8 7C8 9.20914 9.79086 11 12 11Z"
                              stroke="#313041" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                     </div>
                     <script>
                        document.addEventListener('DOMContentLoaded', function () {
    const dropdownButton = document.getElementById('profile_dropdown_button');
    const dropdownContent = document.querySelector('.styles_profile_avatar_dropdown__XEkpK');

    function showDropdown() {
        dropdownContent.classList.add('show');
    }

    function hideDropdown() {
        dropdownContent.classList.remove('show');
    }

    dropdownButton.addEventListener('click', function () {
        dropdownContent.classList.toggle('show');
    });

    dropdownButton.addEventListener('mouseenter', showDropdown);
    dropdownButton.addEventListener('mouseleave', hideDropdown);
    dropdownContent.addEventListener('mouseenter', showDropdown);
    dropdownContent.addEventListener('mouseleave', hideDropdown);
});
document.addEventListener('click', function (event) {
    const dropdownButton = document.getElementById('profile_dropdown_button');
    const dropdownContent = document.querySelector('.styles_profile_avatar_dropdown__XEkpK');
    
    if (!dropdownButton.contains(event.target) && !dropdownContent.contains(event.target)) {
        dropdownContent.classList.remove('show');
    }
});

                     </script>
                     <span class="sr-only">Profile</span>
                  </button>
                  <div style="display: none"
                     class="styles_profile_avatar_dropdown__XEkpK styles_profile_avatar_dropdown_active__uxmkl"
                     data-testid="profile-avatar-dropdown">
                     <a data-testid="link-component" href="tourscc79.html?list=upcoming">
                        <p class="styles_profile_avatar_dropdown_link__bADCJ">
                           Tours
                        </p>
                     </a>
                     <a data-testid="link-component" href="profile.html">
                        <p class="styles_profile_avatar_dropdown_link__bADCJ">
                           Profile
                        </p>
                     </a>
                     <a data-testid="link-component" href="settings/personal-info.html">
                        <p class="styles_profile_avatar_dropdown_link__bADCJ">
                           Settings
                        </p>
                     </a>
                    
                     @if (Route::has('login'))
                     <nav class="flex items-center px-4">
                        @auth
                        <div class="mt-3 space-y-1">
                           <!-- Account Management -->
                           <x-responsive-nav-link href="{{ route('profile.show') }}"
                              :active="request()->routeIs('profile.show')">
                              {{ __('Profile') }}
                           </x-responsive-nav-link>
                           <!-- Authentication -->
                           <form method="POST" action="{{ route('logout') }}" x-data>
                              @csrf

                              <x-responsive-nav-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
                                 {{ __('Log Out') }}
                              </x-responsive-nav-link>
                           </form>

                           <!-- Team Management -->
                           @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                           <div class="border-t border-gray-200"></div>

                           <div class="block px-4 py-2 text-xs text-gray-400">
                              {{ __('Manage Team') }}
                           </div>

                           <!-- Team Settings -->
                           <x-responsive-nav-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}"
                              :active="request()->routeIs('teams.show')">
                              {{ __('Team Settings') }}
                           </x-responsive-nav-link>

                           @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                           <x-responsive-nav-link href="{{ route('teams.create') }}"
                              :active="request()->routeIs('teams.create')">
                              {{ __('Create New Team') }}
                           </x-responsive-nav-link>
                           @endcan

                           <!-- Team Switcher -->
                           @if (Auth::user()->allTeams()->count() > 1)
                           <div class="border-t border-gray-200"></div>

                           <div class="block px-4 py-2 text-xs text-gray-400">
                              {{ __('Switch Teams') }}
                           </div>

                           @foreach (Auth::user()->allTeams() as $team)
                           <x-switchable-team :team="$team" component="responsive-nav-link" />
                           @endforeach
                           @endif
                           @endif
                        </div>
                        @else
                        <div class="mt-3 space-y-1">
                           <!-- Account Management -->
                           <x-responsive-nav-link href="{{ route('login') }}">
                              {{ __('Login') }}
                           </x-responsive-nav-link>
                           <!-- Authentication -->
                        </div>


                        @if (Route::has('register'))
                        <x-responsive-nav-link href="{{ route('register') }}">
                           {{ __('Register') }}
                        </x-responsive-nav-link>
                        @endif
                        @endauth
                     </nav>
                     @endif
                  </div>
                  <div style="display: none;"
                     class="styles_profile_avatar_dropdown__XEkpK styles_profile_avatar_dropdown_active__uxmkl"
                     data-testid="profile-avatar-dropdown-non-logged-in">
                     <a data-testid="link-component" href="accounts/register/index.html">
                        <p class="styles_profile_avatar_dropdown_link__bADCJ">Register</p>
                     </a>
                     <a data-testid="link-component" href="accounts/login/index.html">
                        <p class="styles_profile_avatar_dropdown_link__bADCJ">Log in</p>
                     </a>
                  </div>
               </div>
            </div>
         </nav>
      </div>
      <!-- Search Modal Container -->
      <div id="search_modal_container" style="display: none" class="container__8nRk6">
         <div data-testid="nav-drop-down"
            class="jollof_desktop_nav_dropdown styles_nav_dropdown_wrapper__I9voU styles_search_dropdown__WrufZ col-desktop-2 col-tablet-lg-1 col-desktop-lg-2 col-tablet-1"
            style="display: block">
            <div class="Search_search_header_container__5jbL4">
               <div>
                  <div class="Search_search_header_top_focus__7CE6E">
                     <div class="styles_search_input_container__8dcKA" role="search">
                        <a data-testid="link-component" href="search/index.html">
                           <div id="desktop_search_header_button"
                              class="styles_search_input_search_icon__pGrGh styles_search_input_search_icon_right__h1ovH">
                              <div class="icon icon_searchGlass" role="presentation" style="width: 16px; height: 16px">
                                 <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                       d="M11.0002 17.6668C14.6821 17.6668 17.6668 14.6821 17.6668 11.0002C17.6668 7.31826 14.6821 4.3335 11.0002 4.3335C7.31826 4.3335 4.3335 7.31826 4.3335 11.0002C4.3335 14.6821 7.31826 17.6668 11.0002 17.6668Z"
                                       stroke="#313041" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    </path>
                                    <path d="M19.6665 19.667L15.7139 15.7144" stroke="#313041" stroke-width="2"
                                       stroke-linecap="round" stroke-linejoin="round"></path>
                                 </svg>
                              </div>
                              <span>Search</span>
                           </div>
                        </a>
                        <label for="navSearch" class="styles_search_input_label__s3F3p">
                           Label used just for aria compliance</label>
                        <form id="nav_search_mobile" method='get' action="https://www.tripmysoul.com/search/"
                           class="hypersearchform  hypersearchmobile"><input type="search" maxlength="128" name="q"
                              ceid="Navigation Search" data-testid="search-input"
                              placeholder="Where’s your next adventure?" data-source="/search/autocomplete/"
                              autocomplete="off"
                              class="hypersearch Search_search_header_input__0S5Il hypersearch-header" id="navSearch"
                              role="searchbox" value="" /><input type="hidden" name="ref" value="navsearch" /></form>
                     </div>
                  </div>
               </div>
               <div id="searchInputTarget"></div>
               <div>
                  <a data-testid="link-component" href="search/index.html">
                     <button class="styles_button__9Iy0U styles_button_sm__bg1VW styles_button_ghost__cuQN3"
                        type="button">
                        <p class="ViewAll_viewAll-text__Ksuru">
                           View all tours
                        </p>
                        <div class="icon icon_arrowForward" role="presentation">
                           <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <rect width="16" height="16" rx="8" fill="white"></rect>
                              <path d="M6 12L10 8L6 4" stroke="#504E61" stroke-width="1.5" stroke-linecap="round"
                                 stroke-linejoin="round"></path>
                           </svg>
                        </div>
                     </button>
                  </a>
               </div>
            </div>
         </div>
         <script>
            function showDropdown() {
                 document.getElementById("destinations_dropdown_panel").style.display = "block";
             }
             
             function hideDropdown() {
                 var dropdownPanel = document.getElementById("destinations_dropdown_panel");
                 var isMouseOverPanel = dropdownPanel.matches(":hover");
                 var isMouseOverButton = document.getElementById("destinations_menu_button").matches(":hover");
             
                 // If the mouse is not over the panel or the button, hide the dropdown
                 if (!isMouseOverPanel && !isMouseOverButton) {
                     dropdownPanel.style.display = "none";
                 }
             }
             
             function toggleDropdown() {
                 var dropdownPanel = document.getElementById("destinations_dropdown_panel");
                 if (dropdownPanel.style.display === "none") {
                     showDropdown();
                 } else {
                     hideDropdown();
                 }
             }
         </script>
      </div>
      <!--Destinations -->
      <div id="destinations_dropdown_panel" style="display: none" class="" onmouseover="showDropdown()"
         onmouseout="hideDropdown()">
         <div data-testid="nav-drop-down"
            class="container__8nRk6 styles_nav_dropdown_wrapper__I9voU col-desktop-2 col-tablet-lg-1 col-desktop-lg-2 col-tablet-1"
            style="display: block">
            <div class="styles_destination_explorer_wrapper__wOiK8">
               <div class="styles_nav_dropdown_navigator_wrapper__3gNU1">
                  @php $displayedStates = []; @endphp
                  @foreach($places as $place)
                  @if (in_array($place->name_state, ['Uttrakhand', 'Himachal Pradesh']) && !in_array($place->name_state,
                  $displayedStates))
                  @php $displayedStates[] = $place->name_state; @endphp
                  <div class="styles_nav_dropdown_selector__OTc81">
                     <button type="button" id="{{ $place->name_state }}"
                        class="styles_nav_dropdown_navigation_button__DMXKE"
                        onmouseover="showDestinations('{{ $place->name_state }}')">
                        <span>{{ $place->name_state }}</span>
                        <div class="icon icon_chevronRight" role="presentation">
                           <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M1 9L5 5L1 1" stroke="#BEB8C4" stroke-width="1.5" stroke-linecap="round"
                                 stroke-linejoin="round"></path>
                           </svg>
                        </div>
                     </button>
                  </div>
                  @endif
                  @endforeach


               </div>
               <div id="swaps">
                  @foreach($places as $place)
                  @if (in_array($place->name_state, ['Uttrakhand', 'Himachal Pradesh']))
                  <div data-testid="{{ $place->name_state }}" class="styles_continent_destinations_wrapper__5ssDy"
                     style="display: none;">
                     <div class="styles_continent_destination_wrapper__Fl_Hb">
                        <i>All destinations in</i>
                        <h3>{{ $place->name_state }}</h3>
                        <ul class="styles_destinations_lists_wrapper__VJPol">
                           @foreach($places as $innerPlace)
                           @if ($innerPlace->name_state === $place->name_state)
                           <li>
                              <a data-testid="link-component" href="{{ $innerPlace->destination_url }}">{{
                                 $innerPlace->destination }}</a>
                           </li>
                           @endif
                           @endforeach
                        </ul>
                        <a data-testid="link-component" href="{{ $place->view_all_url }}">
                           <button class="styles_button__9Iy0U styles_button_sm__bg1VW styles_button_ghost__cuQN3"
                              type="button">
                              <span>View all {{ $place->name_state }}</span>
                              <svg width="6" height="10" viewBox="0 0 6 10" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                 <path d="M1 9L5 5L1 1" stroke="#4c4f56" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                              </svg>
                           </button>
                        </a>
                     </div>

                  </div>
                  @endif
                  @endforeach
               </div>
            </div>
         </div>
      </div>

      <script>
         function showDestinations(state) {
            // Hide all destinations
            const allDestinations = document.querySelectorAll('[data-testid^="Uttrakhand"], [data-testid^="Himachal Pradesh"]');
            allDestinations.forEach(function(destination) {
                destination.style.display = "none";
            });
    
            // Display the destination of the hovered state
            document.querySelector('[data-testid="' + state + '"]').style.display = "block";
        }
    
        // Function to hide all destinations when not hovering over any state
        function hideAllDestinations() {
            const allDestinations = document.querySelectorAll('[data-testid^="Uttrakhand"], [data-testid^="Himachal Pradesh"]');
            allDestinations.forEach(function(destination) {
                destination.style.display = "none";
            });
        }
    
        // Call hideAllDestinations() initially to hide all destinations
        window.onload = function() {
            hideAllDestinations();
        };
      </script>

   </div>
   <!-- /Destination -->
   <!-- Travel Styles -->
   <div id="travel_styles_dropdown_panel" style="display: none" class="">
      <div data-testid="nav-drop-down"
         class="container__8nRk6 styles_nav_dropdown_wrapper__I9voU col-desktop-2 col-tablet-lg-1 col-desktop-lg-2 col-tablet-1"
         style="display: block">
         <div class="styles_ways_to_travel_wrapper__On0BU">
            <div class="styles_nav_dropdown_navigator_wrapper__3gNU1">
               <div class="styles_nav_dropdown_selector__OTc81">
                  <button type="button" id="Trip My Soul Land"
                     class="styles_nav_dropdown_navigation_button__DMXKE styles_selected__dZWqb">
                     <span>G
                        Adventures Land</span>
                     <div class="icon icon_chevronRight" role="presentation">
                        <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path d="M1 9L5 5L1 1" stroke="#BEB8C4 " stroke-width="1.5" stroke-linecap="round"
                              stroke-linejoin="round"></path>
                        </svg>
                     </div>
                  </button>
                  <button type="button" id="Trip My Soul Sailing &amp; Cruises"
                     class="styles_nav_dropdown_navigation_button__DMXKE">
                     <span>Trip My Soul
                        Sailing &amp; Cruises</span>
                     <div class="icon icon_chevronRight" role="presentation">
                        <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path d="M1 9L5 5L1 1" stroke="#BEB8C4 " stroke-width="1.5" stroke-linecap="round"
                              stroke-linejoin="round"></path>
                        </svg>
                     </div>
                  </button>
                  <button type="button" id="Trip My Soul Private Travel"
                     class="styles_nav_dropdown_navigation_button__DMXKE">
                     <span>Trip My Soul
                        Private Travel</span>
                     <div class="icon icon_chevronRight" role="presentation">
                        <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path d="M1 9L5 5L1 1" stroke="#BEB8C4 " stroke-width="1.5" stroke-linecap="round"
                              stroke-linejoin="round"></path>
                        </svg>
                     </div>
                  </button>
                  <button type="button" id="The_Geluxe_Collection" class="styles_nav_dropdown_navigation_button__DMXKE">
                     <span>The Geluxe
                        Collection</span><span class="new_nav_span">New</span>
                     <div class="icon icon_chevronRight" role="presentation">
                        <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path d="M1 9L5 5L1 1" stroke="#BEB8C4 " stroke-width="1.5" stroke-linecap="round"
                              stroke-linejoin="round"></path>
                        </svg>
                     </div>
                  </button>
                  <button type="button" id="National Geographic Journeys"
                     class="styles_nav_dropdown_navigation_button__DMXKE">
                     <span>National
                        Geographic Journeys</span>
                     <div class="icon icon_chevronRight" role="presentation">
                        <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path d="M1 9L5 5L1 1" stroke="#BEB8C4 " stroke-width="1.5" stroke-linecap="round"
                              stroke-linejoin="round"></path>
                        </svg>
                     </div>
                  </button>
                  <button type="button" id="National Geographic Family Journeys"
                     class="styles_nav_dropdown_navigation_button__DMXKE">
                     <span>National
                        Geographic Family Journeys</span>
                     <div class="icon icon_chevronRight" role="presentation">
                        <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path d="M1 9L5 5L1 1" stroke="#BEB8C4 " stroke-width="1.5" stroke-linecap="round"
                              stroke-linejoin="round"></path>
                        </svg>
                     </div>
                  </button>
                  <button type="button" id="Jane Goodall Collection"
                     class="styles_nav_dropdown_navigation_button__DMXKE">
                     <span>Jane Goodall
                        Collection</span>
                     <div class="icon icon_chevronRight" role="presentation">
                        <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path d="M1 9L5 5L1 1" stroke="#BEB8C4 " stroke-width="1.5" stroke-linecap="round"
                              stroke-linejoin="round"></path>
                        </svg>
                     </div>
                  </button>
                  <button type="button" id="Roamies by Hostelworld"
                     class="styles_nav_dropdown_navigation_button__DMXKE">
                     <span>Roamies by
                        Hostelworld</span>
                     <div class="icon icon_chevronRight" role="presentation">
                        <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path d="M1 9L5 5L1 1" stroke="#BEB8C4 " stroke-width="1.5" stroke-linecap="round"
                              stroke-linejoin="round"></path>
                        </svg>
                     </div>
                  </button>
               </div>
            </div>
            <div id="swaps">
               <div data-testid="Trip My Soul Land" class="styles_ways_to_travel_info_wrapper__GkJYI">
                  <div>
                     <h3>Trip My Soul Land</h3>
                     <div>
                        <div class="styles_ways_group_wrapper__Pqrca">
                           <ul class="styles_ways_lists_wrapper__6dYe3"><a data-testid="link-component"
                                 href="travel-styles/classic/index.html">Classic</a><a data-testid="link-component"
                                 href="travel-styles/wellness/index.html">Wellness</a><a data-testid="link-component"
                                 href="travel-styles/local-living/index.html">Local
                                 Living</a><a data-testid="link-component"
                                 href="travel-styles/18-to-30somethings/index.html">18-to-Thirtysomething</a><a
                                 data-testid="link-component" href="travel-styles/active/index.html">Active</a><a
                                 data-testid="link-component" href="travel-styles/family/index.html">Family</a>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <img alt="Trip My Soul Land" loading="lazy" width="280" height="316" decoding="async" data-nimg="1"
                     class="styles_display_image__LzFyK"
                     src="../media.tripmysoul.com/media-server/static/tripmysoul/css/images/nav/waysToTravel/land-tours-desktop.png"
                     style="color: transparent; visibility: visible" />
               </div>
               <div data-testid="Trip My Soul Sailing & Cruises" style="display: none"
                  class="styles_ways_to_travel_info_wrapper__GkJYI">
                  <div>
                     <h3>Trip My Soul Sailing &amp; Cruises</h3>
                     <div>
                        <div class="styles_ways_group_wrapper__Pqrca">
                           <ul class="styles_ways_lists_wrapper__6dYe3"><a data-testid="link-component"
                                 href="travel-styles/cruising/galapagos/index.html">Galápagos
                                 Cruises</a><a data-testid="link-component"
                                 href="travel-styles/cruising/expedition-cruises/antarctica/index.html">Expedition
                                 Cruises</a><a data-testid="link-component"
                                 href="travel-styles/cruising/sailing/index.html">Sailing</a><a
                                 data-testid="link-component"
                                 href="travel-styles/cruising/river/amazon/index.html">Amazon
                                 River Cruises</a>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <img alt="Trip My Soul Sailing &amp; Cruises" loading="lazy" width="280" height="316" decoding="async"
                     data-nimg="1" class="styles_display_image__LzFyK"
                     src="../media.tripmysoul.com/media-server/static/tripmysoul/css/images/nav/waysToTravel/sailing-cruises-desktop.jpg"
                     style="color: transparent; visibility: visible" />
               </div>
               <div data-testid="Trip My Soul Private Travel" style="display: none"
                  class="styles_ways_to_travel_info_wrapper__GkJYI">
                  <div>
                     <h3>Trip My Soul Private Travel</h3>
                     <p class="styles_description__dSZb_">
                        Whether it’s a family retreat or a girls trip, you can surround yourself
                        with a hand-picked crew and customize a tour that fits you all
                        perfectly.
                     </p>
                     <a data-testid="link-component" href="travel-styles/private-travel/index.html">
                        <button class="styles_learn_more_button__nnCDV" type="button">
                           <span>Learn
                              more</span>
                           <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M1 9L5 5L1 1" stroke="#504E61" stroke-width="1.5" stroke-linecap="round"
                                 stroke-linejoin="round"></path>
                           </svg>
                        </button>
                     </a>
                  </div>
                  <img alt="Trip My Soul Private Travel" loading="lazy" width="280" height="316" decoding="async"
                     data-nimg="1" class="styles_display_image__LzFyK"
                     src="../media.tripmysoul.com/media-server/static/tripmysoul/css/images/nav/waysToTravel/private-travel-desktop.png"
                     style="color: transparent; visibility: visible" />
               </div>
               <div data-testid="The_Geluxe_Collection" style="display: none"
                  class="styles_ways_to_travel_info_wrapper__GkJYI">
                  <div>
                     <h3>The Geluxe Collection</h3>
                     <p class="styles_description__dSZb_">
                        Our new line of premium active adventures is officially here. With
                        perfectly paced itineraries, one-of-a-kind accommodations and elevated
                        dining, this is adventure at its finest.
                     </p>
                     <a data-testid="link-component" href="travel-styles/geluxe/index.html">
                        <button class="styles_learn_more_button__nnCDV" type="button">
                           <span>Learn
                              more</span>
                           <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M1 9L5 5L1 1" stroke="#504E61" stroke-width="1.5" stroke-linecap="round"
                                 stroke-linejoin="round"></path>
                           </svg>
                        </button>
                     </a>
                  </div>
                  <img alt="The Geluxe Collection" loading="lazy" width="280" height="316" decoding="async"
                     data-nimg="1" class="styles_display_image__LzFyK"
                     src="../media.tripmysoul.com/media-server/static/tripmysoul/css/images/nav/waysToTravel/geluxe.png"
                     style="color: transparent; visibility: visible" />
               </div>
               <div data-testid="National Geographic Journeys" style="display: none"
                  class="styles_ways_to_travel_info_wrapper__GkJYI">
                  <div>
                     <h3>National Geographic Journeys</h3>
                     <p class="styles_description__dSZb_">
                        Go deeper into the cultures and habitats of the places we explore. More
                        is included and you’ll enjoy greater hands-on exploration, interactions
                        with local experts, and freedom to roam.
                     </p>
                     <a data-testid="link-component" href="travel-styles/national-geographic-journeys/index.html">
                        <button class="styles_learn_more_button__nnCDV" type="button">
                           <span>Learn
                              more</span>
                           <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M1 9L5 5L1 1" stroke="#504E61" stroke-width="1.5" stroke-linecap="round"
                                 stroke-linejoin="round"></path>
                           </svg>
                        </button>
                     </a>
                  </div>
                  <img alt="National Geographic Journeys" loading="lazy" width="280" height="316" decoding="async"
                     data-nimg="1" class="styles_display_image__LzFyK"
                     src="../media.tripmysoul.com/media-server/static/tripmysoul/css/images/nav/waysToTravel/national-geographic-journey-desktop.jpg"
                     style="color: transparent; visibility: visible" />
               </div>
               <div data-testid="National Geographic Family Journeys" style="display: none"
                  class="styles_ways_to_travel_info_wrapper__GkJYI">
                  <div>
                     <h3>National Geographic Family Journeys</h3>
                     <p class="styles_description__dSZb_">
                        Are you an adventure-loving family in search of meaningful ways to
                        discover the world together? These tours are specially designed for
                        travellers seven and up and their inquisitive families.
                     </p>
                     <a data-testid="link-component"
                        href="travel-styles/national-geographic-journeys/family/index.html">
                        <button class="styles_learn_more_button__nnCDV" type="button">
                           <span>Learn
                              more</span>
                           <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M1 9L5 5L1 1" stroke="#504E61" stroke-width="1.5" stroke-linecap="round"
                                 stroke-linejoin="round"></path>
                           </svg>
                        </button>
                     </a>
                  </div>
                  <img alt="National Geographic Family Journeys" loading="lazy" width="280" height="316"
                     decoding="async" data-nimg="1" class="styles_display_image__LzFyK"
                     src="../media.tripmysoul.com/media-server/static/tripmysoul/css/images/nav/waysToTravel/national-geographic-family-journey-desktop.jpg"
                     style="color: transparent; visibility: visible" />
               </div>
               <div data-testid="Jane Goodall Collection" style="display: none"
                  class="styles_ways_to_travel_info_wrapper__GkJYI">
                  <div>
                     <h3>Jane Goodall Collection</h3>
                     <p class="styles_description__dSZb_">
                        Step deeper into the animal kingdom while respecting all of its
                        inhabitants. Our incredible collection of wildlife-focused tours is
                        endorsed by the world-renowned ethologist.
                     </p>
                     <a data-testid="link-component" href="jane-goodall/index.html">
                        <button class="styles_learn_more_button__nnCDV" type="button">
                           <span>Learn
                              more</span>
                           <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M1 9L5 5L1 1" stroke="#504E61" stroke-width="1.5" stroke-linecap="round"
                                 stroke-linejoin="round"></path>
                           </svg>
                        </button>
                     </a>
                  </div>
                  <img alt="Jane Goodall Collection" loading="lazy" width="280" height="316" decoding="async"
                     data-nimg="1" class="styles_display_image__LzFyK"
                     src="../media.tripmysoul.com/media-server/static/tripmysoul/css/images/nav/waysToTravel/jane-goodall-desktop.png"
                     style="color: transparent; visibility: visible" />
               </div>
               <div data-testid="Roamies by Hostelworld" style="display: none"
                  class="styles_ways_to_travel_info_wrapper__GkJYI">
                  <div>
                     <h3>Roamies by Hostelworld</h3>
                     <p class="styles_description__dSZb_">
                        The thrill of adventure. The awesomeness of hostels. Get ‘em both on
                        these immersive small group trips for 18 to 35-year-old travellers.
                     </p>
                     <a data-testid="link-component" href="travel-styles/roamies/index.html">
                        <button class="styles_learn_more_button__nnCDV" type="button">
                           <span>Learn
                              more</span>
                           <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M1 9L5 5L1 1" stroke="#504E61" stroke-width="1.5" stroke-linecap="round"
                                 stroke-linejoin="round"></path>
                           </svg>
                        </button>
                     </a>
                  </div>
                  <img alt="Roamies by Hostelworld" loading="lazy" width="280" height="316" decoding="async"
                     data-nimg="1" class="styles_display_image__LzFyK"
                     src="../media.tripmysoul.com/media-server/static/tripmysoul/css/images/nav/waysToTravel/roamies.jpg"
                     style="color: transparent; visibility: visible" />
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- /Travel Styles -->
   <!-- Why Trip My Soul -->
   <div id="why_g_dropdown_panel" style="display: none" class="">
      <div data-testid="nav-drop-down"
         class="container__8nRk6 styles_nav_dropdown_wrapper__I9voU col-desktop-2 col-tablet-lg-1 col-desktop-lg-2 col-tablet-1"
         style="display: block">
         <div class="styles_why_travel_with_g_wrapper__J7xT4">
            <div class="styles_nav_dropdown_navigator_wrapper__3gNU1">
               <div class="styles_nav_dropdown_selector__OTc81">
                  <button type="button" id="Why choose us"
                     class="styles_nav_dropdown_navigation_button__DMXKE styles_selected__dZWqb">
                     <span>Why
                        Choose Us</span>
                     <div class="icon icon_chevronRight" role="presentation">
                        <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path d="M1 9L5 5L1 1" stroke="#BEB8C4 " stroke-width="1.5" stroke-linecap="round"
                              stroke-linejoin="round"></path>
                        </svg>
                     </div>
                  </button>
                  <button type="button" id="G for Good" class="styles_nav_dropdown_navigation_button__DMXKE">
                     <span>G for Good</span>
                     <div class="icon icon_chevronRight" role="presentation">
                        <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path d="M1 9L5 5L1 1" stroke="#BEB8C4 " stroke-width="1.5" stroke-linecap="round"
                              stroke-linejoin="round"></path>
                        </svg>
                     </div>
                  </button>
                  <button type="button" id="Planeterra" class="styles_nav_dropdown_navigation_button__DMXKE">
                     <span>Planeterra</span>
                     <div class="icon icon_chevronRight" role="presentation">
                        <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path d="M1 9L5 5L1 1" stroke="#BEB8C4 " stroke-width="1.5" stroke-linecap="round"
                              stroke-linejoin="round"></path>
                        </svg>
                     </div>
                  </button>
                  <button type="button" id="Trees for Days" class="styles_nav_dropdown_navigation_button__DMXKE">
                     <span>Trees for
                        Days</span>
                     <div class="icon icon_chevronRight" role="presentation">
                        <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path d="M1 9L5 5L1 1" stroke="#BEB8C4 " stroke-width="1.5" stroke-linecap="round"
                              stroke-linejoin="round"></path>
                        </svg>
                     </div>
                  </button>
                  <button type="button" id="Travel resources" class="styles_nav_dropdown_navigation_button__DMXKE">
                     <span>Travel
                        Resources</span>
                     <div class="icon icon_chevronRight" role="presentation">
                        <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path d="M1 9L5 5L1 1" stroke="#BEB8C4 " stroke-width="1.5" stroke-linecap="round"
                              stroke-linejoin="round"></path>
                        </svg>
                     </div>
                  </button>
               </div>
            </div>
            <div id="swaps">
               <div data-testid="Why choose us" style="display: none" class="styles_why_g_info_wrapper__anbdZ">
                  <div>
                     <h3>Why choose us</h3>
                     <p class="styles_description__5Yj4u">
                        As the leader in small group travel for 30 years, we know how to do it
                        right: flexible itineraries, freedom to roam, safety, peace of mind, and
                        locally based guides.
                     </p>
                     <a data-testid="link-component" href="about-us/why-travel-with-tripmysoul/index.html">
                        <button class="styles_learn_more_button__7kukR" type="button">
                           <span>Learn
                              more</span>
                           <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M1 9L5 5L1 1" stroke="#504E61" stroke-width="1.5" stroke-linecap="round"
                                 stroke-linejoin="round"></path>
                           </svg>
                        </button>
                     </a>
                  </div>
                  <img alt="travel-reason" loading="lazy" width="280" height="280" decoding="async" data-nimg="1"
                     class="styles_display_image__8aXvF"
                     src="../media.tripmysoul.com/media-server/static/tripmysoul/css/images/nav/why-g/why-travel-with-g-1.png"
                     style="color: transparent; visibility: visible" />
               </div>
               <div data-testid="G for Good" style="display: none" class="styles_why_g_info_wrapper__anbdZ">
                  <div>
                     <h3>G for Good</h3>
                     <p class="styles_description__5Yj4u">
                        Change the world just by having the time of your life. When you travel
                        with us, you become a force for good by acting responsibly and creating
                        positive impact.
                     </p>
                     <a data-testid="link-component" href="about-us/responsible-travel/index.html">
                        <button class="styles_learn_more_button__7kukR" type="button">
                           <span>Learn
                              more</span>
                           <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M1 9L5 5L1 1" stroke="#504E61" stroke-width="1.5" stroke-linecap="round"
                                 stroke-linejoin="round"></path>
                           </svg>
                        </button>
                     </a>
                  </div>
                  <img alt="travel-reason" loading="lazy" width="280" height="280" decoding="async" data-nimg="1"
                     class="styles_display_image__8aXvF"
                     src="../media.tripmysoul.com/media-server/static/tripmysoul/css/images/nav/why-g/g-for-good-desktop.png"
                     style="color: transparent; visibility: visible" />
               </div>
               <div data-testid="Planeterra" style="display: none" class="styles_why_g_info_wrapper__anbdZ">
                  <div>
                     <h3>Planeterra</h3>
                     <p class="styles_description__5Yj4u">
                        Together with our non-profit partner, Planeterra, we ensure local
                        communities touched by our tours benefit from our visits in as many ways
                        possible.
                     </p>
                     <a data-testid="link-component" href="http://www.planeterra.org/">
                        <button class="styles_learn_more_button__7kukR" type="button">
                           <span>Learn
                              more</span>
                           <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M1 9L5 5L1 1" stroke="#504E61" stroke-width="1.5" stroke-linecap="round"
                                 stroke-linejoin="round"></path>
                           </svg>
                        </button>
                     </a>
                  </div>
                  <img alt="travel-reason" loading="lazy" width="280" height="280" decoding="async" data-nimg="1"
                     class="styles_display_image__8aXvF"
                     src="../media.tripmysoul.com/media-server/static/tripmysoul/css/images/nav/why-g/planettera-desktop.png"
                     style="color: transparent; visibility: visible" />
               </div>
               <div data-testid="Trees for Days" style="display: none" class="styles_why_g_info_wrapper__anbdZ">
                  <div>
                     <h3>Trees for Days</h3>
                     <p class="styles_description__5Yj4u">
                        Leave your destination even greener than you found it! For every day on
                        tour, we’ll plant a tree in your honour and ensure that our forests get
                        to live their best lives.
                     </p>
                     <a data-testid="link-component" href="community-tourism/trees-for-days">
                        <button class="styles_learn_more_button__7kukR" type="button">
                           <span>Learn
                              more</span>
                           <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M1 9L5 5L1 1" stroke="#504E61" stroke-width="1.5" stroke-linecap="round"
                                 stroke-linejoin="round"></path>
                           </svg>
                        </button>
                     </a>
                  </div>
                  <img alt="travel-reason" loading="lazy" width="280" height="280" decoding="async" data-nimg="1"
                     class="styles_display_image__8aXvF"
                     src="../media.tripmysoul.com/media-server/static/tripmysoul/css/images/nav/why-g/trees-desktop.png"
                     style="color: transparent; visibility: visible" />
               </div>
               <div data-testid="Travel resources" style="display: none" class="styles_why_g_info_wrapper__anbdZ">
                  <div>
                     <h3>Travel resources</h3>
                     <div>
                        <div class="styles_why_group_wrapper__QQY8V">
                           <ul class="styles_why_lists_wrapper__ul_cn"><a data-testid="link-component"
                                 href="travel-resources/travel-credits/index.html">How to use
                                 your travel credits</a><a data-testid="link-component"
                                 href="travel-resources/prepare-for-your-tour/index.html">Preparing
                                 for your trip</a>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <img alt="travel-reason" loading="lazy" width="280" height="280" decoding="async" data-nimg="1"
                     class="styles_display_image__8aXvF"
                     src="../media.tripmysoul.com/media-server/static/tripmysoul/css/images/nav/why-g/travel-resource-desktop.png"
                     style="color: transparent; visibility: visible" />
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- /Why Trip My Soul -->
   <!-- Deals -->
   <div id="deals_dropdown_panel" style="display: none" class="">
      <div data-testid="nav-drop-down"
         class="container__8nRk6 styles_nav_dropdown_wrapper__I9voU col-desktop-2 col-tablet-lg-1 col-desktop-lg-2 col-tablet-1"
         style="display: block">
         <div class="styles_travel_deals_wrapper__2CAQL">
            <div class="styles_nav_dropdown_navigator_wrapper__3gNU1">
               <div class="styles_nav_dropdown_selector__OTc81">
                  <button type="button" id="Last Minute Travel Deals"
                     class="styles_nav_dropdown_navigation_button__DMXKE styles_selected__dZWqb">
                     <span>Last
                        Minute Travel Deals</span>
                     <div class="icon icon_chevronRight" role="presentation">
                        <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path d="M1 9L5 5L1 1" stroke="#BEB8C4 " stroke-width="1.5" stroke-linecap="round"
                              stroke-linejoin="round"></path>
                        </svg>
                     </div>
                  </button>
                  <button type="button" id="Loyalty Discount" class="styles_nav_dropdown_navigation_button__DMXKE">
                     <span>Loyalty
                        Discount</span>
                     <div class="icon icon_chevronRight" role="presentation">
                        <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path d="M1 9L5 5L1 1" stroke="#BEB8C4 " stroke-width="1.5" stroke-linecap="round"
                              stroke-linejoin="round"></path>
                        </svg>
                     </div>
                  </button>
                  <button type="button" id="All Travel Deals" class="styles_nav_dropdown_navigation_button__DMXKE">
                     <span>All Travel
                        Deals</span>
                     <div class="icon icon_chevronRight" role="presentation">
                        <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path d="M1 9L5 5L1 1" stroke="#BEB8C4 " stroke-width="1.5" stroke-linecap="round"
                              stroke-linejoin="round"></path>
                        </svg>
                     </div>
                  </button>
               </div>
            </div>
            <div id="swaps">
               <div data-testid="Last Minute Travel Deals" style="display: none" class="styles_deals_wrapper__MwvMS">
                  <div class="styles_deal_wrapper__hchdT">
                     <h3>Last minute deals</h3>
                     <p class="styles_description__FYINM">
                        Looking to have the time of your life in the next 90 days or so? You can
                        save big if you’re ready to book now.
                     </p>
                     <a data-testid="link-component" href="travel-deals/last-minute-travel-deals/index.html">
                        <button class="styles_button__9Iy0U styles_button_sm__bg1VW styles_button_ghost__cuQN3"
                           type="button">
                           <span>View last minute travel deals</span>
                           <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M1 9L5 5L1 1" stroke="#504E61" stroke-width="1.5" stroke-linecap="round"
                                 stroke-linejoin="round"></path>
                           </svg>
                        </button>
                     </a>
                  </div>
                  <div class="styles_display_image__bU6AC"><img alt="travel-deal" loading="lazy" width="281"
                        height="211" decoding="async" data-nimg="1"
                        src="../media.tripmysoul.com/media-server/static/tripmysoul/css/images/nav/travelDeals/last-minute-deals-desktop.png"
                        style="color: transparent; visibility: visible" /></div>
               </div>
               <div data-testid="Loyalty Discount" style="display: none" class="styles_deals_wrapper__MwvMS">
                  <div class="styles_deal_wrapper__hchdT">
                     <h3>Loyalty discount</h3>
                     <p class="styles_description__FYINM">
                        Back home from a Trip My Soul tour? Submit a quick trip evaluation to
                        save 5% on your next tour with us.
                     </p>
                     <a data-testid="link-component" href="evaluations/index.html">
                        <button class="styles_button__9Iy0U styles_button_sm__bg1VW styles_button_ghost__cuQN3"
                           type="button">
                           <span>View loyalty discount</span>
                           <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M1 9L5 5L1 1" stroke="#504E61" stroke-width="1.5" stroke-linecap="round"
                                 stroke-linejoin="round"></path>
                           </svg>
                        </button>
                     </a>
                  </div>
                  <div class="styles_display_image__bU6AC"><img alt="travel-deal" loading="lazy" width="281"
                        height="211" decoding="async" data-nimg="1"
                        src="../media.tripmysoul.com/media-server/static/tripmysoul/css/images/nav/travelDeals/loyalty.png"
                        style="color: transparent; visibility: visible" /></div>
               </div>
               <div data-testid="Student Discount" style="display: none" class="styles_deals_wrapper__MwvMS">
                  <div class="styles_deal_wrapper__hchdT">
                     <h3>Student discount</h3>
                     <p class="styles_description__FYINM">
                        Got proof that you’re pursuing higher learning? Then we’ve got a travel
                        voucher with your name on it.
                     </p>
                     <a data-testid="link-component" href="travel-deals/student-travel-deals/index.html">
                        <button class="styles_button__9Iy0U styles_button_sm__bg1VW styles_button_ghost__cuQN3"
                           type="button">
                           <span>View student discount</span>
                           <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M1 9L5 5L1 1" stroke="#504E61" stroke-width="1.5" stroke-linecap="round"
                                 stroke-linejoin="round"></path>
                           </svg>
                        </button>
                     </a>
                  </div>
                  <div class="styles_display_image__bU6AC"><img alt="travel-deal" loading="lazy" width="281"
                        height="211" decoding="async" data-nimg="1"
                        src="../media.tripmysoul.com/media-server/static/tripmysoul/css/images/nav/travelDeals/student.png"
                        style="color: transparent; visibility: visible" /></div>
               </div>
               <div data-testid="All Travel Deals" style="display: none" class="styles_deals_wrapper__MwvMS">
                  <div class="styles_deal_wrapper__hchdT">
                     <h3>All travel deals</h3>
                     <p class="styles_description__FYINM">
                        New ways to save pop up all the time. Here’s where you’ll find every hot
                        deal in one easy place.
                     </p>
                     <a data-testid="link-component" href="travel-deals/index.html">
                        <button class="styles_button__9Iy0U styles_button_sm__bg1VW styles_button_ghost__cuQN3"
                           type="button">
                           <span>View all travel deals</span>
                           <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M1 9L5 5L1 1" stroke="#504E61" stroke-width="1.5" stroke-linecap="round"
                                 stroke-linejoin="round"></path>
                           </svg>
                        </button>
                     </a>
                  </div>
                  <div class="styles_display_image__bU6AC"><img alt="travel-deal" loading="lazy" width="281"
                        height="211" decoding="async" data-nimg="1"
                        src="../media.tripmysoul.com/media-server/static/tripmysoul/css/images/nav/travelDeals/all-travel-deals-desktop.png"
                        style="color: transparent; visibility: visible" /></div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- /Deals -->
</div>
</div>
<div aria-labelledby="mobileheader" class="Mobile_mobile_container__AwGM8">
   <div class="Mobile_mobile_logo__UqXxy"><a href="index.html"><img alt="G-Adventures logo" data-testid="mobile-logo"
            width="140" height="32" decoding="async" data-nimg="1" src="{{ Voyager::image(setting('site.logo')) }}"
            style="color: transparent; visibility: visible" /></a></div>
   <div class="Mobile_mobile_right_side__xvgES">
      <div role="presentation" data-testid="mobile-avatar-section">
         <button type="button" class="Mobile_user_control__Wd9Lr undefined">
            <div class="icon icon_user" role="presentation">
               <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                     d="M20 21V19C20 17.9391 19.5786 16.9217 18.8284 16.1716C18.0783 15.4214 17.0609 15 16 15H8C6.93913 15 5.92172 15.4214 5.17157 16.1716C4.42143 16.9217 4 17.9391 4 19V21"
                     stroke="#313041" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                  <path
                     d="M12 11C14.2091 11 16 9.20914 16 7C16 4.79086 14.2091 3 12 3C9.79086 3 8 4.79086 8 7C8 9.20914 9.79086 11 12 11Z"
                     stroke="#313041" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
               </svg>
            </div>
            <span class="sr-only">Maybe?</span>
         </button>
      </div>
   </div>
</div>
<nav aria-labelledby="mobilenavheader" class="MobileNav_mobile_nav_container__Pj1id">
   <div class="BottomIcons_bottom_icons_container___42eI">
      <div tabindex="0" role="button" class="BottomIcons_bottom_icons_shared__ZuqOJ">
         <div class="icon icon_destinations" data-testid="mobile-nav-destinations" role="presentation"
            style="width: auto; height: auto">
            <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
               <path
                  d="M21 10C21 17 12 23 12 23C12 23 3 17 3 10C3 7.61305 3.94821 5.32387 5.63604 3.63604C7.32387 1.94821 9.61305 1 12 1C14.3869 1 16.6761 1.94821 18.364 3.63604C20.0518 5.32387 21 7.61305 21 10Z"
                  stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
               <path
                  d="M12 13C13.6569 13 15 11.6569 15 10C15 8.34315 13.6569 7 12 7C10.3431 7 9 8.34315 9 10C9 11.6569 10.3431 13 12 13Z"
                  stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
         </div>
         <span data-testid="Destinations">Destinations</span>
      </div>
      <div tabindex="0" role="button" class="BottomIcons_bottom_icons_shared__ZuqOJ">
         <div class="icon icon_searchGlassBig" data-testid="mobile-nav-destinations" role="presentation"
            style="width: auto; height: auto">
            <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
               <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M10.625 19.7917C15.6876 19.7917 19.7917 15.6876 19.7917 10.625C19.7917 5.5624 15.6876 1.45834 10.625 1.45834C5.5624 1.45834 1.45834 5.5624 1.45834 10.625C1.45834 15.6876 5.5624 19.7917 10.625 19.7917Z"
                  stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
               <path d="M22.5415 22.5418L17.1066 17.1069" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round"></path>
            </svg>
         </div>
         <span data-testid="Search">Search</span>
      </div>
      <div role="button" tabindex="0" id="jollof_menu_button"
         class="BottomIcons_bottom_icons_shared__ZuqOJ BottomIcons_bottom_icons_menu__Pw8fJ">
         <div class="icon icon_menu" data-testid="mobile-nav-destinations" role="presentation"
            style="width: auto; height: auto">
            <svg width="22" height="24" viewBox="0 0 22 24" xmlns="http://www.w3.org/2000/svg">
               <path
                  d="M2 3L1 3C0.447715 3 2.39636e-09 3.44772 5.35241e-09 4C8.30847e-09 4.55228 0.447715 5 1 5L2 5C2.55228 5 3 4.55228 3 4C3 3.44772 2.55228 3 2 3Z">
               </path>
               <path
                  d="M2 11L1 11C0.447715 11 2.39636e-09 11.4477 5.35241e-09 12C8.30847e-09 12.5523 0.447715 13 1 13L2 13C2.55228 13 3 12.5523 3 12C3 11.4477 2.55228 11 2 11Z">
               </path>
               <path
                  d="M2 19L1 19C0.447715 19 2.39636e-09 19.4477 5.35241e-09 20C8.30847e-09 20.5523 0.447715 21 1 21L2 21C2.55228 21 3 20.5523 3 20C3 19.4477 2.55228 19 2 19Z">
               </path>
               <path
                  d="M21 3L6 3C5.44772 3 5 3.44772 5 4C5 4.55228 5.44772 5 6 5L21 5C21.5523 5 22 4.55228 22 4C22 3.44772 21.5523 3 21 3Z">
               </path>
               <path
                  d="M21 11L6 11C5.44772 11 5 11.4477 5 12C5 12.5523 5.44772 13 6 13L21 13C21.5523 13 22 12.5523 22 12C22 11.4477 21.5523 11 21 11Z">
               </path>
               <path
                  d="M21 19L6 19C5.44772 19 5 19.4477 5 20C5 20.5523 5.44772 21 6 21L21 21C21.5523 21 22 20.5523 22 20C22 19.4477 21.5523 19 21 19Z">
               </path>
            </svg>
         </div>
         <span data-testid="Menu">Menu</span>
      </div>
   </div>
   <div data-testid="Destinations" style="display: none;" class="Modal_modal_overlay__bCKGC">
      <div class="Modal_modal_container__SpUvL DropdownSelect_dropdown-select-modal__95CRV" role="presentation">
         <div class="Modal_modal_has_text__RVir6 Modal_modal_has_title_text__XzqC8">
            <div class="TopSection_top_section__9sJj1" role="presentation">
               <h4></h4>
            </div>
            <div class="Modal_close_btn__qn_on">
               <div class="icon icon_close" data-testid="modal-close-icon" role="presentation"
                  style="width: 16px; height: 16px">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path d="M18 6L6 18" stroke="#313041" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round"></path>
                     <path d="M6 6L18 18" stroke="#504E61" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round"></path>
                  </svg>
               </div>
            </div>
         </div>
         <div class="Destinations_destination_container__Wff2N">
            <h3 class="Title_title__hJHmB" id="mobilenavheader">Destinations</h3>
            <div data-testid="accordionItem"
               class="styles_accordion_item__z982c styles_accordion_item_compact__LN9LC destination-regions">
               <button id="heading-:r17:" type="button" class="styles_accordion_toggle__nMAeY" aria-expanded="false"
                  aria-controls="collapse-:r17:">
                  <div class="styles_accordion_title__AWtJE">{{ $place->name_state }}</div>
                  <div class="styles_accordion_collapse_icon__cyx6r">
                     <div class="icon icon_chevronDown" role="presentation" style="width: 16px; height: 16px">
                        <svg viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path d="M4 6L8 10L12 6" stroke="#242239" stroke-width="1.5" stroke-linecap="round"
                              stroke-linejoin="round"></path>
                        </svg>
                     </div>
                  </div>
               </button>
               <div id="collapse-:r17:" class="styles_accordion_collapse__9YZG7" aria-labelledby="heading-:r17:"
                  style="height: 0px">
                  <div data-testid="accordion_body" class="styles_accordion_body__4vvJA">
                     <ul>
                        <a data-testid="link-component" href="destinations/north-america/canada/index.html">
                           <li>Canada</li>
                        </a>
                        <a data-testid="link-component" href="destinations/north-america/united-states/index.html">
                           <li>United States</li>
                        </a>
                     </ul>
                  </div>
               </div>
            </div>
            <div data-testid="accordionItem"
               class="styles_accordion_item__z982c styles_accordion_item_compact__LN9LC destination-regions">
               <button id="heading-:r19:" type="button" class="styles_accordion_toggle__nMAeY" aria-expanded="false"
                  aria-controls="collapse-:r19:">
                  <div class="styles_accordion_title__AWtJE">
                     Central America &amp; Caribbean
                  </div>
                  <div class="styles_accordion_collapse_icon__cyx6r">
                     <div class="icon icon_chevronDown" role="presentation" style="width: 16px; height: 16px">
                        <svg viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path d="M4 6L8 10L12 6" stroke="#242239" stroke-width="1.5" stroke-linecap="round"
                              stroke-linejoin="round"></path>
                        </svg>
                     </div>
                  </div>
               </button>
               <div id="collapse-:r19:" class="styles_accordion_collapse__9YZG7" aria-labelledby="heading-:r19:"
                  style="height: 0px">
                  <div data-testid="accordion_body" class="styles_accordion_body__4vvJA">
                     <ul>
                        <a data-testid="link-component" href="destinations/central-america/belize/index.html">
                           <li>Belize</li>
                        </a>
                        <a data-testid="link-component" href="destinations/central-america/costa-rica/index.html">
                           <li>Costa Rica</li>
                        </a>
                        <a data-testid="link-component" href="destinations/central-america/cuba/index.html">
                           <li>Cuba</li>
                        </a>
                        <a data-testid="link-component" href="destinations/central-america/el-salvador/index.html">
                           <li>El Salvador</li>
                        </a>
                        <a data-testid="link-component" href="destinations/central-america/guatemala/index.html">
                           <li>Guatemala</li>
                        </a>
                        <a data-testid="link-component" href="destinations/central-america/honduras/index.html">
                           <li>Honduras</li>
                        </a>
                        <a data-testid="link-component" href="destinations/central-america/mexico/index.html">
                           <li>Mexico</li>
                        </a>
                        <a data-testid="link-component" href="destinations/central-america/nicaragua/index.html">
                           <li>Nicaragua</li>
                        </a>
                     </ul>
                  </div>
               </div>
            </div>
            <div data-testid="accordionItem"
               class="styles_accordion_item__z982c styles_accordion_item_compact__LN9LC destination-regions">
               <button id="heading-:r1b:" type="button" class="styles_accordion_toggle__nMAeY" aria-expanded="false"
                  aria-controls="collapse-:r1b:">
                  <div class="styles_accordion_title__AWtJE">South America</div>
                  <div class="styles_accordion_collapse_icon__cyx6r">
                     <div class="icon icon_chevronDown" role="presentation" style="width: 16px; height: 16px">
                        <svg viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path d="M4 6L8 10L12 6" stroke="#242239" stroke-width="1.5" stroke-linecap="round"
                              stroke-linejoin="round"></path>
                        </svg>
                     </div>
                  </div>
               </button>
               <div id="collapse-:r1b:" class="styles_accordion_collapse__9YZG7" aria-labelledby="heading-:r1b:"
                  style="height: 0px">
                  <div data-testid="accordion_body" class="styles_accordion_body__4vvJA">
                     <ul>
                        <a data-testid="link-component" href="destinations/south-america/argentina/index.html">
                           <li>Argentina</li>
                        </a>
                        <a data-testid="link-component" href="destinations/south-america/bolivia/index.html">
                           <li>Bolivia</li>
                        </a>
                        <a data-testid="link-component" href="destinations/south-america/brazil/index.html">
                           <li>Brazil</li>
                        </a>
                        <a data-testid="link-component" href="destinations/south-america/chile/index.html">
                           <li>Chile</li>
                        </a>
                        <a data-testid="link-component" href="destinations/south-america/colombia/index.html">
                           <li>Colombia</li>
                        </a>
                        <a data-testid="link-component" href="destinations/south-america/ecuador/index.html">
                           <li>Ecuador</li>
                        </a>
                        <a data-testid="link-component" href="destinations/south-america/falkland-islands/index.html">
                           <li>Falkland Islands</li>
                        </a>
                        <a data-testid="link-component" href="destinations/south-america/galapagos/index.html">
                           <li>Galápagos Islands</li>
                        </a>
                        <a data-testid="link-component"
                           href="travel-styles/active/hiking-trekking/inca-trail/index.html">
                           <li>Inca Trail</li>
                        </a>
                        <a data-testid="link-component" href="destinations/south-america/machu-picchu/index.html">
                           <li>Machu Picchu</li>
                        </a>
                        <a data-testid="link-component" href="destinations/south-america/peru/index.html">
                           <li>Peru</li>
                        </a>
                        <a data-testid="link-component" href="destinations/south-america/uruguay/index.html">
                           <li>Uruguay</li>
                        </a>
                     </ul>
                  </div>
               </div>
            </div>
            <div data-testid="accordionItem"
               class="styles_accordion_item__z982c styles_accordion_item_compact__LN9LC destination-regions">
               <button id="heading-:r1d:" type="button" class="styles_accordion_toggle__nMAeY" aria-expanded="false"
                  aria-controls="collapse-:r1d:">
                  <div class="styles_accordion_title__AWtJE">kedarnath</div>
                  <div class="styles_accordion_collapse_icon__cyx6r">
                     <div class="icon icon_chevronDown" role="presentation" style="width: 16px; height: 16px">
                        <svg viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path d="M4 6L8 10L12 6" stroke="#242239" stroke-width="1.5" stroke-linecap="round"
                              stroke-linejoin="round"></path>
                        </svg>
                     </div>
                  </div>
               </button>
               <div id="collapse-:r1d:" class="styles_accordion_collapse__9YZG7" aria-labelledby="heading-:r1d:"
                  style="height: 0px">
                  <div data-testid="accordion_body" class="styles_accordion_body__4vvJA">
                     <ul>
                        <a data-testid="link-component" href="destinations/kedarnath/albania/index.html">
                           <li>Albania</li>
                        </a>
                        <a data-testid="link-component" href="destinations/kedarnath/austria/index.html">
                           <li>Austria</li>
                        </a>
                        <a data-testid="link-component" href="destinations/kedarnath/belgium/index.html">
                           <li>Belgium</li>
                        </a>
                        <a data-testid="link-component" href="destinations/kedarnath/bulgaria/index.html">
                           <li>Bulgaria</li>
                        </a>
                        <a data-testid="link-component" href="destinations/kedarnath/bosnia-and-herzegovina/index.html">
                           <li>Bosnia and Herzegovina</li>
                        </a>
                        <a data-testid="link-component" href="destinations/kedarnath/czech-republic/index.html">
                           <li>Czech Republic</li>
                        </a>
                        <a data-testid="link-component" href="destinations/kedarnath/canary-islands/index.html">
                           <li>Canary Islands</li>
                        </a>
                        <a data-testid="link-component" href="destinations/kedarnath/croatia/index.html">
                           <li>Croatia</li>
                        </a>
                        <a data-testid="link-component" href="destinations/kedarnath/france/index.html">
                           <li>France</li>
                        </a>
                        <a data-testid="link-component" href="destinations/kedarnath/germany/index.html">
                           <li>Germany</li>
                        </a>
                        <a data-testid="link-component" href="destinations/kedarnath/greece/index.html">
                           <li>Greece</li>
                        </a>
                        <a data-testid="link-component" href="destinations/kedarnath/hungary/index.html">
                           <li>Hungary</li>
                        </a>
                        <a data-testid="link-component" href="destinations/kedarnath/monaco/index.html">
                           <li>Monaco</li>
                        </a>
                        <a data-testid="link-component" href="destinations/kedarnath/montenegro/index.html">
                           <li>Montenegro</li>
                        </a>
                        <a data-testid="link-component" href="destinations/kedarnath/netherlands/index.html">
                           <li>Netherlands</li>
                        </a>
                        <a data-testid="link-component" href="destinations/kedarnath/norway/index.html">
                           <li>Norway</li>
                        </a>
                        <a data-testid="link-component" href="destinations/kedarnath/poland/index.html">
                           <li>Poland</li>
                        </a>
                        <a data-testid="link-component" href="destinations/kedarnath/iceland/index.html">
                           <li>Iceland</li>
                        </a>
                        <a data-testid="link-component" href="destinations/kedarnath/ireland/index.html">
                           <li>Ireland</li>
                        </a>
                        <a data-testid="link-component" href="destinations/kedarnath/italy/index.html">
                           <li>Italy</li>
                        </a>
                        <a data-testid="link-component" href="destinations/kedarnath/portugal/index.html">
                           <li>Portugal</li>
                        </a>
                        <a data-testid="link-component" href="destinations/kedarnath/romania/index.html">
                           <li>Romania</li>
                        </a>
                        <a data-testid="link-component" href="destinations/kedarnath/scotland/index.html">
                           <li>Scotland</li>
                        </a>
                        <a data-testid="link-component" href="destinations/kedarnath/spain/index.html">
                           <li>Spain</li>
                        </a>
                        <a data-testid="link-component" href="destinations/kedarnath/serbia/index.html">
                           <li>Serbia</li>
                        </a>
                        <a data-testid="link-component" href="destinations/kedarnath/switzerland/index.html">
                           <li>Switzerland</li>
                        </a>
                        <a data-testid="link-component" href="destinations/kedarnath/turkey/index.html">
                           <li>Turkey</li>
                        </a>
                        <a data-testid="link-component" href="destinations/kedarnath/united-kingdom/index.html">
                           <li>United Kingdom</li>
                        </a>
                     </ul>
                  </div>
               </div>
            </div>
            <div data-testid="accordionItem"
               class="styles_accordion_item__z982c styles_accordion_item_compact__LN9LC destination-regions">
               <button id="heading-:r1f:" type="button" class="styles_accordion_toggle__nMAeY" aria-expanded="false"
                  aria-controls="collapse-:r1f:">
                  <div class="styles_accordion_title__AWtJE">
                     North Africa &amp; Middle East
                  </div>
                  <div class="styles_accordion_collapse_icon__cyx6r">
                     <div class="icon icon_chevronDown" role="presentation" style="width: 16px; height: 16px">
                        <svg viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path d="M4 6L8 10L12 6" stroke="#242239" stroke-width="1.5" stroke-linecap="round"
                              stroke-linejoin="round"></path>
                        </svg>
                     </div>
                  </div>
               </button>
               <div id="collapse-:r1f:" class="styles_accordion_collapse__9YZG7" aria-labelledby="heading-:r1f:"
                  style="height: 0px">
                  <div data-testid="accordion_body" class="styles_accordion_body__4vvJA">
                     <ul>
                        <a data-testid="link-component" href="destinations/north-africa-middle-east/egypt/index.html">
                           <li>Egypt</li>
                        </a>
                        <a data-testid="link-component" href="destinations/north-africa-middle-east/israel/index.html">
                           <li>Israel</li>
                        </a>
                        <a data-testid="link-component" href="destinations/north-africa-middle-east/jordan/index.html">
                           <li>Jordan</li>
                        </a>
                        <a data-testid="link-component" href="destinations/north-africa-middle-east/morocco/index.html">
                           <li>Morocco</li>
                        </a>
                        <a data-testid="link-component" href="destinations/north-africa-middle-east/oman/index.html">
                           <li>Oman</li>
                        </a>
                     </ul>
                  </div>
               </div>
            </div>
            <div data-testid="accordionItem"
               class="styles_accordion_item__z982c styles_accordion_item_compact__LN9LC destination-regions">
               <button id="heading-:r1h:" type="button" class="styles_accordion_toggle__nMAeY" aria-expanded="false"
                  aria-controls="collapse-:r1h:">
                  <div class="styles_accordion_title__AWtJE">Africa</div>
                  <div class="styles_accordion_collapse_icon__cyx6r">
                     <div class="icon icon_chevronDown" role="presentation" style="width: 16px; height: 16px">
                        <svg viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path d="M4 6L8 10L12 6" stroke="#242239" stroke-width="1.5" stroke-linecap="round"
                              stroke-linejoin="round"></path>
                        </svg>
                     </div>
                  </div>
               </button>
               <div id="collapse-:r1h:" class="styles_accordion_collapse__9YZG7" aria-labelledby="heading-:r1h:"
                  style="height: 0px">
                  <div data-testid="accordion_body" class="styles_accordion_body__4vvJA">
                     <ul>
                        <a data-testid="link-component" href="destinations/africa/botswana/index.html">
                           <li>Botswana</li>
                        </a>
                        <a data-testid="link-component" href="destinations/africa/kenya/index.html">
                           <li>Kenya</li>
                        </a>
                        <a data-testid="link-component" href="destinations/africa/madagascar/index.html">
                           <li>Madagascar</li>
                        </a>
                        <a data-testid="link-component" href="destinations/africa/malawi/index.html">
                           <li>Malawi</li>
                        </a>
                        <a data-testid="link-component" href="destinations/africa/namibia/index.html">
                           <li>Namibia</li>
                        </a>
                        <a data-testid="link-component" href="destinations/africa/rwanda/index.html">
                           <li>Rwanda</li>
                        </a>
                        <a data-testid="link-component" href="destinations/africa/south-africa/index.html">
                           <li>South Africa</li>
                        </a>
                        <a data-testid="link-component" href="destinations/africa/tanzania/index.html">
                           <li>Tanzania</li>
                        </a>
                        <a data-testid="link-component" href="destinations/africa/uganda/index.html">
                           <li>Uganda</li>
                        </a>
                        <a data-testid="link-component" href="destinations/africa/zambia/index.html">
                           <li>Zambia</li>
                        </a>
                        <a data-testid="link-component" href="destinations/africa/zimbabwe/index.html">
                           <li>Zimbabwe</li>
                        </a>
                     </ul>
                  </div>
               </div>
            </div>
            <div data-testid="accordionItem"
               class="styles_accordion_item__z982c styles_accordion_item_compact__LN9LC destination-regions">
               <button id="heading-:r1j:" type="button" class="styles_accordion_toggle__nMAeY" aria-expanded="false"
                  aria-controls="collapse-:r1j:">
                  <div class="styles_accordion_title__AWtJE">Asia</div>
                  <div class="styles_accordion_collapse_icon__cyx6r">
                     <div class="icon icon_chevronDown" role="presentation" style="width: 16px; height: 16px">
                        <svg viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path d="M4 6L8 10L12 6" stroke="#242239" stroke-width="1.5" stroke-linecap="round"
                              stroke-linejoin="round"></path>
                        </svg>
                     </div>
                  </div>
               </button>
               <div id="collapse-:r1j:" class="styles_accordion_collapse__9YZG7" aria-labelledby="heading-:r1j:"
                  style="height: 0px">
                  <div data-testid="accordion_body" class="styles_accordion_body__4vvJA">
                     <ul>
                        <a data-testid="link-component" href="destinations/asia/bali/index.html">
                           <li>Bali</li>
                        </a>
                        <a data-testid="link-component" href="destinations/asia/borneo/index.html">
                           <li>Borneo</li>
                        </a>
                        <a data-testid="link-component" href="destinations/asia/bhutan/index.html">
                           <li>Bhutan</li>
                        </a>
                        <a data-testid="link-component" href="destinations/asia/cambodia/index.html">
                           <li>Cambodia</li>
                        </a>
                        <a data-testid="link-component" href="destinations/asia/india/index.html">
                           <li>India</li>
                        </a>
                        <a data-testid="link-component" href="destinations/asia/indonesia/index.html">
                           <li>Indonesia</li>
                        </a>
                        <a data-testid="link-component" href="destinations/asia/japan/index.html">
                           <li>Japan</li>
                        </a>
                        <a data-testid="link-component" href="destinations/asia/laos/index.html">
                           <li>Laos</li>
                        </a>
                        <a data-testid="link-component" href="destinations/asia/maldives/index.html">
                           <li>Maldives</li>
                        </a>
                        <a data-testid="link-component" href="destinations/asia/malaysia/index.html">
                           <li>Malaysia</li>
                        </a>
                        <a data-testid="link-component" href="destinations/asia/mongolia/index.html">
                           <li>Mongolia</li>
                        </a>
                        <a data-testid="link-component" href="destinations/asia/nepal/index.html">
                           <li>Nepal</li>
                        </a>
                        <a data-testid="link-component" href="destinations/asia/singapore/index.html">
                           <li>Singapore</li>
                        </a>
                        <a data-testid="link-component" href="destinations/asia/south-korea/index.html">
                           <li>South Korea</li>
                        </a>
                        <a data-testid="link-component" href="destinations/asia/sri-lanka/index.html">
                           <li>Sri Lanka</li>
                        </a>
                        <a data-testid="link-component" href="destinations/asia/thailand/index.html">
                           <li>Thailand</li>
                        </a>
                        <a data-testid="link-component" href="destinations/asia/turkmenistan/index.html">
                           <li>Turkmenistan</li>
                        </a>
                        <a data-testid="link-component" href="destinations/asia/uzbekistan/index.html">
                           <li>Uzbekistan</li>
                        </a>
                        <a data-testid="link-component" href="destinations/asia/vietnam/index.html">
                           <li>Vietnam</li>
                        </a>
                     </ul>
                  </div>
               </div>
            </div>
            <div data-testid="accordionItem"
               class="styles_accordion_item__z982c styles_accordion_item_compact__LN9LC destination-regions">
               <button id="heading-:r1l:" type="button" class="styles_accordion_toggle__nMAeY" aria-expanded="false"
                  aria-controls="collapse-:r1l:">
                  <div class="styles_accordion_title__AWtJE">Oceania</div>
                  <div class="styles_accordion_collapse_icon__cyx6r">
                     <div class="icon icon_chevronDown" role="presentation" style="width: 16px; height: 16px">
                        <svg viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path d="M4 6L8 10L12 6" stroke="#242239" stroke-width="1.5" stroke-linecap="round"
                              stroke-linejoin="round"></path>
                        </svg>
                     </div>
                  </div>
               </button>
               <div id="collapse-:r1l:" class="styles_accordion_collapse__9YZG7" aria-labelledby="heading-:r1l:"
                  style="height: 0px">
                  <div data-testid="accordion_body" class="styles_accordion_body__4vvJA">
                     <ul>
                        <a data-testid="link-component" href="destinations/oceania/australia/index.html">
                           <li>Australia</li>
                        </a>
                        <a data-testid="link-component" href="destinations/oceania/new-zealand/index.html">
                           <li>New Zealand</li>
                        </a>
                     </ul>
                  </div>
               </div>
            </div>
            <div>
               <div data-testid="accordionItem"
                  class="styles_accordion_item__z982c styles_accordion_item_compact__LN9LC destination-regions">
                  <button id="heading-:r1n:" type="button" class="styles_accordion_toggle__nMAeY" aria-expanded="false"
                     aria-controls="collapse-:r1n:">
                     <div class="styles_accordion_title__AWtJE">Antarctica</div>
                     <div class="styles_accordion_collapse_icon__cyx6r">
                        <div class="icon icon_chevronDown" role="presentation" style="width: 16px; height: 16px">
                           <svg viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M4 6L8 10L12 6" stroke="#242239" stroke-width="1.5" stroke-linecap="round"
                                 stroke-linejoin="round"></path>
                           </svg>
                        </div>
                     </div>
                  </button>
                  <div id="collapse-:r1n:" class="styles_accordion_collapse__9YZG7" aria-labelledby="heading-:r1n:"
                     style="height: 0px">
                     <div data-testid="accordion_body" class="styles_accordion_body__4vvJA">
                        <ul>
                           <a data-testid="link-component"
                              href="travel-styles/cruising/expedition-cruises/antarctica/index.html">
                              <li>Antarctica</li>
                           </a>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div data-testid="Search" style="display: none" class="Modal_modal_overlay__bCKGC">
      <div class="Modal_modal_container__SpUvL DropdownSelect_dropdown-select-modal__95CRV" role="presentation">
         <div class="Modal_modal_has_text__RVir6 Modal_modal_has_title_text__XzqC8">
            <div class="TopSection_top_section__9sJj1" role="presentation">
               <h4></h4>
            </div>
            <div class="Modal_close_btn__qn_on">
               <div class="icon icon_close" data-testid="modal-close-icon" role="presentation"
                  style="width: 16px; height: 16px">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path d="M18 6L6 18" stroke="#313041" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round"></path>
                     <path d="M6 6L18 18" stroke="#504E61" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round"></path>
                  </svg>
               </div>
            </div>
         </div>
         <div class="Search_search_mobile_container__fiykU">
            <div>
               <h3 class="Title_title__hJHmB jollof_search_header" id="mobilenavheader">Search</h3>
               <div class="Search_search_mobile_top_focus__cbNAo">
                  <div class="Search_search_mobile_input_close_button__FqyPl">
                     <div class="icon icon_arrowLeft " data-testid="arrow-left" role="presentation"
                        style="width: 16px; height: 16px;">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path d="M19 12H5" stroke="#504E61" stroke-width="1.5" stroke-linecap="round"
                              stroke-linejoin="round"></path>
                           <path d="M12 19L5 12L12 5" stroke="#504E61" stroke-width="1.5" stroke-linecap="round"
                              stroke-linejoin="round"></path>
                        </svg>
                     </div>
                  </div>
                  <div class="styles_search_input_container__8dcKA" role="search">
                     <a data-testid="link-component" href="search/index.html">
                        <div class="styles_search_input_search_icon__pGrGh styles_search_input_search_icon_left__tascK">
                           <div class="icon icon_searchGlass" role="presentation" style="width: 16px; height: 16px">
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                 <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M11.0002 17.6668C14.6821 17.6668 17.6668 14.6821 17.6668 11.0002C17.6668 7.31826 14.6821 4.3335 11.0002 4.3335C7.31826 4.3335 4.3335 7.31826 4.3335 11.0002C4.3335 14.6821 7.31826 17.6668 11.0002 17.6668Z"
                                    stroke="#313041" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                 </path>
                                 <path d="M19.6665 19.667L15.7139 15.7144" stroke="#313041" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"></path>
                              </svg>
                           </div>
                           <span>Search</span>
                        </div>
                     </a>
                     <label for="navSearch" class="styles_search_input_label__s3F3p">Label used
                        just for aria compliance</label>
                     <form id="nav_search" method='get' action="https://www.tripmysoul.com/search/"
                        class="hypersearchform "><input type="search" maxlength="128" name="q" ceid="Navigation Search"
                           data-testid="search-input" placeholder="Where’s your next adventure?"
                           data-source="/search/autocomplete/" autocomplete="off"
                           class="hypersearch hypersearch-mobile Search_search_mobile_input__Tlp4P" id="navSearch"
                           role="searchbox" value="" /><input type="hidden" name="ref" value="navsearch" /></form>
                  </div>
               </div>
            </div>
            <div style="margin-top: 16px;">
               <a data-testid="link-component" href="search/index.html">
                  <button class="styles_button__9Iy0U styles_button_sm__bg1VW styles_button_ghost__cuQN3" type="button">
                     <p class="ViewAll_viewAll-text__Ksuru">View all tours&nbsp;</p>
                     <div class="icon icon_arrowForward" role="presentation">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <rect width="16" height="16" rx="8" fill="white"></rect>
                           <path d="M6 12L10 8L6 4" stroke="#504E61" stroke-width="1.5" stroke-linecap="round"
                              stroke-linejoin="round"></path>
                        </svg>
                     </div>
                  </button>
               </a>
            </div>
         </div>
      </div>
   </div>
   <div data-testid="Menu" id="jollof_menu" style="display: none" class="Modal_modal_overlay__bCKGC">
      <div class="Modal_modal_container__SpUvL DropdownSelect_dropdown-select-modal__95CRV" role="presentation">
         <div class="Modal_modal_has_text__RVir6 Modal_modal_has_title_text__XzqC8">
            <div class="TopSection_top_section__9sJj1" role="presentation">
               <h4></h4>
            </div>
            <div class="Modal_close_btn__qn_on">
               <div class="icon icon_close" data-testid="modal-close-icon" role="presentation"
                  style="width: 16px; height: 16px">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path d="M18 6L6 18" stroke="#313041" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round"></path>
                     <path d="M6 6L18 18" stroke="#504E61" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round"></path>
                  </svg>
               </div>
            </div>
         </div>
         <div class="Menu_menu_container__c_7f1">
            <h3 class="Title_title__hJHmB" id="mobilenavheader">Menu</h3>
            <div id="jollof_jump_to_destinations" data-testid="accordionItem"
               class="styles_accordion_item__z982c styles_accordion_item_compact__LN9LC menu-items">
               <button id="heading-:r1p:" type="button" class="styles_accordion_toggle__nMAeY" aria-expanded="false"
                  aria-controls="collapse-:r1p:">
                  <div class="styles_accordion_title__AWtJE">Destinations</div>
                  <div class="styles_accordion_collapse_icon__cyx6r">
                     <div class="icon icon_chevronDown" role="presentation" style="width: 16px; height: 16px">
                        <svg viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path d="M4 6L8 10L12 6" stroke="#242239" stroke-width="1.5" stroke-linecap="round"
                              stroke-linejoin="round"></path>
                        </svg>
                     </div>
                  </div>
               </button>
            </div>
            <div data-testid="accordionItem"
               class="styles_accordion_item__z982c styles_accordion_item_compact__LN9LC menu-items">
               <button id="heading-:r1r:" type="button" class="styles_accordion_toggle__nMAeY" aria-expanded="false"
                  aria-controls="collapse-:r1r:">
                  <div class="styles_accordion_title__AWtJE">Travel Styles</div>
                  <div class="styles_accordion_collapse_icon__cyx6r">
                     <div class="icon icon_chevronDown" role="presentation" style="width: 16px; height: 16px">
                        <svg viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path d="M4 6L8 10L12 6" stroke="#242239" stroke-width="1.5" stroke-linecap="round"
                              stroke-linejoin="round"></path>
                        </svg>
                     </div>
                  </div>
               </button>
               <div id="collapse-:r1r:" class="styles_accordion_collapse__9YZG7" aria-labelledby="heading-:r1r:"
                  style="height: 0px">
                  <div data-testid="accordion_body" class="styles_accordion_body__4vvJA">
                     <ul>
                        <li><a data-testid="link-component" href="travel-styles/classic/index.html">Classic</a></li>
                        <li><a data-testid="link-component" href="travel-styles/wellness/index.html">Wellness</a></li>
                        <li><a data-testid="link-component" href="travel-styles/local-living/index.html">Local
                              Living</a></li>
                        <li><a data-testid="link-component"
                              href="travel-styles/18-to-30somethings/index.html">18-to-Thirtysomethings</a>
                        </li>
                        <li><a data-testid="link-component" href="travel-styles/active/index.html">Active</a></li>
                        <li><a data-testid="link-component" href="travel-styles/family/index.html">Family</a></li>
                        <li><a data-testid="link-component"
                              href="destinations/south-america/galapagos/index.html">Galapagos
                              Cruises</a>
                        </li>
                        <li><a data-testid="link-component"
                              href="travel-styles/cruising/expedition-cruises/antarctica/index.html">Expedition
                              Cruises</a>
                        </li>
                        <li><a data-testid="link-component" href="travel-styles/cruising/river/amazon/index.html">Amazon
                              River
                              Cruises</a>
                        </li>
                        <li><a data-testid="link-component" href="travel-styles/cruising/sailing/index.html">Sailing</a>
                        </li>
                        <li><a data-testid="link-component" href="travel-styles/private-travel/index.html">Private
                              Travel</a>
                        </li>
                        <li><a data-testid="link-component" href="travel-styles/geluxe/index.html">The Geluxe
                              Collection</a>
                        </li>
                        <li><a data-testid="link-component"
                              href="travel-styles/national-geographic-journeys/index.html">National
                              Geographic Journeys</a>
                        </li>
                        <li><a data-testid="link-component"
                              href="travel-styles/national-geographic-journeys/family/index.html">National
                              Geographic Family Journeys</a>
                        </li>
                        <li><a data-testid="link-component" href="jane-goodall/index.html">Jane
                              Goodall Collection</a>
                        </li>
                        <li><a data-testid="link-component" href="travel-styles/roamies/index.html">Roamies</a></li>
                     </ul>
                  </div>
               </div>
            </div>
            <div data-testid="accordionItem"
               class="styles_accordion_item__z982c styles_accordion_item_compact__LN9LC menu-items">
               <button id="heading-:r1t:" type="button" class="styles_accordion_toggle__nMAeY" aria-expanded="false"
                  aria-controls="collapse-:r1t:">
                  <div class="styles_accordion_title__AWtJE">Why Trip My Soul</div>
                  <div class="styles_accordion_collapse_icon__cyx6r">
                     <div class="icon icon_chevronDown" role="presentation" style="width: 16px; height: 16px">
                        <svg viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path d="M4 6L8 10L12 6" stroke="#242239" stroke-width="1.5" stroke-linecap="round"
                              stroke-linejoin="round"></path>
                        </svg>
                     </div>
                  </div>
               </button>
               <div id="collapse-:r1t:" class="styles_accordion_collapse__9YZG7" aria-labelledby="heading-:r1t:"
                  style="height: 0px">
                  <div data-testid="accordion_body" class="styles_accordion_body__4vvJA">
                     <ul>
                        <li><a data-testid="link-component" href="about-us/why-travel-with-tripmysoul/index.html">Why
                              Choose
                              us</a>
                        </li>
                        <li><a data-testid="link-component" href="about-us/responsible-travel/index.html">G for Good</a>
                        </li>
                        <li><a data-testid="link-component" href="https://planeterra.org/">Planeterra</a></li>
                        <li><a data-testid="link-component" href="community-tourism/trees-for-days">Trees for Days</a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
            <div data-testid="accordionItem"
               class="styles_accordion_item__z982c styles_accordion_item_compact__LN9LC menu-items">
               <button id="heading-:r1t:" type="button" class="styles_accordion_toggle__nMAeY" aria-expanded="false"
                  aria-controls="collapse-:r1t:">
                  <div class="styles_accordion_title__AWtJE">Travel Resources</div>
                  <div class="styles_accordion_collapse_icon__cyx6r">
                     <div class="icon icon_chevronDown" role="presentation" style="width: 16px; height: 16px">
                        <svg viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path d="M4 6L8 10L12 6" stroke="#242239" stroke-width="1.5" stroke-linecap="round"
                              stroke-linejoin="round"></path>
                        </svg>
                     </div>
                  </div>
               </button>
               <div id="collapse-:r1t:" class="styles_accordion_collapse__9YZG7" aria-labelledby="heading-:r1t:"
                  style="height: 0px">
                  <div data-testid="accordion_body" class="styles_accordion_body__4vvJA">
                     <ul>
                        <li><a data-testid="link-component" href="travel-resources/travel-credits/index.html">How to use
                              your
                              travel credits</a>
                        </li>
                        <li><a data-testid="link-component"
                              href="travel-resources/prepare-for-your-tour/index.html">Preparing
                              for your trip</a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
            <div data-testid="accordionItem"
               class="styles_accordion_item__z982c styles_accordion_item_compact__LN9LC menu-items">
               <button id="heading-:r1v:" type="button" class="styles_accordion_toggle__nMAeY" aria-expanded="false"
                  aria-controls="collapse-:r1v:">
                  <div class="styles_accordion_title__AWtJE">Travel Deals</div>
                  <div class="styles_accordion_collapse_icon__cyx6r">
                     <div class="icon icon_chevronDown" role="presentation" style="width: 16px; height: 16px">
                        <svg viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path d="M4 6L8 10L12 6" stroke="#242239" stroke-width="1.5" stroke-linecap="round"
                              stroke-linejoin="round"></path>
                        </svg>
                     </div>
                  </div>
               </button>
               <div id="collapse-:r1v:" class="styles_accordion_collapse__9YZG7" aria-labelledby="heading-:r1v:"
                  style="height: 0px">
                  <div data-testid="accordion_body" class="styles_accordion_body__4vvJA">
                     <ul>
                        <li><a data-testid="link-component"
                              href="search/indexf3b1.html?refinementList%5Bpromotions%5D%5B0%5D=Last%20Minute%20Specials">Last
                              Minute Travel Deals</a>
                        </li>
                        <li><a data-testid="link-component" href="evaluations/index.html">Loyalty
                              Discounts</a>
                        </li>
                        <li><a data-testid="link-component" href="travel-deals/index.html">All
                              Travel Deals</a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
            <div data-testid="accordionItem"
               class="styles_accordion_item__z982c styles_accordion_item_compact__LN9LC menu-items">
               <button id="heading-:r21:" type="button" class="styles_accordion_toggle__nMAeY" aria-expanded="false"
                  aria-controls="collapse-:r21:">
                  <div class="styles_accordion_title__AWtJE">Contact Us</div>
                  <div class="styles_accordion_collapse_icon__cyx6r">
                     <div class="icon icon_chevronDown" role="presentation" style="width: 16px; height: 16px">
                        <svg viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path d="M4 6L8 10L12 6" stroke="#242239" stroke-width="1.5" stroke-linecap="round"
                              stroke-linejoin="round"></path>
                        </svg>
                     </div>
                  </div>
               </button>
               <div id="collapse-:r21:" class="styles_accordion_collapse__9YZG7" aria-labelledby="heading-:r21:"
                  style="height: 0px">
                  <div data-testid="accordion_body" class="styles_accordion_body__4vvJA">
                     <ul>
                        <li><a data-testid="link-component" href="contact-us/index.html">Call, chat
                              or email us</a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</nav>