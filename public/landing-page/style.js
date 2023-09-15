const waktuBulan = document.querySelector('.bulan');
waktuBulan.addEventListener('click', function(){
    const card = document.querySelector('.data-card');
    const ket = document.createElement('p');
    const ketText = document.createTextNode('Jika Kamu bayar Menggunakan DP :');
    ket.appendChild(ketText);
    card.appendChild(ket);
});