<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Church;
use App\Models\User;
use App\Models\Userprofile;
use App\Models\Bulletin;
use App\Models\Group;

class ChurchTableSeeder extends Seeder
{
    public function run(): void
    {
        $churchnames = [
            "St. Mary's Cathedral Shrine"
        ];

        $AdminPermissions = [
            "create-members","read-members","update-members",
            "create-events","read-events","update-events",
            "create-files","read-files","view-files",
            "create-bulletins","read-bulletins","view-bulletins",
            "create-gallery","read-gallery","update-gallery",
            "create-groups","read-groups","update-groups","delete-groups",
            "create-videos","read-videos","view-videos",
            "create-funds","read-funds","update-funds","view-funds",
            "create-quotes","read-quotes","update-quotes",
            "create-preachers","read-preachers","update-preachers",
            "read-reports","view-reports",
            "read-payments","create-payments"
        ];

        $PreacherPermissions = [
            "create-sermons",
            "read-sermons",
            "update-sermons",
            "delete-sermons"
        ];

        foreach ($churchnames as $churchname) {

            // Create Church
            $church = Church::factory()->create([
                'name' => strtolower($churchname),
                'slug' => Str::slug($churchname, '-'),
            ]);

            // 1 Church Admin
            $admin = User::factory()->create([
                'email' => 'admin' . $church->id . '@churchcms.app',
                'church_id' => $church->id,
                'usergroup_id' => 3
            ]);

            Userprofile::factory()->create([
                'user_id' => $admin->id,
                'church_id' => $church->id,
                'membership_type' => 'member'
            ]);

            Bulletin::factory()->create([
                'church_id' => $church->id,
                'created_by' => $admin->id
            ]);

            Group::factory()->create([
                'church_id' => $church->id,
                'created_by' => $admin->id
            ]);

            $admin->attachPermissions($AdminPermissions);

            // 2 Sub-admins
            $subAdmins = User::factory(2)->create([
                'church_id' => $church->id,
                'usergroup_id' => 4
            ]);

            foreach ($subAdmins as $subAdmin) {
                Userprofile::factory()->create([
                    'user_id' => $subAdmin->id,
                    'church_id' => $church->id,
                    'membership_type' => 'member'
                ]);
            }

            // 6 Staff
            $staffs = User::factory(6)->create([
                'church_id' => $church->id,
                'usergroup_id' => 4
            ]);

            foreach ($staffs as $staff) {
                Userprofile::factory()->create([
                    'user_id' => $staff->id,
                    'church_id' => $church->id,
                    'membership_type' => 'member'
                ]);
            }

            // 100 Members
            $members = User::factory(100)->create([
                'church_id' => $church->id,
                'usergroup_id' => 5
            ]);

            foreach ($members as $member) {
                Userprofile::factory()->create([
                    'user_id' => $member->id,
                    'church_id' => $church->id
                ]);
            }

            // 3 Preachers
            $preachers = User::factory(3)->create([
                'church_id' => $church->id,
                'usergroup_id' => 6
            ]);

            foreach ($preachers as $preacher) {
                Userprofile::factory()->create([
                    'user_id' => $preacher->id,
                    'church_id' => $church->id
                ]);

                $preacher->attachPermissions($PreacherPermissions);
            }
        }
    }
}