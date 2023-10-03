@extends('layouts.app')

@section('content')
    <div class="row">

        {{-- Sesi Lift In / Lif Off Start --}}
        <div class="row">
            <h3 class="h3">Lift On / Lift Off</h3>
        </div>
        <section id="liftInLiftOff" class="mb-4" style="width: 100%">
            <div class="row p-2 sub-menu h-100">
                <div id="lolo-left" class="col col-lg-25 col-md-12 col-sm-12 col-12 ps-2 pe-1 container" >
                    <div class="mini-item-container row g-2 d-flex justify-content-between h-100 w-100">
                        <div class="mini-item card p-0 d-flex flex-row align-items-center justify-content-between border-0 mb-2 w-100">
                            <div class="row w-100 m-0">
                                <div class="col col-lg-3 col-md-3 col-sm-4 col-5 p-0 h-50 w-100">
                                    <select id="liftInLiftOffFLeftMenu" class="form-select" aria-label="Default select example">
                                        <option selected>Select Year</option>
                                        <option value="[200, 150, 400, 200, 180, 400, 200, 800, 300, 700, 100, 200], [100, 75, 200, 100, 90, 200, 100, 400, 150, 250, 50, 100]">2023</option>
                                        <option value="[182, 713, 283, 85, 78, 192, 495, 193, 631, 531, 123, 123], [100, 75, 200, 100, 90, 200, 100, 400, 150, 250, 50, 100]">2022</option>
                                        <option value="[942, 123, 34, 93, 72, 94, 17, 844, 154, 987, 273, 874], [100, 75, 200, 100, 90, 200, 100, 400, 150, 250, 50, 100]">2021</option>
                                        <option value="[120, 753, 758, 947, 364, 346, 187, 799, 78, 874, 87, 857], [100, 75, 200, 100, 90, 200, 100, 400, 150, 250, 50, 100]">2020</option>
                                        <option value="[874, 87, 875, 167, 238, 984, 174, 179, 875, 985, 875, 198], [100, 75, 200, 100, 90, 200, 100, 400, 150, 250, 50, 100]">2019</option>
                                        <option value="[[2092, 9385, 4712, 7512, 6723], [1293, 7487, 3123, 6244, 5094], [2019, 2020, 2021, 2022, 2023]]">Last 5 Year</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="mini-item card px-3 d-flex flex-row justify-content-between align-items-center border-0 shadow rounded-3">
                            <svg width="45" height="45" viewBox="0 0 70 71" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect y="0.458374" width="70" height="70" rx="35" fill="#E1F5FE"/>
                                <path d="M35.7194 36.6259H31.8441C31.5872 36.6259 31.3407 36.7279 31.159 36.9096C30.9774 37.0913 30.8753 37.3377 30.8753 37.5947C30.8753 37.8516 30.9774 38.0981 31.159 38.2797C31.3407 38.4614 31.5872 38.5635 31.8441 38.5635H35.7194C35.9763 38.5635 36.2228 38.4614 36.4045 38.2797C36.5861 38.0981 36.6882 37.8516 36.6882 37.5947C36.6882 37.3377 36.5861 37.0913 36.4045 36.9096C36.2228 36.7279 35.9763 36.6259 35.7194 36.6259ZM39.5947 26.9376H38.4515C38.2516 26.3723 37.8817 25.8826 37.3926 25.5357C36.9035 25.1888 36.319 25.0017 35.7194 25H33.7818C33.1821 25.0017 32.5977 25.1888 32.1085 25.5357C31.6194 25.8826 31.2496 26.3723 31.0497 26.9376H29.9065C29.1356 26.9376 28.3964 27.2439 27.8513 27.7889C27.3062 28.334 27 29.0733 27 29.8441V41.47C27 42.2408 27.3062 42.9801 27.8513 43.5252C28.3964 44.0702 29.1356 44.3764 29.9065 44.3764H39.5947C40.3655 44.3764 41.1048 44.0702 41.6499 43.5252C42.1949 42.9801 42.5012 42.2408 42.5012 41.47V29.8441C42.5012 29.0733 42.1949 28.334 41.6499 27.7889C41.1048 27.2439 40.3655 26.9376 39.5947 26.9376ZM32.8129 27.9065C32.8129 27.6495 32.915 27.4031 33.0967 27.2214C33.2784 27.0397 33.5248 26.9376 33.7818 26.9376H35.7194C35.9763 26.9376 36.2228 27.0397 36.4045 27.2214C36.5861 27.4031 36.6882 27.6495 36.6882 27.9065V28.8753H32.8129V27.9065ZM40.5635 41.47C40.5635 41.7269 40.4614 41.9733 40.2797 42.155C40.0981 42.3367 39.8516 42.4388 39.5947 42.4388H29.9065C29.6495 42.4388 29.4031 42.3367 29.2214 42.155C29.0397 41.9733 28.9376 41.7269 28.9376 41.47V29.8441C28.9376 29.5872 29.0397 29.3407 29.2214 29.159C29.4031 28.9774 29.6495 28.8753 29.9065 28.8753H30.8753V29.8441C30.8753 30.1011 30.9774 30.3475 31.159 30.5292C31.3407 30.7109 31.5872 30.8129 31.8441 30.8129H37.657C37.914 30.8129 38.1604 30.7109 38.3421 30.5292C38.5238 30.3475 38.6259 30.1011 38.6259 29.8441V28.8753H39.5947C39.8516 28.8753 40.0981 28.9774 40.2797 29.159C40.4614 29.3407 40.5635 29.5872 40.5635 29.8441V41.47ZM37.657 32.7506H31.8441C31.5872 32.7506 31.3407 32.8526 31.159 33.0343C30.9774 33.216 30.8753 33.4625 30.8753 33.7194C30.8753 33.9763 30.9774 34.2228 31.159 34.4045C31.3407 34.5861 31.5872 34.6882 31.8441 34.6882H37.657C37.914 34.6882 38.1604 34.5861 38.3421 34.4045C38.5238 34.2228 38.6259 33.9763 38.6259 33.7194C38.6259 33.4625 38.5238 33.216 38.3421 33.0343C38.1604 32.8526 37.914 32.7506 37.657 32.7506Z" fill="#039BE5"/>
                                <path d="M35 52.4584C44.3888 52.4584 52 44.8471 52 35.4584C52 26.0695 44.3888 18.4584 35 18.4584C25.6112 18.4584 18 26.0695 18 35.4584C18 44.8471 25.6112 52.4584 35 52.4584Z" stroke="#039BE5" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>

                            <div class="card-body ps-1 pe-0">
                                <p class="card-text m-0 fs-7">Total Order</p>
                                <h3 class="h3 mb-0">160</h3>
                            </div>
                        </div>
                        <div class="mini-item card px-3 d-flex flex-row justify-content-between align-items-center border-0 shadow rounded-3">
                            <svg width="45" height="45" viewBox="0 0 70 71" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect y="0.375" width="70" height="70" rx="35" fill="#E8F5E9"/>
                                <path d="M35 18.375C25.6111 18.375 18 25.9861 18 35.375C18 44.7639 25.6111 52.375 35 52.375C44.3889 52.375 52 44.7639 52 35.375C52 25.9861 44.3889 18.375 35 18.375ZM35 21.6653C42.5768 21.6653 48.7097 27.797 48.7097 35.375C48.7097 42.9518 42.578 49.0847 35 49.0847C27.4232 49.0847 21.2903 42.953 21.2903 35.375C21.2903 27.7982 27.422 21.6653 35 21.6653ZM44.6108 30.5949L43.066 29.0376C42.746 28.7151 42.2252 28.713 41.9027 29.033L32.2132 38.6446L28.1146 34.5127C27.7947 34.1901 27.2738 34.188 26.9513 34.5079L25.394 36.0527C25.0715 36.3727 25.0693 36.8935 25.3893 37.2161L31.6122 43.4893C31.9321 43.8119 32.4529 43.814 32.7755 43.494L44.6062 31.7583C44.9286 31.4383 44.9307 30.9174 44.6108 30.5949Z" fill="#43A047"/>
                            </svg>
                            <div class="card-body ps-1 pe-0">
                                <p class="card-text m-0 fs-7">Finish Order</p>
                                <h3 class="h3 mb-0">160</h3>
                            </div>
                        </div>
                        <div class="mini-item card px-3 d-flex flex-row justify-content-between align-items-center border-0 shadow rounded-3">
                            <svg width="45" height="45" viewBox="0 0 70 71" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect y="0.291687" width="70" height="70" rx="35" fill="#FFEBEE"/>
                                <path d="M36.7469 33.6183V24.1715C36.7469 23.9455 36.6571 23.7287 36.4973 23.5689C36.3375 23.4091 36.1208 23.3193 35.8948 23.3193H34.1905C33.9645 23.3193 33.7478 23.4091 33.588 23.5689C33.4282 23.7287 33.3384 23.9455 33.3384 24.1715V34.8965C33.3384 35.1224 33.4282 35.3391 33.5881 35.4989L38.9565 40.8674C39.1163 41.0271 39.333 41.1169 39.559 41.1169C39.7849 41.1169 40.0016 41.0271 40.1614 40.8674L41.2999 39.7289C41.4596 39.5691 41.5494 39.3524 41.5494 39.1265C41.5494 38.9005 41.4596 38.6838 41.2999 38.524L36.9932 34.2173C36.8355 34.0578 36.747 33.8426 36.7469 33.6183Z" fill="#E53935"/>
                                <path d="M48.7304 36.9535C48.4123 39.5181 47.3804 41.9418 45.7522 43.9487C44.124 45.9555 41.965 47.4648 39.521 48.3047C37.0771 49.1445 34.4463 49.2812 31.9285 48.6991C29.4106 48.117 27.1069 46.8395 25.2795 45.0122C23.4522 43.1848 22.1747 40.881 21.5926 38.3632C21.0105 35.8453 21.1472 33.2146 21.987 30.7707C22.8269 28.3267 24.3362 26.1677 26.343 24.5395C28.3499 22.9113 30.7736 21.8794 33.3382 21.5613V18.2917C30.1289 18.6143 27.0771 19.841 24.5373 21.8292C21.9975 23.8174 20.0741 26.4855 18.9905 29.5235C17.9069 32.5615 17.7077 35.8447 18.416 38.9914C19.1243 42.1381 20.711 45.0192 22.9917 47.3C25.2724 49.5807 28.1536 51.1674 31.3003 51.8757C34.447 52.584 37.7301 52.3848 40.7681 51.3012C43.8061 50.2176 46.4743 48.2942 48.4625 45.7544C50.4507 43.2146 51.6774 40.1628 52 36.9535H48.7304ZM42.0053 19.7054C40.3404 18.9531 38.5645 18.4757 36.7468 18.2917V21.5613C37.9963 21.7188 39.2182 22.048 40.3777 22.5396L42.0053 19.7054ZM46.1424 27.0849L48.992 25.4914C47.889 23.9113 46.5275 22.5285 44.9648 21.4011L43.3312 24.2456C44.3994 25.0525 45.3462 26.0087 46.1424 27.0849ZM47.8032 30.0631C48.2652 31.1775 48.577 32.3484 48.7304 33.5449H52C51.823 31.7914 51.3728 30.0763 50.6656 28.4619L47.8032 30.0631Z" fill="#E53935"/>
                            </svg>
                            <div class="card-body ps-2 pe-0">
                                <p class="card-text m-0 fs-7">Pending Order</p>
                                <h3 class="h3 mb-0">160</h3>
                            </div>
                        </div>
                        <div class="mini-item card px-3 d-flex flex-row justify-content-between align-items-center border-0 shadow rounded-3">
                            <svg width="45" height="45" viewBox="0 0 70 71" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect y="0.208313" width="70" height="70" rx="35" fill="#EDE7F6"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M24.3581 25.9356H28.8182V29.0265H19.5455V19.7402H22.6364V23.241C26.0937 19.6155 30.0339 18.2083 35 18.2083C44.3888 18.2083 52 25.8195 52 35.2083C52 44.5972 44.3888 52.2083 35 52.2083C25.6112 52.2083 18 44.5972 18 35.2083H21.0909C21.0909 42.8901 27.3182 49.1174 35 49.1174C42.6818 49.1174 48.9091 42.8901 48.9091 35.2083C48.9091 27.5265 42.6818 21.2992 35 21.2992C30.6097 21.2992 27.3417 22.5223 24.3581 25.9356ZM36.5455 33.6629H42.7273V36.7538H33.4545V25.9356H36.5455V33.6629Z" fill="#5E35B1"/>
                            </svg>
                            <div class="card-body ps-2 pe-0">
                                <p class="card-text m-0 fs-7">Service Time</p>
                                <h3 class="h3 mb-0">3<span class="fs-6 fw-normal">/hour</span></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="lolo-right" class="col-lg-95 col-md-12 col-sm-12 col-12 pe-35 pb-1 h-100">
                    <div class="row pt-3 px-3 shadow rounded-3 h-100">
                        <div class="row justify-content-between mt-0 me-0 mb-3 ms-0 p-0">
                            <h3 class="h3 col-lg-9 col-md-9 col-sm-12 col-12 text-start fw-bold">Total Order</h3>
                            <div class="col col-lg-3 col-md-3 col-sm-12 col-12 p-0">
                                <select id="liftInLiftOffRightMenu" class="form-select" aria-label="Default select example">
                                    <option selected value="[[200, 150, 400, 200, 180, 400, 200, 800, 300, 700, 100, 200], [100, 75, 200, 100, 90, 200, 100, 400, 150, 250, 50, 100]]">2023</option>
                                    <option value="[[182, 713, 283, 85, 78, 192, 495, 193, 631, 531, 123, 123], [123, 12, 34, 423, 42, 23, 49, 741, 124, 56, 234, 79]]">2022</option>
                                    <option value="[[942, 123, 34, 93, 72, 94, 17, 844, 154, 987, 273, 874], [25, 230, 23, 345, 90, 200, 100, 400, 150, 250, 50, 100]]">2021</option>
                                    <option value="[[120, 753, 758, 947, 364, 346, 187, 799, 78, 874, 87, 857], [34, 553, 66, 28, 72, 234, 83, 93, 53, 74, 82, 83   ]]">2020</option>
                                    <option value="[[874, 87, 875, 167, 238, 984, 174, 179, 875, 985, 875, 198], [100, 75, 200, 100, 90, 200, 100, 400, 150, 250, 50, 100]]">2019</option>
                                    <option value="[[2092, 9385, 4712, 7512, 6723], [1293, 7487, 3123, 6244, 5094], [2019, 2020, 2021, 2022, 2023]]">Last 5 Year</option>
                                </select>
                            </div>
                        </div>
                        <div class="graph-container text-primaryDark w-100">
                            <canvas id="totalOrderVsDowntime"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- Sesi Lift In / Lift Off Ends --}}


        {{-- Sesi Storage Yard Starts --}}
        <div class="row">
            <h3 class="h3">Storage Yard</h3>
        </div>
        <section id="storageYard" class="mb-4" style="width: 100%; height: 500px">
            <div class="row p-2 sub-menu h-100">
                <div id="storageYard-left" class="col col-lg-25 col-md-12 col-sm-12 col-12 ps-2 pe-1 container" >
                    <div class="mini-item-container row g-2 d-flex justify-content-between h-100 w-100">
                        <div class="mini-item card px-3 d-flex flex-column align-items-start border-0 shadow rounded-3">
                            <div class="card-body ps-1 pe-0">
                                <p class="card-text m-0 fs-6">Total item</p>
                                <h1 class="h1 mb-0">367</h1>
                            </div>
                            <div class="row m-0">
                                <svg width="276" height="96" viewBox="0 0 276 96" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14.5 73.5C14.5 70.7386 16.7386 68.5 19.5 68.5H40.5C43.2614 68.5 45.5 70.7386 45.5 73.5V85.5H14.5V73.5Z" fill="#039BE5"/>
                                    <path d="M50.5 61.5C50.5 58.7386 52.7386 56.5 55.5 56.5H76.5C79.2614 56.5 81.5 58.7386 81.5 61.5V85.5H50.5V61.5Z" fill="#039BE5"/>
                                    <path d="M86.5 46.5C86.5 43.7386 88.7386 41.5 91.5 41.5H112.5C115.261 41.5 117.5 43.7386 117.5 46.5V85.5H86.5V46.5Z" fill="#039BE5"/>
                                    <path d="M122.5 32.5C122.5 29.7386 124.739 27.5 127.5 27.5H148.5C151.261 27.5 153.5 29.7386 153.5 32.5V85.5H122.5V32.5Z" fill="#039BE5"/>
                                    <path d="M158.5 15.5833C158.5 12.8219 160.739 10.5833 163.5 10.5833H184.5C187.261 10.5833 189.5 12.8219 189.5 15.5833V85.5H158.5V15.5833Z" fill="#039BE5"/>
                                    <path d="M194.5 8.5C194.5 5.73858 196.739 3.5 199.5 3.5H220.5C223.261 3.5 225.5 5.73858 225.5 8.5V85.5H194.5V8.5Z" fill="#039BE5"/>
                                    <path d="M230.5 32.5C230.5 29.7386 232.739 27.5 235.5 27.5H256.5C259.261 27.5 261.5 29.7386 261.5 32.5V85.5H230.5V32.5Z" fill="#039BE5"/>
                                </svg>
                            </div>
                        </div>
                        <div class="mini-item card px-3 d-flex flex-column align-items-start border-0 shadow rounded-3">
                            <div class="card-body ps-1 pe-0">
                                <p class="card-text m-0 fs-6">Area of Each Item</p>
                                <h1 class="h1 mb-0">789</h1>
                            </div>
                            <div class="row m-0">
                                <svg width="276" height="96" viewBox="0 0 276 96" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14.5 73.3333C14.5 70.5719 16.7386 68.3333 19.5 68.3333H40.5C43.2614 68.3333 45.5 70.5719 45.5 73.3333V85.3333H14.5V73.3333Z" fill="#F4511E"/>
                                    <path d="M50.5 61.3333C50.5 58.5719 52.7386 56.3333 55.5 56.3333H76.5C79.2614 56.3333 81.5 58.5719 81.5 61.3333V85.3333H50.5V61.3333Z" fill="#F4511E"/>
                                    <path d="M86.5 46.3333C86.5 43.5719 88.7386 41.3333 91.5 41.3333H112.5C115.261 41.3333 117.5 43.5719 117.5 46.3333V85.3333H86.5V46.3333Z" fill="#F4511E"/>
                                    <path d="M122.5 32.3333C122.5 29.5719 124.739 27.3333 127.5 27.3333H148.5C151.261 27.3333 153.5 29.5719 153.5 32.3333V85.3333H122.5V32.3333Z" fill="#F4511E"/>
                                    <path d="M158.5 15.4167C158.5 12.6552 160.739 10.4167 163.5 10.4167H184.5C187.261 10.4167 189.5 12.6552 189.5 15.4167V85.3333H158.5V15.4167Z" fill="#F4511E"/>
                                    <path d="M194.5 8.33331C194.5 5.57189 196.739 3.33331 199.5 3.33331H220.5C223.261 3.33331 225.5 5.57189 225.5 8.33331V85.3333H194.5V8.33331Z" fill="#F4511E"/>
                                    <path d="M230.5 32.3333C230.5 29.5719 232.739 27.3333 235.5 27.3333H256.5C259.261 27.3333 261.5 29.5719 261.5 32.3333V85.3333H230.5V32.3333Z" fill="#F4511E"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="storageYard-right" class="col-lg-95 col-md-12 col-sm-12 col-12 pe-35 h-100">
                    <div class="row h-100">
                        <div class="col pb-1 h-100">
                            <div class="row shadow rounded-3 h-100 px-3">
                                <div class="row pt-3 px-1 pe-0 m-0 ps-0">
                                    <div class="row justify-content-between mt-0 me-0 mb-3 ms-0 p-0">
                                        <h3 class="h3 col col-lg-9 col-md-9 col-sm-12 col-12 text-start fw-bold">Record</h3>
                                        <div class="col col-lg-3 col-md-3 col-sm-12 col-12 p-0">
                                            <select id="wiwi" class="form-select" aria-label="Default select example">
                                                <option selected>Select Year</option>
                                                <option value="200, 150, 400, 200, 180, 400, 200, 800, 300, 700, 100, 200">2023</option>
                                                <option value="182, 713, 283, 85, 78, 192, 495, 193, 631, 531, 123, 123">2022</option>
                                                <option value="942, 123, 34, 93, 72, 94, 17, 844, 154, 987, 273, 874">2021</option>
                                                <option value="120, 753, 758, 947, 364, 346, 187, 799, 78, 874, 87, 857">2020</option>
                                                <option value="874, 87, 875, 167, 238, 984, 174, 179, 875, 985, 875, 198">2019</option>
                                                <option value="5year">Last 5 Year</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="graph-container m-0 row text-primaryDark border rounded-3 overflow-scroll" style="border-color: #9DB2BF !important">
                                    <table class="table table-fix-head table-responsive table-primaryDark table-striped table-hover">
                                        <thead class="align-middle text-center">
                                            <tr>
                                                <th scope="col">Owner</th>
                                                <th scope="col">Item Catogory</th>
                                                <th scope="col">Masuk</th>
                                                <th scope="col">Keluar</th>
                                                <th scope="col">Total (hari)</th>
                                            </tr>
                                        </thead>
                                        <tbody class="">
                                            <tr>
                                                <td scope="row">PT Suka Maju</td>
                                                <td class="text-center">Elektronik</td>
                                                <td class="text-center">14/09/2023</td>
                                                <td class="text-center">26/09/2023</td>
                                                <td class="text-center">7</td>
                                            </tr>
                                            <tr>
                                                <td scope="row">PT Suka Maju</td>
                                                <td class="text-center">Elektronik</td>
                                                <td class="text-center">14/09/2023</td>
                                                <td class="text-center">26/09/2023</td>
                                                <td class="text-center">7</td>
                                            </tr>
                                            <tr>
                                                <td scope="row">PT Suka Maju</td>
                                                <td class="text-center">Elektronik</td>
                                                <td class="text-center">14/09/2023</td>
                                                <td class="text-center">26/09/2023</td>
                                                <td class="text-center">7</td>
                                            </tr>
                                            <tr>
                                                <td scope="row">PT Suka Maju</td>
                                                <td class="text-center">Elektronik</td>
                                                <td class="text-center">14/09/2023</td>
                                                <td class="text-center">26/09/2023</td>
                                                <td class="text-center">7</td>
                                            </tr>
                                            <tr>
                                                <td scope="row">PT Suka Maju</td>
                                                <td class="text-center">Elektronik</td>
                                                <td class="text-center">14/09/2023</td>
                                                <td class="text-center">26/09/2023</td>
                                                <td class="text-center">7</td>
                                            </tr>
                                            <tr>
                                                <td scope="row">PT Suka Maju</td>
                                                <td class="text-center">Elektronik</td>
                                                <td class="text-center">14/09/2023</td>
                                                <td class="text-center">26/09/2023</td>
                                                <td class="text-center">7</td>
                                            </tr>
                                            <tr>
                                                <td scope="row">PT Suka Maju</td>
                                                <td class="text-center">Elektronik</td>
                                                <td class="text-center">14/09/2023</td>
                                                <td class="text-center">26/09/2023</td>
                                                <td class="text-center">7</td>
                                            </tr>
                                            <tr>
                                                <td scope="row">PT Suka Maju</td>
                                                <td class="text-center">Elektronik</td>
                                                <td class="text-center">14/09/2023</td>
                                                <td class="text-center">26/09/2023</td>
                                                <td class="text-center">7</td>
                                            </tr>
                                            <tr>
                                                <td scope="row">PT Suka Maju</td>
                                                <td class="text-center">Elektronik</td>
                                                <td class="text-center">14/09/2023</td>
                                                <td class="text-center">26/09/2023</td>
                                                <td class="text-center">7</td>
                                            </tr>
                                            <tr>
                                                <td scope="row">PT Suka Maju</td>
                                                <td class="text-center">Elektronik</td>
                                                <td class="text-center">14/09/2023</td>
                                                <td class="text-center">26/09/2023</td>
                                                <td class="text-center">7</td>
                                            </tr>
                                            <tr>
                                                <td scope="row">PT Suka Maju</td>
                                                <td class="text-center">Elektronik</td>
                                                <td class="text-center">14/09/2023</td>
                                                <td class="text-center">26/09/2023</td>
                                                <td class="text-center">7</td>
                                            </tr>
                                            <tr>
                                                <td scope="row">PT Suka Maju</td>
                                                <td class="text-center">Elektronik</td>
                                                <td class="text-center">14/09/2023</td>
                                                <td class="text-center">26/09/2023</td>
                                                <td class="text-center">7</td>
                                            </tr>
                                            <tr>
                                                <td scope="row">PT Suka Maju</td>
                                                <td class="text-center">Elektronik</td>
                                                <td class="text-center">14/09/2023</td>
                                                <td class="text-center">26/09/2023</td>
                                                <td class="text-center">7</td>
                                            </tr>
                                            <tr>
                                                <td scope="row">PT Suka Maju</td>
                                                <td class="text-center">Elektronik</td>
                                                <td class="text-center">14/09/2023</td>
                                                <td class="text-center">26/09/2023</td>
                                                <td class="text-center">7</td>
                                            </tr>
                                            <tr>
                                                <td scope="row">PT Suka Maju</td>
                                                <td class="text-center">Elektronik</td>
                                                <td class="text-center">14/09/2023</td>
                                                <td class="text-center">26/09/2023</td>
                                                <td class="text-center">7</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- Sesi Storage Yard Ends --}}


        {{-- Sesi Storage Warehouse Start --}}
        <div class="row">
            <h3 class="h3">Storage Warehouse</h3>
        </div>
        <section id="storageWarehouse" class="mb-4" style="width: 100%; height: 500px">
            <div class="row p-2 sub-menu h-100">
                <div id="storageWarehouse-left" class="col col-lg-25 col-md-12 col-sm-12 col-12 ps-2 pe-1 container" >
                    <div class="mini-item-container row g-2 justify-content-between h-100 w-100">
                        <div class="mini-item card px-3 d-flex flex-column align-items-start border-0 shadow rounded-3">
                            <div class="card-body ps-1 pe-0">
                                <p class="card-text m-0 fs-6">Total Item</p>
                                <h1 class="h1 mb-0">190</h1>
                            </div>
                            <div class="row m-0">
                                <svg width="276" height="96" viewBox="0 0 276 96" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14.5 73.5C14.5 70.7386 16.7386 68.5 19.5 68.5H40.5C43.2614 68.5 45.5 70.7386 45.5 73.5V85.5H14.5V73.5Z" fill="#039BE5"/>
                                    <path d="M50.5 61.5C50.5 58.7386 52.7386 56.5 55.5 56.5H76.5C79.2614 56.5 81.5 58.7386 81.5 61.5V85.5H50.5V61.5Z" fill="#039BE5"/>
                                    <path d="M86.5 46.5C86.5 43.7386 88.7386 41.5 91.5 41.5H112.5C115.261 41.5 117.5 43.7386 117.5 46.5V85.5H86.5V46.5Z" fill="#039BE5"/>
                                    <path d="M122.5 32.5C122.5 29.7386 124.739 27.5 127.5 27.5H148.5C151.261 27.5 153.5 29.7386 153.5 32.5V85.5H122.5V32.5Z" fill="#039BE5"/>
                                    <path d="M158.5 15.5833C158.5 12.8219 160.739 10.5833 163.5 10.5833H184.5C187.261 10.5833 189.5 12.8219 189.5 15.5833V85.5H158.5V15.5833Z" fill="#039BE5"/>
                                    <path d="M194.5 8.5C194.5 5.73858 196.739 3.5 199.5 3.5H220.5C223.261 3.5 225.5 5.73858 225.5 8.5V85.5H194.5V8.5Z" fill="#039BE5"/>
                                    <path d="M230.5 32.5C230.5 29.7386 232.739 27.5 235.5 27.5H256.5C259.261 27.5 261.5 29.7386 261.5 32.5V85.5H230.5V32.5Z" fill="#039BE5"/>
                                </svg>
                            </div>
                        </div>
                        <div class="mini-item card px-3 d-flex flex-column align-items-start border-0 shadow rounded-3">
                            <div class="card-body ps-1 pe-0">
                                <p class="card-text m-0 fs-6">Total space</p>
                                <h1 class="h1 mb-0">369 <span class="fs-7 align-top">m<sup>2</sup></span></h1>
                            </div>
                            <div class="row m-0">
                                <svg width="276" height="96" viewBox="0 0 276 96" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14.5 73.3333C14.5 70.5719 16.7386 68.3333 19.5 68.3333H40.5C43.2614 68.3333 45.5 70.5719 45.5 73.3333V85.3333H14.5V73.3333Z" fill="#F4511E"/>
                                    <path d="M50.5 61.3333C50.5 58.5719 52.7386 56.3333 55.5 56.3333H76.5C79.2614 56.3333 81.5 58.5719 81.5 61.3333V85.3333H50.5V61.3333Z" fill="#F4511E"/>
                                    <path d="M86.5 46.3333C86.5 43.5719 88.7386 41.3333 91.5 41.3333H112.5C115.261 41.3333 117.5 43.5719 117.5 46.3333V85.3333H86.5V46.3333Z" fill="#F4511E"/>
                                    <path d="M122.5 32.3333C122.5 29.5719 124.739 27.3333 127.5 27.3333H148.5C151.261 27.3333 153.5 29.5719 153.5 32.3333V85.3333H122.5V32.3333Z" fill="#F4511E"/>
                                    <path d="M158.5 15.4167C158.5 12.6552 160.739 10.4167 163.5 10.4167H184.5C187.261 10.4167 189.5 12.6552 189.5 15.4167V85.3333H158.5V15.4167Z" fill="#F4511E"/>
                                    <path d="M194.5 8.33331C194.5 5.57189 196.739 3.33331 199.5 3.33331H220.5C223.261 3.33331 225.5 5.57189 225.5 8.33331V85.3333H194.5V8.33331Z" fill="#F4511E"/>
                                    <path d="M230.5 32.3333C230.5 29.5719 232.739 27.3333 235.5 27.3333H256.5C259.261 27.3333 261.5 29.5719 261.5 32.3333V85.3333H230.5V32.3333Z" fill="#F4511E"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="storageWarehouse-right" class="col-lg-95 col-md-12 col-sm-12 col-12 h-100">
                    <div class="row h-100">
                        <div id="storageWarehouseChart" class="col-lg-6 col-md-12 col-sm-12 col-12 pe-35 pb-1 h-100">
                            <div class="row shadow rounded-3 h-100 px-3">
                                <div class="row pt-3 mt-0 me-0 mb-3 ms-0 ps-0">
                                    <h3 class="h3 col col-lg-7 col-md-7 col-sm-12 col-12 text-start fw-bold">Area Used</h3>
                                    <div class="col col-lg-5 col-md-5 col-sm-12 col-12 p-0">
                                        <select id="storageWarehouseMiddleMenu" class="form-select" aria-label="Default select example">
                                            <option selected value="[200, 150, 400, 200, 180, 400, 200, 800, 300, 700, 100]">2023</option>
                                            <option value="[182, 713, 283, 85, 78, 192, 495, 193, 631, 531, 123]">2022</option>
                                            <option value="[942, 123, 34, 93, 72, 94, 17, 844, 154, 987, 273]">2021</option>
                                            <option value="[120, 753, 758, 947, 364, 346, 187, 799, 78, 874, 87]">2020</option>
                                            <option value="[874, 87, 875, 167, 238, 984, 174, 179, 875, 985, 875]">2019</option>
                                            <option value="[[2092, 9385, 4712, 7512, 6723], [2019, 2020, 2021, 2022, 2023]]">Last 5 Year</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="graph-container row text-primaryDark" style="width: 100%">
                                    <canvas id="LuasStorageWarehouse"></canvas>
                                </div>
                            </div>
                        </div>
                        <div id="storageWarehouseTable" class="col-lg-6 col-md-12 col-sm-12 col-12 pe-35 pb-1 h-100">
                            <div class="row shadow rounded-3 h-100 px-3">
                                <div class="row pt-3 mt-0 me-0 mb-3 ms-0 p-0">
                                    <h3 class="h3 col col-lg-7 col-md-7 col-sm-12 col-12 text-start fw-bold">Duration</h3>
                                    <div class="col col-lg-5 col-md-5 col-sm-12 col-12 p-0">
                                        <select id="wowok" class="form-select" aria-label="Default select example">
                                            <option selected>Select Year</option>
                                            <option value="200, 150, 400, 200, 180, 400, 200, 800, 300, 700, 100, 200">2023</option>
                                            <option value="182, 713, 283, 85, 78, 192, 495, 193, 631, 531, 123, 123">2022</option>
                                            <option value="942, 123, 34, 93, 72, 94, 17, 844, 154, 987, 273, 874">2021</option>
                                            <option value="120, 753, 758, 947, 364, 346, 187, 799, 78, 874, 87, 857">2020</option>
                                            <option value="874, 87, 875, 167, 238, 984, 174, 179, 875, 985, 875, 198">2019</option>
                                            <option value="5year">Last 5 Year</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="graph-container m-0 row text-primaryDark border rounded-3 overflow-scroll" style="border-color: #9DB2BF !important">
                                    <table class="table table-fix-head table-responsive table-primaryDark table-striped table-hover">
                                        <thead class="align-middle text-center">
                                            <tr>
                                                <th scope="col">No Container</th>
                                                <th scope="col">Lama Plugging</th>
                                            </tr>
                                        </thead>
                                        <tbody class="">
                                            <tr>
                                                <td scope="row">HKLO9070</td>
                                                <td class="text-center">07:30 - 16:00 (510 Menit)</td>
                                            </tr>
                                            <tr>
                                                <td scope="row">HKLO9070</td>
                                                <td class="text-center">07:30 - 16:00 (510 Menit)</td>
                                            </tr>
                                            <tr>
                                                <td scope="row">HKLO9070</td>
                                                <td class="text-center">07:30 - 16:00 (510 Menit)</td>
                                            </tr>
                                            <tr>
                                                <td scope="row">HKLO9070</td>
                                                <td class="text-center">07:30 - 16:00 (510 Menit)</td>
                                            </tr>
                                            <tr>
                                                <td scope="row">HKLO9070</td>
                                                <td class="text-center">07:30 - 16:00 (510 Menit)</td>
                                            </tr>
                                            <tr>
                                                <td scope="row">HKLO9070</td>
                                                <td class="text-center">07:30 - 16:00 (510 Menit)</td>
                                            </tr>
                                            <tr>
                                                <td scope="row">HKLO9070</td>
                                                <td class="text-center">07:30 - 16:00 (510 Menit)</td>
                                            </tr>
                                            <tr>
                                                <td scope="row">HKLO9070</td>
                                                <td class="text-center">07:30 - 16:00 (510 Menit)</td>
                                            </tr>
                                            <tr>
                                                <td scope="row">HKLO9070</td>
                                                <td class="text-center">07:30 - 16:00 (510 Menit)</td>
                                            </tr>
                                            <tr>
                                                <td scope="row">HKLO9070</td>
                                                <td class="text-center">07:30 - 16:00 (510 Menit)</td>
                                            </tr>
                                            <tr>
                                                <td scope="row">HKLO9070</td>
                                                <td class="text-center">07:30 - 16:00 (510 Menit)</td>
                                            </tr>
                                            <tr>
                                                <td scope="row">HKLO9070</td>
                                                <td class="text-center">07:30 - 16:00 (510 Menit)</td>
                                            </tr>
                                            <tr>
                                                <td scope="row">HKLO9070</td>
                                                <td class="text-center">07:30 - 16:00 (510 Menit)</td>
                                            </tr>
                                            <tr>
                                                <td scope="row">HKLO9070</td>
                                                <td class="text-center">07:30 - 16:00 (510 Menit)</td>
                                            </tr>
                                            <tr>
                                                <td scope="row">HKLO9070</td>
                                                <td class="text-center">07:30 - 16:00 (510 Menit)</td>
                                            </tr>
                                            <tr>
                                                <td scope="row">HKLO9070</td>
                                                <td class="text-center">07:30 - 16:00 (510 Menit)</td>
                                            </tr>
                                            <tr>
                                                <td scope="row">HKLO9070</td>
                                                <td class="text-center">07:30 - 16:00 (510 Menit)</td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- Sesi Storage Warehouse Ends --}}


        {{-- Sesi Trucking Start --}}
        <div class="row">
            <h3 class="h3">Trucking</h3>
        </div>
        <section id="trucking" class="mb-4" style="width: 100%">
            <div class="row p-2 sub-menu h-100">
                <div id="trucking-left" class="col col-lg-25 col-md-12 col-sm-12 col-12 ps-2 pe-1 container" >
                    <div class="mini-item-container row g-2 d-flex justify-content-between h-100 w-100">
                        <div class="mini-item card p-0 d-flex flex-row align-items-center justify-content-between border-0 mb-2 w-100">
                            <div class="row w-100 m-0">
                                <div class="col col-lg-3 col-md-3 col-sm-4 col-5 p-0 h-50 w-100">
                                    <select id="truckingLeftMenu" class="form-select" aria-label="Default select example">
                                        <option selected>Select Year</option>
                                        <option value="200, 150, 400, 200, 180, 400, 200, 800, 300, 700, 100, 200">2023</option>
                                        <option value="182, 713, 283, 85, 78, 192, 495, 193, 631, 531, 123, 123">2022</option>
                                        <option value="942, 123, 34, 93, 72, 94, 17, 844, 154, 987, 273, 874">2021</option>
                                        <option value="120, 753, 758, 947, 364, 346, 187, 799, 78, 874, 87, 857">2020</option>
                                        <option value="874, 87, 875, 167, 238, 984, 174, 179, 875, 985, 875, 198">2019</option>
                                        <option value="5year">Last 5 Year</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="mini-item card px-3 d-flex flex-row justify-content-between align-items-center border-0 shadow rounded-3">
                            <svg width="45" height="45" viewBox="0 0 70 71" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect y="0.458374" width="70" height="70" rx="35" fill="#E1F5FE"/>
                                <path d="M35.7194 36.6259H31.8441C31.5872 36.6259 31.3407 36.7279 31.159 36.9096C30.9774 37.0913 30.8753 37.3377 30.8753 37.5947C30.8753 37.8516 30.9774 38.0981 31.159 38.2797C31.3407 38.4614 31.5872 38.5635 31.8441 38.5635H35.7194C35.9763 38.5635 36.2228 38.4614 36.4045 38.2797C36.5861 38.0981 36.6882 37.8516 36.6882 37.5947C36.6882 37.3377 36.5861 37.0913 36.4045 36.9096C36.2228 36.7279 35.9763 36.6259 35.7194 36.6259ZM39.5947 26.9376H38.4515C38.2516 26.3723 37.8817 25.8826 37.3926 25.5357C36.9035 25.1888 36.319 25.0017 35.7194 25H33.7818C33.1821 25.0017 32.5977 25.1888 32.1085 25.5357C31.6194 25.8826 31.2496 26.3723 31.0497 26.9376H29.9065C29.1356 26.9376 28.3964 27.2439 27.8513 27.7889C27.3062 28.334 27 29.0733 27 29.8441V41.47C27 42.2408 27.3062 42.9801 27.8513 43.5252C28.3964 44.0702 29.1356 44.3764 29.9065 44.3764H39.5947C40.3655 44.3764 41.1048 44.0702 41.6499 43.5252C42.1949 42.9801 42.5012 42.2408 42.5012 41.47V29.8441C42.5012 29.0733 42.1949 28.334 41.6499 27.7889C41.1048 27.2439 40.3655 26.9376 39.5947 26.9376ZM32.8129 27.9065C32.8129 27.6495 32.915 27.4031 33.0967 27.2214C33.2784 27.0397 33.5248 26.9376 33.7818 26.9376H35.7194C35.9763 26.9376 36.2228 27.0397 36.4045 27.2214C36.5861 27.4031 36.6882 27.6495 36.6882 27.9065V28.8753H32.8129V27.9065ZM40.5635 41.47C40.5635 41.7269 40.4614 41.9733 40.2797 42.155C40.0981 42.3367 39.8516 42.4388 39.5947 42.4388H29.9065C29.6495 42.4388 29.4031 42.3367 29.2214 42.155C29.0397 41.9733 28.9376 41.7269 28.9376 41.47V29.8441C28.9376 29.5872 29.0397 29.3407 29.2214 29.159C29.4031 28.9774 29.6495 28.8753 29.9065 28.8753H30.8753V29.8441C30.8753 30.1011 30.9774 30.3475 31.159 30.5292C31.3407 30.7109 31.5872 30.8129 31.8441 30.8129H37.657C37.914 30.8129 38.1604 30.7109 38.3421 30.5292C38.5238 30.3475 38.6259 30.1011 38.6259 29.8441V28.8753H39.5947C39.8516 28.8753 40.0981 28.9774 40.2797 29.159C40.4614 29.3407 40.5635 29.5872 40.5635 29.8441V41.47ZM37.657 32.7506H31.8441C31.5872 32.7506 31.3407 32.8526 31.159 33.0343C30.9774 33.216 30.8753 33.4625 30.8753 33.7194C30.8753 33.9763 30.9774 34.2228 31.159 34.4045C31.3407 34.5861 31.5872 34.6882 31.8441 34.6882H37.657C37.914 34.6882 38.1604 34.5861 38.3421 34.4045C38.5238 34.2228 38.6259 33.9763 38.6259 33.7194C38.6259 33.4625 38.5238 33.216 38.3421 33.0343C38.1604 32.8526 37.914 32.7506 37.657 32.7506Z" fill="#039BE5"/>
                                <path d="M35 52.4584C44.3888 52.4584 52 44.8471 52 35.4584C52 26.0695 44.3888 18.4584 35 18.4584C25.6112 18.4584 18 26.0695 18 35.4584C18 44.8471 25.6112 52.4584 35 52.4584Z" stroke="#039BE5" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <div class="card-body ps-2 pe-0 ">
                                <p class="card-text m-0 fs-7">Total Order</p>
                                <h3 class="h3 mb-0">398</h3>
                            </div>
                        </div>
                        <div class="mini-item card px-3 d-flex flex-row justify-content-between align-items-center border-0 shadow rounded-3">
                            <svg width="45" height="45" viewBox="0 0 70 71" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect y="0.375" width="70" height="70" rx="35" fill="#E8F5E9"/>
                                <path d="M35 18.375C25.6111 18.375 18 25.9861 18 35.375C18 44.7639 25.6111 52.375 35 52.375C44.3889 52.375 52 44.7639 52 35.375C52 25.9861 44.3889 18.375 35 18.375ZM35 21.6653C42.5768 21.6653 48.7097 27.797 48.7097 35.375C48.7097 42.9518 42.578 49.0847 35 49.0847C27.4232 49.0847 21.2903 42.953 21.2903 35.375C21.2903 27.7982 27.422 21.6653 35 21.6653ZM44.6108 30.5949L43.066 29.0376C42.746 28.7151 42.2252 28.713 41.9027 29.033L32.2132 38.6446L28.1146 34.5127C27.7947 34.1901 27.2738 34.188 26.9513 34.5079L25.394 36.0527C25.0715 36.3727 25.0693 36.8935 25.3893 37.2161L31.6122 43.4893C31.9321 43.8119 32.4529 43.814 32.7755 43.494L44.6062 31.7583C44.9286 31.4383 44.9307 30.9174 44.6108 30.5949Z" fill="#43A047"/>
                            </svg>
                            <div class="card-body ps-2 pe-0">
                                <p class="card-text m-0 fs-7">Finish Order</p>
                                <h3 class="h3 mb-0">148</h3>
                            </div>
                        </div>
                        <div class="mini-item mini-item-3 card px-3 d-flex flex-row justify-content-between align-items-center border-0 shadow rounded-3">
                            <svg width="45" height="45" viewBox="0 0 70 71" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect y="0.291687" width="70" height="70" rx="35" fill="#FFEBEE"/>
                                <path d="M36.7469 33.6183V24.1715C36.7469 23.9455 36.6571 23.7287 36.4973 23.5689C36.3375 23.4091 36.1208 23.3193 35.8948 23.3193H34.1905C33.9645 23.3193 33.7478 23.4091 33.588 23.5689C33.4282 23.7287 33.3384 23.9455 33.3384 24.1715V34.8965C33.3384 35.1224 33.4282 35.3391 33.5881 35.4989L38.9565 40.8674C39.1163 41.0271 39.333 41.1169 39.559 41.1169C39.7849 41.1169 40.0016 41.0271 40.1614 40.8674L41.2999 39.7289C41.4596 39.5691 41.5494 39.3524 41.5494 39.1265C41.5494 38.9005 41.4596 38.6838 41.2999 38.524L36.9932 34.2173C36.8355 34.0578 36.747 33.8426 36.7469 33.6183Z" fill="#E53935"/>
                                <path d="M48.7304 36.9535C48.4123 39.5181 47.3804 41.9418 45.7522 43.9487C44.124 45.9555 41.965 47.4648 39.521 48.3047C37.0771 49.1445 34.4463 49.2812 31.9285 48.6991C29.4106 48.117 27.1069 46.8395 25.2795 45.0122C23.4522 43.1848 22.1747 40.881 21.5926 38.3632C21.0105 35.8453 21.1472 33.2146 21.987 30.7707C22.8269 28.3267 24.3362 26.1677 26.343 24.5395C28.3499 22.9113 30.7736 21.8794 33.3382 21.5613V18.2917C30.1289 18.6143 27.0771 19.841 24.5373 21.8292C21.9975 23.8174 20.0741 26.4855 18.9905 29.5235C17.9069 32.5615 17.7077 35.8447 18.416 38.9914C19.1243 42.1381 20.711 45.0192 22.9917 47.3C25.2724 49.5807 28.1536 51.1674 31.3003 51.8757C34.447 52.584 37.7301 52.3848 40.7681 51.3012C43.8061 50.2176 46.4743 48.2942 48.4625 45.7544C50.4507 43.2146 51.6774 40.1628 52 36.9535H48.7304ZM42.0053 19.7054C40.3404 18.9531 38.5645 18.4757 36.7468 18.2917V21.5613C37.9963 21.7188 39.2182 22.048 40.3777 22.5396L42.0053 19.7054ZM46.1424 27.0849L48.992 25.4914C47.889 23.9113 46.5275 22.5285 44.9648 21.4011L43.3312 24.2456C44.3994 25.0525 45.3462 26.0087 46.1424 27.0849ZM47.8032 30.0631C48.2652 31.1775 48.577 32.3484 48.7304 33.5449H52C51.823 31.7914 51.3728 30.0763 50.6656 28.4619L47.8032 30.0631Z" fill="#E53935"/>
                            </svg>
                            <div class="card-body ps-2 pe-0">
                                <p class="card-text m-0 fs-7">Pending Order</p>
                                <h3 class="h3 mb-0">79</h3>
                            </div>
                        </div>

                    </div>
                </div>
                <div id="trucking-right" class="col-lg-95 col-md-12 col-sm-12 col-12 pe-35 pb-1 h-100">
                    <div class="row pt-3 px-3 shadow rounded-3 h-100">
                        <div class="row justify-content-between mt-0 me-0 mb-3 ms-0 p-0">
                            <h3 class="h3 col-lg-9 col-md-9 col-sm-12 col-12 text-start fw-bold">Total Order</h3>
                            <div class="col col-lg-3 col-md-3 col-sm-12 col-12 p-0">
                                <select id="truckingChartOption" class="form-select" aria-label="Default select example">
                                    <option selected value="[200, 150, 400, 200, 180, 400, 200, 800, 300, 700, 100, 200]">2023</option>
                                    <option value="[182, 713, 283, 85, 78, 192, 495, 193, 631, 531, 123, 123]">2022</option>
                                    <option value="[942, 123, 34, 93, 72, 94, 17, 844, 154, 987, 273, 874]">2021</option>
                                    <option value="[120, 753, 758, 947, 364, 346, 187, 799, 78, 874, 87, 857]">2020</option>
                                    <option value="[874, 87, 875, 167, 238, 984, 174, 179, 875, 985, 875, 198]">2019</option>
                                    <option value="[[2092, 9385, 4712, 7512, 6723], [2019, 2020, 2021, 2022, 2023]]">Last 5 Year</option>
                                </select>
                            </div>
                        </div>
                        <div class="graph-container text-primaryDark w-100">
                            <canvas id="totalOrderTrucking"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- Sesi Trucking Ends --}}


        {{-- Sesi Plugging & Monitoring Start --}}
        <div class="row">
            <h3 class="h3">Plugging & Monitoring</h3>
        </div>
        <div class="row p-0 d-flex flex-row align-items-center justify-content-between border-0 mb-2 w-100 mx-0">
            <div class="col-6 d-flex flex-row justify-content-start m-0">
                <button id="btnPlugging" class="btn btn-primary col-3 me-2">
                    Plugging
                </button>
                <button id="btnMonitoring" class="btn btn-primary col-3">
                    Monitoring
                </button>
            </div>
            <div class="col-6 d-flex flex-row justify-content-end m-0 pe-3">
                <p class="fs-6 my-auto">
                    <i class="fa-solid fa-clock-rotate-left"></i>
                    07:00 - 07:00
                </p>
                <span style="width: 7%"></span>
                <form action="#">
                    <input type="date" id="monitoringDate" class="form-control" placeholder="Pilih Tanggal">
                </form>
                {{-- <div class="input-group date" style="width: 50%"> --}}

                    {{-- <input type="date" class="form-control" id="monitoringDate" name="date" placeholder="Tanggal" value="" aria-label="Recipient's username"> --}}
                    {{-- <span class="input-group-text" id="basic-addon2">
                        <i class="fa-regular fa-calendar"></i>
                    </span> --}}
                {{-- </div> --}}
            </div>
        </div>
        <section id="pluggingMonitoring" class="mb-4" style="width: 100%; height: 450px">
            <div class="row p-2 sub-menu h-100">
                <div id="pluggingMonitoring-left" class="col col-lg-25 col-md-12 col-sm-12 col-12 ps-2 pe-1 container" >
                    <div class="mini-item-container row g-2 d-flex justify-content-between h-100 w-100">
                        <div class="mini-item card px-3 d-flex flex-row align-items-center border-0 shadow rounded-3">
                            <svg width="45" height="45" viewBox="0 0 70 71" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect y="0.458374" width="70" height="70" rx="35" fill="#E1F5FE"/>
                                <path d="M35.7194 36.6259H31.8441C31.5872 36.6259 31.3407 36.7279 31.159 36.9096C30.9774 37.0913 30.8753 37.3377 30.8753 37.5947C30.8753 37.8516 30.9774 38.0981 31.159 38.2797C31.3407 38.4614 31.5872 38.5635 31.8441 38.5635H35.7194C35.9763 38.5635 36.2228 38.4614 36.4045 38.2797C36.5861 38.0981 36.6882 37.8516 36.6882 37.5947C36.6882 37.3377 36.5861 37.0913 36.4045 36.9096C36.2228 36.7279 35.9763 36.6259 35.7194 36.6259ZM39.5947 26.9376H38.4515C38.2516 26.3723 37.8817 25.8826 37.3926 25.5357C36.9035 25.1888 36.319 25.0017 35.7194 25H33.7818C33.1821 25.0017 32.5977 25.1888 32.1085 25.5357C31.6194 25.8826 31.2496 26.3723 31.0497 26.9376H29.9065C29.1356 26.9376 28.3964 27.2439 27.8513 27.7889C27.3062 28.334 27 29.0733 27 29.8441V41.47C27 42.2408 27.3062 42.9801 27.8513 43.5252C28.3964 44.0702 29.1356 44.3764 29.9065 44.3764H39.5947C40.3655 44.3764 41.1048 44.0702 41.6499 43.5252C42.1949 42.9801 42.5012 42.2408 42.5012 41.47V29.8441C42.5012 29.0733 42.1949 28.334 41.6499 27.7889C41.1048 27.2439 40.3655 26.9376 39.5947 26.9376ZM32.8129 27.9065C32.8129 27.6495 32.915 27.4031 33.0967 27.2214C33.2784 27.0397 33.5248 26.9376 33.7818 26.9376H35.7194C35.9763 26.9376 36.2228 27.0397 36.4045 27.2214C36.5861 27.4031 36.6882 27.6495 36.6882 27.9065V28.8753H32.8129V27.9065ZM40.5635 41.47C40.5635 41.7269 40.4614 41.9733 40.2797 42.155C40.0981 42.3367 39.8516 42.4388 39.5947 42.4388H29.9065C29.6495 42.4388 29.4031 42.3367 29.2214 42.155C29.0397 41.9733 28.9376 41.7269 28.9376 41.47V29.8441C28.9376 29.5872 29.0397 29.3407 29.2214 29.159C29.4031 28.9774 29.6495 28.8753 29.9065 28.8753H30.8753V29.8441C30.8753 30.1011 30.9774 30.3475 31.159 30.5292C31.3407 30.7109 31.5872 30.8129 31.8441 30.8129H37.657C37.914 30.8129 38.1604 30.7109 38.3421 30.5292C38.5238 30.3475 38.6259 30.1011 38.6259 29.8441V28.8753H39.5947C39.8516 28.8753 40.0981 28.9774 40.2797 29.159C40.4614 29.3407 40.5635 29.5872 40.5635 29.8441V41.47ZM37.657 32.7506H31.8441C31.5872 32.7506 31.3407 32.8526 31.159 33.0343C30.9774 33.216 30.8753 33.4625 30.8753 33.7194C30.8753 33.9763 30.9774 34.2228 31.159 34.4045C31.3407 34.5861 31.5872 34.6882 31.8441 34.6882H37.657C37.914 34.6882 38.1604 34.5861 38.3421 34.4045C38.5238 34.2228 38.6259 33.9763 38.6259 33.7194C38.6259 33.4625 38.5238 33.216 38.3421 33.0343C38.1604 32.8526 37.914 32.7506 37.657 32.7506Z" fill="#039BE5"/>
                                <path d="M35 52.4584C44.3888 52.4584 52 44.8471 52 35.4584C52 26.0695 44.3888 18.4584 35 18.4584C25.6112 18.4584 18 26.0695 18 35.4584C18 44.8471 25.6112 52.4584 35 52.4584Z" stroke="#039BE5" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <div class="card-body ps-1 pe-0">
                                <p class="card-text m-0 fs-7">Total Plug</p>
                                <h3 class="h3 mb-0">160</h3>
                            </div>
                        </div>
                        <div class="mini-item card px-3 d-flex flex-row align-items-center border-0 shadow rounded-3">
                            <svg width="45" height="45" viewBox="0 0 70 71" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect y="0.041748" width="70" height="70" rx="35" fill="#FBE9E7"/>
                                <path d="M35 18.0417C31.6377 18.0417 28.3509 19.0388 25.5553 20.9068C22.7597 22.7747 20.5807 25.4298 19.2941 28.5361C18.0074 31.6425 17.6707 35.0606 18.3267 38.3583C18.9826 41.656 20.6017 44.6851 22.9792 47.0626C25.3567 49.4401 28.3858 51.0591 31.6835 51.7151C34.9811 52.371 38.3993 52.0344 41.5056 50.7477C44.612 49.461 47.267 47.2821 49.135 44.4864C51.003 41.6908 52 38.404 52 35.0417C51.9949 30.5346 50.2022 26.2136 47.0152 23.0266C43.8282 19.8396 39.5071 18.0468 35 18.0417ZM35 49.4264C32.155 49.4264 29.3739 48.5827 27.0083 47.0021C24.6428 45.4215 22.7991 43.1749 21.7104 40.5465C20.6216 37.9181 20.3368 35.0258 20.8918 32.2354C21.4468 29.4451 22.8168 26.882 24.8285 24.8703C26.8403 22.8586 29.4034 21.4886 32.1937 20.9335C34.984 20.3785 37.8763 20.6634 40.5048 21.7521C43.1332 22.8408 45.3798 24.6845 46.9604 27.0501C48.541 29.4156 49.3846 32.1967 49.3846 35.0417C49.3803 38.8555 47.8634 42.5117 45.1667 45.2084C42.47 47.9051 38.8137 49.422 35 49.4264ZM36.9615 27.8494V42.8879C36.9615 43.2347 36.8238 43.5673 36.5785 43.8126C36.3333 44.0578 36.0007 44.1956 35.6539 44.1956C35.307 44.1956 34.9744 44.0578 34.7292 43.8126C34.4839 43.5673 34.3462 43.2347 34.3462 42.8879V30.2923L32.456 31.5519C32.3131 31.6474 32.1528 31.7138 31.9842 31.7473C31.8156 31.7808 31.6421 31.7807 31.4735 31.7471C31.305 31.7134 31.1447 31.6469 31.0019 31.5513C30.8591 31.4557 30.7365 31.3328 30.6412 31.1898C30.5459 31.0468 30.4797 30.8864 30.4464 30.7178C30.4132 30.5492 30.4135 30.3756 30.4473 30.2071C30.4811 30.0386 30.5479 29.8784 30.6437 29.7357C30.7395 29.5931 30.8624 29.4706 31.0056 29.3755L34.9287 26.7612C35.1256 26.63 35.3545 26.5547 35.5909 26.5433C35.8273 26.5319 36.0623 26.5849 36.271 26.6966C36.4796 26.8083 36.654 26.9745 36.7757 27.1775C36.8973 27.3805 36.9615 27.6128 36.9615 27.8494Z" fill="#F4511E"/>
                            </svg>
                            <div class="card-body ps-2 pe-0">
                                <p class="card-text m-0 fs-7">Monitor Shift 1</p>
                                <p class="card-text m-0 fs-7">07:00 - 15:00</p>
                                <div class="d-flex flex-row justify-content-between align-items-center">
                                    <h4 class="h4 mb-0">121</h4>
                                    <div class="d-flex flow-row justify-content-end align-items-center">
                                        <i class="fa-solid fa-circle-arrow-up fa-xs" style="color: #198754;"></i><p class="me-2 mb-0 text-middle fs-7 text-success">2</p>
                                        <i class="fa-solid fa-circle-arrow-down fa-xs" style="color: #dc3545;"></i><p class="mb-0 text-middle fs-7 text-danger">2</p></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mini-item card px-3 d-flex flex-row align-items-center border-0 shadow rounded-3">
                            <div class="disable-mini-item h-100 w-100 position-absolute m-0 rounded-3">

                            </div>
                            <svg width="45" height="45" viewBox="0 0 70 71" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect y="0.958252" width="70" height="70" rx="35" fill="#FBE9E7"/>
                                <path d="M35 18.9583C31.6377 18.9583 28.3509 19.9553 25.5553 21.8233C22.7597 23.6913 20.5807 26.3463 19.2941 29.4526C18.0074 32.559 17.6707 35.9771 18.3267 39.2748C18.9826 42.5725 20.6017 45.6016 22.9792 47.9791C25.3567 50.3566 28.3858 51.9756 31.6835 52.6316C34.9811 53.2875 38.3993 52.9509 41.5056 51.6642C44.612 50.3775 47.267 48.1986 49.135 45.4029C51.003 42.6073 52 39.3205 52 35.9582C51.9949 31.4511 50.2022 27.1301 47.0152 23.9431C43.8282 20.7561 39.5071 18.9634 35 18.9583ZM35 50.3429C32.155 50.3429 29.3739 49.4992 27.0083 47.9186C24.6428 46.338 22.7991 44.0914 21.7104 41.463C20.6216 38.8346 20.3368 35.9423 20.8918 33.1519C21.4468 30.3616 22.8168 27.7985 24.8285 25.7868C26.8403 23.7751 29.4034 22.4051 32.1937 21.85C34.984 21.295 37.8763 21.5799 40.5048 22.6686C43.1332 23.7573 45.3798 25.601 46.9604 27.9666C48.541 30.3321 49.3846 33.1132 49.3846 35.9582C49.3803 39.772 47.8634 43.4282 45.1667 46.1249C42.47 48.8217 38.8137 50.3386 35 50.3429ZM39.2995 35.0129L33.6918 42.4958H38.9231C39.2699 42.4958 39.6025 42.6335 39.8478 42.8788C40.093 43.124 40.2308 43.4566 40.2308 43.8034C40.2308 44.1503 40.093 44.4829 39.8478 44.7281C39.6025 44.9734 39.2699 45.1111 38.9231 45.1111H31.1288C31.1114 45.1118 31.094 45.1123 31.0768 45.1123C30.8317 45.1121 30.5915 45.0431 30.3837 44.9132C30.1759 44.7832 30.0088 44.5974 29.9014 44.3771C29.7941 44.1568 29.7508 43.9107 29.7764 43.6669C29.8021 43.4232 29.8957 43.1916 30.0467 42.9984L37.1855 33.4727C37.3852 33.1688 37.5193 32.8268 37.5794 32.4682C37.6395 32.1097 37.6242 31.7425 37.5345 31.3902C37.4447 31.0379 37.2826 30.7082 37.0583 30.4221C36.8341 30.1359 36.5526 29.8997 36.232 29.7284C35.9113 29.5571 35.5585 29.4545 35.1959 29.4272C34.8334 29.3999 34.4692 29.4484 34.1265 29.5697C33.7838 29.691 33.4701 29.8824 33.2055 30.1317C32.9409 30.381 32.7311 30.6827 32.5896 31.0175C32.5227 31.1757 32.4253 31.3191 32.303 31.4397C32.1806 31.5602 32.0358 31.6554 31.8766 31.72C31.7175 31.7845 31.5472 31.8171 31.3755 31.8158C31.2037 31.8145 31.034 31.7795 30.8758 31.7126C30.7176 31.6457 30.5742 31.5483 30.4537 31.426C30.3331 31.3036 30.2379 31.1588 30.1733 30.9996C30.1088 30.8405 30.0762 30.6702 30.0775 30.4985C30.0788 30.3267 30.1139 30.1569 30.1808 29.9988C30.4648 29.3268 30.8863 28.7216 31.4182 28.2222C31.95 27.7227 32.5805 27.3401 33.269 27.0988C33.9575 26.8575 34.6889 26.7628 35.4162 26.821C36.1434 26.8791 36.8505 27.0887 37.4919 27.4363C38.1334 27.7839 38.695 28.2619 39.1408 28.8395C39.5866 29.417 39.9066 30.0815 40.0803 30.7901C40.254 31.4987 40.2776 32.2358 40.1495 32.954C40.0215 33.6723 39.7446 34.3558 39.3367 34.9607C39.3247 34.9784 39.3124 34.9958 39.2995 35.0129Z" fill="#F4511E"/>
                            </svg>
                            <div class="card-body ps-1 pe-0">
                                <p class="card-text m-0 fs-7">Monitor Shift 2</p>
                                <p class="card-text m-0 fs-7">15:00 - 23:00</p>
                                <div class="d-flex flex-row justify-content-between align-items-center">
                                    <h4 class="h4 mb-0">121</h4>
                                    <div class="d-flex flow-row justify-content-end align-items-center">
                                        <i class="fa-solid fa-circle-arrow-up fa-xs" style="color: #198754;"></i><p class="me-2 mb-0 text-middle fs-7 text-success">2</p>
                                        <i class="fa-solid fa-circle-arrow-down fa-xs" style="color: #dc3545;"></i><p class="me-0 mb-0 text-middle fs-7 text-danger">2</p></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mini-item card px-3 d-flex flex-row align-items-center border-0 shadow rounded-3">
                            <div class="disable-mini-item h-100 w-100 position-absolute m-0 rounded-3">

                            </div>
                            <svg width="45" height="45" viewBox="0 0 70 71" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect y="0.875" width="70" height="70" rx="35" fill="#FBE9E7"/>
                                <path d="M35 18.875C31.6377 18.875 28.3509 19.872 25.5553 21.74C22.7597 23.608 20.5807 26.263 19.2941 29.3694C18.0074 32.4757 17.6707 35.8939 18.3267 39.1915C18.9826 42.4892 20.6017 45.5183 22.9792 47.8958C25.3567 50.2733 28.3858 51.8924 31.6835 52.5483C34.9811 53.2043 38.3993 52.8676 41.5056 51.5809C44.612 50.2943 47.267 48.1153 49.135 45.3197C51.003 42.5241 52 39.2373 52 35.875C51.9949 31.3679 50.2022 27.0468 47.0152 23.8598C43.8282 20.6728 39.5071 18.8801 35 18.875ZM35 50.2596C32.155 50.2596 29.3739 49.416 27.0083 47.8354C24.6428 46.2548 22.7991 44.0082 21.7104 41.3798C20.6216 38.7513 20.3368 35.859 20.8918 33.0687C21.4468 30.2784 22.8168 27.7153 24.8285 25.7035C26.8403 23.6918 29.4034 22.3218 32.1937 21.7668C34.984 21.2117 37.8763 21.4966 40.5048 22.5853C43.1332 23.6741 45.3798 25.5178 46.9604 27.8833C48.541 30.2489 49.3846 33.03 49.3846 35.875C49.3803 39.6887 47.8634 43.345 45.1667 46.0417C42.47 48.7384 38.8137 50.2553 35 50.2596ZM38.5077 35.6371C39.6107 36.7409 40.2302 38.2374 40.2299 39.7978C40.2297 41.3582 39.6097 42.8546 38.5063 43.9579C37.403 45.0613 35.9066 45.6812 34.3462 45.6814C32.7858 45.6817 31.2892 45.0622 30.1856 43.9592C29.9403 43.7139 29.8025 43.3813 29.8025 43.0344C29.8025 42.6876 29.9403 42.3549 30.1856 42.1097C30.4308 41.8644 30.7635 41.7266 31.1103 41.7266C31.4571 41.7266 31.7898 41.8644 32.035 42.1097C32.4152 42.4898 32.8832 42.7704 33.3977 42.9264C33.9122 43.0825 34.4572 43.1092 34.9845 43.0043C35.5118 42.8995 36.005 42.6661 36.4206 42.3251C36.8362 41.984 37.1612 41.5457 37.367 41.049C37.5727 40.5523 37.6528 40.0126 37.6001 39.4775C37.5474 38.9425 37.3635 38.4287 37.0648 37.9817C36.7662 37.5347 36.3618 37.1683 35.8877 36.9149C35.4136 36.6614 34.8843 36.5288 34.3466 36.5288C34.1074 36.5289 33.8728 36.4632 33.6683 36.3392C33.4638 36.2151 33.2972 36.0373 33.1867 35.8251C33.0763 35.613 33.0261 35.3746 33.0417 35.1359C33.0573 34.8972 33.138 34.6673 33.2752 34.4714L36.4116 29.9891H31.0764C30.7296 29.9891 30.397 29.8513 30.1518 29.6061C29.9065 29.3609 29.7688 29.0282 29.7688 28.6814C29.7688 28.3346 29.9065 28.002 30.1518 27.7567C30.397 27.5115 30.7296 27.3737 31.0764 27.3737H38.9226C39.1618 27.3737 39.3964 27.4393 39.6009 27.5634C39.8055 27.6875 39.972 27.8653 40.0825 28.0774C40.193 28.2896 40.2432 28.528 40.2276 28.7667C40.212 29.0054 40.1312 29.2352 39.994 29.4312L36.5583 34.3414C37.2885 34.6382 37.9514 35.0788 38.5077 35.6371Z" fill="#F4511E"/>
                            </svg>
                            <div class="card-body  ps-1 pe-0">
                                <p class="card-text m-0 fs-7">Monitor Shift 3</p>
                                <p class="card-text m-0 fs-7">23:00 - 07:00</p>
                                <div class="d-flex flex-row justify-content-between align-items-center">
                                    <h4 class="h4 mb-0">121</h4>
                                    <div class="d-flex flow-row justify-content-end align-items-center">
                                        <i class="fa-solid fa-circle-arrow-up fa-xs" style="color: #198754;"></i><p class="me-2 mb-0 text-middle fs-7 text-success">2</p>
                                        <i class="fa-solid fa-circle-arrow-down fa-xs" style="color: #dc3545;"></i><p class="me-0 mb-0 text-middle fs-7 text-danger">2</p></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="pluggingMonitoring-right" class="col-lg-95 col-md-12 col-sm-12 col-12 h-100">
                    <div class="row h-100">
                        <div id="pluggingMonitoringTable" class="col col-lg-6 col-md-12 col-sm-12 col-12 pe-35 pb-1 h-100">
                            <div class="row shadow rounded-3 h-100 px-3">
                                <div class="row pt-3 px-1 pe-3">
                                    <h3 class="h3 col col-lg-7 col-md-7 col-sm-6 col-7 text-start fw-bold">Duration</h3>
                                    <div class="col col-lg-5 col-md-5 col-sm-6 col-5 p-0">
                                        <select id="owekk" class="form-select" aria-label="Default select example">
                                            <option selected>Select Year</option>
                                            <option value="200, 150, 400, 200, 180, 400, 200, 800, 300, 700, 100, 200">2023</option>
                                            <option value="182, 713, 283, 85, 78, 192, 495, 193, 631, 531, 123, 123">2022</option>
                                            <option value="942, 123, 34, 93, 72, 94, 17, 844, 154, 987, 273, 874">2021</option>
                                            <option value="120, 753, 758, 947, 364, 346, 187, 799, 78, 874, 87, 857">2020</option>
                                            <option value="874, 87, 875, 167, 238, 984, 174, 179, 875, 985, 875, 198">2019</option>
                                            <option value="5year">Last 5 Year</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="graph-container m-0 row text-primaryDark border rounded-3 overflow-scroll" style="border-color: #9DB2BF !important">
                                    <table class="table table-fix-head table-responsive table-primaryDark table-striped table-hover">
                                        <thead class="align-middle text-center">
                                            <tr>
                                                <th scope="col">No Container</th>
                                                <th scope="col">Lama Plugging</th>
                                            </tr>
                                        </thead>
                                        <tbody class="">
                                            <tr>
                                                <td scope="row">HKLO9070</td>
                                                <td class="text-center">07:30 - 16:00 (510 Menit)</td>
                                            </tr>
                                            <tr>
                                                <td scope="row">HKLO9070</td>
                                                <td class="text-center">07:30 - 16:00 (510 Menit)</td>
                                            </tr>
                                            <tr>
                                                <td scope="row">HKLO9070</td>
                                                <td class="text-center">07:30 - 16:00 (510 Menit)</td>
                                            </tr>
                                            <tr>
                                                <td scope="row">HKLO9070</td>
                                                <td class="text-center">07:30 - 16:00 (510 Menit)</td>
                                            </tr>
                                            <tr>
                                                <td scope="row">HKLO9070</td>
                                                <td class="text-center">07:30 - 16:00 (510 Menit)</td>
                                            </tr>
                                            <tr>
                                                <td scope="row">HKLO9070</td>
                                                <td class="text-center">07:30 - 16:00 (510 Menit)</td>
                                            </tr>
                                            <tr>
                                                <td scope="row">HKLO9070</td>
                                                <td class="text-center">07:30 - 16:00 (510 Menit)</td>
                                            </tr>
                                            <tr>
                                                <td scope="row">HKLO9070</td>
                                                <td class="text-center">07:30 - 16:00 (510 Menit)</td>
                                            </tr>
                                            <tr>
                                                <td scope="row">HKLO9070</td>
                                                <td class="text-center">07:30 - 16:00 (510 Menit)</td>
                                            </tr>
                                            <tr>
                                                <td scope="row">HKLO9070</td>
                                                <td class="text-center">07:30 - 16:00 (510 Menit)</td>
                                            </tr>
                                            <tr>
                                                <td scope="row">HKLO9070</td>
                                                <td class="text-center">07:30 - 16:00 (510 Menit)</td>
                                            </tr>
                                            <tr>
                                                <td scope="row">HKLO9070</td>
                                                <td class="text-center">07:30 - 16:00 (510 Menit)</td>
                                            </tr>
                                            <tr>
                                                <td scope="row">HKLO9070</td>
                                                <td class="text-center">07:30 - 16:00 (510 Menit)</td>
                                            </tr>
                                            <tr>
                                                <td scope="row">HKLO9070</td>
                                                <td class="text-center">07:30 - 16:00 (510 Menit)</td>
                                            </tr>
                                            <tr>
                                                <td scope="row">HKLO9070</td>
                                                <td class="text-center">07:30 - 16:00 (510 Menit)</td>
                                            </tr>
                                            <tr>
                                                <td scope="row">HKLO9070</td>
                                                <td class="text-center">07:30 - 16:00 (510 Menit)</td>
                                            </tr>
                                            <tr>
                                                <td scope="row">HKLO9070</td>
                                                <td class="text-center">07:30 - 16:00 (510 Menit)</td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div id="pluggingMonitoringChart" class="col col-lg-6 col-md-12 col-sm-12 col-12 pb-1 pe-35 h-100">
                            <div class="row shadow rounded-3 h-100 px-3">
                                <div class="row pt-3 px-1 pe-3">
                                    <h3 class="h3 col-12 text-start fw-bold">Total Container Monitored</h3>
                                </div>
                                <div class="graph-container row text-primaryDark" style="width: 100%">
                                    <canvas id="totalMonitoringTiapShift" class="ms-2 p-1"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- Sesi Plugging & Monitoring Ends --}}


        {{-- Sesi Stuffing & Stripping Start --}}
        <div class="row">
            <h3 class="h3">Stuffing & Stripping</h3>
        </div>
        <section id="stuffingStripping" class="mb-4" style="width: 100%">
            <div class="row p-2 sub-menu h-100">
                <div id="stuffingStripping-left" class="col col-lg-25 col-md-12 col-sm-12 col-12 ps-2 pe-1 container" >
                    <div class="mini-item-container row g-2 d-flex justify-content-between h-100 w-100">
                        <div class="mini-item card p-0 d-flex flex-row align-items-center justify-content-between border-0 mb-2 w-100">
                            <div class="row w-100 m-0">
                                <div class="col col-lg-3 col-md-3 col-sm-4 col-5 p-0 h-50 w-100">
                                    <select id="iighk" class="form-select" aria-label="Default select example">
                                        <option selected>Select Year</option>
                                        <option value="200, 150, 400, 200, 180, 400, 200, 800, 300, 700, 100, 200">2023</option>
                                        <option value="182, 713, 283, 85, 78, 192, 495, 193, 631, 531, 123, 123">2022</option>
                                        <option value="942, 123, 34, 93, 72, 94, 17, 844, 154, 987, 273, 874">2021</option>
                                        <option value="120, 753, 758, 947, 364, 346, 187, 799, 78, 874, 87, 857">2020</option>
                                        <option value="874, 87, 875, 167, 238, 984, 174, 179, 875, 985, 875, 198">2019</option>
                                        <option value="5year">Last 5 Year</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="mini-item card px-3 d-flex flex-row justify-content-between align-items-center border-0 shadow rounded-3">
                            <svg width="45" height="45" viewBox="0 0 70 71" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect y="0.458374" width="70" height="70" rx="35" fill="#E1F5FE"/>
                                <path d="M35.7194 36.6259H31.8441C31.5872 36.6259 31.3407 36.7279 31.159 36.9096C30.9774 37.0913 30.8753 37.3377 30.8753 37.5947C30.8753 37.8516 30.9774 38.0981 31.159 38.2797C31.3407 38.4614 31.5872 38.5635 31.8441 38.5635H35.7194C35.9763 38.5635 36.2228 38.4614 36.4045 38.2797C36.5861 38.0981 36.6882 37.8516 36.6882 37.5947C36.6882 37.3377 36.5861 37.0913 36.4045 36.9096C36.2228 36.7279 35.9763 36.6259 35.7194 36.6259ZM39.5947 26.9376H38.4515C38.2516 26.3723 37.8817 25.8826 37.3926 25.5357C36.9035 25.1888 36.319 25.0017 35.7194 25H33.7818C33.1821 25.0017 32.5977 25.1888 32.1085 25.5357C31.6194 25.8826 31.2496 26.3723 31.0497 26.9376H29.9065C29.1356 26.9376 28.3964 27.2439 27.8513 27.7889C27.3062 28.334 27 29.0733 27 29.8441V41.47C27 42.2408 27.3062 42.9801 27.8513 43.5252C28.3964 44.0702 29.1356 44.3764 29.9065 44.3764H39.5947C40.3655 44.3764 41.1048 44.0702 41.6499 43.5252C42.1949 42.9801 42.5012 42.2408 42.5012 41.47V29.8441C42.5012 29.0733 42.1949 28.334 41.6499 27.7889C41.1048 27.2439 40.3655 26.9376 39.5947 26.9376ZM32.8129 27.9065C32.8129 27.6495 32.915 27.4031 33.0967 27.2214C33.2784 27.0397 33.5248 26.9376 33.7818 26.9376H35.7194C35.9763 26.9376 36.2228 27.0397 36.4045 27.2214C36.5861 27.4031 36.6882 27.6495 36.6882 27.9065V28.8753H32.8129V27.9065ZM40.5635 41.47C40.5635 41.7269 40.4614 41.9733 40.2797 42.155C40.0981 42.3367 39.8516 42.4388 39.5947 42.4388H29.9065C29.6495 42.4388 29.4031 42.3367 29.2214 42.155C29.0397 41.9733 28.9376 41.7269 28.9376 41.47V29.8441C28.9376 29.5872 29.0397 29.3407 29.2214 29.159C29.4031 28.9774 29.6495 28.8753 29.9065 28.8753H30.8753V29.8441C30.8753 30.1011 30.9774 30.3475 31.159 30.5292C31.3407 30.7109 31.5872 30.8129 31.8441 30.8129H37.657C37.914 30.8129 38.1604 30.7109 38.3421 30.5292C38.5238 30.3475 38.6259 30.1011 38.6259 29.8441V28.8753H39.5947C39.8516 28.8753 40.0981 28.9774 40.2797 29.159C40.4614 29.3407 40.5635 29.5872 40.5635 29.8441V41.47ZM37.657 32.7506H31.8441C31.5872 32.7506 31.3407 32.8526 31.159 33.0343C30.9774 33.216 30.8753 33.4625 30.8753 33.7194C30.8753 33.9763 30.9774 34.2228 31.159 34.4045C31.3407 34.5861 31.5872 34.6882 31.8441 34.6882H37.657C37.914 34.6882 38.1604 34.5861 38.3421 34.4045C38.5238 34.2228 38.6259 33.9763 38.6259 33.7194C38.6259 33.4625 38.5238 33.216 38.3421 33.0343C38.1604 32.8526 37.914 32.7506 37.657 32.7506Z" fill="#039BE5"/>
                                <path d="M35 52.4584C44.3888 52.4584 52 44.8471 52 35.4584C52 26.0695 44.3888 18.4584 35 18.4584C25.6112 18.4584 18 26.0695 18 35.4584C18 44.8471 25.6112 52.4584 35 52.4584Z" stroke="#039BE5" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>

                            <div class="card-body ps-1 pe-0">
                                <p class="card-text m-0 fs-7">Total Order</p>
                                <h3 class="h3 mb-0">160</h3>
                            </div>
                        </div>
                        <div class="mini-item card px-3 d-flex flex-row justify-content-between align-items-center border-0 shadow rounded-3">
                            <svg width="45" height="45" viewBox="0 0 70 71" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect y="0.375" width="70" height="70" rx="35" fill="#E8F5E9"/>
                                <path d="M35 18.375C25.6111 18.375 18 25.9861 18 35.375C18 44.7639 25.6111 52.375 35 52.375C44.3889 52.375 52 44.7639 52 35.375C52 25.9861 44.3889 18.375 35 18.375ZM35 21.6653C42.5768 21.6653 48.7097 27.797 48.7097 35.375C48.7097 42.9518 42.578 49.0847 35 49.0847C27.4232 49.0847 21.2903 42.953 21.2903 35.375C21.2903 27.7982 27.422 21.6653 35 21.6653ZM44.6108 30.5949L43.066 29.0376C42.746 28.7151 42.2252 28.713 41.9027 29.033L32.2132 38.6446L28.1146 34.5127C27.7947 34.1901 27.2738 34.188 26.9513 34.5079L25.394 36.0527C25.0715 36.3727 25.0693 36.8935 25.3893 37.2161L31.6122 43.4893C31.9321 43.8119 32.4529 43.814 32.7755 43.494L44.6062 31.7583C44.9286 31.4383 44.9307 30.9174 44.6108 30.5949Z" fill="#43A047"/>
                            </svg>
                            <div class="card-body ps-1 pe-0">
                                <p class="card-text m-0 fs-7">Finish Order</p>
                                <h3 class="h3 mb-0">160</h3>
                            </div>
                        </div>
                        <div class="mini-item mini-item-3 card px-3 d-flex flex-row justify-content-between align-items-center border-0 shadow rounded-3">
                            <svg width="45" height="45" viewBox="0 0 70 71" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect y="0.291687" width="70" height="70" rx="35" fill="#FFEBEE"/>
                                <path d="M36.7469 33.6183V24.1715C36.7469 23.9455 36.6571 23.7287 36.4973 23.5689C36.3375 23.4091 36.1208 23.3193 35.8948 23.3193H34.1905C33.9645 23.3193 33.7478 23.4091 33.588 23.5689C33.4282 23.7287 33.3384 23.9455 33.3384 24.1715V34.8965C33.3384 35.1224 33.4282 35.3391 33.5881 35.4989L38.9565 40.8674C39.1163 41.0271 39.333 41.1169 39.559 41.1169C39.7849 41.1169 40.0016 41.0271 40.1614 40.8674L41.2999 39.7289C41.4596 39.5691 41.5494 39.3524 41.5494 39.1265C41.5494 38.9005 41.4596 38.6838 41.2999 38.524L36.9932 34.2173C36.8355 34.0578 36.747 33.8426 36.7469 33.6183Z" fill="#E53935"/>
                                <path d="M48.7304 36.9535C48.4123 39.5181 47.3804 41.9418 45.7522 43.9487C44.124 45.9555 41.965 47.4648 39.521 48.3047C37.0771 49.1445 34.4463 49.2812 31.9285 48.6991C29.4106 48.117 27.1069 46.8395 25.2795 45.0122C23.4522 43.1848 22.1747 40.881 21.5926 38.3632C21.0105 35.8453 21.1472 33.2146 21.987 30.7707C22.8269 28.3267 24.3362 26.1677 26.343 24.5395C28.3499 22.9113 30.7736 21.8794 33.3382 21.5613V18.2917C30.1289 18.6143 27.0771 19.841 24.5373 21.8292C21.9975 23.8174 20.0741 26.4855 18.9905 29.5235C17.9069 32.5615 17.7077 35.8447 18.416 38.9914C19.1243 42.1381 20.711 45.0192 22.9917 47.3C25.2724 49.5807 28.1536 51.1674 31.3003 51.8757C34.447 52.584 37.7301 52.3848 40.7681 51.3012C43.8061 50.2176 46.4743 48.2942 48.4625 45.7544C50.4507 43.2146 51.6774 40.1628 52 36.9535H48.7304ZM42.0053 19.7054C40.3404 18.9531 38.5645 18.4757 36.7468 18.2917V21.5613C37.9963 21.7188 39.2182 22.048 40.3777 22.5396L42.0053 19.7054ZM46.1424 27.0849L48.992 25.4914C47.889 23.9113 46.5275 22.5285 44.9648 21.4011L43.3312 24.2456C44.3994 25.0525 45.3462 26.0087 46.1424 27.0849ZM47.8032 30.0631C48.2652 31.1775 48.577 32.3484 48.7304 33.5449H52C51.823 31.7914 51.3728 30.0763 50.6656 28.4619L47.8032 30.0631Z" fill="#E53935"/>
                            </svg>
                            <div class="card-body ps-2 pe-0">
                                <p class="card-text m-0 fs-7">Pending Order</p>
                                <h3 class="h3 mb-0">160</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="stuffingStripping-right" class="col-lg-95 col-md-12 col-sm-12 col-12 pe-35 pb-1 h-100">
                    <div class="row pt-3 px-3 shadow rounded-3 h-100">
                        <div class="row justify-content-between mt-0 me-0 mb-3 ms-0 p-0">
                            <h3 class="h3 col-lg-9 col-md-9 col-sm-12 col-12 text-start fw-bold">Total Order</h3>
                            <div class="col col-lg-3 col-md-3 col-sm-12 col-12 p-0">
                                <select id="stuffingStrippingRightMenu" class="form-select" aria-label="Default select example">
                                    <option selected value="[200, 150, 400, 200, 180, 400, 200, 800, 300, 700, 100, 200]">2023</option>
                                    <option value="[182, 713, 283, 85, 78, 192, 495, 193, 631, 531, 123, 123]">2022</option>
                                    <option value="[942, 123, 34, 93, 72, 94, 17, 844, 154, 987, 273, 874]">2021</option>
                                    <option value="[120, 753, 758, 947, 364, 346, 187, 799, 78, 874, 87, 857]">2020</option>
                                    <option value="[874, 87, 875, 167, 238, 984, 174, 179, 875, 985, 875, 198]">2019</option>
                                    <option value="[[2092, 9385, 4712, 7512, 6723], [2019, 2020, 2021, 2022, 2023]]">Last 5 Year</option>
                                </select>
                            </div>
                        </div>
                        <div class="graph-container text-primaryDark w-100">
                            <canvas id="totalOrderStuffingStripping"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- Sesi Stuffing & Stripping Ends --}}
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://unpkg.com/chart.js-plugin-labels-dv/dist/chartjs-plugin-labels.min.js"></script>
    <script  src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        // Datepicker

        config = {
            enableTime: true,
            altInput: true,
            altFormat: "F j, Y",
        }
        flatpickr("input[type=date]", {});
    </script>
    <script>
        const monthNames = [
            'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni',
            'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'
        ];
        Chart.defaults.font.size = 12;
        var numericMonths = <?php echo json_encode($months); ?>;
        const monthLabels = numericMonths.map(monthNumber => monthNames[monthNumber - 1]);
        const n = monthLabels.length;

        function handleHover(evt, item, legend) {
            legend.chart.data.datasets[0].backgroundColor.forEach((color, index, colors) => {
                colors[index] = index === item.index || color.length === 9 ? color : color + '4D';
            });
            legend.chart.update();
        }

        function handleLeave(evt, item, legend) {
            legend.chart.data.datasets[0].backgroundColor.forEach((color, index, colors) => {
                colors[index] = color.length === 9 ? color.slice(0, -2) : color;
            });
            legend.chart.update();
        }

        const labelBulan = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember']

        // Lift In Lift Off Chart Start
        const dataLolo = {
            labels: labelBulan,
            datasets: [
                {
                    label: 'Total Order',
                    data: [200, 150, 400, 200, 180, 400, 200, 800, 300, 700, 100, 200],
                    borderColor: 'rgba(255, 205, 210, 0.8)',
                    backgroundColor:(context) => {
                        const bgColor = [
                            'rgba(39, 55, 77, 1)',
                            'rgba(39, 55, 77, 0.6)',
                            'rgba(39, 55, 77, 0.4)',
                        ];
                        if(!context.chart.chartArea){
                            return;
                        }
                        const {ctx, data, chartArea: {top, bottom}} = context.chart;
                        const gradientBg = ctx.createLinearGradient(0, top, 0, bottom);
                        gradientBg.addColorStop(0, bgColor[0])
                        gradientBg.addColorStop(0.5, bgColor[1])
                        gradientBg.addColorStop(1, bgColor[2])
                        return gradientBg;
                    },
                    order: 1,
                    borderRadius: 4,

                },
                {
                    label: 'Downtime',
                    data: [100, 200, 300, 100, 200, 300, 100, 600, 288, 300, 670, 281],
                    borderColor: 'rgba(39, 55, 77, 1)',
                    backgroundColor: 'rgba(255,255,255, 1)',
                    type: 'line',
                    order: 0
                }
            ]
        };

        const configLiftInLiftOff = {
            type: 'bar',
            data: dataLolo,
            options: {
                responsive: true,
                aspectRatio: 1.3,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'bottom',
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                        },
                        x: {
                            beginAtZero: true,
                        },
                    },
                },
            },
        };

        const LiftInLiftOffChart = new Chart(document.getElementById('totalOrderVsDowntime'), configLiftInLiftOff)

        const LiftInLiftOffOption = document.getElementById('liftInLiftOffRightMenu');
        LiftInLiftOffOption.addEventListener('change', LiftInLiftOffTracker);

        function LiftInLiftOffTracker() {
            var selectedValue = JSON.parse(LiftInLiftOffOption.value);
            var totalOrder = selectedValue[0];
            var downtime = selectedValue[1];

            var x = JSON.parse(JSON.stringify(selectedValue[0]).split(','));
            var x2 = JSON.parse(JSON.stringify(selectedValue[1]).split(','));

            if (selectedValue.length === 3) {
                var year = selectedValue[2];
                var y = JSON.parse(JSON.stringify(year).split(','));

                LiftInLiftOffChart.data.datasets[0].data = x;
                LiftInLiftOffChart.data.datasets[1].data = x2;
                LiftInLiftOffChart.data.labels = y;
            } else {
                LiftInLiftOffChart.data.datasets[0].data = x;
                LiftInLiftOffChart.data.datasets[1].data = x2;
                LiftInLiftOffChart.data.labels = labelBulan;
            }
            LiftInLiftOffChart.update();

        }
        // Lift In Lift Off Chart Ends


        // Storage Warehouse Start
        const StorageWarehouseLabels = ['Sisa Luas', 'PT Suka Maju', 'PT Anugerah Dwitama', 'PT Pelita Jaya', 'PT Untung Bersama', 'PT Harapan Sentosa','PT Dala Tiga tbk', 'PT Jupiter Mineral', 'PT Dana Silika Primatama', 'PT Lestari Adhitama'];
        const dataLuasStorageWarehouse = {
            labels: StorageWarehouseLabels,
            datasets: [{
                label: 'My First Dataset',
                data: [200, 150, 400, 200, 180, 400, 200, 800, 300, 700, 100],
                hoverOffset: 4
            }]
        };
        const doughnutLabels = {
            id: 'doughnutLabel',
            beforeDatasetDraw(chart, args, pluginOptions) {
                const { ctx, data } = chart;

                ctx.save();
                const xCoor = chart.getDatasetMeta(0).data[0].x;
                const yCoor = chart.getDatasetMeta(0).data[0].y;

                ctx.font = 'bold 14px sans-serif';
                ctx.fillStyle = '#27374D';
                ctx.textAlign = 'center';
                ctx.fillText(`${data.labels[0]}:`, xCoor, yCoor-10);
                ctx.fillText(`${data.datasets[0].data[0]}m2`, xCoor, yCoor+10);
            },
        };
        const configDataLuasStorageWarehouse = {
            type: 'doughnut',
            data: dataLuasStorageWarehouse,
            options: {
                responsive: true,
                aspectRatio: 1,
                maintainAspectRatio: false,
                plugins: {
                    labels: {
                        render: (args) => {
                            if (args.percentage < 7){
                                return '';
                            };
                            return args.percentage +'%';
                        }
                    },
                    legend: {
                        display: false,
                        position: 'bottom',
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                        },
                        x: {
                            beginAtZero: true,
                        },
                    },
                },
            },
            plugins: [doughnutLabels]
        };

        const StorageWarehouseChart = new Chart(document.getElementById('LuasStorageWarehouse'), configDataLuasStorageWarehouse);
        const StorageWarehouseOption = document.getElementById('storageWarehouseMiddleMenu');
        StorageWarehouseOption.addEventListener('change', StorageWarehouseTracker);

        function StorageWarehouseTracker() {
            var selectedValue = JSON.parse(StorageWarehouseOption.value);

            if (selectedValue.length === 2) {
                var totalOrder = selectedValue[0];
                var year = selectedValue[1];

                var x = JSON.parse(JSON.stringify(totalOrder).split(','));
                var y = JSON.parse(JSON.stringify(year).split(','));
                StorageWarehouseChart.data.datasets[0].data = x;
                StorageWarehouseChart.data.labels = y;
            } else {
                var totalOrder = selectedValue;
                var x = JSON.parse(JSON.stringify(totalOrder).split(','));
                StorageWarehouseChart.data.datasets[0].data = x;
                StorageWarehouseChart.data.labels = StorageWarehouseLabels;
            }
            StorageWarehouseChart.update();
        };
        // Storage Warehouse Ends


        // Trucking Chart Start
        const dataTrucking = {
            labels: labelBulan,
            datasets: [
                {
                    label: 'Total Order',
                    data: [200, 150, 400, 200, 180, 400, 200, 800, 300, 700, 100, 200],
                    borderColor:['rgba(39, 55, 77, 1)'],
                    backgroundColor:(context) => {
                        const bgColor = [
                            'rgba(39, 55, 77, 1)',
                            'rgba(39, 55, 77, 0.1)',
                        ];
                        if(!context.chart.chartArea){
                            return;
                        }
                        const {ctx, data, chartArea: {top, bottom}} = context.chart;
                        const gradientBg = ctx.createLinearGradient(0, top, 0, bottom);
                        gradientBg.addColorStop(0, bgColor[0])
                        gradientBg.addColorStop(1, bgColor[1])
                        return gradientBg;
                    },
                    borderWidth: 3,
                    fill: {
                        target: {
                            value: 0,
                        },
                    }
                },
            ]
        };

        const configTrucking = {
            type: 'line',
            data: dataTrucking,
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false,
                        position: 'bottom',
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                        },
                        x: {
                            beginAtZero: true,
                        },
                    },
                },
            },
        };

        const truckingChart = new Chart(document.getElementById('totalOrderTrucking'), configTrucking);

        const truckingOption = document.getElementById('truckingChartOption');
        truckingOption.addEventListener('change', truckingTracker);

        function truckingTracker() {
            var selectedValue = JSON.parse(truckingOption.value);

            if (selectedValue.length === 2) {
                var totalOrder = selectedValue[0];
                var year = selectedValue[1];

                var x = JSON.parse(JSON.stringify(totalOrder).split(','));
                var y = JSON.parse(JSON.stringify(year).split(','));
                truckingChart.data.datasets[0].data = x;
                truckingChart.data.labels = y;
            } else {
                var totalOrder = selectedValue;
                var x = JSON.parse(JSON.stringify(totalOrder).split(','));
                truckingChart.data.datasets[0].data = x;
                truckingChart.data.labels = labelBulan;
            }
            truckingChart.update();

        }
        // Trucking Chart Ends


        // Plugging & Monitoring Start
        const labelPluggingMonitoring = ['Shift 1', 'Shift 2', 'Shift 3'];

        const dataPluggingMonitoring = {
            labels: labelPluggingMonitoring,
            datasets: [
                {
                    label: 'Total Monitoring Tiap Shift',
                    data:[120, 110, 115],
                    backgroundColor:[
                        'rgba(244, 143, 177, 0.6)',
                        'rgba(206, 147, 216, 0.6)',
                        'rgba(128, 222, 234, 0.6)',
                    ],
                    borderColor:[
                        'rgba(244, 143, 177, 0.6)',
                        'rgba(206, 147, 216, 0.6)',
                        'rgba(128, 222, 234, 0.6)',
                    ],
                    borderRadius: 4,
                    borderWidth: 3.5,
                    fill: {
                        target: {
                            value: 0,
                        },
                    }
                },
            ],
        };
        const configPluggingMonitoring = {
            type: 'bar',
            data: dataPluggingMonitoring,
            options: {
                responsive: true,
                aspectRatio: 1.3,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false,
                        position: 'bottom',
                        onHover: handleHover,
                        onLeave: handleLeave,
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                        },
                        x: {
                            beginAtZero: true,
                        }
                    }
                }
            }
        };
        const pluggingMonitoringChart = new Chart(document.getElementById('totalMonitoringTiapShift'), configPluggingMonitoring);
        // Plugging & Monitoring Ends


        // Stuffing & Stripping Chart Start
        const dataStuffingStripping = {
            labels: labelBulan,
            datasets: [
                {
                    label: 'Total Order',
                    data: [200, 150, 400, 200, 180, 400, 200, 800, 300, 700, 100, 200],
                    borderColor:['rgba(39, 55, 77, 1)'],
                    backgroundColor:(context) => {
                        const bgColor = [
                            'rgba(39, 55, 77, 1)',
                            'rgba(39, 55, 77, 0.1)',
                        ];
                        if(!context.chart.chartArea){
                            return;
                        }
                        const {ctx, data, chartArea: {top, bottom}} = context.chart;
                        const gradientBg = ctx.createLinearGradient(0, top, 0, bottom);
                        gradientBg.addColorStop(0, bgColor[0])
                        gradientBg.addColorStop(1, bgColor[1])
                        return gradientBg;
                    },
                    borderWidth: 3,
                    fill: {
                        target: {
                            value: 0,
                        },
                    }
                },
            ]
        };

        const configStuffingStripping = {
            type: 'line',
            data: dataStuffingStripping,
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false,
                        position: 'bottom',
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                        },
                        x: {
                            beginAtZero: true,
                        },
                    },
                },
            },
        };

        const stuffingStrippingChart = new Chart(document.getElementById('totalOrderStuffingStripping'), configStuffingStripping);
        const stuffingStrippingOption = document.getElementById('stuffingStrippingRightMenu');
        stuffingStrippingOption.addEventListener('change', stuffingStrippingTracker);

        function stuffingStrippingTracker() {
            var selectedValue = JSON.parse(stuffingStrippingOption.value);

            if (selectedValue.length === 2) {
                var totalOrder = selectedValue[0];
                var year = selectedValue[1];

                var x = JSON.parse(JSON.stringify(totalOrder).split(','));
                var y = JSON.parse(JSON.stringify(year).split(','));
                stuffingStrippingChart.data.datasets[0].data = x;
                stuffingStrippingChart.data.labels = y;
            } else {
                var totalOrder = selectedValue;
                var x = JSON.parse(JSON.stringify(totalOrder).split(','));
                stuffingStrippingChart.data.datasets[0].data = x;
                stuffingStrippingChart.data.labels = labelBulan;
            }
            stuffingStrippingChart.update();

        }
        // Stuffing & Stripping Chart Ends

        // if(window.myCharts != undefined)
        // window.myCharts.destroy();
        // window.myCharts = {
        //     chart1: chart1,
        //     chart2: chart2,
        //     chart3: chart3,
        // };

        // const ctx1 = document.getElementById('totalDamageChart');
        // var chart1 = new Chart(ctx1, {
        //     type: 'line',
        //     data: {
        //         labels: monthLabels,
        //         datasets: [{
        //             label: 'Total Damage',
        //             data: <?php echo json_encode($amount); ?>,
        //             borderWidth: 3,
        //             backgroundColor:(context) => {
        //                 const bgColor = [
        //                     'rgba(39, 55, 77, 0.7)',
        //                     'rgba(39, 55, 77, 0.4)',
        //                     'rgba(39, 55, 77, 0.0)',
        //                 ];
        //                 if(!context.chart.chartArea){
        //                     return;
        //                 }
        //                 const {ctx, data, chartArea: {top, bottom}} = context.chart;
        //                 const gradientBg = ctx.createLinearGradient(0, top, 0, bottom);
        //                 gradientBg.addColorStop(0, bgColor[0])
        //                 gradientBg.addColorStop(0.5, bgColor[1])
        //                 gradientBg.addColorStop(1, bgColor[2])
        //                 return gradientBg;
        //             },
        //             borderColor:(context) => {
        //                 const bgColor = [
        //                     'rgba(39, 55, 77, 1)',
        //                     'rgba(39, 55, 77, 0.8)',
        //                     'rgba(39, 55, 77, 0.3)',
        //                 ];
        //                 if(!context.chart.chartArea){
        //                     return;
        //                 }
        //                 const {ctx, data, chartArea: {top, bottom}} = context.chart;
        //                 const gradientBg = ctx.createLinearGradient(0, top, 0, bottom);
        //                 gradientBg.addColorStop(0, bgColor[2])
        //                 gradientBg.addColorStop(0.5, bgColor[1])
        //                 gradientBg.addColorStop(1, bgColor[0])
        //                 return gradientBg;
        //             },
        //             tension: 0.4,
        //             pointRadius: 0,
        //             pointHitRadius: 10,
        //             hoverPointRadius: 0,
        //             fill: {
        //                 target: {
        //                     value: 9.33,
        //                 },
        //             }
        //         }]
        //     },
        //     options: {
        //         maintainAspectRatio: false,
        //         plugins: {
        //             legend: {
        //                 display: false,
        //                 position: 'bottom',
        //             },
        //         },
        //         scales: {
        //             y: {
        //                 beginAtZero: true,
        //             },
        //             x: {
        //                 beginAtZero: true,
        //             },
        //         }
        //     }
        // });

        // const ctx2 = document.getElementById('top10DamageLocation');
        // var chart2 = new Chart(ctx2, {
        //     type: 'bar',
        //     data: {
        //         labels: monthLabels,
        //         datasets: [
        //             {
        //                 label: monthLabels,
        //                 data: <?php echo json_encode($amount); ?>,
        //                 borderWidth: 3.5,
        //                 backgroundColor: [
        //                     'rgba(255, 205, 210, 0.8)',
        //                     'rgba(248, 187, 208, 0.8)',
        //                     'rgba(225, 190, 231, 0.8)',
        //                     'rgba(209, 196, 233, 0.8)',
        //                     'rgba(187, 222, 251, 0.8)',
        //                     'rgba(178, 235, 242, 0.8)',
        //                     'rgba(200, 230, 201, 0.8)',
        //                     'rgba(220, 237, 200, 0.8)',
        //                     'rgba(255, 249, 196, 0.8)',
        //                     'rgba(255, 224, 178, 0.8)'
        //                 ],
        //                 borderColor: [
        //                     'rgba(255, 205, 210, 1)',
        //                     'rgba(248, 187, 208, 1)',
        //                     'rgba(225, 190, 231, 1)',
        //                     'rgba(209, 196, 233, 1)',
        //                     'rgba(187, 222, 251, 1)',
        //                     'rgba(178, 235, 242, 1)',
        //                     'rgba(200, 230, 201, 1)',
        //                     'rgba(220, 237, 200, 1)',
        //                     'rgba(255, 249, 196, 1)',
        //                     'rgba(255, 224, 178, 1)'
        //                 ],
        //                 borderRadius: 4,
        //                 tension: 0.5,
        //                 pointRadius: 0,
        //                 pointHitRadius: 10,
        //                 hoverPointRadius: 0,
        //                 fill: {
        //                     target: {
        //                         value: 9.33,
        //                     },
        //                 }
        //             }
        //         ]
        //     },
        //     options: {
        //         indexAxis: 'y',
        //         responsive: true,
        //         aspectRatio: 1.3,
        //         maintainAspectRatio: false,
        //         plugins: {
        //             legend: {
        //                 display: false,
        //                 position: 'right',
        //                 onHover: handleHover,
        //                 onLeave: handleLeave,
        //             },
        //         },
        //         scales: {
        //             y: {
        //                 beginAtZero: true,
        //             },
        //             x: {
        //                 beginAtZero: true,
        //             },
        //         }
        //     }
        // });

        // const ctx3 = document.getElementById('top10DamageType');
        // var chart3 = new Chart(ctx3, {
        //     type: 'bar',
        //     data: {
        //         labels: monthLabels,
        //         datasets: [
        //             {
        //                 label: monthLabels,
        //                 data: <?php echo json_encode($amount); ?>,
        //                 borderWidth: 3.5,
        //                 backgroundColor: [
        //                     'rgba(255, 205, 210, 0.8)',
        //                     'rgba(248, 187, 208, 0.8)',
        //                     'rgba(225, 190, 231, 0.8)',
        //                     'rgba(209, 196, 233, 0.8)',
        //                     'rgba(187, 222, 251, 0.8)',
        //                     'rgba(178, 235, 242, 0.8)',
        //                     'rgba(200, 230, 201, 0.8)',
        //                     'rgba(220, 237, 200, 0.8)',
        //                     'rgba(255, 249, 196, 0.8)',
        //                     'rgba(255, 224, 178, 0.8)'
        //                 ],
        //                 borderColor: [
        //                     'rgba(255, 205, 210, 1)',
        //                     'rgba(248, 187, 208, 1)',
        //                     'rgba(225, 190, 231, 1)',
        //                     'rgba(209, 196, 233, 1)',
        //                     'rgba(187, 222, 251, 1)',
        //                     'rgba(178, 235, 242, 1)',
        //                     'rgba(200, 230, 201, 1)',
        //                     'rgba(220, 237, 200, 1)',
        //                     'rgba(255, 249, 196, 1)',
        //                     'rgba(255, 224, 178, 1)'
        //                 ],
        //                 borderRadius: 4,
        //                 tension: 0.5,
        //                 pointRadius: 0,
        //                 pointHitRadius: 10,
        //                 hoverPointRadius: 0,
        //                 fill: {
        //                     target: {
        //                         value: 9.33,
        //                     },
        //                 }
        //             }
        //         ]
        //     },
        //     options: {
        //         indexAxis: 'x',
        //         responsive: true,
        //         aspectRatio: 1.3,
        //         maintainAspectRatio: false,
        //         plugins: {
        //             legend: {
        //                 display: false,
        //                 position: 'right',
        //                 onHover: handleHover,
        //                 onLeave: handleLeave,
        //             },
        //         },
        //         scales: {
        //             y: {
        //                 beginAtZero: true,
        //             },
        //             x: {
        //                 beginAtZero: true,
        //             },
        //         }
        //     }
        // });
    </script>
@endsection
