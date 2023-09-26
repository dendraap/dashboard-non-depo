@extends('layouts.app')

@section('content')
    {{-- <div class="row container-fluid">
        <div class="col col-lg-9 col-md-9 col-sm-12 col-12 container">
            <div class="row d-flex justify-content-between p-3">
                <div class="col col-lg-35 col-md-4 col-sm-12 col-12 p-3 mb-3 bg-primaryDark text-white shadow rounded-3">
                    <div class="row row-lg-12 row-md-12 row-sm-12 row-12">
                        <div class="col col-lg-4 col-md-4 col-sm-4 d-flex align-items-center justify-content-center">
                            <svg width="60%" height="60%" viewBox="0 0 91 84" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M32.7103 83.5666C32.079 83.5635 31.4628 83.3735 30.9394 83.0208C30.4159 82.668 30.0085 82.1681 29.7687 81.5842L14.5808 45.1974H0.735962V38.8026H16.7231C17.3544 38.8057 17.9706 38.9957 18.4941 39.3484C19.0175 39.7012 19.4249 40.2011 19.6648 40.785L32.7103 71.6722L58.4816 2.5117C58.7103 1.89971 59.1209 1.37245 59.6583 1.00087C60.1956 0.629297 60.8339 0.431244 61.4872 0.433366C62.1466 0.444887 62.7862 0.660002 63.3186 1.04924C63.8509 1.43848 64.2499 1.9828 64.4608 2.60762L76.5791 38.8026H90.2641V45.1974H74.2769C73.6066 45.1992 72.9527 44.9902 72.4076 44.6C71.8625 44.2099 71.4539 43.6583 71.2394 43.0232L61.4872 13.2231L35.7159 81.4883C35.4872 82.1003 35.0766 82.6276 34.5392 82.9991C34.0019 83.3707 33.3636 83.5688 32.7103 83.5666Z" fill="white"/>
                            </svg>
                        </div>
                        <div class="col col-lg-8 col-md-8 col-sm-8">
                            <h4 class="mb-4">179,000</h4>
                            <p class="py-0 m-0 fs-7">MTBF</p>
                            <p class="py-0 m-0">Average</p>
                        </div>
                    </div>
                </div>
                <div class="col col-lg-35 col-md-4 col-sm-12 col-12 p-3 mb-3 bg-white shadow rounded-3">
                    <div class="row">
                        <div class="col col-lg-4 col-md-4 col-sm-4 d-flex align-items-center justify-content-center">
                            <svg width="60%" height="60%" viewBox="0 0 70 65" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M25 65C24.5064 64.9976 24.0246 64.849 23.6153 64.5732C23.206 64.2974 22.8876 63.9066 22.7 63.45L10.825 35H0V30H12.5C12.9936 30.0025 13.4754 30.151 13.8847 30.4268C14.294 30.7027 14.6124 31.0935 14.8 31.55L25 55.7L45.15 1.62501C45.3288 1.14651 45.6498 0.734258 46.07 0.443732C46.4901 0.153207 46.9892 -0.00164608 47.5 1.31963e-05C48.0155 0.0090206 48.5157 0.177215 48.9319 0.481551C49.3481 0.785888 49.6601 1.21148 49.825 1.70001L59.3 30H70V35H57.5C56.9759 35.0014 56.4646 34.838 56.0384 34.5329C55.6122 34.2279 55.2927 33.7966 55.125 33.3L47.5 10L27.35 63.375C27.1712 63.8535 26.8502 64.2658 26.43 64.5563C26.0099 64.8468 25.5108 65.0017 25 65Z" fill="#27374D"/>
                            </svg>
                        </div>
                        <div class="col col-lg-8 col-md-8 col-sm-8">
                            <h4 class="mb-4 text-success">78</h4>
                            <p class="py-0 m-0 fs-7">MTBF</p>
                            <p class="py-0 m-0">Minimum</p>
                        </div>
                    </div>
                </div>
                <div class="col col-lg-35 col-md-4 col-sm-12 col-12 p-3 mb-3 bg-white shadow rounded-3">
                    <div class="row">
                        <div class="col col-lg-4 col-md-4 col-sm-4 d-flex align-items-center justify-content-center">
                            <svg width="60%" height="60%" viewBox="0 0 70 65" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M25 65C24.5064 64.9976 24.0246 64.849 23.6153 64.5732C23.206 64.2974 22.8876 63.9066 22.7 63.45L10.825 35H0V30H12.5C12.9936 30.0025 13.4754 30.151 13.8847 30.4268C14.294 30.7027 14.6124 31.0935 14.8 31.55L25 55.7L45.15 1.62501C45.3288 1.14651 45.6498 0.734258 46.07 0.443732C46.4901 0.153207 46.9892 -0.00164608 47.5 1.31963e-05C48.0155 0.0090206 48.5157 0.177215 48.9319 0.481551C49.3481 0.785888 49.6601 1.21148 49.825 1.70001L59.3 30H70V35H57.5C56.9759 35.0014 56.4646 34.838 56.0384 34.5329C55.6122 34.2279 55.2927 33.7966 55.125 33.3L47.5 10L27.35 63.375C27.1712 63.8535 26.8502 64.2658 26.43 64.5563C26.0099 64.8468 25.5108 65.0017 25 65Z" fill="#27374D"/>
                            </svg>
                        </div>
                        <div class="col col-lg-8 col-md-8 col-sm-8">
                            <h4 class="mb-4 text-danger">1,467</h4>
                            <p class="py-0 m-0 fs-7">MTBF</p>
                            <p class="py-0 m-0">Maximum</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row p-3">
                <div class="col col-lg-12 col-md-12 col-sm-12 col-12 p-3 bg-white text-primaryDark shadow rounded-3">
                    <h3 class="text-center fw-bold">Total Damage</h3>
                    <canvas id="totalDamageChart"></canvas>
                </div>
            </div>
            <div class="row d-flex justify-content-between p-3">
                <div class="col col-lg-35 col-md-4 col-sm-12 col-12 p-3 mb-3 bg-primaryDark text-white shadow rounded-3">
                    <div class="row row-lg-12 row-md-12 row-sm-12 row-12">
                        <div class="col col-lg-4 col-md-4 col-sm-4 d-flex align-items-center justify-content-center">
                            <svg width="60%" height="60%" viewBox="0 0 91 84" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M32.7103 83.5666C32.079 83.5635 31.4628 83.3735 30.9394 83.0208C30.4159 82.668 30.0085 82.1681 29.7687 81.5842L14.5808 45.1974H0.735962V38.8026H16.7231C17.3544 38.8057 17.9706 38.9957 18.4941 39.3484C19.0175 39.7012 19.4249 40.2011 19.6648 40.785L32.7103 71.6722L58.4816 2.5117C58.7103 1.89971 59.1209 1.37245 59.6583 1.00087C60.1956 0.629297 60.8339 0.431244 61.4872 0.433366C62.1466 0.444887 62.7862 0.660002 63.3186 1.04924C63.8509 1.43848 64.2499 1.9828 64.4608 2.60762L76.5791 38.8026H90.2641V45.1974H74.2769C73.6066 45.1992 72.9527 44.9902 72.4076 44.6C71.8625 44.2099 71.4539 43.6583 71.2394 43.0232L61.4872 13.2231L35.7159 81.4883C35.4872 82.1003 35.0766 82.6276 34.5392 82.9991C34.0019 83.3707 33.3636 83.5688 32.7103 83.5666Z" fill="white"/>
                            </svg>
                        </div>
                        <div class="col col-lg-8 col-md-8 col-sm-8">
                            <h4 class="mb-4">87,100</h4>
                            <p class="py-0 m-0 fs-7">MTBF</p>
                            <p class="py-0 m-0">Average</p>
                        </div>
                    </div>
                </div>
                <div class="col col-lg-35 col-md-4 col-sm-12 col-12 p-3 mb-3 bg-white shadow rounded-3">
                    <div class="row">
                        <div class="col col-lg-4 col-md-4 col-sm-4 d-flex align-items-center justify-content-center">
                            <svg width="60%" height="60%" viewBox="0 0 70 65" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M25 65C24.5064 64.9976 24.0246 64.849 23.6153 64.5732C23.206 64.2974 22.8876 63.9066 22.7 63.45L10.825 35H0V30H12.5C12.9936 30.0025 13.4754 30.151 13.8847 30.4268C14.294 30.7027 14.6124 31.0935 14.8 31.55L25 55.7L45.15 1.62501C45.3288 1.14651 45.6498 0.734258 46.07 0.443732C46.4901 0.153207 46.9892 -0.00164608 47.5 1.31963e-05C48.0155 0.0090206 48.5157 0.177215 48.9319 0.481551C49.3481 0.785888 49.6601 1.21148 49.825 1.70001L59.3 30H70V35H57.5C56.9759 35.0014 56.4646 34.838 56.0384 34.5329C55.6122 34.2279 55.2927 33.7966 55.125 33.3L47.5 10L27.35 63.375C27.1712 63.8535 26.8502 64.2658 26.43 64.5563C26.0099 64.8468 25.5108 65.0017 25 65Z" fill="#27374D"/>
                            </svg>
                        </div>
                        <div class="col col-lg-8 col-md-8 col-sm-8">
                            <h4 class="mb-4 text-success">48</h4>
                            <p class="py-0 m-0 fs-7">MTBF</p>
                            <p class="py-0 m-0">Minimum</p>
                        </div>
                    </div>
                </div>
                <div class="col col-lg-35 col-md-4 col-sm-12 col-12 p-3 mb-3 bg-white shadow rounded-3">
                    <div class="row">
                        <div class="col col-lg-4 col-md-4 col-sm-4 d-flex align-items-center justify-content-center">
                            <svg width="60%" height="60%" viewBox="0 0 70 65" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M25 65C24.5064 64.9976 24.0246 64.849 23.6153 64.5732C23.206 64.2974 22.8876 63.9066 22.7 63.45L10.825 35H0V30H12.5C12.9936 30.0025 13.4754 30.151 13.8847 30.4268C14.294 30.7027 14.6124 31.0935 14.8 31.55L25 55.7L45.15 1.62501C45.3288 1.14651 45.6498 0.734258 46.07 0.443732C46.4901 0.153207 46.9892 -0.00164608 47.5 1.31963e-05C48.0155 0.0090206 48.5157 0.177215 48.9319 0.481551C49.3481 0.785888 49.6601 1.21148 49.825 1.70001L59.3 30H70V35H57.5C56.9759 35.0014 56.4646 34.838 56.0384 34.5329C55.6122 34.2279 55.2927 33.7966 55.125 33.3L47.5 10L27.35 63.375C27.1712 63.8535 26.8502 64.2658 26.43 64.5563C26.0099 64.8468 25.5108 65.0017 25 65Z" fill="#27374D"/>
                            </svg>
                        </div>
                        <div class="col col-lg-8 col-md-8 col-sm-8">
                            <h4 class="mb-4 text-danger">7,983</h4>
                            <p class="py-0 m-0 fs-7">MTBF</p>
                            <p class="py-0 m-0">Maximum</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col col-lg-3 col-md-3 col-sm-12 col-12 p-3 h-100 container">
            <div class="row h-50 pb-3 px-3">
                <div class="col col-lg-12 col-md-12 col-sm-12 col-12 p-3 bg-white shadow rounded-3">
                    <h3 class="fw-bold text-primaryDark text-center">Top 10 Damage Location</h3>
                    <canvas id="top10DamageLocation"></canvas>
                </div>
            </div>
            <div class="row h-50 pb-3 px-3">
                <div class="col col-lg-12 col-md-12 col-sm-12 col-12 p-3 bg-white shadow rounded-3">
                    <h3 class="fw-bold text-primaryDark text-center">Top 10 Damage Location</h3>
                    <canvas id="top10DamageType"></canvas>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="    container-fluid h-100">
        <div class="row h-100">
            <div class="col-3 col-lg-3 col-md-3 col-sm-12 col-12 h-100">
                <div class="col-12 col-lg-12 col-md-12 col-sm-12 d-flex flex-column p-3">
                    <div class="row-12 p-3 text-white bg-primaryDark shadow rounded-3">
                        <h4 class="mb-4 fw-bold">Downtime Damage</h4>
                        <div class="col p-3">
                            <p class="m-0">Average</p>
                            <h3 class="m-0 fw-bold">87,100</h3>
                            <p>from 2019 to 2023</p>
                        </div>
                        <div class="col">
                            <svg width="100%" height="auto" viewBox="0 0 268 127" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.5 104.167C10.5 101.405 12.7386 99.1666 15.5 99.1666H36.5C39.2614 99.1666 41.5 101.405 41.5 104.167V116.167H10.5V104.167Z" fill="white"/>
                                <path d="M46.5 92.1666C46.5 89.4052 48.7386 87.1666 51.5 87.1666H72.5C75.2614 87.1666 77.5 89.4052 77.5 92.1666V116.167H46.5V92.1666Z" fill="white"/>
                                <path d="M82.5 77.1666C82.5 74.4052 84.7386 72.1666 87.5 72.1666H108.5C111.261 72.1666 113.5 74.4052 113.5 77.1666V116.167H82.5V77.1666Z" fill="white"/>
                                <path d="M118.5 63.1666C118.5 60.4052 120.739 58.1666 123.5 58.1666H144.5C147.261 58.1666 149.5 60.4052 149.5 63.1666V116.167H118.5V63.1666Z" fill="white"/>
                                <path d="M154.5 15.1666C154.5 12.4052 156.739 10.1666 159.5 10.1666H180.5C183.261 10.1666 185.5 12.4052 185.5 15.1666V116.167H154.5V15.1666Z" fill="white"/>
                                <path d="M190.5 39.1666C190.5 36.4052 192.739 34.1666 195.5 34.1666H216.5C219.261 34.1666 221.5 36.4052 221.5 39.1666V116.167H190.5V39.1666Z" fill="white"/>
                                <path d="M226.5 63.1666C226.5 60.4052 228.739 58.1666 231.5 58.1666H252.5C255.261 58.1666 257.5 60.4052 257.5 63.1666V116.167H226.5V63.1666Z" fill="white"/>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-12 col-md-12 col-sm-12 d-flex flex-column p-3">
                    <div class="row-12 p-3 text-primaryDark bg-white shadow rounded-3">
                        <h4 class="mb-4 fw-bold">Downtime Damage</h4>
                        <div class="col p-3">
                            <p class="m-0 text-success">Minimum</p>
                            <h3 class="m-0 fw-bold">87,100</h3>
                            <p>from 2019 to 2023</p>
                        </div>
                        <div class="col">
                            <svg width="100%" height="auto" viewBox="0 0 268 127" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.5 104.833C10.5 102.072 12.7386 99.8333 15.5 99.8333H36.5C39.2614 99.8333 41.5 102.072 41.5 104.833V116.833H10.5V104.833Z" fill="#526D82"/>
                                <path d="M46.5 92.8333C46.5 90.0719 48.7386 87.8333 51.5 87.8333H72.5C75.2614 87.8333 77.5 90.0719 77.5 92.8333V116.833H46.5V92.8333Z" fill="#526D82"/>
                                <path d="M82.5 77.8333C82.5 75.0719 84.7386 72.8333 87.5 72.8333H108.5C111.261 72.8333 113.5 75.0719 113.5 77.8333V116.833H82.5V77.8333Z" fill="#526D82"/>
                                <path d="M118.5 63.8333C118.5 61.0719 120.739 58.8333 123.5 58.8333H144.5C147.261 58.8333 149.5 61.0719 149.5 63.8333V116.833H118.5V63.8333Z" fill="#526D82"/>
                                <path d="M154.5 15.8333C154.5 13.0719 156.739 10.8333 159.5 10.8333H180.5C183.261 10.8333 185.5 13.0719 185.5 15.8333V116.833H154.5V15.8333Z" fill="#526D82"/>
                                <path d="M190.5 39.8333C190.5 37.0719 192.739 34.8333 195.5 34.8333H216.5C219.261 34.8333 221.5 37.0719 221.5 39.8333V116.833H190.5V39.8333Z" fill="#526D82"/>
                                <path d="M226.5 63.8333C226.5 61.0719 228.739 58.8333 231.5 58.8333H252.5C255.261 58.8333 257.5 61.0719 257.5 63.8333V116.833H226.5V63.8333Z" fill="#526D82"/>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-12 col-md-12 col-sm-12 d-flex flex-column p-3">
                    <div class="row-12 p-3 text-primaryDark bg-white shadow rounded-3">
                        <h4 class="mb-4 fw-bold">Downtime Damage</h4>
                        <div class="col p-3">
                            <p class="m-0 text-danger">Maximum</p>
                            <h3 class="m-0 fw-bold">87,100</h3>
                            <p>from 2019 to 2023</p>
                        </div>
                        <div class="col">
                            <svg width="100%" height="auto" viewBox="0 0 268 127" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.5 104.833C10.5 102.072 12.7386 99.8333 15.5 99.8333H36.5C39.2614 99.8333 41.5 102.072 41.5 104.833V116.833H10.5V104.833Z" fill="#526D82"/>
                                <path d="M46.5 92.8333C46.5 90.0719 48.7386 87.8333 51.5 87.8333H72.5C75.2614 87.8333 77.5 90.0719 77.5 92.8333V116.833H46.5V92.8333Z" fill="#526D82"/>
                                <path d="M82.5 77.8333C82.5 75.0719 84.7386 72.8333 87.5 72.8333H108.5C111.261 72.8333 113.5 75.0719 113.5 77.8333V116.833H82.5V77.8333Z" fill="#526D82"/>
                                <path d="M118.5 63.8333C118.5 61.0719 120.739 58.8333 123.5 58.8333H144.5C147.261 58.8333 149.5 61.0719 149.5 63.8333V116.833H118.5V63.8333Z" fill="#526D82"/>
                                <path d="M154.5 15.8333C154.5 13.0719 156.739 10.8333 159.5 10.8333H180.5C183.261 10.8333 185.5 13.0719 185.5 15.8333V116.833H154.5V15.8333Z" fill="#526D82"/>
                                <path d="M190.5 39.8333C190.5 37.0719 192.739 34.8333 195.5 34.8333H216.5C219.261 34.8333 221.5 37.0719 221.5 39.8333V116.833H190.5V39.8333Z" fill="#526D82"/>
                                <path d="M226.5 63.8333C226.5 61.0719 228.739 58.8333 231.5 58.8333H252.5C255.261 58.8333 257.5 61.0719 257.5 63.8333V116.833H226.5V63.8333Z" fill="#526D82"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 h-100 bg-success">
                <div class="row h-75">
                    <p>Lorem ipsum dolor sit.</p>
                </div>
                <div class="row h-25">
                    <div class="col-6">
                        <p>Lorem ipsum dolor sit.</p>
                    </div>
                    <div class="col-6">
                        <p>Lorem ipsum dolor sit.</p>
                    </div>
                </div>
            </div>
            <div class="col-3 h-100 bg-danger">
                <div class="row h-50">
                    <p>Lorem ipsum dolor sit.</p>
                </div>
                <div class="row h-50">
                    <p>Lorem ipsum dolor sit.</p>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
@endsection
