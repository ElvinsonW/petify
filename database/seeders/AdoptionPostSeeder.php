<?php

namespace Database\Seeders;

use App\Models\AdoptionPost;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdoptionPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AdoptionPost::create([
            "user_id" => 2,
            "pet_id" => 1,
            "name" => "Milo",
            "slug" => "milo",
            "location" => "Bogor",
            "vaccinated" => 1,
            "weight" => 5,
            "age" => 1,
            "status" => 0,
            "description" => "<div>Sedang mencari teman setia yang penuh kasih dan petualangan? Kenalkan Milo, siap mengisi rumah Anda dengan cinta dan kebahagiaan! <br>
                                Milo adalah anjing yang ceria, ramah, dan sangat penyayang. Dia suka berjalan-jalan panjang, bermain lempar tangkap di halaman, dan menikmati tidur siang yang nyaman setelah hari yang penuh aktivitas. Dengan kepribadiannya yang ramah dan kecintaannya pada manusia, Mio akan menjadi teman yang sempurna untuk keluarga, individu aktif, atau siapa saja yang ingin berbagi momen spesial bersama teman berbulu. </div>",
            "requirement" => "Yang Penting amanah",
        ]);

        AdoptionPost::create([
            "user_id" => 3,
            "pet_id" => 2,
            "name" => "Ginger",
            "slug" => "ginger",
            "location" => "Bogor",
            "vaccinated" => 0,
            "weight" => 10,
            "age" => 3,
            "status" => 0,
            "description" => "<div>Ginger suka berbaring di tempat yang nyaman dan menikmati perhatian dari orang-orang yang dia sayangi. Meskipun dia terlihat anggun, Ginger juga suka bermain dengan mainan kesukaannya dan berlarian di sekitar rumah. Dengan sifatnya yang tenang dan penuh kasih, Ginger akan menjadi teman setia yang sempurna untuk siapa saja yang mencari kucing dengan sifat lembut dan mudah dijaga.</div>",
            "requirement" => "Butuh yang kaya",
        ]);

        AdoptionPost::create([
            "user_id" => 4,
            "pet_id" => 3,
            "name" => "Draco",
            "slug" => "draco",
            "location" => "Jakarta Selatan",
            "vaccinated" => 1,
            "weight" => 1,
            "age" => 2,
            "status" => 0,
            "description" => "<div>Ini dia, Draco! Gecko Leopard yang anggun dan penuh kepribadian. Berusia 1 tahun, Draco memiliki pola kulit yang menawan dengan warna yang cerah dan indah. Meski kecil, Draco memiliki pesona yang luar biasa dan siap menjadi teman reptil yang menarik untuk Anda. Draco adalah hewan yang aktif pada malam hari dan suka menjelajahi kandangnya. Dengan sifat yang tenang, Draco mudah dijaga dan sangat ramah. Dia akan senang bermain dengan berbagai mainan kecil dan menikmati makanannya. Jika Anda mencari reptil yang mudah dirawat namun memiliki keunikan dan pesona, Draco adalah pilihan yang tepat.</div>",
            "requirement" => "Bisa menjaga naga dengan baik dan punya beberapa gecko di rumah",
        ]);

        AdoptionPost::create([
            "user_id" => 5,
            "pet_id" => 4,
            "name" => "Sky",
            "slug" => "sky",
            "location" => "Bogor",
            "vaccinated" => 1,
            "weight" => 2,
            "age" => 2,
            "status" => 0,
            "description" => "<div>Sky adalah lovebird yang aktif, cerdas, dan suka bermain. Dia akan senang terbang di sekitar ruangan atau bermain dengan mainan kesukaannya. Selain itu, Sky juga suka diberi perhatian dan akan senang berbicara atau menyanyi dengan Anda. Jika Anda mencari teman berbulu yang ceria dan penuh semangat, Sky adalah pilihan yang tepat!</div>",
            "requirement" => "Pernah merawat burung sebelumnya",
        ]);

        AdoptionPost::create([
            "user_id" => 6,
            "pet_id" => 5,
            "name" => "Lexy",
            "slug" => "lexy",
            "location" => "Medan",
            "vaccinated" => 0,
            "weight" => 10,
            "age" => 3,
            "status" => 0,
            "description" => "<div>Lexy adalah anjing yang tenang, ramah, dan sangat setia. Dia suka bermain dengan mainan kesukaannya, tetapi juga sangat menikmati waktu bersantai di samping Anda. Meskipun ukurannya kecil, Lexy memiliki hati yang besar dan sangat cocok untuk keluarga yang mencari teman berbulu yang manis dan mudah dijaga.</div>",
            "requirement" => "Bisa menemani sepanjang waktu",
        ]);

        AdoptionPost::create([
            "user_id" => 7,
            "pet_id" => 6,
            "name" => "Luna",
            "slug" => "luna",
            "location" => "Tangerang",
            "vaccinated" => 1,
            "weight" => 12,
            "age" => 4,
            "status" => 0,
            "description" => "<div>Luna adalah kucing yang sangat penyayang dan suka menghabiskan waktu bersama pemiliknya. Dia senang duduk di pangkuan atau bersantai di tempat yang nyaman sambil menikmati perhatian. Meskipun tidak terlalu aktif, Luna tetap senang bermain dengan mainan atau menjelajahi rumah dengan penuh rasa ingin tahu. Sifatnya yang mandiri namun tetap suka berinteraksi membuatnya cocok untuk siapa saja yang mencari teman kucing yang lembut dan mudah dijaga.</div>",
        ]);

        AdoptionPost::create([
            "user_id" => 3,
            "pet_id" => 7,
            "name" => "Rocky",
            "slug" => "rocky",
            "location" => "Jakarta Selatan",
            "vaccinated" => 1,
            "weight" => 16,
            "age" => 5,
            "status" => 1,
            "description" => "<div>Ini dia, Rocky! Anjing Bulldog berusia 5 tahun yang penuh energi dan kepribadian. Dengan tubuh kekar dan wajah lucu yang khas, Rocky akan segera mencuri hati Anda. Meskipun tampil dengan ekspresi serius, Rocky memiliki hati yang lembut dan sangat penuh kasih sayang. Rocky adalah anjing yang setia dan suka berinteraksi dengan pemiliknya. Dia senang bermain, tetapi juga tidak keberatan bersantai di samping Anda setelah sesi bermain. Dengan sifatnya yang ramah dan penyayang, Rocky sangat cocok untuk keluarga yang mencari teman anjing yang loyal dan menyenangkan.</div>",
        ]);

        AdoptionPost::create([
            "user_id" => 4,
            "pet_id" => 8,
            "name" => "Oreo",
            "slug" => "oreo",
            "location" => "Bogor",
            "vaccinated" => 1,
            "weight" => 10,
            "age" => 2,
            "status" => 1,
            "description" => "<div>Oreo sangat ramah, sosial, dan selalu ingin menjadi pusat perhatian. Dia senang berbicara dengan suara lembut dan suka bermain dengan mainan favoritnya. Meski aktif, Oreo juga menikmati saat-saat bersantai di tempat yang nyaman sambil mendapatkan perhatian dari pemiliknya. Jika Anda mencari kucing yang ceria, cerdas, dan setia, Oreo adalah teman yang sempurna!</div>",
        ]);

        AdoptionPost::create([
            "user_id" => 2,
            "pet_id" => 9,
            "name" => "Rex",
            "slug" => "rex",
            "location" => "Bogor",
            "vaccinated" => 1,
            "weight" => 6,
            "age" => 1,
            "status" => 1,
            "description" => "<div>Rex sangat mandiri dan akan senang menikmati ruang yang luas untuk berjemur atau memanjat. Dia adalah iguana yang ramah dan penuh rasa ingin tahu, suka berinteraksi dengan pemiliknya, meskipun lebih suka menjaga jarak di waktu-waktu tertentu. Jika Anda mencari reptil yang menarik dan cukup mudah untuk dipelihara, Rex adalah pilihan yang tepat!</div>",
        ]);

        AdoptionPost::create([
            "user_id" => 2,
            "pet_id" => 10,
            "name" => "Pepper",
            "slug" => "pepper",
            "location" => "Bogor",
            "vaccinated" => 1,
            "weight" => 4,
            "age" => 2,
            "status" => 1,
            "description" => "<div>Pepper adalah beo yang sangat sosial dan suka berinteraksi dengan orang-orang. Dia senang berbicara, menyanyi, dan bermain dengan mainan kesukaannya. Meskipun suka bercakap-cakap, Pepper juga sangat menikmati waktu bersantai di kandangnya atau berkeliling ruangan. Jika Anda mencari teman burung yang cerdas, ceria, dan suka berinteraksi, Pepper adalah pilihan yang tepat!</div>",
        ]);
    }
}
