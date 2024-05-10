<?php

namespace App\Models;

use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Room
{
    public static function all(): array
    {
        return  [
            [
                'id' => 1,
                'name' => 'Rysy',
                'thumbnail' => 'assets/images/rooms/1.jpeg',
                'link' => '#',
                'persons' => '1 osoba',
                'bed' => '1x pojedyńcze',
                'surface' => '30',
                'short_description' => 'Odkryj Szczyt Komfortu',
                'description' => 'Pokój "Rysy" to oaza spokoju i luksusu w sercu Tatr. Zapewniający wygodne wnętrze i niesamowite widoki na otaczające góry, ten pokój oferuje niezapomniane doświadczenie wypoczynku w górskim stylu.',
                'photos' => ['assets/images/rooms/1.jpeg', 'assets/images/rooms/2.jpeg', 'assets/images/rooms/3.jpeg', 'assets/images/rooms/4.jpeg', 'assets/images/rooms/5.jpeg'],
                'heading' => "Odkryj Górską Przygodę na Wysokości Marzeń!",
                'title_one' => 'Wysokogórskie Udogodnienia',
                'desc_one' => 'Pokój "Rysy" to idealne miejsce dla tych, którzy pragną połączyć górską przygodę z komfortem. Z eleganckim wystrojem, widokiem na przepiękne krajobrazy i dogodnymi udogodnieniami, ten pokój zapewnia niezapomniane doświadczenie wypoczynku w sercu Tatr.',
                'title_two' => 'Oaza Spokoju w Sercu Tatr',
                'desc_two' => 'Zanurz się w błogim spokoju i ciesz się wyjątkowymi widokami na okoliczne góry z wygodnego łóżka w pokoju "Rysy". Niezależnie od tego, czy jesteś miłośnikiem aktywności na świeżym powietrzu, czy też pragniesz spokojnego relaksu, ten pokój spełni wszystkie Twoje oczekiwania.',
                'amenities'=>[
                    "Balkon z widokiem na góry",
                    "Wygodne łóżko typu king-size",
                    "Prywatna łazienka z luksusowym prysznicem",
                    "Bezpłatne, bardzo szybkie WiFi",
                    "Telewizor z płaskim ekranem i dostępem do kanałów satelitarnych",
                    "Mini lodówka w pokoju",
                    "Ekspres do kawy i zestaw do parzenia herbaty",
                    "Szafa na ubrania z lustrem",
                    "Biurko do pracy",
                    "Suszarka do włosów i zestaw kosmetyków łazienkowych"
                ]
            ],
            [
                'id' => 2,
                'name' => 'Giewont',
                'thumbnail' => 'assets/images/rooms/2.jpeg',
                'link' => '#',
                'persons' => '2 osoby',
                'bed' => '1x podwójne',
                'surface' => '35',
                'short_description' => 'Wznieś się na Szczyt Relaksu ',
                'description' => 'Pokój "Giewont" to idealne miejsce dla tych, którzy pragną połączyć komfort z niezwykłymi widokami. Zainspirowany majestatem gór, ten pokój oferuje eleganckie wnętrze i atmosferę pełną spokoju, zapewniając niezapomniane doświadczenie wypoczynku w górskim otoczeniu.',
                'photos' => ['assets/images/rooms/1.jpeg', 'assets/images/rooms/2.jpeg', 'assets/images/rooms/3.jpeg', 'assets/images/rooms/4.jpeg', 'assets/images/rooms/5.jpeg'],
                'heading' => "Wznies się na Szczyt Komfortu i Spokoju!",
                'title_one' => 'Elegancja w Górskim Stylu',
                'desc_one' => 'Pokój "Giewont" to miejsce, gdzie luksus spotyka się z naturą. Z eleganckim wystrojem, wygodnymi łóżkami i malowniczymi widokami na okoliczne szczyty, ten pokój zapewnia wyjątkowe doświadczenie wypoczynku w sercu Tatr.',
                'title_two' => 'Zanurz się w Górskiej Radości',
                'desc_two' => 'Odkryj urok górskiego życia i ciesz się spokojem i komfortem w pokoju "Giewont". Wybierając ten pokój, wybierasz doskonałe miejsce do relaksu po dniu spędzonym na świeżym powietrzu, oraz możliwość delektowania się niezwykłymi widokami na otaczające góry.',
                'amenities'=>[
                    "Okno z widokiem na góry",
                    "Wygodne łóżko typu queen-size",
                    "Przestronna łazienka z wanną lub prysznicem",
                    "Bezpłatne, szybkie WiFi",
                    "Telewizor z płaskim ekranem i dostępem do kanałów kablowych",
                    "Mini bar z bogatym wyborem napojów",
                    "Sejf na wartościowe przedmioty",
                    "Żelazko i deska do prasowania",
                    "Stół z krzesłami",
                    "Suszarka do włosów i zestaw kosmetyków łazienkowych"
                ]
            ],
            [
                'id' => 3,
                'name' => 'Kasprowy',
                'thumbnail' => 'assets/images/rooms/3.jpeg',
                'link' => '#',
                'persons' => '2 osoby',
                'bed' => '1x podwójne',
                'surface' => '40',
                'short_description' => 'Zanurz się w Luksusie na Wysokim Poziomie',
                'description' => 'Pokój "Kasprowy" to oaza elegancji i wygody, która zapewni Ci niezapomniane doświadczenie wypoczynku. Z widokiem na malownicze szczyty Tatr, ten pokój oferuje połączenie komfortu, luksusu i inspirującej atmosfery górskiego stylu życia.',
                'photos' => ['assets/images/rooms/1.jpeg', 'assets/images/rooms/2.jpeg', 'assets/images/rooms/3.jpeg', 'assets/images/rooms/4.jpeg', 'assets/images/rooms/5.jpeg'],
                'heading' => "Zakochaj się w Górskim Luksusie - Twój Raj w Tatrach!",
                'title_one' => 'Luksus na Szczycie',
                'desc_one' => 'Pokój "Kasprowy" to połączenie luksusu i przyrody w samym sercu Tatr. Z eleganckim wystrojem, wygodnymi łóżkami i widokiem na otaczające góry, ten pokój oferuje wyjątkowe doświadczenie wypoczynku, które z pewnością zapadnie Ci w pamięć.',
                'title_two' => 'Odkryj Szczyt Komfortu',
                'desc_two' => 'Odkryj piękno górskiej przyrody i poczuj się jak w raju w pokojach "Kasprowy". Ciesz się relaksem w eleganckim otoczeniu i delektuj się widokami na okoliczne szczyty, które zawsze pozostaną w Twojej pamięci.',
                'amenities'=>[
                    "Prywatny balkon z widokiem na panoramę gór",
                    "Wygodne łóżko typu king-size z luksusową pościelą",
                    "Przestronna łazienka z wanną i prysznicem",
                    "Bezpłatne, superszybkie łącze WiFi",
                    "Ekran LCD z dostępem do kanałów satelitarnych",
                    "Minibar z bogatym wyborem przekąsek i napojów",
                    "Wygodne fotele i stolik",
                    "Klimatyzacja regulowana indywidualnie",
                    "Sejf na wartościowe przedmioty",
                    "Przytulna szafa na ubrania z lustrem"
                ]
            ],
            [
                'id' => 4,
                'name' => 'Gerlach',
                'thumbnail' => 'assets/images/rooms/4.jpeg',
                'link' => '#',
                'persons' => '2 osoby',
                'bed' => '1x podwójne',
                'surface' => '45',
                'short_description' => 'Odkryj Najwyższy Poziom Komfortu ',
                'description' => 'Pokój "Gerlach" to urocze zakątki luksusu w sercu Tatr. Z wyjątkowym wystrojem i widokiem na górskie szczyty, ten pokój zapewnia nie tylko komfortowy wypoczynek, ale także niezapomniane doznania estetyczne. To idealne miejsce dla tych, którzy pragną połączyć relaks z inspirującymi widokami na najwyższy szczyt Polski.',
                'photos' => ['assets/images/rooms/1.jpeg', 'assets/images/rooms/2.jpeg', 'assets/images/rooms/3.jpeg', 'assets/images/rooms/4.jpeg', 'assets/images/rooms/5.jpeg'],
                'heading' => "Poczuj Siłę Natury i Spokoju w Sercu Gór!",
                'title_one' => 'Natura i Spokój',
                'desc_one' => 'Pokój "Gerlach" to miejsce, gdzie natura spotyka się z elegancją. Z eleganckim wystrojem, wygodnymi łóżkami i widokiem na okoliczne góry, ten pokój oferuje niezapomniane doświadczenie wypoczynku w sercu Tatr',
                'title_two' => 'Oaza Harmonii w Górach',
                'desc_two' => 'Zanurz się w błogim spokoju i ciesz się wyjątkowymi widokami na otaczające góry z wygodnego łóżka w pokoju "Gerlach". To doskonałe miejsce, aby oderwać się od codzienności i zrelaksować się w otoczeniu niezwykłej przyrody.',
                'amenities'=>[
                    "Duże okno z widokiem na otaczające szczyty",
                    "Wygodne łóżko typu queen-size",
                    "Łazienka z prysznicem i zestawem kosmetyków",
                    "Darmowe WiFi w całym obiekcie",
                    "Telewizor z płaskim ekranem i dostępem do kanałów kablowych",
                    "Ekspres do kawy i zestaw do parzenia herbaty",
                    "Mini bar z bogatym wyborem napojów i przekąsek",
                    "Biurko do pracy z wygodnym krzesłem",
                    "Żelazko i deska do prasowania (dostępne na życzenie)",
                    "Suszarka do włosów i ręczniki plażowe"
                ]
            ],
            [
                'id' => 5,
                'name' => 'Kościelec',
                'thumbnail' => 'assets/images/rooms/5.jpeg',
                'link' => '#',
                'persons' => '6 osób',
                'bed' => '2x podwójne 2x pojedyńcze',
                'surface' => '75',
                'short_description' => 'Odkryj Urok Górskiego Raju',
                'description' => 'Pokój "Kościelec" to oaza spokoju w sercu Tatr, gdzie luksus spotyka się z naturą. Z widokiem na majestatyczne szczyty i malownicze doliny, ten pokój oferuje komfortowy wypoczynek w górskiej atmosferze. To doskonałe miejsce dla miłośników przyrody, którzy pragną cieszyć się zarówno relaksem, jak i bliskością niezwykłych górskich krajobrazów.',
                'photos' => ['assets/images/rooms/1.jpeg', 'assets/images/rooms/2.jpeg', 'assets/images/rooms/3.jpeg', 'assets/images/rooms/4.jpeg', 'assets/images/rooms/5.jpeg'],
                'heading' => "Odkryj Piękno Górskiej Przyrody i Ciszy!",
                'title_one' => 'Spokój w Górach',
                'desc_one' => 'Pokój "Kościelec" to miejsce, gdzie spokój spotyka się z przyrodą. Z przytulnym wystrojem, wygodnymi łóżkami i widokiem na malownicze krajobrazy, ten pokój zapewnia wyjątkowe doświadczenie wypoczynku, które pozwoli Ci oderwać się od zgiełku codzienności.',
                'title_two' => 'Oaza Przyrody i Ciszy',
                'desc_two' => 'Odkryj piękno górskiej przyrody i ciesz się chwilą spokoju w pokoju "Kościelec". Z widokiem na okoliczne szczyty i dźwiękiem szumiących potoków, ten pokój jest doskonałym miejscem dla wszystkich poszukujących wytchnienia w górskim klimacie.',
                'amenities'=>[
                    "Przestronny balkon z widokiem na dolinę",
                    "Wygodne łóżko typu king-size",
                    "Łazienka z prysznicem i zestawem kosmetyków",
                    "Szybkie WiFi dostępne w całym obiekcie",
                    "Telewizor z dostępem do kanałów satelitarnych",
                    "Minibar z bogatym wyborem napojów i przekąsek",
                    "Ekspres do kawy i zestaw do parzenia herbaty",
                    "Szafa na ubrania z lustrem",
                    "Biurko do pracy z lampką",
                    "Bezpieczny sejf na wartościowe przedmioty"
                ]
            ],
        ];
    }

    public static function find(string $name): array
    {
        $room =  Arr::first(static::all(), fn ($room) => $room['name'] == $name);

        if (!$room) {
            abort(404);
        }
        return $room;
    }
}
