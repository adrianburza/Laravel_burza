<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ListingLocation;

class ListingSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
{
    // Pole s názvami miest v Chorvátsku
    $cities = [
        "Zagreb",
        "Split",
        "Rijeka",
        "Osijek",
        "Zadar",
        "Slavonski Brod",
        "Pula",
        "Sesvete",
        "Karlovac",
        "Varaždin",
        "Šibenik",
        "Sisak",
        "Velika Gorica",
        "Vinkovci",
        "Vukovar",
        "Dubrovnik",
        "Bjelovar",
        "Koprivnica",
        "Požega",
        "Samobor",
        "Zaprešić",
        "Solin",
        "Kaštela",
        "Virovitica",
        "Ivanec",
        "Petrinja",
        "Đakovo",
        "Crikvenica",
        "Knin",
        "Slatina",
        "Trogir",
        "Poreč",
        "Daruvar",
        "Valpovo",
        "Opatija",
        "Belišće",
        "Nova Gradiška",
        "Krk",
        "Pazin",
        "Labin",
        "Metković",
        "Omiš",
        "Đurđevac",
        "Pakrac",
        "Biograd na Moru",
        "Pleternica",
        "Hvar",
        "Makarska",
        "Vrbovec",
        "Grubišno Polje",
        "Vis",
        "Kutina",
        "Ilok",
        "Prelog",
        "Buzet",
        "Otok",
        "Vodice",
        "Ogulin",
        "Vodnjan",
        "Senj",
        "Rovinj",
        "Novigrad",
        "Novska",
        "Krapina",
        "Donja Stubica",
        "Otočac",
        "Ivanić-Grad",
        "Umag",
        "Gospić",
        "Orahovica",
        "Popovača",
        "Novi Marof",
        "Sveta Nedelja",
        "Lepoglava",
        "Omišalj",
        "Županja",
        "Jastrebarsko",
        "Našice",
        "Sveti Ivan Zelina",
        "Križevci",
        "Kastav",
        "Nin",
        "Slunj",
        "Ludbreg",
        "Cres",
        "Vrbovsko",
        "Ploče",
        "Kutjevo",
        "Krapinske Toplice",
        "Beli Manastir",
        "Novi Vinodolski",
        "Obrovac",
        "Donji Miholjac",
        "Kraljevica",
        "Buje"
    ];

    foreach ($cities as $city) {
        ListingLocation::create([
            "city" => $city,
            "country" => "Croatia"
        ]);
    }
    }
}
