<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'family' => 'Иванов',
                'name' => 'Иван',
                'patronymic' => 'Иванович',
                'email' => 'ivanov@mail.ru',
                'login' => 'admin',
                'password' => Hash::make('admin'),
                'role_id' => '0',
            ],
            [
                'family' => 'Иванов',
                'name' => 'Александр',
                'patronymic' => 'Сергеевич',
                'email' => 'alexander_ivanov@yandex.ru',
                'login' => 'ivan_alex',
                'password' => Hash::make('AlexS_Iva1213'),
                'role_id' => '1',
                ],
                [
                'family' => 'Смирнова',
                'name' => 'Елена',
                'patronymic' => 'Владимировна',
                'email' => 'elenasmirnova2005@mail.ru',
                'login' => 'elenasmirnova',
                'password' => Hash::make('ES11_Smirnova'),
                'role_id' => '1',
                ],
                [
                'family' => 'Васильев',
                'name' => 'Константин',
                'patronymic' => 'Николаевич',
                'email' => 'konstantin_vasiliev@mail.ru',
                'login' => 'vasil_konst',
                'password' => Hash::make('KonVasiliev32'),
                'role_id' => '1',
                ],
                [
                'family' => 'Белова',
                'name' => 'Мария',
                'patronymic' => 'Сергеевна',
                'email' => 'maria_belova@gmail.com',
                'login' => 'mbelova',
                'password' => Hash::make('MBelova_07'),
                'role_id' => '1',
                ],
                [
                'family' => 'Морозов',
                'name' => 'Сергей',
                'patronymic' => 'Иванович',
                'email' => 'si_morozov@gmail.com',
                'login' => 'moroz_si',
                'password' => Hash::make('Morozov_IS'),
                'role_id' => '1',
                ],
                [
                'family' => 'Громова',
                'name' => 'Анна',
                'patronymic' => 'Ивановна',
                'email' => 'gromova_anna@yandex.ru',
                'login' => 'annagromova',
                'password' => Hash::make('AGromova_19'),
                'role_id' => '1',
                ],
                [
                'family' => 'Орлова',
                'name' => 'Татьяна',
                'patronymic' => 'Викторовна',
                'email' => 'tatyana_orlova@gmail.com',
                'login' => 'tatiana_orlova',
                'password' => Hash::make('TOrlova_63'),
                'role_id' => '1',
                ],
                [
                'family' => 'Яковлев',
                'name' => 'Борис',
                'patronymic' => 'Сергеевич',
                'email' => 'boris_yakovlev@mail.ru',
                'login' => 'boryak',
                'password' => Hash::make('BYakovlev'),
                'role_id' => '1',
                ],
                [
                'family' => 'Кузнецов',
                'name' => 'Николай',
                'patronymic' => 'Петрович',
                'email' => 'nikolai_kuznetsov@yandex.ru',
                'login' => 'nkuznetsov',
                'password' => Hash::make('NKuznetsov_95'),
                'role_id' => '1',
                ],
                [
                'family' => 'Полякова',
                'name' => 'Александра',
                'patronymic' => 'Евгеньевна',
                'email' => 'aleksandra_polyakova@gmail.com',
                'login' => 'poly_a',
                'password' => Hash::make('APolya_16'),
                'role_id' => '1',
                ],
                [
                'family' => 'Алексеев',
                'name' => 'Роман',
                'patronymic' => 'Геннадьевич',
                'email' => 'roman_alekseev@company.com',
                'login' => 'ralekseev',
                'password' => Hash::make('RAlekseev_68'),
                'role_id' => '1',
                ],
                [
                'family' => 'Борисова',
                'name' => 'Ольга',
                'patronymic' => 'Викторовна',
                'email' => 'borisova_olga@gmail.com',
                'login' => 'oborisova',
                'password' => Hash::make('OBorisova_23'),
                'role_id' => '1',
                ],
                [
                'family' => 'Попов',
                'name' => 'Игорь',
                'patronymic' => 'Сергеевич',
                'email' => 'igor_popov@gmail.com',
                'login' => 'igorp',
                'password' => Hash::make('IPopov_94'),
                'role_id' => '1',
                ],
                [
                'family' => 'Киселёва',
                'name' => 'Екатерина',
                'patronymic' => 'Владимировна',
                'email' => 'ekaterina_kiseleva@mail.ru',
                'login' => 'katya_kiss',
                'password' => Hash::make('EKissKiseleva_01'),
                'role_id' => '1',
                ],
                [
                'family' => 'Егоров',
                'name' => 'Семён',
                'patronymic' => 'Александрович',
                'email' => 'sa_egorov@mail.ru',
                'login' => 'semeg_orov',
                'password' => Hash::make('SAEgorov_56'),
                'role_id' => '1',
                ],
                [
                'family' => 'Акашкин',
                'name' => 'Святослав',
                'patronymic' => 'Алексеевич',
                'email' => 'akash18@gmail.com',
                'login' => 'svatoslav',
                'password' => Hash::make('akasvTR188'),
                'role_id' => '2',
                ],
                [
                'family' => 'Елисеев',
                'name' => 'Кирилл',
                'patronymic' => 'Вячеславович',
                'email' => 'eliseevkir@mail.com',
                'login' => 'kirilll4',
                'password' => Hash::make('apple45tr'),
                'role_id' => '2',
                ],
                [
                'family' => 'Бебишева',
                'name' => 'Валентина',
                'patronymic' => 'Петровна',
                'email' => 'bebishevaval@gmail.com',
                'login' => 'bebval_34',
                'password' => Hash::make('bebval89456'),
                'role_id' => '2',
                ],
                [
                'family' => 'Белов',
                'name' => 'Василий',
                'patronymic' => 'Дмитриевич',
                'email' => 'belov_dm@gmail.com',
                'login' => 'vasjabel',
                'password' => Hash::make('g7d99ds76'),
                'role_id' => '2',
                ],
                [
                'family' => 'Володина',
                'name' => 'Ирина',
                'patronymic' => 'Александровна',
                'email' => 'volod_iriA@gmail.com',
                'login' => 'AI_irina',
                'password' => Hash::make('volodina890'),
                'role_id' => '2',
                ],
                [
                'family' => 'Елисеев',
                'name' => 'Евгений',
                'patronymic' => 'Владимирович',
                'email' => 'eliseevevgen@gmail.com',
                'login' => 'eliseedy',
                'password' => Hash::make('good675TR'),
                'role_id' => '2',
                ],
                [
                'family' => 'Кашаев',
                'name' => 'Роман',
                'patronymic' => 'Сергеевич',
                'email' => 'kashaev_roman@gmail.com',
                'login' => 'romaES',
                'password' => Hash::make('rokash6547'),
                'role_id' => '2',
                ],
                [
                'family' => 'Киселёв',
                'name' => 'Евгений',
                'patronymic' => 'Алексеевич',
                'email' => 'kiselevaleks@gmail.com',
                'login' => 'kiselevEVGEN',
                'password' => Hash::make('evgeniy765'),
                'role_id' => '2',
                ],
                [
                'family' => 'Кинякин',
                'name' => 'Николай',
                'patronymic' => 'Александрович',
                'email' => 'kinjakinnikola@gmail.com',
                'login' => 'MS_nikola',
                'password' => Hash::make('hook56_dum'),
                'role_id' => '2',
                ],
                [
                'family' => 'Лукьянов',
                'name' => 'Андрей',
                'patronymic' => 'Васильевич',
                'email' => 'lykjanov_andr@gmail.com',
                'login' => 'lykjanov_A',
                'password' => Hash::make('andrei7000'),
                'role_id' => '2',
                ],
                [
                'family' => 'Молотков',
                'name' => 'Дмитрий',
                'patronymic' => 'Алексеевич',
                'email' => 'molotkov@gmail.com',
                'login' => 'dima_molot',
                'password' => Hash::make('molotkov_d_98'),
                'role_id' => '2',
                ],
                [
                'family' => 'Москвичев',
                'name' => 'Сергей',
                'patronymic' => 'Андреевич',
                'email' => 'moskvichevSER@gmail.com',
                'login' => 'moskvich',
                'password' => Hash::make('sermos45'),
                'role_id' => '2',
                ],
                [
                'family' => 'Мурзаев',
                'name' => 'Николай',
                'patronymic' => 'Николаевич',
                'email' => 'myrzaevnini@gmail.com',
                'login' => 'NiKol34',
                'password' => Hash::make('nhnhgh5'),
                'role_id' => '2',
                ],
                [
                'family' => 'Нуштаев',
                'name' => 'Эдуард',
                'patronymic' => 'Юрьевич',
                'email' => 'eduardnush@gmail.com',
                'login' => 'edik17',
                'password' => Hash::make('dfjxi56'),
                'role_id' => '2',
                ],
                [
                'family' => 'Панькин',
                'name' => 'Иван',
                'patronymic' => 'Иванович',
                'email' => 'pankinivanP@gmail.com',
                'login' => 'ivaaanPAnkin',
                'password' => Hash::make('fdu_543'),
                'role_id' => '2',
                ],
                [
                'family' => 'Пизелев',
                'name' => 'Николай',
                'patronymic' => 'Александрович',
                'email' => 'piselevNIK@gmail.com',
                'login' => 'kolya',
                'password' => Hash::make('pis758elv'),
                'role_id' => '2',
                ],
                [
                'family' => 'Ромашкин',
                'name' => 'Александр',
                'patronymic' => 'Николаевич',
                'email' => 'romshkinALEX@gmail.com',
                'login' => 'nikolaevich',
                'password' => Hash::make('gfhf676g'),
                'role_id' => '2',
                ],
                [
                'family' => 'Трунькина',
                'name' => 'Екатерина',
                'patronymic' => 'Дмитриевна',
                'email' => 'trynkina@gmail.com',
                'login' => 'ekaterina',
                'password' => Hash::make('katja56tdf'),
                'role_id' => '2',
                ],
                [
                'family' => 'Фролов',
                'name' => 'Илья',
                'patronymic' => 'Дмитриевич',
                'email' => 'ilyafrolov@gmail.com',
                'login' => 'ilya456',
                'password' => Hash::make('ilya_fr7'),
                'role_id' => '2',
                ],
                [
                'family' => 'Шалаев',
                'name' => 'Дмитрий',
                'patronymic' => 'Сергеевич',
                'email' => 'schalaev_dimon@gmail.com',
                'login' => 'shalaevDI',
                'password' => Hash::make('dimas765'),
                'role_id' => '2',
                ],
                [
                'family' => 'Горбунова',
                'name' => 'Мария',
                'patronymic' => 'Александровна',
                'email' => 'gorbynovaMARIA@gmail.com',
                'login' => 'masha_000',
                'password' => Hash::make('masha4786'),
                'role_id' => '2',
                ],
                [
                'family' => 'Ермикина',
                'name' => 'Вероника',
                'patronymic' => 'Андреевна',
                'email' => 'ermikinaVEROn@gmail.com',
                'login' => 'veronikaEr',
                'password' => Hash::make('ermikinaveronika$'),
                'role_id' => '2',
                ],
                [
                'family' => 'Катаева',
                'name' => 'Виктория',
                'patronymic' => 'Сергеевна',
                'email' => 'kataevavika@gmail.com',
                'login' => 'vika_kataeva',
                'password' => Hash::make('viktoria7778'),
                'role_id' => '2',
                ],
                [
                'family' => 'Кирдяшкина',
                'name' => 'Валерия',
                'patronymic' => 'Александровна',
                'email' => 'kirdjashkinaVALERIA@gmail.com',
                'login' => 'lera_kird',
                'password' => Hash::make('kiraR'),
                'role_id' => '2',
                ],
                [
                'family' => 'Ковайкина',
                'name' => 'Василиса',
                'patronymic' => 'Алексеевна',
                'email' => 'kovajkinaVASILISA@gmail.com',
                'login' => 'vasilisaKOV',
                'password' => Hash::make('dym789T'),
                'role_id' => '2',
                ],
                [
                    'family' => 'Медведева',
                    'name' => 'Людмила',
                    'patronymic' => 'Леонидовна',
                    'email' => 'medvedeva@gmail.com',
                    'login' => 'medvedeva',
                    'password' => Hash::make('medvedeva'),
                    'role_id' => '3',
                ],
                [
                    'family' => 'Воронова',
                    'name' => 'Наталья',
                    'patronymic' => 'Петровна',
                    'email' => 'voronova@gmail.com',
                    'login' => 'voronova',
                    'password' => Hash::make('voronova'),
                    'role_id' => '3',
                ],
                [
                    'family' => 'Какаева',
                    'name' => 'Тамара',
                    'patronymic' => 'Матвеевна',
                    'email' => 'kakaeva@gmail.com',
                    'login' => 'kakaeva',
                    'password' => Hash::make('kakaeva'),
                    'role_id' => '3',
                ],
                [
                    'family' => 'Пикаева',
                    'name' => 'Михаил',
                    'patronymic' => 'Михайлович',
                    'email' => 'pikaeva@gmail.com',
                    'login' => 'pikaeva',
                    'password' => Hash::make('pikaeva'),
                    'role_id' => '3',
                ],
                [
                    'family' => 'Арекаева',
                    'name' => 'Юлия',
                    'patronymic' => 'Владимировна',
                    'email' => 'arekaeva@gmail.com',
                    'login' => 'arekaeva',
                    'password' => Hash::make('arekaeva'),
                    'role_id' => '3',
                ],
                [
                    'family' => 'Елисеева',
                    'name' => 'Юлия',
                    'patronymic' => 'Петровна',
                    'email' => 'eliseeva@gmail.com',
                    'login' => 'eliseeva',
                    'password' => Hash::make('eliseeva'),
                    'role_id' => '3',
                ],
                [
                    'family' => 'Дернова',
                    'name' => 'Маргарита',
                    'patronymic' => 'Владимировна',
                    'email' => 'dernova@gmail.com',
                    'login' => 'dernova',
                    'password' => Hash::make('dernova'),
                    'role_id' => '3',
                ],
                [
                    'family' => 'Ермишкина',
                    'name' => 'Ирина',
                    'patronymic' => 'Ивановна',
                    'email' => 'ermishkina@gmail.com',
                    'login' => 'ermishkina',
                    'password' => Hash::make('ermishkina'),
                    'role_id' => '3',
                ],
                [
                    'family' => 'Шекшина',
                    'name' => 'Ольга',
                    'patronymic' => 'Владимировна',
                    'email' => 'shekshina@gmail.com',
                    'login' => 'shekshina',
                    'password' => Hash::make('shekshina'),
                    'role_id' => '3',
                ],
                [
                    'family' => 'Ширяйкина',
                    'name' => 'Валентина',
                    'patronymic' => 'Витальевна',
                    'email' => 'shiraykina@gmail.com',
                    'login' => 'shiraykina',
                    'password' => Hash::make('shiraykina'),
                    'role_id' => '3',
                ],
                [
                    'family' => 'Коняшкина',
                    'name' => 'Людмила',
                    'patronymic' => 'Ивановна',
                    'email' => 'konyashkinal@gmail.com',
                    'login' => 'konyashkinal',
                    'password' => Hash::make('konyashkinal'),
                    'role_id' => '3',
                ],
                [
                    'family' => 'Оркина',
                    'name' => 'Марина',
                    'patronymic' => 'Алексеевна',
                    'email' => 'orkina@gmail.com',
                    'login' => 'orkina',
                    'password' => Hash::make('orkina'),
                    'role_id' => '3',
                ],
                [
                    'family' => 'Селезнев',
                    'name' => 'Пётр',
                    'patronymic' => 'Анатольевич',
                    'email' => 'seleznev@gmail.com',
                    'login' => 'seleznev',
                    'password' => Hash::make('seleznev'),
                    'role_id' => '3',
                ],
                [
                    'family' => 'Таушева',
                    'name' => 'Полина',
                    'patronymic' => 'Михайловна',
                    'email' => 'taysheva@gmail.com',
                    'login' => 'taysheva',
                    'password' => Hash::make('taysheva'),
                    'role_id' => '3',
                ],
                [
                    'family' => 'Андреева',
                    'name' => 'Елена',
                    'patronymic' => 'Генадьевна',
                    'email' => 'andreeva@gmail.com',
                    'login' => 'andreeva',
                    'password' => Hash::make('andreeva'),
                    'role_id' => '3',
                ],
                [
                    'family' => 'Вирясова',
                    'name' => 'Анастасия',
                    'patronymic' => 'Владимировна',
                    'email' => 'viryasova@gmail.com',
                    'login' => 'viryasova',
                    'password' => Hash::make('viryasova'),
                    'role_id' => '3',
                ],
                [
                    'family' => 'Баранова',
                    'name' => 'Наталья',
                    'patronymic' => 'Алексеевна',
                    'email' => 'baranova@gmail.com',
                    'login' => 'baranova',
                    'password' => Hash::make('baranova'),
                    'role_id' => '3',
                ],
                [
                    'family' => 'Бебишева',
                    'name' => 'Валентина',
                    'patronymic' => 'Александровна',
                    'email' => 'bebishevav@gmail.com',
                    'login' => 'bebishevav',
                    'password' => Hash::make('bebishevav'),
                    'role_id' => '3',
                ],
                [
                    'family' => 'Володин',
                    'name' => 'Анатолий',
                    'patronymic' => 'Б',
                    'email' => 'volodin@gmail.com',
                    'login' => 'volodin',
                    'password' => Hash::make('volodin'),
                    'role_id' => '3',
                ],
                [
                    'family' => 'Володина',
                    'name' => 'Наталья',
                    'patronymic' => 'Матвеевна',
                    'email' => 'volodina@gmail.com',
                    'login' => 'volodina',
                    'password' => Hash::make('volodina'),
                    'role_id' => '3',
                ],
                [
                    'family' => 'Кондрашова',
                    'name' => 'Людмила',
                    'patronymic' => 'Генадьевна',
                    'email' => 'kondrashova@gmail.com',
                    'login' => 'kondrashova',
                    'password' => Hash::make('kondrashova'),
                    'role_id' => '3',
                ],
                [
                    'family' => 'Кузнецова',
                    'name' => 'Людмила',
                    'patronymic' => 'Ивановна',
                    'email' => 'kuznecova@gmail.com',
                    'login' => 'kuznecova',
                    'password' => Hash::make('kuznecova'),
                    'role_id' => '3',
                ],
                [
                    'family' => 'Кутуков',
                    'name' => 'Михаил',
                    'patronymic' => 'Александрович',
                    'email' => 'kutukov@gmail.com',
                    'login' => 'kutukov',
                    'password' => Hash::make('kutukov'),
                    'role_id' => '3',
                ],
                [
                    'family' => 'Ласкин',
                    'name' => 'Виталий',
                    'patronymic' => 'Олегович',
                    'email' => 'laskin@gmail.com',
                    'login' => 'laskin',
                    'password' => Hash::make('laskin'),
                    'role_id' => '3',
                ],
                [
                    'family' => 'Лодырев',
                    'name' => 'Александр',
                    'patronymic' => 'Иванович',
                    'email' => 'lodyrev@gmail.com',
                    'login' => 'lodyrev',
                    'password' => Hash::make('lodyrev'),
                    'role_id' => '3',
                ],
                [
                    'family' => 'Моисеева',
                    'name' => 'Галина',
                    'patronymic' => 'Ивановна',
                    'email' => 'moiseeva@gmail.com',
                    'login' => 'moiseeva',
                    'password' => Hash::make('moiseeva'),
                    'role_id' => '3',
                ],
                [
                    'family' => 'Морозюк',
                    'name' => 'Иван',
                    'patronymic' => 'Николаевич',
                    'email' => 'morozyk@gmail.com',
                    'login' => 'morozyk',
                    'password' => Hash::make('morozyk'),
                    'role_id' => '3',
                ],
                [
                    'family' => 'Савина',
                    'name' => 'Наталья',
                    'patronymic' => 'Сергеевна',
                    'email' => 'savina@gmail.com',
                    'login' => 'savina',
                    'password' => Hash::make('savina'),
                    'role_id' => '3',
                ],
                [
                    'family' => 'Шлеина',
                    'name' => 'Наталья',
                    'patronymic' => 'Филипова',
                    'email' => 'shleina@gmail.com',
                    'login' => 'shleina',
                    'password' => Hash::make('shleina'),
                    'role_id' => '3',
                ],
                [
                    'family' => 'Юдина',
                    'name' => 'Галина',
                    'patronymic' => 'Петровна',
                    'email' => 'yudina@gmail.com',
                    'login' => 'yudina',
                    'password' => Hash::make('yudina'),
                    'role_id' => '3',
                ],
                [
                    'family' => 'Трунькин',
                    'name' => 'Александр',
                    'patronymic' => 'Николаевич',
                    'email' => 'trynkin@gmail.com',
                    'login' => 'trynkin',
                    'password' => Hash::make('trynkin'),
                    'role_id' => '3',
                ],
                
        ]);        
    }
}
