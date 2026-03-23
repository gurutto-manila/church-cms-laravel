<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder {
    /**
    * Run the database seeds.
    *
    * @return void
    */

    public function run() {

        factory( App\Models\User::class, 1 )->create( [
            'name'         =>'siteadmin',
            'email'        =>'siteadmin@churchcms.app',
            'mobile_no'    =>'1230456789',
            'usergroup_id' => '1'
        ] )->each ( function( $user ) {
            factory( \App\Models\Userprofile::class, 1 )->create( ['user_id'=>$user->id, 'firstname'=>'siteadmin', 'lastname'=>'siteadmin', 'profession'=>'admin', 'address'=>'Madurai,Tamilnadu,India', 'country_id'=>'7', 'city_id'=>'31', 'state_id'=>'24', 'pincode'=>'625001'] );

        }
    );

    //
    /*DB::table( 'userprofiles' )->insert(
    [
        'church_id'=>'1',
        'usergroup_id'=>'5',
        'name'=>'AlexPop',
        'email'=>'alexpop@church.com',
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
        'mobile_no' =>'7418520963',

    ] );

    DB::table( 'userprofiles' )->insert(
        [
            'church_id'=>'1',
            'usergroup_id'=>'5',
            'ref_id'=>'1',
            'name'=>'AnniePop',
            'email'=>'anniepop@church.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'mobile_no' => '6541230879',

        ] );

        DB::table( 'userprofiles' )->insert(
            [
                'church_id'=>'1',
                'usergroup_id'=>'5',
                'ref_id'=>'1',
                'name'=>'MaxPop',
                'email'=>'maxpop@church.com',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'mobile_no' => '9874561230',

            ] );

            DB::table( 'userprofiles' )->insert(
                [
                    'church_id'=>'1',
                    'usergroup_id'=>'5',
                    'ref_id'=>'1',
                    'name'=>'JenniferPop',
                    'email'=>'jenniferpop@church.com',
                    'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                    'mobile_no' =>'1234567890',

                ] );
                */
            }
        }
