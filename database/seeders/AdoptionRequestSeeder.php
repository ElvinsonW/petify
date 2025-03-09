<?php

namespace Database\Seeders;

use App\Models\AdoptionPost;
use App\Models\AdoptionRequest;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdoptionRequestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $notAdopted = AdoptionPost::where("status",0)->get();
        $adopted = AdoptionPost::where("status",1)->get();

        foreach ($notAdopted as $post) {
            $users = User::where('id', '!=', $post->user->id)
                ->where('id', '!=', 1)
                ->inRandomOrder()
                ->limit(5)
                ->get();
        
            foreach ($users as $user) {
                AdoptionRequest::factory()->create([
                    "post_id" => $post->id,
                    "user_id" => $user->id
                ]);
            }
        }

        foreach($adopted as $post){
            $users = User::where('id', '!=', $post->user->id)
                ->where('id', '!=', 1)
                ->inRandomOrder()
                ->limit(3)
                ->get();

            foreach ($users as $user) {
                AdoptionRequest::factory()->create([
                    "post_id" => $post->id,
                    "user_id" => $user->id,
                    "approval_status" => "Rejected"
                ]);
            }
        }

        AdoptionRequest::create([
            "user_id" => 2,
            "post_id" => 7,
            "Q1" => "Ya, saya memiliki seekor kucing dan anjing. Keduanya sudah divaksinasi.",
            "Q2" => "Saat saya bepergian atau tidak di rumah, saya akan menitipkannya kepada pengasuh hewan peliharaan yang terpercaya atau menggunakan jasa penitipan hewan yang baik.",
            "Q3" => "Ya, saya memiliki pengalaman memelihara anjing, kucing, serta beberapa hewan kecil lainnya seperti hamster dan burung.",
            "Q4" => "Ya, saya memiliki halaman yang cukup untuk hewan bermain dan beraktivitas di luar ruangan.",
            "Q5" => "Alasan saya mengadopsi adalah untuk memberikan rumah yang penuh kasih sayang bagi hewan yang membutuhkan, serta berbagi perhatian dan kebahagiaan dengan hewan peliharaan.",
            "approval_status" => "Accepted",
        ]);

        AdoptionRequest::create([
            "user_id" => 2,
            "post_id" => 8,
            "Q1" => "Tidak, saat ini saya belum memiliki hewan peliharaan lain di rumah.",
            "Q2" => "Jika saya harus bepergian, saya akan memastikan hewan peliharaan saya dirawat oleh anggota keluarga atau menitipkannya di tempat penitipan hewan yang terpercaya.",
            "Q3" => "Ya, saya pernah merawat beberapa jenis hewan peliharaan seperti kucing dan kelinci, jadi saya sudah terbiasa dengan tanggung jawab dalam merawat mereka.",
            "Q4" => "Saya memiliki sedikit ruang terbuka di rumah yang cukup untuk hewan peliharaan beraktivitas dengan nyaman.",
            "Q5" => "Saya ingin mengadopsi karena saya sangat mencintai hewan dan ingin memberikan mereka rumah yang aman, nyaman, dan penuh kasih sayang.",
            "approval_status" => "Accepted",
        ]);

        AdoptionRequest::create([
            "user_id" => 3,
            "post_id" => 9,
            "Q1" => "Saya pernah merawat berbagai reptil seperti iguana, gecko dan kura-kura. Saya sudah memahami kebutuhan reptil dan siap memberikan perawatan yang optimal.",
            "Q2" => "Jika saya bepergian dalam waktu singkat, saya akan memastikan iguana memiliki makanan segar, air bersih, dan suhu kandang yang stabil. Jika saya bepergian dalam waktu lama, saya akan meminta bantuan teman atau keluarga yang mengerti cara merawat iguana atau menitipkannya di tempat penitipan reptil yang terpercaya.",
            "Q3" => "Ya, saya memiliki pengalaman dalam merawat reptil, termasuk memahami kebutuhan pencahayaan UVB, suhu optimal, serta pola makan iguana yang kaya akan sayuran dan buah. Saya juga terbiasa menangani reptil dengan hati-hati agar tidak membuat mereka stres.",
            "Q4" => "Saya memiliki kandang khusus dengan pencahayaan UVB dan lampu pemanas untuk menjaga suhu tubuhnya. Selain itu, ada ruang tambahan untuk iguana beraktivitas dengan aman di luar kandang.",
            "Q5" => "Saya tertarik mengadopsi iguana karena saya menyukai reptil dan ingin memberikan lingkungan yang baik bagi mereka. Iguana adalah hewan yang unik dan membutuhkan perhatian khusus, dan saya siap untuk memberikan perawatan serta kasih sayang yang mereka butuhkan.",
            "approval_status" => "Accepted",
        ]);

        AdoptionRequest::create([
            "user_id" => 4,
            "post_id" => 10,
            "Q1" => "Ya, saya memiliki seekor burung beo dan mereka dirawat dengan baik.",
            "Q2" => "Saya akan memastikan ia memiliki makanan, air, dan mainan. Jika pergi lama, saya akan menitipkannya pada keluarga atau tempat penitipan burung.",
            "Q3" => "Ya, saya pernah merawat beberapa jenis burung dan memahami kebutuhannya.",
            "Q4" => "Ya, saya memiliki kandang luas dan area bermain yang aman di rumah.",
            "Q5" => "Saya menyukai burung beo karena kecerdasannya dan ingin merawatnya dengan penuh perhatian.",
            "approval_status" => "Accepted",
        ]);
    }
}
