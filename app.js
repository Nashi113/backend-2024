const { index, store, update, destroy } = require("./controllers/FruitController");

const main = () => {
    console.log("=== Aplikasi Pengelolaan Buah ===\n");
    
    console.log("1. Menampilkan daftar buah:");
    index();

    console.log("\n2. Menambahkan buah baru:");
    store("Pisang");

    console.log("\n3. Memperbarui buah pada posisi tertentu:");
    update(0, "Kelapa");

    console.log("\n4. Menghapus buah pada posisi tertentu:");
    destroy(0);
};

main();