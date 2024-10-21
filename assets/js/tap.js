const coinCountElement = document.getElementById('coin_count');
const tapButton = document.getElementById('tap_button');

// const API_URL = 'sync_coins.php'; // Ganti dengan URL endpoint API Anda
// const SYNC_INTERVAL = 5000; // Interval sinkronisasi dalam milidetik
const ADD_COIN = 100;

let coins = 0;
// let isSyncing = false; // Flag untuk menandai apakah sedang dalam proses sinkronisasi

// Fungsi untuk mengambil nilai koin dari localStorage
function getCoinsFromStorage() {
    const storedCoins = localStorage.getItem('coins');
    // Jika storedCoins adalah null atau string kosong, kembalikan 0
    if (!storedCoins) {
        return 0;
    }

    // Konversi storedCoins menjadi angka menggunakan parseInt
    return parseFloat(storedCoins, 10);
}

// Fungsi untuk menyimpan nilai koin ke localStorage
function setCoinsToStorage(coins) {
    localStorage.setItem('coins', coins);
}

// Fungsi untuk memperbarui tampilan koin dan melakukan sinkronisasi
async function updateCoins(newCoins) {
    coins = newCoins;
    // Format angka menjadi ribuan dengan dua desimal
    const formattedCoins = new Intl.NumberFormat('id-ID', {
        minimumFractionDigits: 2,
        maximumFractionDigits: 2
    }).format(coins);

    // Cek apakah dua digit di belakang koma adalah 0
    if (formattedCoins.endsWith(',00')) {
        // Jika ya, hapus dua digit di belakang koma
        const integerPart = formattedCoins.slice(0, -3);
        coinCountElement.textContent = integerPart.replace('.', ',');
    } else {
        coinCountElement.textContent = formattedCoins.replace(',', '.').replace('.', ',');
    }
    setCoinsToStorage(coins);

    // if (!isSyncing) {
    //     isSyncing = true;
    //     try {
    //         const response = await fetch(API_URL, {
    //             method: 'POST',
    //             headers: {
    //                 'Content-Type': 'application/json'
    //             },
    //             body: JSON.stringify({
    //                 coins
    //             })
    //         });

    //         if (!response.ok) {
    //             throw new Error('Network response was not ok');
    //         }

    //         const data = await response.json();
    //         coins = data.coins;
    //     } catch (error) {
    //         console.error('Error updating coins:', error);
    //     } finally {
    //         isSyncing = false;
    //     }
    // }
}


tapButton.addEventListener('click', () => {
    updateCoins(coins + ADD_COIN);
});

// Inisialisasi nilai koin dari localStorage
coins = getCoinsFromStorage();
updateCoins(coins);


// // Sinkronisasi berkala
// setInterval(() => {
//     updateCoins(coins);
// }, SYNC_INTERVAL);