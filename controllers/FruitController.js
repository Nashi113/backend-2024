const fruits = require("../data/fruits");

// Menampilkan daftar buah
const index = () => {
  console.log("Method index - Menampilkan Daftar Buah:");
  fruits.forEach((fruit, index) => console.log(`${index + 1}. ${fruit}`));
};

// Menambahkan buah baru
const store = (name) => {
  console.log(`Method store - Menambahkan buah '${name}'`);
  fruits.push(name);
  index();
};

// Mengupdate buah di posisi tertentu
const update = (position, name) => {
  if (position >= 0 && position < fruits.length) {
    console.log(`Method update - Mengubah buah di posisi ${position + 1} menjadi '${name}'`);
    fruits[position] = name;
    index();
  } else {
    console.error("Posisi tidak valid!");
  }
};

// Menghapus buah di posisi tertentu
const destroy = (position) => {
  if (position >= 0 && position < fruits.length) {
    console.log(`Method destroy - Menghapus buah di posisi ${position + 1}`);
    fruits.splice(position, 1);
    index();
  } else {
    console.error("Posisi tidak valid!");
  }
};

module.exports = { index, store, update, destroy };
