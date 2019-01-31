<?php

use Illuminate\Database\Seeder;

class GenresTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('genres')->delete();

        \DB::table('genres')->insert([
            0 =>
            [
                'id' => 1000001,
                'title' => 'Blues',
                'type' => 3000,
                'disabled' => 0,
            ],
            1 =>
            [
                'id' => 1000002,
                'title' => 'Classic Rock',
                'type' => 3000,
                'disabled' => 0,
            ],
            2 =>
            [
                'id' => 1000003,
                'title' => 'Country',
                'type' => 3000,
                'disabled' => 0,
            ],
            3 =>
            [
                'id' => 1000004,
                'title' => 'Dance',
                'type' => 3000,
                'disabled' => 0,
            ],
            4 =>
            [
                'id' => 1000005,
                'title' => 'Disco',
                'type' => 3000,
                'disabled' => 0,
            ],
            5 =>
            [
                'id' => 1000006,
                'title' => 'Funk',
                'type' => 3000,
                'disabled' => 0,
            ],
            6 =>
            [
                'id' => 1000007,
                'title' => 'Grunge',
                'type' => 3000,
                'disabled' => 0,
            ],
            7 =>
            [
                'id' => 1000008,
                'title' => 'Hip-Hop',
                'type' => 3000,
                'disabled' => 0,
            ],
            8 =>
            [
                'id' => 1000009,
                'title' => 'Jazz',
                'type' => 3000,
                'disabled' => 0,
            ],
            9 =>
            [
                'id' => 1000010,
                'title' => 'Metal',
                'type' => 3000,
                'disabled' => 0,
            ],
            10 =>
            [
                'id' => 1000011,
                'title' => 'New Age',
                'type' => 3000,
                'disabled' => 0,
            ],
            11 =>
            [
                'id' => 1000012,
                'title' => 'Oldies',
                'type' => 3000,
                'disabled' => 0,
            ],
            12 =>
            [
                'id' => 1000013,
                'title' => 'Other',
                'type' => 3000,
                'disabled' => 0,
            ],
            13 =>
            [
                'id' => 1000014,
                'title' => 'Pop',
                'type' => 3000,
                'disabled' => 0,
            ],
            14 =>
            [
                'id' => 1000015,
                'title' => 'R&B',
                'type' => 3000,
                'disabled' => 0,
            ],
            15 =>
            [
                'id' => 1000016,
                'title' => 'Rap',
                'type' => 3000,
                'disabled' => 0,
            ],
            16 =>
            [
                'id' => 1000017,
                'title' => 'Reggae',
                'type' => 3000,
                'disabled' => 0,
            ],
            17 =>
            [
                'id' => 1000018,
                'title' => 'Rock',
                'type' => 3000,
                'disabled' => 0,
            ],
            18 =>
            [
                'id' => 1000019,
                'title' => 'Techno',
                'type' => 3000,
                'disabled' => 0,
            ],
            19 =>
            [
                'id' => 1000020,
                'title' => 'Industrial',
                'type' => 3000,
                'disabled' => 0,
            ],
            20 =>
            [
                'id' => 1000021,
                'title' => 'Alternative',
                'type' => 3000,
                'disabled' => 0,
            ],
            21 =>
            [
                'id' => 1000022,
                'title' => 'Ska',
                'type' => 3000,
                'disabled' => 0,
            ],
            22 =>
            [
                'id' => 1000023,
                'title' => 'Death Metal',
                'type' => 3000,
                'disabled' => 0,
            ],
            23 =>
            [
                'id' => 1000024,
                'title' => 'Pranks',
                'type' => 3000,
                'disabled' => 0,
            ],
            24 =>
            [
                'id' => 1000025,
                'title' => 'Soundtrack',
                'type' => 3000,
                'disabled' => 0,
            ],
            25 =>
            [
                'id' => 1000026,
                'title' => 'Euro-Techno',
                'type' => 3000,
                'disabled' => 0,
            ],
            26 =>
            [
                'id' => 1000027,
                'title' => 'Ambient',
                'type' => 3000,
                'disabled' => 0,
            ],
            27 =>
            [
                'id' => 1000028,
                'title' => 'Trip-Hop',
                'type' => 3000,
                'disabled' => 0,
            ],
            28 =>
            [
                'id' => 1000029,
                'title' => 'Vocal',
                'type' => 3000,
                'disabled' => 0,
            ],
            29 =>
            [
                'id' => 1000030,
                'title' => 'Jazz+Funk',
                'type' => 3000,
                'disabled' => 0,
            ],
            30 =>
            [
                'id' => 1000031,
                'title' => 'Fusion',
                'type' => 3000,
                'disabled' => 0,
            ],
            31 =>
            [
                'id' => 1000032,
                'title' => 'Trance',
                'type' => 3000,
                'disabled' => 0,
            ],
            32 =>
            [
                'id' => 1000033,
                'title' => 'Classical',
                'type' => 3000,
                'disabled' => 0,
            ],
            33 =>
            [
                'id' => 1000034,
                'title' => 'Instrumental',
                'type' => 3000,
                'disabled' => 0,
            ],
            34 =>
            [
                'id' => 1000035,
                'title' => 'Acid',
                'type' => 3000,
                'disabled' => 0,
            ],
            35 =>
            [
                'id' => 1000036,
                'title' => 'House',
                'type' => 3000,
                'disabled' => 0,
            ],
            36 =>
            [
                'id' => 1000037,
                'title' => 'Game',
                'type' => 3000,
                'disabled' => 0,
            ],
            37 =>
            [
                'id' => 1000038,
                'title' => 'Sound Clip',
                'type' => 3000,
                'disabled' => 0,
            ],
            38 =>
            [
                'id' => 1000039,
                'title' => 'Gospel',
                'type' => 3000,
                'disabled' => 0,
            ],
            39 =>
            [
                'id' => 1000040,
                'title' => 'Noise',
                'type' => 3000,
                'disabled' => 0,
            ],
            40 =>
            [
                'id' => 1000041,
                'title' => 'Alternative Rock',
                'type' => 3000,
                'disabled' => 0,
            ],
            41 =>
            [
                'id' => 1000042,
                'title' => 'Bass',
                'type' => 3000,
                'disabled' => 0,
            ],
            42 =>
            [
                'id' => 1000043,
                'title' => 'Soul',
                'type' => 3000,
                'disabled' => 0,
            ],
            43 =>
            [
                'id' => 1000044,
                'title' => 'Punk',
                'type' => 3000,
                'disabled' => 0,
            ],
            44 =>
            [
                'id' => 1000045,
                'title' => 'Space',
                'type' => 3000,
                'disabled' => 0,
            ],
            45 =>
            [
                'id' => 1000046,
                'title' => 'Meditative',
                'type' => 3000,
                'disabled' => 0,
            ],
            46 =>
            [
                'id' => 1000047,
                'title' => 'Instrumental Pop',
                'type' => 3000,
                'disabled' => 0,
            ],
            47 =>
            [
                'id' => 1000048,
                'title' => 'Instrumental Rock',
                'type' => 3000,
                'disabled' => 0,
            ],
            48 =>
            [
                'id' => 1000049,
                'title' => 'Ethnic',
                'type' => 3000,
                'disabled' => 0,
            ],
            49 =>
            [
                'id' => 1000050,
                'title' => 'Gothic',
                'type' => 3000,
                'disabled' => 0,
            ],
            50 =>
            [
                'id' => 1000051,
                'title' => 'Darkwave',
                'type' => 3000,
                'disabled' => 0,
            ],
            51 =>
            [
                'id' => 1000052,
                'title' => 'Techno-Industrial',
                'type' => 3000,
                'disabled' => 0,
            ],
            52 =>
            [
                'id' => 1000053,
                'title' => 'Electronic',
                'type' => 3000,
                'disabled' => 0,
            ],
            53 =>
            [
                'id' => 1000054,
                'title' => 'Pop-Folk',
                'type' => 3000,
                'disabled' => 0,
            ],
            54 =>
            [
                'id' => 1000055,
                'title' => 'Eurodance',
                'type' => 3000,
                'disabled' => 0,
            ],
            55 =>
            [
                'id' => 1000056,
                'title' => 'Dream',
                'type' => 3000,
                'disabled' => 0,
            ],
            56 =>
            [
                'id' => 1000057,
                'title' => 'Southern Rock',
                'type' => 3000,
                'disabled' => 0,
            ],
            57 =>
            [
                'id' => 1000058,
                'title' => 'Comedy',
                'type' => 3000,
                'disabled' => 0,
            ],
            58 =>
            [
                'id' => 1000059,
                'title' => 'Cult',
                'type' => 3000,
                'disabled' => 0,
            ],
            59 =>
            [
                'id' => 1000060,
                'title' => 'Gangsta',
                'type' => 3000,
                'disabled' => 0,
            ],
            60 =>
            [
                'id' => 1000061,
                'title' => 'Top 40',
                'type' => 3000,
                'disabled' => 0,
            ],
            61 =>
            [
                'id' => 1000062,
                'title' => 'Christian Rap',
                'type' => 3000,
                'disabled' => 0,
            ],
            62 =>
            [
                'id' => 1000063,
                'title' => 'Pop/Funk',
                'type' => 3000,
                'disabled' => 0,
            ],
            63 =>
            [
                'id' => 1000064,
                'title' => 'Jungle',
                'type' => 3000,
                'disabled' => 0,
            ],
            64 =>
            [
                'id' => 1000065,
                'title' => 'Native US',
                'type' => 3000,
                'disabled' => 0,
            ],
            65 =>
            [
                'id' => 1000066,
                'title' => 'Cabaret',
                'type' => 3000,
                'disabled' => 0,
            ],
            66 =>
            [
                'id' => 1000067,
                'title' => 'New Wave',
                'type' => 3000,
                'disabled' => 0,
            ],
            67 =>
            [
                'id' => 1000068,
                'title' => 'Psychadelic',
                'type' => 3000,
                'disabled' => 0,
            ],
            68 =>
            [
                'id' => 1000069,
                'title' => 'Rave',
                'type' => 3000,
                'disabled' => 0,
            ],
            69 =>
            [
                'id' => 1000070,
                'title' => 'Showtunes',
                'type' => 3000,
                'disabled' => 0,
            ],
            70 =>
            [
                'id' => 1000071,
                'title' => 'Trailer',
                'type' => 3000,
                'disabled' => 0,
            ],
            71 =>
            [
                'id' => 1000072,
                'title' => 'Lo-Fi',
                'type' => 3000,
                'disabled' => 0,
            ],
            72 =>
            [
                'id' => 1000073,
                'title' => 'Tribal',
                'type' => 3000,
                'disabled' => 0,
            ],
            73 =>
            [
                'id' => 1000074,
                'title' => 'Acid Punk',
                'type' => 3000,
                'disabled' => 0,
            ],
            74 =>
            [
                'id' => 1000075,
                'title' => 'Acid Jazz',
                'type' => 3000,
                'disabled' => 0,
            ],
            75 =>
            [
                'id' => 1000076,
                'title' => 'Polka',
                'type' => 3000,
                'disabled' => 0,
            ],
            76 =>
            [
                'id' => 1000077,
                'title' => 'Retro',
                'type' => 3000,
                'disabled' => 0,
            ],
            77 =>
            [
                'id' => 1000078,
                'title' => 'Musical',
                'type' => 3000,
                'disabled' => 0,
            ],
            78 =>
            [
                'id' => 1000079,
                'title' => 'Rock & Roll',
                'type' => 3000,
                'disabled' => 0,
            ],
            79 =>
            [
                'id' => 1000080,
                'title' => 'Hard Rock',
                'type' => 3000,
                'disabled' => 0,
            ],
            80 =>
            [
                'id' => 1000081,
                'title' => 'Folk',
                'type' => 3000,
                'disabled' => 0,
            ],
            81 =>
            [
                'id' => 1000082,
                'title' => 'Folk-Rock',
                'type' => 3000,
                'disabled' => 0,
            ],
            82 =>
            [
                'id' => 1000083,
                'title' => 'National Folk',
                'type' => 3000,
                'disabled' => 0,
            ],
            83 =>
            [
                'id' => 1000084,
                'title' => 'Swing',
                'type' => 3000,
                'disabled' => 0,
            ],
            84 =>
            [
                'id' => 1000085,
                'title' => 'Fast Fusion',
                'type' => 3000,
                'disabled' => 0,
            ],
            85 =>
            [
                'id' => 1000086,
                'title' => 'Bebob',
                'type' => 3000,
                'disabled' => 0,
            ],
            86 =>
            [
                'id' => 1000087,
                'title' => 'Latin',
                'type' => 3000,
                'disabled' => 0,
            ],
            87 =>
            [
                'id' => 1000088,
                'title' => 'Revival',
                'type' => 3000,
                'disabled' => 0,
            ],
            88 =>
            [
                'id' => 1000089,
                'title' => 'Celtic',
                'type' => 3000,
                'disabled' => 0,
            ],
            89 =>
            [
                'id' => 1000090,
                'title' => 'Bluegrass',
                'type' => 3000,
                'disabled' => 0,
            ],
            90 =>
            [
                'id' => 1000091,
                'title' => 'Avantgarde',
                'type' => 3000,
                'disabled' => 0,
            ],
            91 =>
            [
                'id' => 1000092,
                'title' => 'Gothic Rock',
                'type' => 3000,
                'disabled' => 0,
            ],
            92 =>
            [
                'id' => 1000093,
                'title' => 'Progressive Rock',
                'type' => 3000,
                'disabled' => 0,
            ],
            93 =>
            [
                'id' => 1000094,
                'title' => 'Psychedelic Rock',
                'type' => 3000,
                'disabled' => 0,
            ],
            94 =>
            [
                'id' => 1000095,
                'title' => 'Symphonic Rock',
                'type' => 3000,
                'disabled' => 0,
            ],
            95 =>
            [
                'id' => 1000096,
                'title' => 'Slow Rock',
                'type' => 3000,
                'disabled' => 0,
            ],
            96 =>
            [
                'id' => 1000097,
                'title' => 'Big Band',
                'type' => 3000,
                'disabled' => 0,
            ],
            97 =>
            [
                'id' => 1000098,
                'title' => 'Chorus',
                'type' => 3000,
                'disabled' => 0,
            ],
            98 =>
            [
                'id' => 1000099,
                'title' => 'Easy Listening',
                'type' => 3000,
                'disabled' => 0,
            ],
            99 =>
            [
                'id' => 1000100,
                'title' => 'Acoustic',
                'type' => 3000,
                'disabled' => 0,
            ],
            100 =>
            [
                'id' => 1000101,
                'title' => 'Humour',
                'type' => 3000,
                'disabled' => 0,
            ],
            101 =>
            [
                'id' => 1000102,
                'title' => 'Speech',
                'type' => 3000,
                'disabled' => 0,
            ],
            102 =>
            [
                'id' => 1000103,
                'title' => 'Chanson',
                'type' => 3000,
                'disabled' => 0,
            ],
            103 =>
            [
                'id' => 1000104,
                'title' => 'Opera',
                'type' => 3000,
                'disabled' => 0,
            ],
            104 =>
            [
                'id' => 1000105,
                'title' => 'Chamber Music',
                'type' => 3000,
                'disabled' => 0,
            ],
            105 =>
            [
                'id' => 1000106,
                'title' => 'Sonata',
                'type' => 3000,
                'disabled' => 0,
            ],
            106 =>
            [
                'id' => 1000107,
                'title' => 'Symphony',
                'type' => 3000,
                'disabled' => 0,
            ],
            107 =>
            [
                'id' => 1000108,
                'title' => 'Booty Bass',
                'type' => 3000,
                'disabled' => 0,
            ],
            108 =>
            [
                'id' => 1000109,
                'title' => 'Primus',
                'type' => 3000,
                'disabled' => 0,
            ],
            109 =>
            [
                'id' => 1000110,
                'title' => 'Porn Groove',
                'type' => 3000,
                'disabled' => 0,
            ],
            110 =>
            [
                'id' => 1000111,
                'title' => 'Satire',
                'type' => 3000,
                'disabled' => 0,
            ],
            111 =>
            [
                'id' => 1000112,
                'title' => 'Slow Jam',
                'type' => 3000,
                'disabled' => 0,
            ],
            112 =>
            [
                'id' => 1000113,
                'title' => 'Club',
                'type' => 3000,
                'disabled' => 0,
            ],
            113 =>
            [
                'id' => 1000114,
                'title' => 'Tango',
                'type' => 3000,
                'disabled' => 0,
            ],
            114 =>
            [
                'id' => 1000115,
                'title' => 'Samba',
                'type' => 3000,
                'disabled' => 0,
            ],
            115 =>
            [
                'id' => 1000116,
                'title' => 'Folklore',
                'type' => 3000,
                'disabled' => 0,
            ],
            116 =>
            [
                'id' => 1000117,
                'title' => 'Ballad',
                'type' => 3000,
                'disabled' => 0,
            ],
            117 =>
            [
                'id' => 1000118,
                'title' => 'Power Ballad',
                'type' => 3000,
                'disabled' => 0,
            ],
            118 =>
            [
                'id' => 1000119,
                'title' => 'Rhytmic Soul',
                'type' => 3000,
                'disabled' => 0,
            ],
            119 =>
            [
                'id' => 1000120,
                'title' => 'Freestyle',
                'type' => 3000,
                'disabled' => 0,
            ],
            120 =>
            [
                'id' => 1000121,
                'title' => 'Duet',
                'type' => 3000,
                'disabled' => 0,
            ],
            121 =>
            [
                'id' => 1000122,
                'title' => 'Punk Rock',
                'type' => 3000,
                'disabled' => 0,
            ],
            122 =>
            [
                'id' => 1000123,
                'title' => 'Drum Solo',
                'type' => 3000,
                'disabled' => 0,
            ],
            123 =>
            [
                'id' => 1000124,
                'title' => 'Acapella',
                'type' => 3000,
                'disabled' => 0,
            ],
            124 =>
            [
                'id' => 1000125,
                'title' => 'Euro-House',
                'type' => 3000,
                'disabled' => 0,
            ],
            125 =>
            [
                'id' => 1000126,
                'title' => 'Dance Hall',
                'type' => 3000,
                'disabled' => 0,
            ],
            126 =>
            [
                'id' => 1000127,
                'title' => 'Goa',
                'type' => 3000,
                'disabled' => 0,
            ],
            127 =>
            [
                'id' => 1000128,
                'title' => 'Drum & Bass',
                'type' => 3000,
                'disabled' => 0,
            ],
            128 =>
            [
                'id' => 1000129,
                'title' => 'Club-House',
                'type' => 3000,
                'disabled' => 0,
            ],
            129 =>
            [
                'id' => 1000130,
                'title' => 'Hardcore',
                'type' => 3000,
                'disabled' => 0,
            ],
            130 =>
            [
                'id' => 1000131,
                'title' => 'Terror',
                'type' => 3000,
                'disabled' => 0,
            ],
            131 =>
            [
                'id' => 1000132,
                'title' => 'Indie',
                'type' => 3000,
                'disabled' => 0,
            ],
            132 =>
            [
                'id' => 1000133,
                'title' => 'BritPop',
                'type' => 3000,
                'disabled' => 0,
            ],
            133 =>
            [
                'id' => 1000134,
                'title' => 'Negerpunk',
                'type' => 3000,
                'disabled' => 0,
            ],
            134 =>
            [
                'id' => 1000135,
                'title' => 'Polsk Punk',
                'type' => 3000,
                'disabled' => 0,
            ],
            135 =>
            [
                'id' => 1000136,
                'title' => 'Beat',
                'type' => 3000,
                'disabled' => 0,
            ],
            136 =>
            [
                'id' => 1000137,
                'title' => 'Christian Gangsta',
                'type' => 3000,
                'disabled' => 0,
            ],
            137 =>
            [
                'id' => 1000138,
                'title' => 'Heavy Metal',
                'type' => 3000,
                'disabled' => 0,
            ],
            138 =>
            [
                'id' => 1000139,
                'title' => 'Black Metal',
                'type' => 3000,
                'disabled' => 0,
            ],
            139 =>
            [
                'id' => 1000140,
                'title' => 'Crossover',
                'type' => 3000,
                'disabled' => 0,
            ],
            140 =>
            [
                'id' => 1000141,
                'title' => 'Contemporary C',
                'type' => 3000,
                'disabled' => 0,
            ],
            141 =>
            [
                'id' => 1000142,
                'title' => 'Christian Rock',
                'type' => 3000,
                'disabled' => 0,
            ],
            142 =>
            [
                'id' => 1000143,
                'title' => 'Merengue',
                'type' => 3000,
                'disabled' => 0,
            ],
            143 =>
            [
                'id' => 1000144,
                'title' => 'Salsa',
                'type' => 3000,
                'disabled' => 0,
            ],
            144 =>
            [
                'id' => 1000145,
                'title' => 'Thrash Metal',
                'type' => 3000,
                'disabled' => 0,
            ],
            145 =>
            [
                'id' => 1000146,
                'title' => 'Anime',
                'type' => 3000,
                'disabled' => 0,
            ],
            146 =>
            [
                'id' => 1000147,
                'title' => 'JPop',
                'type' => 3000,
                'disabled' => 0,
            ],
            147 =>
            [
                'id' => 1000148,
                'title' => 'SynthPop',
                'type' => 3000,
                'disabled' => 0,
            ],
            148 =>
            [
                'id' => 1000149,
                'title' => 'Electronica',
                'type' => 3000,
                'disabled' => 0,
            ],
        ]);
    }
}
