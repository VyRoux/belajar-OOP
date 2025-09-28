class Mobil {
      constructor(merk, warna) {
            this.merk = merk;
            this.warna = warna;
      }

      info() {
            console.log(`Mobil merk ${this.merk} warna ${this.warna}.`);
      }

      status() {
            console.log(`Mobil ${this.merk} dalam keadaan baik`);
      }
      berjalan() {
            console.log(`Mobil ${this.merk} sedang berjalan`);
      }
}
const mobilSaya = new Mobil("Toyota", "Merah");
mobilSaya.info();
mobilSaya.status();
mobilSaya.berjalan();