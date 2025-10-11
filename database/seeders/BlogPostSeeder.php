<?php

namespace Database\Seeders;

use App\Models\PersonalInfo;
use Illuminate\Database\Seeder;

class BlogPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $personalInfo = PersonalInfo::first();

        if (! $personalInfo) {
            $this->command->warn('No PersonalInfo found. Please run PersonalInfoSeeder first.');

            return;
        }

        $blogPosts = [
            [
                'title' => [
                    'id' => 'Peningkatan Keamanan Pangan Produk Bumbu Ajaib dan Abon Bebek Rendah Kolestrol menuju Sertifikasi ISO 22000-2018 dan Pasar Global',
                    'en' => 'Improvement of Food Safety for Bumbu Ajaib and Low Cholesterol Duck Floss Products towards ISO 22000-2018 Certification and Global Market',
                ],
                'slug' => 'peningkatan-keamanan-pangan-bumbu-ajaib-abon-bebek-iso-22000-2021-09-04',
                'excerpt' => [
                    'id' => 'Penyuluhan dan Pelatihan Sanitasi & Keamanan Pangan Dokumen ISO 22000-2018 yang diadakan secara Hybrid (Luring dan daring).',
                    'en' => 'Extension and Training on Sanitation & Food Safety ISO 22000-2018 Documents held in Hybrid mode (Offline and Online).',
                ],
                'content' => [
                    'id' => '<p>Kami Mengundang Bapak/Ibu Dosen dan Mahasiswa UPN Beserta karyawan PT.RMDI "Veteran" Jawa Timur, Serta Teman-teman Insan Dikti yang mendapatkan Program Matching Fund, untuk bergabung pada acara "Penyuluhan dan Pelatihan  Sanitasi & Keamanan Pangan Dokumen ISO 22000-2018" yang diadakan secara Hybrid (Luring dan daring), Pada:</p>

<p>Hari/tanggal : Sabtu,  4 September 2021</p>
<p>Pukul            : 08.00-16.00 WIB</p>
<p>Link Zoom    : https://zoom.us/j/95394350179?pwd=Rm0rSStDUDFvemM2Rk52OGszc0c1QT09</p>
<p>Meeting ID    : 953 9435 0179</p>
<p>Passcode      : 513255</p>
<p>Narasumber  : Amarisa Satya Putri (Praktisi Keamanan Pangan) </p>

<p>Bagi yang mengikuti secara Luring, akan diadakan di Fave Hotel Rungkut Surabaya  (dengan peserta terbatas)
Jika ingin mengikuti secara Luring mohon menghubungi Kontak: 0821-3925-1335 (Uswa)
Peserta Luring tidak lebih dari 20 Peserta</p>',
                    'en' => '<p>We invite Lecturers and Students of UPN along with employees of PT.RMDI "Veteran" East Java, as well as friends from Higher Education Institutions who received the Matching Fund Program, to join the event "Extension and Training on Sanitation & Food Safety ISO 22000-2018 Documents" held in Hybrid mode (Offline and Online), On:</p>

<p>Day/Date: Saturday, September 4, 2021</p>
<p>Time: 08.00-16.00 WIB</p>
<p>Zoom Link: https://zoom.us/j/95394350179?pwd=Rm0rSStDUDFvemM2Rk52OGszc0c1QT09</p>
<p>Meeting ID: 953 9435 0179</p>
<p>Passcode: 513255</p>
<p>Speaker: Amarisa Satya Putri (Food Safety Practitioner)</p>

<p>For those attending offline, it will be held at Fave Hotel Rungkut Surabaya (with limited participants)
If you want to attend offline, please contact: 0821-3925-1335 (Uswa)
Offline participants no more than 20 people</p>',
                ],
                'status' => 'published',
                'published_at' => '2021-09-04 00:00:00',
                'meta_description' => [
                    'id' => 'Penyuluhan dan Pelatihan Sanitasi & Keamanan Pangan Dokumen ISO 22000-2018 untuk meningkatkan keamanan pangan produk Bumbu Ajaib dan Abon Bebek.',
                    'en' => 'Extension and Training on Sanitation & Food Safety ISO 22000-2018 Documents to improve food safety for Bumbu Ajaib and Duck Floss products.',
                ],
            ],
            [
                'title' => [
                    'id' => 'Peningkatan Keamanan Pangan Produk Bumbu Ajaib dan Abon Bebek Rendah Kolestrol menuju Sertifikasi ISO 22000-2018 dan Pasar Global',
                    'en' => 'Improvement of Food Safety for Bumbu Ajaib and Low Cholesterol Duck Floss Products towards ISO 22000-2018 Certification and Global Market',
                ],
                'slug' => 'pelaksanaan-training-iso-22000-2018-food-safety-2021-09-11',
                'excerpt' => [
                    'id' => 'Pelaksanaan Training ISO 22000:2018 Food Safety Management System yang diadakan secara Hybrid (Luring dan daring).',
                    'en' => 'Implementation of ISO 22000:2018 Food Safety Management System Training held in Hybrid mode (Offline and Online).',
                ],
                'content' => [
                    'id' => '<p>Kami Mengundang Bapak/Ibu Dosen dan Mahasiswa UPN Beserta karyawan PT.RMDI "Veteran" Jawa Timur, Serta Teman-teman Insan Dikti yang mendapatkan Program Matching Fund, untuk bergabung pada acara "Pelaksanaan Training ISO 22000:2018 Food Safety Management System" yang diadakan secara Hybrid (Luring dan daring), Pada:</p>

<p>Hari/tanggal : Sabtu,  11 September 2021</p>
<p>Pukul            : 08.00-16.00 WIB</p>
<p>Link Zoom    : https://zoom.us/j/92643266060?pwd=dTNXT1IzWlRsQVllaTRWeTNOdjl0QT09</p>

<p>Meeting ID: 926 4326 6060</p>
<p>Passcode: 926510</p>
<p>Narasumber  : Yushinta Aristina Sanjaya</p>

<p>Bagi yang mengikuti secara Luring, akan diadakan di Fave Hotel Rungkut Surabaya  (dengan peserta terbatas)
Jika ingin mengikuti secara Luring mohon menghubungi Kontak: 0821-3925-1335 (Uswa)</p>',
                    'en' => '<p>We invite Lecturers and Students of UPN along with employees of PT.RMDI "Veteran" East Java, as well as friends from Higher Education Institutions who received the Matching Fund Program, to join the event "Implementation of ISO 22000:2018 Food Safety Management System Training" held in Hybrid mode (Offline and Online), On:</p>

<p>Day/Date: Saturday, September 11, 2021</p>
<p>Time: 08.00-16.00 WIB</p>
<p>Zoom Link: https://zoom.us/j/92643266060?pwd=dTNXT1IzWlRsQVllaTRWeTNOdjl0QT09</p>

<p>Meeting ID: 926 4326 6060</p>
<p>Passcode: 926510</p>
<p>Speaker: Yushinta Aristina Sanjaya</p>

<p>For those attending offline, it will be held at Fave Hotel Rungkut Surabaya (with limited participants)
If you want to attend offline, please contact: 0821-3925-1335 (Uswa)</p>',
                ],
                'status' => 'published',
                'published_at' => '2021-09-11 00:00:00',
                'meta_description' => [
                    'id' => 'Pelaksanaan Training ISO 22000:2018 Food Safety Management System untuk karyawan PT.RMDI dan peserta program Matching Fund.',
                    'en' => 'Implementation of ISO 22000:2018 Food Safety Management System Training for PT.RMDI employees and Matching Fund program participants.',
                ],
            ],
            [
                'title' => [
                    'id' => 'Pelatihan membangun Brand Digital untuk membantu UMKM Go Global (PT. Rumah Makan Deltasari Indah)',
                    'en' => 'Digital Brand Building Training to Help MSMEs Go Global (PT. Rumah Makan Deltasari Indah)',
                ],
                'slug' => 'pelatihan-brand-digital-umkm-go-global-2021-09-18',
                'excerpt' => [
                    'id' => 'Pelatihan membangun Brand Digital untuk membantu UMKM Go Global dengan narasumber Master Mentor Sigap UMKM.',
                    'en' => 'Digital Brand Building Training to help MSMEs Go Global with Master Mentor Sigap UMKM as speaker.',
                ],
                'content' => [
                    'id' => '<p>Kami mengundang Bapak/Ibu Dosen, Tendik, Mahasiswa, UMKM pada acara <strong> Pelatihan membangun Brand Digital untuk membantu UMKM Go Global (PT. Rumah Makan Deltasari Indah) </strong>, pada:</p><br>

<p>Hari : Sabtu, 18 September 2021</p>
<p>Pukul : 12:30 - 17.00</p>
<p>Tempat luring : Fave Hotel</p><br>

<p>Link daring: Join Zoom Meeting
https://us02web.zoom.us/j/88956719462?pwd=N0dBRTk2UzJ1anQ5YkM2TzdSeDg4QT09<p/>
<p>Meeting ID: 889 5671 9462</p>
<p>Passcode: 764328</p><br>

<p>Narasumber: Wahyudi Agustiono (Master Mentor Sigap UMKM)</p>
<p>Terimakasih</p>',
                    'en' => '<p>We invite Lecturers, Education Staff, Students, MSMEs to the event <strong>Digital Brand Building Training to Help MSMEs Go Global (PT. Rumah Makan Deltasari Indah)</strong>, on:</p><br>

<p>Day: Saturday, September 18, 2021</p>
<p>Time: 12:30 - 17.00</p>
<p>Offline venue: Fave Hotel</p><br>

<p>Online link: Join Zoom Meeting
https://us02web.zoom.us/j/88956719462?pwd=N0dBRTk2UzJ1anQ5YkM2TzdSeDg4QT09<p/>
<p>Meeting ID: 889 5671 9462</p>
<p>Passcode: 764328</p><br>

<p>Speaker: Wahyudi Agustiono (Master Mentor Sigap UMKM)</p>
<p>Thank you</p>',
                ],
                'status' => 'published',
                'published_at' => '2021-09-18 00:00:00',
                'meta_description' => [
                    'id' => 'Pelatihan membangun Brand Digital untuk UMKM dengan Master Mentor Sigap UMKM, Wahyudi Agustiono.',
                    'en' => 'Digital Brand Building Training for MSMEs with Master Mentor Sigap UMKM, Wahyudi Agustiono.',
                ],
            ],
            [
                'title' => [
                    'id' => 'Pelatihan Pemasaran Digital dengan Berbagai Aplikasi dan Platform',
                    'en' => 'Digital Marketing Training with Various Applications and Platforms',
                ],
                'slug' => 'pelatihan-pemasaran-digital-aplikasi-platform-2021-09-19',
                'excerpt' => [
                    'id' => 'Pelatihan Pemasaran Digital dengan Berbagai Aplikasi dan Platform untuk Dosen, Tendik, Mahasiswa, dan UMKM.',
                    'en' => 'Digital Marketing Training with Various Applications and Platforms for Lecturers, Education Staff, Students, and MSMEs.',
                ],
                'content' => [
                    'id' => '<p>Kami mengundang Bapak/Ibu Dosen, Tendik, Mahasiswa, UMKM, pada acara <strong>Pelatihan Pemasaran Digital dengan Berbagai Aplikasi dan Platform</strong>, yang diadakan secara hybrid, pada;</p><br>
<p>Hari: Minggu, 19 September 2021</p>
<p>Pukul: 09:00 - 16.00 WIB</p>
<p>Tempat Luring: Fave Hotel (tempat terbatas)</p><br>

<p>Link Daring: 
Join Zoom Meeting
https://us02web.zoom.us/j/87926867071?pwd=UEsxNFpYdGRuRG9wZm5VUVhZVnJuUT09
</p>
<p>Meeting ID: 879 2686 7071</p>
<p>Passcode: 203455</p><br>

<p>Narasumber: Ricky Ramadhan (CEO Treeta Melinea Modern)</p>
<p>Terimakasih</p>',
                    'en' => '<p>We invite Lecturers, Education Staff, Students, MSMEs, to the event <strong>Digital Marketing Training with Various Applications and Platforms</strong>, held in hybrid mode, on;</p><br>
<p>Day: Sunday, September 19, 2021</p>
<p>Time: 09:00 - 16.00 WIB</p>
<p>Offline venue: Fave Hotel (limited space)</p><br>

<p>Online Link: 
Join Zoom Meeting
https://us02web.zoom.us/j/87926867071?pwd=UEsxNFpYdGRuRG9wZm5VUVhZVnJuUT09
</p>
<p>Meeting ID: 879 2686 7071</p>
<p>Passcode: 203455</p><br>

<p>Speaker: Ricky Ramadhan (CEO Treeta Melinea Modern)</p>
<p>Thank you</p>',
                ],
                'status' => 'published',
                'published_at' => '2021-09-19 00:00:00',
                'meta_description' => [
                    'id' => 'Pelatihan Pemasaran Digital dengan CEO Treeta Melinea Modern, Ricky Ramadhan, untuk UMKM dan akademisi.',
                    'en' => 'Digital Marketing Training with CEO of Treeta Melinea Modern, Ricky Ramadhan, for MSMEs and academics.',
                ],
            ],
            [
                'title' => [
                    'id' => 'Penyuluhan dan Pelatihan Sanitasi & Keamanan Pangan Dokumen ISO 22000-2018',
                    'en' => 'Extension and Training on Sanitation & Food Safety ISO 22000-2018 Documents',
                ],
                'slug' => 'penyuluhan-pelatihan-sanitasi-keamanan-pangan-iso-22000-2021-09-04',
                'excerpt' => [
                    'id' => 'Pembekalan kompetensi SDM perusahaan dalam rangka persiapan sertifikasi ISO 22000:2018 untuk PT. Rumah Makan Deltasari Indah.',
                    'en' => 'Competency development for company HR in preparation for ISO 22000:2018 certification for PT. Rumah Makan Deltasari Indah.',
                ],
                'content' => [
                    'id' => '<p>Untuk pelaksanaan TOR pertama yaitu untuk Mendapatkan Sertifikasi ISO 22000:2018, PT. Rumah Makan Deltasari Indah memerlukan berbagai seri Teknologi Tepat Guna hasil hilirisasi hasil penelitian tim perguruan tinggi yang telah diproduksi oleh bengkel rekayasa bersertifikat ISO, sehingga diversifikasi dan peningkatan kapasitas produksi serta keamanan pangan dapat meningkat, dan dengan mengacu pada TOR kedua, yaitu tentang pemasaran digital. Dari kedua TOR tersebut, diperlukan pendampingan, pelatihan serta keluaran dari program MF, diantaranya:  Pendampingan Desain Alat, Pendampingan Proses serta Peningkatan Kapasitas Produksi & Ujicoba Proses Produksi dengan Mekanisasi, Pendampingan Proses Sertifikasi ISO 22000-2018, Pendampingan Mahasiswa, pelatihan baik dari perguruan tinggi maupun mitra industri, serta untuk melengkapi beberapa luaran dari program MF ini</p>
<p>Maka pada tanggal 4 September 2021 diadakan Penyuluhan dan Pelatihan Sanitasi dan Keamanan Pangan sebagai pembekalan kompetensi SDM perusahaan dalam rangka persiapan sertifikasi ISO 22000:2018, di Fave Hotel Rungkut Surabaya, dengan narasumber Amarisa Satya Putri (Praktisi Keamanan Pangan) yaitu Penerapan GMP di PT. Rumah Makan Deltasari Indah dan Pengembangan Sistem Manajemen Keamanan Pangan berbasis Penerapan HACCP di PT. Rumah Makan Deltasari Indah dengan Tujuan Memperoleh Sertifikat Sistem Manajemen Keamanan Pangan ISO 22000:2018 sebagai pembekalan kompetensi SDM perusahaan dalam Meningkatkan Keamanan dan produksi Produk Olahan PT. Rumah Makan Deltasari Indah dan dipasarkan secara global</p>',
                    'en' => '<p>For the implementation of the first Terms of Reference, namely to obtain ISO 22000:2018 Certification, PT. Rumah Makan Deltasari Indah needs various appropriate technology series resulting from the downstream research of the higher education team that has been produced by ISO-certified engineering workshops, so that diversification and increased production capacity and food safety can increase, and by referring to the second ToR, namely about digital marketing. From both ToR, mentoring, training and outputs from the MF program are needed, including: Tool Design Mentoring, Process Mentoring and Production Capacity Improvement & Production Process Testing with Mechanization, ISO 22000-2018 Certification Process Mentoring, Student Mentoring, training from both higher education and industry partners, as well as to complete several outputs from this MF program</p>
<p>Therefore, on September 4, 2021, Extension and Training on Sanitation and Food Safety was held as competency development for company HR in preparation for ISO 22000:2018 certification, at Fave Hotel Rungkut Surabaya, with speaker Amarisa Satya Putri (Food Safety Practitioner) namely Implementation of GMP at PT. Rumah Makan Deltasari Indah and Development of Food Safety Management System based on HACCP Implementation at PT. Rumah Makan Deltasari Indah with the aim of obtaining ISO 22000:2018 Food Safety Management System Certificate as competency development for company HR in improving safety and production of processed products of PT. Rumah Makan Deltasari Indah and marketed globally</p>',
                ],
                'status' => 'published',
                'published_at' => '2021-09-04 00:00:00',
                'meta_description' => [
                    'id' => 'Penyuluhan dan Pelatihan Sanitasi & Keamanan Pangan Dokumen ISO 22000-2018 untuk PT. Rumah Makan Deltasari Indah dalam persiapan sertifikasi.',
                    'en' => 'Extension and Training on Sanitation & Food Safety ISO 22000-2018 for PT. Rumah Makan Deltasari Indah certification preparation.',
                ],
            ],
            [
                'title' => [
                    'id' => 'Pendampingan Audit BPOM PT. Rumah Makan Deltasari Indah',
                    'en' => 'BPOM Audit Assistance for PT. Rumah Makan Deltasari Indah',
                ],
                'slug' => 'pendampingan-audit-bpom-deltasari-indah-2021-08-12',
                'excerpt' => [
                    'id' => 'Pendampingan audit BPOM untuk mendapatkan izin edar BPOM MD dan Rekomendasi PSB sebagai syarat pendaftaran Pangan Olahan.',
                    'en' => 'BPOM audit assistance to obtain BPOM MD distribution permit and PSB Recommendation as a requirement for processed Food Registration.',
                ],
                'content' => [
                    'id' => 'Dalam mendukung PT Rumah Makan Deltasari Indah untuk memenuhi standar dan persyaratan keamanan dan mutu produk pangan menuju kesiapan mendapatkan izin edar BPOM MD, Tim Matching Fund melakukan pembinaan dan pendampingan. Pada masa pandemi Covid-19, upaya pendampingan tetap dilakukan secara intensif dengan tetap mengacu pada pedoman inspeksi sarana produksi pangan olahan dan penyesuaian skema inspeksi sarana produksi dengan Pandemi Covid-19. Audit BPOM dilaksanakan pada tanggal 12 Agustus 2021 untuk memperoleh Rekomendasi PSB sebagai persyaratan dalam pendaftaran Pendaftaran Pangan Olahan, dengan hasil B',
                    'en' => 'In supporting PT Rumah Makan Deltasari Indah to meet the standards and requirements for safety and quality of food products towards readiness to obtain BPOM MD distribution permit, the Matching Fund Team conducts coaching and assistance. During the Covid-19 pandemic period, assistance efforts continue to be carried out intensively while still referring to the guidelines for inspection of processed food production facilities and adjustments to the production facility inspection scheme with the Covid-19 Pandemic. The BPOM audit was carried out on August 12, 2021 to obtain a PSB Recommendation as a requirement in the registration of processed Food Registration, with a B result',
                ],
                'status' => 'published',
                'published_at' => '2021-08-12 00:00:00',
                'meta_description' => [
                    'id' => 'Pendampingan audit BPOM untuk PT. Rumah Makan Deltasari Indah dalam mendapatkan izin edar BPOM MD.',
                    'en' => 'BPOM audit assistance for PT. Rumah Makan Deltasari Indah in obtaining BPOM MD distribution permit.',
                ],
            ],
            [
                'title' => [
                    'id' => 'Program Pengenalan Sistem Informasi Outbound Bela Negara secara Online',
                    'en' => 'Introduction Program for Outbound National Defense Online Information System',
                ],
                'slug' => 'program-pengenalan-sistem-informasi-outbound-bela-negara-2023-11-01',
                'excerpt' => [
                    'id' => 'Sosialisasi Sistem Informasi Outbound Bela Negara secara Online untuk meningkatkan efektivitas dan efisiensi kegiatan bela negara online.',
                    'en' => 'Socialization of the Outbound National Defense Online Information System to improve effectiveness and efficiency of online national defense activities.',
                ],
                'content' => [
                    'id' => 'Sosialisasi Sistem Informasi Outbound Bela Negara secara Online bertujuan untuk memberikan pemahaman kepada Dosen Bela Negara UPN Veteran Jawa Timur mengenai penggunaan sistem tersebut. Sistem ini dirancang untuk meningkatkan efektivitas dan efisiensi dalam pelaksanaan kegiatan bela negara secara online.

Dalam acara sosialisasi ini, akan dijelaskan secara mendalam mengenai fitur-fitur yang ada dalam Sistem Informasi Outbound Bela Negara secara Online. Dosen Bela Negara akan diberikan panduan langkah demi langkah tentang cara menggunakan sistem, mulai dari pendaftaran, mengakses materi pembelajaran, hingga melaporkan perkembangan peserta.

Sosialisasi juga akan memberikan informasi mengenai manfaat penerapan sistem ini, seperti peningkatan aksesibilitas dan fleksibilitas dalam menjalankan kegiatan bela negara. Dengan adanya sistem ini, diharapkan Dosen Bela Negara dapat lebih mudah mengelola dan memantau perkembangan peserta dalam menjalani pelatihan bela negara secara online.

Pada akhir sesi, Dosen Bela Negara akan diberikan kesempatan untuk bertanya atau memberikan masukan terkait implementasi Sistem Informasi Outbound Bela Negara secara Online. Hal ini bertujuan untuk memastikan bahwa pengguna dapat memahami dan memanfaatkan sistem ini secara optimal dalam mendukung kegiatan bela negara di UPN Veteran Jawa Timur.',
                    'en' => 'The Socialization of the Outbound National Defense Online Information System aims to provide understanding to National Defense Lecturers at UPN Veteran East Java regarding the use of the system. This system is designed to improve effectiveness and efficiency in implementing online national defense activities.

In this socialization event, the features of the Outbound National Defense Online Information System will be explained in depth. National Defense Lecturers will be provided with step-by-step guides on using the system, including how to register, access learning materials, and report participant progress.

The socialization will also provide information about the benefits of implementing this system, such as increased accessibility and flexibility in carrying out national defense activities. With this system, it is expected that National Defense Lecturers can more easily manage and monitor the progress of participants in undergoing online national defense training.

At the end of the session, National Defense Lecturers will be given the opportunity to ask questions or provide input regarding the implementation of the Outbound National Defense Online Information System. This aims to ensure that users can understand and utilize this system optimally in supporting national defense activities at UPN Veteran East Java.',
                ],
                'status' => 'published',
                'published_at' => '2023-11-01 00:00:00',
                'meta_description' => [
                    'id' => 'Sosialisasi Sistem Informasi Outbound Bela Negara secara Online untuk Dosen Bela Negara UPN Veteran Jawa Timur.',
                    'en' => 'Socialization of Outbound National Defense Online Information System for National Defense Lecturers at UPN Veteran East Java.',
                ],
            ],
            [
                'title' => [
                    'id' => 'SOFTWARE APLIKASI E-OBE (OUTCOME BASED EDUCATION)',
                    'en' => 'E-OBE SOFTWARE APPLICATION (OUTCOME-BASED EDUCATION)',
                ],
                'slug' => 'software-aplikasi-e-obe-outcome-based-education-2023-11-01',
                'excerpt' => [
                    'id' => 'Sistem Evaluasi Pembelajaran Terintegrasi dalam ekosistem OBE untuk memfasilitasi pelaksanaan evaluasi berbasis outcome.',
                    'en' => 'Integrated Learning Evaluation System in the OBE ecosystem to facilitate the implementation of outcome-based evaluation.',
                ],
                'content' => [
                    'id' => 'Salah satu pendekatan yang digunakan untuk mengakomodasi pendidikan abad 21 adalah Outcome Based Education (OBE). OBE adalah pendidikan yang fokus pada hasil (outcome), bukan hanya pada materi yang harus diselesaikan. OBE mengukur hasil pembelajaran dan memungkinkan mahasiswa untuk mengembangkan keterampilan baru yang menyiapkan mereka pada level global. OBE adalah pendekatan yang menekankan pada keberlangsungan proses pembelajaran secara inovatif, interaktif, dan efektif. Dan OBE memengaruhi seluruh proses pendidikan dari desain kurikulum; perumusan tujuan dan hasil pembelajaran; strategi pendidikan; desain metode pembelajaran; prosedur penilaian; dan lingkungan/ekosistem pendidikan. Dalam model sistem evaluasi ini, dosen diwajibkan untuk menautkan setiap komponen evaluasi dengan capaian pembelajaran mata kuliah beserta bobotnya. Aspek evaluasi—yang mencakup proyek, tugas, kehadiran dan partisipasi, presentasi paper dalam seminar kelas, ujian tengah semester, dan ujian akhir semester—harus dibuat dalam matriks dengan seluruh capaian pembelajaran mata kuliah (CPMK) dan bobot atau persentase tiap aspek evaluasi juga harus ditentukan. Selain itu dalam model evaluasi baru ini, dosen juga perlu menentukan sub capaian pembelajaran mata kuliah (sub-CPMK) beserta indikatornya dan diformulasikan menggunakan kata kerja tindakan yang terukur, dapat diamati, dan operasional. Tiap indikator dari tiap sub-CPMK juga perlu dirancang dan ditentukan metode penilaiannya serta bobot atau nilai persentasenya. Kesulitan-kesulitan yang dialami dosen dalam mengimplementasikan evaluasi berbasis outcome ini dicoba diatasi dengan menawarkan manajemen evaluasi pembelajaran OBE berbasis sistem, yang diberi nama E-OBE (Sistem Evaluasi Pembelajaran Terintegrasi dalam ekosistem OBE) yang berisi beberapa menu diantaranya Program Studi, Kurikulum, RPS, Statistika, OBE evaluation dan MBKM. 


Untuk implementasi Sistem ini (E-OBE) Silahkan Hubungi IGS 083134387878, E-OBE dapat dilihat di laman web https://obe2.igsindonesia.org/ 	
',
                    'en' => 'One of the approaches used to accommodate 21st century education is Outcome-Based Education (OBE). OBE is education that focuses on outcomes, not just material that must be completed. OBE measures learning outcomes and enables students to develop new skills that prepare them at a global level. OBE is an approach that emphasizes the sustainability of the learning process in an innovative, interactive, and effective manner. And OBE affects the entire educational process from curriculum design; formulation of learning objectives and outcomes; educational strategies; learning method design; assessment procedures; and educational environment/ecosystem. In this evaluation system model, lecturers are required to link each evaluation component with course learning outcomes along with their weights. Evaluation aspects—which include projects, assignments, attendance and participation, paper presentations in class seminars, midterm exams, and final semester exams—must be made into a matrix with all course learning outcomes (CPMK) and the weight or percentage of each evaluation aspect must also be determined. In addition, in this new evaluation model, lecturers also need to determine course learning sub-outcomes (sub-CPMK) along with their indicators and formulated using action verbs that are measurable, observable, and operational. Each indicator of each sub-CPMK also needs to be designed and determined the assessment method and weight or percentage value. The difficulties experienced by lecturers in implementing outcome-based evaluation are tried to be solved by offering system-based OBE learning evaluation management, called E-OBE (Integrated Learning Evaluation System in the OBE ecosystem) containing several menus including Study Program, Curriculum, RPS, Statistics, OBE evaluation and MBKM. 


For implementation of this System (E-OBE) please Contact IGS 083134387878, E-OBE can be seen on the web page https://obe2.igsindonesia.org/ 	
',
                ],
                'status' => 'published',
                'published_at' => '2023-11-01 00:00:00',
                'meta_description' => [
                    'id' => 'E-OBE: Sistem Evaluasi Pembelajaran Terintegrasi berbasis Outcome Based Education untuk memfasilitasi dosen dalam evaluasi pembelajaran.',
                    'en' => 'E-OBE: Integrated Learning Evaluation System based on Outcome-Based Education to facilitate lecturers in learning evaluation.',
                ],
            ],
        ];

        foreach ($blogPosts as $blogPost) {
            $personalInfo->blogPosts()->create($blogPost);
        }
    }
}
