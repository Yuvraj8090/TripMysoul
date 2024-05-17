{{--
<div class="container">
    <div class="tabset">
        <!-- Tab 1 -->
        <input type="radio" name="tabset" id="tab1" aria-controls="Kedarnath" checked>
        <label for="tab1">Kedarnath</label>
        <!-- Tab 2 -->
        <input type="radio" name="tabset" id="tab2" aria-controls="rauchbier">
        <label for="tab2">Manali</label>
        <!-- Tab 3 -->
        <input type="radio" name="tabset" id="tab3" aria-controls="Shimla">
        <label for="tab3">Shimla</label>

        <div class="tab-panels">
            <section id="Kedarnath" class="tab-panel">
                <div class="container">
                    <div class="row flex-nowrap overflow-auto">
                        <div class="max-w-sm overflow-hidden shadow-lg card-desti">
                            <div class="relative">
                                <!-- Discount -->
                                <div class="absolute top-0 left-0 bg-black text-white px-2 py-1 mt-2 tag-discount-p">
                                    <div class="flex items-center">
                                        <!-- Price Tag -->
                                        <svg width="12" height="13" viewBox="0 0 12 13" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10.705 6.29L6.205 1.79C6.025 1.61 5.775 1.5 5.5 1.5H2C1.45 1.5 1 1.95 1 2.5V6C1 6.275 1.11 6.525 1.295 6.71L5.795 11.21C5.975 11.39 6.225 11.5 6.5 11.5C6.775 11.5 7.025 11.39 7.205 11.205L10.705 7.705C10.89 7.525 11 7.275 11 7C11 6.725 10.885 6.47 10.705 6.29ZM6.5 10.505L2 6V2.5H5.5V2.495L10 6.995L6.5 10.505Z"
                                                fill="white" />
                                            <path
                                                d="M3.25 4.5C3.66421 4.5 4 4.16421 4 3.75C4 3.33579 3.66421 3 3.25 3C2.83579 3 2.5 3.33579 2.5 3.75C2.5 4.16421 2.83579 4.5 3.25 4.5Z"
                                                fill="white" />
                                        </svg>
                                        <!-- Discount Text -->
                                        <span class="tag-discount">SAVE ₹ 481</span>
                                    </div>
                                </div>
                                <!-- Image -->
                                <img class="card-imgs" src="{{ Voyager::image(setting('site.background')) }}"
                                    alt="PANCH KEDAR">
                            </div>
                            <div class="px-6 py-4 flex justify-between items-center">
                                <!-- Left Section -->
                                <div>
                                    <!-- Title -->
                                    <p class="days-cal">23 DAY TOUR</p>
                                    <div class="desti-name">PANCH KEDAR</div>
                                    <!-- Next Departure -->
                                    <p class="next-depa">Next departure May 19, 2024</p>
                                    <div class="flex items-center">
                                        <span class="text-gray-700">₹</span>
                                        <p class="pric-desti">3519</p>
                                        <!-- Discounted Price -->
                                        <del class="mrp-desti ml-2">₹ 4000</del>
                                    </div>
                                    <div class="d-flex" style="width: 158px;">
                                        <div class="btn btn-dark text-white"
                                            style="--bs-btn-padding-x: 10px; font-size:12px; margin-right: 10px;">
                                            View itinerary
                                        </div>
                                        <div class="btn btn-dark text-white"
                                            style="--bs-btn-padding-x: 10px; font-size:12px;">
                                            <svg width="21" height="21" viewBox="0 0 21 21" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M16.4423 13.2104L14.3465 12.9711C14.1001 12.9421 13.8502 12.9694 13.6159 13.0509C13.3815 13.1324 13.1686 13.2661 12.9933 13.4417L11.4751 14.9607C9.13271 13.7688 7.22882 11.8638 6.03752 9.52014L7.564 7.99282C7.91881 7.63782 8.09209 7.13422 8.03432 6.63887L7.79504 4.5584C7.75047 4.15552 7.55935 3.7831 7.25807 3.5121C6.9568 3.2411 6.56642 3.09047 6.1613 3.08887H4.73384C3.80145 3.08887 3.02584 3.86492 3.0836 4.79783C3.52091 11.8483 9.15649 17.4787 16.1947 17.9163C17.1271 17.9741 17.9028 17.1981 17.9028 16.2652V14.8368C17.911 14.0113 17.2756 13.3013 16.4423 13.2104Z"
                                                    fill="white" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <!-- Right Section -->
                                <div class="text-right">
                                    <!-- Details -->
                                    <div class="text-gray-700 text-base flex justify-end flex-col"
                                        style="margin-left: 31px; margin-top: -60px;">
                                        <span class="mr-1 flex items-center" style="margin-left: 27px;">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M15.4829 5.63406L10.6864 4.90408L8.54222 0.352135C8.48365 0.227506 8.38731 0.126615 8.26829 0.0652895C7.96981 -0.0890138 7.6071 0.0395723 7.45786 0.352135L5.3137 4.90408L0.517213 5.63406C0.384974 5.65384 0.26407 5.71912 0.171503 5.81803C0.0595945 5.93848 -0.0020722 6.10053 5.31713e-05 6.26856C0.00217854 6.4366 0.0679221 6.59688 0.182838 6.71418L3.65316 10.2572L2.83328 15.2602C2.81405 15.3766 2.82635 15.4963 2.86878 15.6057C2.91121 15.7151 2.98207 15.8099 3.07333 15.8793C3.16459 15.9488 3.27259 15.99 3.38509 15.9984C3.4976 16.0068 3.6101 15.982 3.70983 15.9269L8.00004 13.5648L12.2902 15.9269C12.4074 15.9922 12.5434 16.0139 12.6737 15.9902C13.0024 15.9308 13.2235 15.6044 13.1668 15.2602L12.3469 10.2572L15.8172 6.71418C15.9117 6.61724 15.974 6.49064 15.9929 6.35216C16.0439 6.00597 15.8135 5.68549 15.4829 5.63406Z"
                                                    fill="#19AD6F" />
                                            </svg>
                                            <span class="text-gray-700">4.9 (1.6K)</span>
                                        </span>
                                        <p class="bg-black sale-tag">Early Summer Sale!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="max-w-sm overflow-hidden shadow-lg card-desti">
                            <div class="relative">
                                <!-- Discount -->
                                <div class="absolute top-0 left-0 bg-black text-white px-2 py-1 mt-2 tag-discount-p">
                                    <div class="flex items-center">
                                        <!-- Price Tag -->
                                        <svg width="12" height="13" viewBox="0 0 12 13" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10.705 6.29L6.205 1.79C6.025 1.61 5.775 1.5 5.5 1.5H2C1.45 1.5 1 1.95 1 2.5V6C1 6.275 1.11 6.525 1.295 6.71L5.795 11.21C5.975 11.39 6.225 11.5 6.5 11.5C6.775 11.5 7.025 11.39 7.205 11.205L10.705 7.705C10.89 7.525 11 7.275 11 7C11 6.725 10.885 6.47 10.705 6.29ZM6.5 10.505L2 6V2.5H5.5V2.495L10 6.995L6.5 10.505Z"
                                                fill="white" />
                                            <path
                                                d="M3.25 4.5C3.66421 4.5 4 4.16421 4 3.75C4 3.33579 3.66421 3 3.25 3C2.83579 3 2.5 3.33579 2.5 3.75C2.5 4.16421 2.83579 4.5 3.25 4.5Z"
                                                fill="white" />
                                        </svg>
                                        <!-- Discount Text -->
                                        <span class="tag-discount">SAVE ₹ 481</span>
                                    </div>
                                </div>
                                <!-- Image -->
                                <img class="card-imgs" src="{{ Voyager::image(setting('site.background')) }}"
                                    alt="PANCH KEDAR">
                            </div>
                            <div class="px-6 py-4 flex justify-between items-center">
                                <!-- Left Section -->
                                <div>
                                    <!-- Title -->
                                    <p class="days-cal">23 DAY TOUR</p>
                                    <div class="desti-name">PANCH KEDAR</div>
                                    <!-- Next Departure -->
                                    <p class="next-depa">Next departure May 19, 2024</p>
                                    <div class="flex items-center">
                                        <span class="text-gray-700">₹</span>
                                        <p class="pric-desti">3519</p>
                                        <!-- Discounted Price -->
                                        <del class="mrp-desti ml-2">₹ 4000</del>
                                    </div>
                                    <div class="d-flex" style="width: 158px;">
                                        <div class="btn btn-dark text-white"
                                            style="--bs-btn-padding-x: 10px; font-size:12px; margin-right: 10px;">
                                            View itinerary
                                        </div>
                                        <div class="btn btn-dark text-white"
                                            style="--bs-btn-padding-x: 10px; font-size:12px;">
                                            <svg width="21" height="21" viewBox="0 0 21 21" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M16.4423 13.2104L14.3465 12.9711C14.1001 12.9421 13.8502 12.9694 13.6159 13.0509C13.3815 13.1324 13.1686 13.2661 12.9933 13.4417L11.4751 14.9607C9.13271 13.7688 7.22882 11.8638 6.03752 9.52014L7.564 7.99282C7.91881 7.63782 8.09209 7.13422 8.03432 6.63887L7.79504 4.5584C7.75047 4.15552 7.55935 3.7831 7.25807 3.5121C6.9568 3.2411 6.56642 3.09047 6.1613 3.08887H4.73384C3.80145 3.08887 3.02584 3.86492 3.0836 4.79783C3.52091 11.8483 9.15649 17.4787 16.1947 17.9163C17.1271 17.9741 17.9028 17.1981 17.9028 16.2652V14.8368C17.911 14.0113 17.2756 13.3013 16.4423 13.2104Z"
                                                    fill="white" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <!-- Right Section -->
                                <div class="text-right">
                                    <!-- Details -->
                                    <div class="text-gray-700 text-base flex justify-end flex-col"
                                        style="margin-left: 31px; margin-top: -60px;">
                                        <span class="mr-1 flex items-center" style="margin-left: 27px;">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M15.4829 5.63406L10.6864 4.90408L8.54222 0.352135C8.48365 0.227506 8.38731 0.126615 8.26829 0.0652895C7.96981 -0.0890138 7.6071 0.0395723 7.45786 0.352135L5.3137 4.90408L0.517213 5.63406C0.384974 5.65384 0.26407 5.71912 0.171503 5.81803C0.0595945 5.93848 -0.0020722 6.10053 5.31713e-05 6.26856C0.00217854 6.4366 0.0679221 6.59688 0.182838 6.71418L3.65316 10.2572L2.83328 15.2602C2.81405 15.3766 2.82635 15.4963 2.86878 15.6057C2.91121 15.7151 2.98207 15.8099 3.07333 15.8793C3.16459 15.9488 3.27259 15.99 3.38509 15.9984C3.4976 16.0068 3.6101 15.982 3.70983 15.9269L8.00004 13.5648L12.2902 15.9269C12.4074 15.9922 12.5434 16.0139 12.6737 15.9902C13.0024 15.9308 13.2235 15.6044 13.1668 15.2602L12.3469 10.2572L15.8172 6.71418C15.9117 6.61724 15.974 6.49064 15.9929 6.35216C16.0439 6.00597 15.8135 5.68549 15.4829 5.63406Z"
                                                    fill="#19AD6F" />
                                            </svg>
                                            <span class="text-gray-700">4.9 (1.6K)</span>
                                        </span>
                                        <p class="bg-black sale-tag">Early Summer Sale!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="max-w-sm overflow-hidden shadow-lg card-desti">
                            <div class="relative">
                                <!-- Discount -->
                                <div class="absolute top-0 left-0 bg-black text-white px-2 py-1 mt-2 tag-discount-p">
                                    <div class="flex items-center">
                                        <!-- Price Tag -->
                                        <svg width="12" height="13" viewBox="0 0 12 13" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10.705 6.29L6.205 1.79C6.025 1.61 5.775 1.5 5.5 1.5H2C1.45 1.5 1 1.95 1 2.5V6C1 6.275 1.11 6.525 1.295 6.71L5.795 11.21C5.975 11.39 6.225 11.5 6.5 11.5C6.775 11.5 7.025 11.39 7.205 11.205L10.705 7.705C10.89 7.525 11 7.275 11 7C11 6.725 10.885 6.47 10.705 6.29ZM6.5 10.505L2 6V2.5H5.5V2.495L10 6.995L6.5 10.505Z"
                                                fill="white" />
                                            <path
                                                d="M3.25 4.5C3.66421 4.5 4 4.16421 4 3.75C4 3.33579 3.66421 3 3.25 3C2.83579 3 2.5 3.33579 2.5 3.75C2.5 4.16421 2.83579 4.5 3.25 4.5Z"
                                                fill="white" />
                                        </svg>
                                        <!-- Discount Text -->
                                        <span class="tag-discount">SAVE ₹ 481</span>
                                    </div>
                                </div>
                                <!-- Image -->
                                <img class="card-imgs" src="{{ Voyager::image(setting('site.background')) }}"
                                    alt="PANCH KEDAR">
                            </div>
                            <div class="px-6 py-4 flex justify-between items-center">
                                <!-- Left Section -->
                                <div>
                                    <!-- Title -->
                                    <p class="days-cal">23 DAY TOUR</p>
                                    <div class="desti-name">PANCH KEDAR</div>
                                    <!-- Next Departure -->
                                    <p class="next-depa">Next departure May 19, 2024</p>
                                    <div class="flex items-center">
                                        <span class="text-gray-700">₹</span>
                                        <p class="pric-desti">3519</p>
                                        <!-- Discounted Price -->
                                        <del class="mrp-desti ml-2">₹ 4000</del>
                                    </div>
                                    <div class="d-flex" style="width: 158px;">
                                        <div class="btn btn-dark text-white"
                                            style="--bs-btn-padding-x: 10px; font-size:12px; margin-right: 10px;">
                                            View itinerary
                                        </div>
                                        <div class="btn btn-dark text-white"
                                            style="--bs-btn-padding-x: 10px; font-size:12px;">
                                            <svg width="21" height="21" viewBox="0 0 21 21" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M16.4423 13.2104L14.3465 12.9711C14.1001 12.9421 13.8502 12.9694 13.6159 13.0509C13.3815 13.1324 13.1686 13.2661 12.9933 13.4417L11.4751 14.9607C9.13271 13.7688 7.22882 11.8638 6.03752 9.52014L7.564 7.99282C7.91881 7.63782 8.09209 7.13422 8.03432 6.63887L7.79504 4.5584C7.75047 4.15552 7.55935 3.7831 7.25807 3.5121C6.9568 3.2411 6.56642 3.09047 6.1613 3.08887H4.73384C3.80145 3.08887 3.02584 3.86492 3.0836 4.79783C3.52091 11.8483 9.15649 17.4787 16.1947 17.9163C17.1271 17.9741 17.9028 17.1981 17.9028 16.2652V14.8368C17.911 14.0113 17.2756 13.3013 16.4423 13.2104Z"
                                                    fill="white" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <!-- Right Section -->
                                <div class="text-right">
                                    <!-- Details -->
                                    <div class="text-gray-700 text-base flex justify-end flex-col"
                                        style="margin-left: 31px; margin-top: -60px;">
                                        <span class="mr-1 flex items-center" style="margin-left: 27px;">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M15.4829 5.63406L10.6864 4.90408L8.54222 0.352135C8.48365 0.227506 8.38731 0.126615 8.26829 0.0652895C7.96981 -0.0890138 7.6071 0.0395723 7.45786 0.352135L5.3137 4.90408L0.517213 5.63406C0.384974 5.65384 0.26407 5.71912 0.171503 5.81803C0.0595945 5.93848 -0.0020722 6.10053 5.31713e-05 6.26856C0.00217854 6.4366 0.0679221 6.59688 0.182838 6.71418L3.65316 10.2572L2.83328 15.2602C2.81405 15.3766 2.82635 15.4963 2.86878 15.6057C2.91121 15.7151 2.98207 15.8099 3.07333 15.8793C3.16459 15.9488 3.27259 15.99 3.38509 15.9984C3.4976 16.0068 3.6101 15.982 3.70983 15.9269L8.00004 13.5648L12.2902 15.9269C12.4074 15.9922 12.5434 16.0139 12.6737 15.9902C13.0024 15.9308 13.2235 15.6044 13.1668 15.2602L12.3469 10.2572L15.8172 6.71418C15.9117 6.61724 15.974 6.49064 15.9929 6.35216C16.0439 6.00597 15.8135 5.68549 15.4829 5.63406Z"
                                                    fill="#19AD6F" />
                                            </svg>
                                            <span class="text-gray-700">4.9 (1.6K)</span>
                                        </span>
                                        <p class="bg-black sale-tag">Early Summer Sale!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="max-w-sm overflow-hidden shadow-lg card-desti">
                            <div class="relative">
                                <!-- Discount -->
                                <div class="absolute top-0 left-0 bg-black text-white px-2 py-1 mt-2 tag-discount-p">
                                    <div class="flex items-center">
                                        <!-- Price Tag -->
                                        <svg width="12" height="13" viewBox="0 0 12 13" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10.705 6.29L6.205 1.79C6.025 1.61 5.775 1.5 5.5 1.5H2C1.45 1.5 1 1.95 1 2.5V6C1 6.275 1.11 6.525 1.295 6.71L5.795 11.21C5.975 11.39 6.225 11.5 6.5 11.5C6.775 11.5 7.025 11.39 7.205 11.205L10.705 7.705C10.89 7.525 11 7.275 11 7C11 6.725 10.885 6.47 10.705 6.29ZM6.5 10.505L2 6V2.5H5.5V2.495L10 6.995L6.5 10.505Z"
                                                fill="white" />
                                            <path
                                                d="M3.25 4.5C3.66421 4.5 4 4.16421 4 3.75C4 3.33579 3.66421 3 3.25 3C2.83579 3 2.5 3.33579 2.5 3.75C2.5 4.16421 2.83579 4.5 3.25 4.5Z"
                                                fill="white" />
                                        </svg>
                                        <!-- Discount Text -->
                                        <span class="tag-discount">SAVE ₹ 481</span>
                                    </div>
                                </div>
                                <!-- Image -->
                                <img class="card-imgs" src="{{ Voyager::image(setting('site.background')) }}"
                                    alt="PANCH KEDAR">
                            </div>
                            <div class="px-6 py-4 flex justify-between items-center">
                                <!-- Left Section -->
                                <div>
                                    <!-- Title -->
                                    <p class="days-cal">23 DAY TOUR</p>
                                    <div class="desti-name">PANCH KEDAR</div>
                                    <!-- Next Departure -->
                                    <p class="next-depa">Next departure May 19, 2024</p>
                                    <div class="flex items-center">
                                        <span class="text-gray-700">₹</span>
                                        <p class="pric-desti">3519</p>
                                        <!-- Discounted Price -->
                                        <del class="mrp-desti ml-2">₹ 4000</del>
                                    </div>
                                    <div class="d-flex" style="width: 158px;">
                                        <div class="btn btn-dark text-white"
                                            style="--bs-btn-padding-x: 10px; font-size:12px; margin-right: 10px;">
                                            View itinerary
                                        </div>
                                        <div class="btn btn-dark text-white"
                                            style="--bs-btn-padding-x: 10px; font-size:12px;">
                                            <svg width="21" height="21" viewBox="0 0 21 21" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M16.4423 13.2104L14.3465 12.9711C14.1001 12.9421 13.8502 12.9694 13.6159 13.0509C13.3815 13.1324 13.1686 13.2661 12.9933 13.4417L11.4751 14.9607C9.13271 13.7688 7.22882 11.8638 6.03752 9.52014L7.564 7.99282C7.91881 7.63782 8.09209 7.13422 8.03432 6.63887L7.79504 4.5584C7.75047 4.15552 7.55935 3.7831 7.25807 3.5121C6.9568 3.2411 6.56642 3.09047 6.1613 3.08887H4.73384C3.80145 3.08887 3.02584 3.86492 3.0836 4.79783C3.52091 11.8483 9.15649 17.4787 16.1947 17.9163C17.1271 17.9741 17.9028 17.1981 17.9028 16.2652V14.8368C17.911 14.0113 17.2756 13.3013 16.4423 13.2104Z"
                                                    fill="white" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <!-- Right Section -->
                                <div class="text-right">
                                    <!-- Details -->
                                    <div class="text-gray-700 text-base flex justify-end flex-col"
                                        style="margin-left: 31px; margin-top: -60px;">
                                        <span class="mr-1 flex items-center" style="margin-left: 27px;">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M15.4829 5.63406L10.6864 4.90408L8.54222 0.352135C8.48365 0.227506 8.38731 0.126615 8.26829 0.0652895C7.96981 -0.0890138 7.6071 0.0395723 7.45786 0.352135L5.3137 4.90408L0.517213 5.63406C0.384974 5.65384 0.26407 5.71912 0.171503 5.81803C0.0595945 5.93848 -0.0020722 6.10053 5.31713e-05 6.26856C0.00217854 6.4366 0.0679221 6.59688 0.182838 6.71418L3.65316 10.2572L2.83328 15.2602C2.81405 15.3766 2.82635 15.4963 2.86878 15.6057C2.91121 15.7151 2.98207 15.8099 3.07333 15.8793C3.16459 15.9488 3.27259 15.99 3.38509 15.9984C3.4976 16.0068 3.6101 15.982 3.70983 15.9269L8.00004 13.5648L12.2902 15.9269C12.4074 15.9922 12.5434 16.0139 12.6737 15.9902C13.0024 15.9308 13.2235 15.6044 13.1668 15.2602L12.3469 10.2572L15.8172 6.71418C15.9117 6.61724 15.974 6.49064 15.9929 6.35216C16.0439 6.00597 15.8135 5.68549 15.4829 5.63406Z"
                                                    fill="#19AD6F" />
                                            </svg>
                                            <span class="text-gray-700">4.9 (1.6K)</span>
                                        </span>
                                        <p class="bg-black sale-tag">Early Summer Sale!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="Manali" class="tab-panel">
                <div class="container">
                    <div class="row flex-nowrap overflow-auto">
                        <div class="max-w-sm overflow-hidden shadow-lg card-desti">
                            <div class="relative">
                                <!-- Discount -->
                                <div class="absolute top-0 left-0 bg-black text-white px-2 py-1 mt-2 tag-discount-p">
                                    <div class="flex items-center">
                                        <!-- Price Tag -->
                                        <svg width="12" height="13" viewBox="0 0 12 13" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10.705 6.29L6.205 1.79C6.025 1.61 5.775 1.5 5.5 1.5H2C1.45 1.5 1 1.95 1 2.5V6C1 6.275 1.11 6.525 1.295 6.71L5.795 11.21C5.975 11.39 6.225 11.5 6.5 11.5C6.775 11.5 7.025 11.39 7.205 11.205L10.705 7.705C10.89 7.525 11 7.275 11 7C11 6.725 10.885 6.47 10.705 6.29ZM6.5 10.505L2 6V2.5H5.5V2.495L10 6.995L6.5 10.505Z"
                                                fill="white" />
                                            <path
                                                d="M3.25 4.5C3.66421 4.5 4 4.16421 4 3.75C4 3.33579 3.66421 3 3.25 3C2.83579 3 2.5 3.33579 2.5 3.75C2.5 4.16421 2.83579 4.5 3.25 4.5Z"
                                                fill="white" />
                                        </svg>
                                        <!-- Discount Text -->
                                        <span class="tag-discount">SAVE ₹ 481</span>
                                    </div>
                                </div>
                                <!-- Image -->
                                <img class="card-imgs" src="{{ Voyager::image(setting('site.background')) }}"
                                    alt="PANCH KEDAR">
                            </div>
                            <div class="px-6 py-4 flex justify-between items-center">
                                <!-- Left Section -->
                                <div>
                                    <!-- Title -->
                                    <p class="days-cal">23 DAY TOUR</p>
                                    <div class="desti-name">PANCH KEDAR</div>
                                    <!-- Next Departure -->
                                    <p class="next-depa">Next departure May 19, 2024</p>
                                    <div class="flex items-center">
                                        <span class="text-gray-700">₹</span>
                                        <p class="pric-desti">3519</p>
                                        <!-- Discounted Price -->
                                        <del class="mrp-desti ml-2">₹ 4000</del>
                                    </div>
                                    <div class="d-flex" style="width: 158px;">
                                        <div class="btn btn-dark text-white"
                                            style="--bs-btn-padding-x: 10px; font-size:12px; margin-right: 10px;">
                                            View itinerary
                                        </div>
                                        <div class="btn btn-dark text-white"
                                            style="--bs-btn-padding-x: 10px; font-size:12px;">
                                            <svg width="21" height="21" viewBox="0 0 21 21" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M16.4423 13.2104L14.3465 12.9711C14.1001 12.9421 13.8502 12.9694 13.6159 13.0509C13.3815 13.1324 13.1686 13.2661 12.9933 13.4417L11.4751 14.9607C9.13271 13.7688 7.22882 11.8638 6.03752 9.52014L7.564 7.99282C7.91881 7.63782 8.09209 7.13422 8.03432 6.63887L7.79504 4.5584C7.75047 4.15552 7.55935 3.7831 7.25807 3.5121C6.9568 3.2411 6.56642 3.09047 6.1613 3.08887H4.73384C3.80145 3.08887 3.02584 3.86492 3.0836 4.79783C3.52091 11.8483 9.15649 17.4787 16.1947 17.9163C17.1271 17.9741 17.9028 17.1981 17.9028 16.2652V14.8368C17.911 14.0113 17.2756 13.3013 16.4423 13.2104Z"
                                                    fill="white" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <!-- Right Section -->
                                <div class="text-right">
                                    <!-- Details -->
                                    <div class="text-gray-700 text-base flex justify-end flex-col"
                                        style="margin-left: 31px; margin-top: -60px;">
                                        <span class="mr-1 flex items-center" style="margin-left: 27px;">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M15.4829 5.63406L10.6864 4.90408L8.54222 0.352135C8.48365 0.227506 8.38731 0.126615 8.26829 0.0652895C7.96981 -0.0890138 7.6071 0.0395723 7.45786 0.352135L5.3137 4.90408L0.517213 5.63406C0.384974 5.65384 0.26407 5.71912 0.171503 5.81803C0.0595945 5.93848 -0.0020722 6.10053 5.31713e-05 6.26856C0.00217854 6.4366 0.0679221 6.59688 0.182838 6.71418L3.65316 10.2572L2.83328 15.2602C2.81405 15.3766 2.82635 15.4963 2.86878 15.6057C2.91121 15.7151 2.98207 15.8099 3.07333 15.8793C3.16459 15.9488 3.27259 15.99 3.38509 15.9984C3.4976 16.0068 3.6101 15.982 3.70983 15.9269L8.00004 13.5648L12.2902 15.9269C12.4074 15.9922 12.5434 16.0139 12.6737 15.9902C13.0024 15.9308 13.2235 15.6044 13.1668 15.2602L12.3469 10.2572L15.8172 6.71418C15.9117 6.61724 15.974 6.49064 15.9929 6.35216C16.0439 6.00597 15.8135 5.68549 15.4829 5.63406Z"
                                                    fill="#19AD6F" />
                                            </svg>
                                            <span class="text-gray-700">4.9 (1.6K)</span>
                                        </span>
                                        <p class="bg-black sale-tag">Early Summer Sale!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="max-w-sm overflow-hidden shadow-lg card-desti">
                            <div class="relative">
                                <!-- Discount -->
                                <div class="absolute top-0 left-0 bg-black text-white px-2 py-1 mt-2 tag-discount-p">
                                    <div class="flex items-center">
                                        <!-- Price Tag -->
                                        <svg width="12" height="13" viewBox="0 0 12 13" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10.705 6.29L6.205 1.79C6.025 1.61 5.775 1.5 5.5 1.5H2C1.45 1.5 1 1.95 1 2.5V6C1 6.275 1.11 6.525 1.295 6.71L5.795 11.21C5.975 11.39 6.225 11.5 6.5 11.5C6.775 11.5 7.025 11.39 7.205 11.205L10.705 7.705C10.89 7.525 11 7.275 11 7C11 6.725 10.885 6.47 10.705 6.29ZM6.5 10.505L2 6V2.5H5.5V2.495L10 6.995L6.5 10.505Z"
                                                fill="white" />
                                            <path
                                                d="M3.25 4.5C3.66421 4.5 4 4.16421 4 3.75C4 3.33579 3.66421 3 3.25 3C2.83579 3 2.5 3.33579 2.5 3.75C2.5 4.16421 2.83579 4.5 3.25 4.5Z"
                                                fill="white" />
                                        </svg>
                                        <!-- Discount Text -->
                                        <span class="tag-discount">SAVE ₹ 481</span>
                                    </div>
                                </div>
                                <!-- Image -->
                                <img class="card-imgs" src="{{ Voyager::image(setting('site.background')) }}"
                                    alt="PANCH KEDAR">
                            </div>
                            <div class="px-6 py-4 flex justify-between items-center">
                                <!-- Left Section -->
                                <div>
                                    <!-- Title -->
                                    <p class="days-cal">23 DAY TOUR</p>
                                    <div class="desti-name">PANCH KEDAR</div>
                                    <!-- Next Departure -->
                                    <p class="next-depa">Next departure May 19, 2024</p>
                                    <div class="flex items-center">
                                        <span class="text-gray-700">₹</span>
                                        <p class="pric-desti">3519</p>
                                        <!-- Discounted Price -->
                                        <del class="mrp-desti ml-2">₹ 4000</del>
                                    </div>
                                    <div class="d-flex" style="width: 158px;">
                                        <div class="btn btn-dark text-white"
                                            style="--bs-btn-padding-x: 10px; font-size:12px; margin-right: 10px;">
                                            View itinerary
                                        </div>
                                        <div class="btn btn-dark text-white"
                                            style="--bs-btn-padding-x: 10px; font-size:12px;">
                                            <svg width="21" height="21" viewBox="0 0 21 21" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M16.4423 13.2104L14.3465 12.9711C14.1001 12.9421 13.8502 12.9694 13.6159 13.0509C13.3815 13.1324 13.1686 13.2661 12.9933 13.4417L11.4751 14.9607C9.13271 13.7688 7.22882 11.8638 6.03752 9.52014L7.564 7.99282C7.91881 7.63782 8.09209 7.13422 8.03432 6.63887L7.79504 4.5584C7.75047 4.15552 7.55935 3.7831 7.25807 3.5121C6.9568 3.2411 6.56642 3.09047 6.1613 3.08887H4.73384C3.80145 3.08887 3.02584 3.86492 3.0836 4.79783C3.52091 11.8483 9.15649 17.4787 16.1947 17.9163C17.1271 17.9741 17.9028 17.1981 17.9028 16.2652V14.8368C17.911 14.0113 17.2756 13.3013 16.4423 13.2104Z"
                                                    fill="white" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <!-- Right Section -->
                                <div class="text-right">
                                    <!-- Details -->
                                    <div class="text-gray-700 text-base flex justify-end flex-col"
                                        style="margin-left: 31px; margin-top: -60px;">
                                        <span class="mr-1 flex items-center" style="margin-left: 27px;">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M15.4829 5.63406L10.6864 4.90408L8.54222 0.352135C8.48365 0.227506 8.38731 0.126615 8.26829 0.0652895C7.96981 -0.0890138 7.6071 0.0395723 7.45786 0.352135L5.3137 4.90408L0.517213 5.63406C0.384974 5.65384 0.26407 5.71912 0.171503 5.81803C0.0595945 5.93848 -0.0020722 6.10053 5.31713e-05 6.26856C0.00217854 6.4366 0.0679221 6.59688 0.182838 6.71418L3.65316 10.2572L2.83328 15.2602C2.81405 15.3766 2.82635 15.4963 2.86878 15.6057C2.91121 15.7151 2.98207 15.8099 3.07333 15.8793C3.16459 15.9488 3.27259 15.99 3.38509 15.9984C3.4976 16.0068 3.6101 15.982 3.70983 15.9269L8.00004 13.5648L12.2902 15.9269C12.4074 15.9922 12.5434 16.0139 12.6737 15.9902C13.0024 15.9308 13.2235 15.6044 13.1668 15.2602L12.3469 10.2572L15.8172 6.71418C15.9117 6.61724 15.974 6.49064 15.9929 6.35216C16.0439 6.00597 15.8135 5.68549 15.4829 5.63406Z"
                                                    fill="#19AD6F" />
                                            </svg>
                                            <span class="text-gray-700">4.9 (1.6K)</span>
                                        </span>
                                        <p class="bg-black sale-tag">Early Summer Sale!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="max-w-sm overflow-hidden shadow-lg card-desti">
                            <div class="relative">
                                <!-- Discount -->
                                <div class="absolute top-0 left-0 bg-black text-white px-2 py-1 mt-2 tag-discount-p">
                                    <div class="flex items-center">
                                        <!-- Price Tag -->
                                        <svg width="12" height="13" viewBox="0 0 12 13" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10.705 6.29L6.205 1.79C6.025 1.61 5.775 1.5 5.5 1.5H2C1.45 1.5 1 1.95 1 2.5V6C1 6.275 1.11 6.525 1.295 6.71L5.795 11.21C5.975 11.39 6.225 11.5 6.5 11.5C6.775 11.5 7.025 11.39 7.205 11.205L10.705 7.705C10.89 7.525 11 7.275 11 7C11 6.725 10.885 6.47 10.705 6.29ZM6.5 10.505L2 6V2.5H5.5V2.495L10 6.995L6.5 10.505Z"
                                                fill="white" />
                                            <path
                                                d="M3.25 4.5C3.66421 4.5 4 4.16421 4 3.75C4 3.33579 3.66421 3 3.25 3C2.83579 3 2.5 3.33579 2.5 3.75C2.5 4.16421 2.83579 4.5 3.25 4.5Z"
                                                fill="white" />
                                        </svg>
                                        <!-- Discount Text -->
                                        <span class="tag-discount">SAVE ₹ 481</span>
                                    </div>
                                </div>
                                <!-- Image -->
                                <img class="card-imgs" src="{{ Voyager::image(setting('site.background')) }}"
                                    alt="PANCH KEDAR">
                            </div>
                            <div class="px-6 py-4 flex justify-between items-center">
                                <!-- Left Section -->
                                <div>
                                    <!-- Title -->
                                    <p class="days-cal">23 DAY TOUR</p>
                                    <div class="desti-name">PANCH KEDAR</div>
                                    <!-- Next Departure -->
                                    <p class="next-depa">Next departure May 19, 2024</p>
                                    <div class="flex items-center">
                                        <span class="text-gray-700">₹</span>
                                        <p class="pric-desti">3519</p>
                                        <!-- Discounted Price -->
                                        <del class="mrp-desti ml-2">₹ 4000</del>
                                    </div>
                                    <div class="d-flex" style="width: 158px;">
                                        <div class="btn btn-dark text-white"
                                            style="--bs-btn-padding-x: 10px; font-size:12px; margin-right: 10px;">
                                            View itinerary
                                        </div>
                                        <div class="btn btn-dark text-white"
                                            style="--bs-btn-padding-x: 10px; font-size:12px;">
                                            <svg width="21" height="21" viewBox="0 0 21 21" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M16.4423 13.2104L14.3465 12.9711C14.1001 12.9421 13.8502 12.9694 13.6159 13.0509C13.3815 13.1324 13.1686 13.2661 12.9933 13.4417L11.4751 14.9607C9.13271 13.7688 7.22882 11.8638 6.03752 9.52014L7.564 7.99282C7.91881 7.63782 8.09209 7.13422 8.03432 6.63887L7.79504 4.5584C7.75047 4.15552 7.55935 3.7831 7.25807 3.5121C6.9568 3.2411 6.56642 3.09047 6.1613 3.08887H4.73384C3.80145 3.08887 3.02584 3.86492 3.0836 4.79783C3.52091 11.8483 9.15649 17.4787 16.1947 17.9163C17.1271 17.9741 17.9028 17.1981 17.9028 16.2652V14.8368C17.911 14.0113 17.2756 13.3013 16.4423 13.2104Z"
                                                    fill="white" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <!-- Right Section -->
                                <div class="text-right">
                                    <!-- Details -->
                                    <div class="text-gray-700 text-base flex justify-end flex-col"
                                        style="margin-left: 31px; margin-top: -60px;">
                                        <span class="mr-1 flex items-center" style="margin-left: 27px;">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M15.4829 5.63406L10.6864 4.90408L8.54222 0.352135C8.48365 0.227506 8.38731 0.126615 8.26829 0.0652895C7.96981 -0.0890138 7.6071 0.0395723 7.45786 0.352135L5.3137 4.90408L0.517213 5.63406C0.384974 5.65384 0.26407 5.71912 0.171503 5.81803C0.0595945 5.93848 -0.0020722 6.10053 5.31713e-05 6.26856C0.00217854 6.4366 0.0679221 6.59688 0.182838 6.71418L3.65316 10.2572L2.83328 15.2602C2.81405 15.3766 2.82635 15.4963 2.86878 15.6057C2.91121 15.7151 2.98207 15.8099 3.07333 15.8793C3.16459 15.9488 3.27259 15.99 3.38509 15.9984C3.4976 16.0068 3.6101 15.982 3.70983 15.9269L8.00004 13.5648L12.2902 15.9269C12.4074 15.9922 12.5434 16.0139 12.6737 15.9902C13.0024 15.9308 13.2235 15.6044 13.1668 15.2602L12.3469 10.2572L15.8172 6.71418C15.9117 6.61724 15.974 6.49064 15.9929 6.35216C16.0439 6.00597 15.8135 5.68549 15.4829 5.63406Z"
                                                    fill="#19AD6F" />
                                            </svg>
                                            <span class="text-gray-700">4.9 (1.6K)</span>
                                        </span>
                                        <p class="bg-black sale-tag">Early Summer Sale!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="max-w-sm overflow-hidden shadow-lg card-desti">
                            <div class="relative">
                                <!-- Discount -->
                                <div class="absolute top-0 left-0 bg-black text-white px-2 py-1 mt-2 tag-discount-p">
                                    <div class="flex items-center">
                                        <!-- Price Tag -->
                                        <svg width="12" height="13" viewBox="0 0 12 13" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10.705 6.29L6.205 1.79C6.025 1.61 5.775 1.5 5.5 1.5H2C1.45 1.5 1 1.95 1 2.5V6C1 6.275 1.11 6.525 1.295 6.71L5.795 11.21C5.975 11.39 6.225 11.5 6.5 11.5C6.775 11.5 7.025 11.39 7.205 11.205L10.705 7.705C10.89 7.525 11 7.275 11 7C11 6.725 10.885 6.47 10.705 6.29ZM6.5 10.505L2 6V2.5H5.5V2.495L10 6.995L6.5 10.505Z"
                                                fill="white" />
                                            <path
                                                d="M3.25 4.5C3.66421 4.5 4 4.16421 4 3.75C4 3.33579 3.66421 3 3.25 3C2.83579 3 2.5 3.33579 2.5 3.75C2.5 4.16421 2.83579 4.5 3.25 4.5Z"
                                                fill="white" />
                                        </svg>
                                        <!-- Discount Text -->
                                        <span class="tag-discount">SAVE ₹ 481</span>
                                    </div>
                                </div>
                                <!-- Image -->
                                <img class="card-imgs" src="{{ Voyager::image(setting('site.background')) }}"
                                    alt="PANCH KEDAR">
                            </div>
                            <div class="px-6 py-4 flex justify-between items-center">
                                <!-- Left Section -->
                                <div>
                                    <!-- Title -->
                                    <p class="days-cal">23 DAY TOUR</p>
                                    <div class="desti-name">PANCH KEDAR</div>
                                    <!-- Next Departure -->
                                    <p class="next-depa">Next departure May 19, 2024</p>
                                    <div class="flex items-center">
                                        <span class="text-gray-700">₹</span>
                                        <p class="pric-desti">3519</p>
                                        <!-- Discounted Price -->
                                        <del class="mrp-desti ml-2">₹ 4000</del>
                                    </div>
                                    <div class="d-flex" style="width: 158px;">
                                        <div class="btn btn-dark text-white"
                                            style="--bs-btn-padding-x: 10px; font-size:12px; margin-right: 10px;">
                                            View itinerary
                                        </div>
                                        <div class="btn btn-dark text-white"
                                            style="--bs-btn-padding-x: 10px; font-size:12px;">
                                            <svg width="21" height="21" viewBox="0 0 21 21" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M16.4423 13.2104L14.3465 12.9711C14.1001 12.9421 13.8502 12.9694 13.6159 13.0509C13.3815 13.1324 13.1686 13.2661 12.9933 13.4417L11.4751 14.9607C9.13271 13.7688 7.22882 11.8638 6.03752 9.52014L7.564 7.99282C7.91881 7.63782 8.09209 7.13422 8.03432 6.63887L7.79504 4.5584C7.75047 4.15552 7.55935 3.7831 7.25807 3.5121C6.9568 3.2411 6.56642 3.09047 6.1613 3.08887H4.73384C3.80145 3.08887 3.02584 3.86492 3.0836 4.79783C3.52091 11.8483 9.15649 17.4787 16.1947 17.9163C17.1271 17.9741 17.9028 17.1981 17.9028 16.2652V14.8368C17.911 14.0113 17.2756 13.3013 16.4423 13.2104Z"
                                                    fill="white" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <!-- Right Section -->
                                <div class="text-right">
                                    <!-- Details -->
                                    <div class="text-gray-700 text-base flex justify-end flex-col"
                                        style="margin-left: 31px; margin-top: -60px;">
                                        <span class="mr-1 flex items-center" style="margin-left: 27px;">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M15.4829 5.63406L10.6864 4.90408L8.54222 0.352135C8.48365 0.227506 8.38731 0.126615 8.26829 0.0652895C7.96981 -0.0890138 7.6071 0.0395723 7.45786 0.352135L5.3137 4.90408L0.517213 5.63406C0.384974 5.65384 0.26407 5.71912 0.171503 5.81803C0.0595945 5.93848 -0.0020722 6.10053 5.31713e-05 6.26856C0.00217854 6.4366 0.0679221 6.59688 0.182838 6.71418L3.65316 10.2572L2.83328 15.2602C2.81405 15.3766 2.82635 15.4963 2.86878 15.6057C2.91121 15.7151 2.98207 15.8099 3.07333 15.8793C3.16459 15.9488 3.27259 15.99 3.38509 15.9984C3.4976 16.0068 3.6101 15.982 3.70983 15.9269L8.00004 13.5648L12.2902 15.9269C12.4074 15.9922 12.5434 16.0139 12.6737 15.9902C13.0024 15.9308 13.2235 15.6044 13.1668 15.2602L12.3469 10.2572L15.8172 6.71418C15.9117 6.61724 15.974 6.49064 15.9929 6.35216C16.0439 6.00597 15.8135 5.68549 15.4829 5.63406Z"
                                                    fill="#19AD6F" />
                                            </svg>
                                            <span class="text-gray-700">4.9 (1.6K)</span>
                                        </span>
                                        <p class="bg-black sale-tag">Early Summer Sale!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="Shimla" class="tab-panel">
                <div class="container">
                    <div class="row flex-nowrap overflow-auto">
                        <div class="max-w-sm overflow-hidden shadow-lg card-desti">
                            <div class="relative">
                                <!-- Discount -->
                                <div class="absolute top-0 left-0 bg-black text-white px-2 py-1 mt-2 tag-discount-p">
                                    <div class="flex items-center">
                                        <!-- Price Tag -->
                                        <svg width="12" height="13" viewBox="0 0 12 13" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10.705 6.29L6.205 1.79C6.025 1.61 5.775 1.5 5.5 1.5H2C1.45 1.5 1 1.95 1 2.5V6C1 6.275 1.11 6.525 1.295 6.71L5.795 11.21C5.975 11.39 6.225 11.5 6.5 11.5C6.775 11.5 7.025 11.39 7.205 11.205L10.705 7.705C10.89 7.525 11 7.275 11 7C11 6.725 10.885 6.47 10.705 6.29ZM6.5 10.505L2 6V2.5H5.5V2.495L10 6.995L6.5 10.505Z"
                                                fill="white" />
                                            <path
                                                d="M3.25 4.5C3.66421 4.5 4 4.16421 4 3.75C4 3.33579 3.66421 3 3.25 3C2.83579 3 2.5 3.33579 2.5 3.75C2.5 4.16421 2.83579 4.5 3.25 4.5Z"
                                                fill="white" />
                                        </svg>
                                        <!-- Discount Text -->
                                        <span class="tag-discount">SAVE ₹ 481</span>
                                    </div>
                                </div>
                                <!-- Image -->
                                <img class="card-imgs" src="{{ Voyager::image(setting('site.background')) }}"
                                    alt="PANCH KEDAR">
                            </div>
                            <div class="px-6 py-4 flex justify-between items-center">
                                <!-- Left Section -->
                                <div>
                                    <!-- Title -->
                                    <p class="days-cal">23 DAY TOUR</p>
                                    <div class="desti-name">PANCH KEDAR</div>
                                    <!-- Next Departure -->
                                    <p class="next-depa">Next departure May 19, 2024</p>
                                    <div class="flex items-center">
                                        <span class="text-gray-700">₹</span>
                                        <p class="pric-desti">3519</p>
                                        <!-- Discounted Price -->
                                        <del class="mrp-desti ml-2">₹ 4000</del>
                                    </div>
                                    <div class="d-flex" style="width: 158px;">
                                        <div class="btn btn-dark text-white"
                                            style="--bs-btn-padding-x: 10px; font-size:12px; margin-right: 10px;">
                                            View itinerary
                                        </div>
                                        <div class="btn btn-dark text-white"
                                            style="--bs-btn-padding-x: 10px; font-size:12px;">
                                            <svg width="21" height="21" viewBox="0 0 21 21" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M16.4423 13.2104L14.3465 12.9711C14.1001 12.9421 13.8502 12.9694 13.6159 13.0509C13.3815 13.1324 13.1686 13.2661 12.9933 13.4417L11.4751 14.9607C9.13271 13.7688 7.22882 11.8638 6.03752 9.52014L7.564 7.99282C7.91881 7.63782 8.09209 7.13422 8.03432 6.63887L7.79504 4.5584C7.75047 4.15552 7.55935 3.7831 7.25807 3.5121C6.9568 3.2411 6.56642 3.09047 6.1613 3.08887H4.73384C3.80145 3.08887 3.02584 3.86492 3.0836 4.79783C3.52091 11.8483 9.15649 17.4787 16.1947 17.9163C17.1271 17.9741 17.9028 17.1981 17.9028 16.2652V14.8368C17.911 14.0113 17.2756 13.3013 16.4423 13.2104Z"
                                                    fill="white" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <!-- Right Section -->
                                <div class="text-right">
                                    <!-- Details -->
                                    <div class="text-gray-700 text-base flex justify-end flex-col"
                                        style="margin-left: 31px; margin-top: -60px;">
                                        <span class="mr-1 flex items-center" style="margin-left: 27px;">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M15.4829 5.63406L10.6864 4.90408L8.54222 0.352135C8.48365 0.227506 8.38731 0.126615 8.26829 0.0652895C7.96981 -0.0890138 7.6071 0.0395723 7.45786 0.352135L5.3137 4.90408L0.517213 5.63406C0.384974 5.65384 0.26407 5.71912 0.171503 5.81803C0.0595945 5.93848 -0.0020722 6.10053 5.31713e-05 6.26856C0.00217854 6.4366 0.0679221 6.59688 0.182838 6.71418L3.65316 10.2572L2.83328 15.2602C2.81405 15.3766 2.82635 15.4963 2.86878 15.6057C2.91121 15.7151 2.98207 15.8099 3.07333 15.8793C3.16459 15.9488 3.27259 15.99 3.38509 15.9984C3.4976 16.0068 3.6101 15.982 3.70983 15.9269L8.00004 13.5648L12.2902 15.9269C12.4074 15.9922 12.5434 16.0139 12.6737 15.9902C13.0024 15.9308 13.2235 15.6044 13.1668 15.2602L12.3469 10.2572L15.8172 6.71418C15.9117 6.61724 15.974 6.49064 15.9929 6.35216C16.0439 6.00597 15.8135 5.68549 15.4829 5.63406Z"
                                                    fill="#19AD6F" />
                                            </svg>
                                            <span class="text-gray-700">4.9 (1.6K)</span>
                                        </span>
                                        <p class="bg-black sale-tag">Early Summer Sale!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="max-w-sm overflow-hidden shadow-lg card-desti">
                            <div class="relative">
                                <!-- Discount -->
                                <div class="absolute top-0 left-0 bg-black text-white px-2 py-1 mt-2 tag-discount-p">
                                    <div class="flex items-center">
                                        <!-- Price Tag -->
                                        <svg width="12" height="13" viewBox="0 0 12 13" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10.705 6.29L6.205 1.79C6.025 1.61 5.775 1.5 5.5 1.5H2C1.45 1.5 1 1.95 1 2.5V6C1 6.275 1.11 6.525 1.295 6.71L5.795 11.21C5.975 11.39 6.225 11.5 6.5 11.5C6.775 11.5 7.025 11.39 7.205 11.205L10.705 7.705C10.89 7.525 11 7.275 11 7C11 6.725 10.885 6.47 10.705 6.29ZM6.5 10.505L2 6V2.5H5.5V2.495L10 6.995L6.5 10.505Z"
                                                fill="white" />
                                            <path
                                                d="M3.25 4.5C3.66421 4.5 4 4.16421 4 3.75C4 3.33579 3.66421 3 3.25 3C2.83579 3 2.5 3.33579 2.5 3.75C2.5 4.16421 2.83579 4.5 3.25 4.5Z"
                                                fill="white" />
                                        </svg>
                                        <!-- Discount Text -->
                                        <span class="tag-discount">SAVE ₹ 481</span>
                                    </div>
                                </div>
                                <!-- Image -->
                                <img class="card-imgs" src="{{ Voyager::image(setting('site.background')) }}"
                                    alt="PANCH KEDAR">
                            </div>
                            <div class="px-6 py-4 flex justify-between items-center">
                                <!-- Left Section -->
                                <div>
                                    <!-- Title -->
                                    <p class="days-cal">23 DAY TOUR</p>
                                    <div class="desti-name">PANCH KEDAR</div>
                                    <!-- Next Departure -->
                                    <p class="next-depa">Next departure May 19, 2024</p>
                                    <div class="flex items-center">
                                        <span class="text-gray-700">₹</span>
                                        <p class="pric-desti">3519</p>
                                        <!-- Discounted Price -->
                                        <del class="mrp-desti ml-2">₹ 4000</del>
                                    </div>
                                    <div class="d-flex" style="width: 158px;">
                                        <div class="btn btn-dark text-white"
                                            style="--bs-btn-padding-x: 10px; font-size:12px; margin-right: 10px;">
                                            View itinerary
                                        </div>
                                        <div class="btn btn-dark text-white"
                                            style="--bs-btn-padding-x: 10px; font-size:12px;">
                                            <svg width="21" height="21" viewBox="0 0 21 21" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M16.4423 13.2104L14.3465 12.9711C14.1001 12.9421 13.8502 12.9694 13.6159 13.0509C13.3815 13.1324 13.1686 13.2661 12.9933 13.4417L11.4751 14.9607C9.13271 13.7688 7.22882 11.8638 6.03752 9.52014L7.564 7.99282C7.91881 7.63782 8.09209 7.13422 8.03432 6.63887L7.79504 4.5584C7.75047 4.15552 7.55935 3.7831 7.25807 3.5121C6.9568 3.2411 6.56642 3.09047 6.1613 3.08887H4.73384C3.80145 3.08887 3.02584 3.86492 3.0836 4.79783C3.52091 11.8483 9.15649 17.4787 16.1947 17.9163C17.1271 17.9741 17.9028 17.1981 17.9028 16.2652V14.8368C17.911 14.0113 17.2756 13.3013 16.4423 13.2104Z"
                                                    fill="white" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <!-- Right Section -->
                                <div class="text-right">
                                    <!-- Details -->
                                    <div class="text-gray-700 text-base flex justify-end flex-col"
                                        style="margin-left: 31px; margin-top: -60px;">
                                        <span class="mr-1 flex items-center" style="margin-left: 27px;">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M15.4829 5.63406L10.6864 4.90408L8.54222 0.352135C8.48365 0.227506 8.38731 0.126615 8.26829 0.0652895C7.96981 -0.0890138 7.6071 0.0395723 7.45786 0.352135L5.3137 4.90408L0.517213 5.63406C0.384974 5.65384 0.26407 5.71912 0.171503 5.81803C0.0595945 5.93848 -0.0020722 6.10053 5.31713e-05 6.26856C0.00217854 6.4366 0.0679221 6.59688 0.182838 6.71418L3.65316 10.2572L2.83328 15.2602C2.81405 15.3766 2.82635 15.4963 2.86878 15.6057C2.91121 15.7151 2.98207 15.8099 3.07333 15.8793C3.16459 15.9488 3.27259 15.99 3.38509 15.9984C3.4976 16.0068 3.6101 15.982 3.70983 15.9269L8.00004 13.5648L12.2902 15.9269C12.4074 15.9922 12.5434 16.0139 12.6737 15.9902C13.0024 15.9308 13.2235 15.6044 13.1668 15.2602L12.3469 10.2572L15.8172 6.71418C15.9117 6.61724 15.974 6.49064 15.9929 6.35216C16.0439 6.00597 15.8135 5.68549 15.4829 5.63406Z"
                                                    fill="#19AD6F" />
                                            </svg>
                                            <span class="text-gray-700">4.9 (1.6K)</span>
                                        </span>
                                        <p class="bg-black sale-tag">Early Summer Sale!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="max-w-sm overflow-hidden shadow-lg card-desti">
                            <div class="relative">
                                <!-- Discount -->
                                <div class="absolute top-0 left-0 bg-black text-white px-2 py-1 mt-2 tag-discount-p">
                                    <div class="flex items-center">
                                        <!-- Price Tag -->
                                        <svg width="12" height="13" viewBox="0 0 12 13" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10.705 6.29L6.205 1.79C6.025 1.61 5.775 1.5 5.5 1.5H2C1.45 1.5 1 1.95 1 2.5V6C1 6.275 1.11 6.525 1.295 6.71L5.795 11.21C5.975 11.39 6.225 11.5 6.5 11.5C6.775 11.5 7.025 11.39 7.205 11.205L10.705 7.705C10.89 7.525 11 7.275 11 7C11 6.725 10.885 6.47 10.705 6.29ZM6.5 10.505L2 6V2.5H5.5V2.495L10 6.995L6.5 10.505Z"
                                                fill="white" />
                                            <path
                                                d="M3.25 4.5C3.66421 4.5 4 4.16421 4 3.75C4 3.33579 3.66421 3 3.25 3C2.83579 3 2.5 3.33579 2.5 3.75C2.5 4.16421 2.83579 4.5 3.25 4.5Z"
                                                fill="white" />
                                        </svg>
                                        <!-- Discount Text -->
                                        <span class="tag-discount">SAVE ₹ 481</span>
                                    </div>
                                </div>
                                <!-- Image -->
                                <img class="card-imgs" src="{{ Voyager::image(setting('site.background')) }}"
                                    alt="PANCH KEDAR">
                            </div>
                            <div class="px-6 py-4 flex justify-between items-center">
                                <!-- Left Section -->
                                <div>
                                    <!-- Title -->
                                    <p class="days-cal">23 DAY TOUR</p>
                                    <div class="desti-name">PANCH KEDAR</div>
                                    <!-- Next Departure -->
                                    <p class="next-depa">Next departure May 19, 2024</p>
                                    <div class="flex items-center">
                                        <span class="text-gray-700">₹</span>
                                        <p class="pric-desti">3519</p>
                                        <!-- Discounted Price -->
                                        <del class="mrp-desti ml-2">₹ 4000</del>
                                    </div>
                                    <div class="d-flex" style="width: 158px;">
                                        <div class="btn btn-dark text-white"
                                            style="--bs-btn-padding-x: 10px; font-size:12px; margin-right: 10px;">
                                            View itinerary
                                        </div>
                                        <div class="btn btn-dark text-white"
                                            style="--bs-btn-padding-x: 10px; font-size:12px;">
                                            <svg width="21" height="21" viewBox="0 0 21 21" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M16.4423 13.2104L14.3465 12.9711C14.1001 12.9421 13.8502 12.9694 13.6159 13.0509C13.3815 13.1324 13.1686 13.2661 12.9933 13.4417L11.4751 14.9607C9.13271 13.7688 7.22882 11.8638 6.03752 9.52014L7.564 7.99282C7.91881 7.63782 8.09209 7.13422 8.03432 6.63887L7.79504 4.5584C7.75047 4.15552 7.55935 3.7831 7.25807 3.5121C6.9568 3.2411 6.56642 3.09047 6.1613 3.08887H4.73384C3.80145 3.08887 3.02584 3.86492 3.0836 4.79783C3.52091 11.8483 9.15649 17.4787 16.1947 17.9163C17.1271 17.9741 17.9028 17.1981 17.9028 16.2652V14.8368C17.911 14.0113 17.2756 13.3013 16.4423 13.2104Z"
                                                    fill="white" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <!-- Right Section -->
                                <div class="text-right">
                                    <!-- Details -->
                                    <div class="text-gray-700 text-base flex justify-end flex-col"
                                        style="margin-left: 31px; margin-top: -60px;">
                                        <span class="mr-1 flex items-center" style="margin-left: 27px;">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M15.4829 5.63406L10.6864 4.90408L8.54222 0.352135C8.48365 0.227506 8.38731 0.126615 8.26829 0.0652895C7.96981 -0.0890138 7.6071 0.0395723 7.45786 0.352135L5.3137 4.90408L0.517213 5.63406C0.384974 5.65384 0.26407 5.71912 0.171503 5.81803C0.0595945 5.93848 -0.0020722 6.10053 5.31713e-05 6.26856C0.00217854 6.4366 0.0679221 6.59688 0.182838 6.71418L3.65316 10.2572L2.83328 15.2602C2.81405 15.3766 2.82635 15.4963 2.86878 15.6057C2.91121 15.7151 2.98207 15.8099 3.07333 15.8793C3.16459 15.9488 3.27259 15.99 3.38509 15.9984C3.4976 16.0068 3.6101 15.982 3.70983 15.9269L8.00004 13.5648L12.2902 15.9269C12.4074 15.9922 12.5434 16.0139 12.6737 15.9902C13.0024 15.9308 13.2235 15.6044 13.1668 15.2602L12.3469 10.2572L15.8172 6.71418C15.9117 6.61724 15.974 6.49064 15.9929 6.35216C16.0439 6.00597 15.8135 5.68549 15.4829 5.63406Z"
                                                    fill="#19AD6F" />
                                            </svg>
                                            <span class="text-gray-700">4.9 (1.6K)</span>
                                        </span>
                                        <p class="bg-black sale-tag">Early Summer Sale!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="max-w-sm overflow-hidden shadow-lg card-desti">
                            <div class="relative">
                                <!-- Discount -->
                                <div class="absolute top-0 left-0 bg-black text-white px-2 py-1 mt-2 tag-discount-p">
                                    <div class="flex items-center">
                                        <!-- Price Tag -->
                                        <svg width="12" height="13" viewBox="0 0 12 13" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10.705 6.29L6.205 1.79C6.025 1.61 5.775 1.5 5.5 1.5H2C1.45 1.5 1 1.95 1 2.5V6C1 6.275 1.11 6.525 1.295 6.71L5.795 11.21C5.975 11.39 6.225 11.5 6.5 11.5C6.775 11.5 7.025 11.39 7.205 11.205L10.705 7.705C10.89 7.525 11 7.275 11 7C11 6.725 10.885 6.47 10.705 6.29ZM6.5 10.505L2 6V2.5H5.5V2.495L10 6.995L6.5 10.505Z"
                                                fill="white" />
                                            <path
                                                d="M3.25 4.5C3.66421 4.5 4 4.16421 4 3.75C4 3.33579 3.66421 3 3.25 3C2.83579 3 2.5 3.33579 2.5 3.75C2.5 4.16421 2.83579 4.5 3.25 4.5Z"
                                                fill="white" />
                                        </svg>
                                        <!-- Discount Text -->
                                        <span class="tag-discount">SAVE ₹ 481</span>
                                    </div>
                                </div>
                                <!-- Image -->
                                <img class="card-imgs" src="{{ Voyager::image(setting('site.background')) }}"
                                    alt="PANCH KEDAR">
                            </div>
                            <div class="px-6 py-4 flex justify-between items-center">
                                <!-- Left Section -->
                                <div>
                                    <!-- Title -->
                                    <p class="days-cal">23 DAY TOUR</p>
                                    <div class="desti-name">PANCH KEDAR</div>
                                    <!-- Next Departure -->
                                    <p class="next-depa">Next departure May 19, 2024</p>
                                    <div class="flex items-center">
                                        <span class="text-gray-700">₹</span>
                                        <p class="pric-desti">3519</p>
                                        <!-- Discounted Price -->
                                        <del class="mrp-desti ml-2">₹ 4000</del>
                                    </div>
                                    <div class="d-flex" style="width: 158px;">
                                        <div class="btn btn-dark text-white"
                                            style="--bs-btn-padding-x: 10px; font-size:12px; margin-right: 10px;">
                                            View itinerary
                                        </div>
                                        <div class="btn btn-dark text-white"
                                            style="--bs-btn-padding-x: 10px; font-size:12px;">
                                            <svg width="21" height="21" viewBox="0 0 21 21" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M16.4423 13.2104L14.3465 12.9711C14.1001 12.9421 13.8502 12.9694 13.6159 13.0509C13.3815 13.1324 13.1686 13.2661 12.9933 13.4417L11.4751 14.9607C9.13271 13.7688 7.22882 11.8638 6.03752 9.52014L7.564 7.99282C7.91881 7.63782 8.09209 7.13422 8.03432 6.63887L7.79504 4.5584C7.75047 4.15552 7.55935 3.7831 7.25807 3.5121C6.9568 3.2411 6.56642 3.09047 6.1613 3.08887H4.73384C3.80145 3.08887 3.02584 3.86492 3.0836 4.79783C3.52091 11.8483 9.15649 17.4787 16.1947 17.9163C17.1271 17.9741 17.9028 17.1981 17.9028 16.2652V14.8368C17.911 14.0113 17.2756 13.3013 16.4423 13.2104Z"
                                                    fill="white" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <!-- Right Section -->
                                <div class="text-right">
                                    <!-- Details -->
                                    <div class="text-gray-700 text-base flex justify-end flex-col"
                                        style="margin-left: 31px; margin-top: -60px;">
                                        <span class="mr-1 flex items-center" style="margin-left: 27px;">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M15.4829 5.63406L10.6864 4.90408L8.54222 0.352135C8.48365 0.227506 8.38731 0.126615 8.26829 0.0652895C7.96981 -0.0890138 7.6071 0.0395723 7.45786 0.352135L5.3137 4.90408L0.517213 5.63406C0.384974 5.65384 0.26407 5.71912 0.171503 5.81803C0.0595945 5.93848 -0.0020722 6.10053 5.31713e-05 6.26856C0.00217854 6.4366 0.0679221 6.59688 0.182838 6.71418L3.65316 10.2572L2.83328 15.2602C2.81405 15.3766 2.82635 15.4963 2.86878 15.6057C2.91121 15.7151 2.98207 15.8099 3.07333 15.8793C3.16459 15.9488 3.27259 15.99 3.38509 15.9984C3.4976 16.0068 3.6101 15.982 3.70983 15.9269L8.00004 13.5648L12.2902 15.9269C12.4074 15.9922 12.5434 16.0139 12.6737 15.9902C13.0024 15.9308 13.2235 15.6044 13.1668 15.2602L12.3469 10.2572L15.8172 6.71418C15.9117 6.61724 15.974 6.49064 15.9929 6.35216C16.0439 6.00597 15.8135 5.68549 15.4829 5.63406Z"
                                                    fill="#19AD6F" />
                                            </svg>
                                            <span class="text-gray-700">4.9 (1.6K)</span>
                                        </span>
                                        <p class="bg-black sale-tag">Early Summer Sale!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="view-more btn btn-dark text-white"
            style="background: #313041 font-size:16px;font-weight:bold;border-radius:16px">
            see deals
        </div>
    </div>
</div> --}}
<section class="tour-sale">
    <div class="content-container container">
        <div class="promo-intro dy_copy">
            <h3>One month. Three ways to save.</h3>
            <p>Enjoy up to 20% savings on Himalayan adventures until May 31! Explore Kedarnath,
                Himachal, and more. Witness snow-capped peaks, ancient temples, and local hospitality. Don't miss out on
                creating unforgettable memories. Start your journey now! View Terms and Conditions.</p>
           
        </div>
        <ul class="tabs">
            <li class="tab-link current" data-tab="tab-1">
                <div class="tabicon tabkedarnathicon"></div>kedarnath
            </li>
            <li class="tab-link" data-tab="tab-2">
                <div class="tabicon tabasiaicon"></div>Asia
            </li>
            <li class="tab-link" data-tab="tab-3">
                <div class="tabicon tabcaicon"></div>Central &amp; Caribbean
            </li>
            <li class="tab-link" data-tab="tab-4">
                <div class="tabicon tabmeicon"></div>Middle East &amp; North Africa
            </li>
            <li class="tab-link" data-tab="tab-5">
                <div class="tabicon tabsaicon"></div>South America
            </li>
            <li class="tab-link" data-tab="tab-6">
                <div class="tabicon tabafricaicon"></div>Africa
            </li>
            <li class="tab-link" data-tab="tab-7">
                <div class="tabicon tabnaicon"></div>North America
            </li>
            <!--<li class="tab-link" data-tab="tab-9"><div class="tabicon tabantaicon"></div>Antarctica</li>-->
            <li class="tab-link" data-tab="tab-8">
                <div class="tabicon taboceaniaicon"></div>Oceania
            </li>
        </ul>
        <div class="tab-section  tour-recos">
            <div id="tab-1" class="tab-content current">
                <div id="dy_Homepage_kedarnath_tours">
                    
                </div>
            </div>
            <div id="tab-2" class="tab-content">
                <div id="dy_Hompage_Asia_tours"></div>
            </div>
            <div id="tab-3" class="tab-content">
                <div id="dy_Homepage_Central_America_&_The_Caribbean"></div>
            </div>
            <div id="tab-4" class="tab-content">
                <div id="dy_Homepage_Middle_East_tours"></div>
            </div>
            <div id="tab-5" class="tab-content">
                <div id="dy_Homepage_South_America_tours"></div>
            </div>
            <div id="tab-6" class="tab-content">
                <div id="dy_Homepage_Africa_tours"></div>
            </div>
            <div id="tab-7" class="tab-content">
                <div id="dy_Homepage_north_america_tours"></div>
            </div>
            <!-- <div id="tab-9" class="tab-content current"><div id="dy_Homepage_Antarctica_tours"></div></div> -->
            <div id="tab-8" class="tab-content">
                <div id="dy_Homepage_Aus/NZ_tours"></div>
            </div>
            <div class="button-group"><a
                    href="search/index2919.html?refinementList%5Bpromotions%5D%5B0%5D=On%20Sale"><button
                        class="main button">See deals</button></a></div>
        </div>
    </div>
</section>