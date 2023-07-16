window.addEventListener('DOMContentLoaded', event => {
    // Simple-DataTables
    // https://github.com/fiduswriter/Simple-DataTables/wiki


    
    let tableProduk = document.getElementById('tableProduk');
    let tablePesanan = document.getElementById('tablePesanan');
    let tableKategori = document.getElementById('tableKategori');

    if (tableProduk && tablePesanan && tableKategori) {
        new simpleDatatables.DataTable(tableProduk);
        new simpleDatatables.DataTable(tablePesanan);
        new simpleDatatables.DataTable(tableKategori);
    }
});
