let data = [
    {title: "Jana Izati", content: "Pesanan berjaya", time: "5 minit yang lalu"},
    {title: "Rionaldo Bustomi", content: "Pesanan berjaya", time: "16 minit yang lalu"},
    {title: "Muzakir Nor", content: "Pesanan berjaya", time: "20 minit yang lalu"},
    {title: "Tan Ibnu Suah", content: "Pesanan berjaya", time: "10 minit yang lalu"},
    {title: "Mail Kurnia", content: "Pesanan berjaya", time: "15 minit yang lalu"},
    {title: "Efendi Kurniawan", content: "Pesanan berjaya", time: "7 minit yang lalu"},
    {title: "Nurul Aisyah", content: "Pesanan berjaya", time: "8 minit yang lalu"},
    {title: "Sophia Fildza", content: "Pesanan berjaya", time: "12 minit yang lalu"},
    {title: "Nia Huda Salim", content: "Pesanan berjaya", time: "6 minit yang lalu"},
    {title: "Ivan Fadilla", content: "Pesanan berjaya", time: "18 minit yang lalu"}
];

function getRandomInt(min, max) {
    min = Math.ceil(min);
    max = Math.floor(max);
    return Math.floor(Math.random() * (max - min + 1)) + min;
}

document.addEventListener('DOMContentLoaded', function () {
    let notify = document.getElementById('NOTIFY255');
    setInterval(function () {
            showNotify(notify);
        }, 10000
    );
});


function showNotify(notify) {
    let n = getRandomInt(0, data.length - 1);
    let current = data[n];
    notify.querySelector('.ladi-notify-title').innerHTML = current.title;
    notify.querySelector('.ladi-notify-content').innerHTML = current.content;
    notify.querySelector('.ladi-notify-time').innerHTML = current.time;
    notify.style.opacity = '1';
    notify.style.top = '10px';
    setTimeout(function () {
        notify.style.opacity = '0';
        notify.style.top = '-162px';
    }, 4500);
}