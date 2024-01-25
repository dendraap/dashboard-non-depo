@extends('content')

@section('loloLeft')
<div class="container">
    <div class="row">
        <div class="col mt-4">
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expande  d="false">
                    Dropdown button
                </button>
                <div class="dropdown-menu" style="max-height: 200px; overflow-y: scroll" aria-labelledby="dropdownMenuButton1">
                    <a class="dropdown-item" href="#">Foo</a>
                    <a class="dropdown-item" href="#">Thing</a>
                    <a class="dropdown-item" href="#">Something</a>
                    <a class="dropdown-item" href="#">Dudes</a>
                    <a class="dropdown-item" href="#">Birds</a>
                    <a class="dropdown-item" href="#">Nikes</a>
                    <a class="dropdown-item" href="#">Marsh mellows</a>
                    <a class="dropdown-item" href="#">Apples</a>
                    <a class="dropdown-item" href="#">Dingles</a>
                    <a class="dropdown-item" href="#">Berries</a>
                    <a class="dropdown-item" href="#">What not</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </div>
        </div>
    </div>
  </div>


    {{-- <div class="mini-item-container row g-2 d-flex justify-content-between h-100 w-100">
        <div class="mini-item card p-0 d-flex flex-row align-items-center justify-content-between border-0 mb-2 w-100">
            <div class="row w-100 m-0">
                <div class="input-group px-0">
                    <input type="text" id="lolo_month_select" name="lolo_month_select" class="form-control rounded-start-3" placeholder="Pilih Bulan">
                    <span class="input-group-text rounded-start-0 rounded-end-3">
                        <i class="fa-regular fa-calendar"></i>
                    </span>
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
                <h3 id="hai" class="h3 mb-0 text-primary">{{$loloTotalOrder}}</h3>
            </div>
        </div>
        <div class="mini-item card px-3 d-flex flex-row justify-content-between align-items-center border-0 shadow rounded-3">
            <svg width="45" height="45" viewBox="0 0 70 71" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect y="0.375" width="70" height="70" rx="35" fill="#E8F5E9"/>
                <path d="M35 18.375C25.6111 18.375 18 25.9861 18 35.375C18 44.7639 25.6111 52.375 35 52.375C44.3889 52.375 52 44.7639 52 35.375C52 25.9861 44.3889 18.375 35 18.375ZM35 21.6653C42.5768 21.6653 48.7097 27.797 48.7097 35.375C48.7097 42.9518 42.578 49.0847 35 49.0847C27.4232 49.0847 21.2903 42.953 21.2903 35.375C21.2903 27.7982 27.422 21.6653 35 21.6653ZM44.6108 30.5949L43.066 29.0376C42.746 28.7151 42.2252 28.713 41.9027 29.033L32.2132 38.6446L28.1146 34.5127C27.7947 34.1901 27.2738 34.188 26.9513 34.5079L25.394 36.0527C25.0715 36.3727 25.0693 36.8935 25.3893 37.2161L31.6122 43.4893C31.9321 43.8119 32.4529 43.814 32.7755 43.494L44.6062 31.7583C44.9286 31.4383 44.9307 30.9174 44.6108 30.5949Z" fill="#43A047"/>
            </svg>
            <div class="card-body ps-1 pe-0">
                <p class="card-text m-0 fs-7">Finish Order</p>
                <h3 id="haijuga" class="h3 mb-0 text-success">{{$loloFinishOrder}}</h3>
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
                <h3 id="iya" class="h3 mb-0 text-danger">{{$loloPendingOrder}}</h3>
            </div>
        </div>
        <div class="mini-item card px-3 d-flex flex-row justify-content-between align-items-center border-0 shadow rounded-3">
            <svg width="45" height="45" viewBox="0 0 70 71" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect y="0.208313" width="70" height="70" rx="35" fill="#EDE7F6"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M24.3581 25.9356H28.8182V29.0265H19.5455V19.7402H22.6364V23.241C26.0937 19.6155 30.0339 18.2083 35 18.2083C44.3888 18.2083 52 25.8195 52 35.2083C52 44.5972 44.3888 52.2083 35 52.2083C25.6112 52.2083 18 44.5972 18 35.2083H21.0909C21.0909 42.8901 27.3182 49.1174 35 49.1174C42.6818 49.1174 48.9091 42.8901 48.9091 35.2083C48.9091 27.5265 42.6818 21.2992 35 21.2992C30.6097 21.2992 27.3417 22.5223 24.3581 25.9356ZM36.5455 33.6629H42.7273V36.7538H33.4545V25.9356H36.5455V33.6629Z" fill="#5E35B1"/>
            </svg>
            <div class="card-body ps-2 pe-0">
                <p class="card-text m-0 fs-7">Service Time</p>
                <h3 id="loloServiceTime" class="h3 mb-0 d-inline text-purple">{{$loloServiceTimeValue}}</h3>
                <p class="fs-6 fw-normal d-inline">/hour</p>
            </div>
        </div>
    </div> --}}

@endsection
