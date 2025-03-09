<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\ArticleEventCategory;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Article::create([
            "title" => "Cara Merawat Anjing Yang Baik dan Benar",
            "slug" => "cara-merawat-anjing-yang-baik-dan-benar",
            "user_id" => 2,
            "article_category_id" => 2,
            "content" => "<div>Anjing dikenal sebagai hewan yang setia. Hal itu bisa terjadi jika kamu memberikan makanan, tempat tinggal, perawatan yang bertanggung jawab, dan cinta. Sebagai balasannya, anjing akan patuh dan menyayangi kamu.
                            <br><br>
                            Sama seperti manusia, anjing juga bisa sakit atau mengalami kondisi tidak mengenakan lainnya. Oleh karena itu, sebagai hewan peliharaan, anjing juga memerlukan perawatan yang tepat agar tetap sehat.
                            <br><br>
                            Nah, agar kondisi anjing tetap prima, yuk simak cara merawat anjing dengan tepat berikut!
                            <br><br>    
                                <ol>
                                    <li>Berikan Makan yang Bernutrisi</li>
                                    <li>Ajak Anjing Latihan Fisik</li>
                                    <li>Ajak Anjing Jalan Setiap Hari</li>
                                    <li>Sediakan Tempat Istirahat</li>
                                    <li>Berikan Teman Atau Pengasuh</li>
                                    <li>Rutin Kunjungi Dokter Hewan</li>
                                    <li>Beri Vaksin</li>
                                    <li>Hindari Kutu</li>
                                    <li>Jaga Kebersihan Anjing</li>
                                </ol>
                            </div>
                            ",
            "image" => "articles-image/merawat-anjing.png"
        ]);

        Article::create([
            "title" => "Cara Merawat Burung Yang Baik dan Benar",
            "slug" => "cara-merawat-burung-yang-baik-dan-benar",
            "user_id" => 2,
            "article_category_id" => 5,
            "content" => "<div>Selain kucing dan anjing, burung juga menjadi hewan peliharaan yang digemari banyak orang. Kicauan dan warna-warna yang indah pada burung memberikan daya pikatnya sendiri.
                                <br><br>
                                Namun, tidak semua orang bisa mengerti bagaimana cara memelihara burung dengan baik. Bukan soal makanan saja, merawat burung butuh keahlian khusus agar tidak mudah stres dan bisa panjang umur.
                                <br><br>
                                Nah, bagi kamu yang mau memelihara hewan bersuara merdu ini, berikut cara merawat burung agar selalu sehat.
                                <br><br>
                                <h1>Berikan Makanan Bernutrisi</h1>
                                <br>
                                Salah satu masalah kesehatan burung yang sering dijumpai dokter hewan adalah obesitas karena salah pola makan. Banyak burung diberikan benih atau biji sebagai satu-satunya makanan.
                                <br><br>
                                Meski burung memang menyukainya, tetapi pola makan ini kurang sehat. Biji kemasan kering rendah vitamin (terutama vitamin A). Selain itu, burung cenderung memakan bagian tertentu saja saat memecah biji, sehingga tidak semua nutrisi terserap dengan baik.
                                <br><br>
                                Selain pelet berkualitas, makanan yang bisa diberikan kepada burung adalah pir, stroberi, bluberi, rasberi, blackberry, brokoli, seledri, paprika, kembang kol, wortel, sotong, bayam, zukini, dan labu.
                                <br><br>
                                <h1>Rutin Bersihkan Kandang</h1>
                                <br>
                                Kandang adalah rumah untuk melindungi burung dari pemangsa atau racun berbahaya. Menjaga kebersihan kandang harus sering dilakukan untuk membantu burung tetap sehat.
                                <br><br>
                                Sebaliknya, kandang yang kotor bisa menyebabkan tumbuhnya bakteri dan virus. Agar tidak menjadi masalah serius, jangan lupa bersihkan kandang dari kotoran dan sisa pakan ya!
                                <br><br>
                                <h1>Jemur Burung Pagi dan Sore Hari</h1>
                                <br>
                                Burung juga memerlukan udara segar untuk tetap sehat. Cara yang bisa kamu lakukan adalah membawa burung keluar rumah.
                                <br><br>
                                “Jemurlah burung pada pagi dan sore hari untuk mendapatkan sinar matahari selama 15-30 menit,” kata dokter Jepriadi.
                                <br><br>
                                <h1>Interaksi dan Sosialisasi</h1>  
                                <br>
                                Beberapa burung mudah stres dan membutuhkan teman untuk bersosialisasi. Namun, pastikan kamu tidak langsung mencoba menangkap burung tanpa pendekatan.
                                <br><br>
                                Agar terbiasa, coba dekati burung selama beberapa hari dengan mengajaknya bicara. Lalu masukkan tanganmu ke kandang dengan makanan dan biarkan burung menghampirimu.  
                            </div>
                            ",
            "image" => "articles-image/merawat-burung.png"
        ]);

        Article::create([
            "title" => "Cara Merawat Kucing Yang Baik dan Benar",
            "slug" => "cara-merawat-kucing-yang-baik-dan-benar",
            "user_id" => 5,
            "article_category_id" => 3,
            "content" => "<div>
                                Cara merawat kucing perlu dilakukan dengan tepat sebab hewan menggemaskan ini bisa rentan terkena penyakit jika kesehatannya tidak dijaga. Berbeda jenisnya, bisa berbeda pula perawatan dan kebutuhan setiap kucing. Namun, beberapa cara berikut bisa dilakukan sebagai perawatan dasar untuk kucing kesayanganmu.
                                <br><br>      
                                Merawat hewan peliharaan seperti kucing perlu kesabaran dan kehati-hatian, apalagi jika ini pertama kalinya kamu memelihara kucing. Tentunya kamu ingin memastikan kucingmu sehat dan senang tinggal bersamamu. Oleh karena itu, kamu perlu tahu cara merawat kucing yang tepat.    
                                <br><br>  
                                <h1>Berbagai Cara Merawat Kucing yang Tepat</h1>
                                <br>
                                <h1>Berikan makanan bergizi</h1>
                                <br>
                                Kucing merupakan hewan pemakan daging (karnivora). Oleh karena itu, ia perlu diberi makan daging, ikan, dan telur, untuk memenuhi kebutuhan nutrisi, seperti protein dan lemak. Namun, kamu juga bisa memberikannya makanan nabati, seperti sayuran, buah, dan kacang-kacangan, hanya saja jumlahnya tidak sebanyak makanan hewani, ya.
                                <br><br>  
                                Makanan kucing yang bergizi bisa diberikan dalam bentuk makanan kucing yang kering, basah, atau kombinasi keduanya.
                                <br><br>  
                                Sebelum memilih makanan untuk kucingmu, bacalah label nutrisi pada kemasan untuk memastikan kandungannya aman bagi kucing serta menentukan takaran pemberian yang tepat.    
                                <br><br>
                                <h1>Hindari makanan yang dilarang untuk kucing</h1>   
                                <br>
                                Tidak semua jenis makanan yang aman dikonsumsi manusia aman dikonsumsi oleh kucing, lho. Oleh karena itu, saat hendak memberikannya makanan, kamu perlu menghindari jenis makanan yang tidak aman dikonsumsi kucing, misalnya cokelat, bawang, anggur, kismis, dan roti.
                                <br><br>
                                Ini penting dilakukan agar kucingmu terhindar dari masalah kesehatan, seperti diare, muntah-muntah, atau bahkan keracunan.
                                <br><br>     
                                <h1>Sediakan dan bersihkan litter box</h1>     
                                <br>
                                Agar ia tidak pipis dan buang air besar sembarangan, latihlah kucingmu untuk buang air besar dan buang air kecil di kotak pasir (litter box). Supaya ia lebih mudah terbiasa menggunakannya, letakkan litter box di tempat yang tenang dan mudah dijangkau kucing. Sediakan pula pasir yang bersih setiap hari dan buanglah pasir yang sudah kotor, ya.
                                <br><br>
                                Selain itu, kamu juga perlu membersihkan litter box secara berkala menggunakan sabun dan air hangat. Ini penting untuk mencegah penyebaran mikroorganisme penyebab penyakit, misalnya Toxoplasma.
                                <br><br>   
                                <h1>Mandikan kucing secara rutin</h1>
                                <br>
                                Sebenarnya, kucing bisa membersihkan tubuhnya sendiri dengan lidah dan tangannya. Namun, saat tubuhnya sangat kotor, misalnya setelah bermain di luar atau terpapar banyak debu, kamu disarankan untuk memandikan kucing. Kucing juga perlu dimandikan secara rutin agar ia tidak terserang kutu atau jamur.
                                <br><br>
                                Meski begitu, kamu tidak perlu memandikannya terlalu sering, ya. Kucing cukup dimandikan setiap 4-6 minggu sekali, kok. Saat memandikan kucing, pilihlah shampo khusus kucing.
                                <br><br>
                                Selain mandi, lakukan perawatan (grooming) dengan memotong kuku dan menyisir rambut kucing secara rutin. Potong kuku kucing setiap 2-3 minggu sekali agar cakarnya tidak terlalu tajam sampai melukaimu saat mengajaknya bermain.
                                <br><br>   
                                <h1>Ajak bermain</h1>        
                                <br>
                                Selain memberikan makanan bergizi dan menjaga kebersihan tubuhnya, cara merawat kucing agar ia sehat dan ceria adalah dengan mengajaknya bermain. Tak hanya menyenangkan baginya, ini juga bisa menjadi aktivitas yang menghibur dan mengatasi stres, lho
                                <br><br>
                                <h1>Berikan vaksinasi</h1>     
                                <br><br>
                                Vaksinasi bisa diberikan kepada kucing sejak usianya 6-8 minggu. Vaksinasi merupakan salah satu cara merawat kucing agar terhindar dari risiko penyakit, terutama rabies dan panleukopenia. Kedua penyakit tersebut mudah menular dan sangat berbahaya, terutama bagi kucing usia muda.
                                <br><br>  
                        
                        
                            </div>
                            ",
            "image" => "articles-image/merawat-kucing.png"
        ]);

        Article::create([
            "title" => "Cara Merawat Gecko Yang Baik dan Benar",
            "slug" => "cara-merawat-gecko-yang-baik-dan-benar",
            "user_id" => 3,
            "article_category_id" => 4,
            "content" => "<div>
                                Hai Sobat! Apakah kamu penggemar reptil atau sedang mempertimbangkan untuk memelihara salah satu dari mereka? Jika iya, maka Leopard Gecko bisa menjadi pilihan yang sempurna, terutama untuk pemula. Reptil yang ramah dan mudah dirawat ini dikenal dengan nama ilmiahnya Eublepharis macularius. Mereka memiliki umur yang relatif panjang, sekitar 10-20 tahun, sehingga bisa menjadi teman setia dalam jangka waktu yang lama. Dalam artikel ini, kita akan membahas beberapa tips dasar tentang cara merawat Leopard Gecko dan memperkenalkan layanan terbaru dari TIKI yang dapat memudahkan pengiriman reptil kesayanganmu.
                                <br><br>
                                <h1>Tips Memelihara Gecko</h1>
                                <br>
                                <h1>Mempersiapkan Kandang</h1>
                                <br>
                                Langkah pertama dalam memelihara Leopard Gecko adalah mempersiapkan kandang yang sesuai. Ukuran kandang minimal 30x25 cm sudah cukup untuk satu gecko. Jika kamu berencana memelihara lebih dari satu, pastikan untuk menyediakan kandang yang lebih besar. Akuarium atau kotak plastik dapat digunakan sebagai kandang, namun pastikan tidak menempatkan dua gecko jantan dalam satu kandang karena mereka cenderung berkelahi.
                                <br><br>
                                Selain itu, kamu membutuhkan substrat yang aman seperti kertas, koran, karpet reptil, atau dolomit. Hindari penggunaan pasir, cocopeat, atau tanah yang bisa tertelan dan menyebabkan impaksi (sumbatan pada sistem pencernaan).
                                <br><br>
                                <h1>Memberi Makan</h1>
                                <br>
                                Serangga adalah menu utama bagi gecko. Beberapa jenis serangga yang dapat diberikan meliputi ulat bambu, jangkrik, belalang, dan ulat sutra. Karena Leopard Gecko adalah hewan nokturnal, sebaiknya berikan makanan di malam hari. Frekuensi pemberian pakan tergantung pada usia dan kondisi kesehatan: gecko baby butuh makan setiap hari, sementara yang dewasa bisa diberi makan 2-3 kali seminggu. Di tempat yang dingin, frekuensi makan dapat dikurangi menjadi sekali seminggu untuk gecko dewasa.
                                <br><br>
                                Gecko muda membutuhkan 4-8 serangga per hari, sedangkan gecko dewasa dapat diberikan 10 serangga setiap 3 hari. Pastikan juga memberikan suplemen kalsium dan gutload serangga untuk mendukung pertumbuhan tulang dan kesehatan secara umum.
                                <br><br>
                                <h1>Kesehatan</h1>
                                <br>
                                Leopard Gecko adalah hewan yang jarang terkena penyakit dan bisa hidup hingga 20 tahun jika dirawat dengan baik. Namun, pemilik tetap harus memperhatikan kesehatannya. Pisahkan gecko yang baru dibeli selama satu bulan untuk menghindari penyebaran penyakit.
                                <br><br>
                                Suhu yang terlalu rendah atau kelembapan yang tinggi dapat menyebabkan infeksi pernapasan pada gecko, yang ditandai dengan napas tersengal, mulut sedikit terbuka, dan gelembung lendir dari hidung. Selain itu, kekurangan kalsium dapat menyebabkan penyakit metabolik tulang atau hipokalsemia. Oleh karena itu, pastikan untuk memberikan bubuk kalsium secara rutin.
                                <br><br>
                                Bersihkan kandang secara rutin, minimal seminggu sekali. Ganti substrat dan cuci tempat persembunyian serta dekorasi lainnya. Jangan lupa untuk selalu mencuci tangan sebelum dan sesudah memegang gecko.
                                <br><br>
                            </div>
                            ",
            "image" => "articles-image/merawat-gecko.png"
        ]);

        Article::create([
            "title" => "Manfaat Memiliki Hewan Peliharaan Bagi Kesehatan",
            "slug" => "manfaat-memiliki-hewan-peliharaan-bagi-kesehatan",
            "user_id" => 6,
            "article_category_id" => 1,
            "content" => "<div>
                                Banyak riset yang telah membuktikan bahwa memelihara hewan memiliki banyak manfaat yang dapat diperoleh. Memelihara hewan tidak hanya mampu menjadi teman ketika kesepian, menghibur diri dan keluarga, namun juga baik untuk kesehatan tubuh.
                                <br><br>
                                Cukup banyak manfaat yang bisa didapatkan dari memelihara hewan, baik manfaat dari sisi psikologis maupun kesehatan fisik. Manfaat tersebut bisa diperoleh oleh siapa saja, baik anak-anak, orang dewasa hingga orang yang menderita penyakit tertentu.
                                <br><br>
                                Manfaat yang bisa diperoleh dari memiliki hewan peliharaan yaitu:
                                <br><br>
                                <h1>Meredakan Stress</h1>
                                <br>
                                Hewan peliharaan yang pintar, lucu dan menggemaskan selalu mampu memberikan rasa senang hingga melupakan sejenak masalah yang mungkin sedang dihadapi. Hal ini terjadi karena meningkatkan hormon dopamine dan serotonin di otak ketika sedang merasa bahagia. Sehingga stres yang dialami dapat mereda.
                                <br><br>
                                <h1>Memicu untuk lebih aktif bergerak</h1>
                                <br>
                                Bermain bersama hewan peliharaan mampu memberikan motivasi untuk lebih aktif bergerak dan berolahraga. Hal ini cukup bermanfaat bagi yang malas berolahraga. Sebagai contoh aktivitas fisik yang bisa dilakukan bersama hewan peliharaan, seperti berjalan kaki bersama anjing, bermain bola dengan kucing hingga membersihkan akuarium atau kolam ikan.
                                <br><br>
                                <h1>Mendukung tumbuh kembang anak</h1>
                                <br>
                                Memiliki hewan peliharaan mampu membangun rasa empati, kedekatan emosional, rasa tanggung jawab hingga daya imajinasi. Memiliki hewan peliharaan dan bermain atau berinteraksi bersama hewan tersebut juga bisa menunjang anak yang memiliki kesulitan belajar guna meningkatkan daya fokus dan tenang.
                                <br><br>
                                <h1>Meningkatkan kemampuan interaksi</h1>
                                <br>
                                Bagi pemeliharanya, kehadiran hewan peliharaan mampu menumbuhkan rasa kasih sayang dan empati. Hingga ada sebuah studi yang menjelaskan bahwa hewan peliharaan mampu membantu anak pengidap autism untuk berinteraksi lebih baik dengan lingkungan sekitar.
                                <br><br>
                                Namun penting untuk diperhatikan, bahwa ada sebagian orang yang memang tidak cocok atau memiliki alergi terhadap bulu hewan. Hal tersebut merupakan sesuatu yang wajar. Bila mengalami hal demikian tapi ingin tetap memelihara hewan, jangan ragu untuk berkonsultasi dengan dokter untuk mendapatkan saran terbaik ataupun jenis hewan apa yang aman untuk dipelihara.
                                <br><br>
                            
                            </div>
                            ",
            "image" => "articles-image/manfaat.png"
        ]);

        Article::factory(20)->recycle([
            User::all(),
            ArticleEventCategory::all()
        ])->create([
            "image" => "articles-image/petArticlePict.png"
        ]);
    }
}
