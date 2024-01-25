document.addEventListener("DOMContentLoaded", function() {
    const divs = document.querySelectorAll('.shift'); // Ambil semua elemen dengan class 'shift'
    const today = new Date();
    const jam = today.getHours();
    const menit = today.getMinutes();
    const detik = today.getSeconds();
    const waktu = `${today.getHours()}${today.getMinutes()}${today.getSeconds()}`;
    console.log(typeof waktu);
    const time = 24;
    const shift1 = 7;
    const shift2 = 15;
    const shift3 = 23;
    var interval = 0;

    if(jam>=23 && jam<7){
        interval = ( hasil(jam, time, shift1)*3600000);
    } else if(jam>=7 && jam<15){
        interval = ( hasil(jam, time, shift2)*3600000);
    } else {
        interval = ( hasil(jam, time, shift3)*3600000);
    };

    console.log(interval);

    function hasil(today, time, shift) {
        const hasil =  (time%(Math.abs(today-shift1)));
        return hasil;
    }

    function toggleColors() {
        // Ganti kelas 'dark' dan 'bright' pada elemen 'shift' saat ini
        if (today >= 15 && today <23){
            // activeIndex = 0;
            divs[1].classList.add('shift-active');
            divs[0].classList.remove('shift-active');
            divs[2].classList.remove('shift-active');
        } else if (today >= 7 && today <15){
            // activeIndex = 1;
            divs[0].classList.add('shift-active');
            divs[1].classList.remove('shift-active');
            divs[2].classList.remove('shift-active');
        } else {
            // activeIndex = 2;
            divs[2].classList.add('shift-active');
            divs[0].classList.remove('shift-active');
            divs[1].classList.remove('shift-active');
        }
    }
    // Atur interval untuk memanggil toggleColors setiap 2 detik (2000ms)
    toggleColors();
    setInterval(toggleColors, interval);
    if (today == 23) {
        toggleColors();
    }
    // toggleColors();
});
