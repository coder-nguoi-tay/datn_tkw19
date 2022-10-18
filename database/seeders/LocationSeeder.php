<?php

namespace Database\Seeders;

use App\Models\location;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        location::query()->truncate();
        $arr = [
            'An Giang',
            'Bà Rịa-Vũng Tàu',
            'Bạc Liêu',
            'Bắc Kạn',
            'Bắc Giang',
            'Bắc Ninh',
            'Bến Tre',
            'Bình Dương',
            'Bình Định',
            'Bình Phước',
            'Bình Thuận',
            'Cà Mau',
            'Cao Bằng',
            'Cần Thơ',
            'Đà Nẵng',
            'Đắk Lắk',
            'Đắk Nông',
            'Điện Biên',
            'Đồng Nai',
            'Đồng Tháp',
            'Gia Lai',
            'Hà Giang',
            'Hà Nam',
            'Hà Nội',
            'Hà Tĩnh',
            'Hải Dương',
            'Hải Phòng',
            'Hòa Bình',
            'Hồ Chí Minh',
            'Hậu Giang',
            'Hưng Yên',
            'Khánh Hòa',
            'Kiên Giang',
            'Kon Tum',
            'Lai Châu',
            'Lào Cai',
            'Lạng Sơn',
            'Lâm Đồng',
            'Long An',
            'Nam Định',
            'Nghệ An',
            'Ninh Bình',
            'Ninh Thuận',
            'Phú Thọ',
            'Phú Yên',
            'Quảng Bình',
            'Quảng Nam',
            'Quảng Ngãi',
            'Quảng Ninh',
            'Quảng Trị',
            'Sóc Trăng',
            'Sơn La',
            'Tây Ninh',
            'Thái Bình',
            'Thái Nguyên',
            'Thanh Hóa',
            'Thừa Thiên – Huế',
            'Tiền Giang',
            'Trà Vinh',
            'Tuyên Quang',
            'Vĩnh Long',
            'Vĩnh Phúc',
            'Yên Bái',
        ];
        foreach ($arr as $value) {
            $system = new location();
            $system->name = $value;
            $system->save();
        }
    }
}
