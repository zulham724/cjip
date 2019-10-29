<?php

use App\ProfileInvestor;
use App\UserInvestor;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BKPMSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $investors = [
                [
                    'name' => "YANG YUELU",
                    'perusahaan' => "Shandong Wood and Wood Products Circulation Association",
                ],
                [
                    'name' => "HAN LAIXIANG",
                    'perusahaan' => "Shandong hanyudonglai group han master integrated home",
                ],
                [
                    'name' => "LI YAFENG",
                    'perusahaan' => "Shandong wang jia industrial development group",
                ],
                [
                    'name' => "XU HUICAI",
                    'perusahaan' => "Gaotang xinhua wood industry co. LTD",
                ],
                [
                    'name' => "XU DIANZHONG",
                    'perusahaan' => "Shandong Fuda wood industry co. LTD",
                ],
                [
                    'name' => "WU YONGZHANG",
                    'perusahaan' => "Linyi haoqing wood industry co. LTD",
                ],
                [
                    'name' => "SONG LAIGUANG",
                    'perusahaan' => "Shandong Jiahua Wood Industry Engineering Co., Ltd.",
                ],
                [
                    'name' => "YANG YUDONG",
                    'perusahaan' => "Heze jiuxing wood industry co. LTD",
                ],
                [
                    'name' => "LI YIHUA",
                    'perusahaan' => "Shandong Little Baby Food Co., Ltd.",
                ],
                [
                    'name' => "CHEN JIANDONG",
                    'perusahaan' => "Chiping Sensen Wood Industry Co., Ltd.",
                ],
                [
                    'name' => "HUO HONGLIANG",
                    'perusahaan' => "Shandong Wood Inspection Center",
                ],
                [
                    'name' => "XIAO DI",
                    'perusahaan' => "Shandong Wood Inspection Center",
                ],
                [
                    'name' => "QIAN HUA",
                    'perusahaan' => "Shandong Newspaper",
                ],
                [
                    'name' => "LIU YANHU",
                    'perusahaan' => "Hengjiu furniture",
                ],
                [
                    'name' => "WANG XINGYU",
                    'perusahaan' => "Chiping Xingfa Wood Industry Co., Ltd.",
                ],
                [
                    'name' => "LIU JIACHANG",
                    'perusahaan' => "Dezhou Shenma Material Trade Group",
                ],
                [
                    'name' => "CHEN JIWEI",
                    'perusahaan' => "Shandong Xizhilin Furniture Co., Ltd.",
                ],
                [
                    'name' => "HUA FENG",
                    'perusahaan' => "Jiudian furniture",
                ],
                [
                    'name' => "ZHU XIANGJUN",
                    'perusahaan' => "Nuoya furniture",
                ],
                [
                    'name' => "HE YUSHAN",
                    'perusahaan' => "Zibo Polygrace Group",
                ],
                [
                    'name' => "WANG YUNJUN",
                    'perusahaan' => "Shandong Xindi Home Decoration Co., Ltd.",
                ],
                [
                    'name' => "LI LIANYUN",
                    'perusahaan' => "Shandong Xindi Home Decoration Co., Ltd.",
                ],
                [
                    'name' => "QIN GUANGYONG",
                    'perusahaan' => "Shandong Muya furniture",
                ],
                [
                    'name' => "TONG XINGZHU",
                    'perusahaan' => "Shandong Jinfutong Furnishing",
                ],
                [
                    'name' => "GU ZHENCHAO",
                    'perusahaan' => "Yipin wooden door",
                ],
                [
                    'name' => "LI LANHE",
                    'perusahaan' => "Lai's furniture",
                ],
                [
                    'name' => "CUI XINGMU",
                    'perusahaan' => "Shandong Chenming Group",
                ],
                [
                    'name' => "LIU JIANPING",
                    'perusahaan' => "Shandong Wood and Wood Products Circulation Association",
                ],
                [
                    'name' => "XU BAOCHUAN",
                    'perusahaan' => "Shandong Wood and Wood Products Circulation Association",
                ],
                [
                    'name' => "WANG JIAN",
                    'perusahaan' => "Phoenix home",
                ],
                [
                    'name' => "WU GUIJIE",
                    'perusahaan' => "Phoenix home",
                ],
                [
                    'name' => "ZHU CHANGCHUN",
                    'perusahaan' => "Shandong Qiaoduo Tiangong Furniture Co., Ltd.",
                ],
                [
                    'name' => "GAO JINSHENG",
                    'perusahaan' => "Shandong Ouke Furniture Co., Ltd.",
                ],
                [
                    'name' => "CHEN JIKE",
                    'perusahaan' => "Shandong Dalihua Furniture Co., Ltd.",
                ],
                [
                    'name' => "GAO XIAOTONG",
                    'perusahaan' => "Linyi Futeng Wood Industry Co., Ltd.",
                ],
                [
                    'name' => "YANG AIYU",
                    'perusahaan' => "Shandong Baishengyuan Group Co., Ltd.",
                ],
                [
                    'name' => "KONG DEFENG",
                    'perusahaan' => "Shandong yinhe machinery chemical co. LTD",
                ],
                [
                    'name' => "XU JIANYONG",
                    'perusahaan' => "Shandong Zhongyi Wood Industry Co., Ltd.",
                ],
                [
                    'name' => "WEI HONGQUAN",
                    'perusahaan' => "Yantai Jisi Furniture Group Co., Ltd.",
                ],
                [
                    'name' => "LI JIE",
                    'perusahaan' => "Linyi Changxing Machinery Co., Ltd.",
                ],
                [
                    'name' => "LI JUCHUAN",
                    'perusahaan' => "Shandong Jinruyi Timber Group",
                ],
                [
                    'name' => "SHI SHAOGANG",
                    'perusahaan' => "Shandong Lubei Timber Group",
                ],
                [
                    'name' => "ZHAO PISEN",
                    'perusahaan' => "Holtrop & Jansma (Qingdao) Environment Equipment Co., Ltd.",
                ],
                [
                    'name' => "WANG DAOLIANG",
                    'perusahaan' => "Luli Group LLC",
                ],
                [
                    'name' => "NING JIALI",
                    'perusahaan' => "Chiping Xinda MDF Co., Ltd.",
                ],
                [
                    'name' => "WANG FAN",
                    'perusahaan' => "Shandong Heyou Group Co., Ltd.",
                ],
                [
                    'name' => "WANG XINHUA",
                    'perusahaan' => "Daya home",
                ],
                [
                    'name' => "LI QIZHONG",
                    'perusahaan' => "Shandong Antong Wood Industry Co., Ltd.",
                ],
                [
                    'name' => "WANG SHUANG",
                    'perusahaan' => "Chiping Nengtong MDF Co., Ltd.",
                ],
                [
                    'name' => "LI YUANJIE",
                    'perusahaan' => "Shandong Timber Group",
                ]
            ];

        foreach ($investors as $investor){
            //dd(str_replace( ' ', '.', strtolower($investor)));
            $email_investor = str_replace( ' ', '.', strtolower($investor['name'])). "@cjip.com";
            $user = UserInvestor::create([
                'name' => $investor['name'],
                'email' => $email_investor,
                'password' => bcrypt('cjibf2019'),
                'remember_token' => Str::random(60),
            ]);

            $profil = ProfileInvestor::create([
               'user_id' => $user->id,
               'investor_name' => $user->name,
               'jabatan' => '-',
               'phone' => '-',
               'nama_perusahaan' => $investor['perusahaan'],
               'bidang_usaha' => '-',
               'alamat' => '-',
               'country' => '-',
               'badan_hukum' => 'PT',
            ]);
        }
    }
}
